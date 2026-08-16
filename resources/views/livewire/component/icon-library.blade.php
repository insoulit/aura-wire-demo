<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Icon Library - Aura Wire')] 
class extends Component {
    public string $search = '';
    public int $page = 1;
    public int $perPage = 48;

    public function updatingSearch(): void
    {
        $this->page = 1;
    }

    public function setPage(int $page): void
    {
        $this->page = max(1, min($page, $this->totalPages));
    }

    public function nextPage(): void
    {
        if ($this->page < $this->totalPages) {
            $this->page++;
        }
    }

    public function previousPage(): void
    {
        if ($this->page > 1) {
            $this->page--;
        }
    }

    public function getAllIconsProperty(): array
    {
        return cache()->remember('aura_all_lucide_icons', 86400, function () {
            $factory = app(\BladeUI\Icons\Factory::class);
            $sets = $factory->all();
            $lucideSet = $sets['lucide'] ?? null;
            $paths = $lucideSet['paths'] ?? [];
            
            $icons = [];
            foreach ($paths as $path) {
                $files = glob($path . '/*.svg');
                foreach ($files as $file) {
                    $icons[] = basename($file, '.svg');
                }
            }
            sort($icons);
            return array_unique($icons);
        });
    }

    public function getFilteredIconsProperty(): array
    {
        $all = $this->allIcons;

        if (empty($this->search)) {
            return $all;
        }

        $searchTerm = strtolower(trim($this->search));
        return array_values(array_filter($all, fn($icon) => str_contains($icon, $searchTerm)));
    }

    public function getIconsProperty(): array
    {
        $filtered = $this->filteredIcons;
        $offset = ($this->page - 1) * $this->perPage;
        return array_slice($filtered, $offset, $this->perPage);
    }

    public function getTotalCountProperty(): int
    {
        return count($this->allIcons);
    }

    public function getTotalFilteredCountProperty(): int
    {
        return count($this->filteredIcons);
    }

    public function getTotalPagesProperty(): int
    {
        return (int) ceil(count($this->filteredIcons) / $this->perPage);
    }
};

?>

<div class="w-full max-w-5xl mx-auto space-y-12">
    <!-- Header Page Intro -->
    <x-aura::card>
        <div class="space-y-2 max-w-2xl">
            <div class="flex items-center gap-2.5">
                <x-aura::kicker>Start</x-aura::kicker>
                <x-aura::badge variant="subtle" size="sm">Search &amp; Copy</x-aura::badge>
            </div>
            <x-aura::heading level="1" size="xl">Icon Library</x-aura::heading>
            <x-aura::subheading size="md">
                Browse and search all Lucide SVG icons natively integrated into Aura Wire. Click any icon card to copy its Blade tag syntax instantly.
            </x-aura::subheading>
        </div>
    </x-aura::card>

    <!-- Search & Filter Bar -->
    <x-aura::card>
        <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
            <x-aura::input wire:model.live.debounce.150ms="search" placeholder="Search Lucide icons... (e.g. user, bell, chart, arrow)" icon="search" class="w-full sm:w-96" />
            <div class="flex items-center gap-2 text-xs text-zinc-500 font-mono">
                <span>Page {{ $page }} of {{ max(1, $this->totalPages) }} ({{ number_format($this->totalFilteredCount) }} icons found)</span>
            </div>
        </div>
    </x-aura::card>

    <!-- Interactive Icon Grid Gallery -->
    <x-aura::code title="Icon Explorer (Click to Copy)">
        <x-slot:preview>
            <div class="space-y-8 w-full">
                <!-- Icon Grid -->
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-3.5 w-full">
                    @forelse ($this->icons as $iconName)
                        <div
                            x-data="{ copied: false }"
                            x-on:click="navigator.clipboard.writeText('<x-aura::icon name=\'{{ $iconName }}\' />'); copied = true; setTimeout(() => copied = false, 1500)"
                            class="p-4 rounded-xl bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800/80 hover:border-zinc-400 dark:hover:border-zinc-600 hover:shadow-xs transition-all duration-150 flex flex-col items-center justify-between min-h-[110px] gap-2.5 cursor-pointer group select-none relative"
                            title="Click to copy Blade tag"
                        >
                            <div class="p-2.5 rounded-lg bg-zinc-50 dark:bg-zinc-800/50 group-hover:bg-zinc-100 dark:group-hover:bg-zinc-800 transition-colors">
                                <x-aura::icon :name="$iconName" size="md" />
                            </div>
                            <span class="text-[11px] font-mono text-zinc-600 dark:text-zinc-400 break-all text-center leading-tight max-w-full group-hover:text-zinc-900 dark:group-hover:text-white">
                                {{ $iconName }}
                            </span>
                            
                            <div x-show="copied" x-transition class="absolute inset-0 rounded-xl bg-zinc-900/95 text-white text-[10px] font-bold flex items-center justify-center backdrop-blur-2xs z-10 shadow-lg">
                                Copied Tag!
                            </div>
                        </div>
                    @empty
                        <div class="col-span-full p-12 text-center text-zinc-500 space-y-2">
                            <x-aura::icon name="search-x" size="lg" />
                            <p class="font-medium text-sm">No icons found matching "<span class="font-mono text-zinc-800 dark:text-zinc-200">{{ $search }}</span>"</p>
                            <p class="text-xs text-zinc-400">Try searching for broader terms like <code class="font-mono">user</code>, <code class="font-mono">mail</code>, <code class="font-mono">arrow</code>, or <code class="font-mono">file</code>.</p>
                        </div>
                    @endforelse
                </div>

                <!-- Circular Pagination Bar -->
                @if ($this->totalPages > 1)
                    <div class="flex flex-col sm:flex-row items-center justify-between gap-4 pt-6 border-t border-zinc-200 dark:border-zinc-800/80 w-full">
                        <div class="text-xs sm:text-sm text-zinc-500 dark:text-zinc-400">
                            Showing <span class="font-bold text-zinc-900 dark:text-white">{{ (($page - 1) * $perPage) + 1 }}</span> to <span class="font-bold text-zinc-900 dark:text-white">{{ min($page * $perPage, $this->totalFilteredCount) }}</span> of <span class="font-bold text-zinc-900 dark:text-white">{{ number_format($this->totalFilteredCount) }}</span> icons
                        </div>

                        <div class="flex items-center gap-1.5">
                            {{-- Circular Previous Button --}}
                            <x-aura::icon-button wire:click="previousPage" icon="chevron-left" shape="circle" variant="secondary" size="sm" :disabled="$page <= 1" label="Previous Page" />

                            @php
                                $start = max(1, $page - 2);
                                $end = min($this->totalPages, $page + 2);
                            @endphp

                            @if ($start > 1)
                                <button type="button" wire:click="setPage(1)" class="w-8 h-8 rounded-full text-zinc-600 dark:text-zinc-400 hover:bg-zinc-100 dark:hover:bg-zinc-800 font-medium text-xs flex items-center justify-center transition-all">1</button>
                                @if ($start > 2)
                                    <span class="px-1 text-xs text-zinc-400">...</span>
                                @endif
                            @endif

                            @for ($p = $start; $p <= $end; $p++)
                                @if ($page === $p)
                                    <span class="w-8 h-8 rounded-full bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 font-bold text-xs flex items-center justify-center shadow-xs">
                                        {{ $p }}
                                    </span>
                                @else
                                    <button type="button" wire:click="setPage({{ $p }})" class="w-8 h-8 rounded-full text-zinc-600 dark:text-zinc-400 hover:bg-zinc-100 dark:hover:bg-zinc-800 font-medium text-xs flex items-center justify-center transition-all">
                                        {{ $p }}
                                    </button>
                                @endif
                            @endfor

                            @if ($end < $this->totalPages)
                                @if ($end < $this->totalPages - 1)
                                    <span class="px-1 text-xs text-zinc-400">...</span>
                                @endif
                                <button type="button" wire:click="setPage({{ $this->totalPages }})" class="w-8 h-8 rounded-full text-zinc-600 dark:text-zinc-400 hover:bg-zinc-100 dark:hover:bg-zinc-800 font-medium text-xs flex items-center justify-center transition-all">{{ $this->totalPages }}</button>
                            @endif

                            {{-- Circular Next Button --}}
                            <x-aura::icon-button wire:click="nextPage" icon="chevron-right" shape="circle" variant="secondary" size="sm" :disabled="$page >= $this->totalPages" label="Next Page" />
                        </div>
                    </div>
                @endif
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::icon name="sparkles" size="md" />
<x-aura::icon name="search" size="sm" />
<x-aura::icon name="heart" />
<x-aura::icon name="user" size="lg" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>
</div>

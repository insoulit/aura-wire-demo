<?php

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Volt\Component;

new 
#[Layout('livewire.layout.component')] 
#[Title('Skeleton - Aura Wire')] 
class extends Component {
    public bool $isLoading = true;

    public function toggleLoading(): void
    {
        $this->isLoading = !$this->isLoading;
    }
};

?>

<x-aura::stack gap="10" class="w-full max-w-4xl mx-auto py-2">
    <!-- Header -->
    <x-aura::card>
        <x-aura::stack gap="2" class="max-w-2xl">
            <x-aura::flex align="center" gap="2.5">
                <x-aura::kicker>Display</x-aura::kicker>
                <x-aura::badge variant="subtle" size="sm">Component</x-aura::badge>
            </x-aura::flex>
            <x-aura::heading level="1" size="xl">Skeleton</x-aura::heading>
            <x-aura::subheading size="md">
                Animated pulsing placeholders for text lines, avatars, buttons, cards, and complex layout content during async data fetching.
            </x-aura::subheading>
        </x-aura::stack>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code" >
        <x-slot:codeSlot>@verbatim<x-aura::skeleton variant="text" width="60%" />
<x-aura::skeleton variant="avatar" size="md" />
<x-aura::skeleton variant="button" size="sm" />
<x-aura::skeleton variant="card" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 1. Interactive Skeleton Toggle Demo -->
    <x-aura::code  title="1. Interactive Async Content Loading State">
        <x-slot:preview>
            <div class="w-full max-w-md space-y-4">
                <div class="flex items-center justify-between">
                    <x-aura::text size="xs" variant="subtle" weight="medium">Status: {{ $isLoading ? 'Loading Content...' : 'Data Loaded' }}</x-aura::text>
                    <x-aura::button variant="secondary" size="xs" wire:click="toggleLoading">
                        <x-aura::icon name="refresh-cw" size="xs" />
                        <span>{{ $isLoading ? 'Show Loaded Content' : 'Simulate Loading' }}</span>
                    </x-aura::button>
                </div>

                <x-aura::card>
                    @if ($isLoading)
                        <div class="space-y-4">
                            <div class="flex items-center gap-3.5">
                                <x-aura::skeleton variant="avatar" size="md" />
                                <div class="space-y-2 flex-1 min-w-0">
                                    <div class="w-36"><x-aura::skeleton variant="text" size="md" /></div>
                                    <div class="w-28"><x-aura::skeleton variant="text" size="sm" /></div>
                                </div>
                            </div>
                            <div class="p-4 rounded-xl border border-zinc-200/80 dark:border-zinc-800 space-y-2.5 bg-zinc-50/50 dark:bg-zinc-900/30">
                                <div class="w-44"><x-aura::skeleton variant="text" size="md" /></div>
                                <x-aura::skeleton variant="text" size="sm" />
                            </div>
                            <div class="flex items-center justify-between pt-1">
                                <x-aura::skeleton variant="badge" />
                                <x-aura::skeleton variant="button" size="xs" />
                            </div>
                        </div>
                    @else
                        <div class="space-y-4">
                            <div class="flex items-center gap-3.5">
                                <div class="shrink-0"><x-aura::avatar initials="AK" size="md" /></div>
                                <div class="min-w-0 space-y-0.5">
                                    <x-aura::heading level="3" size="sm">Alex Kovacs</x-aura::heading>
                                    <x-aura::text size="xs" variant="subtle">Senior Product Architect</x-aura::text>
                                </div>
                            </div>
                            <div class="p-4 rounded-xl bg-zinc-100/70 dark:bg-zinc-800/50 border border-zinc-200/60 dark:border-zinc-700/50 space-y-1.5">
                                <x-aura::text size="xs" weight="semibold">Quarterly Analytics Report</x-aura::text>
                                <x-aura::text size="xs" variant="subtle">Real time metrics and revenue performance breakdown across active workspaces.</x-aura::text>
                            </div>
                            <div class="flex items-center justify-between pt-0.5">
                                <x-aura::badge variant="positive" size="sm">Completed</x-aura::badge>
                                <x-aura::button variant="primary" size="xs">
                                    <span>View Report</span>
                                </x-aura::button>
                            </div>
                        </div>
                    @endif
                </x-aura::card>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<div class="space-y-4">
    <div class="flex items-center gap-3.5">
        <x-aura::skeleton variant="avatar" size="md" />
        <div class="space-y-2 flex-1">
            <x-aura::skeleton variant="text" width="60%" />
            <x-aura::skeleton variant="text" width="40%" />
        </div>
    </div>

    <div class="p-4 rounded-xl border border-zinc-200 dark:border-zinc-800 space-y-2.5">
        <x-aura::skeleton variant="text" width="70%" />
        <x-aura::skeleton variant="text" />
    </div>

    <div class="flex items-center justify-between pt-1">
        <x-aura::skeleton variant="badge" />
        <x-aura::skeleton variant="button" size="xs" />
    </div>
</div>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Skeleton Variants -->
    <x-aura::code  title="2. Built in Variant Styles">
        <x-slot:preview>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 w-full max-w-2xl">
                <!-- Text Lines -->
                <div class="p-4 rounded-xl bg-zinc-50 dark:bg-zinc-900/50 border border-zinc-200/80 dark:border-zinc-800 space-y-2.5">
                    <x-aura::text size="xs" weight="bold">Text Variant</x-aura::text>
                    <x-aura::skeleton variant="text" width="100%" />
                    <x-aura::skeleton variant="text" width="80%" />
                    <x-aura::skeleton variant="text" width="60%" />
                </div>

                <!-- Avatar -->
                <div class="p-4 rounded-xl bg-zinc-50 dark:bg-zinc-900/50 border border-zinc-200/80 dark:border-zinc-800 space-y-3">
                    <x-aura::text size="xs" weight="bold">Avatar Variant</x-aura::text>
                    <div class="flex items-center gap-3">
                        <x-aura::skeleton variant="avatar" size="sm" />
                        <x-aura::skeleton variant="avatar" size="md" />
                        <x-aura::skeleton variant="avatar" size="lg" />
                    </div>
                </div>

                <!-- Button -->
                <div class="p-4 rounded-xl bg-zinc-50 dark:bg-zinc-900/50 border border-zinc-200/80 dark:border-zinc-800 space-y-3">
                    <x-aura::text size="xs" weight="bold">Button Variant</x-aura::text>
                    <div class="flex items-center gap-2">
                        <x-aura::skeleton variant="button" size="sm" />
                        <x-aura::skeleton variant="button" size="lg" />
                    </div>
                </div>

                <!-- Card Block -->
                <div class="p-4 rounded-xl bg-zinc-50 dark:bg-zinc-900/50 border border-zinc-200/80 dark:border-zinc-800 space-y-3">
                    <x-aura::text size="xs" weight="bold">Card Variant</x-aura::text>
                    <x-aura::skeleton variant="card" />
                </div>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::skeleton variant="text" width="100%" />
<x-aura::skeleton variant="avatar" size="md" />
<x-aura::skeleton variant="button" size="sm" />
<x-aura::skeleton variant="card" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 3. List & Table Skeleton Loading -->
    <x-aura::code  title="3. List Feed & Table Row Skeletons">
        <x-slot:preview>
            <div class="w-full max-w-xl space-y-3">
                @for ($i = 0; $i < 3; $i++)
                    <div class="p-3.5 rounded-xl bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 flex items-center justify-between gap-4 shadow-2xs">
                        <div class="flex items-center gap-3 min-w-0 flex-1">
                            <x-aura::skeleton variant="avatar" size="sm" />
                            <div class="space-y-1.5 flex-1 min-w-0">
                                <x-aura::skeleton variant="text" width="65%" />
                                <x-aura::skeleton variant="text" width="40%" />
                            </div>
                        </div>
                        <x-aura::skeleton variant="button" size="xs" />
                    </div>
                @endfor
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<div class="space-y-3">
    @for ($i = 0; $i < 3; $i++)
        <div class="p-3.5 rounded-xl border border-zinc-200 flex items-center justify-between gap-4">
            <div class="flex items-center gap-3 flex-1">
                <x-aura::skeleton variant="avatar" size="sm" />
                <div class="space-y-1.5 flex-1">
                    <x-aura::skeleton variant="text" width="65%" />
                    <x-aura::skeleton variant="text" width="40%" />
                </div>
            </div>
            <x-aura::skeleton variant="button" size="xs" />
        </div>
    @endfor
</div>@endverbatim</x-slot:codeSlot>
    </x-aura::code>
</x-aura::stack>

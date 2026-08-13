<?php

use Livewire\Volt\Component;

new class extends Component {
    public function rendering($view)
    {
        $view->layout('livewire.layout.component')->title('Popover - Aura Wire');
    }
};

?>

<div class="w-full max-w-4xl mx-auto space-y-10 flex flex-col items-center justify-center">
    <!-- Header -->
    <x-aura::card >
        <div class="space-y-2 max-w-2xl">
            <div class="flex items-center gap-2.5">
                <x-aura::kicker>Overlay</x-aura::kicker>
                <x-aura::badge variant="subtle" size="sm">Component</x-aura::badge>
            </div>
            <x-aura::heading level="1" size="xl">Popover</x-aura::heading>
            <x-aura::subheading size="md">
                Floating rich content popover panels with click-outside dismissal, flexible alignments, and customizable trigger slots.
            </x-aura::subheading>
        </div>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code" >
        <x-slot:codeSlot>@verbatim<x-aura::popover>
    <x-slot:trigger><x-aura::button>Open Popover</x-aura::button></x-slot:trigger>
    <div class="p-4">Popover Content</div>
</x-aura::popover>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 1. Multiple Popovers Toolbar Example -->
    <x-aura::code  title="1. Multiple Popovers in Action Bar Toolbar">
        <x-slot:preview>
            <div class="w-full flex flex-wrap items-center justify-center gap-3 py-6 pb-48">
                <!-- Popover 1: Filter Options -->
                <x-aura::popover align="left" width="72">
                    <x-slot:trigger>
                        <x-aura::button variant="secondary" size="sm" icon="sliders-horizontal">
                            Filter Results
                        </x-aura::button>
                    </x-slot:trigger>

                    <div class="space-y-3">
                        <div class="flex items-center justify-between border-b border-zinc-100 dark:border-zinc-800 pb-2">
                            <h4 class="text-xs font-bold text-zinc-900 dark:text-white uppercase tracking-wider">Filter Criteria</h4>
                            <x-aura::badge variant="neutral" size="sm">2 Active</x-aura::badge>
                        </div>
                        <div class="space-y-2">
                            <x-aura::checkbox label="In Stock Only" checked />
                            <x-aura::checkbox label="On Sale / Discounted" checked />
                            <x-aura::checkbox label="Free Shipping" />
                        </div>
                        <div class="pt-2 flex justify-end gap-2 border-t border-zinc-100 dark:border-zinc-800">
                            <x-aura::button variant="primary" size="xs">Apply Filters</x-aura::button>
                        </div>
                    </div>
                </x-aura::popover>

                <!-- Popover 2: Sort Order -->
                <x-aura::popover align="center" width="64">
                    <x-slot:trigger>
                        <x-aura::button variant="secondary" size="sm" icon="arrow-up-down">
                            Sort Order
                        </x-aura::button>
                    </x-slot:trigger>

                    <div class="space-y-3">
                        <h4 class="text-xs font-bold text-zinc-900 dark:text-white uppercase tracking-wider border-b border-zinc-100 dark:border-zinc-800 pb-2">Sort By</h4>
                        <x-aura::radio group="sort" name="sort" label="Newest Arrivals" value="newest" checked />
                        <x-aura::radio group="sort" name="sort" label="Price: Low to High" value="price_asc" />
                        <x-aura::radio group="sort" name="sort" label="Price: High to Low" value="price_desc" />
                        <x-aura::radio group="sort" name="sort" label="Highest Rated" value="rating" />
                    </div>
                </x-aura::popover>

                <!-- Popover 3: Quick Export Actions -->
                <x-aura::popover align="right" width="64">
                    <x-slot:trigger>
                        <x-aura::button variant="primary" size="sm" icon="download">
                            Export Data
                        </x-aura::button>
                    </x-slot:trigger>

                    <div class="space-y-2">
                        <h4 class="text-xs font-bold text-zinc-900 dark:text-white uppercase tracking-wider border-b border-zinc-100 dark:border-zinc-800 pb-2">Select Export Format</h4>
                        <x-aura::button variant="secondary" size="xs" class="w-full justify-start" icon="file-spreadsheet">
                            Export as CSV (.csv)
                        </x-aura::button>
                        <x-aura::button variant="secondary" size="xs" class="w-full justify-start" icon="file-text">
                            Export as PDF (.pdf)
                        </x-aura::button>
                        <x-aura::button variant="secondary" size="xs" class="w-full justify-start" icon="code">
                            Export as JSON (.json)
                        </x-aura::button>
                    </div>
                </x-aura::popover>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<div class="flex items-center gap-3">
    <!-- Popover 1: Filter -->
    <x-aura::popover align="left" width="72">
        <x-slot:trigger>
            <x-aura::button variant="secondary" size="sm">Filter Results</x-aura::button>
        </x-slot:trigger>
        <div class="space-y-3">
            <x-aura::checkbox label="In Stock Only" />
            <x-aura::checkbox label="On Sale" />
        </div>
    </x-aura::popover>

    <!-- Popover 2: Sort -->
    <x-aura::popover align="center" width="64">
        <x-slot:trigger>
            <x-aura::button variant="secondary" size="sm">Sort Order</x-aura::button>
        </x-slot:trigger>
        <div class="space-y-2">
            <x-aura::radio label="Newest Arrivals" />
            <x-aura::radio label="Price: Low to High" />
        </div>
    </x-aura::popover>

    <!-- Popover 3: Export -->
    <x-aura::popover align="right" width="64">
        <x-slot:trigger>
            <x-aura::button variant="primary" size="sm">Export Data</x-aura::button>
        </x-slot:trigger>
        <div class="space-y-2">
            <x-aura::button variant="secondary" size="xs" class="w-full">Export CSV</x-aura::button>
        </div>
    </x-aura::popover>
</div>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Alignment Showcase (Left, Center, Right) -->
    <x-aura::code  title="2. Alignment Variations (Left, Center, Right)">
        <x-slot:preview>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 w-full py-6 pb-48 text-center">
                <!-- Left Aligned -->
                <div>
                    <x-aura::popover align="left" width="64">
                        <x-slot:trigger>
                            <x-aura::button variant="secondary" size="sm">Align Left</x-aura::button>
                        </x-slot:trigger>
                        <div class="text-left space-y-1">
                            <h5 class="text-xs font-bold text-zinc-900 dark:text-white">Left Aligned Popover</h5>
                            <p class="text-xs text-zinc-500">Anchored to the left edge of trigger button.</p>
                        </div>
                    </x-aura::popover>
                </div>

                <!-- Center Aligned -->
                <div>
                    <x-aura::popover align="center" width="64">
                        <x-slot:trigger>
                            <x-aura::button variant="secondary" size="sm">Align Center</x-aura::button>
                        </x-slot:trigger>
                        <div class="text-center space-y-1">
                            <h5 class="text-xs font-bold text-zinc-900 dark:text-white">Center Aligned Popover</h5>
                            <p class="text-xs text-zinc-500">Centered directly under trigger button.</p>
                        </div>
                    </x-aura::popover>
                </div>

                <!-- Right Aligned -->
                <div>
                    <x-aura::popover align="right" width="64">
                        <x-slot:trigger>
                            <x-aura::button variant="secondary" size="sm">Align Right</x-aura::button>
                        </x-slot:trigger>
                        <div class="text-right space-y-1">
                            <h5 class="text-xs font-bold text-zinc-900 dark:text-white">Right Aligned Popover</h5>
                            <p class="text-xs text-zinc-500">Anchored to the right edge of trigger button.</p>
                        </div>
                    </x-aura::popover>
                </div>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::popover align="left" width="64">...</x-aura::popover>
<x-aura::popover align="center" width="64">...</x-aura::popover>
<x-aura::popover align="right" width="64">...</x-aura::popover>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 3. User Profile Card Popover -->
    <x-aura::code  title="3. User Avatar Profile Card Popover">
        <x-slot:preview>
            <div class="flex items-center justify-center py-6 pb-48">
                <x-aura::popover align="right" width="80">
                    <x-slot:trigger>
                        <div class="flex items-center gap-3 cursor-pointer p-2 px-3 rounded-lg border border-zinc-200 dark:border-zinc-800 hover:bg-zinc-100 dark:hover:bg-zinc-800/80 transition-colors">
                            <x-aura::avatar initials="JD" status="online" />
                            <div class="text-left">
                                <h4 class="text-xs font-bold text-zinc-900 dark:text-white">Jane Doe</h4>
                                <p class="text-[11px] text-zinc-500">Lead Designer</p>
                            </div>
                        </div>
                    </x-slot:trigger>

                    <div class="space-y-4">
                        <div class="flex items-center gap-3 border-b border-zinc-100 dark:border-zinc-800 pb-3">
                            <x-aura::avatar initials="JD" status="online" />
                            <div class="min-w-0">
                                <h4 class="text-sm font-bold text-zinc-900 dark:text-white truncate">Jane Doe</h4>
                                <p class="text-xs text-zinc-500 truncate">jane.doe@aurawire.dev</p>
                                <div class="mt-1">
                                    <x-aura::badge variant="neutral" size="sm">PRO Plan</x-aura::badge>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-1.5 text-xs text-zinc-600 dark:text-zinc-400">
                            <p><strong>Role:</strong> Senior UX Architect</p>
                            <p><strong>Location:</strong> San Francisco, CA</p>
                        </div>
                        <div class="pt-1 flex gap-2">
                            <x-aura::button variant="primary" size="xs" class="w-full">View Full Profile</x-aura::button>
                            <x-aura::button variant="secondary" size="xs" class="w-full">Message</x-aura::button>
                        </div>
                    </div>
                </x-aura::popover>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::popover align="right" width="80">
    <x-slot:trigger>
        <div class="flex items-center gap-3 cursor-pointer">
            <x-aura::avatar initials="JD" status="online" />
            <span>Jane Doe</span>
        </div>
    </x-slot:trigger>
    <div class="space-y-4">
        <!-- Profile Header & Info -->
        <x-aura::button variant="primary" size="xs" class="w-full">View Full Profile</x-aura::button>
    </div>
</x-aura::popover>@endverbatim</x-slot:codeSlot>
    </x-aura::code>
</div>

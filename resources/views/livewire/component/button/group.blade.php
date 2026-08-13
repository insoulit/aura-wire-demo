<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Button Group - Aura Wire')] 
class extends Component {};

?>

<div class="w-full max-w-4xl mx-auto space-y-10 flex flex-col items-center justify-center">
    <!-- Header -->
    <x-aura::card class="p-6 sm:p-8 bg-white/60 dark:bg-zinc-900/50 backdrop-blur-md shadow-xs w-full">
        <div class="space-y-2 max-w-2xl">
            <div class="flex items-center gap-2.5">
                <x-aura::kicker>Action</x-aura::kicker>
                <x-aura::badge variant="subtle" size="sm">Component</x-aura::badge>
            </div>
            <x-aura::heading level="1" size="xl">Button Group</x-aura::heading>
            <x-aura::subheading size="md">
                Group related buttons into cohesive segmented controls, toolbars, and layout actions with refined, subtle border radius.
            </x-aura::subheading>
        </div>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code" class="w-full">
        <x-slot:codeSlot>@verbatim<x-aura::action.group>
    <x-aura::button variant="subtle">Day</x-aura::button>
    <x-aura::button variant="subtle">Week</x-aura::button>
</x-aura::action.group>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 1. Horizontal Segmented Control -->
    <x-aura::code class="w-full" title="1. Horizontal Segmented Controls">
        <x-slot:preview>
            <div class="flex flex-col items-center gap-6">
                <!-- Default Refined Group -->
                <x-aura::action.group>
                    <x-aura::button variant="primary" size="sm">Day</x-aura::button>
                    <x-aura::button variant="secondary" size="sm">Week</x-aura::button>
                    <x-aura::button variant="secondary" size="sm">Month</x-aura::button>
                    <x-aura::button variant="secondary" size="sm">Year</x-aura::button>
                </x-aura::action.group>

                <!-- Compact Group -->
                <x-aura::action.group shape="compact">
                    <x-aura::button variant="outline" size="sm">List View</x-aura::button>
                    <x-aura::button variant="outline" size="sm">Grid View</x-aura::button>
                    <x-aura::button variant="outline" size="sm">Map View</x-aura::button>
                </x-aura::action.group>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<!-- Default Button Group -->
<x-aura::action.group>
    <x-aura::button variant="primary" size="sm">Day</x-aura::button>
    <x-aura::button variant="secondary" size="sm">Week</x-aura::button>
    <x-aura::button variant="secondary" size="sm">Month</x-aura::button>
    <x-aura::button variant="secondary" size="sm">Year</x-aura::button>
</x-aura::action.group>

<!-- Compact Button Group -->
<x-aura::action.group shape="compact">
    <x-aura::button variant="outline" size="sm">List View</x-aura::button>
    <x-aura::button variant="outline" size="sm">Grid View</x-aura::button>
    <x-aura::button variant="outline" size="sm">Map View</x-aura::button>
</x-aura::action.group>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Rich Icon Toolbar Group -->
    <x-aura::code class="w-full" title="2. Icon Action Toolbar Group">
        <x-slot:preview>
            <div class="flex flex-wrap items-center justify-center gap-4">
                <x-aura::action.group shape="compact">
                    <x-aura::icon-button icon="pencil" variant="secondary" shape="square" size="sm" label="Edit" />
                    <x-aura::icon-button icon="eye" variant="secondary" shape="square" size="sm" label="View" />
                    <x-aura::icon-button icon="share-2" variant="secondary" shape="square" size="sm" label="Share" />
                    <x-aura::icon-button icon="trash-2" variant="danger" shape="square" size="sm" label="Delete" />
                </x-aura::action.group>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::action.group shape="compact">
    <x-aura::icon-button icon="pencil" variant="secondary" shape="square" size="sm" />
    <x-aura::icon-button icon="eye" variant="secondary" shape="square" size="sm" />
    <x-aura::icon-button icon="share-2" variant="secondary" shape="square" size="sm" />
    <x-aura::icon-button icon="trash-2" variant="danger" shape="square" size="sm" />
</x-aura::action.group>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 3. Vertical Button Group -->
    <x-aura::code class="w-full" title="3. Vertical Stacked Button Group">
        <x-slot:preview>
            <div class="flex items-center justify-center py-2">
                <x-aura::action.group vertical shape="compact">
                    <x-aura::button variant="outline" size="sm">Top Priority</x-aura::button>
                    <x-aura::button variant="outline" size="sm">Medium Priority</x-aura::button>
                    <x-aura::button variant="outline" size="sm">Low Priority</x-aura::button>
                </x-aura::action.group>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::action.group vertical shape="compact">
    <x-aura::button variant="outline" size="sm">Top Priority</x-aura::button>
    <x-aura::button variant="outline" size="sm">Medium Priority</x-aura::button>
    <x-aura::button variant="outline" size="sm">Low Priority</x-aura::button>
</x-aura::action.group>@endverbatim</x-slot:codeSlot>
    </x-aura::code>
</div>

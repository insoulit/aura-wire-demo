<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('layouts.components')] 
#[Title('Button Group - Aura Wire')] 
class extends Component {};

?>

<div class="w-full max-w-4xl mx-auto space-y-10 flex flex-col items-center justify-center">
    <!-- Header -->
    <div class="space-y-3 text-center flex flex-col items-center">
        <x-aura::kicker>Action Components</x-aura::kicker>
        <x-aura::heading level="1" size="lg">Button Group</x-aura::heading>
        <x-aura::subheading size="sm" class="max-w-lg">
            Group related buttons into cohesive segmented controls, toolbars, and layout actions with refined, subtle border radius.
        </x-aura::subheading>
        <div class="pt-1">
            <code class="inline-flex items-center px-3.5 py-1.5 rounded-xl text-sm font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-2xs">
                &lt;x-aura::action.group&gt;
            </code>
        </div>
    </div>

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
        <x-slot:codeSlot>&lt;!-- Default Button Group --&gt;
&lt;x-aura::action.group&gt;
    &lt;x-aura::button variant="primary" size="sm"&gt;Day&lt;/x-aura::button&gt;
    &lt;x-aura::button variant="secondary" size="sm"&gt;Week&lt;/x-aura::button&gt;
    &lt;x-aura::button variant="secondary" size="sm"&gt;Month&lt;/x-aura::button&gt;
    &lt;x-aura::button variant="secondary" size="sm"&gt;Year&lt;/x-aura::button&gt;
&lt;/x-aura::action.group&gt;

&lt;!-- Compact Button Group --&gt;
&lt;x-aura::action.group shape="compact"&gt;
    &lt;x-aura::button variant="outline" size="sm"&gt;List View&lt;/x-aura::button&gt;
    &lt;x-aura::button variant="outline" size="sm"&gt;Grid View&lt;/x-aura::button&gt;
    &lt;x-aura::button variant="outline" size="sm"&gt;Map View&lt;/x-aura::button&gt;
&lt;/x-aura::action.group&gt;</x-slot:codeSlot>
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
        <x-slot:codeSlot>&lt;x-aura::action.group shape="compact"&gt;
    &lt;x-aura::icon-button icon="pencil" variant="secondary" shape="square" size="sm" /&gt;
    &lt;x-aura::icon-button icon="eye" variant="secondary" shape="square" size="sm" /&gt;
    &lt;x-aura::icon-button icon="share-2" variant="secondary" shape="square" size="sm" /&gt;
    &lt;x-aura::icon-button icon="trash-2" variant="danger" shape="square" size="sm" /&gt;
&lt;/x-aura::action.group&gt;</x-slot:codeSlot>
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
        <x-slot:codeSlot>&lt;x-aura::action.group vertical shape="compact"&gt;
    &lt;x-aura::button variant="outline" size="sm"&gt;Top Priority&lt;/x-aura::button&gt;
    &lt;x-aura::button variant="outline" size="sm"&gt;Medium Priority&lt;/x-aura::button&gt;
    &lt;x-aura::button variant="outline" size="sm"&gt;Low Priority&lt;/x-aura::button&gt;
&lt;/x-aura::action.group&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>

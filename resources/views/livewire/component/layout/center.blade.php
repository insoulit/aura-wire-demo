<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Center - Aura Wire')] 
class extends Component {};

?>

<div class="w-full max-w-4xl mx-auto space-y-10 flex flex-col items-center justify-center">
    <!-- Header -->
    <x-aura::card>
        <div class="space-y-2 max-w-2xl">
            <div class="flex items-center gap-2.5">
                <x-aura::kicker>Layout</x-aura::kicker>
                <x-aura::badge variant="subtle" size="sm">Component</x-aura::badge>
            </div>
            <x-aura::heading level="1" size="xl">Center</x-aura::heading>
            <x-aura::subheading size="md">
                Layout primitive designed to center child elements along both horizontal and vertical axes effortlessly.
            </x-aura::subheading>
        </div>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">
        <x-slot:codeSlot>@verbatim<x-aura::center gap="3">
    <x-aura::icon name="check" size="sm" />
    <x-aura::text size="sm">Centered Content</x-aura::text>
</x-aura::center>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 1. Centered Content Example -->
    <x-aura::code title="1. Centered Content Box">
        <x-slot:preview>
            <div class="w-full border border-dashed border-zinc-300 dark:border-zinc-700 rounded-xl p-8 bg-zinc-50 dark:bg-zinc-950">
                <x-aura::center gap="3">
                    <x-aura::icon name="check" size="sm" />
                    <x-aura::text size="sm" weight="medium">All changes synchronized</x-aura::text>
                </x-aura::center>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::center gap="3">
    <x-aura::icon name="check" size="sm" />
    <x-aura::text size="sm" weight="medium">All changes synchronized</x-aura::text>
</x-aura::center>@endverbatim</x-slot:codeSlot>
    </x-aura::code>
</div>

<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Stack - Aura Wire')] 
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
            <x-aura::heading level="1" size="xl">Stack</x-aura::heading>
            <x-aura::subheading size="md">
                Vertical or horizontal stack primitive that distributes child elements with consistent spacing.
            </x-aura::subheading>
        </div>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">
        <x-slot:codeSlot>@verbatim<x-aura::stack gap="4">
    <div>First Element</div>
    <div>Second Element</div>
</x-aura::stack>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 1. Vertical Stack Example -->
    <x-aura::code title="1. Vertical Stack with Spacing">
        <x-slot:preview>
            <div class="w-full border border-zinc-200 dark:border-zinc-800 rounded-xl p-5 bg-zinc-50 dark:bg-zinc-950">
                <x-aura::stack gap="3">
                    <x-aura::badge variant="neutral" size="sm">First Layer</x-aura::badge>
                    <x-aura::badge variant="subtle" size="sm">Second Layer</x-aura::badge>
                    <x-aura::badge variant="neutral" size="sm">Third Layer</x-aura::badge>
                </x-aura::stack>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::stack gap="3">
    <x-aura::badge variant="neutral" size="sm">First Layer</x-aura::badge>
    <x-aura::badge variant="subtle" size="sm">Second Layer</x-aura::badge>
    <x-aura::badge variant="neutral" size="sm">Third Layer</x-aura::badge>
</x-aura::stack>@endverbatim</x-slot:codeSlot>
    </x-aura::code>
</div>

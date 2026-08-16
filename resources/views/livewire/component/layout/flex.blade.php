<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Flex - Aura Wire')] 
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
            <x-aura::heading level="1" size="xl">Flex</x-aura::heading>
            <x-aura::subheading size="md">
                Versatile flexbox container for positioning, aligning, and distributing elements across row or column axes.
            </x-aura::subheading>
        </div>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">
        <x-slot:codeSlot>@verbatim<x-aura::flex align="center" justify="between" gap="4">
    <div>Left Content</div>
    <div>Right Content</div>
</x-aura::flex>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 1. Align & Justify Options -->
    <x-aura::code title="1. Alignment & Distribution">
        <x-slot:preview>
            <div class="space-y-4 w-full">
                <div class="border border-zinc-200 dark:border-zinc-800 rounded-xl p-4 bg-zinc-50 dark:bg-zinc-950">
                    <x-aura::flex align="center" justify="between" gap="4">
                        <x-aura::badge variant="neutral" size="sm">Start Item</x-aura::badge>
                        <x-aura::badge variant="subtle" size="sm">Center Item</x-aura::badge>
                        <x-aura::badge variant="neutral" size="sm">End Item</x-aura::badge>
                    </x-aura::flex>
                </div>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::flex align="center" justify="between" gap="4">
    <x-aura::badge variant="neutral" size="sm">Start Item</x-aura::badge>
    <x-aura::badge variant="subtle" size="sm">Center Item</x-aura::badge>
    <x-aura::badge variant="neutral" size="sm">End Item</x-aura::badge>
</x-aura::flex>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Column Direction & Custom Gaps -->
    <x-aura::code title="2. Column Direction with Gap">
        <x-slot:preview>
            <div class="border border-zinc-200 dark:border-zinc-800 rounded-xl p-4 bg-zinc-50 dark:bg-zinc-950 w-full">
                <x-aura::flex direction="col" align="start" gap="2">
                    <x-aura::heading level="3" size="xs">Profile Settings</x-aura::heading>
                    <x-aura::text variant="subtle" size="sm">Manage personal preferences and notification rules.</x-aura::text>
                </x-aura::flex>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::flex direction="col" align="start" gap="2">
    <x-aura::heading level="3" size="xs">Profile Settings</x-aura::heading>
    <x-aura::text variant="subtle" size="sm">Manage personal preferences and notification rules.</x-aura::text>
</x-aura::flex>@endverbatim</x-slot:codeSlot>
    </x-aura::code>
</div>

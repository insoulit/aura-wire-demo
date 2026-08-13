<?php

use function Livewire\Volt\{layout, title};

layout('livewire.layout.component');
title('Main - Aura Wire');

?>

<div class="w-full max-w-3xl mx-auto space-y-6 flex flex-col items-center justify-center">
    <!-- Header -->
    <x-aura::card >
        <div class="space-y-2 max-w-2xl">
            <div class="flex items-center gap-2.5">
                <x-aura::kicker>Layout</x-aura::kicker>
                <x-aura::badge variant="subtle" size="sm">Component</x-aura::badge>
            </div>
            <x-aura::heading level="1" size="xl">Main</x-aura::heading>
            <x-aura::subheading size="md">
                Main container layout area enforcing consistent padding, max-width boundary, and configurable X and Y axis alignment options (defaults to centered).
            </x-aura::subheading>
        </div>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code" >
        <x-slot:codeSlot>@verbatim<x-aura::main alignX="center" alignY="center">Main content</x-aura::main>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 1. Default Centered Alignment -->
    <x-aura::code  title="1. Default Centered Alignment (alignX='center' alignY='center')">
        <x-slot:preview>
            <div class="w-full border border-zinc-200 dark:border-zinc-800 rounded-xl bg-zinc-100 dark:bg-zinc-950 p-4 h-48 flex">
                <x-aura::main alignX="center" alignY="center">
                    <x-aura::text size="sm" class="font-bold">Centered Content (X &amp; Y)</x-aura::text>
                </x-aura::main>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::main alignX="center" alignY="center">
    <x-aura::text size="sm">Centered content...</x-aura::text>
</x-aura::main>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Alignment Options -->
    <x-aura::code  title="2. Custom X and Y Alignments (start, center, end)">
        <x-slot:preview>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 w-full">
                <div class="border border-zinc-200 dark:border-zinc-800 rounded-xl bg-zinc-100 dark:bg-zinc-950 p-4 h-36 flex">
                    <x-aura::main alignX="start" alignY="start" :container="false" class="h-full">
                        <x-aura::badge variant="neutral">alignX="start" alignY="start"</x-aura::badge>
                    </x-aura::main>
                </div>
                <div class="border border-zinc-200 dark:border-zinc-800 rounded-xl bg-zinc-100 dark:bg-zinc-950 p-4 h-36 flex">
                    <x-aura::main alignX="end" alignY="end" :container="false" class="h-full">
                        <x-aura::badge variant="primary">alignX="end" alignY="end"</x-aura::badge>
                    </x-aura::main>
                </div>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<!-- Top Left Alignment -->
<x-aura::main alignX="start" alignY="start"> ... </x-aura::main>

<!-- Bottom Right Alignment -->
<x-aura::main alignX="end" alignY="end"> ... </x-aura::main>@endverbatim</x-slot:codeSlot>
    </x-aura::code>
</div>

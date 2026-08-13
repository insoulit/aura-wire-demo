<?php

use function Livewire\Volt\{layout, title};

layout('livewire.layout.component');
title('Container - Aura Wire');

?>

<div class="w-full max-w-4xl mx-auto space-y-10 flex flex-col items-center justify-center">
    <!-- Header -->
    <x-aura::card>
        <div class="space-y-2 max-w-2xl">
            <div class="flex items-center gap-2.5">
                <x-aura::kicker>Layout</x-aura::kicker>
                <x-aura::badge variant="subtle" size="sm">Component</x-aura::badge>
            </div>
            <x-aura::heading level="1" size="xl">Container</x-aura::heading>
            <x-aura::subheading size="md">
                Responsive max-width container wrapper enforcing consistent horizontal padding and center alignment across screen sizes.
            </x-aura::subheading>
        </div>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code" >
        <x-slot:codeSlot>@verbatim<x-aura::container size="7xl" class="py-8">Page content</x-aura::container>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 1. Default Container (7xl) -->
    <x-aura::code  title="1. Default Container (size='7xl')">
        <x-slot:preview>
            <div class="w-full border border-zinc-200 dark:border-zinc-800 rounded-xl bg-zinc-100 dark:bg-zinc-950 p-4">
                <x-aura::container size="sm" class="bg-white dark:bg-zinc-900 rounded-lg p-4 border border-zinc-200 dark:border-zinc-800 text-center">
                    <x-aura::text size="sm" >Container Content (sm size)</x-aura::text>
                </x-aura::container>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::container size="7xl">
    <x-aura::text size="sm">Centered page content...</x-aura::text>
</x-aura::container>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Container Sizes -->
    <x-aura::code  title="2. Custom Container Sizes (sm to 7xl)">
        <x-slot:preview>
            <div class="space-y-4 w-full">
                <x-aura::container size="md" class="bg-zinc-100 dark:bg-zinc-900 rounded-lg p-3 border border-zinc-200 dark:border-zinc-800 text-center">
                    <x-aura::text size="xs">size="md" (max-w-md)</x-aura::text>
                </x-aura::container>
                <x-aura::container size="xl" class="bg-zinc-100 dark:bg-zinc-900 rounded-lg p-3 border border-zinc-200 dark:border-zinc-800 text-center">
                    <x-aura::text size="xs">size="xl" (max-w-xl)</x-aura::text>
                </x-aura::container>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::container size="md"> ... </x-aura::container>
<x-aura::container size="xl"> ... </x-aura::container>@endverbatim</x-slot:codeSlot>
    </x-aura::code>
</div>

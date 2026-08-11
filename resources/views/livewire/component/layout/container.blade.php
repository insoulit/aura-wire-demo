<?php

use function Livewire\Volt\{layout, title};

layout('livewire.layout.component');
title('Container - Aura Wire');

?>

<div class="w-full max-w-3xl mx-auto space-y-6 flex flex-col items-center justify-center">
    <div class="space-y-3 text-center flex flex-col items-center">
        <x-aura::kicker>Layout</x-aura::kicker>
        <x-aura::heading level="1" size="lg">Container</x-aura::heading>
        <x-aura::subheading size="sm" class="max-w-xl">
            Responsive max-width container wrapper enforcing consistent horizontal padding and center alignment across screen sizes.
        </x-aura::subheading>
        <div class="pt-1">
            <code class="inline-flex items-center px-3.5 py-1.5 rounded-xl text-sm font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-2xs">
                &lt;x-aura::container&gt;
            </code>
        </div>
    </div>

    <!-- 1. Default Container (7xl) -->
    <x-aura::code class="w-full" title="1. Default Container (size='7xl')">
        <x-slot:preview>
            <div class="w-full border border-zinc-200 dark:border-zinc-800 rounded-xl bg-zinc-100 dark:bg-zinc-950 p-4">
                <x-aura::container size="sm" class="bg-white dark:bg-zinc-900 rounded-lg p-4 border border-zinc-200 dark:border-zinc-800 text-center">
                    <x-aura::text size="sm" class="font-bold">Container Content (sm size)</x-aura::text>
                </x-aura::container>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::container size="7xl"&gt;
    &lt;x-aura::text size="sm"&gt;Centered page content...&lt;/x-aura::text&gt;
&lt;/x-aura::container&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Container Sizes -->
    <x-aura::code class="w-full" title="2. Custom Container Sizes (sm to 7xl)">
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
        <x-slot:codeSlot>&lt;x-aura::container size="md"&gt; ... &lt;/x-aura::container&gt;
&lt;x-aura::container size="xl"&gt; ... &lt;/x-aura::container&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>

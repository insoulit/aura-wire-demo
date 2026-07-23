<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Heading Component — Aura Wire');

?>

<div class="w-full space-y-10">
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <h1 class="text-3xl font-extrabold text-zinc-900 dark:text-white tracking-tight">Heading Component</h1>
        <p class="text-sm text-zinc-600 dark:text-zinc-400 mt-1">
            <code class="text-indigo-600 dark:text-indigo-400 font-mono">&lt;x-aura::heading&gt;</code>
        </p>
    </div>

    <!-- Levels & Sizes -->
    <section class="space-y-4">
        <h2 class="text-xl font-bold text-zinc-900 dark:text-white">Heading Levels & Display Sizes</h2>
        <x-aura::code title="Heading Levels">
            <x-slot:preview>
                <div class="space-y-4 w-full">
                    <x-aura::heading level="1" size="display-lg">Display Large Heading</x-aura::heading>
                    <x-aura::heading level="1" size="xl">Level 1 (XL) Heading</x-aura::heading>
                    <x-aura::heading level="2" size="lg">Level 2 (LG) Heading</x-aura::heading>
                    <x-aura::heading level="3" size="md">Level 3 (MD) Heading</x-aura::heading>
                    <x-aura::heading level="4" size="sm">Level 4 (SM) Heading</x-aura::heading>
                    <x-aura::heading level="5" size="xs">Level 5 (XS) Heading</x-aura::heading>
                </div>
            </x-slot:preview>
            <x-slot:codeSlot>&lt;x-aura::heading level="1" size="display-lg"&gt;Display Large Heading&lt;/x-aura::heading&gt;
&lt;x-aura::heading level="1" size="xl"&gt;Level 1 Heading&lt;/x-aura::heading&gt;
&lt;x-aura::heading level="2" size="lg"&gt;Level 2 Heading&lt;/x-aura::heading&gt;
&lt;x-aura::heading level="3" size="md"&gt;Level 3 Heading&lt;/x-aura::heading&gt;</x-slot:codeSlot>
        </x-aura::code>
    </section>
</div>

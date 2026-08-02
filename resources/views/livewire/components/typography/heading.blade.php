<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Heading — Aura Wire');

?>

<div class="w-full max-w-3xl mx-auto space-y-6 flex flex-col items-center justify-center">
    <div class="space-y-2 text-center flex flex-col items-center">
        <x-aura::heading level="1" size="md">Heading</x-aura::heading>
        <code class="inline-flex items-center px-3.5 py-1.5 mt-3 rounded-xl text-base sm:text-lg font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-sm">&lt;x-aura::heading&gt;</code>
    </div>

    <!-- Levels & Sizes -->
    <x-aura::code class="w-full" title="Heading Levels">
        <x-slot:preview>
            <div class="space-y-3 w-full">
                <x-aura::heading level="1" size="display-lg">Display Large Heading</x-aura::heading>
                <x-aura::heading level="1" size="md">Level 1 (XL) Heading</x-aura::heading>
                <x-aura::heading level="2" size="sm">Level 2 (LG) Heading</x-aura::heading>
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
</div>

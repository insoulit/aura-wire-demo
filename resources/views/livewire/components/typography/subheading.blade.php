<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Subheading Component — Aura Wire');

?>

<div class="w-full space-y-10">
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <h1 class="text-3xl font-extrabold text-zinc-900 dark:text-white tracking-tight">Subheading Component</h1>
        <p class="text-sm text-zinc-600 dark:text-zinc-400 mt-1">
            <code class="text-indigo-600 dark:text-indigo-400 font-mono">&lt;x-aura::subheading&gt;</code>
        </p>
    </div>

    <x-aura::code title="Subheading Component">
        <x-slot:preview>
            <div class="space-y-2">
                <x-aura::heading level="2">Dashboard Overview</x-aura::heading>
                <x-aura::subheading>Monitor your key metrics and active project statistics in real time.</x-aura::subheading>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::heading level="2"&gt;Dashboard Overview&lt;/x-aura::heading&gt;
&lt;x-aura::subheading&gt;Monitor your key metrics and active project statistics in real time.&lt;/x-aura::subheading&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>

<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Kicker Component — Aura Wire');

?>

<div class="w-full space-y-10">
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <h1 class="text-3xl font-extrabold text-zinc-900 dark:text-white tracking-tight">Kicker Component</h1>
        <p class="text-sm text-zinc-600 dark:text-zinc-400 mt-1">
            <code class="text-indigo-600 dark:text-indigo-400 font-mono">&lt;x-aura::kicker&gt;</code>
        </p>
    </div>

    <x-aura::code title="Kicker Component">
        <x-slot:preview>
            <div class="space-y-1">
                <x-aura::kicker>FEATURED PACKAGE</x-aura::kicker>
                <x-aura::heading level="2">Aura Wire Design System</x-aura::heading>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::kicker&gt;FEATURED PACKAGE&lt;/x-aura::kicker&gt;
&lt;x-aura::heading level="2"&gt;Aura Wire Design System&lt;/x-aura::heading&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>

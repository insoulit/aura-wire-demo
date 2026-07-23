<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Main Component — Aura Wire');

?>

<div class="w-full space-y-10">
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <h1 class="text-3xl font-extrabold text-zinc-900 dark:text-white tracking-tight">Main Component</h1>
        <p class="text-sm text-zinc-600 dark:text-zinc-400 mt-1">
            <code class="text-indigo-600 dark:text-indigo-400 font-mono">&lt;x-aura::main&gt;</code>
        </p>
    </div>

    <x-aura::code title="Main Content Wrapper">
        <x-slot:preview>
            <div class="w-full bg-zinc-100 dark:bg-zinc-900 p-4 rounded-xl">
                <x-aura::main :hasSidebar="false">
                    <p class="text-sm text-zinc-700 dark:text-zinc-300">
                        The <code class="font-mono text-indigo-500">&lt;x-aura::main&gt;</code> component automatically applies proper responsive padding and sidebar margin offsets.
                    </p>
                </x-aura::main>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::main :hasSidebar="true"&gt;
    &lt;h1&gt;Dashboard Content&lt;/h1&gt;
&lt;/x-aura::main&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>

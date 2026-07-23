<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Separator Component — Aura Wire');

?>

<div class="w-full space-y-10">
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <h1 class="text-3xl font-extrabold text-zinc-900 dark:text-white tracking-tight">Separator Component</h1>
        <p class="text-sm text-zinc-600 dark:text-zinc-400 mt-1"><code class="text-indigo-600 dark:text-indigo-400 font-mono">&lt;x-aura::separator&gt;</code></p>
    </div>
    <x-aura::code title="Divider Separator">
        <x-slot:preview>
            <div class="w-full max-w-lg space-y-3">
                <p class="text-sm text-zinc-600 dark:text-zinc-300">Top Content Section</p>
                <x-aura::separator label="OR" />
                <p class="text-sm text-zinc-600 dark:text-zinc-300">Bottom Content Section</p>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;p&gt;Top Content Section&lt;/p&gt;
&lt;x-aura::separator label="OR" /&gt;
&lt;p&gt;Bottom Content Section&lt;/p&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>

<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Badge Component — Aura Wire');

?>

<div class="w-full space-y-10">
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <h1 class="text-3xl font-extrabold text-zinc-900 dark:text-white tracking-tight">Badge Component</h1>
        <p class="text-sm text-zinc-600 dark:text-zinc-400 mt-1"><code class="text-indigo-600 dark:text-indigo-400 font-mono">&lt;x-aura::badge&gt;</code></p>
    </div>
    <div class="p-6 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 space-y-6 shadow-sm">
        <div class="flex flex-wrap items-center gap-3">
            <x-aura::badge variant="neutral">Neutral</x-aura::badge>
            <x-aura::badge variant="subtle">Subtle</x-aura::badge>
            <x-aura::badge variant="positive">Active</x-aura::badge>
            <x-aura::badge variant="warning">Warning</x-aura::badge>
            <x-aura::badge variant="negative">Danger</x-aura::badge>
            <x-aura::badge variant="info">Info</x-aura::badge>
        </div>
        <pre class="text-[11px] font-mono p-3 rounded-xl bg-zinc-100 dark:bg-zinc-950 text-zinc-800 dark:text-zinc-300"><code>&lt;x-aura::badge variant="positive"&gt;Active&lt;/x-aura::badge&gt;</code></pre>
    </div>
</div>

<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Navbar Component — Aura Wire');

?>

<div class="w-full space-y-10">
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <h1 class="text-3xl font-extrabold text-zinc-900 dark:text-white tracking-tight">Navbar Component</h1>
        <p class="text-sm text-zinc-600 dark:text-zinc-400 mt-1"><code class="text-indigo-600 dark:text-indigo-400 font-mono">&lt;x-aura::navbar&gt;</code></p>
    </div>
    <div class="p-6 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 space-y-6 shadow-sm">
        <x-aura::navbar brand="Aura App">
            <a href="#" class="text-sm font-medium hover:text-indigo-500">Home</a>
            <a href="#" class="text-sm font-medium hover:text-indigo-500">Features</a>
        </x-aura::navbar>
        <pre class="text-[11px] font-mono p-3 rounded-xl bg-zinc-100 dark:bg-zinc-950 text-zinc-800 dark:text-zinc-300"><code>&lt;x-aura::navbar brand="Aura App"&gt;...&lt;/x-aura::navbar&gt;</code></pre>
    </div>
</div>

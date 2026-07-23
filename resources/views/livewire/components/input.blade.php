<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Input Component — Aura Wire');

?>

<div class="w-full space-y-10">
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-violet-500/10 border border-violet-500/20 text-violet-600 dark:text-violet-400 text-xs font-semibold uppercase tracking-wider mb-2">
            Form Component
        </div>
        <h1 class="text-3xl font-extrabold text-zinc-900 dark:text-white tracking-tight">Input Component</h1>
        <p class="text-sm text-zinc-600 dark:text-zinc-400 mt-1">
            <code class="text-indigo-600 dark:text-indigo-400 font-mono">&lt;x-aura::input&gt;</code>
        </p>
    </div>

    <section class="space-y-4">
        <h2 class="text-xl font-bold text-zinc-900 dark:text-white">Text Inputs</h2>
        <div class="p-6 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 space-y-6 shadow-sm">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 max-w-2xl">
                <div class="space-y-1">
                    <x-aura::label>Standard Input</x-aura::label>
                    <x-aura::input placeholder="Type something..." />
                </div>
                <div class="space-y-1">
                    <x-aura::label>With Search Icon</x-aura::label>
                    <x-aura::input placeholder="Search users...">
                        <x-slot:icon>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                        </x-slot:icon>
                    </x-aura::input>
                </div>
            </div>
            <pre class="text-[11px] font-mono p-3 rounded-xl bg-zinc-100 dark:bg-zinc-950 text-zinc-800 dark:text-zinc-300 overflow-x-auto"><code>&lt;x-aura::input placeholder="Search..."&gt;
    &lt;x-slot:icon&gt; &lt;svg ... /&gt; &lt;/x-slot:icon&gt;
&lt;/x-aura::input&gt;</code></pre>
        </div>
    </section>
</div>

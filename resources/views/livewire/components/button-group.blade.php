<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Button Group Component — Aura Wire');

?>

<div class="w-full space-y-10">
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-indigo-500/10 border border-indigo-500/20 text-indigo-600 dark:text-indigo-400 text-xs font-semibold uppercase tracking-wider mb-2">
            Action Component
        </div>
        <h1 class="text-3xl font-extrabold text-zinc-900 dark:text-white tracking-tight">Button Group Component</h1>
        <p class="text-sm text-zinc-600 dark:text-zinc-400 mt-1">
            <code class="text-indigo-600 dark:text-indigo-400 font-mono">&lt;x-aura::button.group&gt;</code>
        </p>
    </div>

    <section class="space-y-4">
        <h2 class="text-xl font-bold text-zinc-900 dark:text-white">Group Layouts</h2>
        <div class="p-6 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 space-y-6 shadow-sm">
            <div class="flex flex-wrap items-center gap-8">
                <div>
                    <span class="text-xs font-semibold text-zinc-500 uppercase tracking-wider block mb-2">Horizontal</span>
                    <x-aura::button.group>
                        <x-aura::button variant="secondary">Years</x-aura::button>
                        <x-aura::button variant="secondary">Months</x-aura::button>
                        <x-aura::button variant="secondary">Days</x-aura::button>
                    </x-aura::button.group>
                </div>
                <div>
                    <span class="text-xs font-semibold text-zinc-500 uppercase tracking-wider block mb-2">Vertical</span>
                    <x-aura::button.group vertical>
                        <x-aura::button variant="outline" size="sm">Top</x-aura::button>
                        <x-aura::button variant="outline" size="sm">Bottom</x-aura::button>
                    </x-aura::button.group>
                </div>
            </div>
            <pre class="text-[11px] font-mono p-3 rounded-xl bg-zinc-100 dark:bg-zinc-950 text-zinc-800 dark:text-zinc-300 overflow-x-auto"><code>&lt;x-aura::button.group&gt;
    &lt;x-aura::button variant="secondary"&gt;Years&lt;/x-aura::button&gt;
    &lt;x-aura::button variant="secondary"&gt;Months&lt;/x-aura::button&gt;
&lt;/x-aura::button.group&gt;</code></pre>
        </div>
    </section>
</div>

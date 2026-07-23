<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Component Directory — Aura Wire');

?>

<div class="w-full space-y-10">
    <!-- Header Banner -->
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-indigo-500/10 border border-indigo-500/20 text-indigo-600 dark:text-indigo-400 text-xs font-semibold uppercase tracking-wider mb-2">
            📦 insoulit/aura-wire Component Suite
        </div>
        <h1 class="text-3xl font-extrabold text-zinc-900 dark:text-white tracking-tight">Component Directory</h1>
        <p class="text-sm text-zinc-600 dark:text-zinc-400 mt-1">
            Browse through individual standalone documentation pages for every component registered by Aura Wire.
        </p>
    </div>

    <!-- 21 Component Cards Directory Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        <a href="/components/button" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-indigo-500/50 hover:shadow-lg transition-all shadow-sm flex flex-col justify-between">
            <div>
                <h3 class="font-bold text-zinc-900 dark:text-white text-base">Button</h3>
                <p class="text-xs text-zinc-500 mt-1"><code class="font-mono text-indigo-500">&lt;x-aura::button&gt;</code></p>
            </div>
            <span class="text-xs font-semibold text-indigo-600 dark:text-indigo-400 mt-4 block">View Component &rarr;</span>
        </a>

        <a href="/components/button-group" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-indigo-500/50 hover:shadow-lg transition-all shadow-sm flex flex-col justify-between">
            <div>
                <h3 class="font-bold text-zinc-900 dark:text-white text-base">Button Group</h3>
                <p class="text-xs text-zinc-500 mt-1"><code class="font-mono text-indigo-500">&lt;x-aura::button.group&gt;</code></p>
            </div>
            <span class="text-xs font-semibold text-indigo-600 dark:text-indigo-400 mt-4 block">View Component &rarr;</span>
        </a>

        <a href="/components/input" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-violet-500/50 hover:shadow-lg transition-all shadow-sm flex flex-col justify-between">
            <div>
                <h3 class="font-bold text-zinc-900 dark:text-white text-base">Input</h3>
                <p class="text-xs text-zinc-500 mt-1"><code class="font-mono text-violet-500">&lt;x-aura::input&gt;</code></p>
            </div>
            <span class="text-xs font-semibold text-violet-600 dark:text-violet-400 mt-4 block">View Component &rarr;</span>
        </a>

        <a href="/components/textarea" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-violet-500/50 hover:shadow-lg transition-all shadow-sm flex flex-col justify-between">
            <div>
                <h3 class="font-bold text-zinc-900 dark:text-white text-base">Textarea</h3>
                <p class="text-xs text-zinc-500 mt-1"><code class="font-mono text-violet-500">&lt;x-aura::textarea&gt;</code></p>
            </div>
            <span class="text-xs font-semibold text-violet-600 dark:text-violet-400 mt-4 block">View Component &rarr;</span>
        </a>

        <a href="/components/select" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-violet-500/50 hover:shadow-lg transition-all shadow-sm flex flex-col justify-between">
            <div>
                <h3 class="font-bold text-zinc-900 dark:text-white text-base">Select</h3>
                <p class="text-xs text-zinc-500 mt-1"><code class="font-mono text-violet-500">&lt;x-aura::select&gt;</code></p>
            </div>
            <span class="text-xs font-semibold text-violet-600 dark:text-violet-400 mt-4 block">View Component &rarr;</span>
        </a>

        <a href="/components/checkbox" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-emerald-500/50 hover:shadow-lg transition-all shadow-sm flex flex-col justify-between">
            <div>
                <h3 class="font-bold text-zinc-900 dark:text-white text-base">Checkbox</h3>
                <p class="text-xs text-zinc-500 mt-1"><code class="font-mono text-emerald-500">&lt;x-aura::checkbox&gt;</code></p>
            </div>
            <span class="text-xs font-semibold text-emerald-600 dark:text-emerald-400 mt-4 block">View Component &rarr;</span>
        </a>

        <a href="/components/radio" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-emerald-500/50 hover:shadow-lg transition-all shadow-sm flex flex-col justify-between">
            <div>
                <h3 class="font-bold text-zinc-900 dark:text-white text-base">Radio</h3>
                <p class="text-xs text-zinc-500 mt-1"><code class="font-mono text-emerald-500">&lt;x-aura::radio&gt;</code></p>
            </div>
            <span class="text-xs font-semibold text-emerald-600 dark:text-emerald-400 mt-4 block">View Component &rarr;</span>
        </a>

        <a href="/components/switch" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-emerald-500/50 hover:shadow-lg transition-all shadow-sm flex flex-col justify-between">
            <div>
                <h3 class="font-bold text-zinc-900 dark:text-white text-base">Switch</h3>
                <p class="text-xs text-zinc-500 mt-1"><code class="font-mono text-emerald-500">&lt;x-aura::switch&gt;</code></p>
            </div>
            <span class="text-xs font-semibold text-emerald-600 dark:text-emerald-400 mt-4 block">View Component &rarr;</span>
        </a>

        <a href="/components/avatar" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-amber-500/50 hover:shadow-lg transition-all shadow-sm flex flex-col justify-between">
            <div>
                <h3 class="font-bold text-zinc-900 dark:text-white text-base">Avatar</h3>
                <p class="text-xs text-zinc-500 mt-1"><code class="font-mono text-amber-500">&lt;x-aura::avatar&gt;</code></p>
            </div>
            <span class="text-xs font-semibold text-amber-600 dark:text-amber-400 mt-4 block">View Component &rarr;</span>
        </a>

        <a href="/components/badge" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-amber-500/50 hover:shadow-lg transition-all shadow-sm flex flex-col justify-between">
            <div>
                <h3 class="font-bold text-zinc-900 dark:text-white text-base">Badge</h3>
                <p class="text-xs text-zinc-500 mt-1"><code class="font-mono text-amber-500">&lt;x-aura::badge&gt;</code></p>
            </div>
            <span class="text-xs font-semibold text-amber-600 dark:text-amber-400 mt-4 block">View Component &rarr;</span>
        </a>

        <a href="/components/card" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-amber-500/50 hover:shadow-lg transition-all shadow-sm flex flex-col justify-between">
            <div>
                <h3 class="font-bold text-zinc-900 dark:text-white text-base">Card</h3>
                <p class="text-xs text-zinc-500 mt-1"><code class="font-mono text-amber-500">&lt;x-aura::card&gt;</code></p>
            </div>
            <span class="text-xs font-semibold text-amber-600 dark:text-amber-400 mt-4 block">View Component &rarr;</span>
        </a>

        <a href="/components/separator" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-amber-500/50 hover:shadow-lg transition-all shadow-sm flex flex-col justify-between">
            <div>
                <h3 class="font-bold text-zinc-900 dark:text-white text-base">Separator</h3>
                <p class="text-xs text-zinc-500 mt-1"><code class="font-mono text-amber-500">&lt;x-aura::separator&gt;</code></p>
            </div>
            <span class="text-xs font-semibold text-amber-600 dark:text-amber-400 mt-4 block">View Component &rarr;</span>
        </a>

        <a href="/components/modal" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-red-500/50 hover:shadow-lg transition-all shadow-sm flex flex-col justify-between">
            <div>
                <h3 class="font-bold text-zinc-900 dark:text-white text-base">Modal</h3>
                <p class="text-xs text-zinc-500 mt-1"><code class="font-mono text-red-500">&lt;x-aura::modal&gt;</code></p>
            </div>
            <span class="text-xs font-semibold text-red-600 dark:text-red-400 mt-4 block">View Component &rarr;</span>
        </a>

        <a href="/components/toast" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-red-500/50 hover:shadow-lg transition-all shadow-sm flex flex-col justify-between">
            <div>
                <h3 class="font-bold text-zinc-900 dark:text-white text-base">Toast</h3>
                <p class="text-xs text-zinc-500 mt-1"><code class="font-mono text-red-500">&lt;x-aura::toast&gt;</code></p>
            </div>
            <span class="text-xs font-semibold text-red-600 dark:text-red-400 mt-4 block">View Component &rarr;</span>
        </a>

        <a href="/components/table" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-teal-500/50 hover:shadow-lg transition-all shadow-sm flex flex-col justify-between">
            <div>
                <h3 class="font-bold text-zinc-900 dark:text-white text-base">Table</h3>
                <p class="text-xs text-zinc-500 mt-1"><code class="font-mono text-teal-500">&lt;x-aura::table&gt;</code></p>
            </div>
            <span class="text-xs font-semibold text-teal-600 dark:text-teal-400 mt-4 block">View Component &rarr;</span>
        </a>

        <a href="/components/dropdown" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-teal-500/50 hover:shadow-lg transition-all shadow-sm flex flex-col justify-between">
            <div>
                <h3 class="font-bold text-zinc-900 dark:text-white text-base">Dropdown</h3>
                <p class="text-xs text-zinc-500 mt-1"><code class="font-mono text-teal-500">&lt;x-aura::dropdown&gt;</code></p>
            </div>
            <span class="text-xs font-semibold text-teal-600 dark:text-teal-400 mt-4 block">View Component &rarr;</span>
        </a>
    </div>
</div>

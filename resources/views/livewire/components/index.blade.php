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

    <!-- Component Cards Directory Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        <a href="/components/heading" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-indigo-500/50 hover:shadow-lg transition-all shadow-sm flex flex-col justify-between">
            <div>
                <h3 class="font-bold text-zinc-900 dark:text-white text-base">Heading</h3>
                <p class="text-xs text-zinc-500 mt-1"><code class="font-mono text-indigo-500">&lt;x-aura::heading&gt;</code></p>
            </div>
            <span class="text-xs font-semibold text-indigo-600 dark:text-indigo-400 mt-4 block">View Component &rarr;</span>
        </a>

        <a href="/components/subheading" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-indigo-500/50 hover:shadow-lg transition-all shadow-sm flex flex-col justify-between">
            <div>
                <h3 class="font-bold text-zinc-900 dark:text-white text-base">Subheading</h3>
                <p class="text-xs text-zinc-500 mt-1"><code class="font-mono text-indigo-500">&lt;x-aura::subheading&gt;</code></p>
            </div>
            <span class="text-xs font-semibold text-indigo-600 dark:text-indigo-400 mt-4 block">View Component &rarr;</span>
        </a>

        <a href="/components/kicker" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-indigo-500/50 hover:shadow-lg transition-all shadow-sm flex flex-col justify-between">
            <div>
                <h3 class="font-bold text-zinc-900 dark:text-white text-base">Kicker</h3>
                <p class="text-xs text-zinc-500 mt-1"><code class="font-mono text-indigo-500">&lt;x-aura::kicker&gt;</code></p>
            </div>
            <span class="text-xs font-semibold text-indigo-600 dark:text-indigo-400 mt-4 block">View Component &rarr;</span>
        </a>

        <a href="/components/text" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-indigo-500/50 hover:shadow-lg transition-all shadow-sm flex flex-col justify-between">
            <div>
                <h3 class="font-bold text-zinc-900 dark:text-white text-base">Text</h3>
                <p class="text-xs text-zinc-500 mt-1"><code class="font-mono text-indigo-500">&lt;x-aura::text&gt;</code></p>
            </div>
            <span class="text-xs font-semibold text-indigo-600 dark:text-indigo-400 mt-4 block">View Component &rarr;</span>
        </a>

        <a href="/components/code" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-indigo-500/50 hover:shadow-lg transition-all shadow-sm flex flex-col justify-between">
            <div>
                <h3 class="font-bold text-zinc-900 dark:text-white text-base">Code</h3>
                <p class="text-xs text-zinc-500 mt-1"><code class="font-mono text-indigo-500">&lt;x-aura::code&gt;</code></p>
            </div>
            <span class="text-xs font-semibold text-indigo-600 dark:text-indigo-400 mt-4 block">View Component &rarr;</span>
        </a>

        <a href="/components/header" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-indigo-500/50 hover:shadow-lg transition-all shadow-sm flex flex-col justify-between">
            <div>
                <h3 class="font-bold text-zinc-900 dark:text-white text-base">Header</h3>
                <p class="text-xs text-zinc-500 mt-1"><code class="font-mono text-indigo-500">&lt;x-aura::header&gt;</code></p>
            </div>
            <span class="text-xs font-semibold text-indigo-600 dark:text-indigo-400 mt-4 block">View Component &rarr;</span>
        </a>

        <a href="/components/sidebar" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-indigo-500/50 hover:shadow-lg transition-all shadow-sm flex flex-col justify-between">
            <div>
                <h3 class="font-bold text-zinc-900 dark:text-white text-base">Sidebar</h3>
                <p class="text-xs text-zinc-500 mt-1"><code class="font-mono text-indigo-500">&lt;x-aura::sidebar&gt;</code></p>
            </div>
            <span class="text-xs font-semibold text-indigo-600 dark:text-indigo-400 mt-4 block">View Component &rarr;</span>
        </a>

        <a href="/components/main" class="p-5 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 hover:border-indigo-500/50 hover:shadow-lg transition-all shadow-sm flex flex-col justify-between">
            <div>
                <h3 class="font-bold text-zinc-900 dark:text-white text-base">Main</h3>
                <p class="text-xs text-zinc-500 mt-1"><code class="font-mono text-indigo-500">&lt;x-aura::main&gt;</code></p>
            </div>
            <span class="text-xs font-semibold text-indigo-600 dark:text-indigo-400 mt-4 block">View Component &rarr;</span>
        </a>

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
    </div>
</div>

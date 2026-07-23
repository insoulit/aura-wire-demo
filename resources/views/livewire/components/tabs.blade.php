<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Tabs Component — Aura Wire');

?>

<div class="w-full space-y-10">
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <h1 class="text-3xl font-extrabold text-zinc-900 dark:text-white tracking-tight">Tabs Component</h1>
        <p class="text-sm text-zinc-600 dark:text-zinc-400 mt-1"><code class="text-indigo-600 dark:text-indigo-400 font-mono">&lt;x-aura::tabs&gt;</code></p>
    </div>
    <div class="p-6 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 space-y-6 shadow-sm">
        <x-aura::tabs>
            <x-aura::tabs.item active>Account</x-aura::tabs.item>
            <x-aura::tabs.item>Security</x-aura::tabs.item>
            <x-aura::tabs.item>Notifications</x-aura::tabs.item>
        </x-aura::tabs>
        <pre class="text-[11px] font-mono p-3 rounded-xl bg-zinc-100 dark:bg-zinc-950 text-zinc-800 dark:text-zinc-300"><code>&lt;x-aura::tabs&gt;&lt;x-aura::tabs.item active&gt;Account&lt;/x-aura::tabs.item&gt;&lt;/x-aura::tabs&gt;</code></pre>
    </div>
</div>

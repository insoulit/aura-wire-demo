<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Dropdown Component — Aura Wire');

?>

<div class="w-full space-y-10">
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <h1 class="text-3xl font-extrabold text-zinc-900 dark:text-white tracking-tight">Dropdown Component</h1>
        <p class="text-sm text-zinc-600 dark:text-zinc-400 mt-1"><code class="text-indigo-600 dark:text-indigo-400 font-mono">&lt;x-aura::dropdown&gt;</code></p>
    </div>
    <div class="p-6 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 space-y-6 shadow-sm">
        <x-aura::dropdown>
            <x-slot:trigger>
                <x-aura::button variant="secondary">Actions Menu &darr;</x-aura::button>
            </x-slot:trigger>
            <a href="#" class="block px-4 py-2 text-sm hover:bg-zinc-100 dark:hover:bg-zinc-800 text-zinc-800 dark:text-zinc-200">Edit Profile</a>
            <a href="#" class="block px-4 py-2 text-sm text-red-600 dark:text-red-400 hover:bg-zinc-100 dark:hover:bg-zinc-800">Delete Account</a>
        </x-aura::dropdown>
        <pre class="text-[11px] font-mono p-3 rounded-xl bg-zinc-100 dark:bg-zinc-950 text-zinc-800 dark:text-zinc-300"><code>&lt;x-aura::dropdown&gt;
    &lt;x-slot:trigger&gt;
        &lt;x-aura::button variant="secondary"&gt;Actions &amp;darr;&lt;/x-aura::button&gt;
    &lt;/x-slot:trigger&gt;
    &lt;a href="#" ...&gt;Edit Profile&lt;/a&gt;
&lt;/x-aura::dropdown&gt;</code></pre>
    </div>
</div>

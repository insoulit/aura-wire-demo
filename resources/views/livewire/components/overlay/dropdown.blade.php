<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Dropdown - Aura Wire');

?>

<div class="w-full max-w-3xl mx-auto space-y-6 flex flex-col items-center justify-center">
    <div class="space-y-2 text-center flex flex-col items-center">
        <x-aura::heading level="1" size="md">Dropdown</x-aura::heading>
        <code class="inline-flex items-center px-3.5 py-1.5 mt-3 rounded-xl text-base sm:text-lg font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-sm">&lt;x-aura::dropdown&gt;</code>
    </div>
    <div class="p-6 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 space-y-6 shadow-sm">
        <x-aura::dropdown>
            <x-slot name="trigger">
                <x-aura::button variant="secondary">Actions Menu &darr;</x-aura::button>
            </x-slot>
            <a href="#" class="block px-4 py-2 text-sm hover:bg-zinc-100 dark:hover:bg-zinc-800 text-zinc-800 dark:text-zinc-200">Edit Profile</a>
            <a href="#" class="block px-4 py-2 text-sm text-red-600 dark:text-red-400 hover:bg-zinc-100 dark:hover:bg-zinc-800">Delete Account</a>
        </x-aura::dropdown>
        <pre class="text-[11px] font-mono p-3 rounded-xl bg-zinc-100 dark:bg-zinc-950 text-zinc-800 dark:text-zinc-300"><code>&lt;x-aura::dropdown&gt;
    &amp;lt;x-slot name="trigger"&amp;gt;
        &lt;x-aura::button variant="secondary"&gt;Actions &amp;darr;&lt;/x-aura::button&gt;
    &amp;lt;/x-slot&amp;gt;
    &lt;a href="#" ...&gt;Edit Profile&lt;/a&gt;
&lt;/x-aura::dropdown&gt;</code></pre>
    </div>
</div>

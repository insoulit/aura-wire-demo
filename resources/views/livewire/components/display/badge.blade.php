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
    <x-aura::code title="Badge Tag Variants">
        <x-slot:preview>
            <div class="flex flex-wrap items-center gap-3">
                <x-aura::badge variant="neutral">Neutral</x-aura::badge>
                <x-aura::badge variant="subtle">Subtle</x-aura::badge>
                <x-aura::badge variant="positive">Active</x-aura::badge>
                <x-aura::badge variant="warning">Warning</x-aura::badge>
                <x-aura::badge variant="negative">Danger</x-aura::badge>
                <x-aura::badge variant="info">Info</x-aura::badge>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::badge variant="neutral"&gt;Neutral&lt;/x-aura::badge&gt;
&lt;x-aura::badge variant="positive"&gt;Active&lt;/x-aura::badge&gt;
&lt;x-aura::badge variant="warning"&gt;Warning&lt;/x-aura::badge&gt;
&lt;x-aura::badge variant="negative"&gt;Danger&lt;/x-aura::badge&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>

<?php

use function Livewire\Volt\{layout, title, state};

layout('layouts.components');
title('Modal Component — Aura Wire');

state([
    'showModal' => false,
]);

?>

<div class="w-full space-y-10">
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <h1 class="text-3xl font-extrabold text-zinc-900 dark:text-white tracking-tight">Modal Component</h1>
        <p class="text-sm text-zinc-600 dark:text-zinc-400 mt-1"><code class="text-indigo-600 dark:text-indigo-400 font-mono">&lt;x-aura::modal&gt;</code></p>
    </div>
    <div class="p-6 rounded-2xl bg-white dark:bg-zinc-900/60 border border-zinc-200 dark:border-zinc-800/80 space-y-6 shadow-sm">
        <x-aura::button variant="primary" wire:click="$set('showModal', true)">Open Modal</x-aura::button>
        <x-aura::modal wire:model="showModal" title="Confirmation" description="Modal dialog content">
            <p class="text-sm text-zinc-600 dark:text-zinc-300">Are you sure you want to proceed?</p>
            <x-slot:footer>
                <x-aura::button variant="secondary" size="sm" wire:click="$set('showModal', false)">Cancel</x-aura::button>
                <x-aura::button variant="primary" size="sm" wire:click="$set('showModal', false)">Confirm</x-aura::button>
            </x-slot:footer>
        </x-aura::modal>
        <pre class="text-[11px] font-mono p-3 rounded-xl bg-zinc-100 dark:bg-zinc-950 text-zinc-800 dark:text-zinc-300"><code>&lt;x-aura::modal wire:model="showModal" title="Title"&gt;...&lt;/x-aura::modal&gt;</code></pre>
    </div>
</div>

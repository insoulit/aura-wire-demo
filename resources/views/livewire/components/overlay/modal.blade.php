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
    <x-aura::code title="Interactive Modal Dialog">
        <x-slot:preview>
            <x-aura::button variant="primary" wire:click="$set('showModal', true)">Open Modal</x-aura::button>
            <x-aura::modal wire:model="showModal" title="Confirmation" description="Modal dialog content">
                <p class="text-sm text-zinc-600 dark:text-zinc-300">Are you sure you want to proceed?</p>
                <x-slot:footer>
                    <x-aura::button variant="secondary" size="sm" wire:click="$set('showModal', false)">Cancel</x-aura::button>
                    <x-aura::button variant="primary" size="sm" wire:click="$set('showModal', false)">Confirm</x-aura::button>
                </x-slot:footer>
            </x-aura::modal>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::button wire:click="$set('showModal', true)"&gt;Open Modal&lt;/x-aura::button&gt;

&lt;x-aura::modal wire:model="showModal" title="Confirmation" description="..."&gt;
    &lt;p&gt;Are you sure?&lt;/p&gt;
    &lt;x-slot:footer&gt;
        &lt;x-aura::button variant="primary" size="sm"&gt;Confirm&lt;/x-aura::button&gt;
    &lt;/x-slot:footer&gt;
&lt;/x-aura::modal&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>

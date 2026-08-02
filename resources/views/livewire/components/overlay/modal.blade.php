<?php

use function Livewire\Volt\{layout, title, state};

layout('layouts.components');
title('Modal — Aura Wire');

state([
    'showModal' => false,
]);

?>

<div class="w-full max-w-3xl mx-auto space-y-6 flex flex-col items-center justify-center">
    <div class="space-y-2 text-center flex flex-col items-center">
        <x-aura::heading level="1" size="md">Modal</x-aura::heading>
        <code class="inline-flex items-center px-3.5 py-1.5 mt-3 rounded-xl text-base sm:text-lg font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-sm">&lt;x-aura::modal&gt;</code>
    </div>
    <x-aura::code class="w-full" title="Interactive Modal Dialog">
        <x-slot:preview>
            <x-aura::button variant="primary" wire:click="$set('showModal', true)">Open Modal</x-aura::button>
            <x-aura::modal wire:model="showModal" title="Confirmation" description="Modal dialog content">
                <x-aura::text size="sm">Are you sure you want to proceed?</x-aura::text>
                <x-slot:footer>
                    <x-aura::button variant="secondary" size="sm" wire:click="$set('showModal', false)">Cancel</x-aura::button>
                    <x-aura::button variant="primary" size="sm" wire:click="$set('showModal', false)">Confirm</x-aura::button>
                </x-slot:footer>
            </x-aura::modal>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::button wire:click="$set('showModal', true)"&gt;Open Modal&lt;/x-aura::button&gt;

&lt;x-aura::modal wire:model="showModal" title="Confirmation" description="..."&gt;
    &lt;x-aura::text size="sm"&gt;Are you sure?&lt;/x-aura::text&gt;
    &lt;x-slot:footer&gt;
        &lt;x-aura::button variant="primary" size="sm"&gt;Confirm&lt;/x-aura::button&gt;
    &lt;/x-slot:footer&gt;
&lt;/x-aura::modal&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>

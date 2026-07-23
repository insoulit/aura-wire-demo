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
        <x-aura::heading level="1" size="xl">Modal Component</x-aura::heading>
        <x-aura::text variant="subtle" size="sm" class="mt-1"><x-aura::code>&lt;x-aura::modal&gt;</x-aura::code></x-aura::text>
    </div>
    <x-aura::code title="Interactive Modal Dialog">
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

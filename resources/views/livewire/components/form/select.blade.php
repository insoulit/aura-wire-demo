<?php

use function Livewire\Volt\{layout, title, state};

layout('layouts.components');
title('Select Component — Aura Wire');

state(['selected' => 'us']);

?>

<div class="w-full space-y-10">
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <x-aura::heading level="1" size="xl">Select Component</x-aura::heading>
        <x-aura::text variant="subtle" size="sm" class="mt-1"><x-aura::code>&lt;x-aura::select&gt;</x-aura::code></x-aura::text>
    </div>
    <x-aura::code title="Select Input">
        <x-slot:preview>
            <div class="w-full max-w-sm">
                <x-aura::select wire:model="selected" label="Country">
                    <option value="us">United States</option>
                    <option value="ca">Canada</option>
                    <option value="uk">United Kingdom</option>
                </x-aura::select>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::select wire:model="selected" label="Country"&gt;
    &lt;option value="us"&gt;United States&lt;/option&gt;
    &lt;option value="ca"&gt;Canada&lt;/option&gt;
&lt;/x-aura::select&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>

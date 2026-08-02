<?php

use function Livewire\Volt\{layout, title, state};

layout('layouts.components');
title('Select — Aura Wire');

state(['selected' => 'us']);

?>

<div class="w-full max-w-3xl mx-auto space-y-6 flex flex-col items-center justify-center">
    <div class="space-y-2 text-center flex flex-col items-center">
        <x-aura::heading level="1" size="md">Select</x-aura::heading>
        <code class="inline-flex items-center px-3.5 py-1.5 mt-3 rounded-xl text-base sm:text-lg font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-sm">&lt;x-aura::select&gt;</code>
    </div>
    <x-aura::code class="w-full" title="Select Input">
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

<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Select Component — Aura Wire');

?>

<div class="w-full space-y-10">
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <h1 class="text-3xl font-extrabold text-zinc-900 dark:text-white tracking-tight">Select Component</h1>
        <p class="text-sm text-zinc-600 dark:text-zinc-400 mt-1"><code class="text-indigo-600 dark:text-indigo-400 font-mono">&lt;x-aura::select&gt;</code></p>
    </div>
    <x-aura::code title="Select Dropdown">
        <x-slot:preview>
            <div class="w-full max-w-xs space-y-1">
                <x-aura::label>Country</x-aura::label>
                <x-aura::select>
                    <option value="us">United States</option>
                    <option value="ca">Canada</option>
                    <option value="uk">United Kingdom</option>
                </x-aura::select>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::select&gt;
    &lt;option value="us"&gt;United States&lt;/option&gt;
    &lt;option value="ca"&gt;Canada&lt;/option&gt;
&lt;/x-aura::select&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>

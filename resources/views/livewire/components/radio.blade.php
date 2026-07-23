<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Radio Component — Aura Wire');

?>

<div class="w-full space-y-10">
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <h1 class="text-3xl font-extrabold text-zinc-900 dark:text-white tracking-tight">Radio Component</h1>
        <p class="text-sm text-zinc-600 dark:text-zinc-400 mt-1"><code class="text-indigo-600 dark:text-indigo-400 font-mono">&lt;x-aura::radio&gt;</code></p>
    </div>
    <x-aura::code title="Radio Options">
        <x-slot:preview>
            <div class="space-y-2">
                <x-aura::radio name="plan" label="Basic Plan" checked />
                <x-aura::radio name="plan" label="Pro Plan" />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::radio name="plan" label="Basic Plan" checked /&gt;
&lt;x-aura::radio name="plan" label="Pro Plan" /&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>

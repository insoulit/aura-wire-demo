<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Label Component — Aura Wire');

?>

<div class="w-full space-y-10">
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <h1 class="text-3xl font-extrabold text-zinc-900 dark:text-white tracking-tight">Label Component</h1>
        <p class="text-sm text-zinc-600 dark:text-zinc-400 mt-1"><code class="text-indigo-600 dark:text-indigo-400 font-mono">&lt;x-aura::label&gt;</code></p>
    </div>
    <x-aura::code title="Label Element">
        <x-slot:preview>
            <x-aura::label required>Email Address</x-aura::label>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::label required&gt;Email Address&lt;/x-aura::label&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>

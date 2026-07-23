<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Textarea Component — Aura Wire');

?>

<div class="w-full space-y-10">
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <h1 class="text-3xl font-extrabold text-zinc-900 dark:text-white tracking-tight">Textarea Component</h1>
        <p class="text-sm text-zinc-600 dark:text-zinc-400 mt-1"><code class="text-indigo-600 dark:text-indigo-400 font-mono">&lt;x-aura::textarea&gt;</code></p>
    </div>
    <x-aura::code title="Textarea Control">
        <x-slot:preview>
            <div class="w-full max-w-md space-y-1">
                <x-aura::label>Description</x-aura::label>
                <x-aura::textarea rows="4" placeholder="Type multi-line content..." />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::label&gt;Description&lt;/x-aura::label&gt;
&lt;x-aura::textarea rows="4" placeholder="Type multi-line content..." /&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>

<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Field Component — Aura Wire');

?>

<div class="w-full space-y-10">
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <h1 class="text-3xl font-extrabold text-zinc-900 dark:text-white tracking-tight">Field & Label Component</h1>
        <p class="text-sm text-zinc-600 dark:text-zinc-400 mt-1"><code class="text-indigo-600 dark:text-indigo-400 font-mono">&lt;x-aura::field&gt;</code> & <code class="text-indigo-600 dark:text-indigo-400 font-mono">&lt;x-aura::label&gt;</code></p>
    </div>
    <x-aura::code title="Form Field Wrapper">
        <x-slot:preview>
            <div class="w-full max-w-sm">
                <x-aura::field>
                    <x-aura::label required>Full Name</x-aura::label>
                    <x-aura::input placeholder="John Doe" />
                </x-aura::field>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::field&gt;
    &lt;x-aura::label required&gt;Full Name&lt;/x-aura::label&gt;
    &lt;x-aura::input placeholder="John Doe" /&gt;
&lt;/x-aura::field&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>

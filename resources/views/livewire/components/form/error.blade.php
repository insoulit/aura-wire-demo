<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Error Component — Aura Wire');

?>

<div class="w-full space-y-10">
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <h1 class="text-3xl font-extrabold text-zinc-900 dark:text-white tracking-tight">Error Component</h1>
        <p class="text-sm text-zinc-600 dark:text-zinc-400 mt-1"><code class="text-indigo-600 dark:text-indigo-400 font-mono">&lt;x-aura::error&gt;</code></p>
    </div>
    <x-aura::code title="Validation Error Message">
        <x-slot:preview>
            <x-aura::error>The password must be at least 8 characters long.</x-aura::error>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::error&gt;The password must be at least 8 characters long.&lt;/x-aura::error&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>

<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Switch Component — Aura Wire');

?>

<div class="w-full space-y-10">
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <h1 class="text-3xl font-extrabold text-zinc-900 dark:text-white tracking-tight">Switch Component</h1>
        <p class="text-sm text-zinc-600 dark:text-zinc-400 mt-1"><code class="text-indigo-600 dark:text-indigo-400 font-mono">&lt;x-aura::switch&gt;</code></p>
    </div>
    <x-aura::code title="Switch Toggle">
        <x-slot:preview>
            <x-aura::switch label="Enable Dark Mode" description="Automatic system theme sync" checked />
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::switch label="Enable Dark Mode" description="Automatic system theme sync" checked /&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>

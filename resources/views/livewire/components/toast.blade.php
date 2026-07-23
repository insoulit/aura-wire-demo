<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Toast Component — Aura Wire');

?>

<div class="w-full space-y-10">
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <h1 class="text-3xl font-extrabold text-zinc-900 dark:text-white tracking-tight">Toast Component</h1>
        <p class="text-sm text-zinc-600 dark:text-zinc-400 mt-1"><code class="text-indigo-600 dark:text-indigo-400 font-mono">&lt;x-aura::toast&gt;</code></p>
    </div>
    <x-aura::code title="Toast Notification">
        <x-slot:preview>
            <div class="w-full max-w-sm">
                <x-aura::toast type="success" title="Settings Saved" message="Your account preferences have been updated." />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::toast type="success" title="Settings Saved" message="Preferences updated." /&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>

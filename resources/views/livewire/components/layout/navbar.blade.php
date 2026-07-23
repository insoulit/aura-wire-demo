<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Navbar Component — Aura Wire');

?>

<div class="w-full space-y-10">
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <h1 class="text-3xl font-extrabold text-zinc-900 dark:text-white tracking-tight">Navbar Component</h1>
        <p class="text-sm text-zinc-600 dark:text-zinc-400 mt-1"><code class="text-indigo-600 dark:text-indigo-400 font-mono">&lt;x-aura::navbar&gt;</code></p>
    </div>
    <x-aura::code title="Navigation Bar">
        <x-slot:preview>
            <div class="w-full">
                <x-aura::navbar brand="Aura App">
                    <a href="#" class="text-sm font-medium hover:text-indigo-500">Home</a>
                    <a href="#" class="text-sm font-medium hover:text-indigo-500">Features</a>
                </x-aura::navbar>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::navbar brand="Aura App"&gt;
    &lt;a href="#"&gt;Home&lt;/a&gt;
    &lt;a href="#"&gt;Features&lt;/a&gt;
&lt;/x-aura::navbar&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>

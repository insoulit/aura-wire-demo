<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Sidebar Component — Aura Wire');

?>

<div class="w-full space-y-10">
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <h1 class="text-3xl font-extrabold text-zinc-900 dark:text-white tracking-tight">Sidebar Component</h1>
        <p class="text-sm text-zinc-600 dark:text-zinc-400 mt-1"><code class="text-indigo-600 dark:text-indigo-400 font-mono">&lt;x-aura::sidebar&gt;</code></p>
    </div>
    <x-aura::code title="Navigation Sidebar">
        <x-slot:preview>
            <div class="w-64">
                <x-aura::sidebar title="Control Panel">
                    <a href="#" class="block py-1">Dashboard</a>
                    <a href="#" class="block py-1">Settings</a>
                </x-aura::sidebar>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::sidebar title="Control Panel"&gt;
    &lt;a href="#"&gt;Dashboard&lt;/a&gt;
    &lt;a href="#"&gt;Settings&lt;/a&gt;
&lt;/x-aura::sidebar&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>

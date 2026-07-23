<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Sidebar Component — Aura Wire');

?>

<div class="w-full space-y-10">
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <h1 class="text-3xl font-extrabold text-zinc-900 dark:text-white tracking-tight">Sidebar Component</h1>
        <p class="text-sm text-zinc-600 dark:text-zinc-400 mt-1">
            <code class="text-indigo-600 dark:text-indigo-400 font-mono">&lt;x-aura::sidebar&gt;</code>, <code class="text-indigo-600 dark:text-indigo-400 font-mono">&lt;x-aura::sidebar.heading&gt;</code> & <code class="text-indigo-600 dark:text-indigo-400 font-mono">&lt;x-aura::sidebar.item&gt;</code>
        </p>
    </div>

    <x-aura::code title="Navigation Sidebar">
        <x-slot:preview>
            <div class="w-64 h-80 relative rounded-xl overflow-hidden border border-zinc-200 dark:border-zinc-800">
                <x-aura::sidebar brand="Aura Panel">
                    <x-aura::sidebar.heading>Overview</x-aura::sidebar.heading>
                    <x-aura::sidebar.item href="#" active badge="Pro">
                        <x-slot:icon>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 00-1-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                        </x-slot:icon>
                        Dashboard
                    </x-aura::sidebar.item>

                    <x-aura::sidebar.heading>Management</x-aura::sidebar.heading>
                    <x-aura::sidebar.item href="#">
                        <x-slot:icon>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                        </x-slot:icon>
                        Users
                    </x-aura::sidebar.item>
                </x-aura::sidebar>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::sidebar brand="Aura Panel"&gt;
    &lt;x-aura::sidebar.heading&gt;Overview&lt;/x-aura::sidebar.heading&gt;
    &lt;x-aura::sidebar.item href="#" active badge="Pro"&gt;
        &lt;x-slot:icon&gt; &lt;svg ... /&gt; &lt;/x-slot:icon&gt;
        Dashboard
    &lt;/x-aura::sidebar.item&gt;

    &lt;x-aura::sidebar.heading&gt;Management&lt;/x-aura::sidebar.heading&gt;
    &lt;x-aura::sidebar.item href="#"&gt;Users&lt;/x-aura::sidebar.item&gt;
&lt;/x-aura::sidebar&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>

<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Header Component — Aura Wire');

?>

<div class="w-full space-y-10">
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <h1 class="text-3xl font-extrabold text-zinc-900 dark:text-white tracking-tight">Header Component</h1>
        <p class="text-sm text-zinc-600 dark:text-zinc-400 mt-1">
            <code class="text-indigo-600 dark:text-indigo-400 font-mono">&lt;x-aura::header&gt;</code> & <code class="text-indigo-600 dark:text-indigo-400 font-mono">&lt;x-aura::header.item&gt;</code>
        </p>
    </div>

    <x-aura::code title="Top Navigation Header">
        <x-slot:preview>
            <div class="w-full">
                <x-aura::header :sticky="false">
                    <x-slot:brand>
                        <span class="text-lg">Aura Application</span>
                    </x-slot:brand>

                    <div class="flex items-center gap-1">
                        <x-aura::header.item href="#" active>Dashboard</x-aura::header.item>
                        <x-aura::header.item href="#">Projects</x-aura::header.item>
                        <x-aura::header.item href="#">Settings</x-aura::header.item>
                    </div>

                    <x-slot:actions>
                        <x-aura::button variant="primary" size="sm">New Project</x-aura::button>
                    </x-slot:actions>
                </x-aura::header>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::header&gt;
    &lt;x-slot:brand&gt;Aura App&lt;/x-slot:brand&gt;

    &lt;x-aura::header.item href="#" active&gt;Dashboard&lt;/x-aura::header.item&gt;
    &lt;x-aura::header.item href="#"&gt;Projects&lt;/x-aura::header.item&gt;

    &lt;x-slot:actions&gt;
        &lt;x-aura::button variant="primary" size="sm"&gt;New Project&lt;/x-aura::button&gt;
    &lt;/x-slot:actions&gt;
&lt;/x-aura::header&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>

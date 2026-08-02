<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Header — Aura Wire');

?>

<div class="w-full max-w-3xl mx-auto space-y-6 flex flex-col items-center justify-center">
    <div class="space-y-2 text-center flex flex-col items-center">
        <x-aura::heading level="1" size="md">Header</x-aura::heading>
        <code class="inline-flex items-center px-3.5 py-1.5 mt-3 rounded-xl text-base sm:text-lg font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-sm">&lt;x-aura::header&gt;</code>
    </div>
    <x-aura::code class="w-full" title="Header Top Bar">
        <x-slot:preview>
            <div class="w-full border border-zinc-200 dark:border-zinc-800 rounded-xl overflow-hidden">
                <x-aura::header>
                    <x-slot name="brand">
                        <span class="font-bold text-zinc-900 dark:text-white text-sm">Demo Brand</span>
                    </x-slot>
                    <div class="flex items-center gap-1">
                        <x-aura::header.item href="#" active>Dashboard</x-aura::header.item>
                        <x-aura::header.item href="#">Projects</x-aura::header.item>
                    </div>
                    <x-slot name="actions">
                        <x-aura::button size="xs" variant="primary">New Project</x-aura::button>
                    </x-slot>
                </x-aura::header>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::header&gt;
    &amp;lt;x-slot name="brand"&amp;gt;Demo Brand&amp;lt;/x-slot&amp;gt;
    &lt;x-aura::header.item href="#" active&gt;Dashboard&lt;/x-aura::header.item&gt;
&lt;/x-aura::header&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>

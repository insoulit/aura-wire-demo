<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Header Component — Aura Wire');

?>

<div class="w-full space-y-10">
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <x-aura::heading level="1" size="xl">Header Component</x-aura::heading>
        <x-aura::text variant="subtle" size="sm" class="mt-1">
            <x-aura::code>&lt;x-aura::header&gt;</x-aura::code> &amp; <x-aura::code>&lt;x-aura::header.item&gt;</x-aura::code>
        </x-aura::text>
    </div>
    <x-aura::code title="Header Top Bar">
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

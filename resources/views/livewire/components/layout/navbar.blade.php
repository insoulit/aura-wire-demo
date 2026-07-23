<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Navbar Component — Aura Wire');

?>

<div class="w-full space-y-10">
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <x-aura::heading level="1" size="xl">Navbar Component</x-aura::heading>
        <x-aura::text variant="subtle" size="sm" class="mt-1"><x-aura::code>&lt;x-aura::navbar&gt;</x-aura::code></x-aura::text>
    </div>
    <x-aura::code title="Horizontal Navbar">
        <x-slot:preview>
            <x-aura::navbar>
                <a href="#" class="font-semibold text-zinc-900 dark:text-white">Aura App</a>
                <div class="flex gap-4 text-sm text-zinc-600 dark:text-zinc-400">
                    <a href="#" class="hover:text-zinc-900 dark:hover:text-white">Home</a>
                    <a href="#" class="hover:text-zinc-900 dark:hover:text-white">Features</a>
                    <a href="#" class="hover:text-zinc-900 dark:hover:text-white">Pricing</a>
                </div>
            </x-aura::navbar>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::navbar&gt;
    &lt;a href="#"&gt;Aura App&lt;/a&gt;
    &lt;div class="flex gap-4"&gt;
        &lt;a href="#"&gt;Home&lt;/a&gt;
    &lt;/div&gt;
&lt;/x-aura::navbar&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>

<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Navbar - Aura Wire');

?>

<div class="w-full max-w-3xl mx-auto space-y-6 flex flex-col items-center justify-center">
    <div class="space-y-2 text-center flex flex-col items-center">
        <x-aura::heading level="1" size="md">Navbar</x-aura::heading>
        <code class="inline-flex items-center px-3.5 py-1.5 mt-3 rounded-xl text-base sm:text-lg font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-sm">&lt;x-aura::navbar&gt;</code>
    </div>
    <x-aura::code class="w-full" title="Horizontal Navbar">
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

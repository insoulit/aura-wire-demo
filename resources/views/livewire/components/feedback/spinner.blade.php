<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Spinner — Aura Wire');

?>

<div class="w-full max-w-3xl mx-auto space-y-6 flex flex-col items-center justify-center">
    <div class="space-y-2 text-center flex flex-col items-center">
        <x-aura::heading level="1" size="md">Spinner</x-aura::heading>
        <code class="inline-flex items-center px-3.5 py-1.5 mt-3 rounded-xl text-base sm:text-lg font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-sm">&lt;x-aura::spinner&gt;</code>
    </div>

    {{-- Spinner Sizes & Colors --}}
    <x-aura::code class="w-full" title="Loading Spinner Variants & Sizes">
        <x-slot:preview>
            <div class="flex flex-wrap items-center gap-6">
                <x-aura::spinner size="sm" />
                <x-aura::spinner size="md" variant="primary" />
                <x-aura::spinner size="lg" variant="primary" />
                <x-aura::spinner size="xl" />

                <div class="p-3 bg-zinc-900 rounded-lg">
                    <x-aura::spinner size="md" variant="white" />
                </div>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::spinner size="sm" /&gt;
&lt;x-aura::spinner size="md" variant="primary" /&gt;
&lt;x-aura::spinner size="lg" variant="primary" /&gt;
&lt;x-aura::spinner size="xl" /&gt;
&lt;x-aura::spinner size="md" variant="white" /&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>

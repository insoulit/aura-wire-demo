<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Spinner Component — Aura Wire');

?>

<div class="w-full space-y-10">
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <x-aura::heading level="1" size="xl">Spinner Component</x-aura::heading>
        <x-aura::text variant="subtle" size="sm" class="mt-1"><x-aura::code>&lt;x-aura::spinner&gt;</x-aura::code></x-aura::text>
    </div>

    {{-- Spinner Sizes & Colors --}}
    <x-aura::code title="Loading Spinner Variants & Sizes">
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

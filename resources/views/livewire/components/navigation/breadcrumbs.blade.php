<?php

use function Livewire\Volt\{layout, title, with};

layout('layouts.components');
title('Breadcrumbs — Aura Wire');

with([
    'items' => [
        ['label' => 'Home', 'href' => '/'],
        ['label' => 'Components', 'href' => '/components'],
        ['label' => 'Breadcrumbs'],
    ],
]);

?>

<div class="w-full max-w-3xl mx-auto space-y-6 flex flex-col items-center justify-center">
    <div class="space-y-2 text-center flex flex-col items-center">
        <x-aura::heading level="1" size="md">Breadcrumbs</x-aura::heading>
        <code class="inline-flex items-center px-3.5 py-1.5 mt-3 rounded-xl text-base sm:text-lg font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-sm">&lt;x-aura::breadcrumbs&gt;</code>
    </div>

    {{-- Breadcrumb Navigation Trail --}}
    <x-aura::code class="w-full" title="Breadcrumb Navigation Trail">
        <x-slot:preview>
            <x-aura::breadcrumbs :items="$items" />
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::breadcrumbs :items="[
    ['label' =&gt; 'Home', 'href' =&gt; '/'],
    ['label' =&gt; 'Components', 'href' =&gt; '/components'],
    ['label' =&gt; 'Breadcrumbs'],
]" /&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>

<?php

use function Livewire\Volt\{layout, title, with};

layout('layouts.components');
title('Breadcrumbs Component — Aura Wire');

with([
    'items' => [
        ['label' => 'Home', 'href' => '/'],
        ['label' => 'Components', 'href' => '/components'],
        ['label' => 'Breadcrumbs'],
    ],
]);

?>

<div class="w-full space-y-10">
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <x-aura::heading level="1" size="xl">Breadcrumbs Component</x-aura::heading>
        <x-aura::text variant="subtle" size="sm" class="mt-1"><x-aura::code>&lt;x-aura::breadcrumbs&gt;</x-aura::code></x-aura::text>
    </div>

    {{-- Breadcrumb Navigation Trail --}}
    <x-aura::code title="Breadcrumb Navigation Trail">
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

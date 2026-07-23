<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Badge Component — Aura Wire');

?>

<div class="w-full space-y-10">
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <x-aura::heading level="1" size="xl">Badge Component</x-aura::heading>
        <x-aura::text variant="subtle" size="sm" class="mt-1"><x-aura::code>&lt;x-aura::badge&gt;</x-aura::code></x-aura::text>
    </div>
    <x-aura::code title="Badge Tag Variants">
        <x-slot:preview>
            <div class="flex flex-wrap items-center gap-3">
                <x-aura::badge variant="neutral">Neutral</x-aura::badge>
                <x-aura::badge variant="subtle">Subtle</x-aura::badge>
                <x-aura::badge variant="positive">Active</x-aura::badge>
                <x-aura::badge variant="warning">Warning</x-aura::badge>
                <x-aura::badge variant="negative">Danger</x-aura::badge>
                <x-aura::badge variant="info">Info</x-aura::badge>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::badge variant="neutral"&gt;Neutral&lt;/x-aura::badge&gt;
&lt;x-aura::badge variant="positive"&gt;Active&lt;/x-aura::badge&gt;
&lt;x-aura::badge variant="warning"&gt;Warning&lt;/x-aura::badge&gt;
&lt;x-aura::badge variant="negative"&gt;Danger&lt;/x-aura::badge&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>

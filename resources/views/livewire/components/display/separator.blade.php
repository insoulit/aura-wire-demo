<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Separator Component — Aura Wire');

?>

<div class="w-full space-y-10">
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <x-aura::heading level="1" size="xl">Separator Component</x-aura::heading>
        <x-aura::text variant="subtle" size="sm" class="mt-1"><x-aura::code>&lt;x-aura::separator&gt;</x-aura::code></x-aura::text>
    </div>
    <x-aura::code title="Divider Separator">
        <x-slot:preview>
            <div class="w-full max-w-lg space-y-3">
                <x-aura::text size="sm">Top Content Section</x-aura::text>
                <x-aura::separator label="OR" />
                <x-aura::text size="sm">Bottom Content Section</x-aura::text>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::text size="sm"&gt;Top Content Section&lt;/x-aura::text&gt;
&lt;x-aura::separator label="OR" /&gt;
&lt;x-aura::text size="sm"&gt;Bottom Content Section&lt;/x-aura::text&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>

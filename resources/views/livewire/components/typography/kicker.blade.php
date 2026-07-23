<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Kicker Component — Aura Wire');

?>

<div class="w-full space-y-10">
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <x-aura::heading level="1" size="xl">Kicker Component</x-aura::heading>
        <x-aura::text variant="subtle" size="sm" class="mt-1">
            <x-aura::code>&lt;x-aura::kicker&gt;</x-aura::code>
        </x-aura::text>
    </div>

    <x-aura::code title="Kicker Component">
        <x-slot:preview>
            <div class="space-y-1">
                <x-aura::kicker>FEATURED PACKAGE</x-aura::kicker>
                <x-aura::heading level="2">Aura Wire Design System</x-aura::heading>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::kicker&gt;FEATURED PACKAGE&lt;/x-aura::kicker&gt;
&lt;x-aura::heading level="2"&gt;Aura Wire Design System&lt;/x-aura::heading&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>

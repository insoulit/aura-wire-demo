<?php

use function Livewire\Volt\{layout, title, state};

layout('livewire.layout.component');
title('Switch - Aura Wire');

state(['enabled' => false]);

?>

<div class="w-full max-w-4xl mx-auto space-y-10 flex flex-col items-center justify-center">
    <!-- Header -->
    <x-aura::card>
        <div class="space-y-2 max-w-2xl">
            <div class="flex items-center gap-2.5">
                <x-aura::kicker>Form Controls</x-aura::kicker>
                <x-aura::badge variant="subtle" size="sm">Component</x-aura::badge>
            </div>
            <x-aura::heading level="1" size="xl">Switch</x-aura::heading>
            <x-aura::subheading size="md">
                Interactive toggle switches for binary settings and real-time state preferences.
            </x-aura::subheading>
        </div>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code" >
        <x-slot:codeSlot>@verbatim<x-aura::switch wire:model="enabled" label="Enable Notifications" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>
    <x-aura::code  title="Toggle Switch">
        <x-slot:preview>
            <div class="flex items-center gap-4">
                <x-aura::switch wire:model="enabled" label="Enable Notifications" />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::switch wire:model="enabled" label="Enable Notifications" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>
</div>

<?php

use function Livewire\Volt\{layout, title, state};

layout('livewire.layout.component');
title('Checkbox - Aura Wire');

state(['remember' => true]);

?>

<div class="w-full max-w-3xl mx-auto space-y-6 flex flex-col items-center justify-center">
    <!-- Header -->
    <x-aura::card >
        <div class="space-y-2 max-w-2xl">
            <div class="flex items-center gap-2.5">
                <x-aura::kicker>Form Controls</x-aura::kicker>
                <x-aura::badge variant="subtle" size="sm">Component</x-aura::badge>
            </div>
            <x-aura::heading level="1" size="xl">Checkbox</x-aura::heading>
            <x-aura::subheading size="md">
                Boolean selection inputs for multi-option forms, terms agreements, and toggle states.
            </x-aura::subheading>
        </div>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code" >
        <x-slot:codeSlot>@verbatim<x-aura::checkbox wire:model="remember" label="Remember me" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>
    <x-aura::code  title="Checkbox Input">
        <x-slot:preview>
            <div class="flex items-center gap-4">
                <x-aura::checkbox wire:model="remember" label="Remember me on this browser" />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::checkbox wire:model="remember" label="Remember me" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>
</div>

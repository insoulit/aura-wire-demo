<?php

use function Livewire\Volt\{layout, title, state};

layout('livewire.layout.component');
title('Textarea - Aura Wire');

state(['bio' => '']);

?>

<div class="w-full max-w-4xl mx-auto space-y-10 flex flex-col items-center justify-center">
    <!-- Header -->
    <x-aura::card >
        <div class="space-y-2 max-w-2xl">
            <div class="flex items-center gap-2.5">
                <x-aura::kicker>Form Controls</x-aura::kicker>
                <x-aura::badge variant="subtle" size="sm">Component</x-aura::badge>
            </div>
            <x-aura::heading level="1" size="xl">Textarea</x-aura::heading>
            <x-aura::subheading size="md">
                Multi-line text input field supporting auto-resize, custom row count, labels, and error states.
            </x-aura::subheading>
        </div>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code" >
        <x-slot:codeSlot>@verbatim<x-aura::textarea wire:model="bio" rows="4" label="Biography" placeholder="Tell us about yourself..." />@endverbatim</x-slot:codeSlot>
    </x-aura::code>
    <x-aura::code  title="Textarea Control">
        <x-slot:preview>
            <div class="w-full max-w-md">
                <x-aura::textarea wire:model="bio" rows="4" label="Biography" placeholder="Tell us about yourself..." />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::textarea wire:model="bio" rows="4" label="Biography" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>
</div>

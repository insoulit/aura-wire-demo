<?php

use function Livewire\Volt\{layout, title, state};

layout('livewire.layout.component');
title('Textarea - Aura Wire');

state(['bio' => '']);

?>

<div class="w-full max-w-3xl mx-auto space-y-6 flex flex-col items-center justify-center">
    <!-- Header -->
    <x-aura::card class="p-6 sm:p-8 bg-white/60 dark:bg-zinc-900/50 backdrop-blur-md shadow-xs w-full">
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
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code" class="w-full">
        <x-slot:codeSlot>&lt;x-aura::textarea wire:model="bio" rows="4" label="Biography" placeholder="Tell us about yourself..." /&gt;</x-slot:codeSlot>
    </x-aura::code>
    <x-aura::code class="w-full" title="Textarea Control">
        <x-slot:preview>
            <div class="w-full max-w-md">
                <x-aura::textarea wire:model="bio" rows="4" label="Biography" placeholder="Tell us about yourself..." />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::textarea wire:model="bio" rows="4" label="Biography" /&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>

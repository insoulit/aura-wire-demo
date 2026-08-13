<?php

use function Livewire\Volt\{layout, title};

layout('livewire.layout.component');
title('Field - Aura Wire');

?>

<div class="w-full max-w-3xl mx-auto space-y-6 flex flex-col items-center justify-center">
    <!-- Header -->
    <x-aura::card class="p-6 sm:p-8 bg-white/60 dark:bg-zinc-900/50 backdrop-blur-md shadow-xs w-full">
        <div class="space-y-2 max-w-2xl">
            <div class="flex items-center gap-2.5">
                <x-aura::kicker>Form Controls</x-aura::kicker>
                <x-aura::badge variant="subtle" size="sm">Component</x-aura::badge>
            </div>
            <x-aura::heading level="1" size="xl">Field &amp; Label</x-aura::heading>
            <x-aura::subheading size="md">
                Form field wrapper combining labels, mandatory indicators, help hints, and validation message handling.
            </x-aura::subheading>
        </div>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code" class="w-full">
        <x-slot:codeSlot>@verbatim<x-aura::field label="Username" hint="Enter handle" required>
    <x-aura::input placeholder="johndoe" />
</x-aura::field>@endverbatim</x-slot:codeSlot>
    </x-aura::code>
    <x-aura::code class="w-full" title="Field Wrapper">
        <x-slot:preview>
            <div class="w-full max-w-sm">
                <x-aura::field label="Username" hint="Enter a unique handle" required>
                    <x-aura::input placeholder="johndoe" />
                </x-aura::field>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::field label="Username" hint="Enter a unique handle" required>
    <x-aura::input placeholder="johndoe" />
</x-aura::field>@endverbatim</x-slot:codeSlot>
    </x-aura::code>
</div>

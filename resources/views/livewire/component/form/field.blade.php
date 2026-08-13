<?php

use function Livewire\Volt\{layout, title};

layout('livewire.layout.component');
title('Field - Aura Wire');

?>

<div class="w-full max-w-4xl mx-auto space-y-10 flex flex-col items-center justify-center">
    <!-- Header -->
    <x-aura::card >
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
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code" >
        <x-slot:codeSlot>@verbatim<x-aura::field label="Username" hint="Enter handle" required>
    <x-aura::input placeholder="johndoe" />
</x-aura::field>@endverbatim</x-slot:codeSlot>
    </x-aura::code>
    <x-aura::code  title="Field Wrapper">
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

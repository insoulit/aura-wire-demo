<?php

use function Livewire\Volt\{layout, title};

layout('livewire.layout.component');
title('Code - Aura Wire');

?>

<div class="w-full max-w-4xl mx-auto space-y-10 flex flex-col items-center justify-center">
    <!-- Header -->
    <x-aura::card>
        <div class="space-y-2 max-w-2xl">
            <div class="flex items-center gap-2.5">
                <x-aura::kicker>Display</x-aura::kicker>
                <x-aura::badge variant="subtle" size="sm">Component</x-aura::badge>
            </div>
            <x-aura::heading level="1" size="xl">Code</x-aura::heading>
            <x-aura::subheading size="md">
                Interactive code block component with Preview/Code tabs and clipboard copy functionality.
            </x-aura::subheading>
        </div>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code" >
        <x-slot:codeSlot>@verbatim<x-aura::code title="Example Code" language="blade">...</x-aura::code>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <x-aura::code  title="Code Block Component">
        <x-slot:preview>
            <div class="w-full">
                <x-aura::code  title="Example Code Block" language="blade">
                    <x-slot:preview>
                        <x-aura::button variant="primary">Click Me</x-aura::button>
                    </x-slot:preview>
                    <x-slot:codeSlot>@verbatim<x-aura::button variant="primary">Click Me</x-aura::button>@endverbatim</x-slot:codeSlot>
                </x-aura::code>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::code title="Example Code Block" language="blade">
    <x-slot:preview>
        <x-aura::button variant="primary">Click Me</x-aura::button>
    </x-slot:preview>
    <x-slot:codeSlot>&lt;x-aura::button variant="primary"&gt;Click Me&lt;/x-aura::button&gt;</x-slot:codeSlot>
</x-aura::code>@endverbatim</x-slot:codeSlot>
    </x-aura::code>
</div>

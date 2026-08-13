<?php

use function Livewire\Volt\{layout, title};

layout('livewire.layout.component');
title('Separator - Aura Wire');

?>

<div class="w-full max-w-4xl mx-auto space-y-10 flex flex-col items-center justify-center">
    <!-- Header -->
    <x-aura::card>
        <div class="space-y-2 max-w-2xl">
            <div class="flex items-center gap-2.5">
                <x-aura::kicker>Display</x-aura::kicker>
                <x-aura::badge variant="subtle" size="sm">Component</x-aura::badge>
            </div>
            <x-aura::heading level="1" size="xl">Separator</x-aura::heading>
            <x-aura::subheading size="md">
                Horizontal and vertical dividers for visually separating section content and UI groups.
            </x-aura::subheading>
        </div>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code" >
        <x-slot:codeSlot>@verbatim<x-aura::separator label="OR" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- Divider Showcase -->
    <x-aura::code  title="Divider Separator">
            <x-slot:preview>
                <div class="w-full max-w-lg space-y-4 py-2">
                    <x-aura::text size="sm" >Top Content Section</x-aura::text>
                    <x-aura::separator label="OR" />
                    <x-aura::text size="sm" >Bottom Content Section</x-aura::text>
                </div>
            </x-slot:preview>
            <x-slot:codeSlot>@verbatim<x-aura::text size="sm">Top Content Section</x-aura::text>
<x-aura::separator label="OR" />
<x-aura::text size="sm">Bottom Content Section</x-aura::text>@endverbatim</x-slot:codeSlot>
        </x-aura::code>
    

    <!-- Plain Line Separator -->
    <x-aura::code  title="Plain Separator">
            <x-slot:preview>
                <div class="w-full max-w-lg space-y-4 py-2">
                    <x-aura::text size="sm" >Section A</x-aura::text>
                    <x-aura::separator />
                    <x-aura::text size="sm" >Section B</x-aura::text>
                </div>
            </x-slot:preview>
            <x-slot:codeSlot>@verbatim<x-aura::text size="sm">Section A</x-aura::text>
<x-aura::separator />
<x-aura::text size="sm">Section B</x-aura::text>@endverbatim</x-slot:codeSlot>
        </x-aura::code>
    
</div>

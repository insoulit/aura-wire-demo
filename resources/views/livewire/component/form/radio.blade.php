<?php

use function Livewire\Volt\{layout, title, state};

layout('livewire.layout.component');
title('Radio - Aura Wire');

state(['plan' => 'pro']);

?>

<div class="w-full max-w-3xl mx-auto space-y-6 flex flex-col items-center justify-center">
    <!-- Header -->
    <x-aura::card >
        <div class="space-y-2 max-w-2xl">
            <div class="flex items-center gap-2.5">
                <x-aura::kicker>Form Controls</x-aura::kicker>
                <x-aura::badge variant="subtle" size="sm">Component</x-aura::badge>
            </div>
            <x-aura::heading level="1" size="xl">Radio</x-aura::heading>
            <x-aura::subheading size="md">
                Exclusive single-option radio buttons for selection lists and plan choices.
            </x-aura::subheading>
        </div>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code" >
        <x-slot:codeSlot>@verbatim<x-aura::radio wire:model="plan" value="pro" label="Pro Tier" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>
    <x-aura::code  title="Radio Options">
        <x-slot:preview>
            <div class="space-y-2 text-center flex flex-col items-center">
                <x-aura::radio wire:model="plan" value="free" label="Free Tier" />
                <x-aura::radio wire:model="plan" value="pro" label="Pro Tier ($19/mo)" />
                <x-aura::radio wire:model="plan" value="enterprise" label="Enterprise" />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::radio wire:model="plan" value="free" label="Free Tier" />
<x-aura::radio wire:model="plan" value="pro" label="Pro Tier" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>
</div>

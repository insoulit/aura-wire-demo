<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Select — Aura Wire')] 
class extends Component {
    public string $selected = 'us';
};

?>

<x-aura::container gap="8" :padding="false">

    <!-- Header -->
    <x-aura::card size="full" gap="2">

        <x-aura::flex align="center" gap="2.5">

            <x-aura::kicker>
                Form
            </x-aura::kicker>

            <x-aura::badge variant="subtle" size="sm">
                Component
            </x-aura::badge>

        </x-aura::flex>

        <x-aura::heading level="1" size="xl">
            Select
        </x-aura::heading>

        <x-aura::subheading size="md">
            Native option selection dropdowns supporting option arrays, key value maps, and field validation.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::select wire:model="selected" label="Country" :options="['us' => 'United States', 'ca' => 'Canada']" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Select Input -->
    <x-aura::code title="1. Select Input">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::select wire:model="selected" label="Country">
                    <option value="us">United States</option>
                    <option value="ca">Canada</option>
                    <option value="uk">United Kingdom</option>
                </x-aura::select>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::select wire:model="selected" label="Country">
                    <option value="us">United States</option>
                    <option value="ca">Canada</option>
                    <option value="uk">United Kingdom</option>
                </x-aura::select>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>

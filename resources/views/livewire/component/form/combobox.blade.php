<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Combobox — Aura Wire')] 
class extends Component {};

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
            Combobox
        </x-aura::heading>

        <x-aura::subheading size="md">
            Searchable select dropdown controls with live query filtering, keyboard accessibility, and direct inline options data.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::combobox wire:model="framework" label="Framework" :options="$options" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Country Selection -->
    <x-aura::code title="1. Searchable Country Selection">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::combobox
                    label="Select Country"
                    :options="[
                        ['value' => 'us', 'label' => 'United States'],
                        ['value' => 'ca', 'label' => 'Canada'],
                        ['value' => 'uk', 'label' => 'United Kingdom'],
                        ['value' => 'de', 'label' => 'Germany'],
                        ['value' => 'jp', 'label' => 'Japan'],
                        ['value' => 'au', 'label' => 'Australia'],
                    ]"
                    name="country"
                    placeholder="Search country..."
                />

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::combobox
                    label="Select Country"
                    :options="[
                        ['value' => 'us', 'label' => 'United States'],
                        ['value' => 'ca', 'label' => 'Canada'],
                        ['value' => 'uk', 'label' => 'United Kingdom'],
                        ['value' => 'de', 'label' => 'Germany'],
                        ['value' => 'jp', 'label' => 'Japan'],
                        ['value' => 'au', 'label' => 'Australia'],
                    ]"
                    name="country"
                    placeholder="Search country..."
                />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>

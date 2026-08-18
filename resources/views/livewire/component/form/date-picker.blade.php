<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Date Picker — Aura Wire')] 
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
            Date Picker
        </x-aura::heading>

        <x-aura::subheading size="md">
            Interactive calendar popover date selection control with default friendly date formatting.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::date-picker wire:model="publishDate" label="Publish Date" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Default Formatted Date -->
    <x-aura::code title="1. Date Picker">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::date-picker label="Select Target Date" value="2026-05-04" name="target_date" />

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::date-picker label="Select Target Date" value="2026-05-04" name="target_date" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>

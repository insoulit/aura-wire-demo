<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Error — Aura Wire')] 
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
            Error
        </x-aura::heading>

        <x-aura::subheading size="md">
            Inline validation error messages connected to Livewire error bags or explicit strings.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::error message="The email field is required." />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Field Error Message -->
    <x-aura::code title="1. Validation Errors">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex direction="col" align="start" gap="2">

                    <x-aura::error message="The email field is required." />

                    <x-aura::error message="Password must be at least 8 characters." />

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::error message="The email field is required." />

                <x-aura::error message="Password must be at least 8 characters." />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>

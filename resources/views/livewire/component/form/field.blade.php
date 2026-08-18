<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Field — Aura Wire')] 
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
            Field
        </x-aura::heading>

        <x-aura::subheading size="md">
            Form field wrapper combining labels, mandatory indicators, help hints, and validation message handling.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::field label="Username" hint="Enter handle" required>
                    <x-aura::input placeholder="johndoe" />
                </x-aura::field>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Field Wrapper -->
    <x-aura::code title="1. Field Wrapper">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::field label="Username" hint="Enter a unique handle" required>
                    <x-aura::input placeholder="johndoe" />
                </x-aura::field>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::field label="Username" hint="Enter a unique handle" required>
                    <x-aura::input placeholder="johndoe" />
                </x-aura::field>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>

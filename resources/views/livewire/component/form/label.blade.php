<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Label — Aura Wire')] 
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
            Label
        </x-aura::heading>

        <x-aura::subheading size="md">
            Accessible form input labels with size variants and required asterisk badges.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::label required>
                    Email Address
                </x-aura::label>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Form Labels -->
    <x-aura::code title="1. Form Labels">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex direction="col" align="start" gap="3">

                    <x-aura::label required>
                        Email Address
                    </x-aura::label>

                    <x-aura::label>
                        Optional Nickname
                    </x-aura::label>

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::label required>
                    Email Address
                </x-aura::label>

                <x-aura::label>
                    Optional Nickname
                </x-aura::label>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>

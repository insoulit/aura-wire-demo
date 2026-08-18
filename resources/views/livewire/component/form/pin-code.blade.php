<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('PIN Code — Aura Wire')] 
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
            PIN Code
        </x-aura::heading>

        <x-aura::subheading size="md">
            Multi digit OTP and security verification PIN inputs with auto focus movement.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::pin-code length="4" wire:model="otp" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Default PIN Code -->
    <x-aura::code title="1. Verification Code">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex direction="col" align="start" gap="2">

                    <x-aura::label>
                        Security Code
                    </x-aura::label>

                    <x-aura::pin-code length="4" size="md" />

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::flex direction="col" align="start" gap="2">

                    <x-aura::label>
                        Security Code
                    </x-aura::label>

                    <x-aura::pin-code length="4" size="md" />

                </x-aura::flex>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>

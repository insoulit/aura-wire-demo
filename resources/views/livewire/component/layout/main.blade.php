<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Main — Aura Wire')] 
class extends Component {};

?>

<x-aura::container gap="8" :padding="false">

    <!-- Header -->
    <x-aura::card size="full" gap="2">

        <x-aura::flex align="center" gap="2.5">

            <x-aura::kicker>
                Layout
            </x-aura::kicker>

            <x-aura::badge variant="subtle" size="sm">
                Component
            </x-aura::badge>

        </x-aura::flex>

        <x-aura::heading level="1" size="xl">
            Main
        </x-aura::heading>

        <x-aura::subheading size="md">
            Main container layout area enforcing consistent padding, max width boundary, and configurable X and Y axis alignment options.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::main alignX="center" alignY="center">
                    <!-- Main content -->
                </x-aura::main>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Default Centered Alignment -->
    <x-aura::code title="1. Centered Alignment">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::main alignX="center" alignY="center" :container="false">

                    <x-aura::text size="sm">
                        Centered Content (X and Y)
                    </x-aura::text>

                </x-aura::main>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::main alignX="center" alignY="center">
                    <x-aura::text size="sm">
                        Centered Content (X and Y)
                    </x-aura::text>
                </x-aura::main>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>

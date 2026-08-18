<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Navbar — Aura Wire')] 
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
            Navbar
        </x-aura::heading>

        <x-aura::subheading size="md">
            Lightweight, sticky application navigation bars with brand logos, inline links, and action triggers.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::navbar>
                    <x-slot:brandSlot>
                        Logo
                    </x-slot:brandSlot>

                    <x-slot:navigation>
                        Links
                    </x-slot:navigation>

                    <x-slot:actions>
                        Actions
                    </x-slot:actions>
                </x-aura::navbar>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Default Workspace Application Navbar -->
    <x-aura::code title="1. Workspace Navbar">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::navbar variant="bordered">

                    <x-slot:brandSlot>

                        <x-aura::flex align="center" gap="2.5">

                            <x-aura::icon name="sparkles" size="sm" variant="dark" shape="sm" />

                            <x-aura::heading level="2" size="xs" weight="bold">
                                Aura Wire
                            </x-aura::heading>

                        </x-aura::flex>

                    </x-slot:brandSlot>

                    <x-slot:navigation>

                        <x-aura::header.item href="#" active>
                            Overview
                        </x-aura::header.item>

                        <x-aura::header.item href="#">
                            Projects
                        </x-aura::header.item>

                        <x-aura::header.item href="#">
                            Analytics
                        </x-aura::header.item>

                    </x-slot:navigation>

                    <x-slot:actions>

                        <x-aura::button variant="primary" size="sm">
                            Create
                        </x-aura::button>

                    </x-slot:actions>

                </x-aura::navbar>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::navbar variant="bordered">

                    <x-slot:brandSlot>

                        <x-aura::flex align="center" gap="2.5">

                            <x-aura::icon name="sparkles" size="sm" variant="dark" shape="sm" />

                            <x-aura::heading level="2" size="xs" weight="bold">
                                Aura Wire
                            </x-aura::heading>

                        </x-aura::flex>

                    </x-slot:brandSlot>

                    <x-slot:navigation>

                        <x-aura::header.item href="#" active>
                            Overview
                        </x-aura::header.item>

                        <x-aura::header.item href="#">
                            Projects
                        </x-aura::header.item>

                        <x-aura::header.item href="#">
                            Analytics
                        </x-aura::header.item>

                    </x-slot:navigation>

                    <x-slot:actions>

                        <x-aura::button variant="primary" size="sm">
                            Create
                        </x-aura::button>

                    </x-slot:actions>

                </x-aura::navbar>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>

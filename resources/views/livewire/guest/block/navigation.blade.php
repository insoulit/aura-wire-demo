<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.app')] 
#[Title('Navigation and Footer — Guest Portal | Aura Wire')] 
class extends Component {};

?>

<x-aura::container size="4xl" gap="6">

    <!-- Top Header -->
    <x-aura::flex justify="between" gap="4">

        <x-aura::flex direction="col" gap="none">

            <x-aura::kicker>
                Design Blocks
            </x-aura::kicker>

            <x-aura::heading level="1" size="lg">
                Navigation and Footer
            </x-aura::heading>

        </x-aura::flex>

        <x-aura::flex justify="end" gap="2">

            <x-aura::button href="/guest#design-block" wire:navigate variant="secondary" size="sm" icon="arrow-left">
                Back
            </x-aura::button>

        </x-aura::flex>

    </x-aura::flex>

    <!-- 1. Header Navbar Block -->
    <x-aura::code title="1. Responsive Application Header Navbar">

        <x-slot:preview>

            <x-aura::card padding="md">

                <x-aura::flex align="center" justify="between" gap="4">

                    <!-- Brand & Desktop Navigation -->
                    <x-aura::flex align="center" width="auto" gap="6">

                        <x-aura::flex align="center" width="auto" gap="2.5">

                            <x-aura::avatar initials="AW" size="sm" />

                            <x-aura::heading level="3" size="sm">
                                Aura Wire
                            </x-aura::heading>

                        </x-aura::flex>

                        <x-aura::flex align="center" width="auto" gap="4">

                            <x-aura::link href="/guest#design-block" size="sm" variant="subtle">
                                Components
                            </x-aura::link>

                            <x-aura::link href="/guest#design-block" size="sm">
                                Blocks
                            </x-aura::link>

                            <x-aura::link href="/guest#full-template" size="sm" variant="subtle">
                                Templates
                            </x-aura::link>

                            <x-aura::link href="/components/installation" size="sm" variant="subtle">
                                Documentation
                            </x-aura::link>

                        </x-aura::flex>

                    </x-aura::flex>

                    <!-- Right Controls & Actions -->
                    <x-aura::flex align="center" width="auto" gap="2.5">

                        <x-aura::button variant="secondary" size="sm">
                            Login
                        </x-aura::button>

                        <x-aura::button variant="primary" size="sm">
                            Start
                        </x-aura::button>

                        <x-aura::icon-button icon="menu" variant="ghost" size="sm" label="Menu" />

                    </x-aura::flex>

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::card padding="md">
                    <x-aura::flex align="center" justify="between" gap="4">
                        <x-aura::flex align="center" width="auto" gap="6">
                            <x-aura::avatar initials="AW" size="sm" />
                            <x-aura::heading level="3" size="sm">
                                Aura Wire
                            </x-aura::heading>
                            <x-aura::flex align="center" width="auto" gap="4">
                                <x-aura::link href="/guest#design-block" size="sm">
                                    Components
                                </x-aura::link>
                                <x-aura::link href="/guest#full-template" size="sm">
                                    Templates
                                </x-aura::link>
                            </x-aura::flex>
                        </x-aura::flex>

                        <x-aura::flex align="center" width="auto" gap="2.5">
                            <x-aura::button variant="secondary" size="sm">
                                Login
                            </x-aura::button>
                            <x-aura::button variant="primary" size="sm">
                                Start
                            </x-aura::button>
                        </x-aura::flex>
                    </x-aura::flex>
                </x-aura::card>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Multi Column Footer Block -->
    <x-aura::code title="2. Application Multi Column Footer">

        <x-slot:preview>

            <x-aura::card padding="xl" gap="8">

                <x-aura::grid cols="1" md="4" gap="8">

                    <!-- Brand Column -->
                    <x-aura::flex direction="col" gap="3">

                        <x-aura::flex align="center" gap="2">

                            <x-aura::avatar initials="AW" size="sm" />

                            <x-aura::heading level="3" size="sm">
                                Aura Wire
                            </x-aura::heading>

                        </x-aura::flex>

                        <x-aura::text variant="subtle" size="sm">
                            Crafting production ready UI components for the modern Laravel Livewire ecosystem.
                        </x-aura::text>

                        <x-aura::tag variant="neutral" size="sm">
                            Systems Operational
                        </x-aura::tag>

                    </x-aura::flex>

                    <!-- Column 2: Product -->
                    <x-aura::flex direction="col" gap="2.5">

                        <x-aura::kicker>
                            PRODUCT
                        </x-aura::kicker>

                        <x-aura::flex direction="col" gap="2">

                            <x-aura::link href="/guest#design-block" size="sm" variant="subtle">
                                Component Catalog
                            </x-aura::link>

                            <x-aura::link href="/guest#design-block" size="sm" variant="subtle">
                                Design Blocks
                            </x-aura::link>

                            <x-aura::link href="/guest#full-template" size="sm" variant="subtle">
                                Starter Kits
                            </x-aura::link>

                        </x-aura::flex>

                    </x-aura::flex>

                    <!-- Column 3: Resources -->
                    <x-aura::flex direction="col" gap="2.5">

                        <x-aura::kicker>
                            RESOURCES
                        </x-aura::kicker>

                        <x-aura::flex direction="col" gap="2">

                            <x-aura::link href="/components/installation" size="sm" variant="subtle">
                                Documentation
                            </x-aura::link>

                            <x-aura::link href="https://github.com" target="_blank" size="sm" variant="subtle">
                                GitHub Repository
                            </x-aura::link>

                            <x-aura::link href="#" size="sm" variant="subtle">
                                Release Notes
                            </x-aura::link>

                        </x-aura::flex>

                    </x-aura::flex>

                    <!-- Column 4: Updates -->
                    <x-aura::flex direction="col" gap="2.5">

                        <x-aura::kicker>
                            UPDATES
                        </x-aura::kicker>

                        <x-aura::text variant="subtle" size="sm">
                            Subscribe for early component releases and updates.
                        </x-aura::text>

                        <x-aura::flex align="center" gap="2">

                            <x-aura::input placeholder="Email address..." size="sm" />

                            <x-aura::button variant="primary" size="sm">
                                Join
                            </x-aura::button>

                        </x-aura::flex>

                    </x-aura::flex>

                </x-aura::grid>

                <x-aura::separator />

                <!-- Footer Copyright Bottom Strip -->
                <x-aura::flex direction="col" sm="row" align="center" justify="between" gap="3">

                    <x-aura::text variant="subtle" size="sm">
                        &copy; {{ date('Y') }} Aura Wire UI. All rights reserved.
                    </x-aura::text>

                    <x-aura::flex align="center" width="auto" gap="4">

                        <x-aura::link href="#" size="sm" variant="subtle">
                            Privacy Policy
                        </x-aura::link>

                        <x-aura::link href="#" size="sm" variant="subtle">
                            Terms of Service
                        </x-aura::link>

                        <x-aura::link href="#" size="sm" variant="subtle">
                            Security
                        </x-aura::link>

                    </x-aura::flex>

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::card padding="xl" gap="8">
                    <x-aura::grid cols="1" md="4" gap="8">
                        <x-aura::flex direction="col" gap="3">
                            <x-aura::heading level="3" size="sm">
                                Aura Wire
                            </x-aura::heading>
                            <x-aura::text variant="subtle" size="sm">
                                Crafting UI components for modern Laravel Livewire.
                            </x-aura::text>
                        </x-aura::flex>
                        <!-- Other columns -->
                    </x-aura::grid>
                </x-aura::card>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>

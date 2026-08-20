<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Grid — Aura Wire')] 
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
            Grid
        </x-aura::heading>

        <x-aura::subheading size="md">
            Flexible CSS grid layout component for organizing content into responsive multi column layouts.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::grid cols="1" md="3" gap="4">

                    <x-aura::card>
                        Column 1
                    </x-aura::card>

                    <x-aura::card>
                        Column 2
                    </x-aura::card>

                    <x-aura::card>
                        Column 3
                    </x-aura::card>

                </x-aura::grid>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Responsive Three Column Grid -->
    <x-aura::code title="1. Responsive Three Column Grid">

        <x-slot:preview>

            <x-aura::grid cols="1" md="3" gap="4">

                <x-aura::card>

                    <x-aura::flex direction="col" gap="1">

                        <x-aura::heading level="3" size="sm">
                            Authentication
                        </x-aura::heading>

                        <x-aura::text variant="subtle" size="sm">
                            Secure sign in and session management.
                        </x-aura::text>

                    </x-aura::flex>

                </x-aura::card>

                <x-aura::card>

                    <x-aura::flex direction="col" gap="1">

                        <x-aura::heading level="3" size="sm">
                            Database
                        </x-aura::heading>

                        <x-aura::text variant="subtle" size="sm">
                            Automated migrations and model schemas.
                        </x-aura::text>

                    </x-aura::flex>

                </x-aura::card>

                <x-aura::card>

                    <x-aura::flex direction="col" gap="1">

                        <x-aura::heading level="3" size="sm">
                            API Gateway
                        </x-aura::heading>

                        <x-aura::text variant="subtle" size="sm">
                            Rate limiting and route throttling.
                        </x-aura::text>

                    </x-aura::flex>

                </x-aura::card>

            </x-aura::grid>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::grid cols="1" md="3" gap="4">

                    <x-aura::card>

                        <x-aura::flex direction="col" gap="1">

                            <x-aura::heading level="3" size="sm">
                                Authentication
                            </x-aura::heading>

                            <x-aura::text variant="subtle" size="sm">
                                Secure sign in and session management.
                            </x-aura::text>

                        </x-aura::flex>

                    </x-aura::card>

                    <x-aura::card>

                        <x-aura::flex direction="col" gap="1">

                            <x-aura::heading level="3" size="sm">
                                Database
                            </x-aura::heading>

                            <x-aura::text variant="subtle" size="sm">
                                Automated migrations and model schemas.
                            </x-aura::text>

                        </x-aura::flex>

                    </x-aura::card>

                    <x-aura::card>

                        <x-aura::flex direction="col" gap="1">

                            <x-aura::heading level="3" size="sm">
                                API Gateway
                            </x-aura::heading>

                            <x-aura::text variant="subtle" size="sm">
                                Rate limiting and route throttling.
                            </x-aura::text>

                        </x-aura::flex>

                    </x-aura::card>

                </x-aura::grid>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Two Column Form or Setting Layout -->
    <x-aura::code title="2. Two Column Form or Setting Layout">

        <x-slot:preview>

            <x-aura::grid cols="1" sm="2" gap="4">

                <x-aura::field label="First Name">

                    <x-aura::input placeholder="Alex" />

                </x-aura::field>

                <x-aura::field label="Last Name">

                    <x-aura::input placeholder="Morgan" />

                </x-aura::field>

                <x-aura::field label="Email Address">

                    <x-aura::input placeholder="alex@example.com" />

                </x-aura::field>

                <x-aura::field label="Role">

                    <x-aura::input placeholder="Administrator" />

                </x-aura::field>

            </x-aura::grid>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::grid cols="1" sm="2" gap="4">

                    <x-aura::field label="First Name">

                        <x-aura::input placeholder="Alex" />

                    </x-aura::field>

                    <x-aura::field label="Last Name">

                        <x-aura::input placeholder="Morgan" />

                    </x-aura::field>

                    <x-aura::field label="Email Address">

                        <x-aura::input placeholder="alex@example.com" />

                    </x-aura::field>

                    <x-aura::field label="Role">

                        <x-aura::input placeholder="Administrator" />

                    </x-aura::field>

                </x-aura::grid>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 3. Four Column Metric Cards -->
    <x-aura::code title="3. Four Column Metric Cards">

        <x-slot:preview>

            <x-aura::grid cols="1" sm="2" lg="4" gap="4">

                <x-aura::card>

                    <x-aura::flex direction="col" gap="1">

                        <x-aura::text variant="subtle" size="sm">
                            Total Users
                        </x-aura::text>

                        <x-aura::heading level="2" size="md">
                            24,520
                        </x-aura::heading>

                    </x-aura::flex>

                </x-aura::card>

                <x-aura::card>

                    <x-aura::flex direction="col" gap="1">

                        <x-aura::text variant="subtle" size="sm">
                            Active Sessions
                        </x-aura::text>

                        <x-aura::heading level="2" size="md">
                            1,842
                        </x-aura::heading>

                    </x-aura::flex>

                </x-aura::card>

                <x-aura::card>

                    <x-aura::flex direction="col" gap="1">

                        <x-aura::text variant="subtle" size="sm">
                            Revenue
                        </x-aura::text>

                        <x-aura::heading level="2" size="md">
                            $92,400
                        </x-aura::heading>

                    </x-aura::flex>

                </x-aura::card>

                <x-aura::card>

                    <x-aura::flex direction="col" gap="1">

                        <x-aura::text variant="subtle" size="sm">
                            Uptime
                        </x-aura::text>

                        <x-aura::heading level="2" size="md">
                            99.98%
                        </x-aura::heading>

                    </x-aura::flex>

                </x-aura::card>

            </x-aura::grid>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::grid cols="1" sm="2" lg="4" gap="4">

                    <x-aura::card>

                        <x-aura::flex direction="col" gap="1">

                            <x-aura::text variant="subtle" size="sm">
                                Total Users
                            </x-aura::text>

                            <x-aura::heading level="2" size="md">
                                24,520
                            </x-aura::heading>

                        </x-aura::flex>

                    </x-aura::card>

                    <x-aura::card>

                        <x-aura::flex direction="col" gap="1">

                            <x-aura::text variant="subtle" size="sm">
                                Active Sessions
                            </x-aura::text>

                            <x-aura::heading level="2" size="md">
                                1,842
                            </x-aura::heading>

                        </x-aura::flex>

                    </x-aura::card>

                    <x-aura::card>

                        <x-aura::flex direction="col" gap="1">

                            <x-aura::text variant="subtle" size="sm">
                                Revenue
                            </x-aura::text>

                            <x-aura::heading level="2" size="md">
                                $92,400
                            </x-aura::heading>

                        </x-aura::flex>

                    </x-aura::card>

                    <x-aura::card>

                        <x-aura::flex direction="col" gap="1">

                            <x-aura::text variant="subtle" size="sm">
                                Uptime
                            </x-aura::text>

                            <x-aura::heading level="2" size="md">
                                99.98%
                            </x-aura::heading>

                        </x-aura::flex>

                    </x-aura::card>

                </x-aura::grid>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>

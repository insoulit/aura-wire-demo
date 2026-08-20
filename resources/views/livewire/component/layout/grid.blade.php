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

    <!-- Component Props -->
    <x-aura::card size="full" gap="4">

        <x-aura::flex direction="col" gap="1">

            <x-aura::heading level="2" size="md">
                Component Props
            </x-aura::heading>

            <x-aura::text variant="subtle" size="sm">
                Available properties and configurations for the grid layout component.
            </x-aura::text>

        </x-aura::flex>

        <x-aura::table>

            <x-slot:header>

                <x-aura::table.column>
                    Prop
                </x-aura::table.column>

                <x-aura::table.column>
                    Default
                </x-aura::table.column>

                <x-aura::table.column>
                    Available Values
                </x-aura::table.column>

            </x-slot:header>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            cols
                        </x-aura::text>

                        <x-aura::tooltip text="Base grid columns count" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        1
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

                        <x-aura::badge variant="subtle" size="md">
                            1
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            2
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            3
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            4
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            5
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            6
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            12
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            none
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            sm
                        </x-aura::text>

                        <x-aura::tooltip text="Small screen breakpoint columns count (sm:)" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="subtle" size="md">
                        null
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

                        <x-aura::badge variant="subtle" size="md">
                            1
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            2
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            3
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            4
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            6
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            md
                        </x-aura::text>

                        <x-aura::tooltip text="Medium screen breakpoint columns count (md:)" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="subtle" size="md">
                        null
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

                        <x-aura::badge variant="subtle" size="md">
                            1
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            2
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            3
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            4
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            6
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            lg
                        </x-aura::text>

                        <x-aura::tooltip text="Large screen breakpoint columns count (lg:)" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="subtle" size="md">
                        null
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

                        <x-aura::badge variant="subtle" size="md">
                            1
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            2
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            3
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            4
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            6
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            12
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            gap
                        </x-aura::text>

                        <x-aura::tooltip text="Uniform grid column and row spacing gap" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="subtle" size="md">
                        null
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

                        <x-aura::badge variant="subtle" size="md">
                            1
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            2
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            3
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            4
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            6
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            8
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            inline
                        </x-aura::text>

                        <x-aura::tooltip text="Render with inline-grid display" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        false
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

                        <x-aura::badge variant="subtle" size="md">
                            true
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            false
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            as
                        </x-aura::text>

                        <x-aura::tooltip text="HTML markup element tag to render" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        div
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

                        <x-aura::badge variant="subtle" size="md">
                            div
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            section
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            article
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            main
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

        </x-aura::table>

    </x-aura::card>

</x-aura::container>

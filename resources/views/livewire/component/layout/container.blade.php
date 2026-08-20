<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Container — Aura Wire')] 
class extends Component {};

?>

<x-aura::container gap="8" :padding="false">

    <!-- Header -->
    <x-aura::card size="full" gap="2">

        <x-aura::flex align="center" gap="2.5">

            <x-aura::kicker>
                Layout
            </x-aura::kicker>

            <x-aura::badge variant="subtle" size="md">
                Component
            </x-aura::badge>

        </x-aura::flex>

        <x-aura::heading level="1" size="xl">
            Container
        </x-aura::heading>

        <x-aura::subheading size="md">
            Responsive max width container wrapper enforcing consistent horizontal padding and center alignment across screen sizes.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::container size="7xl">
                    <!-- Page content -->
                </x-aura::container>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Default Container -->
    <x-aura::code title="1. Default Container">

        <x-slot:preview>

            <x-aura::container size="sm">

                <x-aura::card size="full" gap="2">

                    <x-aura::text size="sm">
                        Container Content (sm size)
                    </x-aura::text>

                </x-aura::card>

            </x-aura::container>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::container size="sm">

                    <x-aura::card size="full" gap="2">

                        <x-aura::text size="sm">
                            Container Content (sm size)
                        </x-aura::text>

                    </x-aura::card>

                </x-aura::container>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Container Sizes -->
    <x-aura::code title="2. Custom Container Sizes">

        <x-slot:preview>

            <x-aura::flex direction="col" align="start" gap="4">

                <x-aura::container size="md">

                    <x-aura::card size="full" gap="2">

                        <x-aura::text size="sm">
                            size="md" (max-w-md)
                        </x-aura::text>

                    </x-aura::card>

                </x-aura::container>

                <x-aura::container size="xl">

                    <x-aura::card size="full" gap="2">

                        <x-aura::text size="sm">
                            size="xl" (max-w-xl)
                        </x-aura::text>

                    </x-aura::card>

                </x-aura::container>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::container size="md">

                    <x-aura::card size="full" gap="2">

                        <x-aura::text size="sm">
                            size="md" (max-w-md)
                        </x-aura::text>

                    </x-aura::card>

                </x-aura::container>

                <x-aura::container size="xl">

                    <x-aura::card size="full" gap="2">

                        <x-aura::text size="sm">
                            size="xl" (max-w-xl)
                        </x-aura::text>

                    </x-aura::card>

                </x-aura::container>
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
                Available properties and configurations for the container component.
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
                            size
                        </x-aura::text>

                        <x-aura::tooltip text="Maximum responsive container width constraint scale" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        6xl
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

                        <x-aura::badge variant="subtle" size="md">
                            sm
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            md
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            lg
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            xl
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            2xl
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            3xl
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            4xl
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            5xl
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            6xl
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            7xl
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            full
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

                        <x-aura::tooltip text="Vertical spacing gap between child blocks" position="top">

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
                            padding
                        </x-aura::text>

                        <x-aura::tooltip text="Responsive inner padding and directional preset" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        true
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

                        <x-aura::badge variant="subtle" size="md">
                            top
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            bottom
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            x
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            y
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            sm
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            md
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            lg
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            center
                        </x-aura::text>

                        <x-aura::tooltip text="Horizontally and vertically center inner children" position="top">

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

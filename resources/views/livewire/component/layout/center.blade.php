<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Center — Aura Wire')] 
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
            Center
        </x-aura::heading>

        <x-aura::subheading size="md">
            Layout primitive designed to center child elements along both horizontal and vertical axes effortlessly.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::center gap="3">
                    <x-aura::icon name="check" size="sm" />
                    <x-aura::text size="sm">
                        Centered Content
                    </x-aura::text>
                </x-aura::center>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Centered Content Example -->
    <x-aura::code title="1. Centered Status Notice">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::center gap="2">

                    <x-aura::icon name="check-circle-2" size="sm" />

                    <x-aura::text size="sm" weight="medium">
                        All cloud changes synchronized
                    </x-aura::text>

                </x-aura::center>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::center gap="2">
                    <x-aura::icon name="check-circle-2" size="sm" />
                    <x-aura::text size="sm" weight="medium">
                        All cloud changes synchronized
                    </x-aura::text>
                </x-aura::center>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Inline Centered Badge -->
    <x-aura::code title="2. Inline Centered Badge Element">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex align="center" gap="3">

                    <x-aura::text size="sm">
                        System status:
                    </x-aura::text>

                    <x-aura::center :inline="true" gap="1.5">

                        <x-aura::badge variant="neutral" size="sm">
                            Online
                        </x-aura::badge>

                    </x-aura::center>

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::center :inline="true" gap="1.5">
                    <x-aura::badge variant="neutral" size="sm">
                        Online
                    </x-aura::badge>
                </x-aura::center>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 3. Vertical Stack Center -->
    <x-aura::code title="3. Vertical Centered Action Box">

        <x-slot:preview>

            <x-aura::card size="2xl" padding="xl" gap="4">

                <x-aura::center gap="4">

                    <x-aura::flex direction="col" align="center" gap="2" class="text-center">

                        <x-aura::heading level="3" size="md">
                            Ready to deploy?
                        </x-aura::heading>

                        <x-aura::text size="sm" variant="subtle">
                            Instant zero downtime deployments with rollback support.
                        </x-aura::text>

                        <x-aura::button variant="primary" size="sm">
                            Deploy
                        </x-aura::button>

                    </x-aura::flex>

                </x-aura::center>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::center gap="4">
                    <x-aura::flex direction="col" align="center" gap="2" class="text-center">
                        <x-aura::heading level="3" size="md">Ready to deploy?</x-aura::heading>
                        <x-aura::button variant="primary" size="sm">Deploy</x-aura::button>
                    </x-aura::flex>
                </x-aura::center>
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
                Available properties and configurations for the center layout component.
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
                            inline
                        </x-aura::text>

                        <x-aura::tooltip text="Render as inline flex instead of block flex" position="top">

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
                            gap
                        </x-aura::text>

                        <x-aura::tooltip text="Spacing between child items" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        0
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::text size="sm" variant="subtle">
                        Spacing scale (0, 1, 2, 3, 4, 6, 8)
                    </x-aura::text>
                </x-aura::table.cell>

            </x-aura::table.row>

        </x-aura::table>

    </x-aura::card>

</x-aura::container>

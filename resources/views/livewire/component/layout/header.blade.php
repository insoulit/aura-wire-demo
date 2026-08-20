<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Header — Aura Wire')] 
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
            Header
        </x-aura::heading>

        <x-aura::subheading size="md">
            Flexible, responsive application headers and navigation bars with brand logos, navigation items, and actions.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::header>
                    <x-slot:brand>
                        Brand
                    </x-slot:brand>

                    <x-aura::header.item href="#" active>
                        Overview
                    </x-aura::header.item>

                    <x-slot:actions>
                        <x-aura::button size="sm">
                            Create
                        </x-aura::button>
                    </x-slot:actions>
                </x-aura::header>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. SaaS Workspace Application Header -->
    <x-aura::code title="1. Workspace Application Header">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::header :sticky="false" variant="bordered">

                    <x-slot:brand>

                        <x-aura::flex align="center" gap="2.5">

                            <x-aura::icon name="sparkles" size="sm" variant="dark" shape="sm" />

                            <x-aura::heading level="2" size="xs" weight="bold">
                                Aura Wire
                            </x-aura::heading>

                        </x-aura::flex>

                    </x-slot:brand>

                    <x-aura::header.item href="#" active>
                        Overview
                    </x-aura::header.item>

                    <x-aura::header.item href="#">
                        Deployments
                    </x-aura::header.item>

                    <x-aura::header.item href="#">
                        Analytics
                    </x-aura::header.item>

                    <x-slot:actions>

                        <x-aura::flex align="center" gap="2">

                            <x-aura::icon-button icon="bell" variant="ghost" size="sm" label="Notifications" />

                            <x-aura::avatar src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=100&auto=format&fit=crop&q=80" size="sm" />

                        </x-aura::flex>

                    </x-slot:actions>

                </x-aura::header>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::header variant="bordered">

                    <x-slot:brand>

                        <x-aura::flex align="center" gap="2.5">

                            <x-aura::icon name="sparkles" size="sm" variant="dark" shape="sm" />

                            <x-aura::heading level="2" size="xs" weight="bold">
                                Aura Wire
                            </x-aura::heading>

                        </x-aura::flex>

                    </x-slot:brand>

                    <x-aura::header.item href="#" active>
                        Overview
                    </x-aura::header.item>

                    <x-aura::header.item href="#">
                        Deployments
                    </x-aura::header.item>

                    <x-aura::header.item href="#">
                        Analytics
                    </x-aura::header.item>

                    <x-slot:actions>

                        <x-aura::icon-button icon="bell" variant="ghost" size="sm" label="Notifications" />

                        <x-aura::avatar src="..." size="sm" />

                    </x-slot:actions>

                </x-aura::header>
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
                Available properties and configurations for the header component.
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
                            sticky
                        </x-aura::text>

                        <x-aura::tooltip text="Fix header to top of the viewport on scroll" position="top">

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

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            variant
                        </x-aura::text>

                        <x-aura::tooltip text="Visual style theme and background treatment" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        default
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

                        <x-aura::badge variant="subtle" size="md">
                            default
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            dark
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            minimal
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            bordered
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            border
                        </x-aura::text>

                        <x-aura::tooltip text="Explicit bottom border line visibility" position="top">

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
                            responsive
                        </x-aura::text>

                        <x-aura::tooltip text="Responsive mobile menu navigation toggle support" position="top">

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

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            align
                        </x-aura::text>

                        <x-aura::tooltip text="Navigation link items alignment positioning" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        end
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

                        <x-aura::badge variant="subtle" size="md">
                            start
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            center
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            end
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

        </x-aura::table>

    </x-aura::card>

</x-aura::container>

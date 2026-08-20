<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Tabs — Aura Wire')] 
class extends Component {};

?>

<x-aura::container gap="8" :padding="false">

    <!-- Header -->
    <x-aura::card size="full" gap="2">

        <x-aura::flex align="center" gap="2.5">

            <x-aura::kicker>
                Display
            </x-aura::kicker>

            <x-aura::badge variant="subtle" size="md">
                Component
            </x-aura::badge>

        </x-aura::flex>

        <x-aura::heading level="1" size="xl">
            Tabs
        </x-aura::heading>

        <x-aura::subheading size="md">
            Tabbed navigation and content area switcher for profile settings, dashboards, and views.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::tab active="overview">
                    <x-aura::tab.tab name="overview">
                        Overview
                    </x-aura::tab.tab>

                    <x-aura::tab.tab name="analytics">
                        Analytics
                    </x-aura::tab.tab>
                </x-aura::tab>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Standard Horizontal Tabs -->
    <x-aura::code title="1. Horizontal Tabs">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::tab active="overview">

                    <x-aura::tab.tab name="overview">
                        Overview
                    </x-aura::tab.tab>

                    <x-aura::tab.tab name="analytics">
                        Analytics
                    </x-aura::tab.tab>

                    <x-aura::tab.tab name="reports">
                        Reports
                    </x-aura::tab.tab>

                    <x-aura::tab.tab name="settings">
                        Settings
                    </x-aura::tab.tab>

                </x-aura::tab>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::tab active="overview">

                    <x-aura::tab.tab name="overview">
                        Overview
                    </x-aura::tab.tab>

                    <x-aura::tab.tab name="analytics">
                        Analytics
                    </x-aura::tab.tab>

                    <x-aura::tab.tab name="reports">
                        Reports
                    </x-aura::tab.tab>

                    <x-aura::tab.tab name="settings">
                        Settings
                    </x-aura::tab.tab>

                </x-aura::tab>
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
                Available properties and configurations for the tabs component.
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
                            active
                        </x-aura::text>

                        <x-aura::tooltip text="Initial active tab identifier name" position="top">

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
                    <x-aura::text size="sm" variant="subtle">
                        Tab identifier string (e.g. overview, analytics)
                    </x-aura::text>
                </x-aura::table.cell>

            </x-aura::table.row>

        </x-aura::table>

    </x-aura::card>

</x-aura::container>

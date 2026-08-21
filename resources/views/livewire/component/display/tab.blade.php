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

    <!-- 2. Tabs with Icons -->
    <x-aura::code title="2. Tabs with Icons">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::tab active="general">

                    <x-aura::tab.tab name="general">

                        <x-slot:icon>
                            <x-aura::icon name="settings" size="xs" />
                        </x-slot:icon>

                        General

                    </x-aura::tab.tab>

                    <x-aura::tab.tab name="security">

                        <x-slot:icon>
                            <x-aura::icon name="shield" size="xs" />
                        </x-slot:icon>

                        Security

                    </x-aura::tab.tab>

                    <x-aura::tab.tab name="billing">

                        <x-slot:icon>
                            <x-aura::icon name="credit-card" size="xs" />
                        </x-slot:icon>

                        Billing

                    </x-aura::tab.tab>

                </x-aura::tab>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::tab active="general">
                    <x-aura::tab.tab name="general">
                        <x-slot:icon>
                            <x-aura::icon name="settings" size="xs" />
                        </x-slot:icon>
                        General
                    </x-aura::tab.tab>

                    <x-aura::tab.tab name="security">
                        <x-slot:icon>
                            <x-aura::icon name="shield" size="xs" />
                        </x-slot:icon>
                        Security
                    </x-aura::tab.tab>

                    <x-aura::tab.tab name="billing">
                        <x-slot:icon>
                            <x-aura::icon name="credit-card" size="xs" />
                        </x-slot:icon>
                        Billing
                    </x-aura::tab.tab>
                </x-aura::tab>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 3. Real World Settings Panel with Content -->
    <x-aura::code title="3. Real World Settings Card">

        <x-slot:preview>

            <x-aura::card size="2xl" padding="xl" gap="6">

                <x-aura::heading level="2" size="lg">
                    Project Workspace Settings
                </x-aura::heading>

                <div x-data="{ activeTab: 'general' }">

                    <x-aura::tab active="general">

                        <x-aura::tab.tab name="general">
                            General
                        </x-aura::tab.tab>

                        <x-aura::tab.tab name="collaborators">
                            Collaborators
                        </x-aura::tab.tab>

                        <x-aura::tab.tab name="integrations">
                            Integrations
                        </x-aura::tab.tab>

                    </x-aura::tab>

                    <div x-show="activeTab === 'general'" class="pt-4 space-y-4">

                        <x-aura::field label="Workspace Name">
                            <x-aura::input value="Insoulit Production" />
                        </x-aura::field>

                        <x-aura::field label="Custom Domain">
                            <x-aura::input placeholder="app.example.com" />
                        </x-aura::field>

                    </div>

                </div>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::card size="2xl" padding="xl" gap="6">
                    <x-aura::heading level="2" size="lg">
                        Project Workspace Settings
                    </x-aura::heading>

                    <x-aura::tab active="general">
                        <x-aura::tab.tab name="general">
                            General
                        </x-aura::tab.tab>

                        <x-aura::tab.tab name="collaborators">
                            Collaborators
                        </x-aura::tab.tab>

                        <x-aura::tab.tab name="integrations">
                            Integrations
                        </x-aura::tab.tab>
                    </x-aura::tab>
                </x-aura::card>
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

                        <x-aura::tooltip text="Identifier of the initially selected tab item" position="top">

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
                        Name identifier string
                    </x-aura::text>
                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            name (tab)
                        </x-aura::text>

                        <x-aura::tooltip text="Unique identifier name for individual tab item" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="subtle" size="md">
                        empty
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::text size="sm" variant="subtle">
                        Name string
                    </x-aura::text>
                </x-aura::table.cell>

            </x-aura::table.row>

        </x-aura::table>

    </x-aura::card>

</x-aura::container>

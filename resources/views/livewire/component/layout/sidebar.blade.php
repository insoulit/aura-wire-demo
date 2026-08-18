<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Sidebar — Aura Wire')] 
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
            Sidebar
        </x-aura::heading>

        <x-aura::subheading size="md">
            Collapsible vertical navigation sidebars with section groups, active state highlights, and icon items.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::sidebar>
                    <x-aura::sidebar.heading>
                        Navigation
                    </x-aura::sidebar.heading>

                    <x-aura::sidebar.item href="#" icon="layout-dashboard" active>
                        Dashboard
                    </x-aura::sidebar.item>
                </x-aura::sidebar>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Sidebar Navigation Container -->
    <x-aura::code title="1. Sidebar Navigation Container">

        <x-slot:preview>

            <x-aura::card size="sm" gap="2" class="max-w-xs">

                <x-aura::sidebar.heading>
                    Navigation
                </x-aura::sidebar.heading>

                <x-aura::sidebar.item href="#" active>
                    Dashboard
                </x-aura::sidebar.item>

                <x-aura::sidebar.item href="#" badge="12">
                    Alerts
                </x-aura::sidebar.item>

                <x-aura::sidebar.item href="#">
                    Settings
                </x-aura::sidebar.item>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::sidebar.heading>
                    Navigation
                </x-aura::sidebar.heading>

                <x-aura::sidebar.item href="#" active>
                    Dashboard
                </x-aura::sidebar.item>

                <x-aura::sidebar.item href="#" badge="12">
                    Alerts
                </x-aura::sidebar.item>

                <x-aura::sidebar.item href="#">
                    Settings
                </x-aura::sidebar.item>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Collapsible Sidebar Dropdown -->
    <x-aura::code title="2. Collapsible Sidebar Dropdown">

        <x-slot:preview>

            <x-aura::card size="sm" gap="2" class="max-w-xs">

                <x-aura::sidebar.dropdown label="Management" badge="Admin" :active="true">

                    <x-aura::sidebar.item href="#" active>
                        Accounts
                    </x-aura::sidebar.item>

                    <x-aura::sidebar.item href="#">
                        Roles
                    </x-aura::sidebar.item>

                    <x-aura::sidebar.item href="#">
                        Security
                    </x-aura::sidebar.item>

                </x-aura::sidebar.dropdown>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::sidebar.dropdown label="Management" badge="Admin" :active="true">

                    <x-aura::sidebar.item href="#" active>
                        Accounts
                    </x-aura::sidebar.item>

                    <x-aura::sidebar.item href="#">
                        Roles
                    </x-aura::sidebar.item>

                    <x-aura::sidebar.item href="#">
                        Security
                    </x-aura::sidebar.item>

                </x-aura::sidebar.dropdown>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>

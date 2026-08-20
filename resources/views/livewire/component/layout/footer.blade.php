<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Footer — Aura Wire')] 
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
            Footer
        </x-aura::heading>

        <x-aura::subheading size="md">
            Flexible, responsive application footers with brand logos, navigation links, and copyright bottom bars.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::footer>
                    <x-slot:brand>
                        Brand Content
                    </x-slot:brand>

                    <x-slot:bottom>
                        Copyright Content
                    </x-slot:bottom>
                </x-aura::footer>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Simple Application Footer -->
    <x-aura::code title="1. Simple Application Footer">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::footer variant="bordered">

                    <x-slot:brand>

                        <x-aura::flex align="center" gap="2.5">

                            <x-aura::icon name="sparkles" size="sm" variant="dark" shape="sm" />

                            <x-aura::heading level="2" size="xs" weight="bold">
                                Aura Wire
                            </x-aura::heading>

                        </x-aura::flex>

                    </x-slot:brand>

                    <x-aura::link href="#" size="sm">
                        Docs
                    </x-aura::link>

                    <x-aura::link href="#" size="sm">
                        GitHub
                    </x-aura::link>

                    <x-aura::link href="#" size="sm">
                        License
                    </x-aura::link>

                    <x-slot:bottom>

                        <x-aura::text size="sm" variant="subtle">
                            &copy; {{ date('Y') }} Aura Wire. All rights reserved.
                        </x-aura::text>

                        <x-aura::text size="sm" variant="mono">
                            Laravel &amp; Livewire
                        </x-aura::text>

                    </x-slot:bottom>

                </x-aura::footer>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::footer variant="bordered">

                    <x-slot:brand>

                        <x-aura::flex align="center" gap="2.5">

                            <x-aura::icon name="sparkles" size="sm" variant="dark" shape="sm" />

                            <x-aura::heading level="2" size="xs" weight="bold">
                                Aura Wire
                            </x-aura::heading>

                        </x-aura::flex>

                    </x-slot:brand>

                    <x-aura::link href="#" size="sm">
                        Docs
                    </x-aura::link>

                    <x-aura::link href="#" size="sm">
                        GitHub
                    </x-aura::link>

                    <x-aura::link href="#" size="sm">
                        License
                    </x-aura::link>

                    <x-slot:bottom>

                        <x-aura::text size="sm" variant="subtle">
                            &copy; {{ date('Y') }} Aura Wire. All rights reserved.
                        </x-aura::text>

                        <x-aura::text size="sm" variant="mono">
                            Laravel &amp; Livewire
                        </x-aura::text>

                    </x-slot:bottom>

                </x-aura::footer>
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
                Available properties and configurations for the footer component.
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
                            bordered
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            brand
                        </x-aura::text>

                        <x-aura::tooltip text="Brand name or logo component slot in left corner" position="top">

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
                        Brand logo string or slot
                    </x-aura::text>
                </x-aura::table.cell>

            </x-aura::table.row>

        </x-aura::table>

    </x-aura::card>

</x-aura::container>

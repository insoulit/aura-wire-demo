<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Card — Aura Wire')] 
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
            Card
        </x-aura::heading>

        <x-aura::subheading size="md">
            Versatile container cards with header, body, and action footer slots for dashboards, forms, and statistics.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::card>
                    <x-aura::heading level="3" size="md">
                        Card Title
                    </x-aura::heading>

                    <x-aura::text size="sm">
                        Card body content.
                    </x-aura::text>
                </x-aura::card>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Standard Header & Footer Card -->
    <x-aura::code title="1. Header and Action Footer Card">

        <x-slot:preview>

            <x-aura::card size="2xl" title="Project Statistics" description="Real time traffic and performance metrics.">

                <x-aura::flex direction="col" align="stretch" gap="2">

                    <x-aura::flex align="center" justify="between">

                        <x-aura::text size="sm" variant="subtle">
                            Total Unique Visitors
                        </x-aura::text>

                        <x-aura::text size="sm" variant="mono" weight="bold">
                            128,450
                        </x-aura::text>

                    </x-aura::flex>

                    <x-aura::flex align="center" justify="between">

                        <x-aura::text size="sm" variant="subtle">
                            Average Response Time
                        </x-aura::text>

                        <x-aura::text size="sm" variant="mono" weight="bold">
                            42 ms
                        </x-aura::text>

                    </x-aura::flex>

                </x-aura::flex>

                <x-slot:footer>

                    <x-aura::button variant="ghost" size="sm">
                        Logs
                    </x-aura::button>

                    <x-aura::button variant="primary" size="sm">
                        Export
                    </x-aura::button>

                </x-slot:footer>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::card size="2xl" title="Project Statistics" description="Real time traffic and performance metrics.">

                    <x-aura::flex direction="col" align="stretch" gap="2">

                        <x-aura::flex align="center" justify="between">

                            <x-aura::text size="sm" variant="subtle">
                                Total Unique Visitors
                            </x-aura::text>

                            <x-aura::text size="sm" variant="mono" weight="bold">
                                128,450
                            </x-aura::text>

                        </x-aura::flex>

                        <x-aura::flex align="center" justify="between">

                            <x-aura::text size="sm" variant="subtle">
                                Average Response Time
                            </x-aura::text>

                            <x-aura::text size="sm" variant="mono" weight="bold">
                                42 ms
                            </x-aura::text>

                        </x-aura::flex>

                    </x-aura::flex>

                    <x-slot:footer>

                        <x-aura::button variant="ghost" size="sm">
                            Logs
                        </x-aura::button>

                        <x-aura::button variant="primary" size="sm">
                            Export
                        </x-aura::button>

                    </x-slot:footer>

                </x-aura::card>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Interactive Clickable Card -->
    <x-aura::code title="2. Interactive Clickable Card">

        <x-slot:preview>

            <x-aura::card size="2xl" href="#" padding="lg" gap="3">

                <x-aura::flex align="center" justify="between">

                    <x-aura::heading level="3" size="md">
                        Explore Component Library
                    </x-aura::heading>

                    <x-aura::icon name="arrow-right" size="sm" />

                </x-aura::flex>

                <x-aura::text variant="subtle" size="sm">
                    Interactive card container with automated hover background and smooth transition styling.
                </x-aura::text>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::card href="/components" padding="lg" gap="3">
                    <x-aura::flex align="center" justify="between">
                        <x-aura::heading level="3" size="md">
                            Explore Component Library
                        </x-aura::heading>

                        <x-aura::icon name="arrow-right" size="sm" />
                    </x-aura::flex>

                    <x-aura::text variant="subtle" size="sm">
                        Interactive card container with automated hover background.
                    </x-aura::text>
                </x-aura::card>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 3. Undivided Card with Custom Padding -->
    <x-aura::code title="3. Undivided Card with Custom Padding">

        <x-slot:preview>

            <x-aura::grid cols="1" sm="2" gap="4">

                <x-aura::card padding="md" :divided="false" gap="2">

                    <x-aura::heading level="4" size="md">
                        Compact Padding (md)
                    </x-aura::heading>

                    <x-aura::text size="sm" variant="subtle">
                        Clean border without slot divider lines.
                    </x-aura::text>

                </x-aura::card>

                <x-aura::card padding="xl" :divided="false" gap="2">

                    <x-aura::heading level="4" size="md">
                        Spacious Padding (xl)
                    </x-aura::heading>

                    <x-aura::text size="sm" variant="subtle">
                        Generous breathing room with large rounded corners.
                    </x-aura::text>

                </x-aura::card>

            </x-aura::grid>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::card padding="md" :divided="false" gap="2">
                    <x-aura::heading level="4" size="md">
                        Compact Padding (md)
                    </x-aura::heading>

                    <x-aura::text size="sm" variant="subtle">
                        Clean border without slot divider lines.
                    </x-aura::text>
                </x-aura::card>

                <x-aura::card padding="xl" :divided="false" gap="2">
                    <x-aura::heading level="4" size="md">
                        Spacious Padding (xl)
                    </x-aura::heading>

                    <x-aura::text size="sm" variant="subtle">
                        Generous breathing room with large rounded corners.
                    </x-aura::text>
                </x-aura::card>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 4. Real World Profile Card -->
    <x-aura::code title="4. Real World User Card Pattern">

        <x-slot:preview>

            <x-aura::card size="2xl" padding="xl" gap="6">

                <x-aura::flex align="center" gap="4">

                    <x-aura::avatar src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=100&auto=format&fit=crop&q=80" size="lg" status="online" />

                    <x-aura::flex direction="col" align="start" gap="0.5">

                        <x-aura::heading level="3" size="md">
                            Alex Morgan
                        </x-aura::heading>

                        <x-aura::text size="sm" variant="subtle">
                            alex.morgan@example.com
                        </x-aura::text>

                    </x-aura::flex>

                </x-aura::flex>

                <x-aura::separator />

                <x-aura::flex align="center" justify="between">

                    <x-aura::tag variant="neutral" size="sm">
                        Team Lead
                    </x-aura::tag>

                    <x-aura::button variant="outline" size="sm">
                        Settings
                    </x-aura::button>

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::card size="2xl" padding="xl" gap="6">
                    <x-aura::flex align="center" gap="4">
                        <x-aura::avatar src="https://..." size="lg" status="online" />

                        <x-aura::flex direction="col" align="start" gap="0.5">
                            <x-aura::heading level="3" size="md">
                                Alex Morgan
                            </x-aura::heading>

                            <x-aura::text size="sm" variant="subtle">
                                alex.morgan@example.com
                            </x-aura::text>
                        </x-aura::flex>
                    </x-aura::flex>

                    <x-aura::separator />

                    <x-aura::flex align="center" justify="between">
                        <x-aura::tag variant="neutral" size="sm">
                            Team Lead
                        </x-aura::tag>

                        <x-aura::button variant="outline" size="sm">
                            Settings
                        </x-aura::button>
                    </x-aura::flex>
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
                Available properties and configurations for the card component.
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

                        <x-aura::tooltip text="Maximum container width constrain preset" position="top">

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
                            padding
                        </x-aura::text>

                        <x-aura::tooltip text="Internal padding scale and border radius curvature" position="top">

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
                            none
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            xs
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

                        <x-aura::badge variant="subtle" size="md">
                            xl
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            title
                        </x-aura::text>

                        <x-aura::tooltip text="Card header title text rendered automatically" position="top">

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
                        Title string
                    </x-aura::text>
                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            description
                        </x-aura::text>

                        <x-aura::tooltip text="Card header subtitle description" position="top">

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
                        Description string
                    </x-aura::text>
                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            gap
                        </x-aura::text>

                        <x-aura::tooltip text="Vertical gap between internal content blocks" position="top">

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
                            divided
                        </x-aura::text>

                        <x-aura::tooltip text="Draw subtle divider lines between header, body, and footer slots" position="top">

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

        </x-aura::table>

    </x-aura::card>

</x-aura::container>

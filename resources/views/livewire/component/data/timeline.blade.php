<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Timeline — Aura Wire')] 
class extends Component {};

?>

<x-aura::container gap="8" :padding="false">

    <!-- Header -->
    <x-aura::card size="full" gap="2">

        <x-aura::flex align="center" gap="2.5">

            <x-aura::kicker>
                Data
            </x-aura::kicker>

            <x-aura::badge variant="subtle" size="md">
                Component
            </x-aura::badge>

        </x-aura::flex>

        <x-aura::heading level="1" size="xl">
            Timeline
        </x-aura::heading>

        <x-aura::subheading size="md">
            Chronological event history and activity timeline tracker with monochrome status badges, custom icons, and slot content.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::timeline>
                    <x-aura::timeline.item
                        title="Package Released"
                        time="Just now"
                        variant="solid"
                        icon="package"
                        description="Deployed updates to production."
                    />
                </x-aura::timeline>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Activity Stream with Custom Icons -->
    <x-aura::code title="1. Activity Stream with Icons">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::timeline>

                    <x-aura::timeline.item
                        title="Package Released to Production"
                        time="Just now"
                        variant="solid"
                        icon="package"
                        description="Deployed 11 new UI components to the suite."
                    />

                    <x-aura::timeline.item
                        title="Pull Request Merged"
                        time="15 mins ago"
                        variant="subtle"
                        icon="git-merge"
                        description="Approved and merged into main branch."
                    />

                    <x-aura::timeline.item
                        title="Automated Test Suite Passed"
                        time="30 mins ago"
                        variant="solid"
                        icon="check"
                        description="Test suite passed with zero errors."
                    />

                </x-aura::timeline>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::timeline>
                    <x-aura::timeline.item
                        title="Package Released to Production"
                        time="Just now"
                        variant="solid"
                        icon="package"
                        description="Deployed 11 new UI components to the suite."
                    />

                    <x-aura::timeline.item
                        title="Pull Request Merged"
                        time="15 mins ago"
                        variant="subtle"
                        icon="git-merge"
                        description="Approved and merged into main branch."
                    />

                    <x-aura::timeline.item
                        title="Automated Test Suite Passed"
                        time="30 mins ago"
                        variant="solid"
                        icon="check"
                        description="Test suite passed with zero errors."
                    />
                </x-aura::timeline>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Indicator Variants -->
    <x-aura::code title="2. Indicator Variants (Solid and Subtle)">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::timeline>

                    <x-aura::timeline.item
                        title="Solid Indicator Pin"
                        time="Recent"
                        variant="solid"
                        description="High contrast solid dark or white background node."
                    />

                    <x-aura::timeline.item
                        title="Subtle Indicator Pin"
                        time="Earlier"
                        variant="subtle"
                        description="Subdued background node with border ring for secondary history."
                    />

                </x-aura::timeline>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::timeline>
                    <x-aura::timeline.item
                        title="Solid Indicator Pin"
                        time="Recent"
                        variant="solid"
                        description="High contrast solid dark or white background node."
                    />

                    <x-aura::timeline.item
                        title="Subtle Indicator Pin"
                        time="Earlier"
                        variant="subtle"
                        description="Subdued background node with border ring for secondary history."
                    />
                </x-aura::timeline>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 3. Rich Timeline with Slot Details -->
    <x-aura::code title="3. Rich Timeline with Slot Elements">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::timeline>

                    <x-aura::timeline.item
                        title="Security Audit Completed"
                        time="Today 14:30"
                        variant="solid"
                        icon="shield-check"
                        description="Static vulnerability scanning and dependency verification finished."
                    >

                        <x-aura::flex align="center" gap="2">

                            <x-aura::tag variant="neutral" size="sm">
                                0 Vulnerabilities
                            </x-aura::tag>

                            <x-aura::tag variant="subtle" size="sm">
                                Pest 3.0
                            </x-aura::tag>

                        </x-aura::flex>

                    </x-aura::timeline.item>

                    <x-aura::timeline.item
                        title="Database Migration Applied"
                        time="Today 11:00"
                        variant="subtle"
                        icon="database"
                        description="Added user indexing schema to sqlite snapshot."
                    >

                        <x-aura::link href="#" size="sm" underline="hover">
                            View Migration Diff
                        </x-aura::link>

                    </x-aura::timeline.item>

                </x-aura::timeline>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::timeline>
                    <x-aura::timeline.item
                        title="Security Audit Completed"
                        time="Today 14:30"
                        variant="solid"
                        icon="shield-check"
                        description="Static vulnerability scanning and dependency verification finished."
                    >
                        <x-aura::flex align="center" gap="2">
                            <x-aura::tag variant="neutral" size="sm">
                                0 Vulnerabilities
                            </x-aura::tag>

                            <x-aura::tag variant="subtle" size="sm">
                                Pest 3.0
                            </x-aura::tag>
                        </x-aura::flex>
                    </x-aura::timeline.item>

                    <x-aura::timeline.item
                        title="Database Migration Applied"
                        time="Today 11:00"
                        variant="subtle"
                        icon="database"
                        description="Added user indexing schema to sqlite snapshot."
                    >
                        <x-aura::link href="#" size="sm" underline="hover">
                            View Migration Diff
                        </x-aura::link>
                    </x-aura::timeline.item>
                </x-aura::timeline>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 4. Real World Order Shipment Status Card -->
    <x-aura::code title="4. Real World Order Shipment Tracker">

        <x-slot:preview>

            <x-aura::card padding="xl" gap="6">

                <x-aura::flex align="center" justify="between">

                    <x-aura::flex direction="col" gap="none">

                        <x-aura::kicker>
                            Tracking Number #AW 98402
                        </x-aura::kicker>

                        <x-aura::heading level="2" size="lg">
                            Shipment Progress
                        </x-aura::heading>

                    </x-aura::flex>

                    <x-aura::badge variant="neutral" size="sm">
                        In Transit
                    </x-aura::badge>

                </x-aura::flex>

                <x-aura::timeline>

                    <x-aura::timeline.item
                        title="Out for Delivery"
                        time="08:45 AM"
                        variant="solid"
                        icon="truck"
                        description="Package is on the vehicle with courier Alex V."
                    />

                    <x-aura::timeline.item
                        title="Arrived at Regional Sorting Facility"
                        time="03:15 AM"
                        variant="subtle"
                        icon="map-pin"
                        description="Processed at Central Distribution Center."
                    />

                    <x-aura::timeline.item
                        title="Order Dispatched from Warehouse"
                        time="Yesterday 06:00 PM"
                        variant="subtle"
                        icon="package-check"
                        description="Carrier pickup confirmed."
                    />

                </x-aura::timeline>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::card padding="xl" gap="6">
                    <x-aura::flex align="center" justify="between">
                        <x-aura::heading level="2" size="lg">
                            Shipment Progress
                        </x-aura::heading>

                        <x-aura::badge variant="neutral" size="sm">
                            In Transit
                        </x-aura::badge>
                    </x-aura::flex>

                    <x-aura::timeline>
                        <x-aura::timeline.item
                            title="Out for Delivery"
                            time="08:45 AM"
                            variant="solid"
                            icon="truck"
                            description="Package is on the vehicle with courier Alex V."
                        />

                        <x-aura::timeline.item
                            title="Arrived at Regional Sorting Facility"
                            time="03:15 AM"
                            variant="subtle"
                            icon="map-pin"
                            description="Processed at Central Distribution Center."
                        />

                        <x-aura::timeline.item
                            title="Order Dispatched from Warehouse"
                            time="Yesterday 06:00 PM"
                            variant="subtle"
                            icon="package-check"
                            description="Carrier pickup confirmed."
                        />
                    </x-aura::timeline>
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
                Available properties and configurations for the timeline and timeline item components.
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
                            title
                        </x-aura::text>

                        <x-aura::tooltip text="Primary event header title" position="top">

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
                            time
                        </x-aura::text>

                        <x-aura::tooltip text="Event timestamp or date label" position="top">

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
                        Time string (e.g. Just now, 15 mins ago)
                    </x-aura::text>
                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            description
                        </x-aura::text>

                        <x-aura::tooltip text="Secondary description paragraph details" position="top">

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
                            variant
                        </x-aura::text>

                        <x-aura::tooltip text="Indicator pin node fill theme styling" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        solid
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

                        <x-aura::badge variant="subtle" size="md">
                            solid
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            subtle
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            neutral
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            icon
                        </x-aura::text>

                        <x-aura::tooltip text="Optional Lucide icon placed within the event node dot" position="top">

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
                        Icon name string
                    </x-aura::text>
                </x-aura::table.cell>

            </x-aura::table.row>

        </x-aura::table>

    </x-aura::card>

</x-aura::container>

<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Badge — Aura Wire')] 
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
            Badge
        </x-aura::heading>

        <x-aura::subheading size="md">
            Compact status pills and indicators for metadata, order states, role tags, and metric notifications.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::badge variant="subtle" size="md">
                    Active
                </x-aura::badge>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Variants -->
    <x-aura::code title="1. Badge Variants">

        <x-slot:preview>

            <x-aura::flex align="center" gap="3" :wrap="true">

                <x-aura::badge variant="neutral">
                    Neutral
                </x-aura::badge>

                <x-aura::badge variant="subtle">
                    Subtle
                </x-aura::badge>

                <x-aura::badge variant="positive">
                    Completed
                </x-aura::badge>

                <x-aura::badge variant="warning">
                    Pending
                </x-aura::badge>

                <x-aura::badge variant="negative">
                    Failed
                </x-aura::badge>

                <x-aura::badge variant="info">
                    Progress
                </x-aura::badge>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::badge variant="neutral">
                    Neutral
                </x-aura::badge>

                <x-aura::badge variant="subtle">
                    Subtle
                </x-aura::badge>

                <x-aura::badge variant="positive">
                    Completed
                </x-aura::badge>

                <x-aura::badge variant="warning">
                    Pending
                </x-aura::badge>

                <x-aura::badge variant="negative">
                    Failed
                </x-aura::badge>

                <x-aura::badge variant="info">
                    Progress
                </x-aura::badge>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Sizes -->
    <x-aura::code title="2. Badge Sizes">

        <x-slot:preview>

            <x-aura::flex align="center" gap="3" :wrap="true">

                <x-aura::badge variant="subtle" size="xs">
                    Extra Small
                </x-aura::badge>

                <x-aura::badge variant="subtle" size="sm">
                    Small
                </x-aura::badge>

                <x-aura::badge variant="subtle" size="md">
                    Medium
                </x-aura::badge>

                <x-aura::badge variant="subtle" size="lg">
                    Large
                </x-aura::badge>

                <x-aura::badge variant="subtle" size="xl">
                    Extra Large
                </x-aura::badge>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::badge variant="subtle" size="xs">
                    Extra Small
                </x-aura::badge>

                <x-aura::badge variant="subtle" size="sm">
                    Small
                </x-aura::badge>

                <x-aura::badge variant="subtle" size="md">
                    Medium
                </x-aura::badge>

                <x-aura::badge variant="subtle" size="lg">
                    Large
                </x-aura::badge>

                <x-aura::badge variant="subtle" size="xl">
                    Extra Large
                </x-aura::badge>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 3. Real World List Pattern -->
    <x-aura::code title="3. Real World Status Cards">

        <x-slot:preview>

            <x-aura::flex direction="col" align="start" gap="2">

                <x-aura::card size="md" gap="2">

                    <x-aura::flex align="center" justify="between">

                        <x-aura::text size="sm" weight="medium">
                            Order 10429
                        </x-aura::text>

                        <x-aura::badge variant="positive" size="sm">
                            Paid
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::card>

                <x-aura::card size="md" gap="2">

                    <x-aura::flex align="center" justify="between">

                        <x-aura::text size="sm" weight="medium">
                            Order 10428
                        </x-aura::text>

                        <x-aura::badge variant="warning" size="sm">
                            Pending
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::card>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::card size="md" gap="2">

                    <x-aura::flex align="center" justify="between">

                        <x-aura::text size="sm" weight="medium">
                            Order 10429
                        </x-aura::text>

                        <x-aura::badge variant="positive" size="sm">
                            Paid
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::card>

                <x-aura::card size="md" gap="2">

                    <x-aura::flex align="center" justify="between">

                        <x-aura::text size="sm" weight="medium">
                            Order 10428
                        </x-aura::text>

                        <x-aura::badge variant="warning" size="sm">
                            Pending
                        </x-aura::badge>

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
                Available properties and configurations for the badge component.
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

                        <x-aura::tooltip text="Visual intent and semantic status color styling" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        neutral
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

                        <x-aura::badge variant="subtle" size="md">
                            neutral
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            subtle
                        </x-aura::badge>

                        <x-aura::badge variant="positive" size="md">
                            positive
                        </x-aura::badge>

                        <x-aura::badge variant="warning" size="md">
                            warning
                        </x-aura::badge>

                        <x-aura::badge variant="danger" size="md">
                            negative
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            info
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            primary
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            size
                        </x-aura::text>

                        <x-aura::tooltip text="Badge font size and padding dimensional scale" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        md
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

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
                            shape
                        </x-aura::text>

                        <x-aura::tooltip text="Border radius geometry shape" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        pill
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

                        <x-aura::badge variant="subtle" size="md">
                            pill
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            rounded
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

                        <x-aura::tooltip text="Optional leading icon name from icon suite" position="top">

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

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            pill
                        </x-aura::text>

                        <x-aura::tooltip text="Convenience boolean for rounded-full pill shape" position="top">

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
                            rounded
                        </x-aura::text>

                        <x-aura::tooltip text="Convenience boolean for rounded rectangle shape" position="top">

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

        </x-aura::table>

    </x-aura::card>

</x-aura::container>

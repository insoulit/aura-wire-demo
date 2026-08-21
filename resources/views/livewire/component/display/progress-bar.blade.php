<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Progress Bar — Aura Wire')] 
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
            Progress Bar
        </x-aura::heading>

        <x-aura::subheading size="md">
            Visual progress indicators for file uploads, storage quota limits, and system metrics.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::progress-bar :percent="75" size="md" variant="default" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Progress Scale -->
    <x-aura::code title="1. Progress Scale">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex direction="col" align="stretch" gap="4">

                    <x-aura::flex direction="col" align="stretch" gap="1">

                        <x-aura::flex align="center" justify="between">

                            <x-aura::text size="sm" weight="medium">
                                Profile Completion
                            </x-aura::text>

                            <x-aura::text size="sm" variant="mono" weight="bold">
                                75%
                            </x-aura::text>

                        </x-aura::flex>

                        <x-aura::progress-bar :percent="75" size="md" />

                    </x-aura::flex>

                    <x-aura::flex direction="col" align="stretch" gap="1">

                        <x-aura::flex align="center" justify="between">

                            <x-aura::text size="sm" weight="medium">
                                Storage Quota
                            </x-aura::text>

                            <x-aura::text size="sm" variant="mono" weight="bold">
                                40%
                            </x-aura::text>

                        </x-aura::flex>

                        <x-aura::progress-bar :percent="40" size="md" />

                    </x-aura::flex>

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::flex direction="col" align="stretch" gap="1">
                    <x-aura::flex align="center" justify="between">
                        <x-aura::text size="sm" weight="medium">
                            Profile Completion
                        </x-aura::text>

                        <x-aura::text size="sm" variant="mono" weight="bold">
                            75%
                        </x-aura::text>
                    </x-aura::flex>

                    <x-aura::progress-bar :percent="75" size="md" />
                </x-aura::flex>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Sizes -->
    <x-aura::code title="2. Size Variations">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex direction="col" align="stretch" gap="4">

                    <x-aura::flex direction="col" align="stretch" gap="1">

                        <x-aura::text size="xs" variant="subtle">
                            Small (sm - 6px)
                        </x-aura::text>

                        <x-aura::progress-bar :percent="60" size="sm" />

                    </x-aura::flex>

                    <x-aura::flex direction="col" align="stretch" gap="1">

                        <x-aura::text size="xs" variant="subtle">
                            Medium (md - 10px)
                        </x-aura::text>

                        <x-aura::progress-bar :percent="60" size="md" />

                    </x-aura::flex>

                    <x-aura::flex direction="col" align="stretch" gap="1">

                        <x-aura::text size="xs" variant="subtle">
                            Large (lg - 16px)
                        </x-aura::text>

                        <x-aura::progress-bar :percent="60" size="lg" />

                    </x-aura::flex>

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::progress-bar :percent="60" size="sm" />
                <x-aura::progress-bar :percent="60" size="md" />
                <x-aura::progress-bar :percent="60" size="lg" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 3. Intent Variants -->
    <x-aura::code title="3. Status and Intent Colors">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex direction="col" align="stretch" gap="4">

                    <x-aura::flex direction="col" align="stretch" gap="1">

                        <x-aura::flex align="center" justify="between">

                            <x-aura::text size="sm">
                                Standard Neutral
                            </x-aura::text>

                            <x-aura::text size="xs" variant="mono">
                                90%
                            </x-aura::text>

                        </x-aura::flex>

                        <x-aura::progress-bar :percent="90" variant="default" size="md" />

                    </x-aura::flex>

                    <x-aura::flex direction="col" align="stretch" gap="1">

                        <x-aura::flex align="center" justify="between">

                            <x-aura::text size="sm">
                                System Health (Positive)
                            </x-aura::text>

                            <x-aura::text size="xs" variant="mono">
                                98%
                            </x-aura::text>

                        </x-aura::flex>

                        <x-aura::progress-bar :percent="98" variant="positive" size="md" />

                    </x-aura::flex>

                    <x-aura::flex direction="col" align="stretch" gap="1">

                        <x-aura::flex align="center" justify="between">

                            <x-aura::text size="sm">
                                Memory Warning
                            </x-aura::text>

                            <x-aura::text size="xs" variant="mono">
                                82%
                            </x-aura::text>

                        </x-aura::flex>

                        <x-aura::progress-bar :percent="82" variant="warning" size="md" />

                    </x-aura::flex>

                    <x-aura::flex direction="col" align="stretch" gap="1">

                        <x-aura::flex align="center" justify="between">

                            <x-aura::text size="sm">
                                Storage Critical (Danger)
                            </x-aura::text>

                            <x-aura::text size="xs" variant="mono">
                                95%
                            </x-aura::text>

                        </x-aura::flex>

                        <x-aura::progress-bar :percent="95" variant="danger" size="md" />

                    </x-aura::flex>

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::progress-bar :percent="90" variant="default" size="md" />
                <x-aura::progress-bar :percent="98" variant="positive" size="md" />
                <x-aura::progress-bar :percent="82" variant="warning" size="md" />
                <x-aura::progress-bar :percent="95" variant="danger" size="md" />
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
                Available properties and configurations for the progress bar component.
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
                            percent
                        </x-aura::text>

                        <x-aura::tooltip text="Percentage value to fill the progress track (0-100)" position="top">

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
                        Numeric percentage from 0 to 100
                    </x-aura::text>
                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            size
                        </x-aura::text>

                        <x-aura::tooltip text="Height thickness of the progress bar track" position="top">

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
                            variant
                        </x-aura::text>

                        <x-aura::tooltip text="Color tone fill for the progress bar indicator" position="top">

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
                            subtle
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            positive
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            warning
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            danger
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

        </x-aura::table>

    </x-aura::card>

</x-aura::container>

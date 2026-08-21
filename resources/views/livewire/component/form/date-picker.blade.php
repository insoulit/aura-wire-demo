<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Date Picker — Aura Wire')] 
class extends Component {
    public string $startDate = '2026-06-15';
    public string $endDate = '2026-06-20';
};

?>

<x-aura::container gap="8" :padding="false">

    <!-- Header -->
    <x-aura::card size="full" gap="2">

        <x-aura::flex align="center" gap="2.5">

            <x-aura::kicker>
                Form
            </x-aura::kicker>

            <x-aura::badge variant="subtle" size="md">
                Component
            </x-aura::badge>

        </x-aura::flex>

        <x-aura::heading level="1" size="xl">
            Date Picker
        </x-aura::heading>

        <x-aura::subheading size="md">
            Interactive calendar popover date selection control with default friendly date formatting.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::date-picker wire:model="publishDate" label="Publish Date" format="MMMM D, YYYY" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Default Formatted Date -->
    <x-aura::code title="1. Standard Date Picker">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::date-picker label="Scheduled Launch Date" value="2026-05-04" name="launch_date" />

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::date-picker label="Scheduled Launch Date" value="2026-05-04" name="launch_date" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Date Formatting Formats -->
    <x-aura::code title="2. Display Formatting Variants">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex direction="col" gap="4">

                    <x-aura::date-picker
                        label="ISO Standard Format"
                        value="2026-05-04"
                        format="YYYY-MM-DD"
                    />

                    <x-aura::date-picker
                        label="European Slash Format"
                        value="2026-05-04"
                        format="DD/MM/YYYY"
                    />

                    <x-aura::date-picker
                        label="Abbreviated Month Format"
                        value="2026-05-04"
                        format="MMM D, YYYY"
                    />

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::date-picker label="ISO Standard" value="2026-05-04" format="YYYY-MM-DD" />
                <x-aura::date-picker label="European Slash" value="2026-05-04" format="DD/MM/YYYY" />
                <x-aura::date-picker label="Abbreviated Month" value="2026-05-04" format="MMM D, YYYY" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 3. Real World Date Range Form -->
    <x-aura::code title="3. Event Schedule Range Form">

        <x-slot:preview>

            <x-aura::card size="2xl" padding="xl" gap="6">

                <x-aura::heading level="3" size="md">
                    Conference Schedule Window
                </x-aura::heading>

                <x-aura::grid cols="2" gap="4">

                    <x-aura::date-picker
                        wire:model="startDate"
                        label="Start Date"
                    />

                    <x-aura::date-picker
                        wire:model="endDate"
                        label="End Date"
                    />

                </x-aura::grid>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::card size="2xl" padding="xl" gap="6">
                    <x-aura::heading level="3" size="md">
                        Conference Schedule Window
                    </x-aura::heading>

                    <x-aura::grid cols="2" gap="4">
                        <x-aura::date-picker wire:model="startDate" label="Start Date" />
                        <x-aura::date-picker wire:model="endDate" label="End Date" />
                    </x-aura::grid>
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
                Available properties and configurations for the date picker component.
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
                            format
                        </x-aura::text>

                        <x-aura::tooltip text="Date presentation display formatting token" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        MMMM D, YYYY
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

                        <x-aura::badge variant="subtle" size="md">
                            MMMM D, YYYY
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            YYYY-MM-DD
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            DD/MM/YYYY
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            label
                        </x-aura::text>

                        <x-aura::tooltip text="Header label string for the input" position="top">

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
                        Label string
                    </x-aura::text>
                </x-aura::table.cell>

            </x-aura::table.row>

        </x-aura::table>

    </x-aura::card>

</x-aura::container>

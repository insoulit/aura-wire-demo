<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Combobox — Aura Wire')] 
class extends Component {
    public string $country = 'us';
    public string $framework = 'laravel';
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
            Combobox
        </x-aura::heading>

        <x-aura::subheading size="md">
            Searchable select dropdown controls with live query filtering, keyboard accessibility, and direct inline options data.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::combobox wire:model="framework" label="Framework" :options="['laravel' => 'Laravel', 'vue' => 'Vue.js']" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Country Selection -->
    <x-aura::code title="1. Searchable Country Selection">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::combobox
                    label="Select Country"
                    :options="[
                        ['value' => 'us', 'label' => 'United States'],
                        ['value' => 'ca', 'label' => 'Canada'],
                        ['value' => 'uk', 'label' => 'United Kingdom'],
                        ['value' => 'de', 'label' => 'Germany'],
                        ['value' => 'jp', 'label' => 'Japan'],
                        ['value' => 'au', 'label' => 'Australia'],
                    ]"
                    name="country"
                    placeholder="Search country..."
                />

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::combobox
                    label="Select Country"
                    :options="[
                        ['value' => 'us', 'label' => 'United States'],
                        ['value' => 'ca', 'label' => 'Canada'],
                        ['value' => 'uk', 'label' => 'United Kingdom'],
                        ['value' => 'de', 'label' => 'Germany'],
                        ['value' => 'jp', 'label' => 'Japan'],
                        ['value' => 'au', 'label' => 'Australia'],
                    ]"
                    name="country"
                    placeholder="Search country..."
                />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Technology Stack Selector -->
    <x-aura::code title="2. Tech Stack Selector with Livewire Model">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::combobox
                    wire:model.live="framework"
                    label="Primary Framework"
                    placeholder="Search frameworks..."
                    :options="[
                        'laravel' => 'Laravel (PHP)',
                        'livewire' => 'Livewire (Full Stack)',
                        'alpine' => 'Alpine.js (Micro JS)',
                        'tailwind' => 'Tailwind CSS (Styling)',
                        'react' => 'React (Frontend)',
                        'nextjs' => 'Next.js (React Framework)',
                    ]"
                />

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::combobox
                    wire:model="framework"
                    label="Primary Framework"
                    placeholder="Search frameworks..."
                    :options="[
                        'laravel' => 'Laravel (PHP)',
                        'livewire' => 'Livewire (Full Stack)',
                        'alpine' => 'Alpine.js (Micro JS)',
                        'tailwind' => 'Tailwind CSS (Styling)',
                    ]"
                />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 3. Timezone Selector -->
    <x-aura::code title="3. Timezone Selector">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::combobox
                    label="Account Timezone"
                    value="utc"
                    placeholder="Search timezones..."
                    :options="[
                        'utc' => 'UTC (Coordinated Universal Time)',
                        'est' => 'EST (America/New York)',
                        'cst' => 'CST (America/Chicago)',
                        'pst' => 'PST (America/Los Angeles)',
                        'gmt' => 'GMT (Europe/London)',
                        'cet' => 'CET (Europe/Berlin)',
                    ]"
                />

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::combobox
                    label="Account Timezone"
                    value="utc"
                    placeholder="Search timezones..."
                    :options="[
                        'utc' => 'UTC (Coordinated Universal Time)',
                        'est' => 'EST (America/New York)',
                        'pst' => 'PST (America/Los Angeles)',
                    ]"
                />
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
                Available properties and configurations for the combobox component.
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
                            options
                        </x-aura::text>

                        <x-aura::tooltip text="Array of options map or flat key value pair objects" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="subtle" size="md">
                        []
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::text size="sm" variant="subtle">
                        Associative array or items array
                    </x-aura::text>
                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            label
                        </x-aura::text>

                        <x-aura::tooltip text="Header label string for the combobox" position="top">

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

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            placeholder
                        </x-aura::text>

                        <x-aura::tooltip text="Placeholder text before option selection" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        Select option...
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::text size="sm" variant="subtle">
                        Placeholder string
                    </x-aura::text>
                </x-aura::table.cell>

            </x-aura::table.row>

        </x-aura::table>

    </x-aura::card>

</x-aura::container>

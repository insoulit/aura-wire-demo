<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('List — Aura Wire')] 
class extends Component {
    public function with(): array
    {
        return [
            'features' => [
                ['title' => 'Tailwind CSS v4 Integration', 'subtitle' => 'Zero config styling with dark mode and CSS variables.', 'image' => 'https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?w=100&auto=format&fit=crop&q=80', 'badge' => 'Core'],
                ['title' => 'Livewire Volt Single File Views', 'subtitle' => 'Unified component logic and Blade templating in one file.', 'image' => 'https://images.unsplash.com/photo-1555066931-4365d14bab8c?w=100&auto=format&fit=crop&q=80', 'badge' => 'Blade'],
                ['title' => 'Polymorphic Component Engine', 'subtitle' => 'Flexible prop schemas for links, buttons, and custom slots.', 'image' => 'https://images.unsplash.com/photo-1527443224154-c4a3942d3acf?w=100&auto=format&fit=crop&q=80', 'badge' => 'UI'],
            ],
            'compactList' => [
                ['title' => 'System Backup Completed', 'subtitle' => 'Automated snapshot created at 04:00 AM', 'badge' => 'Success'],
                ['title' => 'SSL Certificate Renewed', 'subtitle' => 'Valid until August 2027', 'badge' => 'Active'],
                ['title' => 'Database Vacuum Run', 'subtitle' => 'Cleared 420MB unused index space', 'badge' => 'Optimized'],
            ],
            'gridCards' => [
                ['title' => 'Enterprise SLA', 'subtitle' => '99.99% guaranteed uptime', 'badge' => 'Tier 1'],
                ['title' => 'Dedicated VPC', 'subtitle' => 'Isolated virtual cloud environment', 'badge' => 'Security'],
            ],
            'simpleItems' => [
                ['title' => 'Real time websocket notifications', 'subtitle' => 'Sub millisecond dispatch'],
                ['title' => 'Role based access controls', 'subtitle' => 'Granular team permissions'],
            ],
        ];
    }
};

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
            List
        </x-aura::heading>

        <x-aura::subheading size="md">
            Clean list components supporting media rows, compact list groups, cards, and minimalist layout.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::list :items="$items" variant="media" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Media List -->
    <x-aura::code title="1. Media List">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::list :items="$features" variant="media" />

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::list :items="[
                    ['title' => 'Tailwind CSS v4 Integration', 'subtitle' => 'Zero config styling with dark mode.', 'image' => 'https://...', 'badge' => 'Core'],
                    ['title' => 'Livewire Volt Single File Views', 'subtitle' => 'Unified component logic in one file.', 'image' => 'https://...', 'badge' => 'Blade'],
                ]" variant="media" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Compact List Group -->
    <x-aura::code title="2. Compact List Group">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::list :items="$compactList" variant="compact" />

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::list :items="[
                    ['title' => 'System Backup Completed', 'subtitle' => 'Automated snapshot created', 'badge' => 'Success'],
                    ['title' => 'SSL Certificate Renewed', 'subtitle' => 'Valid until August 2027', 'badge' => 'Active'],
                ]" variant="compact" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 3. Grid Cards List -->
    <x-aura::code title="3. Grid Cards List">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::list :items="$gridCards" variant="grid" />

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::list :items="[
                    ['title' => 'Enterprise SLA', 'subtitle' => '99.99% guaranteed uptime', 'badge' => 'Tier 1'],
                    ['title' => 'Dedicated VPC', 'subtitle' => 'Isolated virtual cloud environment', 'badge' => 'Security'],
                ]" variant="grid" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 4. Simple Text List -->
    <x-aura::code title="4. Simple Text List">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::list :items="$simpleItems" variant="simple" />

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::list :items="[
                    ['title' => 'Real time websocket notifications', 'subtitle' => 'Sub millisecond dispatch'],
                    ['title' => 'Role based access controls', 'subtitle' => 'Granular team permissions'],
                ]" variant="simple" />
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
                Available properties and configurations for the list component.
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
                            items
                        </x-aura::text>

                        <x-aura::tooltip text="Array or collection of items to display" position="top">

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
                        Array of objects or associative arrays
                    </x-aura::text>
                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            variant
                        </x-aura::text>

                        <x-aura::tooltip text="Visual presentation variant layout" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        card
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

                        <x-aura::badge variant="subtle" size="md">
                            media
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            compact
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            grid
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            simple
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            card
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

        </x-aura::table>

    </x-aura::card>

</x-aura::container>

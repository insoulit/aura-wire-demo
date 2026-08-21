<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Popover — Aura Wire')] 
class extends Component {};

?>

<x-aura::container gap="8" :padding="false">

    <!-- Header -->
    <x-aura::card size="full" gap="2">

        <x-aura::flex align="center" gap="2.5">

            <x-aura::kicker>
                Feedback
            </x-aura::kicker>

            <x-aura::badge variant="subtle" size="md">
                Component
            </x-aura::badge>

        </x-aura::flex>

        <x-aura::heading level="1" size="xl">
            Popover
        </x-aura::heading>

        <x-aura::subheading size="md">
            Floating rich content popover panels with click outside dismissal, flexible alignments, and customizable trigger slots.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::popover align="left" width="72">
                    <x-slot:trigger>
                        <x-aura::button variant="secondary" size="sm">
                            Filter
                        </x-aura::button>
                    </x-slot:trigger>

                    <x-aura::text size="sm">
                        Popover content.
                    </x-aura::text>
                </x-aura::popover>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Filter Popover -->
    <x-aura::code title="1. Filter Popover (align=left)">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::popover align="left" width="72">

                    <x-slot:trigger>

                        <x-aura::button variant="secondary" size="sm" icon="sliders-horizontal">
                            Filter
                        </x-aura::button>

                    </x-slot:trigger>

                    <x-aura::flex direction="col" align="stretch" gap="3">

                        <x-aura::flex align="center" justify="between">

                            <x-aura::text size="xs" weight="bold">
                                CRITERIA
                            </x-aura::text>

                            <x-aura::badge variant="subtle" size="sm">
                                Active
                            </x-aura::badge>

                        </x-aura::flex>

                        <x-aura::flex direction="col" align="start" gap="2">

                            <x-aura::checkbox label="In Stock Only" :checked="true" />

                            <x-aura::checkbox label="On Sale" :checked="true" />

                        </x-aura::flex>

                        <x-aura::flex align="center" justify="end" gap="2">

                            <x-aura::button variant="primary" size="xs">
                                Apply
                            </x-aura::button>

                        </x-aura::flex>

                    </x-aura::flex>

                </x-aura::popover>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::popover align="left" width="72">
                    <x-slot:trigger>
                        <x-aura::button variant="secondary" size="sm" icon="sliders-horizontal">
                            Filter
                        </x-aura::button>
                    </x-slot:trigger>

                    <x-aura::flex direction="col" align="stretch" gap="3">
                        <x-aura::checkbox label="In Stock Only" :checked="true" />
                        <x-aura::checkbox label="On Sale" :checked="true" />

                        <x-aura::button variant="primary" size="xs">
                            Apply
                        </x-aura::button>
                    </x-aura::flex>
                </x-aura::popover>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. User Info Popover -->
    <x-aura::code title="2. User Hover Card (align=center)">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::popover align="center" width="80">

                    <x-slot:trigger>

                        <x-aura::button variant="outline" size="sm" icon="user">
                            Alex
                        </x-aura::button>

                    </x-slot:trigger>

                    <x-aura::flex direction="col" gap="3">

                        <x-aura::flex align="center" gap="3">

                            <x-aura::avatar src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=100&auto=format&fit=crop&q=80" size="md" status="online" />

                            <x-aura::flex direction="col" align="start" gap="0.5">

                                <x-aura::text size="sm" weight="semibold">
                                    Alex Morgan
                                </x-aura::text>

                                <x-aura::text size="xs" variant="subtle">
                                    Lead Design Engineer
                                </x-aura::text>

                            </x-aura::flex>

                        </x-aura::flex>

                        <x-aura::separator />

                        <x-aura::button variant="primary" size="xs">
                            View Profile
                        </x-aura::button>

                    </x-aura::flex>

                </x-aura::popover>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::popover align="center" width="80">
                    <x-slot:trigger>
                        <x-aura::button variant="outline" size="sm" icon="user">
                            Alex
                        </x-aura::button>
                    </x-slot:trigger>

                    <x-aura::flex direction="col" gap="3">
                        <x-aura::flex align="center" gap="3">
                            <x-aura::avatar src="https://..." size="md" status="online" />
                            <x-aura::text size="sm" weight="semibold">Alex Morgan</x-aura::text>
                        </x-aura::flex>

                        <x-aura::separator />

                        <x-aura::button variant="primary" size="xs">
                            View Profile
                        </x-aura::button>
                    </x-aura::flex>
                </x-aura::popover>
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
                Available properties and configurations for the popover component.
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
                            align
                        </x-aura::text>

                        <x-aura::tooltip text="Horizontal anchor alignment relative to the trigger element" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        right
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

                        <x-aura::badge variant="subtle" size="md">
                            left
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            center
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            right
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            width
                        </x-aura::text>

                        <x-aura::tooltip text="Width dimension of the popup panel" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        64
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

                        <x-aura::badge variant="subtle" size="md">
                            48
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            56
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            64
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            72
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            80
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            96
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

        </x-aura::table>

    </x-aura::card>

</x-aura::container>

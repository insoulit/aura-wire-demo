<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Button Group — Aura Wire')] 
class extends Component {};

?>

<x-aura::container gap="8" :padding="false">

    <!-- Header -->
    <x-aura::card size="full" gap="2">

        <x-aura::flex align="center" gap="2.5">

            <x-aura::kicker>
                Action
            </x-aura::kicker>

            <x-aura::badge variant="subtle" size="md">
                Component
            </x-aura::badge>

        </x-aura::flex>

        <x-aura::heading level="1" size="xl">
            Button Group
        </x-aura::heading>

        <x-aura::subheading size="md">
            Group related buttons into cohesive segmented controls, toolbars, and layout actions.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::action.group>

                    <x-aura::button variant="secondary" size="sm">
                        Day
                    </x-aura::button>

                    <x-aura::button variant="secondary" size="sm">
                        Week
                    </x-aura::button>

                </x-aura::action.group>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Horizontal Segmented Controls -->
    <x-aura::code title="1. Horizontal Segmented Controls">

        <x-slot:preview>

            <x-aura::flex direction="col" align="start" gap="4">

                <x-aura::action.group>

                    <x-aura::button variant="primary" size="sm">
                        Day
                    </x-aura::button>

                    <x-aura::button variant="secondary" size="sm">
                        Week
                    </x-aura::button>

                    <x-aura::button variant="secondary" size="sm">
                        Month
                    </x-aura::button>

                    <x-aura::button variant="secondary" size="sm">
                        Year
                    </x-aura::button>

                </x-aura::action.group>

                <x-aura::action.group shape="compact">

                    <x-aura::button variant="outline" size="sm">
                        List
                    </x-aura::button>

                    <x-aura::button variant="outline" size="sm">
                        Grid
                    </x-aura::button>

                    <x-aura::button variant="outline" size="sm">
                        Map
                    </x-aura::button>

                </x-aura::action.group>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::action.group>

                    <x-aura::button variant="primary" size="sm">
                        Day
                    </x-aura::button>

                    <x-aura::button variant="secondary" size="sm">
                        Week
                    </x-aura::button>

                    <x-aura::button variant="secondary" size="sm">
                        Month
                    </x-aura::button>

                    <x-aura::button variant="secondary" size="sm">
                        Year
                    </x-aura::button>

                </x-aura::action.group>

                <x-aura::action.group shape="compact">

                    <x-aura::button variant="outline" size="sm">
                        List
                    </x-aura::button>

                    <x-aura::button variant="outline" size="sm">
                        Grid
                    </x-aura::button>

                    <x-aura::button variant="outline" size="sm">
                        Map
                    </x-aura::button>

                </x-aura::action.group>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Icon Action Toolbar Group -->
    <x-aura::code title="2. Icon Action Toolbar Group">

        <x-slot:preview>

            <x-aura::flex align="center" gap="4" :wrap="true">

                <x-aura::action.group shape="compact">

                    <x-aura::icon-button icon="pencil" variant="secondary" shape="square" size="sm" label="Edit" />

                    <x-aura::icon-button icon="eye" variant="secondary" shape="square" size="sm" label="View" />

                    <x-aura::icon-button icon="share-2" variant="secondary" shape="square" size="sm" label="Share" />

                    <x-aura::icon-button icon="trash-2" variant="danger" shape="square" size="sm" label="Delete" />

                </x-aura::action.group>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::action.group shape="compact">

                    <x-aura::icon-button icon="pencil" variant="secondary" shape="square" size="sm" label="Edit" />

                    <x-aura::icon-button icon="eye" variant="secondary" shape="square" size="sm" label="View" />

                    <x-aura::icon-button icon="share-2" variant="secondary" shape="square" size="sm" label="Share" />

                    <x-aura::icon-button icon="trash-2" variant="danger" shape="square" size="sm" label="Delete" />

                </x-aura::action.group>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 3. Vertical Stacked Button Group -->
    <x-aura::code title="3. Vertical Stacked Button Group">

        <x-slot:preview>

            <x-aura::flex align="start">

                <x-aura::action.group vertical shape="compact">

                    <x-aura::button variant="outline" size="sm">
                        High
                    </x-aura::button>

                    <x-aura::button variant="outline" size="sm">
                        Medium
                    </x-aura::button>

                    <x-aura::button variant="outline" size="sm">
                        Low
                    </x-aura::button>

                </x-aura::action.group>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::action.group vertical shape="compact">

                    <x-aura::button variant="outline" size="sm">
                        High
                    </x-aura::button>

                    <x-aura::button variant="outline" size="sm">
                        Medium
                    </x-aura::button>

                    <x-aura::button variant="outline" size="sm">
                        Low
                    </x-aura::button>

                </x-aura::action.group>
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
                Available properties and configurations for the button group component.
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
                            vertical
                        </x-aura::text>

                        <x-aura::tooltip text="Stack buttons vertically instead of horizontal row" position="top">

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
                            shape
                        </x-aura::text>

                        <x-aura::tooltip text="Outer corner border radius and joint boundary styling" position="top">

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
                            compact
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            square
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            pill
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

        </x-aura::table>

    </x-aura::card>

</x-aura::container>

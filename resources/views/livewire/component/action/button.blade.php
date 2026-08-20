<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Button — Aura Wire')] 
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
            Button
        </x-aura::heading>

        <x-aura::subheading size="md">
            Versatile interactive button component supporting semantic variants, size scales, leading and trailing icons, and loading states.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::button variant="primary" size="md">
                    Create
                </x-aura::button>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Variants -->
    <x-aura::code title="1. Button Variants">

        <x-slot:preview>

            <x-aura::flex align="center" gap="3" :wrap="true">

                <x-aura::button variant="primary">
                    Primary
                </x-aura::button>

                <x-aura::button variant="secondary">
                    Secondary
                </x-aura::button>

                <x-aura::button variant="filled">
                    Filled
                </x-aura::button>

                <x-aura::button variant="subtle">
                    Subtle
                </x-aura::button>

                <x-aura::button variant="outline">
                    Outline
                </x-aura::button>

                <x-aura::button variant="ghost">
                    Ghost
                </x-aura::button>

                <x-aura::button variant="danger">
                    Danger
                </x-aura::button>

                <x-aura::button variant="link" href="#">
                    Link
                </x-aura::button>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::button variant="primary">
                    Primary
                </x-aura::button>

                <x-aura::button variant="secondary">
                    Secondary
                </x-aura::button>

                <x-aura::button variant="filled">
                    Filled
                </x-aura::button>

                <x-aura::button variant="subtle">
                    Subtle
                </x-aura::button>

                <x-aura::button variant="outline">
                    Outline
                </x-aura::button>

                <x-aura::button variant="ghost">
                    Ghost
                </x-aura::button>

                <x-aura::button variant="danger">
                    Danger
                </x-aura::button>

                <x-aura::button variant="link" href="#">
                    Link
                </x-aura::button>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Sizes -->
    <x-aura::code title="2. Button Sizes">

        <x-slot:preview>

            <x-aura::flex align="center" gap="3" :wrap="true">

                <x-aura::button variant="primary" size="xs">
                    Create
                </x-aura::button>

                <x-aura::button variant="primary" size="sm">
                    Create
                </x-aura::button>

                <x-aura::button variant="primary" size="md">
                    Create
                </x-aura::button>

                <x-aura::button variant="primary" size="lg">
                    Create
                </x-aura::button>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::button variant="primary" size="xs">
                    Create
                </x-aura::button>

                <x-aura::button variant="primary" size="sm">
                    Create
                </x-aura::button>

                <x-aura::button variant="primary" size="md">
                    Create
                </x-aura::button>

                <x-aura::button variant="primary" size="lg">
                    Create
                </x-aura::button>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 3. Leading and Trailing Icons -->
    <x-aura::code title="3. Buttons with Icons">

        <x-slot:preview>

            <x-aura::flex align="center" gap="3" :wrap="true">

                <x-aura::button variant="primary" icon="plus">
                    Create
                </x-aura::button>

                <x-aura::button variant="secondary" iconTrailing="download">
                    Export
                </x-aura::button>

                <x-aura::button variant="outline" icon="pencil">
                    Edit
                </x-aura::button>

                <x-aura::button variant="danger" icon="trash-2">
                    Delete
                </x-aura::button>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::button variant="primary" icon="plus">
                    Create
                </x-aura::button>

                <x-aura::button variant="secondary" iconTrailing="download">
                    Export
                </x-aura::button>

                <x-aura::button variant="outline" icon="pencil">
                    Edit
                </x-aura::button>

                <x-aura::button variant="danger" icon="trash-2">
                    Delete
                </x-aura::button>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 4. Pill Buttons -->
    <x-aura::code title="4. Pill Shape Buttons">

        <x-slot:preview>

            <x-aura::flex align="center" gap="3" :wrap="true">

                <x-aura::button variant="primary" :pill="true">
                    Create
                </x-aura::button>

                <x-aura::button variant="secondary" :pill="true">
                    Explore
                </x-aura::button>

                <x-aura::button variant="outline" :pill="true">
                    Outline
                </x-aura::button>

                <x-aura::button variant="ghost" :pill="true">
                    Ghost
                </x-aura::button>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::button variant="primary" :pill="true">
                    Create
                </x-aura::button>

                <x-aura::button variant="secondary" :pill="true">
                    Explore
                </x-aura::button>

                <x-aura::button variant="outline" :pill="true">
                    Outline
                </x-aura::button>

                <x-aura::button variant="ghost" :pill="true">
                    Ghost
                </x-aura::button>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 5. Real World Card Actions -->
    <x-aura::code title="5. Real World Card Actions">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex align="center" justify="between">

                    <x-aura::flex direction="col" align="start" gap="1">

                        <x-aura::heading level="3" size="sm">
                            Unsaved Changes
                        </x-aura::heading>

                        <x-aura::text size="sm" variant="subtle">
                            You have pending configuration updates waiting to be applied.
                        </x-aura::text>

                    </x-aura::flex>

                    <x-aura::flex align="center" gap="2">

                        <x-aura::button variant="secondary" size="sm">
                            Cancel
                        </x-aura::button>

                        <x-aura::button variant="primary" size="sm">
                            Save
                        </x-aura::button>

                    </x-aura::flex>

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::card size="2xl" gap="4">

                    <x-aura::flex align="center" justify="between">

                        <x-aura::flex direction="col" align="start" gap="1">

                            <x-aura::heading level="3" size="sm">
                                Unsaved Changes
                            </x-aura::heading>

                            <x-aura::text size="sm" variant="subtle">
                                You have pending configuration updates waiting to be applied.
                            </x-aura::text>

                        </x-aura::flex>

                        <x-aura::flex align="center" gap="2">

                            <x-aura::button variant="secondary" size="sm">
                                Cancel
                            </x-aura::button>

                            <x-aura::button variant="primary" size="sm">
                                Save
                            </x-aura::button>

                        </x-aura::flex>

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
                Available properties and configurations for the button component.
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

                        <x-aura::tooltip text="Visual intent and button styling variant" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        secondary
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

                        <x-aura::badge variant="subtle" size="md">
                            primary
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            secondary
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            filled
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            subtle
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            outline
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            ghost
                        </x-aura::badge>

                        <x-aura::badge variant="danger" size="md">
                            danger
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            link
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

                        <x-aura::tooltip text="Button dimensional scale and font size" position="top">

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

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            type
                        </x-aura::text>

                        <x-aura::tooltip text="Native HTML button type attribute" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        button
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

                        <x-aura::badge variant="subtle" size="md">
                            button
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            submit
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            reset
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            href
                        </x-aura::text>

                        <x-aura::tooltip text="Render button as anchor link element with optional wire:navigate" position="top">

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
                        URL link string
                    </x-aura::text>
                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            icon
                        </x-aura::text>

                        <x-aura::tooltip text="Leading icon name from icon suite" position="top">

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
                            iconTrailing
                        </x-aura::text>

                        <x-aura::tooltip text="Trailing icon name placed after label" position="top">

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
                            shape
                        </x-aura::text>

                        <x-aura::tooltip text="Corner curvature and geometry shape" position="top">

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
                            square
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            pill
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            circle
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            pill
                        </x-aura::text>

                        <x-aura::tooltip text="Convenience flag for pill rounded-full border radius" position="top">

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
                            square
                        </x-aura::text>

                        <x-aura::tooltip text="Equal aspect ratio for standalone square icon buttons" position="top">

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
                            disabled
                        </x-aura::text>

                        <x-aura::tooltip text="Disable user interaction and lower opacity" position="top">

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
                            loading
                        </x-aura::text>

                        <x-aura::tooltip text="Display loading spinner during async actions" position="top">

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
                            true
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            false
                        </x-aura::badge>

                        <x-aura::text size="sm" variant="subtle">
                            Livewire target string
                        </x-aura::text>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            fullWidth
                        </x-aura::text>

                        <x-aura::tooltip text="Expand button to fill full container width" position="top">

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

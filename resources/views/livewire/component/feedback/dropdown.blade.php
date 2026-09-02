<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Dropdown — Aura Wire')] 
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
            Dropdown
        </x-aura::heading>

        <x-aura::subheading size="md">
            Contextual popover menus with support for headers, icon items, badges, separators, and danger actions.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::dropdown>
                    <x-slot:trigger>
                        <x-aura::button>
                            Options
                        </x-aura::button>
                    </x-slot:trigger>

                    <x-aura::dropdown.item icon="user">
                        Profile
                    </x-aura::dropdown.item>
                </x-aura::dropdown>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Action Menu -->
    <x-aura::code title="1. Action Menu">

        <x-slot:preview>

            <x-aura::dropdown align="right" width="56">

                <x-slot:trigger>

                    <x-aura::button variant="secondary" iconTrailing="chevron-down">
                        Actions
                    </x-aura::button>

                </x-slot:trigger>

                <x-aura::dropdown.header>
                    Manage
                </x-aura::dropdown.header>

                <x-aura::dropdown.item href="#" icon="pencil">
                    Edit
                </x-aura::dropdown.item>

                <x-aura::dropdown.item href="#" icon="copy" badge="⌘C">
                    Duplicate
                </x-aura::dropdown.item>

                <x-aura::dropdown.separator />

                <x-aura::dropdown.item href="#" icon="trash-2" variant="danger">
                    Delete
                </x-aura::dropdown.item>

            </x-aura::dropdown>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::dropdown align="right" width="56">

                    <x-slot:trigger>

                        <x-aura::button variant="secondary" iconTrailing="chevron-down">
                            Actions
                        </x-aura::button>

                    </x-slot:trigger>

                    <x-aura::dropdown.header>
                        Manage
                    </x-aura::dropdown.header>

                    <x-aura::dropdown.item href="#" icon="pencil">
                        Edit
                    </x-aura::dropdown.item>

                    <x-aura::dropdown.item href="#" icon="copy" badge="⌘C">
                        Duplicate
                    </x-aura::dropdown.item>

                    <x-aura::dropdown.separator />

                    <x-aura::dropdown.item href="#" icon="trash-2" variant="danger">
                        Delete
                    </x-aura::dropdown.item>

                </x-aura::dropdown>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Item Sizes -->
    <x-aura::code title="2. Item Sizes">

        <x-slot:preview>

            <x-aura::flex align="center" gap="4" :wrap="true">

                <!-- Extra Small Items -->
                <x-aura::dropdown align="left" width="56">

                    <x-slot:trigger>

                        <x-aura::button variant="secondary" size="sm" iconTrailing="chevron-down">
                            Small
                        </x-aura::button>

                    </x-slot:trigger>

                    <x-aura::dropdown.header>
                        Extra Small
                    </x-aura::dropdown.header>

                    <x-aura::dropdown.item href="#" icon="pencil" size="xs">
                        Edit
                    </x-aura::dropdown.item>

                    <x-aura::dropdown.item href="#" icon="copy" size="xs" badge="⌘C">
                        Duplicate
                    </x-aura::dropdown.item>

                    <x-aura::dropdown.separator />

                    <x-aura::dropdown.item href="#" icon="trash-2" size="xs" variant="danger">
                        Delete
                    </x-aura::dropdown.item>

                </x-aura::dropdown>

                <!-- Default Small Items -->
                <x-aura::dropdown align="left" width="56">

                    <x-slot:trigger>

                        <x-aura::button variant="secondary" size="md" iconTrailing="chevron-down">
                            Medium
                        </x-aura::button>

                    </x-slot:trigger>

                    <x-aura::dropdown.header>
                        Default Small
                    </x-aura::dropdown.header>

                    <x-aura::dropdown.item href="#" icon="pencil" size="sm">
                        Edit
                    </x-aura::dropdown.item>

                    <x-aura::dropdown.item href="#" icon="copy" size="sm" badge="⌘C">
                        Duplicate
                    </x-aura::dropdown.item>

                    <x-aura::dropdown.separator />

                    <x-aura::dropdown.item href="#" icon="trash-2" size="sm" variant="danger">
                        Delete
                    </x-aura::dropdown.item>

                </x-aura::dropdown>

                <!-- Medium Items -->
                <x-aura::dropdown align="left" width="64">

                    <x-slot:trigger>

                        <x-aura::button variant="secondary" size="lg" iconTrailing="chevron-down">
                            Large
                        </x-aura::button>

                    </x-slot:trigger>

                    <x-aura::dropdown.header>
                        Medium Scale
                    </x-aura::dropdown.header>

                    <x-aura::dropdown.item href="#" icon="pencil" size="md">
                        Edit
                    </x-aura::dropdown.item>

                    <x-aura::dropdown.item href="#" icon="copy" size="md" badge="⌘C">
                        Duplicate
                    </x-aura::dropdown.item>

                    <x-aura::dropdown.separator />

                    <x-aura::dropdown.item href="#" icon="trash-2" size="md" variant="danger">
                        Delete
                    </x-aura::dropdown.item>

                </x-aura::dropdown>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <!-- Extra Small Item Size -->
                <x-aura::dropdown.item href="#" icon="pencil" size="xs">
                    Edit
                </x-aura::dropdown.item>

                <!-- Default Small Item Size -->
                <x-aura::dropdown.item href="#" icon="pencil" size="sm">
                    Edit
                </x-aura::dropdown.item>

                <!-- Medium Item Size -->
                <x-aura::dropdown.item href="#" icon="pencil" size="md">
                    Edit
                </x-aura::dropdown.item>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 3. Checkbox Items -->
    <x-aura::code title="3. Dropdown Checkbox Items">

        <x-slot:preview>

            <x-aura::dropdown align="right" width="56">

                <x-slot:trigger>

                    <x-aura::button variant="secondary" iconTrailing="chevron-down">
                        View
                    </x-aura::button>

                </x-slot:trigger>

                <x-aura::dropdown.header>
                    Display Columns
                </x-aura::dropdown.header>

                <x-aura::dropdown.checkbox name="col_status" label="Status" :checked="true" size="sm" />

                <x-aura::dropdown.checkbox name="col_priority" label="Priority" :checked="true" size="sm" />

                <x-aura::dropdown.checkbox name="col_date" label="Due Date" :checked="false" size="sm" />

                <x-aura::dropdown.separator />

                <x-aura::dropdown.checkbox name="col_archived" label="Show Archived" :checked="false" size="sm" />

            </x-aura::dropdown>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::dropdown align="right" width="56">

                    <x-slot:trigger>

                        <x-aura::button variant="secondary" iconTrailing="chevron-down">
                            View
                        </x-aura::button>

                    </x-slot:trigger>

                    <x-aura::dropdown.header>
                        Display Columns
                    </x-aura::dropdown.header>

                    <x-aura::dropdown.checkbox name="col_status" label="Status" :checked="true" />

                    <x-aura::dropdown.checkbox name="col_priority" label="Priority" :checked="true" />

                    <x-aura::dropdown.checkbox name="col_date" label="Due Date" :checked="false" />

                    <x-aura::dropdown.separator />

                    <x-aura::dropdown.checkbox name="col_archived" label="Show Archived" :checked="false" />

                </x-aura::dropdown>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- Dropdown Props -->
    <x-aura::card size="full" gap="4">

        <x-aura::flex direction="col" gap="1">

            <x-aura::heading level="2" size="md">
                Dropdown Props
            </x-aura::heading>

            <x-aura::text variant="subtle" size="sm">
                Available properties and configurations for the dropdown menu component.
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

                        <x-aura::tooltip text="Menu alignment anchor relative to trigger element" position="top">

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

                        <x-aura::tooltip text="Fixed tailwind width utility constraint scale" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        56
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

                        <x-aura::badge variant="subtle" size="md">
                            44
                        </x-aura::badge>

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

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

        </x-aura::table>

    </x-aura::card>

    <!-- Dropdown Item Props -->
    <x-aura::card size="full" gap="4">

        <x-aura::flex direction="col" gap="1">

            <x-aura::heading level="2" size="md">
                Dropdown Item Props
            </x-aura::heading>

            <x-aura::text variant="subtle" size="sm">
                Available properties and configurations for individual dropdown item components.
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

                        <x-aura::tooltip text="Typography, padding and icon size scale" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        sm
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

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            variant
                        </x-aura::text>

                        <x-aura::tooltip text="Visual style variant of the item" position="top">

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
                            danger
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

                        <x-aura::tooltip text="Leading icon name" position="top">

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
                    <x-aura::text variant="mono" size="sm">
                        string
                    </x-aura::text>
                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            badge
                        </x-aura::text>

                        <x-aura::tooltip text="Trailing badge text or keyboard shortcut" position="top">

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
                    <x-aura::text variant="mono" size="sm">
                        string
                    </x-aura::text>
                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            href
                        </x-aura::text>

                        <x-aura::tooltip text="Optional link destination making the item an anchor tag" position="top">

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
                    <x-aura::text variant="mono" size="sm">
                        string
                    </x-aura::text>
                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            disabled
                        </x-aura::text>

                        <x-aura::tooltip text="Disable interaction state" position="top">

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

    <!-- Dropdown Checkbox Props -->
    <x-aura::card size="full" gap="4">

        <x-aura::flex direction="col" gap="1">

            <x-aura::heading level="2" size="md">
                Dropdown Checkbox Props
            </x-aura::heading>

            <x-aura::text variant="subtle" size="sm">
                Available properties and configurations for toggleable dropdown checkbox components.
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

                        <x-aura::tooltip text="Dimensional scale and font size for checkbox item" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        sm
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
                            label
                        </x-aura::text>

                        <x-aura::tooltip text="Text label for the checkbox item" position="top">

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
                    <x-aura::text variant="mono" size="sm">
                        string
                    </x-aura::text>
                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            checked
                        </x-aura::text>

                        <x-aura::tooltip text="Initial checked state boolean" position="top">

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

                        <x-aura::tooltip text="Disable interaction state" position="top">

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
                            name
                        </x-aura::text>

                        <x-aura::tooltip text="HTML form field name" position="top">

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
                    <x-aura::text variant="mono" size="sm">
                        string
                    </x-aura::text>
                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            id
                        </x-aura::text>

                        <x-aura::tooltip text="HTML element id for input and label association" position="top">

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
                    <x-aura::text variant="mono" size="sm">
                        string
                    </x-aura::text>
                </x-aura::table.cell>

            </x-aura::table.row>

        </x-aura::table>

    </x-aura::card>

</x-aura::container>

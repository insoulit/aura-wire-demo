<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Link — Aura Wire')] 
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
            Link
        </x-aura::heading>

        <x-aura::subheading size="md">
            Lightweight inline navigation links with variant styling, auto detected external indicators, optional icons, and configurable underline behavior.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::link href="/docs" variant="default" icon="book-open">
                    Documentation
                </x-aura::link>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Variants -->
    <x-aura::code title="1. Link Variants">

        <x-slot:preview>

            <x-aura::flex align="center" gap="6" :wrap="true">

                <x-aura::link href="#">
                    Default
                </x-aura::link>

                <x-aura::link href="#" variant="subtle">
                    Subtle
                </x-aura::link>

                <x-aura::link href="#" variant="primary">
                    Primary
                </x-aura::link>

                <x-aura::link href="#" variant="danger">
                    Danger
                </x-aura::link>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::link href="#">
                    Default
                </x-aura::link>

                <x-aura::link href="#" variant="subtle">
                    Subtle
                </x-aura::link>

                <x-aura::link href="#" variant="primary">
                    Primary
                </x-aura::link>

                <x-aura::link href="#" variant="danger">
                    Danger
                </x-aura::link>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Sizes -->
    <x-aura::code title="2. Link Sizes">

        <x-slot:preview>

            <x-aura::flex align="center" gap="6" :wrap="true">

                <x-aura::link href="#" size="xs">
                    Extra Small
                </x-aura::link>

                <x-aura::link href="#" size="sm">
                    Small
                </x-aura::link>

                <x-aura::link href="#" size="md">
                    Medium
                </x-aura::link>

                <x-aura::link href="#" size="lg">
                    Large
                </x-aura::link>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::link href="#" size="xs">
                    Extra Small
                </x-aura::link>

                <x-aura::link href="#" size="sm">
                    Small
                </x-aura::link>

                <x-aura::link href="#" size="md">
                    Medium
                </x-aura::link>

                <x-aura::link href="#" size="lg">
                    Large
                </x-aura::link>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 3. With Icons -->
    <x-aura::code title="3. Links with Icons">

        <x-slot:preview>

            <x-aura::flex align="center" gap="6" :wrap="true">

                <x-aura::link href="#" icon="book-open">
                    Documentation
                </x-aura::link>

                <x-aura::link href="#" icon="settings">
                    Settings
                </x-aura::link>

                <x-aura::link href="#" iconTrailing="arrow-right">
                    Next
                </x-aura::link>

                <x-aura::link href="#" icon="download" iconTrailing="arrow-down">
                    Export
                </x-aura::link>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::link href="#" icon="book-open">
                    Documentation
                </x-aura::link>

                <x-aura::link href="#" icon="settings">
                    Settings
                </x-aura::link>

                <x-aura::link href="#" iconTrailing="arrow-right">
                    Next
                </x-aura::link>

                <x-aura::link href="#" icon="download" iconTrailing="arrow-down">
                    Export
                </x-aura::link>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 4. External Links -->
    <x-aura::code title="4. External Links">

        <x-slot:preview>

            <x-aura::flex align="center" gap="6" :wrap="true">

                <x-aura::link href="https://github.com" target="_blank">
                    GitHub
                </x-aura::link>

                <x-aura::link href="https://packagist.org" target="_blank" variant="primary">
                    Packagist
                </x-aura::link>

                <x-aura::link href="https://laravel.com" target="_blank" variant="subtle">
                    Laravel
                </x-aura::link>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::link href="https://github.com" target="_blank">
                    GitHub
                </x-aura::link>

                <x-aura::link href="https://packagist.org" target="_blank" variant="primary">
                    Packagist
                </x-aura::link>

                <x-aura::link href="https://laravel.com" target="_blank" variant="subtle">
                    Laravel
                </x-aura::link>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 5. Real World Settings Pattern -->
    <x-aura::code title="5. Real World Action Card Pattern">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex align="center" justify="between">

                    <x-aura::flex direction="col" align="start" gap="1">

                        <x-aura::heading level="3" size="sm">
                            Project Settings
                        </x-aura::heading>

                        <x-aura::text size="sm" variant="subtle">
                            Configure your repository preferences and team access.
                        </x-aura::text>

                    </x-aura::flex>

                    <x-aura::flex align="center" gap="4">

                        <x-aura::link href="#" variant="subtle" size="sm" icon="eye">
                            Preview
                        </x-aura::link>

                        <x-aura::link href="#" variant="primary" size="sm" icon="settings">
                            Manage
                        </x-aura::link>

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
                                Project Settings
                            </x-aura::heading>

                            <x-aura::text size="sm" variant="subtle">
                                Configure your repository preferences and team access.
                            </x-aura::text>

                        </x-aura::flex>

                        <x-aura::flex align="center" gap="4">

                            <x-aura::link href="#" variant="subtle" size="sm" icon="eye">
                                Preview
                            </x-aura::link>

                            <x-aura::link href="#" variant="primary" size="sm" icon="settings">
                                Manage
                            </x-aura::link>

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
                Available properties and configurations for the link component.
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

                        <x-aura::tooltip text="Visual intent and text link color variant" position="top">

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
                            muted
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            primary
                        </x-aura::badge>

                        <x-aura::badge variant="danger" size="md">
                            danger
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

                        <x-aura::tooltip text="Link font size and inline icon gap" position="top">

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
                            weight
                        </x-aura::text>

                        <x-aura::tooltip text="Font weight scale" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        medium
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

                        <x-aura::badge variant="subtle" size="md">
                            normal
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            medium
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            semibold
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            bold
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

                        <x-aura::tooltip text="Target URL path or external web address" position="top">

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
                        URL string
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
                            external
                        </x-aura::text>

                        <x-aura::tooltip text="Auto-detect or explicitly show external arrow icon and set rel attributes" position="top">

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

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            underline
                        </x-aura::text>

                        <x-aura::tooltip text="Text decoration underline styling trigger" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        hover
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

                        <x-aura::badge variant="subtle" size="md">
                            hover
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            always
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            none
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

                        <x-aura::tooltip text="Disable navigation link and lower opacity" position="top">

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

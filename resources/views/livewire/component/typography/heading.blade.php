<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Heading — Aura Wire')] 
class extends Component {};

?>

<x-aura::container gap="8" :padding="false">

    <!-- Header -->
    <x-aura::card size="full" gap="2">

        <x-aura::flex align="center" gap="2.5">

            <x-aura::kicker>
                Typography
            </x-aura::kicker>

            <x-aura::badge variant="subtle" size="md">
                Component
            </x-aura::badge>

        </x-aura::flex>

        <x-aura::heading level="1" size="xl">
            Heading
        </x-aura::heading>

        <x-aura::subheading size="md">
            Semantic section headers supporting levels H1 through H6, explicit size scales, color variants, and custom font weights.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::heading level="1" size="xl">
                    Heading Title
                </x-aura::heading>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Semantic Heading Levels (H1 to H6) -->
    <x-aura::code title="1. Semantic Heading Levels (H1 to H6)">

        <x-slot:preview>

            <x-aura::flex direction="col" align="start" gap="4">

                <x-aura::heading level="1">
                    Level 1 (H1) Heading
                </x-aura::heading>

                <x-aura::heading level="2">
                    Level 2 (H2) Heading
                </x-aura::heading>

                <x-aura::heading level="3">
                    Level 3 (H3) Heading
                </x-aura::heading>

                <x-aura::heading level="4">
                    Level 4 (H4) Heading
                </x-aura::heading>

                <x-aura::heading level="5">
                    Level 5 (H5) Heading
                </x-aura::heading>

                <x-aura::heading level="6">
                    Level 6 (H6) Heading
                </x-aura::heading>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::heading level="1">
                    Level 1 (H1) Heading
                </x-aura::heading>

                <x-aura::heading level="2">
                    Level 2 (H2) Heading
                </x-aura::heading>

                <x-aura::heading level="3">
                    Level 3 (H3) Heading
                </x-aura::heading>

                <x-aura::heading level="4">
                    Level 4 (H4) Heading
                </x-aura::heading>

                <x-aura::heading level="5">
                    Level 5 (H5) Heading
                </x-aura::heading>

                <x-aura::heading level="6">
                    Level 6 (H6) Heading
                </x-aura::heading>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Explicit Size Scales -->
    <x-aura::code title="2. Explicit Size Scales">

        <x-slot:preview>

            <x-aura::flex direction="col" align="start" gap="4">

                <x-aura::heading level="2" size="2xl">
                    2XL Heading Scale
                </x-aura::heading>

                <x-aura::heading level="2" size="xl">
                    XL Heading Scale
                </x-aura::heading>

                <x-aura::heading level="2" size="lg">
                    LG Heading Scale
                </x-aura::heading>

                <x-aura::heading level="2" size="md">
                    MD Heading Scale
                </x-aura::heading>

                <x-aura::heading level="2" size="sm">
                    SM Heading Scale
                </x-aura::heading>

                <x-aura::heading level="2" size="xs">
                    XS Heading Scale
                </x-aura::heading>

                <x-aura::heading level="2" size="2xs">
                    2XS Uppercase Monospace Scale
                </x-aura::heading>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::heading level="2" size="2xl">
                    2XL Heading Scale
                </x-aura::heading>

                <x-aura::heading level="2" size="xl">
                    XL Heading Scale
                </x-aura::heading>

                <x-aura::heading level="2" size="lg">
                    LG Heading Scale
                </x-aura::heading>

                <x-aura::heading level="2" size="md">
                    MD Heading Scale
                </x-aura::heading>

                <x-aura::heading level="2" size="sm">
                    SM Heading Scale
                </x-aura::heading>

                <x-aura::heading level="2" size="xs">
                    XS Heading Scale
                </x-aura::heading>

                <x-aura::heading level="2" size="2xs">
                    2XS Uppercase Monospace Scale
                </x-aura::heading>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 3. Tone and Gradient Variants -->
    <x-aura::code title="3. Tone and Gradient Variants">

        <x-slot:preview>

            <x-aura::flex direction="col" align="start" gap="4">

                <x-aura::heading level="3" size="lg" variant="default">
                    Default Heading
                </x-aura::heading>

                <x-aura::heading level="3" size="lg" variant="gradient">
                    Monochrome Gradient Headline
                </x-aura::heading>

                <x-aura::heading level="3" size="lg" variant="subtle">
                    Subtle Muted Heading
                </x-aura::heading>

                <x-aura::heading level="3" size="lg" variant="accent">
                    Accent High Contrast Heading
                </x-aura::heading>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::heading level="3" size="lg" variant="default">
                    Default Heading
                </x-aura::heading>

                <x-aura::heading level="3" size="lg" variant="gradient">
                    Monochrome Gradient Headline
                </x-aura::heading>

                <x-aura::heading level="3" size="lg" variant="subtle">
                    Subtle Muted Heading
                </x-aura::heading>

                <x-aura::heading level="3" size="lg" variant="accent">
                    Accent High Contrast Heading
                </x-aura::heading>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 4. Real World Card Header Pattern -->
    <x-aura::code title="4. Real World Card Header Pattern">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex align="center" justify="between">

                    <x-aura::flex direction="col" align="start" gap="1">

                        <x-aura::heading level="2" size="md">
                            Project Settings and Security
                        </x-aura::heading>

                        <x-aura::subheading size="sm">
                            Manage API tokens, environment keys, and deployment webhooks.
                        </x-aura::subheading>

                    </x-aura::flex>

                    <x-aura::flex align="center" gap="2">

                        <x-aura::button variant="secondary" size="sm">
                            Audit
                        </x-aura::button>

                        <x-aura::button variant="primary" size="sm" icon="plus">
                            Create
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

                            <x-aura::heading level="2" size="md">
                                Project Settings and Security
                            </x-aura::heading>

                            <x-aura::subheading size="sm">
                                Manage API tokens, environment keys, and deployment webhooks.
                            </x-aura::subheading>

                        </x-aura::flex>

                        <x-aura::flex align="center" gap="2">

                            <x-aura::button variant="secondary" size="sm">
                                Audit
                            </x-aura::button>

                            <x-aura::button variant="primary" size="sm" icon="plus">
                                Create
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
                Available properties and configurations for the heading component.
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
                            level
                        </x-aura::text>

                        <x-aura::tooltip text="Semantic heading HTML tag level" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        1
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

                        <x-aura::badge variant="subtle" size="md">
                            1
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            2
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            3
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            4
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            5
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            6
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

                        <x-aura::tooltip text="Explicit font size scale override" position="top">

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
                            2xs
                        </x-aura::badge>

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

                        <x-aura::badge variant="subtle" size="md">
                            2xl
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            as
                        </x-aura::text>

                        <x-aura::tooltip text="Custom HTML tag override without altering semantic size" position="top">

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
                            h1
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            h2
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            h3
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            h4
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            h5
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            h6
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            p
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            span
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

                        <x-aura::tooltip text="Color tone and text contrast mode" position="top">

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
                            gradient
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            subtle
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            muted
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            accent
                        </x-aura::badge>

                        <x-aura::badge variant="positive" size="md">
                            positive
                        </x-aura::badge>

                        <x-aura::badge variant="warning" size="md">
                            warning
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
                            weight
                        </x-aura::text>

                        <x-aura::tooltip text="Font weight scale" position="top">

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
                            light
                        </x-aura::badge>

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

                        <x-aura::badge variant="subtle" size="md">
                            extrabold
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            black
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            align
                        </x-aura::text>

                        <x-aura::tooltip text="Text alignment within container" position="top">

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
                            left
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            center
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            right
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            justify
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            balance
                        </x-aura::text>

                        <x-aura::tooltip text="Apply text wrap balance for harmonic line wrapping" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        true
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
                            tracking
                        </x-aura::text>

                        <x-aura::tooltip text="Letter spacing tracking scale" position="top">

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
                            tighter
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            tight
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            normal
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            wide
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            wider
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            widest
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            truncate
                        </x-aura::text>

                        <x-aura::tooltip text="Truncate single line overflow with ellipsis" position="top">

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
                            nowrap
                        </x-aura::text>

                        <x-aura::tooltip text="Prevent text from wrapping into multiple lines" position="top">

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

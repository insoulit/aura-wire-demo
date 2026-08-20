<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Subheading — Aura Wire')] 
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
            Subheading
        </x-aura::heading>

        <x-aura::subheading size="md">
            Secondary typography designed for section lead paragraphs, feature summaries, card header descriptions, and hero text.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::subheading size="md">
                    Section description or lead text.
                </x-aura::subheading>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Standard Section Subheading -->
    <x-aura::code title="1. Standard Section Subheading">

        <x-slot:preview>

            <x-aura::flex direction="col" align="start" gap="2">

                <x-aura::heading level="2" size="md">
                    Dashboard Analytics
                </x-aura::heading>

                <x-aura::subheading size="md">
                    Monitor your key performance metrics, revenue growth, and active project statistics in real time.
                </x-aura::subheading>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::heading level="2" size="md">
                    Dashboard Analytics
                </x-aura::heading>

                <x-aura::subheading size="md">
                    Monitor your key performance metrics, revenue growth, and active project statistics in real time.
                </x-aura::subheading>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Size Scales -->
    <x-aura::code title="2. Size Scales">

        <x-slot:preview>

            <x-aura::flex direction="col" align="start" gap="4">

                <x-aura::subheading size="2xl">
                    2XL Subheading — High impact intro lead summary for key landing page headers.
                </x-aura::subheading>

                <x-aura::subheading size="xl">
                    XL Subheading — Hero section description and prominent callout paragraph.
                </x-aura::subheading>

                <x-aura::subheading size="lg">
                    Large Subheading — Section subtitle for medium feature headers.
                </x-aura::subheading>

                <x-aura::subheading size="md">
                    Medium Subheading — Standard description for cards and widget headers.
                </x-aura::subheading>

                <x-aura::subheading size="sm">
                    Small Subheading — Compact inline subtitle and metadata description.
                </x-aura::subheading>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::subheading size="2xl">
                    2XL Subheading — High impact intro lead summary for key landing page headers.
                </x-aura::subheading>

                <x-aura::subheading size="xl">
                    XL Subheading — Hero section description and prominent callout paragraph.
                </x-aura::subheading>

                <x-aura::subheading size="lg">
                    Large Subheading — Section subtitle for medium feature headers.
                </x-aura::subheading>

                <x-aura::subheading size="md">
                    Medium Subheading — Standard description for cards and widget headers.
                </x-aura::subheading>

                <x-aura::subheading size="sm">
                    Small Subheading — Compact inline subtitle and metadata description.
                </x-aura::subheading>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 3. Color Variants and Weights -->
    <x-aura::code title="3. Color Variants and Weights">

        <x-slot:preview>

            <x-aura::flex direction="col" align="start" gap="3">

                <x-aura::subheading variant="default" weight="normal">
                    Default Muted Subheading (Regular 400)
                </x-aura::subheading>

                <x-aura::subheading variant="accent" weight="medium">
                    Accent High Contrast Subheading (Medium 500)
                </x-aura::subheading>

                <x-aura::subheading variant="subtle" weight="light">
                    Subtle Light Weight Subheading (Light 300)
                </x-aura::subheading>

                <x-aura::subheading variant="default" weight="semibold">
                    Semibold Weight Subheading (Semibold 600)
                </x-aura::subheading>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::subheading variant="default" weight="normal">
                    Default Muted Subheading (Regular 400)
                </x-aura::subheading>

                <x-aura::subheading variant="accent" weight="medium">
                    Accent High Contrast Subheading (Medium 500)
                </x-aura::subheading>

                <x-aura::subheading variant="subtle" weight="light">
                    Subtle Light Weight Subheading (Light 300)
                </x-aura::subheading>

                <x-aura::subheading variant="default" weight="semibold">
                    Semibold Weight Subheading (Semibold 600)
                </x-aura::subheading>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 4. Real World Hero Pattern -->
    <x-aura::code title="4. Real World Hero Pattern">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::kicker>
                    PRODUCTIVITY PLATFORM
                </x-aura::kicker>

                <x-aura::heading level="1" size="xl">
                    Build faster with modern Blade components
                </x-aura::heading>

                <x-aura::subheading size="lg">
                    Aura Wire provides unstyled, accessible Livewire design primitives designed to elevate your developer workflow.
                </x-aura::subheading>

                <x-aura::flex align="center" gap="3">

                    <x-aura::button variant="primary" iconTrailing="arrow-right">
                        Explore
                    </x-aura::button>

                    <x-aura::button variant="ghost">
                        Docs
                    </x-aura::button>

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::card size="2xl" gap="4">

                    <x-aura::kicker>
                        PRODUCTIVITY PLATFORM
                    </x-aura::kicker>

                    <x-aura::heading level="1" size="xl">
                        Build faster with modern Blade components
                    </x-aura::heading>

                    <x-aura::subheading size="lg">
                        Aura Wire provides unstyled, accessible Livewire design primitives designed to elevate your developer workflow.
                    </x-aura::subheading>

                    <x-aura::flex align="center" gap="3">

                        <x-aura::button variant="primary" iconTrailing="arrow-right">
                            Explore
                        </x-aura::button>

                        <x-aura::button variant="ghost">
                            Docs
                        </x-aura::button>

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
                Available properties and configurations for the subheading component.
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
                            as
                        </x-aura::text>

                        <x-aura::tooltip text="HTML element tag name" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        p
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

                        <x-aura::badge variant="subtle" size="md">
                            p
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            div
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            span
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            h3
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            h4
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

                        <x-aura::tooltip text="Subheading font size and line height scale" position="top">

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
                            subtle
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            muted
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            accent
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            primary
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            inverse
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            white
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
                        normal
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
                            pretty
                        </x-aura::text>

                        <x-aura::tooltip text="Apply text wrap pretty to prevent single word orphans" position="top">

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

<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Display — Aura Wire')] 
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
            Display
        </x-aura::heading>

        <x-aura::subheading size="md">
            High impact display typography designed for hero headlines, billboard marketing banners, giant KPI metrics, and landing sections.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::display size="xl">
                    Elevate Your Product
                </x-aura::display>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Display Size Scales -->
    <x-aura::code title="1. Display Size Scales">

        <x-slot:preview>

            <x-aura::flex direction="col" align="start" gap="4">

                <x-aura::display size="2xl">
                    Display 2XL
                </x-aura::display>

                <x-aura::display size="xl">
                    Display XL
                </x-aura::display>

                <x-aura::display size="lg">
                    Display Large
                </x-aura::display>

                <x-aura::display size="md">
                    Display Medium
                </x-aura::display>

                <x-aura::display size="sm">
                    Display Small
                </x-aura::display>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::display size="2xl">
                    Display 2XL
                </x-aura::display>

                <x-aura::display size="xl">
                    Display XL
                </x-aura::display>

                <x-aura::display size="lg">
                    Display Large
                </x-aura::display>

                <x-aura::display size="md">
                    Display Medium
                </x-aura::display>

                <x-aura::display size="sm">
                    Display Small
                </x-aura::display>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Monochrome Gradient Headlines -->
    <x-aura::code title="2. Monochrome Gradient Headlines">

        <x-slot:preview>

            <x-aura::flex direction="col" align="start" gap="4">

                <x-aura::display size="lg" :gradient="true">
                    Built for Modern Web Applications
                </x-aura::display>

                <x-aura::display size="md" gradient="subtle" weight="black">
                    Ship Faster with Aura Wire
                </x-aura::display>

                <x-aura::display size="sm" gradient="fade">
                    The Modern Livewire Standard
                </x-aura::display>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::display size="lg" :gradient="true">
                    Built for Modern Web Applications
                </x-aura::display>

                <x-aura::display size="md" gradient="subtle" weight="black">
                    Ship Faster with Aura Wire
                </x-aura::display>

                <x-aura::display size="sm" gradient="fade">
                    The Modern Livewire Standard
                </x-aura::display>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 3. Custom Font Weights -->
    <x-aura::code title="3. Custom Font Weights">

        <x-slot:preview>

            <x-aura::flex direction="col" align="start" gap="4">

                <x-aura::display size="sm" weight="black">
                    Black 900 Weight Display
                </x-aura::display>

                <x-aura::display size="sm" weight="extrabold">
                    Extrabold 800 Weight Display
                </x-aura::display>

                <x-aura::display size="sm" weight="bold">
                    Bold 700 Weight Display
                </x-aura::display>

                <x-aura::display size="sm" weight="semibold">
                    Semibold 600 Weight Display
                </x-aura::display>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::display size="sm" weight="black">
                    Black 900 Weight Display
                </x-aura::display>

                <x-aura::display size="sm" weight="extrabold">
                    Extrabold 800 Weight Display
                </x-aura::display>

                <x-aura::display size="sm" weight="bold">
                    Bold 700 Weight Display
                </x-aura::display>

                <x-aura::display size="sm" weight="semibold">
                    Semibold 600 Weight Display
                </x-aura::display>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 4. Real World Hero Pattern -->
    <x-aura::code title="4. Real World Hero Pattern">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex align="center" gap="2">

                    <x-aura::kicker>
                        NEXT GEN LIVEWIRE PRIMITIVES
                    </x-aura::kicker>

                    <x-aura::badge variant="subtle" size="md">
                        v2.0
                    </x-aura::badge>

                </x-aura::flex>

                <x-aura::display size="lg" :gradient="true">
                    The Developer Suite for Rapid UI Delivery
                </x-aura::display>

                <x-aura::subheading size="md">
                    Compose rich, accessible, full stack Laravel applications with beautifully orchestrated Blade components.
                </x-aura::subheading>

                <x-aura::flex align="center" gap="3">

                    <x-aura::button variant="primary" iconTrailing="arrow-right">
                        Explore
                    </x-aura::button>

                    <x-aura::button variant="ghost">
                        Catalog
                    </x-aura::button>

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::card size="2xl" gap="4">

                    <x-aura::flex align="center" gap="2">

                        <x-aura::kicker>
                            NEXT GEN LIVEWIRE PRIMITIVES
                        </x-aura::kicker>

                        <x-aura::badge variant="subtle" size="md">
                            v2.0
                        </x-aura::badge>

                    </x-aura::flex>

                    <x-aura::display size="lg" :gradient="true">
                        The Developer Suite for Rapid UI Delivery
                    </x-aura::display>

                    <x-aura::subheading size="md">
                        Compose rich, accessible, full stack Laravel applications with beautifully orchestrated Blade components.
                    </x-aura::subheading>

                    <x-aura::flex align="center" gap="3">

                        <x-aura::button variant="primary" iconTrailing="arrow-right">
                            Explore
                        </x-aura::button>

                        <x-aura::button variant="ghost">
                            Catalog
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
                Available properties and configurations for the display component.
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
                        h1
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
                            div
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
                            size
                        </x-aura::text>

                        <x-aura::tooltip text="Display typography font scale" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        xl
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

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

                        <x-aura::badge variant="subtle" size="md">
                            3xl
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
                        extrabold
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
                            gradient
                        </x-aura::text>

                        <x-aura::tooltip text="Text gradient color style" position="top">

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

                        <x-aura::badge variant="subtle" size="md">
                            default
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            subtle
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            fade
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            primary
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            sunset
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            ocean
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            emerald
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

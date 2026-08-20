<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Kicker — Aura Wire')] 
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
            Kicker
        </x-aura::heading>

        <x-aura::subheading size="md">
            Uppercase category labels, status indicators, and eyebrow headers placed above primary section titles to establish clear visual context and hierarchy.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::kicker>
                    Category Name
                </x-aura::kicker>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Tone and Contrast Variants -->
    <x-aura::code title="1. Tone and Contrast Variants">

        <x-slot:preview>

            <x-aura::flex align="center" gap="6" :wrap="true">

                <x-aura::kicker variant="default">
                    DEFAULT STATUS
                </x-aura::kicker>

                <x-aura::kicker variant="dark">
                    DARK CONTRAST
                </x-aura::kicker>

                <x-aura::kicker variant="subtle">
                    SUBTLE LABEL
                </x-aura::kicker>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::kicker variant="default">
                    DEFAULT STATUS
                </x-aura::kicker>

                <x-aura::kicker variant="dark">
                    DARK CONTRAST
                </x-aura::kicker>

                <x-aura::kicker variant="subtle">
                    SUBTLE LABEL
                </x-aura::kicker>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Kickers with Native Icons -->
    <x-aura::code title="2. Kickers with Native Icons">

        <x-slot:preview>

            <x-aura::flex align="center" gap="6" :wrap="true">

                <x-aura::kicker variant="default" icon="sparkles">
                    AI POWERED
                </x-aura::kicker>

                <x-aura::kicker variant="dark" icon="shield-check">
                    SOC 2 VERIFIED
                </x-aura::kicker>

                <x-aura::kicker variant="default" icon="bolt">
                    HIGH SPEED
                </x-aura::kicker>

                <x-aura::kicker variant="dark" icon="cube">
                    MODULAR PRIMITIVES
                </x-aura::kicker>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::kicker variant="default" icon="sparkles">
                    AI POWERED
                </x-aura::kicker>

                <x-aura::kicker variant="dark" icon="shield-check">
                    SOC 2 VERIFIED
                </x-aura::kicker>

                <x-aura::kicker variant="default" icon="bolt">
                    HIGH SPEED
                </x-aura::kicker>

                <x-aura::kicker variant="dark" icon="cube">
                    MODULAR PRIMITIVES
                </x-aura::kicker>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 3. Size Scales and Letter Spacing -->
    <x-aura::code title="3. Size Scales and Letter Spacing">

        <x-slot:preview>

            <x-aura::flex direction="col" align="start" gap="4">

                <x-aura::kicker size="xs">
                    MICRO EYEBROW HEADER
                </x-aura::kicker>

                <x-aura::kicker size="sm">
                    STANDARD SECTION KICKER
                </x-aura::kicker>

                <x-aura::kicker size="md">
                    FEATURE HEADER CATEGORY
                </x-aura::kicker>

                <x-aura::kicker size="lg">
                    HERO DISPLAY EYEBROW
                </x-aura::kicker>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::kicker size="xs">
                    MICRO EYEBROW HEADER
                </x-aura::kicker>

                <x-aura::kicker size="sm">
                    STANDARD SECTION KICKER
                </x-aura::kicker>

                <x-aura::kicker size="md">
                    FEATURE HEADER CATEGORY
                </x-aura::kicker>

                <x-aura::kicker size="lg">
                    HERO DISPLAY EYEBROW
                </x-aura::kicker>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 4. Real World Hero and Card Headers -->
    <x-aura::code title="4. Real World Hero and Card Headers">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="3">

                <x-aura::kicker variant="default" icon="sparkles">
                    ENTERPRISE PLATFORM
                </x-aura::kicker>

                <x-aura::heading level="2" size="xl">
                    Scale your infrastructure without friction
                </x-aura::heading>

                <x-aura::subheading size="md">
                    Global multi region cloud servers with automated load balancing, zero downtime rollouts, and SOC 2 verified security.
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
                <x-aura::card size="2xl" gap="3">

                    <x-aura::kicker variant="default" icon="sparkles">
                        ENTERPRISE PLATFORM
                    </x-aura::kicker>

                    <x-aura::heading level="2" size="xl">
                        Scale your infrastructure without friction
                    </x-aura::heading>

                    <x-aura::subheading size="md">
                        Global multi region cloud servers with automated load balancing, zero downtime rollouts, and SOC 2 verified security.
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
                Available properties and configurations for the kicker component.
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
                            span
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            h4
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            h6
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

                        <x-aura::tooltip text="Font size scale" position="top">

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
                            variant
                        </x-aura::text>

                        <x-aura::tooltip text="Color theme and contrast mode" position="top">

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

                        <x-aura::badge variant="subtle" size="md">
                            accent
                        </x-aura::badge>

                        <x-aura::badge variant="dark" size="md">
                            dark
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
                    <x-aura::badge variant="neutral" size="md">
                        bold
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

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

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            tracking
                        </x-aura::text>

                        <x-aura::tooltip text="Letter spacing scale" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        widest
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

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
                            uppercase
                        </x-aura::text>

                        <x-aura::tooltip text="Transform slot text to uppercase" position="top">

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
                            icon
                        </x-aura::text>

                        <x-aura::tooltip text="Optional leading icon name from icon suite" position="top">

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
                            align
                        </x-aura::text>

                        <x-aura::tooltip text="Text and flex distribution alignment" position="top">

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

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

        </x-aura::table>

    </x-aura::card>

</x-aura::container>

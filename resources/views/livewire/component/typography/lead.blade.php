<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Lead — Aura Wire')] 
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
            Lead
        </x-aura::heading>

        <x-aura::subheading size="md">
            Prominent introductory paragraph component designed to give high emphasis and visual hierarchy to leading copy below page titles.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::lead size="lg">
                    Lead introductory summary paragraph.
                </x-aura::lead>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Standard Lead Paragraph -->
    <x-aura::code title="1. Standard Lead Paragraph">

        <x-slot:preview>

            <x-aura::flex direction="col" align="start" gap="2">

                <x-aura::heading level="2" size="lg">
                    Introducing Aura Wire
                </x-aura::heading>

                <x-aura::lead>
                    Aura Wire provides unstyled, accessible Livewire and Blade UI components designed to elevate your developer workflow and scale design systems effortlessly.
                </x-aura::lead>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::heading level="2" size="lg">
                    Introducing Aura Wire
                </x-aura::heading>

                <x-aura::lead>
                    Aura Wire provides unstyled, accessible Livewire and Blade UI components designed to elevate your developer workflow and scale design systems effortlessly.
                </x-aura::lead>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Size Scales -->
    <x-aura::code title="2. Size Scales">

        <x-slot:preview>

            <x-aura::flex direction="col" align="start" gap="4">

                <x-aura::lead size="2xl">
                    2XL Lead — Maximum emphasis lead summary for major landing hero sections.
                </x-aura::lead>

                <x-aura::lead size="xl">
                    XL Lead — Large intro description for featured article headers.
                </x-aura::lead>

                <x-aura::lead size="lg">
                    Large Lead — Standard high emphasis introduction paragraph.
                </x-aura::lead>

                <x-aura::lead size="md">
                    Medium Lead — Compact section lead for inner panel cards.
                </x-aura::lead>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::lead size="2xl">
                    2XL Lead — Maximum emphasis lead summary for major landing hero sections.
                </x-aura::lead>

                <x-aura::lead size="xl">
                    XL Lead — Large intro description for featured article headers.
                </x-aura::lead>

                <x-aura::lead size="lg">
                    Large Lead — Standard high emphasis introduction paragraph.
                </x-aura::lead>

                <x-aura::lead size="md">
                    Medium Lead — Compact section lead for inner panel cards.
                </x-aura::lead>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 3. Color Variants and Font Weights -->
    <x-aura::code title="3. Color Variants and Font Weights">

        <x-slot:preview>

            <x-aura::flex direction="col" align="start" gap="3">

                <x-aura::lead variant="default" weight="normal">
                    Default Muted Lead (Regular 400)
                </x-aura::lead>

                <x-aura::lead variant="accent" weight="medium">
                    Accent High Contrast Lead (Medium 500)
                </x-aura::lead>

                <x-aura::lead variant="subtle" weight="light">
                    Subtle Light Weight Lead (Light 300)
                </x-aura::lead>

                <x-aura::lead variant="default" weight="semibold">
                    Semibold Weight Lead (Semibold 600)
                </x-aura::lead>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::lead variant="default" weight="normal">
                    Default Muted Lead (Regular 400)
                </x-aura::lead>

                <x-aura::lead variant="accent" weight="medium">
                    Accent High Contrast Lead (Medium 500)
                </x-aura::lead>

                <x-aura::lead variant="subtle" weight="light">
                    Subtle Light Weight Lead (Light 300)
                </x-aura::lead>

                <x-aura::lead variant="default" weight="semibold">
                    Semibold Weight Lead (Semibold 600)
                </x-aura::lead>
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
                Available properties and configurations for the lead paragraph component.
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

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            size
                        </x-aura::text>

                        <x-aura::tooltip text="Lead font size and line height scale" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        lg
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

        </x-aura::table>

    </x-aura::card>

</x-aura::container>

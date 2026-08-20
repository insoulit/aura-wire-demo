<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Icon — Aura Wire')] 
class extends Component {};

?>

<x-aura::container gap="8" :padding="false">

    <!-- Header -->
    <x-aura::card size="full" gap="2">

        <x-aura::flex align="center" gap="2.5">

            <x-aura::kicker>
                Display
            </x-aura::kicker>

            <x-aura::badge variant="subtle" size="md">
                Component
            </x-aura::badge>

        </x-aura::flex>

        <x-aura::heading level="1" size="xl">
            Icon
        </x-aura::heading>

        <x-aura::subheading size="md">
            Render crisp Lucide SVG icons with customizable scales, color variations, and optional boxed container badges.
        </x-aura::subheading>

        <x-aura::flex align="center" class="pt-2">

            <x-aura::button variant="secondary" size="sm" href="/components/icon-library" icon="search">
                Browse
            </x-aura::button>

        </x-aura::flex>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::icon name="sparkles" size="md" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Scale Sizes -->
    <x-aura::code title="1. Scale Sizes">

        <x-slot:preview>

            <x-aura::flex align="center" justify="around" class="w-full py-4">

                <x-aura::flex direction="col" align="center" gap="2">

                    <x-aura::icon name="star" size="xs" />

                    <x-aura::text size="xs" variant="subtle">
                        xs
                    </x-aura::text>

                </x-aura::flex>

                <x-aura::flex direction="col" align="center" gap="2">

                    <x-aura::icon name="star" size="sm" />

                    <x-aura::text size="xs" variant="subtle">
                        sm
                    </x-aura::text>

                </x-aura::flex>

                <x-aura::flex direction="col" align="center" gap="2">

                    <x-aura::icon name="star" size="md" />

                    <x-aura::text size="xs" variant="subtle">
                        md
                    </x-aura::text>

                </x-aura::flex>

                <x-aura::flex direction="col" align="center" gap="2">

                    <x-aura::icon name="star" size="lg" />

                    <x-aura::text size="xs" variant="subtle">
                        lg
                    </x-aura::text>

                </x-aura::flex>

                <x-aura::flex direction="col" align="center" gap="2">

                    <x-aura::icon name="star" size="xl" />

                    <x-aura::text size="xs" variant="subtle">
                        xl
                    </x-aura::text>

                </x-aura::flex>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::icon name="star" size="xs" />

                <x-aura::icon name="star" size="sm" />

                <x-aura::icon name="star" size="md" />

                <x-aura::icon name="star" size="lg" />

                <x-aura::icon name="star" size="xl" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Boxed Icon Badges -->
    <x-aura::code title="2. Boxed Container Badges">

        <x-slot:preview>

            <x-aura::flex align="center" gap="4" :wrap="true">

                <x-aura::icon name="sparkles" variant="dark" size="md" shape="rounded" />

                <x-aura::icon name="shield-check" variant="outline" size="md" shape="rounded" />

                <x-aura::icon name="heart" variant="subtle" size="md" shape="circle" />

                <x-aura::icon name="bell" variant="dark" size="md" shape="circle" />

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::icon name="sparkles" variant="dark" size="md" shape="rounded" />

                <x-aura::icon name="shield-check" variant="outline" size="md" shape="rounded" />

                <x-aura::icon name="heart" variant="subtle" size="md" shape="circle" />

                <x-aura::icon name="bell" variant="dark" size="md" shape="circle" />
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
                Available properties and configurations for the icon component.
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
                            name
                        </x-aura::text>

                        <x-aura::tooltip text="Lucide icon identifier name" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        circle
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::text size="sm" variant="subtle">
                        Icon name string (e.g. sparkles, star, check)
                    </x-aura::text>
                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            size
                        </x-aura::text>

                        <x-aura::tooltip text="SVG icon and container bounding dimension scale" position="top">

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

                        <x-aura::badge variant="subtle" size="md">
                            xl
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

                        <x-aura::tooltip text="Boxed container color scheme background and border styling" position="top">

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
                            subtle
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            secondary
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            primary
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            dark
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            outline
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
                            shape
                        </x-aura::text>

                        <x-aura::tooltip text="Boxed container corner geometry shape" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        rounded
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

                        <x-aura::badge variant="subtle" size="md">
                            rounded
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            circle
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            square
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            container
                        </x-aura::text>

                        <x-aura::tooltip text="Force rendering inside an elevated container wrapper" position="top">

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

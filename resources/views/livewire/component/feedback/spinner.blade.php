<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Spinner — Aura Wire')] 
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
            Spinner
        </x-aura::heading>

        <x-aura::subheading size="md">
            Animated loading indicators supporting circular rings, bouncing dots, pulsating bars, and radar pings.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::spinner type="ring" size="md" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Spinner Types -->
    <x-aura::code title="1. Spinner Varieties">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex align="center" justify="around" class="py-4">

                    <x-aura::flex direction="col" align="center" gap="2">

                        <x-aura::spinner type="ring" size="lg" />

                        <x-aura::text size="xs" variant="subtle">
                            Ring
                        </x-aura::text>

                    </x-aura::flex>

                    <x-aura::flex direction="col" align="center" gap="2">

                        <x-aura::spinner type="dots" size="lg" />

                        <x-aura::text size="xs" variant="subtle">
                            Dots
                        </x-aura::text>

                    </x-aura::flex>

                    <x-aura::flex direction="col" align="center" gap="2">

                        <x-aura::spinner type="bars" size="lg" />

                        <x-aura::text size="xs" variant="subtle">
                            Bars
                        </x-aura::text>

                    </x-aura::flex>

                    <x-aura::flex direction="col" align="center" gap="2">

                        <x-aura::spinner type="ping" size="lg" />

                        <x-aura::text size="xs" variant="subtle">
                            Ping
                        </x-aura::text>

                    </x-aura::flex>

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::spinner type="ring" size="lg" />

                <x-aura::spinner type="dots" size="lg" />

                <x-aura::spinner type="bars" size="lg" />

                <x-aura::spinner type="ping" size="lg" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Sizes -->
    <x-aura::code title="2. Size Scale">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex align="center" justify="around" class="py-4">

                    <x-aura::flex direction="col" align="center" gap="2">

                        <x-aura::spinner size="xs" />

                        <x-aura::text size="xs" variant="subtle">
                            xs
                        </x-aura::text>

                    </x-aura::flex>

                    <x-aura::flex direction="col" align="center" gap="2">

                        <x-aura::spinner size="sm" />

                        <x-aura::text size="xs" variant="subtle">
                            sm
                        </x-aura::text>

                    </x-aura::flex>

                    <x-aura::flex direction="col" align="center" gap="2">

                        <x-aura::spinner size="md" />

                        <x-aura::text size="xs" variant="subtle">
                            md
                        </x-aura::text>

                    </x-aura::flex>

                    <x-aura::flex direction="col" align="center" gap="2">

                        <x-aura::spinner size="lg" />

                        <x-aura::text size="xs" variant="subtle">
                            lg
                        </x-aura::text>

                    </x-aura::flex>

                    <x-aura::flex direction="col" align="center" gap="2">

                        <x-aura::spinner size="xl" />

                        <x-aura::text size="xs" variant="subtle">
                            xl
                        </x-aura::text>

                    </x-aura::flex>

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::spinner size="xs" />

                <x-aura::spinner size="sm" />

                <x-aura::spinner size="md" />

                <x-aura::spinner size="lg" />

                <x-aura::spinner size="xl" />
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
                Available properties and configurations for the spinner loading indicator component.
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
                            type
                        </x-aura::text>

                        <x-aura::tooltip text="Animation and indicator visual motion style" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        ring
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

                        <x-aura::badge variant="subtle" size="md">
                            ring
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            dots
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            bars
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            ping
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

                        <x-aura::tooltip text="Indicator diameter and dimensional scale" position="top">

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

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            variant
                        </x-aura::text>

                        <x-aura::tooltip text="Color scheme and intent styling" position="top">

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
                            primary
                        </x-aura::badge>

                        <x-aura::badge variant="positive" size="md">
                            success
                        </x-aura::badge>

                        <x-aura::badge variant="warning" size="md">
                            warning
                        </x-aura::badge>

                        <x-aura::badge variant="danger" size="md">
                            danger
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            white
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

        </x-aura::table>

    </x-aura::card>

</x-aura::container>

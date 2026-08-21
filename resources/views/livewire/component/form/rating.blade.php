<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Rating — Aura Wire')] 
class extends Component {
    public int $score = 4;
};

?>

<x-aura::container gap="8" :padding="false">

    <!-- Header -->
    <x-aura::card size="full" gap="2">

        <x-aura::flex align="center" gap="2.5">

            <x-aura::kicker>
                Form
            </x-aura::kicker>

            <x-aura::badge variant="subtle" size="md">
                Component
            </x-aura::badge>

        </x-aura::flex>

        <x-aura::heading level="1" size="xl">
            Rating
        </x-aura::heading>

        <x-aura::subheading size="md">
            Monochrome star rating form controls and read only star rating indicators with precise half star support.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::rating wire:model="score" :max="5" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Interactive Rating -->
    <x-aura::code title="1. Interactive Form Control">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex direction="col" align="start" gap="2">

                    <x-aura::label>
                        Customer Satisfaction Score
                    </x-aura::label>

                    <x-aura::rating :rating="4" :max="5" name="user_feedback" size="lg" />

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::flex direction="col" align="start" gap="2">
                    <x-aura::label>
                        Customer Satisfaction Score
                    </x-aura::label>

                    <x-aura::rating :rating="4" :max="5" name="user_feedback" size="lg" />
                </x-aura::flex>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Read Only Product Review Score -->
    <x-aura::code title="2. Read Only Review Score with Half Star">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex align="center" gap="3">

                    <x-aura::rating :rating="4.5" :max="5" :readonly="true" size="md" />

                    <x-aura::text size="sm" weight="bold">
                        4.5
                    </x-aura::text>

                    <x-aura::text size="xs" variant="subtle">
                        (284 verified reviews)
                    </x-aura::text>

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::flex align="center" gap="3">
                    <x-aura::rating :rating="4.5" :max="5" :readonly="true" size="md" />

                    <x-aura::text size="sm" weight="bold">
                        4.5
                    </x-aura::text>

                    <x-aura::text size="xs" variant="subtle">
                        (284 verified reviews)
                    </x-aura::text>
                </x-aura::flex>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 3. Size Variations -->
    <x-aura::code title="3. Size Variations">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex direction="col" gap="4">

                    <x-aura::flex align="center" gap="4">
                        <x-aura::text size="xs" variant="subtle" class="w-20">Small (sm):</x-aura::text>
                        <x-aura::rating :rating="5" :readonly="true" size="sm" />
                    </x-aura::flex>

                    <x-aura::flex align="center" gap="4">
                        <x-aura::text size="xs" variant="subtle" class="w-20">Medium (md):</x-aura::text>
                        <x-aura::rating :rating="5" :readonly="true" size="md" />
                    </x-aura::flex>

                    <x-aura::flex align="center" gap="4">
                        <x-aura::text size="xs" variant="subtle" class="w-20">Large (lg):</x-aura::text>
                        <x-aura::rating :rating="5" :readonly="true" size="lg" />
                    </x-aura::flex>

                    <x-aura::flex align="center" gap="4">
                        <x-aura::text size="xs" variant="subtle" class="w-20">Extra (xl):</x-aura::text>
                        <x-aura::rating :rating="5" :readonly="true" size="xl" />
                    </x-aura::flex>

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::rating :rating="5" :readonly="true" size="sm" />
                <x-aura::rating :rating="5" :readonly="true" size="md" />
                <x-aura::rating :rating="5" :readonly="true" size="lg" />
                <x-aura::rating :rating="5" :readonly="true" size="xl" />
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
                Available properties and configurations for the rating component.
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
                            rating
                        </x-aura::text>

                        <x-aura::tooltip text="Current numeric rating value score" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        0
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::text size="sm" variant="subtle">
                        Numeric value (0 to max)
                    </x-aura::text>
                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            max
                        </x-aura::text>

                        <x-aura::tooltip text="Maximum star count" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        5
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::text size="sm" variant="subtle">
                        Positive integer
                    </x-aura::text>
                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            readonly
                        </x-aura::text>

                        <x-aura::tooltip text="Disable hover effects and click selection" position="top">

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
                            size
                        </x-aura::text>

                        <x-aura::tooltip text="Star icon bounding dimensions" position="top">

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

        </x-aura::table>

    </x-aura::card>

</x-aura::container>

<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Animate — Aura Wire')] 
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
            Animate
        </x-aura::heading>

        <x-aura::subheading size="md">
            Wrap any component, icon, badge, card, or text in rich CSS micro-animations, continuous motion loops, and hover interactions.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::animate type="bounce">
                    <x-aura::icon name="arrow-down" size="sm" />
                </x-aura::animate>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Continuous Loop Animations -->
    <x-aura::code title="1. Continuous Loop Animations">

        <x-slot:preview>

            <x-aura::flex align="center" justify="around" :wrap="true" gap="6" class="w-full py-4">

                <!-- Bounce -->
                <x-aura::flex direction="col" align="center" gap="2">

                    <x-aura::animate type="bounce">
                        <x-aura::icon name="arrow-down" size="md" :container="true" />
                    </x-aura::animate>

                    <x-aura::text size="xs" variant="subtle">
                        bounce
                    </x-aura::text>

                </x-aura::flex>

                <!-- Float -->
                <x-aura::flex direction="col" align="center" gap="2">

                    <x-aura::animate type="float">
                        <x-aura::icon name="cloud" size="md" :container="true" />
                    </x-aura::animate>

                    <x-aura::text size="xs" variant="subtle">
                        float
                    </x-aura::text>

                </x-aura::flex>

                <!-- Spin -->
                <x-aura::flex direction="col" align="center" gap="2">

                    <x-aura::animate type="spin">
                        <x-aura::icon name="loader-2" size="md" :container="true" />
                    </x-aura::animate>

                    <x-aura::text size="xs" variant="subtle">
                        spin
                    </x-aura::text>

                </x-aura::flex>

                <!-- Pulse -->
                <x-aura::flex direction="col" align="center" gap="2">

                    <x-aura::animate type="pulse">
                        <x-aura::icon name="activity" size="md" :container="true" />
                    </x-aura::animate>

                    <x-aura::text size="xs" variant="subtle">
                        pulse
                    </x-aura::text>

                </x-aura::flex>

                <!-- Ping -->
                <x-aura::flex direction="col" align="center" gap="2">

                    <x-aura::animate type="ping">
                        <x-aura::icon name="bell" size="md" :container="true" />
                    </x-aura::animate>

                    <x-aura::text size="xs" variant="subtle">
                        ping
                    </x-aura::text>

                </x-aura::flex>

                <!-- Wiggle -->
                <x-aura::flex direction="col" align="center" gap="2">

                    <x-aura::animate type="wiggle">
                        <x-aura::icon name="sparkles" size="md" :container="true" />
                    </x-aura::animate>

                    <x-aura::text size="xs" variant="subtle">
                        wiggle
                    </x-aura::text>

                </x-aura::flex>

                <!-- Throb -->
                <x-aura::flex direction="col" align="center" gap="2">

                    <x-aura::animate type="throb">
                        <x-aura::icon name="heart" size="md" :container="true" />
                    </x-aura::animate>

                    <x-aura::text size="xs" variant="subtle">
                        throb
                    </x-aura::text>

                </x-aura::flex>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <!-- Continuous Bounce -->
                <x-aura::animate type="bounce">
                    <x-aura::icon name="arrow-down" size="md" :container="true" />
                </x-aura::animate>

                <!-- Smooth Floating Wave -->
                <x-aura::animate type="float">
                    <x-aura::icon name="cloud" size="md" :container="true" />
                </x-aura::animate>

                <!-- 360 Spin Loader -->
                <x-aura::animate type="spin">
                    <x-aura::icon name="loader-2" size="md" :container="true" />
                </x-aura::animate>

                <!-- Opacity Pulse -->
                <x-aura::animate type="pulse">
                    <x-aura::icon name="activity" size="md" :container="true" />
                </x-aura::animate>

                <!-- Radar Ripple Ping -->
                <x-aura::animate type="ping">
                    <x-aura::icon name="bell" size="md" :container="true" />
                </x-aura::animate>

                <!-- Playful Wiggle -->
                <x-aura::animate type="wiggle">
                    <x-aura::icon name="sparkles" size="md" :container="true" />
                </x-aura::animate>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Slow Ambient Loops -->
    <x-aura::code title="2. Slow Ambient Loops">

        <x-slot:preview>

            <x-aura::flex align="center" justify="around" :wrap="true" gap="6" class="w-full py-4">

                <!-- Bounce Slow -->
                <x-aura::flex direction="col" align="center" gap="2">

                    <x-aura::animate type="bounce-slow">
                        <x-aura::badge variant="neutral" size="md">
                            2s Bounce
                        </x-aura::badge>
                    </x-aura::animate>

                    <x-aura::text size="xs" variant="subtle">
                        bounce-slow
                    </x-aura::text>

                </x-aura::flex>

                <!-- Spin Slow -->
                <x-aura::flex direction="col" align="center" gap="2">

                    <x-aura::animate type="spin-slow">
                        <x-aura::icon name="settings" size="md" :container="true" />
                    </x-aura::animate>

                    <x-aura::text size="xs" variant="subtle">
                        spin-slow (3s)
                    </x-aura::text>

                </x-aura::flex>

                <!-- Pulse Slow -->
                <x-aura::flex direction="col" align="center" gap="2">

                    <x-aura::animate type="pulse-slow">
                        <x-aura::badge variant="positive" size="md">
                            Live Status
                        </x-aura::badge>
                    </x-aura::animate>

                    <x-aura::text size="xs" variant="subtle">
                        pulse-slow (3s)
                    </x-aura::text>

                </x-aura::flex>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <!-- Slow Bounce -->
                <x-aura::animate type="bounce-slow">
                    <x-aura::badge variant="neutral" size="md">
                        2s Bounce
                    </x-aura::badge>
                </x-aura::animate>

                <!-- Ambient 3s Gear Rotation -->
                <x-aura::animate type="spin-slow">
                    <x-aura::icon name="settings" size="md" :container="true" />
                </x-aura::animate>

                <!-- Slow Ambient Pulse -->
                <x-aura::animate type="pulse-slow">
                    <x-aura::badge variant="positive" size="md">
                        Live Status
                    </x-aura::badge>
                </x-aura::animate>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 3. Hover Micro-Interactions -->
    <x-aura::code title="3. Hover Micro-Interactions (Hover to Trigger)">

        <x-slot:preview>

            <x-aura::flex align="center" justify="around" :wrap="true" gap="6" class="w-full py-4">

                <!-- Hover Scale -->
                <x-aura::flex direction="col" align="center" gap="2">

                    <x-aura::animate type="hover-scale">
                        <x-aura::button variant="primary" size="sm">
                            Hover Scale
                        </x-aura::button>
                    </x-aura::animate>

                    <x-aura::text size="xs" variant="subtle">
                        hover-scale
                    </x-aura::text>

                </x-aura::flex>

                <!-- Hover Lift -->
                <x-aura::flex direction="col" align="center" gap="2">

                    <x-aura::animate type="hover-lift">
                        <x-aura::button variant="secondary" size="sm">
                            Hover Lift
                        </x-aura::button>
                    </x-aura::animate>

                    <x-aura::text size="xs" variant="subtle">
                        hover-lift
                    </x-aura::text>

                </x-aura::flex>

                <!-- Hover Spin -->
                <x-aura::flex direction="col" align="center" gap="2">

                    <x-aura::animate type="hover-spin">
                        <x-aura::icon name="refresh-cw" size="md" :container="true" />
                    </x-aura::animate>

                    <x-aura::text size="xs" variant="subtle">
                        hover-spin
                    </x-aura::text>

                </x-aura::flex>

                <!-- Hover Wiggle -->
                <x-aura::flex direction="col" align="center" gap="2">

                    <x-aura::animate type="hover-wiggle">
                        <x-aura::icon name="bell" size="md" :container="true" />
                    </x-aura::animate>

                    <x-aura::text size="xs" variant="subtle">
                        hover-wiggle
                    </x-aura::text>

                </x-aura::flex>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <!-- Hover Scale Up -->
                <x-aura::animate type="hover-scale">
                    <x-aura::button variant="primary" size="sm">
                        Hover Scale
                    </x-aura::button>
                </x-aura::animate>

                <!-- Hover Elevate -->
                <x-aura::animate type="hover-lift">
                    <x-aura::button variant="secondary" size="sm">
                        Hover Lift
                    </x-aura::button>
                </x-aura::animate>

                <!-- Hover Rotate Spin -->
                <x-aura::animate type="hover-spin">
                    <x-aura::icon name="refresh-cw" size="md" :container="true" />
                </x-aura::animate>

                <!-- Hover Tilt Wiggle -->
                <x-aura::animate type="hover-wiggle">
                    <x-aura::icon name="bell" size="md" :container="true" />
                </x-aura::animate>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 4. Transformations and Orientations -->
    <x-aura::code title="4. Transformations and Orientations">

        <x-slot:preview>

            <x-aura::flex align="center" justify="around" :wrap="true" gap="6" class="w-full py-4">

                <!-- Flip X -->
                <x-aura::flex direction="col" align="center" gap="2">

                    <x-aura::animate type="flip-x">
                        <x-aura::icon name="arrow-right" size="md" :container="true" />
                    </x-aura::animate>

                    <x-aura::text size="xs" variant="subtle">
                        flip-x
                    </x-aura::text>

                </x-aura::flex>

                <!-- Flip Y -->
                <x-aura::flex direction="col" align="center" gap="2">

                    <x-aura::animate type="flip-y">
                        <x-aura::icon name="arrow-down" size="md" :container="true" />
                    </x-aura::animate>

                    <x-aura::text size="xs" variant="subtle">
                        flip-y
                    </x-aura::text>

                </x-aura::flex>

                <!-- Rotate 45 -->
                <x-aura::flex direction="col" align="center" gap="2">

                    <x-aura::animate type="rotate-45">
                        <x-aura::icon name="plus" size="md" :container="true" />
                    </x-aura::animate>

                    <x-aura::text size="xs" variant="subtle">
                        rotate-45
                    </x-aura::text>

                </x-aura::flex>

                <!-- Rotate 90 -->
                <x-aura::flex direction="col" align="center" gap="2">

                    <x-aura::animate type="rotate-90">
                        <x-aura::icon name="arrow-right" size="md" :container="true" />
                    </x-aura::animate>

                    <x-aura::text size="xs" variant="subtle">
                        rotate-90
                    </x-aura::text>

                </x-aura::flex>

                <!-- Rotate 180 -->
                <x-aura::flex direction="col" align="center" gap="2">

                    <x-aura::animate type="rotate-180">
                        <x-aura::icon name="arrow-up" size="md" :container="true" />
                    </x-aura::animate>

                    <x-aura::text size="xs" variant="subtle">
                        rotate-180
                    </x-aura::text>

                </x-aura::flex>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <!-- Horizontal Flip -->
                <x-aura::animate type="flip-x">
                    <x-aura::icon name="arrow-right" size="md" />
                </x-aura::animate>

                <!-- Angle Rotations -->
                <x-aura::animate type="rotate-45">
                    <x-aura::icon name="plus" size="md" />
                </x-aura::animate>

                <x-aura::animate type="rotate-90">
                    <x-aura::icon name="arrow-right" size="md" />
                </x-aura::animate>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 5. Inline Integration -->
    <x-aura::code title="5. Inline Integration with Badges and Text">

        <x-slot:preview>

            <x-aura::flex align="center" justify="center" gap="4" class="w-full py-4">

                <x-aura::badge variant="neutral" size="md">

                    <x-aura::flex align="center" gap="2">

                        <x-aura::animate type="pulse" :inline="true">
                            <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                        </x-aura::animate>

                        <span>Recording Live</span>

                    </x-aura::flex>

                </x-aura::badge>

                <x-aura::badge variant="subtle" size="md">

                    <x-aura::flex align="center" gap="2">

                        <x-aura::animate type="spin" :inline="true">
                            <x-aura::icon name="loader-2" size="xs" />
                        </x-aura::animate>

                        <span>Syncing Data</span>

                    </x-aura::flex>

                </x-aura::badge>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::badge variant="neutral" size="md">
                    <x-aura::flex align="center" gap="2">
                        <x-aura::animate type="pulse" :inline="true">
                            <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                        </x-aura::animate>
                        <span>Recording Live</span>
                    </x-aura::flex>
                </x-aura::badge>

                <x-aura::badge variant="subtle" size="md">
                    <x-aura::flex align="center" gap="2">
                        <x-aura::animate type="spin" :inline="true">
                            <x-aura::icon name="loader-2" size="xs" />
                        </x-aura::animate>
                        <span>Syncing Data</span>
                    </x-aura::flex>
                </x-aura::badge>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- Component Attributes Table -->
    <x-aura::card title="Component Attributes" description="Available configuration properties for the <x-aura::animate> wrapper component." size="full" gap="4">

        <x-aura::table>

            <x-slot:header>

                <x-aura::table.column>
                    Property
                </x-aura::table.column>

                <x-aura::table.column>
                    Default
                </x-aura::table.column>

                <x-aura::table.column>
                    Values
                </x-aura::table.column>

            </x-slot:header>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            type
                        </x-aura::text>

                        <x-aura::tooltip text="Animation motion preset" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::badge variant="neutral" size="md">
                        bounce
                    </x-aura::badge>

                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

                        <x-aura::badge variant="subtle" size="md">
                            bounce
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            float
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            spin
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            pulse
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            ping
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            wiggle
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            throb
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            bounce-slow
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            spin-slow
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            pulse-slow
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            hover-spin
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            hover-scale
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            flip-x
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            rotate-90
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            inline
                        </x-aura::text>

                        <x-aura::tooltip text="Render as an inline-flex span for inline badges or text" position="top">

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
                            as
                        </x-aura::text>

                        <x-aura::tooltip text="HTML wrapper tag element" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::badge variant="neutral" size="md">
                        div
                    </x-aura::badge>

                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

                        <x-aura::badge variant="subtle" size="md">
                            div
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            span
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            section
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

        </x-aura::table>

    </x-aura::card>

</x-aura::container>

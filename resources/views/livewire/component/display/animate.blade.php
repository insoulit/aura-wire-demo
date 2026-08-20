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
            Wrap any Aura Wire component, icon, badge, card, button, or text in over 40+ rich CSS micro-animations, continuous motion loops, hover interactions, and directional transforms.
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

    <!-- 1. Continuous Motion Loops -->
    <x-aura::code title="1. Continuous Motion Loops (Ambient & Indicators)">

        <x-slot:preview>

            <x-aura::grid cols="2" sm="3" lg="6" gap="4" class="w-full py-4">

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

                <!-- Heartbeat -->
                <x-aura::flex direction="col" align="center" gap="2">

                    <x-aura::animate type="heartbeat">
                        <x-aura::icon name="heart" size="md" :container="true" />
                    </x-aura::animate>

                    <x-aura::text size="xs" variant="subtle">
                        heartbeat
                    </x-aura::text>

                </x-aura::flex>

                <!-- Throb -->
                <x-aura::flex direction="col" align="center" gap="2">

                    <x-aura::animate type="throb">
                        <x-aura::icon name="zap" size="md" :container="true" />
                    </x-aura::animate>

                    <x-aura::text size="xs" variant="subtle">
                        throb
                    </x-aura::text>

                </x-aura::flex>

                <!-- Jiggle -->
                <x-aura::flex direction="col" align="center" gap="2">

                    <x-aura::animate type="jiggle">
                        <x-aura::icon name="music" size="md" :container="true" />
                    </x-aura::animate>

                    <x-aura::text size="xs" variant="subtle">
                        jiggle
                    </x-aura::text>

                </x-aura::flex>

                <!-- Spin Reverse -->
                <x-aura::flex direction="col" align="center" gap="2">

                    <x-aura::animate type="spin-reverse">
                        <x-aura::icon name="refresh-ccw" size="md" :container="true" />
                    </x-aura::animate>

                    <x-aura::text size="xs" variant="subtle">
                        spin-reverse
                    </x-aura::text>

                </x-aura::flex>

                <!-- Bounce Fast -->
                <x-aura::flex direction="col" align="center" gap="2">

                    <x-aura::animate type="bounce-fast">
                        <x-aura::icon name="chevrons-down" size="md" :container="true" />
                    </x-aura::animate>

                    <x-aura::text size="xs" variant="subtle">
                        bounce-fast
                    </x-aura::text>

                </x-aura::flex>

                <!-- Pulse Fast -->
                <x-aura::flex direction="col" align="center" gap="2">

                    <x-aura::animate type="pulse-fast">
                        <x-aura::icon name="radio" size="md" :container="true" />
                    </x-aura::animate>

                    <x-aura::text size="xs" variant="subtle">
                        pulse-fast
                    </x-aura::text>

                </x-aura::flex>

            </x-aura::grid>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <!-- Standard Vertical Bounce -->
                <x-aura::animate type="bounce">
                    <x-aura::icon name="arrow-down" size="md" :container="true" />
                </x-aura::animate>

                <!-- Gentle Floating Wave -->
                <x-aura::animate type="float">
                    <x-aura::icon name="cloud" size="md" :container="true" />
                </x-aura::animate>

                <!-- 360 Rotation Spinner -->
                <x-aura::animate type="spin">
                    <x-aura::icon name="loader-2" size="md" :container="true" />
                </x-aura::animate>

                <!-- Breathing Opacity Pulse -->
                <x-aura::animate type="pulse">
                    <x-aura::icon name="activity" size="md" :container="true" />
                </x-aura::animate>

                <!-- Radar Ripple Ping -->
                <x-aura::animate type="ping">
                    <x-aura::icon name="bell" size="md" :container="true" />
                </x-aura::animate>

                <!-- Playful Rotational Wiggle -->
                <x-aura::animate type="wiggle">
                    <x-aura::icon name="sparkles" size="md" :container="true" />
                </x-aura::animate>

                <!-- Double Beat Pulse -->
                <x-aura::animate type="heartbeat">
                    <x-aura::icon name="heart" size="md" :container="true" />
                </x-aura::animate>

                <!-- Scale and Rotation Jiggle -->
                <x-aura::animate type="jiggle">
                    <x-aura::icon name="music" size="md" :container="true" />
                </x-aura::animate>

                <!-- Counter Clockwise Rotation -->
                <x-aura::animate type="spin-reverse">
                    <x-aura::icon name="refresh-ccw" size="md" :container="true" />
                </x-aura::animate>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Slow Ambient Variations -->
    <x-aura::code title="2. Relaxed Ambient Loops (Slow Motion)">

        <x-slot:preview>

            <x-aura::grid cols="2" sm="3" lg="5" gap="4" class="w-full py-4">

                <!-- Bounce Slow -->
                <x-aura::flex direction="col" align="center" gap="2">

                    <x-aura::animate type="bounce-slow">
                        <x-aura::badge variant="neutral" size="md">
                            2.5s Bounce
                        </x-aura::badge>
                    </x-aura::animate>

                    <x-aura::text size="xs" variant="subtle">
                        bounce-slow
                    </x-aura::text>

                </x-aura::flex>

                <!-- Float Slow -->
                <x-aura::flex direction="col" align="center" gap="2">

                    <x-aura::animate type="float-slow">
                        <x-aura::badge variant="subtle" size="md">
                            5s Float
                        </x-aura::badge>
                    </x-aura::animate>

                    <x-aura::text size="xs" variant="subtle">
                        float-slow
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

                <!-- Spin Reverse Slow -->
                <x-aura::flex direction="col" align="center" gap="2">

                    <x-aura::animate type="spin-reverse-slow">
                        <x-aura::icon name="compass" size="md" :container="true" />
                    </x-aura::animate>

                    <x-aura::text size="xs" variant="subtle">
                        spin-reverse-slow
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
                        pulse-slow (3.5s)
                    </x-aura::text>

                </x-aura::flex>

            </x-aura::grid>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <!-- Soft 2.5s Bounce -->
                <x-aura::animate type="bounce-slow">
                    <x-aura::badge variant="neutral" size="md">
                        2.5s Bounce
                    </x-aura::badge>
                </x-aura::animate>

                <!-- Calm 5s Floating Motion -->
                <x-aura::animate type="float-slow">
                    <x-aura::badge variant="subtle" size="md">
                        5s Float
                    </x-aura::badge>
                </x-aura::animate>

                <!-- Ambient 3s Gear Rotation -->
                <x-aura::animate type="spin-slow">
                    <x-aura::icon name="settings" size="md" :container="true" />
                </x-aura::animate>

                <!-- Slow Reverse Compass Rotation -->
                <x-aura::animate type="spin-reverse-slow">
                    <x-aura::icon name="compass" size="md" :container="true" />
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

    <!-- 3. Interactive Hover Micro-Interactions -->
    <x-aura::code title="3. Interactive Hover Micro-Interactions (Hover to Trigger)">

        <x-slot:preview>

            <x-aura::grid cols="2" sm="3" lg="4" gap="6" class="w-full py-4">

                <!-- Hover Scale -->
                <x-aura::flex direction="col" align="center" gap="2">

                    <x-aura::animate type="hover-scale">
                        <x-aura::button variant="primary" size="sm">
                            Scale (110%)
                        </x-aura::button>
                    </x-aura::animate>

                    <x-aura::text size="xs" variant="subtle">
                        hover-scale
                    </x-aura::text>

                </x-aura::flex>

                <!-- Hover Scale Sm -->
                <x-aura::flex direction="col" align="center" gap="2">

                    <x-aura::animate type="hover-scale-sm">
                        <x-aura::button variant="secondary" size="sm">
                            Scale Sm (105%)
                        </x-aura::button>
                    </x-aura::animate>

                    <x-aura::text size="xs" variant="subtle">
                        hover-scale-sm
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

                <!-- Hover Bounce -->
                <x-aura::flex direction="col" align="center" gap="2">

                    <x-aura::animate type="hover-bounce">
                        <x-aura::button variant="secondary" size="sm">
                            Hover Bounce
                        </x-aura::button>
                    </x-aura::animate>

                    <x-aura::text size="xs" variant="subtle">
                        hover-bounce
                    </x-aura::text>

                </x-aura::flex>

                <!-- Hover Spin -->
                <x-aura::flex direction="col" align="center" gap="2">

                    <x-aura::animate type="hover-spin">
                        <x-aura::icon name="refresh-cw" size="md" :container="true" />
                    </x-aura::animate>

                    <x-aura::text size="xs" variant="subtle">
                        hover-spin (180°)
                    </x-aura::text>

                </x-aura::flex>

                <!-- Hover Spin Full -->
                <x-aura::flex direction="col" align="center" gap="2">

                    <x-aura::animate type="hover-spin-full">
                        <x-aura::icon name="sun" size="md" :container="true" />
                    </x-aura::animate>

                    <x-aura::text size="xs" variant="subtle">
                        hover-spin-full (360°)
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

                <!-- Hover Tilt Left -->
                <x-aura::flex direction="col" align="center" gap="2">

                    <x-aura::animate type="hover-tilt-left">
                        <x-aura::icon name="bookmark" size="md" :container="true" />
                    </x-aura::animate>

                    <x-aura::text size="xs" variant="subtle">
                        hover-tilt-left
                    </x-aura::text>

                </x-aura::flex>

            </x-aura::grid>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <!-- Scale Up on Hover -->
                <x-aura::animate type="hover-scale">
                    <x-aura::button variant="primary" size="sm">
                        Scale (110%)
                    </x-aura::button>
                </x-aura::animate>

                <!-- Subtle Scale -->
                <x-aura::animate type="hover-scale-sm">
                    <x-aura::button variant="secondary" size="sm">
                        Scale Sm (105%)
                    </x-aura::button>
                </x-aura::animate>

                <!-- Elevate and Shadow on Hover -->
                <x-aura::animate type="hover-lift">
                    <x-aura::button variant="secondary" size="sm">
                        Hover Lift
                    </x-aura::button>
                </x-aura::animate>

                <!-- 180 Rotation on Hover -->
                <x-aura::animate type="hover-spin">
                    <x-aura::icon name="refresh-cw" size="md" :container="true" />
                </x-aura::animate>

                <!-- 360 Full Spin on Hover -->
                <x-aura::animate type="hover-spin-full">
                    <x-aura::icon name="sun" size="md" :container="true" />
                </x-aura::animate>

                <!-- Wobble Tilt on Mouseover -->
                <x-aura::animate type="hover-wiggle">
                    <x-aura::icon name="bell" size="md" :container="true" />
                </x-aura::animate>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 4. Active & Click Press States -->
    <x-aura::code title="4. Active & Press States (Click to Trigger)">

        <x-slot:preview>

            <x-aura::flex align="center" justify="around" :wrap="true" gap="6" class="w-full py-4">

                <!-- Active Press -->
                <x-aura::flex direction="col" align="center" gap="2">

                    <x-aura::animate type="active-press">
                        <x-aura::button variant="primary" size="sm">
                            Press Scale
                        </x-aura::button>
                    </x-aura::animate>

                    <x-aura::text size="xs" variant="subtle">
                        active-press
                    </x-aura::text>

                </x-aura::flex>

                <!-- Active Sink -->
                <x-aura::flex direction="col" align="center" gap="2">

                    <x-aura::animate type="active-sink">
                        <x-aura::button variant="secondary" size="sm">
                            Press Sink
                        </x-aura::button>
                    </x-aura::animate>

                    <x-aura::text size="xs" variant="subtle">
                        active-sink
                    </x-aura::text>

                </x-aura::flex>

                <!-- Active Bounce -->
                <x-aura::flex direction="col" align="center" gap="2">

                    <x-aura::animate type="active-bounce">
                        <x-aura::button variant="secondary" size="sm">
                            Deep Click
                        </x-aura::button>
                    </x-aura::animate>

                    <x-aura::text size="xs" variant="subtle">
                        active-bounce
                    </x-aura::text>

                </x-aura::flex>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <!-- Press Scale Down -->
                <x-aura::animate type="active-press">
                    <x-aura::button variant="primary" size="sm">
                        Press Scale
                    </x-aura::button>
                </x-aura::animate>

                <!-- Sink Downward on Click -->
                <x-aura::animate type="active-sink">
                    <x-aura::button variant="secondary" size="sm">
                        Press Sink
                    </x-aura::button>
                </x-aura::animate>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 5. Transformations and Orientations -->
    <x-aura::code title="5. Transformations and Orientations">

        <x-slot:preview>

            <x-aura::grid cols="2" sm="3" lg="6" gap="4" class="w-full py-4">

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

                <!-- Rotate 270 -->
                <x-aura::flex direction="col" align="center" gap="2">

                    <x-aura::animate type="rotate-270">
                        <x-aura::icon name="arrow-up" size="md" :container="true" />
                    </x-aura::animate>

                    <x-aura::text size="xs" variant="subtle">
                        rotate-270
                    </x-aura::text>

                </x-aura::flex>

            </x-aura::grid>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <!-- Horizontal Mirror Flip -->
                <x-aura::animate type="flip-x">
                    <x-aura::icon name="arrow-right" size="md" />
                </x-aura::animate>

                <!-- Vertical Mirror Flip -->
                <x-aura::animate type="flip-y">
                    <x-aura::icon name="arrow-down" size="md" />
                </x-aura::animate>

                <!-- 45 Degree Diagonal -->
                <x-aura::animate type="rotate-45">
                    <x-aura::icon name="plus" size="md" />
                </x-aura::animate>

                <!-- 90 Degree Rotation -->
                <x-aura::animate type="rotate-90">
                    <x-aura::icon name="arrow-right" size="md" />
                </x-aura::animate>

                <!-- 180 Inversion -->
                <x-aura::animate type="rotate-180">
                    <x-aura::icon name="arrow-up" size="md" />
                </x-aura::animate>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 6. Inline Integration -->
    <x-aura::code title="6. Inline Integration with Badges and Text">

        <x-slot:preview>

            <x-aura::flex align="center" justify="center" :wrap="true" gap="4" class="w-full py-4">

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

                <x-aura::badge variant="subtle" size="md">

                    <x-aura::flex align="center" gap="2">

                        <x-aura::animate type="ping" :inline="true">
                            <span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span>
                        </x-aura::animate>

                        <span>3 Notifications</span>

                    </x-aura::flex>

                </x-aura::badge>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <!-- Live Pulsing Beacon -->
                <x-aura::badge variant="neutral" size="md">
                    <x-aura::flex align="center" gap="2">
                        <x-aura::animate type="pulse" :inline="true">
                            <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                        </x-aura::animate>
                        <span>Recording Live</span>
                    </x-aura::flex>
                </x-aura::badge>

                <!-- Syncing Spinner Badge -->
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
                            bounce-slow
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            bounce-fast
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            float
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            float-slow
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            spin
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            spin-slow
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            spin-reverse
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            pulse
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            pulse-slow
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            pulse-fast
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            ping
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            wiggle
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            heartbeat
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            throb
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            jiggle
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            hover-scale
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            hover-lift
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            hover-bounce
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            hover-spin
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            hover-spin-full
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            hover-wiggle
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            active-press
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            active-sink
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            flip-x
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            flip-y
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            rotate-45
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            rotate-90
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            rotate-180
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            rotate-270
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

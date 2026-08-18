<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Kicker — Aura Wire')] 
class extends Component {};

?>

<x-aura::stack gap="10" class="w-full max-w-4xl mx-auto py-2">

    <!-- Header -->
    <x-aura::card>

        <x-aura::stack gap="2" class="max-w-2xl">

            <x-aura::flex align="center" gap="2.5">

                <x-aura::kicker>
                    Typography
                </x-aura::kicker>

                <x-aura::badge variant="subtle" size="sm">
                    Component
                </x-aura::badge>

            </x-aura::flex>

            <x-aura::heading level="1" size="xl">
                Kicker
            </x-aura::heading>

            <x-aura::subheading size="md">
                Uppercase category labels, status indicators, and eyebrow headers placed above primary section titles to establish clear visual context and hierarchy.
            </x-aura::subheading>

        </x-aura::stack>

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

    <!-- 1. Color & Intent Variants -->
    <x-aura::code title="1. Color and Intent Variants">

        <x-slot:preview>

            <x-aura::flex align="center" gap="6" class="flex-wrap">

                <x-aura::kicker variant="default">
                    DEFAULT STATUS
                </x-aura::kicker>

                <x-aura::kicker variant="dark">
                    DARK CONTRAST
                </x-aura::kicker>

                <x-aura::kicker variant="subtle">
                    SUBTLE LABEL
                </x-aura::kicker>

                <x-aura::kicker variant="primary">
                    PRIMARY FEATURE
                </x-aura::kicker>

                <x-aura::kicker variant="positive">
                    SYSTEM ONLINE
                </x-aura::kicker>

                <x-aura::kicker variant="warning">
                    ACTION REQUIRED
                </x-aura::kicker>

                <x-aura::kicker variant="danger">
                    CRITICAL ALERT
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

                <x-aura::kicker variant="primary">
                    PRIMARY FEATURE
                </x-aura::kicker>

                <x-aura::kicker variant="positive">
                    SYSTEM ONLINE
                </x-aura::kicker>

                <x-aura::kicker variant="warning">
                    ACTION REQUIRED
                </x-aura::kicker>

                <x-aura::kicker variant="danger">
                    CRITICAL ALERT
                </x-aura::kicker>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Kickers with Native Icons -->
    <x-aura::code title="2. Kickers with Native Icons">

        <x-slot:preview>

            <x-aura::flex align="center" gap="6" class="flex-wrap">

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

    <!-- 3. Size Scales & Letter Spacing -->
    <x-aura::code title="3. Size Scales and Letter Spacing">

        <x-slot:preview>

            <x-aura::stack gap="4" class="w-full">

                <x-aura::flex align="center" gap="3">

                    <x-aura::badge variant="neutral" size="sm">
                        xs
                    </x-aura::badge>

                    <x-aura::kicker size="xs" variant="default" tracking="widest">
                        MICRO EYEBROW HEADER
                    </x-aura::kicker>

                </x-aura::flex>

                <x-aura::flex align="center" gap="3">

                    <x-aura::badge variant="neutral" size="sm">
                        sm
                    </x-aura::badge>

                    <x-aura::kicker size="sm" variant="default" tracking="widest">
                        STANDARD SECTION KICKER
                    </x-aura::kicker>

                </x-aura::flex>

                <x-aura::flex align="center" gap="3">

                    <x-aura::badge variant="neutral" size="sm">
                        md
                    </x-aura::badge>

                    <x-aura::kicker size="md" variant="default" tracking="widest">
                        FEATURE HEADER CATEGORY
                    </x-aura::kicker>

                </x-aura::flex>

                <x-aura::flex align="center" gap="3">

                    <x-aura::badge variant="neutral" size="sm">
                        lg
                    </x-aura::badge>

                    <x-aura::kicker size="lg" variant="default" tracking="widest">
                        HERO DISPLAY EYEBROW
                    </x-aura::kicker>

                </x-aura::flex>

            </x-aura::stack>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::kicker size="xs" variant="default">
                    MICRO EYEBROW HEADER
                </x-aura::kicker>

                <x-aura::kicker size="sm" variant="default">
                    STANDARD SECTION KICKER
                </x-aura::kicker>

                <x-aura::kicker size="md" variant="default">
                    FEATURE HEADER CATEGORY
                </x-aura::kicker>

                <x-aura::kicker size="lg" variant="default">
                    HERO DISPLAY EYEBROW
                </x-aura::kicker>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 4. Real World Section Headers -->
    <x-aura::code title="4. Real World Hero and Card Headers">

        <x-slot:preview>

            <x-aura::stack gap="6" class="w-full">

                <!-- Hero Section Header Card -->
                <x-aura::card>

                    <x-aura::stack gap="4" class="w-full">

                        <x-aura::stack gap="2" class="max-w-2xl">

                            <x-aura::kicker variant="default" icon="sparkles">
                                ENTERPRISE PLATFORM
                            </x-aura::kicker>

                            <x-aura::heading level="2" size="display-lg">
                                Scale your infrastructure without friction
                            </x-aura::heading>

                            <x-aura::subheading size="md">
                                Global multi region cloud servers with automated load balancing, zero downtime rollouts, and SOC 2 verified security.
                            </x-aura::subheading>

                        </x-aura::stack>

                        <x-aura::flex align="center" gap="3">

                            <x-aura::button variant="primary" iconTrailing="arrow-right">
                                Explore
                            </x-aura::button>

                            <x-aura::button variant="ghost">
                                Docs
                            </x-aura::button>

                        </x-aura::flex>

                    </x-aura::stack>

                </x-aura::card>

                <!-- Navigation Sidebar Group -->
                <x-aura::card>

                    <x-aura::stack gap="4" class="w-full">

                        <x-aura::stack gap="2">

                            <x-aura::kicker variant="default" icon="layers">
                                MAIN NAVIGATION
                            </x-aura::kicker>

                            <x-aura::stack gap="1">

                                <x-aura::flex align="center" justify="between" class="px-3 py-2 rounded-lg bg-zinc-100 dark:bg-zinc-800">

                                    <x-aura::flex align="center" gap="2">

                                        <x-aura::icon name="home" size="sm" />

                                        <x-aura::text size="sm" weight="semibold">
                                            Dashboard
                                        </x-aura::text>

                                    </x-aura::flex>

                                    <x-aura::badge variant="neutral" size="sm">
                                        Active
                                    </x-aura::badge>

                                </x-aura::flex>

                                <x-aura::flex align="center" gap="2" class="px-3 py-2 rounded-lg hover:bg-zinc-100 dark:hover:bg-zinc-800/60">

                                    <x-aura::icon name="chart-bar" size="sm" />

                                    <x-aura::text size="sm">
                                        Analytics
                                    </x-aura::text>

                                </x-aura::flex>

                            </x-aura::stack>

                        </x-aura::stack>

                    </x-aura::stack>

                </x-aura::card>

            </x-aura::stack>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::card>

                    <x-aura::stack gap="4">

                        <x-aura::stack gap="2" class="max-w-2xl">

                            <x-aura::kicker variant="default" icon="sparkles">
                                ENTERPRISE PLATFORM
                            </x-aura::kicker>

                            <x-aura::heading level="2" size="display-lg">
                                Scale your infrastructure without friction
                            </x-aura::heading>

                            <x-aura::subheading size="md">
                                Global multi region cloud servers with automated load balancing, zero downtime rollouts, and SOC 2 verified security.
                            </x-aura::subheading>

                        </x-aura::stack>

                        <x-aura::flex align="center" gap="3">

                            <x-aura::button variant="primary" iconTrailing="arrow-right">
                                Explore
                            </x-aura::button>

                            <x-aura::button variant="ghost">
                                Docs
                            </x-aura::button>

                        </x-aura::flex>

                    </x-aura::stack>

                </x-aura::card>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::stack>


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

    <!-- 1. Color and Intent Variants -->
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

    <!-- 3. Size Scales and Letter Spacing -->
    <x-aura::code title="3. Size Scales and Letter Spacing">

        <x-slot:preview>

            <x-aura::flex direction="col" align="start" class="w-full" gap="4">

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

</x-aura::container>

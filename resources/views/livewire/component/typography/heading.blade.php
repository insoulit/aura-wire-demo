<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Heading — Aura Wire')] 
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
            Heading
        </x-aura::heading>

        <x-aura::subheading size="md">
            Semantic section headers supporting levels H1 through H6, explicit size scales, color variants, and custom font weights.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::heading level="1" size="xl">
                    Heading Title
                </x-aura::heading>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Semantic Heading Levels (H1 to H6) -->
    <x-aura::code title="1. Semantic Heading Levels (H1 to H6)">

        <x-slot:preview>

            <x-aura::flex direction="col" align="start" class="w-full" gap="4">

                <x-aura::heading level="1">
                    Level 1 (H1) Heading
                </x-aura::heading>

                <x-aura::heading level="2">
                    Level 2 (H2) Heading
                </x-aura::heading>

                <x-aura::heading level="3">
                    Level 3 (H3) Heading
                </x-aura::heading>

                <x-aura::heading level="4">
                    Level 4 (H4) Heading
                </x-aura::heading>

                <x-aura::heading level="5">
                    Level 5 (H5) Heading
                </x-aura::heading>

                <x-aura::heading level="6">
                    Level 6 (H6) Heading
                </x-aura::heading>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::heading level="1">
                    Level 1 (H1) Heading
                </x-aura::heading>

                <x-aura::heading level="2">
                    Level 2 (H2) Heading
                </x-aura::heading>

                <x-aura::heading level="3">
                    Level 3 (H3) Heading
                </x-aura::heading>

                <x-aura::heading level="4">
                    Level 4 (H4) Heading
                </x-aura::heading>

                <x-aura::heading level="5">
                    Level 5 (H5) Heading
                </x-aura::heading>

                <x-aura::heading level="6">
                    Level 6 (H6) Heading
                </x-aura::heading>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Explicit Size Scales -->
    <x-aura::code title="2. Explicit Size Scales">

        <x-slot:preview>

            <x-aura::flex direction="col" align="start" class="w-full" gap="4">

                <x-aura::heading level="2" size="2xl">
                    2XL Heading Scale
                </x-aura::heading>

                <x-aura::heading level="2" size="xl">
                    XL Heading Scale
                </x-aura::heading>

                <x-aura::heading level="2" size="lg">
                    LG Heading Scale
                </x-aura::heading>

                <x-aura::heading level="2" size="md">
                    MD Heading Scale
                </x-aura::heading>

                <x-aura::heading level="2" size="sm">
                    SM Heading Scale
                </x-aura::heading>

                <x-aura::heading level="2" size="xs">
                    XS Heading Scale
                </x-aura::heading>

                <x-aura::heading level="2" size="2xs">
                    2XS Uppercase Monospace Scale
                </x-aura::heading>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::heading level="2" size="2xl">
                    2XL Heading Scale
                </x-aura::heading>

                <x-aura::heading level="2" size="xl">
                    XL Heading Scale
                </x-aura::heading>

                <x-aura::heading level="2" size="lg">
                    LG Heading Scale
                </x-aura::heading>

                <x-aura::heading level="2" size="md">
                    MD Heading Scale
                </x-aura::heading>

                <x-aura::heading level="2" size="sm">
                    SM Heading Scale
                </x-aura::heading>

                <x-aura::heading level="2" size="xs">
                    XS Heading Scale
                </x-aura::heading>

                <x-aura::heading level="2" size="2xs">
                    2XS Uppercase Monospace Scale
                </x-aura::heading>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 3. Tone and Gradient Variants -->
    <x-aura::code title="3. Tone and Gradient Variants">

        <x-slot:preview>

            <x-aura::flex direction="col" align="start" class="w-full" gap="4">

                <x-aura::heading level="3" size="lg" variant="default">
                    Default Heading
                </x-aura::heading>

                <x-aura::heading level="3" size="lg" variant="gradient">
                    Monochrome Gradient Headline
                </x-aura::heading>

                <x-aura::heading level="3" size="lg" variant="subtle">
                    Subtle Muted Heading
                </x-aura::heading>

                <x-aura::heading level="3" size="lg" variant="accent">
                    Accent High Contrast Heading
                </x-aura::heading>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::heading level="3" size="lg" variant="default">
                    Default Heading
                </x-aura::heading>

                <x-aura::heading level="3" size="lg" variant="gradient">
                    Monochrome Gradient Headline
                </x-aura::heading>

                <x-aura::heading level="3" size="lg" variant="subtle">
                    Subtle Muted Heading
                </x-aura::heading>

                <x-aura::heading level="3" size="lg" variant="accent">
                    Accent High Contrast Heading
                </x-aura::heading>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 4. Font Weights and Tracking -->
    <x-aura::code title="4. Font Weights and Tracking">

        <x-slot:preview>

            <x-aura::flex direction="col" align="start" class="w-full" gap="4">

                <x-aura::heading level="3" size="md" weight="light">
                    Light Weight Heading
                </x-aura::heading>

                <x-aura::heading level="3" size="md" weight="normal">
                    Normal Weight Heading
                </x-aura::heading>

                <x-aura::heading level="3" size="md" weight="medium">
                    Medium Weight Heading
                </x-aura::heading>

                <x-aura::heading level="3" size="md" weight="semibold">
                    Semibold Weight Heading
                </x-aura::heading>

                <x-aura::heading level="3" size="md" weight="bold">
                    Bold Weight Heading
                </x-aura::heading>

                <x-aura::heading level="3" size="md" weight="extrabold" tracking="tight">
                    Extrabold with Tight Tracking
                </x-aura::heading>

                <x-aura::heading level="3" size="md" weight="black" tracking="wide">
                    Black Weight with Wide Tracking
                </x-aura::heading>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::heading level="3" size="md" weight="light">
                    Light Weight Heading
                </x-aura::heading>

                <x-aura::heading level="3" size="md" weight="normal">
                    Normal Weight Heading
                </x-aura::heading>

                <x-aura::heading level="3" size="md" weight="medium">
                    Medium Weight Heading
                </x-aura::heading>

                <x-aura::heading level="3" size="md" weight="semibold">
                    Semibold Weight Heading
                </x-aura::heading>

                <x-aura::heading level="3" size="md" weight="bold">
                    Bold Weight Heading
                </x-aura::heading>

                <x-aura::heading level="3" size="md" weight="extrabold" tracking="tight">
                    Extrabold with Tight Tracking
                </x-aura::heading>

                <x-aura::heading level="3" size="md" weight="black" tracking="wide">
                    Black Weight with Wide Tracking
                </x-aura::heading>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 5. Real World Section Header Pattern -->
    <x-aura::code title="5. Real World Section Header Pattern">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex align="center" justify="between" class="w-full">

                    <x-aura::flex direction="col" align="start" gap="1">

                        <x-aura::heading level="2" size="md">
                            Project Settings and Security
                        </x-aura::heading>

                        <x-aura::subheading size="sm">
                            Manage API tokens, environment keys, and deployment webhooks.
                        </x-aura::subheading>

                    </x-aura::flex>

                    <x-aura::flex align="center" gap="2">

                        <x-aura::button variant="secondary" size="sm">
                            Audit
                        </x-aura::button>

                        <x-aura::button variant="primary" size="sm" icon="plus">
                            Create
                        </x-aura::button>

                    </x-aura::flex>

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::card size="2xl" gap="4">

                    <x-aura::flex align="center" justify="between" class="w-full">

                        <x-aura::flex direction="col" align="start" gap="1">

                            <x-aura::heading level="2" size="md">
                                Project Settings and Security
                            </x-aura::heading>

                            <x-aura::subheading size="sm">
                                Manage API tokens, environment keys, and deployment webhooks.
                            </x-aura::subheading>

                        </x-aura::flex>

                        <x-aura::flex align="center" gap="2">

                            <x-aura::button variant="secondary" size="sm">
                                Audit
                            </x-aura::button>

                            <x-aura::button variant="primary" size="sm" icon="plus">
                                Create
                            </x-aura::button>

                        </x-aura::flex>

                    </x-aura::flex>

                </x-aura::card>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>

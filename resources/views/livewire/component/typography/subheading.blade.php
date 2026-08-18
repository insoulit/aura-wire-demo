<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Subheading — Aura Wire')] 
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
            Subheading
        </x-aura::heading>

        <x-aura::subheading size="md">
            Secondary typography designed for section lead paragraphs, feature summaries, card header descriptions, and hero text.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::subheading size="md">
                    Section description or lead text.
                </x-aura::subheading>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Standard Section Subheading -->
    <x-aura::code title="1. Standard Section Subheading">

        <x-slot:preview>

            <x-aura::flex direction="col" align="start" class="w-full" gap="2">

                <x-aura::heading level="2" size="md">
                    Dashboard Analytics
                </x-aura::heading>

                <x-aura::subheading size="md">
                    Monitor your key performance metrics, revenue growth, and active project statistics in real time.
                </x-aura::subheading>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::heading level="2" size="md">
                    Dashboard Analytics
                </x-aura::heading>

                <x-aura::subheading size="md">
                    Monitor your key performance metrics, revenue growth, and active project statistics in real time.
                </x-aura::subheading>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Size Scales -->
    <x-aura::code title="2. Size Scales">

        <x-slot:preview>

            <x-aura::flex direction="col" align="start" class="w-full" gap="4">

                <x-aura::subheading size="2xl">
                    2XL Subheading — High impact intro lead summary for key landing page headers.
                </x-aura::subheading>

                <x-aura::subheading size="xl">
                    XL Subheading — Hero section description and prominent callout paragraph.
                </x-aura::subheading>

                <x-aura::subheading size="lg">
                    Large Subheading — Section subtitle for medium feature headers.
                </x-aura::subheading>

                <x-aura::subheading size="md">
                    Medium Subheading — Standard description for cards and widget headers.
                </x-aura::subheading>

                <x-aura::subheading size="sm">
                    Small Subheading — Compact inline subtitle and metadata description.
                </x-aura::subheading>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::subheading size="2xl">
                    2XL Subheading — High impact intro lead summary for key landing page headers.
                </x-aura::subheading>

                <x-aura::subheading size="xl">
                    XL Subheading — Hero section description and prominent callout paragraph.
                </x-aura::subheading>

                <x-aura::subheading size="lg">
                    Large Subheading — Section subtitle for medium feature headers.
                </x-aura::subheading>

                <x-aura::subheading size="md">
                    Medium Subheading — Standard description for cards and widget headers.
                </x-aura::subheading>

                <x-aura::subheading size="sm">
                    Small Subheading — Compact inline subtitle and metadata description.
                </x-aura::subheading>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 3. Color Variants and Weights -->
    <x-aura::code title="3. Color Variants and Weights">

        <x-slot:preview>

            <x-aura::flex direction="col" align="start" class="w-full" gap="3">

                <x-aura::subheading variant="default" weight="normal">
                    Default Muted Subheading (Regular 400)
                </x-aura::subheading>

                <x-aura::subheading variant="accent" weight="medium">
                    Accent High Contrast Subheading (Medium 500)
                </x-aura::subheading>

                <x-aura::subheading variant="subtle" weight="light">
                    Subtle Light Weight Subheading (Light 300)
                </x-aura::subheading>

                <x-aura::subheading variant="default" weight="semibold">
                    Semibold Weight Subheading (Semibold 600)
                </x-aura::subheading>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::subheading variant="default" weight="normal">
                    Default Muted Subheading (Regular 400)
                </x-aura::subheading>

                <x-aura::subheading variant="accent" weight="medium">
                    Accent High Contrast Subheading (Medium 500)
                </x-aura::subheading>

                <x-aura::subheading variant="subtle" weight="light">
                    Subtle Light Weight Subheading (Light 300)
                </x-aura::subheading>

                <x-aura::subheading variant="default" weight="semibold">
                    Semibold Weight Subheading (Semibold 600)
                </x-aura::subheading>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 4. Real World Hero Pattern -->
    <x-aura::code title="4. Real World Hero Pattern">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::kicker>
                    PRODUCTIVITY PLATFORM
                </x-aura::kicker>

                <x-aura::heading level="1" size="xl">
                    Build faster with modern Blade components
                </x-aura::heading>

                <x-aura::subheading size="lg">
                    Aura Wire provides unstyled, accessible Livewire design primitives designed to elevate your developer workflow.
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
                <x-aura::card size="2xl" gap="4">

                    <x-aura::kicker>
                        PRODUCTIVITY PLATFORM
                    </x-aura::kicker>

                    <x-aura::heading level="1" size="xl">
                        Build faster with modern Blade components
                    </x-aura::heading>

                    <x-aura::subheading size="lg">
                        Aura Wire provides unstyled, accessible Livewire design primitives designed to elevate your developer workflow.
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

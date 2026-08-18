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

            <x-aura::badge variant="subtle" size="sm">
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

            <x-aura::flex direction="col" align="start" class="w-full" gap="2">

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

            <x-aura::flex direction="col" align="start" class="w-full" gap="4">

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

            <x-aura::flex direction="col" align="start" class="w-full" gap="3">

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

</x-aura::container>

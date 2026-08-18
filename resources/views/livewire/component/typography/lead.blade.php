<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Lead — Aura Wire')] 
class extends Component {};

?>

<x-aura::flex direction="col" gap="10" class="w-full max-w-4xl mx-auto py-2">

    <!-- Header -->
    <x-aura::card>

        <x-aura::flex direction="col" gap="2" class="max-w-2xl">

            <x-aura::flex align="center" gap="2.5">

                <x-aura::kicker>Typography</x-aura::kicker>

                <x-aura::badge variant="subtle" size="md">Component</x-aura::badge>

            </x-aura::flex>

            <x-aura::heading level="1" size="xl">Lead</x-aura::heading>

            <x-aura::subheading size="md">
                Prominent introductory paragraph component designed to give high emphasis and visual hierarchy to leading copy below page titles.
            </x-aura::subheading>

        </x-aura::flex>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>@verbatim<x-aura::lead size="lg">Lead introductory summary paragraph.</x-aura::lead>@endverbatim</x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Standard Lead Paragraph -->
    <x-aura::code title="1. Standard Lead Paragraph">

        <x-slot:preview>

            <div class="space-y-2 max-w-2xl w-full">

                <x-aura::heading level="2" size="lg">Introducing Aura Wire</x-aura::heading>

                <x-aura::lead>
                    Aura Wire provides unstyled, accessible Livewire and Blade UI components designed to elevate your developer workflow and scale design systems effortlessly.
                </x-aura::lead>

            </div>

        </x-slot:preview>

        <x-slot:codeSlot>@verbatim<x-aura::heading level="2" size="lg">Introducing Aura Wire</x-aura::heading>

<x-aura::lead>
    Aura Wire provides unstyled, accessible Livewire and Blade UI components designed to elevate your developer workflow and scale design systems effortlessly.
</x-aura::lead>@endverbatim</x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Size Scales -->
    <x-aura::code title="2. Size Scales">

        <x-slot:preview>

            <div class="space-y-4 w-full">

                <div class="space-y-1">

                    <x-aura::badge variant="subtle" size="md">size="2xl"</x-aura::badge>

                    <x-aura::lead size="2xl">
                        2XL Lead — Maximum emphasis lead summary for major landing hero sections.
                    </x-aura::lead>

                </div>

                <div class="space-y-1 border-t border-zinc-200 dark:border-zinc-800 pt-3">

                    <x-aura::badge variant="subtle" size="md">size="xl"</x-aura::badge>

                    <x-aura::lead size="xl">
                        XL Lead — Large intro description for featured article headers.
                    </x-aura::lead>

                </div>

                <div class="space-y-1 border-t border-zinc-200 dark:border-zinc-800 pt-3">

                    <x-aura::badge variant="subtle" size="md">size="lg" (Default)</x-aura::badge>

                    <x-aura::lead size="lg">
                        Large Lead — Standard high emphasis introduction paragraph.
                    </x-aura::lead>

                </div>

                <div class="space-y-1 border-t border-zinc-200 dark:border-zinc-800 pt-3">

                    <x-aura::badge variant="subtle" size="md">size="md"</x-aura::badge>

                    <x-aura::lead size="md">
                        Medium Lead — Compact section lead for inner panel cards.
                    </x-aura::lead>

                </div>

            </div>

        </x-slot:preview>

        <x-slot:codeSlot>@verbatim<x-aura::lead size="2xl">2XL Lead — Maximum emphasis lead summary.</x-aura::lead>

<x-aura::lead size="xl">XL Lead — Large intro description.</x-aura::lead>

<x-aura::lead size="lg">Large Lead — Standard high emphasis introduction.</x-aura::lead>

<x-aura::lead size="md">Medium Lead — Compact section lead.</x-aura::lead>@endverbatim</x-slot:codeSlot>

    </x-aura::code>

    <!-- 3. Variants & Weights -->
    <x-aura::code title="3. Color Variants and Font Weights">

        <x-slot:preview>

            <div class="space-y-3 w-full">

                <x-aura::lead variant="default" weight="normal">Default Muted Lead (Regular 400)</x-aura::lead>

                <x-aura::lead variant="accent" weight="medium">Accent High Contrast Lead (Medium 500)</x-aura::lead>

                <x-aura::lead variant="primary" weight="semibold">Primary Brand Indigo Lead (Semibold 600)</x-aura::lead>

            </div>

        </x-slot:preview>

        <x-slot:codeSlot>@verbatim<x-aura::lead variant="default" weight="normal">Default Muted Lead</x-aura::lead>

<x-aura::lead variant="accent" weight="medium">Accent High Contrast Lead</x-aura::lead>

<x-aura::lead variant="primary" weight="semibold">Primary Brand Indigo Lead</x-aura::lead>@endverbatim</x-slot:codeSlot>

    </x-aura::code>

</x-aura::flex>

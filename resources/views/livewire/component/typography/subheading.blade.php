<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Subheading — Aura Wire')] 
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

            <x-aura::heading level="1" size="xl">Subheading</x-aura::heading>

            <x-aura::subheading size="md">
                Subheading typography component for section lead paragraphs, feature summaries, card header descriptions, and hero text.
            </x-aura::subheading>

        </x-aura::flex>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>@verbatim<x-aura::subheading size="md" variant="default">Section description or lead text.</x-aura::subheading>@endverbatim</x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Standard Section Subheading -->
    <x-aura::code title="1. Standard Section Subheading">

        <x-slot:preview>

            <div class="space-y-2 text-center flex flex-col items-center w-full">

                <x-aura::heading level="2" size="md">Dashboard Analytics</x-aura::heading>

                <x-aura::subheading size="md">
                    Monitor your key performance metrics, revenue growth, and active project statistics in real time.
                </x-aura::subheading>

            </div>

        </x-slot:preview>

        <x-slot:codeSlot>@verbatim<x-aura::heading level="2" size="md">Dashboard Analytics</x-aura::heading>

<x-aura::subheading size="md">
    Monitor your key performance metrics, revenue growth, and active project statistics in real time.
</x-aura::subheading>@endverbatim</x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Hero Section Header Pattern -->
    <x-aura::code title="2. Hero Section Header Pattern">

        <x-slot:preview>

            <div class="p-8 rounded-2xl border border-zinc-200 dark:border-zinc-800 bg-zinc-50 dark:bg-zinc-900/60 space-y-4 text-center flex flex-col items-center w-full">

                <div class="space-y-3 max-w-xl flex flex-col items-center">

                    <x-aura::kicker>PRODUCTIVITY PLATFORM</x-aura::kicker>

                    <x-aura::heading level="1" size="display-lg">
                        Build faster with modern Blade components
                    </x-aura::heading>

                    <x-aura::subheading size="lg">
                        Aura Wire provides unstyled, accessible Livewire design primitives designed to elevate your developer workflow.
                    </x-aura::subheading>

                </div>

                <div class="pt-2 flex items-center gap-3">

                    <x-aura::button variant="primary" iconTrailing="arrow-right">Explore</x-aura::button>

                    <x-aura::button variant="ghost">Docs</x-aura::button>

                </div>

            </div>

        </x-slot:preview>

        <x-slot:codeSlot>@verbatim<div class="p-8 rounded-2xl border border-zinc-200 dark:border-zinc-800 bg-zinc-50 dark:bg-zinc-900/60 space-y-4 text-center flex flex-col items-center">
    <div class="space-y-3 max-w-xl flex flex-col items-center">
        <x-aura::kicker>PRODUCTIVITY PLATFORM</x-aura::kicker>
        <x-aura::heading level="1" size="display-lg">
            Build faster with modern Blade components
        </x-aura::heading>
        <x-aura::subheading size="lg">
            Aura Wire provides unstyled, accessible Livewire design primitives designed to elevate your developer workflow.
        </x-aura::subheading>
    </div>
    <div class="pt-2 flex items-center gap-3">
        <x-aura::button variant="primary" iconTrailing="arrow-right">Explore</x-aura::button>
        <x-aura::button variant="ghost">Docs</x-aura::button>
    </div>
</div>@endverbatim</x-slot:codeSlot>

    </x-aura::code>

    <!-- 3. Size Scales & Custom HTML Elements -->
    <x-aura::code title="3. Size Scales and HTML Elements">

        <x-slot:preview>

            <x-aura::card>

                <div class="space-y-4 w-full">

                    <div class="space-y-1">

                        <div class="flex items-center gap-2">

                            <x-aura::badge variant="neutral" size="md">size="2xl"</x-aura::badge>

                            <x-aura::badge variant="subtle" size="md">as="p"</x-aura::badge>

                        </div>

                        <x-aura::subheading size="2xl">
                            2XL Subheading — High impact intro lead summary for key landing page headers.
                        </x-aura::subheading>

                    </div>

                    <div class="space-y-1 border-t border-zinc-200 dark:border-zinc-800 pt-3">

                        <div class="flex items-center gap-2">

                            <x-aura::badge variant="neutral" size="md">size="xl"</x-aura::badge>

                            <x-aura::badge variant="subtle" size="md">as="p"</x-aura::badge>

                        </div>

                        <x-aura::subheading size="xl">
                            XL Subheading — Hero section description and prominent callout paragraph.
                        </x-aura::subheading>

                    </div>

                    <div class="space-y-1 border-t border-zinc-200 dark:border-zinc-800 pt-3">

                        <div class="flex items-center gap-2">

                            <x-aura::badge variant="neutral" size="md">size="lg"</x-aura::badge>

                            <x-aura::badge variant="subtle" size="md">as="p"</x-aura::badge>

                        </div>

                        <x-aura::subheading size="lg">
                            Large Subheading — Section subtitle for medium feature headers.
                        </x-aura::subheading>

                    </div>

                    <div class="space-y-1 border-t border-zinc-200 dark:border-zinc-800 pt-3">

                        <div class="flex items-center gap-2">

                            <x-aura::badge variant="neutral" size="md">size="md"</x-aura::badge>

                            <x-aura::badge variant="subtle" size="md">as="p" (Default)</x-aura::badge>

                        </div>

                        <x-aura::subheading size="md">
                            Medium Subheading — Standard description for cards and widget headers.
                        </x-aura::subheading>

                    </div>

                    <div class="space-y-1 border-t border-zinc-200 dark:border-zinc-800 pt-3">

                        <div class="flex items-center gap-2">

                            <x-aura::badge variant="neutral" size="md">size="sm"</x-aura::badge>

                            <x-aura::badge variant="subtle" size="md">as="span"</x-aura::badge>

                        </div>

                        <x-aura::subheading size="sm" as="span">
                            Small Subheading — Compact inline subtitle and metadata description.
                        </x-aura::subheading>

                    </div>

                </div>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>@verbatim<x-aura::subheading size="2xl">2XL Subheading — High impact intro lead summary.</x-aura::subheading>

<x-aura::subheading size="xl">XL Subheading — Hero section description.</x-aura::subheading>

<x-aura::subheading size="lg">Large Subheading — Section subtitle.</x-aura::subheading>

<x-aura::subheading size="md">Medium Subheading — Standard description.</x-aura::subheading>

<x-aura::subheading size="sm" as="span">Small Subheading — Compact inline subtitle.</x-aura::subheading>@endverbatim</x-slot:codeSlot>

    </x-aura::code>

    <!-- 4. Color Variants & Weights -->
    <x-aura::code title="4. Color Variants and Weights">

        <x-slot:preview>

            <div class="space-y-3 w-full">

                <x-aura::subheading variant="default" weight="normal">Default Muted Subheading (Regular 400)</x-aura::subheading>

                <x-aura::subheading variant="accent" weight="medium">Accent High Contrast Subheading (Medium 500)</x-aura::subheading>

                <x-aura::subheading variant="primary" weight="semibold">Primary Brand Indigo Subheading (Semibold 600)</x-aura::subheading>

                <x-aura::subheading variant="subtle" weight="light">Subtle Light Weight Subheading (Light 300)</x-aura::subheading>

            </div>

        </x-slot:preview>

        <x-slot:codeSlot>@verbatim<x-aura::subheading variant="default" weight="normal">Default Muted Subheading</x-aura::subheading>

<x-aura::subheading variant="accent" weight="medium">Accent High Contrast Subheading</x-aura::subheading>

<x-aura::subheading variant="primary" weight="semibold">Primary Brand Indigo Subheading</x-aura::subheading>

<x-aura::subheading variant="subtle" weight="light">Subtle Light Weight Subheading</x-aura::subheading>@endverbatim</x-slot:codeSlot>

    </x-aura::code>

    <!-- 5. Card & Panel Header Descriptions -->
    <x-aura::code title="5. Card and Panel Header Descriptions">

        <x-slot:preview>

            <x-aura::card>

                <div class="divide-y divide-zinc-200 dark:divide-zinc-800 space-y-4 w-full">

                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 pb-4">

                        <div class="space-y-0.5">

                            <x-aura::heading level="3" size="sm">Security and Authentication</x-aura::heading>

                            <x-aura::subheading size="sm">
                                Manage two factor authentication and active login sessions.
                            </x-aura::subheading>

                        </div>

                        <div class="shrink-0">

                            <x-aura::button variant="secondary" size="sm">Sessions</x-aura::button>

                        </div>

                    </div>

                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 pt-4">

                        <div class="space-y-0.5">

                            <x-aura::heading level="3" size="sm">API Webhooks</x-aura::heading>

                            <x-aura::subheading size="sm">
                                Receive real time HTTP callbacks when events occur in your account.
                            </x-aura::subheading>

                        </div>

                        <div class="shrink-0">

                            <x-aura::button variant="primary" size="sm" icon="plus">Create</x-aura::button>

                        </div>

                    </div>

                </div>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>@verbatim<x-aura::card>
    <div class="divide-y divide-zinc-200 dark:divide-zinc-800 space-y-4">
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 pb-4">
            <div class="space-y-0.5">
                <x-aura::heading level="3" size="sm">Security and Authentication</x-aura::heading>
                <x-aura::subheading size="sm">
                    Manage two factor authentication and active login sessions.
                </x-aura::subheading>
            </div>
            <x-aura::button variant="secondary" size="sm">Sessions</x-aura::button>
        </div>

        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 pt-4">
            <div class="space-y-0.5">
                <x-aura::heading level="3" size="sm">API Webhooks</x-aura::heading>
                <x-aura::subheading size="sm">
                    Receive real time HTTP callbacks when events occur in your account.
                </x-aura::subheading>
            </div>
            <x-aura::button variant="primary" size="sm" icon="plus">Create</x-aura::button>
        </div>
    </div>
</x-aura::card>@endverbatim</x-slot:codeSlot>

    </x-aura::code>

</x-aura::flex>

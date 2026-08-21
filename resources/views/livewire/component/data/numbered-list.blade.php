<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Numbered List — Aura Wire')] 
class extends Component {
    public function with(): array
    {
        return [
            'stepItems' => [
                ['title' => 'Install Package', 'subtitle' => 'composer require insoulit/aura-wire'],
                ['title' => 'Publish Assets', 'subtitle' => 'php artisan aura-wire:install'],
                ['title' => 'Build Features', 'subtitle' => 'Use component tags in views'],
            ],
            'rankingItems' => [
                ['title' => 'Design System Tokens', 'subtitle' => 'Monochrome high contrast aesthetic', 'badge' => 'Rank 1'],
                ['title' => 'Volt Blade Primitives', 'subtitle' => 'Zero runtime overhead layout components', 'badge' => 'Rank 2'],
                ['title' => 'Interactive Overlay Suite', 'subtitle' => 'Portaled modal and popovers', 'badge' => 'Rank 3'],
                ['title' => 'Accessibility Standard', 'subtitle' => 'WAI ARIA compliant keyboard navigation', 'badge' => 'Rank 4'],
            ],
            'checklistItems' => [
                ['title' => 'Verify environment configurations', 'subtitle' => 'Check .env and database connection'],
                ['title' => 'Run test suite validation', 'subtitle' => 'Execute pest and feature tests'],
                ['title' => 'Deploy production release', 'subtitle' => 'Tag release and trigger CI pipeline'],
            ],
        ];
    }
};

?>

<x-aura::container gap="8" :padding="false">

    <!-- Header -->
    <x-aura::card size="full" gap="2">

        <x-aura::flex align="center" gap="2.5">

            <x-aura::kicker>
                Data
            </x-aura::kicker>

            <x-aura::badge variant="subtle" size="md">
                Component
            </x-aura::badge>

        </x-aura::flex>

        <x-aura::heading level="1" size="xl">
            Numbered List
        </x-aura::heading>

        <x-aura::subheading size="md">
            Sequential list components with clean circular and boxed index counters for step processes and rankings.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::numbered-list :items="$items" variant="compact" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Compact Row List -->
    <x-aura::code title="1. Compact Row List">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::numbered-list :items="$stepItems" variant="compact" />

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::numbered-list :items="[
                    ['title' => 'Install Package', 'subtitle' => 'composer require insoulit/aura-wire'],
                    ['title' => 'Publish Assets', 'subtitle' => 'php artisan aura-wire:install'],
                    ['title' => 'Build Features', 'subtitle' => 'Use component tags in views'],
                ]" variant="compact" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Step Progress Bar -->
    <x-aura::code title="2. Process Step Bar">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::numbered-list :items="$stepItems" variant="steps" />

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::numbered-list :items="[
                    ['title' => 'Install Package', 'subtitle' => 'composer require insoulit/aura-wire'],
                    ['title' => 'Publish Assets', 'subtitle' => 'php artisan aura-wire:install'],
                    ['title' => 'Build Features', 'subtitle' => 'Use component tags in views'],
                ]" variant="steps" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 3. Grid Ranking Cards -->
    <x-aura::code title="3. Grid Ranking Cards">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::numbered-list :items="$rankingItems" variant="grid" />

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::numbered-list :items="[
                    ['title' => 'Design System Tokens', 'subtitle' => 'Monochrome high contrast aesthetic', 'badge' => 'Rank 1'],
                    ['title' => 'Volt Blade Primitives', 'subtitle' => 'Zero runtime overhead layout components', 'badge' => 'Rank 2'],
                    ['title' => 'Interactive Overlay Suite', 'subtitle' => 'Portaled modal and popovers', 'badge' => 'Rank 3'],
                    ['title' => 'Accessibility Standard', 'subtitle' => 'WAI ARIA compliant keyboard navigation', 'badge' => 'Rank 4'],
                ]" variant="grid" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 4. Simple Text List -->
    <x-aura::code title="4. Simple Text Counter List">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::numbered-list :items="$checklistItems" variant="simple" />

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::numbered-list :items="[
                    ['title' => 'Verify environment configurations', 'subtitle' => 'Check .env and database connection'],
                    ['title' => 'Run test suite validation', 'subtitle' => 'Execute pest and feature tests'],
                    ['title' => 'Deploy production release', 'subtitle' => 'Tag release and trigger CI pipeline'],
                ]" variant="simple" />
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
                Available properties and configurations for the numbered list component.
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
                            items
                        </x-aura::text>

                        <x-aura::tooltip text="Array or collection of list items" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="subtle" size="md">
                        []
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::text size="sm" variant="subtle">
                        Array of associative items or strings
                    </x-aura::text>
                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            variant
                        </x-aura::text>

                        <x-aura::tooltip text="Visual layout display presentation style" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        card
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

                        <x-aura::badge variant="subtle" size="md">
                            compact
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            steps
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            grid
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            simple
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            media
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            timeline
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            card
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            numbered
                        </x-aura::text>

                        <x-aura::tooltip text="Display leading index numbers" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        true
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

        </x-aura::table>

    </x-aura::card>

</x-aura::container>

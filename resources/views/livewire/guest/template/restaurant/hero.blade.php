<?php

use Livewire\Volt\Component;

new class extends Component {};

?>

<!-- Restaurant Hero Section -->
<div id="hero">

    <x-aura::flex direction="col" gap="10">

        <!-- Hero Content -->
        <x-aura::flex direction="col" align="center" justify="center" gap="6">

            <x-aura::flex align="center" gap="2">

                <x-aura::kicker>
                    L'AURA BISTRO AND GRILL
                </x-aura::kicker>

                <x-aura::badge variant="neutral" size="sm">
                    Michelin Recommended
                </x-aura::badge>

            </x-aura::flex>

            <x-aura::display size="lg" align="center">
                Artisanal Culinary Craft and Fine Modern Dining
            </x-aura::display>

            <x-aura::subheading size="md" align="center">
                Fresh seasonal ingredients, wood fired specialties, and curated organic wine pairings served in a warm architectural atmosphere
            </x-aura::subheading>

            <x-aura::flex align="center" justify="center" gap="3" wrap="true">

                <x-aura::button href="#reservation" variant="primary" size="lg" icon="arrow-right">
                    Reserve
                </x-aura::button>

                <x-aura::button href="#menu" variant="secondary" size="lg">
                    Menu
                </x-aura::button>

            </x-aura::flex>

        </x-aura::flex>

        <!-- Highlights Grid -->
        <x-aura::grid cols="1" sm="3" gap="6">

            <x-aura::card padding="md" gap="2">

                <x-aura::heading level="3" size="2xl">
                    100%
                </x-aura::heading>

                <x-aura::text size="sm" weight="semibold">
                    Farm to Table Organic
                </x-aura::text>

                <x-aura::text size="sm" variant="subtle">
                    Locally sourced heritage produce delivered daily from regional micro farms.
                </x-aura::text>

            </x-aura::card>

            <x-aura::card padding="md" gap="2">

                <x-aura::heading level="3" size="2xl">
                    120+
                </x-aura::heading>

                <x-aura::text size="sm" weight="semibold">
                    Sommelier Wine Cellar
                </x-aura::text>

                <x-aura::text size="sm" variant="subtle">
                    Curated natural, biodynamic, and classic old world vintage selections.
                </x-aura::text>

            </x-aura::card>

            <x-aura::card padding="md" gap="2">

                <x-aura::heading level="3" size="2xl">
                    4.9 ★
                </x-aura::heading>

                <x-aura::text size="sm" weight="semibold">
                    Guest Satisfaction
                </x-aura::text>

                <x-aura::text size="sm" variant="subtle">
                    Over 1,500 verified dining reviews across Michelin and epicurean guides.
                </x-aura::text>

            </x-aura::card>

        </x-aura::grid>

    </x-aura::flex>

</div>

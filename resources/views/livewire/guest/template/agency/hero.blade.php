<?php

use Livewire\Volt\Component;

new class extends Component {};

?>

<!-- Agency Hero Section -->
<div id="hero">

    <x-aura::flex direction="col" gap="10">

        <!-- Hero Content -->
        <x-aura::flex direction="col" align="center" justify="center" gap="6">

            <x-aura::flex align="center" gap="2">

                <x-aura::kicker>
                    STUDIO AURA DIGITAL
                </x-aura::kicker>

                <x-aura::badge variant="neutral" size="sm">
                    Design and Engineering
                </x-aura::badge>

            </x-aura::flex>

            <x-aura::display size="lg" align="center">
                We Craft Digital Products That Drive Exponential Growth
            </x-aura::display>

            <x-aura::subheading size="md" align="center">
                Partnering with ambitious founders and enterprise engineering teams to design high converting web applications, brand identities, and design systems
            </x-aura::subheading>

            <x-aura::flex align="center" justify="center" gap="3" wrap="true">

                <x-aura::button href="#estimator" variant="primary" size="lg" icon="arrow-right">
                    Start
                </x-aura::button>

                <x-aura::button href="#portfolio" variant="secondary" size="lg">
                    Work
                </x-aura::button>

            </x-aura::flex>

        </x-aura::flex>

        <!-- Credentials Strip -->
        <x-aura::grid cols="1" sm="3" gap="6">

            <x-aura::card padding="md" gap="2">

                <x-aura::heading level="3" size="2xl">
                    48+
                </x-aura::heading>

                <x-aura::text size="sm" weight="semibold">
                    Products Launched
                </x-aura::text>

                <x-aura::text size="sm" variant="subtle">
                    From early stage seed prototypes to Series B web platforms.
                </x-aura::text>

            </x-aura::card>

            <x-aura::card padding="md" gap="2">

                <x-aura::heading level="3" size="2xl">
                    100%
                </x-aura::heading>

                <x-aura::text size="sm" weight="semibold">
                    On Time Delivery
                </x-aura::text>

                <x-aura::text size="sm" variant="subtle">
                    Iterative sprint cadences with transparent weekly deploy drops.
                </x-aura::text>

            </x-aura::card>

            <x-aura::card padding="md" gap="2">

                <x-aura::heading level="3" size="2xl">
                    98%
                </x-aura::heading>

                <x-aura::text size="sm" weight="semibold">
                    Client Retention
                </x-aura::text>

                <x-aura::text size="sm" variant="subtle">
                    Long term partnerships scaling design systems across teams.
                </x-aura::text>

            </x-aura::card>

        </x-aura::grid>

    </x-aura::flex>

</div>

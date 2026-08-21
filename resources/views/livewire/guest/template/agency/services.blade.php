<?php

use Livewire\Volt\Component;

new class extends Component {};

?>

<!-- Core Agency Services -->
<div id="services">

    <x-aura::flex direction="col" gap="8">

        <x-aura::flex direction="col" align="center" justify="center" gap="2">

            <x-aura::kicker>
                CORE SERVICES
            </x-aura::kicker>

            <x-aura::heading level="2" size="xl" align="center">
                Full Cycle Digital Product Capabilities
            </x-aura::heading>

            <x-aura::subheading size="md" align="center">
                From brand architecture and design systems to full stack reactive web engineering
            </x-aura::subheading>

        </x-aura::flex>

        <x-aura::grid cols="1" md="3" gap="6">

            <!-- Service 1 -->
            <x-aura::card padding="lg" gap="4">

                <x-aura::icon name="sparkles" size="lg" container="true" />

                <x-aura::flex direction="col" gap="1">

                    <x-aura::heading level="3" size="md">
                        Brand Identity and System
                    </x-aura::heading>

                    <x-aura::text variant="subtle" size="sm">
                        Design tokens, typography guidelines, comprehensive component libraries, and visual marketing assets.
                    </x-aura::text>

                </x-aura::flex>

                <x-slot:footer>

                    <x-aura::badge variant="subtle" size="sm">
                        Visual Strategy
                    </x-aura::badge>

                </x-slot:footer>

            </x-aura::card>

            <!-- Service 2 -->
            <x-aura::card padding="lg" gap="4">

                <x-aura::icon name="code" size="lg" container="true" />

                <x-aura::flex direction="col" gap="1">

                    <x-aura::heading level="3" size="md">
                        Full Stack Web Development
                    </x-aura::heading>

                    <x-aura::text variant="subtle" size="sm">
                        Modern Laravel, Livewire Volt, and Tailwind CSS app engineering with strict type safety and automated testing.
                    </x-aura::text>

                </x-aura::flex>

                <x-slot:footer>

                    <x-aura::badge variant="neutral" size="sm">
                        Production Engineering
                    </x-aura::badge>

                </x-slot:footer>

            </x-aura::card>

            <!-- Service 3 -->
            <x-aura::card padding="lg" gap="4">

                <x-aura::icon name="target" size="lg" container="true" />

                <x-aura::flex direction="col" gap="1">

                    <x-aura::heading level="3" size="md">
                        UI UX Audit and Optimization
                    </x-aura::heading>

                    <x-aura::text variant="subtle" size="sm">
                        Funnel conversion analysis, accessibility audits, and design heuristic optimizations for maximum user engagement.
                    </x-aura::text>

                </x-aura::flex>

                <x-slot:footer>

                    <x-aura::badge variant="subtle" size="sm">
                        Growth and CRO
                    </x-aura::badge>

                </x-slot:footer>

            </x-aura::card>

        </x-aura::grid>

    </x-aura::flex>

</div>

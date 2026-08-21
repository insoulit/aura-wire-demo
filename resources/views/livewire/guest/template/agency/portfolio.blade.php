<?php

use Livewire\Volt\Component;

new class extends Component {};

?>

<!-- Agency Portfolio Showcase -->
<div id="portfolio">

    <x-aura::flex direction="col" gap="8">

        <x-aura::flex direction="col" align="center" justify="center" gap="2">

            <x-aura::kicker>
                SELECTED WORKS
            </x-aura::kicker>

            <x-aura::heading level="2" size="xl" align="center">
                Featured Client Case Studies
            </x-aura::heading>

            <x-aura::subheading size="md" align="center">
                Recent web applications, component suites, and design architectures delivered with precision
            </x-aura::subheading>

        </x-aura::flex>

        <x-aura::grid cols="1" md="2" gap="6">

            <!-- Case Study 1 -->
            <x-aura::card padding="lg" gap="4">

                <div class="aspect-16/9 rounded-2xl bg-zinc-900 p-8 flex flex-col justify-between text-white border border-zinc-800">

                    <x-aura::flex align="center" justify="between">

                        <x-aura::badge variant="neutral" size="sm">
                            Open Source UI
                        </x-aura::badge>

                        <x-aura::text size="sm" variant="subtle">
                            2026
                        </x-aura::text>

                    </x-aura::flex>

                    <div class="text-4xl font-extrabold tracking-tight">
                        Aura Wire
                    </div>

                </div>

                <x-aura::flex direction="col" gap="1">

                    <x-aura::heading level="3" size="md">
                        Aura Wire Design System
                    </x-aura::heading>

                    <x-aura::text variant="subtle" size="sm">
                        High contrast Blade component suite featuring 35+ accessible primitives for modern Laravel apps.
                    </x-aura::text>

                </x-aura::flex>

                <x-slot:footer>

                    <x-aura::link href="/components" size="sm">
                        Read Case Study
                    </x-aura::link>

                    <x-aura::badge variant="neutral" size="sm">
                        UI Suite
                    </x-aura::badge>

                </x-slot:footer>

            </x-aura::card>

            <!-- Case Study 2 -->
            <x-aura::card padding="lg" gap="4">

                <div class="aspect-16/9 rounded-2xl bg-zinc-900 p-8 flex flex-col justify-between text-white border border-zinc-800">

                    <x-aura::flex align="center" justify="between">

                        <x-aura::badge variant="subtle" size="sm">
                            Cloud Telemetry
                        </x-aura::badge>

                        <x-aura::text size="sm" variant="subtle">
                            2025
                        </x-aura::text>

                    </x-aura::flex>

                    <div class="text-4xl font-extrabold tracking-tight">
                        Pulse Metrics
                    </div>

                </div>

                <x-aura::flex direction="col" gap="1">

                    <x-aura::heading level="3" size="md">
                        Pulse Real Time Analytics
                    </x-aura::heading>

                    <x-aura::text variant="subtle" size="sm">
                        Distributed telemetry event dashboard processing 50k requests per second with instant anomaly alerts.
                    </x-aura::text>

                </x-aura::flex>

                <x-slot:footer>

                    <x-aura::link href="/admin" size="sm">
                        Read Case Study
                    </x-aura::link>

                    <x-aura::badge variant="neutral" size="sm">
                        SaaS Platform
                    </x-aura::badge>

                </x-slot:footer>

            </x-aura::card>

        </x-aura::grid>

    </x-aura::flex>

</div>

<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.app')] 
#[Title('Pricing Cards — Guest Portal | Aura Wire')] 
class extends Component {};

?>

<x-aura::container size="4xl" gap="6">

    <!-- Top Header -->
    <x-aura::flex justify="between" gap="4">

        <x-aura::flex direction="col" gap="none">

            <x-aura::kicker>
                Design Blocks
            </x-aura::kicker>

            <x-aura::heading level="1" size="lg">
                Pricing Cards
            </x-aura::heading>

        </x-aura::flex>

        <x-aura::flex justify="end" gap="2">

            <x-aura::button href="/guest#design-block" wire:navigate variant="secondary" size="sm" icon="arrow-left">
                Back
            </x-aura::button>

        </x-aura::flex>

    </x-aura::flex>

    <!-- Pricing Block Preview -->
    <x-aura::code title="3 Tier SaaS Pricing Block">

        <x-slot:preview>

            <x-aura::grid cols="1" md="3" gap="6">

                <!-- Tier 1: Starter -->
                <x-aura::card padding="lg" gap="4">

                    <x-aura::flex direction="col" gap="1">

                        <x-aura::kicker>
                            For Individuals
                        </x-aura::kicker>

                        <x-aura::heading level="3" size="md">
                            Starter
                        </x-aura::heading>

                        <x-aura::text size="sm" variant="subtle">
                            Essential tools to launch your initial projects.
                        </x-aura::text>

                    </x-aura::flex>

                    <x-aura::flex align="baseline" gap="1">

                        <x-aura::heading level="4" size="2xl">
                            $19
                        </x-aura::heading>

                        <x-aura::text size="sm" variant="subtle">
                            / month
                        </x-aura::text>

                    </x-aura::flex>

                    <x-aura::separator />

                    <x-aura::flex direction="col" gap="2.5">

                        <x-aura::flex align="center" gap="2">

                            <x-aura::icon name="check" size="sm" />

                            <x-aura::text size="sm">
                                Up to 5 Active Projects
                            </x-aura::text>

                        </x-aura::flex>

                        <x-aura::flex align="center" gap="2">

                            <x-aura::icon name="check" size="sm" />

                            <x-aura::text size="sm">
                                10 GB Cloud Storage
                            </x-aura::text>

                        </x-aura::flex>

                        <x-aura::flex align="center" gap="2">

                            <x-aura::icon name="check" size="sm" />

                            <x-aura::text size="sm">
                                Community Support
                            </x-aura::text>

                        </x-aura::flex>

                    </x-aura::flex>

                    <x-slot:footer>

                        <x-aura::button variant="secondary" size="md" block="true">
                            Start
                        </x-aura::button>

                    </x-slot:footer>

                </x-aura::card>

                <!-- Tier 2: Pro (Featured) -->
                <x-aura::card padding="lg" gap="4">

                    <x-aura::flex align="start" justify="between" gap="2">

                        <x-aura::flex direction="col" gap="1">

                            <x-aura::kicker>
                                For Growing Teams
                            </x-aura::kicker>

                            <x-aura::heading level="3" size="md">
                                Pro Plan
                            </x-aura::heading>

                        </x-aura::flex>

                        <x-aura::badge variant="neutral" size="sm">
                            POPULAR
                        </x-aura::badge>

                    </x-aura::flex>

                    <x-aura::text size="sm" variant="subtle">
                        Advanced collaboration and full power access.
                    </x-aura::text>

                    <x-aura::flex align="baseline" gap="1">

                        <x-aura::heading level="4" size="2xl">
                            $49
                        </x-aura::heading>

                        <x-aura::text size="sm" variant="subtle">
                            / month
                        </x-aura::text>

                    </x-aura::flex>

                    <x-aura::separator />

                    <x-aura::flex direction="col" gap="2.5">

                        <x-aura::flex align="center" gap="2">

                            <x-aura::icon name="check" size="sm" />

                            <x-aura::text size="sm" weight="semibold">
                                Unlimited Active Projects
                            </x-aura::text>

                        </x-aura::flex>

                        <x-aura::flex align="center" gap="2">

                            <x-aura::icon name="check" size="sm" />

                            <x-aura::text size="sm">
                                500 GB Storage
                            </x-aura::text>

                        </x-aura::flex>

                        <x-aura::flex align="center" gap="2">

                            <x-aura::icon name="check" size="sm" />

                            <x-aura::text size="sm">
                                Priority 24/7 Live Chat
                            </x-aura::text>

                        </x-aura::flex>

                        <x-aura::flex align="center" gap="2">

                            <x-aura::icon name="check" size="sm" />

                            <x-aura::text size="sm">
                                Custom Domain SSL Setup
                            </x-aura::text>

                        </x-aura::flex>

                    </x-aura::flex>

                    <x-slot:footer>

                        <x-aura::button variant="primary" size="md" block="true">
                            Upgrade
                        </x-aura::button>

                    </x-slot:footer>

                </x-aura::card>

                <!-- Tier 3: Enterprise -->
                <x-aura::card padding="lg" gap="4">

                    <x-aura::flex direction="col" gap="1">

                        <x-aura::kicker>
                            For Organizations
                        </x-aura::kicker>

                        <x-aura::heading level="3" size="md">
                            Enterprise
                        </x-aura::heading>

                        <x-aura::text size="sm" variant="subtle">
                            Custom SLA and dedicated server nodes.
                        </x-aura::text>

                    </x-aura::flex>

                    <x-aura::flex align="baseline" gap="1">

                        <x-aura::heading level="4" size="2xl">
                            $199
                        </x-aura::heading>

                        <x-aura::text size="sm" variant="subtle">
                            / month
                        </x-aura::text>

                    </x-aura::flex>

                    <x-aura::separator />

                    <x-aura::flex direction="col" gap="2.5">

                        <x-aura::flex align="center" gap="2">

                            <x-aura::icon name="check" size="sm" />

                            <x-aura::text size="sm">
                                Dedicated Database Cluster
                            </x-aura::text>

                        </x-aura::flex>

                        <x-aura::flex align="center" gap="2">

                            <x-aura::icon name="check" size="sm" />

                            <x-aura::text size="sm">
                                Custom SSO and SAML Auth
                            </x-aura::text>

                        </x-aura::flex>

                        <x-aura::flex align="center" gap="2">

                            <x-aura::icon name="check" size="sm" />

                            <x-aura::text size="sm">
                                99.99% Uptime Guarantee
                            </x-aura::text>

                        </x-aura::flex>

                    </x-aura::flex>

                    <x-slot:footer>

                        <x-aura::button variant="secondary" size="md" block="true">
                            Contact
                        </x-aura::button>

                    </x-slot:footer>

                </x-aura::card>

            </x-aura::grid>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::grid cols="1" md="3" gap="6">
                    <x-aura::card padding="lg" gap="4">
                        <x-aura::flex direction="col" gap="1">
                            <x-aura::kicker>
                                For Individuals
                            </x-aura::kicker>
                            <x-aura::heading level="3" size="md">
                                Starter
                            </x-aura::heading>
                        </x-aura::flex>

                        <x-aura::flex align="baseline" gap="1">
                            <x-aura::heading level="4" size="2xl">
                                $19
                            </x-aura::heading>
                            <x-aura::text size="sm" variant="subtle">
                                / month
                            </x-aura::text>
                        </x-aura::flex>

                        <x-aura::separator />

                        <x-slot:footer>
                            <x-aura::button variant="secondary" size="md" block="true">
                                Start
                            </x-aura::button>
                        </x-slot:footer>
                    </x-aura::card>
                </x-aura::grid>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>

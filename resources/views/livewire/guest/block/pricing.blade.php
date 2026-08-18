<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.app')] 
#[Title('Pricing Cards — Guest Portal | Aura Wire')] 
class extends Component {};

?>

<x-aura::flex direction="col" gap="4" class="w-full max-w-4xl mx-auto py-6">

    <!-- Top Header -->
    <div class="px-1">

        <x-aura::flex align="center" justify="between" gap="4">

            <div>

                <x-aura::kicker>
                    Design Blocks
                </x-aura::kicker>

                <x-aura::heading level="1" size="lg">
                    Pricing Cards
                </x-aura::heading>

            </div>

            <x-aura::button href="/guest#design-block" variant="subtle" size="sm" icon="arrow-left">
                Back
            </x-aura::button>

        </x-aura::flex>

    </div>

    <!-- Pricing Block Preview -->
    <x-aura::code title="3 Tier SaaS Pricing Block">

        <x-slot:preview>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 w-full items-stretch">

                <!-- Tier 1: Starter -->
                <x-aura::card>

                    <div class="space-y-4">

                        <div class="space-y-1">

                            <x-aura::kicker>
                                For Individuals
                            </x-aura::kicker>

                            <x-aura::heading level="3" size="sm">
                                Starter
                            </x-aura::heading>

                            <x-aura::text size="sm" variant="subtle">
                                Essential tools to launch your initial projects.
                            </x-aura::text>

                        </div>

                        <div class="flex items-baseline gap-1">

                            <span class="text-3xl font-bold font-mono tracking-tight text-zinc-900 dark:text-white">$19</span>

                            <span class="text-xs text-zinc-400 font-semibold">/ month</span>

                        </div>

                        <x-aura::separator />

                        <ul class="space-y-2.5 text-xs text-zinc-600 dark:text-zinc-300">

                            <li class="flex items-center gap-2">
                                <span class="font-bold text-zinc-900 dark:text-white">✓</span>
                                Up to 5 Active Projects
                            </li>

                            <li class="flex items-center gap-2">
                                <span class="font-bold text-zinc-900 dark:text-white">✓</span>
                                10 GB Cloud Storage
                            </li>

                            <li class="flex items-center gap-2">
                                <span class="font-bold text-zinc-900 dark:text-white">✓</span>
                                Community Support
                            </li>

                        </ul>

                    </div>

                    <div class="pt-3">

                        <x-aura::button variant="outline" size="md">
                            Start
                        </x-aura::button>

                    </div>

                </x-aura::card>

                <!-- Tier 2: Pro (Featured) -->
                <x-aura::card>

                    <x-aura::badge variant="neutral" size="sm">
                        MOST POPULAR
                    </x-aura::badge>

                    <div class="space-y-4">

                        <div class="space-y-1">

                            <x-aura::kicker>
                                For Growing Teams
                            </x-aura::kicker>

                            <x-aura::heading level="3" size="sm">
                                Pro Plan
                            </x-aura::heading>

                            <x-aura::text size="sm" variant="subtle">
                                Advanced collaboration and full power access.
                            </x-aura::text>

                        </div>

                        <div class="flex items-baseline gap-1">

                            <span class="text-3xl font-bold font-mono tracking-tight text-zinc-900 dark:text-white">$49</span>

                            <span class="text-xs text-zinc-400 font-semibold">/ month</span>

                        </div>

                        <x-aura::separator />

                        <ul class="space-y-2.5 text-xs text-zinc-600 dark:text-zinc-300">

                            <li class="flex items-center gap-2 font-medium">
                                <span class="font-bold text-zinc-900 dark:text-white">✓</span>
                                Unlimited Active Projects
                            </li>

                            <li class="flex items-center gap-2 font-medium">
                                <span class="font-bold text-zinc-900 dark:text-white">✓</span>
                                500 GB Storage
                            </li>

                            <li class="flex items-center gap-2 font-medium">
                                <span class="font-bold text-zinc-900 dark:text-white">✓</span>
                                Priority 24/7 Live Chat
                            </li>

                            <li class="flex items-center gap-2 font-medium">
                                <span class="font-bold text-zinc-900 dark:text-white">✓</span>
                                Custom Domain SSL Setup
                            </li>

                        </ul>

                    </div>

                    <div class="pt-3">

                        <x-aura::button variant="primary" size="md">
                            Upgrade
                        </x-aura::button>

                    </div>

                </x-aura::card>

                <!-- Tier 3: Enterprise -->
                <x-aura::card>

                    <div class="space-y-4">

                        <div class="space-y-1">

                            <x-aura::kicker>
                                For Organizations
                            </x-aura::kicker>

                            <x-aura::heading level="3" size="sm">
                                Enterprise
                            </x-aura::heading>

                            <x-aura::text size="sm" variant="subtle">
                                Custom SLA and dedicated server nodes.
                            </x-aura::text>

                        </div>

                        <div class="flex items-baseline gap-1">

                            <span class="text-3xl font-bold font-mono tracking-tight text-zinc-900 dark:text-white">$199</span>

                            <span class="text-xs text-zinc-400 font-semibold">/ month</span>

                        </div>

                        <x-aura::separator />

                        <ul class="space-y-2.5 text-xs text-zinc-600 dark:text-zinc-300">

                            <li class="flex items-center gap-2">
                                <span class="font-bold text-zinc-900 dark:text-white">✓</span>
                                Dedicated Bare Metal Node
                            </li>

                            <li class="flex items-center gap-2">
                                <span class="font-bold text-zinc-900 dark:text-white">✓</span>
                                Unlimited SAML / SSO Logins
                            </li>

                            <li class="flex items-center gap-2">
                                <span class="font-bold text-zinc-900 dark:text-white">✓</span>
                                99.99% Uptime Guarantee SLA
                            </li>

                        </ul>

                    </div>

                    <div class="pt-3">

                        <x-aura::button variant="secondary" size="md">
                            Contact
                        </x-aura::button>

                    </div>

                </x-aura::card>

            </div>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 w-full">
                    <!-- Starter -->
                    <x-aura::card>
                        <div class="space-y-4">
                            <x-aura::kicker>
                                For Individuals
                            </x-aura::kicker>
                            <x-aura::heading level="3" size="sm">
                                Starter
                            </x-aura::heading>
                            <span class="text-3xl font-bold font-mono">$19/mo</span>
                            <x-aura::separator />
                        </div>
                        <x-aura::button variant="outline">
                            Start
                        </x-aura::button>
                    </x-aura::card>

                    <!-- Pro (Featured) -->
                    <x-aura::card>
                        <x-aura::badge variant="neutral">
                            MOST POPULAR
                        </x-aura::badge>
                        <div class="space-y-4">
                            <x-aura::kicker>
                                For Growing Teams
                            </x-aura::kicker>
                            <x-aura::heading level="3" size="sm">
                                Pro Plan
                            </x-aura::heading>
                            <span class="text-3xl font-bold font-mono">$49/mo</span>
                            <x-aura::separator />
                        </div>
                        <x-aura::button variant="primary">
                            Upgrade
                        </x-aura::button>
                    </x-aura::card>

                    <!-- Enterprise -->
                    <x-aura::card>
                        <div class="space-y-4">
                            <x-aura::kicker>
                                For Organizations
                            </x-aura::kicker>
                            <x-aura::heading level="3" size="sm">
                                Enterprise
                            </x-aura::heading>
                            <span class="text-3xl font-bold font-mono">$199/mo</span>
                            <x-aura::separator />
                        </div>
                        <x-aura::button variant="secondary">
                            Contact
                        </x-aura::button>
                    </x-aura::card>
                </div>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::flex>

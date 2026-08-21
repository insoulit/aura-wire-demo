<?php

use Livewire\Volt\Component;

new class extends Component {
    public bool $annualBilling = true;
};

?>

<!-- Interactive Pricing Section -->
<div id="pricing">

    <x-aura::flex direction="col" gap="8">

        <x-aura::flex direction="col" align="center" justify="center" gap="4">

            <x-aura::kicker>
                TRANSPARENT PRICING
            </x-aura::kicker>

            <x-aura::heading level="2" size="xl" align="center">
                Flexible Plans for Every Engineering Scale
            </x-aura::heading>

            <x-aura::subheading size="md" align="center">
                Scale seamlessly as application traffic expands. No hidden charges or locked contracts.
            </x-aura::subheading>

            <!-- Billing Toggle Control -->
            <x-aura::flex align="center" width="auto" gap="3">

                <x-aura::text size="sm" weight="{{ !$annualBilling ? 'bold' : 'normal' }}">
                    Monthly
                </x-aura::text>

                <x-aura::switch wire:model.live="annualBilling" />

                <x-aura::text size="sm" weight="{{ $annualBilling ? 'bold' : 'normal' }}">
                    Annual
                </x-aura::text>

                <x-aura::badge variant="neutral" size="xs">
                    Save 20%
                </x-aura::badge>

            </x-aura::flex>

        </x-aura::flex>

        <x-aura::grid cols="1" md="3" gap="6">

            <!-- Starter Plan Card -->
            <x-aura::card padding="lg" gap="4">

                <x-aura::flex direction="col" gap="1">

                    <x-aura::badge variant="subtle" size="sm">
                        Starter
                    </x-aura::badge>

                    <x-aura::heading level="3" size="md">
                        Developer
                    </x-aura::heading>

                    <x-aura::text variant="subtle" size="sm">
                        Essential cloud telemetry for side projects and prototypes.
                    </x-aura::text>

                </x-aura::flex>

                <x-aura::flex align="baseline" gap="1">

                    <x-aura::heading level="4" size="2xl">
                        {{ $annualBilling ? '$19' : '$25' }}
                    </x-aura::heading>

                    <x-aura::text size="sm" variant="subtle">
                        / month
                    </x-aura::text>

                </x-aura::flex>

                <x-aura::separator />

                <x-aura::flex direction="col" gap="2.5">

                    <x-aura::flex align="center" gap="2.5">

                        <x-aura::icon name="check" size="sm" />

                        <x-aura::text size="sm">
                            100,000 Events / month
                        </x-aura::text>

                    </x-aura::flex>

                    <x-aura::flex align="center" gap="2.5">

                        <x-aura::icon name="check" size="sm" />

                        <x-aura::text size="sm">
                            3 Team Members
                        </x-aura::text>

                    </x-aura::flex>

                    <x-aura::flex align="center" gap="2.5">

                        <x-aura::icon name="check" size="sm" />

                        <x-aura::text size="sm">
                            7 Day Log Retention
                        </x-aura::text>

                    </x-aura::flex>

                </x-aura::flex>

                <x-slot:footer>

                    <x-aura::button variant="secondary" size="md" block="true">
                        Trial
                    </x-aura::button>

                </x-slot:footer>

            </x-aura::card>

            <!-- Growth Pro Plan Card -->
            <x-aura::card padding="lg" gap="4">

                <x-aura::flex direction="col" gap="1">

                    <x-aura::badge variant="neutral" size="sm">
                        Popular Choice
                    </x-aura::badge>

                    <x-aura::heading level="3" size="md">
                        Growth Team
                    </x-aura::heading>

                    <x-aura::text variant="subtle" size="sm">
                        Advanced telemetry and tracing for scaling product teams.
                    </x-aura::text>

                </x-aura::flex>

                <x-aura::flex align="baseline" gap="1">

                    <x-aura::heading level="4" size="2xl">
                        {{ $annualBilling ? '$79' : '$99' }}
                    </x-aura::heading>

                    <x-aura::text size="sm" variant="subtle">
                        / month
                    </x-aura::text>

                </x-aura::flex>

                <x-aura::separator />

                <x-aura::flex direction="col" gap="2.5">

                    <x-aura::flex align="center" gap="2.5">

                        <x-aura::icon name="check" size="sm" />

                        <x-aura::text size="sm" weight="semibold">
                            2,500,000 Events / month
                        </x-aura::text>

                    </x-aura::flex>

                    <x-aura::flex align="center" gap="2.5">

                        <x-aura::icon name="check" size="sm" />

                        <x-aura::text size="sm">
                            15 Team Members
                        </x-aura::text>

                    </x-aura::flex>

                    <x-aura::flex align="center" gap="2.5">

                        <x-aura::icon name="check" size="sm" />

                        <x-aura::text size="sm">
                            30 Day Log Retention
                        </x-aura::text>

                    </x-aura::flex>

                    <x-aura::flex align="center" gap="2.5">

                        <x-aura::icon name="check" size="sm" />

                        <x-aura::text size="sm">
                            Slack and Webhook Alerts
                        </x-aura::text>

                    </x-aura::flex>

                </x-aura::flex>

                <x-slot:footer>

                    <x-aura::button variant="primary" size="md" block="true">
                        Upgrade
                    </x-aura::button>

                </x-slot:footer>

            </x-aura::card>

            <!-- Enterprise Plan Card -->
            <x-aura::card padding="lg" gap="4">

                <x-aura::flex direction="col" gap="1">

                    <x-aura::badge variant="subtle" size="sm">
                        Enterprise
                    </x-aura::badge>

                    <x-aura::heading level="3" size="md">
                        Global Scale
                    </x-aura::heading>

                    <x-aura::text variant="subtle" size="sm">
                        Dedicated cloud infrastructure and custom compliance SLAs.
                    </x-aura::text>

                </x-aura::flex>

                <x-aura::flex align="baseline" gap="1">

                    <x-aura::heading level="4" size="2xl">
                        Custom
                    </x-aura::heading>

                </x-aura::flex>

                <x-aura::separator />

                <x-aura::flex direction="col" gap="2.5">

                    <x-aura::flex align="center" gap="2.5">

                        <x-aura::icon name="check" size="sm" />

                        <x-aura::text size="sm">
                            Unlimited Events Volume
                        </x-aura::text>

                    </x-aura::flex>

                    <x-aura::flex align="center" gap="2.5">

                        <x-aura::icon name="check" size="sm" />

                        <x-aura::text size="sm">
                            Unlimited Team Seats
                        </x-aura::text>

                    </x-aura::flex>

                    <x-aura::flex align="center" gap="2.5">

                        <x-aura::icon name="check" size="sm" />

                        <x-aura::text size="sm">
                            365 Day Log Retention
                        </x-aura::text>

                    </x-aura::flex>

                    <x-aura::flex align="center" gap="2.5">

                        <x-aura::icon name="check" size="sm" />

                        <x-aura::text size="sm">
                            Dedicated Account Manager
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

    </x-aura::flex>

</div>

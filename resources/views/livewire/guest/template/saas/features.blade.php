<?php

use Livewire\Volt\Component;

new class extends Component {};

?>

<!-- Core Platform Highlights Grid -->
<div id="features">

    <x-aura::flex direction="col" gap="8">

        <x-aura::flex direction="col" align="center" justify="center" gap="2">

            <x-aura::kicker>
                CORE PLATFORM CAPABILITIES
            </x-aura::kicker>

            <x-aura::heading level="2" size="xl" align="center">
                Built for High Throughput Infrastructure
            </x-aura::heading>

            <x-aura::subheading size="md" align="center">
                Engineered from first principles to deliver observable telemetry and zero latency overhead
            </x-aura::subheading>

        </x-aura::flex>

        <x-aura::grid cols="1" md="3" gap="6">

            <x-aura::card padding="lg" gap="4">

                <x-aura::icon name="zap" size="lg" container="true" />

                <x-aura::flex direction="col" gap="1">

                    <x-aura::heading level="3" size="md">
                        Sub Millisecond Tracing
                    </x-aura::heading>

                    <x-aura::text variant="subtle" size="sm">
                        Capture detailed distributed stack traces without overhead on your production server nodes.
                    </x-aura::text>

                </x-aura::flex>

                <x-slot:footer>

                    <x-aura::badge variant="subtle" size="sm">
                        Telemetry Core
                    </x-aura::badge>

                </x-slot:footer>

            </x-aura::card>

            <x-aura::card padding="lg" gap="4">

                <x-aura::icon name="shield-check" size="lg" container="true" />

                <x-aura::flex direction="col" gap="1">

                    <x-aura::heading level="3" size="md">
                        SOC2 Type II Certified
                    </x-aura::heading>

                    <x-aura::text variant="subtle" size="sm">
                        Enterprise grade data encryption at rest and in transit with automated compliance reporting.
                    </x-aura::text>

                </x-aura::flex>

                <x-slot:footer>

                    <x-aura::badge variant="neutral" size="sm">
                        Enterprise Grade
                    </x-aura::badge>

                </x-slot:footer>

            </x-aura::card>

            <x-aura::card padding="lg" gap="4">

                <x-aura::icon name="bell" size="lg" container="true" />

                <x-aura::flex direction="col" gap="1">

                    <x-aura::heading level="3" size="md">
                        Instant Alert Webhooks
                    </x-aura::heading>

                    <x-aura::text variant="subtle" size="sm">
                        Route anomaly alerts directly to Slack, PagerDuty, or custom webhook endpoints in real time.
                    </x-aura::text>

                </x-aura::flex>

                <x-slot:footer>

                    <x-aura::badge variant="subtle" size="sm">
                        Multi Channel
                    </x-aura::badge>

                </x-slot:footer>

            </x-aura::card>

        </x-aura::grid>

    </x-aura::flex>

</div>

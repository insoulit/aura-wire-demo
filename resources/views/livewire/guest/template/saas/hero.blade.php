<?php

use Livewire\Volt\Component;

new class extends Component {};

?>

<!-- SaaS Hero Section -->
<div id="hero">

    <x-aura::flex direction="col" gap="10">

        <!-- Hero Header Content -->
        <x-aura::flex direction="col" align="center" justify="center" gap="6">

            <x-aura::flex align="center" gap="2">

                <x-aura::kicker>
                    CLOUD PLATFORM v2.4
                </x-aura::kicker>

                <x-aura::badge variant="neutral" size="sm">
                    99.99% Uptime SLA
                </x-aura::badge>

            </x-aura::flex>

            <x-aura::display size="lg" align="center">
                Accelerate your Application Workflow with Real Time Cloud Analytics
            </x-aura::display>

            <x-aura::subheading size="md" align="center">
                Monitor API latencies, server error rates, and user events across multi region infrastructure with instant alert notifications
            </x-aura::subheading>

            <x-aura::flex align="center" justify="center" gap="3" wrap="true">

                <x-aura::button href="#pricing" variant="primary" size="lg" icon="arrow-right">
                    Trial
                </x-aura::button>

                <x-aura::button href="#features" variant="secondary" size="lg" icon="play">
                    Demo
                </x-aura::button>

            </x-aura::flex>

            <!-- Social Proof & Team Avatars -->
            <x-aura::flex align="center" justify="center" gap="3">

                <div class="flex -space-x-2 overflow-hidden">

                    <x-aura::avatar initials="JD" size="sm" />

                    <x-aura::avatar initials="AS" size="sm" />

                    <x-aura::avatar initials="MK" size="sm" />

                    <x-aura::avatar initials="SL" size="sm" />

                </div>

                <x-aura::text size="sm" variant="subtle">
                    Trusted by over 12,000+ engineering teams worldwide
                </x-aura::text>

            </x-aura::flex>

        </x-aura::flex>

        <!-- SaaS Visual Dashboard Mockup Card -->
        <x-aura::card padding="lg" gap="6">

            <!-- Top Toolbar Mockup -->
            <x-aura::flex direction="col" sm="row" align="start" smAlign="center" justify="between" gap="4">

                <x-aura::flex align="center" width="auto" gap="3">

                    <div class="flex gap-1.5">

                        <span class="w-3 h-3 rounded-full bg-zinc-300 dark:bg-zinc-700 inline-block"></span>

                        <span class="w-3 h-3 rounded-full bg-zinc-300 dark:bg-zinc-700 inline-block"></span>

                        <span class="w-3 h-3 rounded-full bg-zinc-300 dark:bg-zinc-700 inline-block"></span>

                    </div>

                    <span class="text-xs font-mono text-zinc-500 dark:text-zinc-400">
                        live-cluster-production-us-east.aura
                    </span>

                </x-aura::flex>

                <x-aura::flex align="center" width="auto" gap="2">

                    <x-aura::badge variant="neutral" size="sm">
                        1.2M Req / sec
                    </x-aura::badge>

                    <x-aura::badge variant="subtle" size="sm">
                        Latency: 14ms
                    </x-aura::badge>

                </x-aura::flex>

            </x-aura::flex>

            <x-aura::separator />

            <!-- Metrics Gauge Row -->
            <x-aura::grid cols="1" sm="3" gap="4">

                <x-aura::card padding="sm" divided="false">

                    <x-aura::flex align="center" justify="between">

                        <x-aura::text size="sm" variant="subtle">
                            CPU Capacity
                        </x-aura::text>

                        <x-aura::text size="sm" weight="bold">
                            42%
                        </x-aura::text>

                    </x-aura::flex>

                    <x-aura::progress-bar percent="42" size="sm" />

                </x-aura::card>

                <x-aura::card padding="sm" divided="false">

                    <x-aura::flex align="center" justify="between">

                        <x-aura::text size="sm" variant="subtle">
                            Memory Cache
                        </x-aura::text>

                        <x-aura::text size="sm" weight="bold">
                            68%
                        </x-aura::text>

                    </x-aura::flex>

                    <x-aura::progress-bar percent="68" size="sm" />

                </x-aura::card>

                <x-aura::card padding="sm" divided="false">

                    <x-aura::flex align="center" justify="between">

                        <x-aura::text size="sm" variant="subtle">
                            API Health
                        </x-aura::text>

                        <x-aura::text size="sm" weight="bold">
                            99.98%
                        </x-aura::text>

                    </x-aura::flex>

                    <x-aura::progress-bar percent="99" size="sm" />

                </x-aura::card>

            </x-aura::grid>

        </x-aura::card>

    </x-aura::flex>

</div>

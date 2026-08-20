<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.app')] 
#[Title('SaaS Platform UI Kit — Guest Portal | Aura Wire')] 
class extends Component {
    public bool $annualBilling = true;
};

?>

<x-aura::flex direction="col" gap="16">

    <!-- Top Navigation Bar -->
    <x-aura::flex align="center" justify="between" class="border-b border-zinc-200 dark:border-zinc-800 pb-4">

        <x-aura::flex align="center" gap="3">

            <x-aura::button href="/guest#full-template" wire:navigate variant="secondary" size="sm" icon="arrow-left">
                Back
            </x-aura::button>

            <span class="text-zinc-300 dark:text-zinc-700">/</span>

            <x-aura::badge variant="neutral" size="sm">
                SaaS Platform UI Kit
            </x-aura::badge>

        </x-aura::flex>

        <x-aura::badge variant="subtle" size="sm">
            Save 20% on Annual Billing
        </x-aura::badge>

    </x-aura::flex>

    <!-- SaaS Hero Section -->
    <x-aura::flex direction="col" gap="10" class="relative max-w-5xl mx-auto">

        <!-- Hero Header Content -->
        <x-aura::flex direction="col" align="center" gap="6" class="text-center max-w-4xl mx-auto">

            <x-aura::flex align="center" gap="2">

                <x-aura::kicker>
                    CLOUD PLATFORM v2.4
                </x-aura::kicker>

                <x-aura::badge variant="neutral" size="sm">
                    99.99% Uptime SLA
                </x-aura::badge>

            </x-aura::flex>

            <x-aura::display size="lg">
                Accelerate your Application Workflow with Realtime Cloud Analytics
            </x-aura::display>

            <x-aura::subheading>
                Monitor API latencies, server error rates, and user events across multi region infrastructure with instant alert notifications.
            </x-aura::subheading>

            <x-aura::flex align="center" justify="center" gap="3" wrap="true" class="pt-2">

                <x-aura::button variant="primary" size="lg" icon="arrow-right" iconPlacement="right">
                    Trial
                </x-aura::button>

                <x-aura::button variant="secondary" size="lg" icon="play">
                    Demo
                </x-aura::button>

            </x-aura::flex>

            <!-- Social Proof & Team Avatars -->
            <x-aura::flex align="center" justify="center" gap="3" class="pt-4 text-sm text-zinc-500 dark:text-zinc-400">

                <div class="flex -space-x-2 overflow-hidden">
                    <x-aura::avatar initials="JD" size="sm" />
                    <x-aura::avatar initials="AS" size="sm" />
                    <x-aura::avatar initials="MK" size="sm" />
                    <x-aura::avatar initials="SL" size="sm" />
                </div>

                <x-aura::text size="sm" variant="subtle">
                    Trusted by over 12,000+ teams worldwide
                </x-aura::text>

            </x-aura::flex>

        </x-aura::flex>

        <!-- SaaS Hero Visual Dashboard Mockup Card -->
        <x-aura::card gap="6">

            <!-- Top Toolbar Mockup -->
            <x-aura::flex direction="col" sm="row" align="start" smAlign="center" justify="between" gap="4" class="pb-4 border-b border-zinc-200 dark:border-zinc-800">

                <x-aura::flex align="center" gap="3">

                    <div class="flex gap-1.5">
                        <span class="w-3 h-3 rounded-full bg-zinc-300 dark:bg-zinc-700 inline-block"></span>
                        <span class="w-3 h-3 rounded-full bg-zinc-300 dark:bg-zinc-700 inline-block"></span>
                        <span class="w-3 h-3 rounded-full bg-zinc-300 dark:bg-zinc-700 inline-block"></span>
                    </div>

                    <div class="h-4 w-px bg-zinc-200 dark:bg-zinc-800"></div>

                    <span class="text-xs font-mono text-zinc-500 dark:text-zinc-400">live-cluster-production-us-east.aura</span>

                </x-aura::flex>

                <x-aura::flex align="center" gap="2">

                    <x-aura::badge variant="neutral" size="sm">
                        1.2M Req / sec
                    </x-aura::badge>

                    <x-aura::badge variant="subtle" size="sm">
                        Latency: 14ms
                    </x-aura::badge>

                </x-aura::flex>

            </x-aura::flex>

            <!-- Metrics Gauge Row -->
            <x-aura::grid cols="1" sm="3" gap="4">

                <div class="p-4 rounded-xl bg-zinc-50 dark:bg-zinc-900/90 border border-zinc-200 dark:border-zinc-800 space-y-2">

                    <div class="flex justify-between text-xs text-zinc-500 dark:text-zinc-400">
                        <span>CPU Capacity</span>
                        <span class="font-bold text-zinc-900 dark:text-white">42%</span>
                    </div>

                    <x-aura::progress-bar percent="42" size="sm" />

                </div>

                <div class="p-4 rounded-xl bg-zinc-50 dark:bg-zinc-900/90 border border-zinc-200 dark:border-zinc-800 space-y-2">

                    <div class="flex justify-between text-xs text-zinc-500 dark:text-zinc-400">
                        <span>Memory Cache</span>
                        <span class="font-bold text-zinc-900 dark:text-white">68%</span>
                    </div>

                    <x-aura::progress-bar percent="68" size="sm" />

                </div>

                <div class="p-4 rounded-xl bg-zinc-50 dark:bg-zinc-900/90 border border-zinc-200 dark:border-zinc-800 space-y-2">

                    <div class="flex justify-between text-xs text-zinc-500 dark:text-zinc-400">
                        <span>API Health</span>
                        <span class="font-bold text-zinc-900 dark:text-white">99.98%</span>
                    </div>

                    <x-aura::progress-bar percent="99" size="sm" />

                </div>

            </x-aura::grid>

        </x-aura::card>

    </x-aura::flex>

    <!-- Core Platform Highlights Grid -->
    <x-aura::grid cols="1" md="3" gap="6">

        <x-aura::card gap="3">

            <x-aura::icon name="zap" size="md" variant="dark" />

            <x-aura::heading level="3" size="sm">
                Sub Millisecond Tracing
            </x-aura::heading>

            <x-aura::text variant="subtle" size="sm">
                Capture detailed distributed stack traces without overhead on your production server nodes.
            </x-aura::text>

        </x-aura::card>

        <x-aura::card gap="3">

            <x-aura::icon name="shield-check" size="md" variant="dark" />

            <x-aura::heading level="3" size="sm">
                SOC2 Type II Certified
            </x-aura::heading>

            <x-aura::text variant="subtle" size="sm">
                Enterprise grade data encryption at rest and in transit with automated compliance reporting.
            </x-aura::text>

        </x-aura::card>

        <x-aura::card gap="3">

            <x-aura::icon name="bell" size="md" variant="dark" />

            <x-aura::heading level="3" size="sm">
                Instant Alert Webhooks
            </x-aura::heading>

            <x-aura::text variant="subtle" size="sm">
                Route anomaly alerts directly to Slack, PagerDuty, or custom webhook endpoints instantly.
            </x-aura::text>

        </x-aura::card>

    </x-aura::grid>

    <!-- Interactive Pricing Tiers Section -->
    <x-aura::flex direction="col" gap="8" class="pt-4">

        <x-aura::flex direction="col" align="center" gap="4" class="text-center max-w-xl mx-auto">

            <x-aura::heading level="2" size="lg">
                Flexible Plans for Every Team
            </x-aura::heading>

            <x-aura::subheading>
                Scale as your application traffic grows. No hidden fees or contracts.
            </x-aura::subheading>

            <!-- Billing Cycle Switch -->
            <x-aura::flex align="center" gap="3" :inline="true" class="p-1.5 rounded-full bg-zinc-100 dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-700">

                <span class="text-sm font-semibold px-3 py-1 text-zinc-700 dark:text-zinc-300">Monthly</span>

                <x-aura::switch wire:model.live="annualBilling" />

                <span class="text-sm font-semibold px-3 py-1 text-zinc-900 dark:text-white">Annual (20% Off)</span>

            </x-aura::flex>

        </x-aura::flex>

        <x-aura::grid cols="1" md="3" gap="6">

            <!-- Starter Plan Card -->
            <x-aura::card gap="4">

                <x-aura::flex direction="col" gap="1">

                    <x-aura::badge variant="subtle" size="sm">
                        Starter
                    </x-aura::badge>

                    <x-aura::heading level="3" size="md">
                        Developer
                    </x-aura::heading>

                    <x-aura::text variant="subtle" size="sm">
                        Essential monitoring for side projects.
                    </x-aura::text>

                </x-aura::flex>

                <div class="font-bold text-3xl text-zinc-900 dark:text-white font-mono">
                    {{ $annualBilling ? '$19' : '$25' }}
                    <span class="text-sm font-normal text-zinc-500">/mo</span>
                </div>

                <div class="space-y-2 pt-2 border-t border-zinc-100 dark:border-zinc-800 text-sm">

                    <div class="flex items-center gap-2 text-zinc-700 dark:text-zinc-300">
                        <x-aura::icon name="check" size="xs" />
                        <span>100,000 Events / month</span>
                    </div>

                    <div class="flex items-center gap-2 text-zinc-700 dark:text-zinc-300">
                        <x-aura::icon name="check" size="xs" />
                        <span>3 Team Members</span>
                    </div>

                    <div class="flex items-center gap-2 text-zinc-700 dark:text-zinc-300">
                        <x-aura::icon name="check" size="xs" />
                        <span>7 Day Log Retention</span>
                    </div>

                </div>

                <x-slot:footer>

                    <x-aura::button variant="secondary" size="md">
                        Start
                    </x-aura::button>

                </x-slot:footer>

            </x-aura::card>

            <!-- Pro Featured Plan Card -->
            <x-aura::card gap="4">

                <x-aura::flex direction="col" gap="1">

                    <x-aura::badge variant="neutral" size="sm">
                        Pro Suite
                    </x-aura::badge>

                    <x-aura::heading level="3" size="md">
                        Growth Team
                    </x-aura::heading>

                    <x-aura::text variant="subtle" size="sm">
                        Advanced insights for scaling startups.
                    </x-aura::text>

                </x-aura::flex>

                <div class="font-bold text-4xl text-zinc-900 dark:text-white font-mono">
                    {{ $annualBilling ? '$79' : '$99' }}
                    <span class="text-sm font-normal text-zinc-500">/mo</span>
                </div>

                <div class="space-y-2 pt-2 border-t border-zinc-100 dark:border-zinc-800 text-sm">

                    <div class="flex items-center gap-2 font-semibold text-zinc-900 dark:text-white">
                        <x-aura::icon name="check" size="xs" />
                        <span>2,500,000 Events / month</span>
                    </div>

                    <div class="flex items-center gap-2 text-zinc-700 dark:text-zinc-300">
                        <x-aura::icon name="check" size="xs" />
                        <span>15 Team Members</span>
                    </div>

                    <div class="flex items-center gap-2 text-zinc-700 dark:text-zinc-300">
                        <x-aura::icon name="check" size="xs" />
                        <span>30 Day Log Retention</span>
                    </div>

                    <div class="flex items-center gap-2 text-zinc-700 dark:text-zinc-300">
                        <x-aura::icon name="check" size="xs" />
                        <span>Slack and Webhook Alerts</span>
                    </div>

                </div>

                <x-slot:footer>

                    <x-aura::button variant="primary" size="md">
                        Upgrade
                    </x-aura::button>

                </x-slot:footer>

            </x-aura::card>

            <!-- Enterprise Plan Card -->
            <x-aura::card gap="4">

                <x-aura::flex direction="col" gap="1">

                    <x-aura::badge variant="subtle" size="sm">
                        Enterprise
                    </x-aura::badge>

                    <x-aura::heading level="3" size="md">
                        Scale and Security
                    </x-aura::heading>

                    <x-aura::text variant="subtle" size="sm">
                        Dedicated infrastructure and custom SLAs.
                    </x-aura::text>

                </x-aura::flex>

                <div class="font-bold text-3xl text-zinc-900 dark:text-white font-mono">
                    Custom
                </div>

                <div class="space-y-2 pt-2 border-t border-zinc-100 dark:border-zinc-800 text-sm">

                    <div class="flex items-center gap-2 text-zinc-700 dark:text-zinc-300">
                        <x-aura::icon name="check" size="xs" />
                        <span>Unlimited Volume</span>
                    </div>

                    <div class="flex items-center gap-2 text-zinc-700 dark:text-zinc-300">
                        <x-aura::icon name="check" size="xs" />
                        <span>Unlimited Team Seats</span>
                    </div>

                    <div class="flex items-center gap-2 text-zinc-700 dark:text-zinc-300">
                        <x-aura::icon name="check" size="xs" />
                        <span>365 Day Retention</span>
                    </div>

                    <div class="flex items-center gap-2 text-zinc-700 dark:text-zinc-300">
                        <x-aura::icon name="check" size="xs" />
                        <span>Dedicated Account Manager</span>
                    </div>

                </div>

                <x-slot:footer>

                    <x-aura::button variant="secondary" size="md" icon="arrow-right" iconPlacement="right">
                        Contact
                    </x-aura::button>

                </x-slot:footer>

            </x-aura::card>

        </x-aura::grid>

    </x-aura::flex>

</x-aura::flex>

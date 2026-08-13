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

<div class="w-full max-w-6xl space-y-16 py-6">
    <!-- Top Navigation Bar -->
    <div class="flex items-center justify-between border-b border-zinc-200 dark:border-zinc-800 pb-4">
        <div class="flex items-center gap-3">
            <x-aura::button href="/guest#full-template" variant="subtle" size="sm" icon="arrow-left">
                Back
            </x-aura::button>
            <span class="text-zinc-300 dark:text-zinc-700">/</span>
            <x-aura::badge variant="neutral" size="sm">SaaS Platform UI Kit</x-aura::badge>
        </div>

        <x-aura::badge variant="subtle" size="sm">Save 20% on Annual Billing</x-aura::badge>
    </div>

    <!-- SaaS Hero Section -->
    <div class="relative space-y-10 max-w-5xl mx-auto">
        <!-- Hero Header Content -->
        <div class="text-center space-y-6 max-w-4xl mx-auto">
            <div class="inline-flex items-center gap-2">
                <x-aura::kicker>⚡ CLOUD PLATFORM v2.4</x-aura::kicker>
                <x-aura::badge variant="neutral" size="sm">99.99% Uptime SLA</x-aura::badge>
            </div>

            <x-aura::heading level="1" size="display-lg">
            Accelerate your Application Workflow with <br class="hidden sm:block" />
            <span class="text-zinc-500 dark:text-zinc-400">
                Realtime Cloud Analytics
            </span>
        </x-aura::heading>

            <x-aura::subheading>
                Monitor API latencies, server error rates, and user events across multi-region infrastructure with instant alert notifications.
            </x-aura::subheading>

            <div class="flex flex-col sm:flex-row items-stretch sm:items-center justify-center gap-3 pt-2 w-full sm:w-auto max-w-xs sm:max-w-none mx-auto">
                <x-aura::button variant="primary" size="lg" icon-trailing="arrow-right">Start 14-Day Free Trial</x-aura::button>
                <x-aura::button variant="outline" size="lg" icon="play">Watch Platform Demo</x-aura::button>
            </div>

            <!-- Social Proof & Team Avatars -->
            <div class="flex items-center justify-center gap-3 pt-4 text-xs text-zinc-500 dark:text-zinc-400">
                <div class="flex -space-x-2 overflow-hidden">
                    <x-aura::avatar initials="JD" size="sm"  />
                    <x-aura::avatar initials="AS" size="sm"  />
                    <x-aura::avatar initials="MK" size="sm"  />
                    <x-aura::avatar initials="SL" size="sm"  />
                </div>
                <span>Trusted by over <strong class="text-zinc-900 dark:text-white font-semibold">12,000+</strong> dev teams worldwide</span>
            </div>
        </div>

        <!-- SaaS Hero Visual Dashboard Mockup Card -->
        <x-aura::card>
            <div class="space-y-6">
                <!-- Top Toolbar Mockup -->
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 pb-4 border-b border-zinc-800">
                    <div class="flex items-center gap-3">
                        <div class="flex gap-1.5">
                            <span class="w-3 h-3 rounded-full bg-red-500/80 inline-block"></span>
                            <span class="w-3 h-3 rounded-full bg-amber-500/80 inline-block"></span>
                            <span class="w-3 h-3 rounded-full bg-emerald-500/80 inline-block"></span>
                        </div>
                        <div class="h-4 w-px bg-zinc-800"></div>
                        <span class="text-xs font-mono text-zinc-400">live-cluster-production-us-east.aura</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <x-aura::badge variant="neutral" size="sm">● 1.2M Req / sec</x-aura::badge>
                        <x-aura::badge variant="subtle" size="sm">Latency: 14ms</x-aura::badge>
                    </div>
                </div>

                <!-- Metrics Gauge Row -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <div class="p-4 rounded-xl bg-zinc-900/90 border border-zinc-800 space-y-2">
                        <div class="flex justify-between text-xs text-zinc-400">
                            <span>CPU Capacity</span>
                            <span class="text-emerald-400 font-bold">42%</span>
                        </div>
                        <x-aura::progress-bar percent="42" size="sm" />
                    </div>

                    <div class="p-4 rounded-xl bg-zinc-900/90 border border-zinc-800 space-y-2">
                        <div class="flex justify-between text-xs text-zinc-400">
                            <span>Memory Cache</span>
                            <span class="text-blue-400 font-bold">68%</span>
                        </div>
                        <x-aura::progress-bar percent="68" size="sm" />
                    </div>

                    <div class="p-4 rounded-xl bg-zinc-900/90 border border-zinc-800 space-y-2">
                        <div class="flex justify-between text-xs text-zinc-400">
                            <span>API Health</span>
                            <span class="text-emerald-400 font-bold">99.98%</span>
                        </div>
                        <x-aura::progress-bar percent="99" size="sm" />
                    </div>
                </div>
            </div>
        </x-aura::card>
    </div>

    <!-- Core Platform Highlights Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <x-aura::card>
            <div class="h-10 w-10 rounded-xl bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 flex items-center justify-center shadow-2xs">
                <x-aura::icon name="zap"  size="sm" />
            </div>
            <x-aura::heading level="3" size="sm">Sub-Millisecond Tracing</x-aura::heading>
            <x-aura::text variant="subtle" size="xs">
                Capture detailed distributed stack traces without overhead on your production server nodes.
            </x-aura::text>
        </x-aura::card>

        <x-aura::card>
            <div class="h-10 w-10 rounded-xl bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 flex items-center justify-center shadow-2xs">
                <x-aura::icon name="shield-check"  size="sm" />
            </div>
            <x-aura::heading level="3" size="sm">SOC2 Type II Certified</x-aura::heading>
            <x-aura::text variant="subtle" size="xs">
                Enterprise-grade data encryption at rest and in transit with automated compliance reporting.
            </x-aura::text>
        </x-aura::card>

        <x-aura::card>
            <div class="h-10 w-10 rounded-xl bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 flex items-center justify-center shadow-2xs">
                <x-aura::icon name="bell"  size="sm" />
            </div>
            <x-aura::heading level="3" size="sm">Instant Alert Webhooks</x-aura::heading>
            <x-aura::text variant="subtle" size="xs">
                Route anomaly alerts directly to Slack, PagerDuty, or custom webhook endpoints instantly.
            </x-aura::text>
        </x-aura::card>
    </div>

    <!-- Interactive Pricing Tiers Section -->
    <div class="space-y-8 pt-4">
        <div class="text-center space-y-4 max-w-xl mx-auto">
            <x-aura::heading level="2" size="lg">Flexible Plans for Every Team</x-aura::heading>
            <x-aura::subheading>Scale as your application traffic grows. No hidden fees or contracts.</x-aura::subheading>

            <!-- Billing Cycle Switch -->
            <div class="inline-flex items-center gap-3 p-1.5 rounded-full bg-zinc-100 dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-700">
                <span class="text-xs font-semibold px-3 py-1 text-zinc-700 dark:text-zinc-300">Monthly</span>
                <x-aura::switch wire:model.live="annualBilling" />
                <span class="text-xs font-semibold px-3 py-1 text-zinc-900 dark:text-white">Annual (20% Off)</span>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Starter Plan Card -->
            <x-aura::card>
                <div class="space-y-4">
                    <div>
                        <x-aura::badge variant="subtle" size="sm">Starter</x-aura::badge>
                        <x-aura::heading level="3" size="md">Developer</x-aura::heading>
                        <x-aura::text variant="subtle" size="xs">Essential monitoring for side projects.</x-aura::text>
                    </div>

                    <div class="font-extrabold text-3xl text-zinc-900 dark:text-white">
                        {{ $annualBilling ? '$19' : '$25' }}
                        <span class="text-xs font-normal text-zinc-500">/mo</span>
                    </div>

                    <div class="space-y-2 pt-2 border-t border-zinc-100 dark:border-zinc-800 text-xs">
                        <div class="flex items-center gap-2 text-zinc-700 dark:text-zinc-300">
                            <x-aura::icon name="check"  size="xs" />
                            <span>100,000 Events / month</span>
                        </div>
                        <div class="flex items-center gap-2 text-zinc-700 dark:text-zinc-300">
                            <x-aura::icon name="check"  size="xs" />
                            <span>3 Team Members</span>
                        </div>
                        <div class="flex items-center gap-2 text-zinc-700 dark:text-zinc-300">
                            <x-aura::icon name="check"  size="xs" />
                            <span>7-Day Log Retention</span>
                        </div>
                    </div>
                </div>
                <div class="pt-6">
                    <x-aura::button variant="secondary" size="md">Get Started Free</x-aura::button>
                </div>
            </x-aura::card>

            <!-- Pro Featured Plan Card -->
            <x-aura::card>
                <div class="absolute -top-3 left-1/2 -translate-x-1/2">
                    <x-aura::badge variant="neutral" size="sm">Most Popular</x-aura::badge>
                </div>
                <div class="space-y-4">
                    <div>
                        <x-aura::badge variant="neutral" size="sm">Pro Suite</x-aura::badge>
                        <x-aura::heading level="3" size="md">Growth Team</x-aura::heading>
                        <x-aura::text variant="subtle" size="xs">Advanced insights for scaling startups.</x-aura::text>
                    </div>

                    <div class="font-extrabold text-4xl text-zinc-900 dark:text-white">
                        {{ $annualBilling ? '$79' : '$99' }}
                        <span class="text-xs font-normal text-zinc-500">/mo</span>
                    </div>

                    <div class="space-y-2 pt-2 border-t border-zinc-100 dark:border-zinc-800 text-xs">
                        <div class="flex items-center gap-2 font-semibold text-zinc-900 dark:text-white">
                            <x-aura::icon name="check"  size="xs" />
                            <span>2,500,000 Events / month</span>
                        </div>
                        <div class="flex items-center gap-2 text-zinc-700 dark:text-zinc-300">
                            <x-aura::icon name="check"  size="xs" />
                            <span>15 Team Members</span>
                        </div>
                        <div class="flex items-center gap-2 text-zinc-700 dark:text-zinc-300">
                            <x-aura::icon name="check"  size="xs" />
                            <span>30-Day Log Retention</span>
                        </div>
                        <div class="flex items-center gap-2 text-zinc-700 dark:text-zinc-300">
                            <x-aura::icon name="check"  size="xs" />
                            <span>Slack &amp; Webhook Alerts</span>
                        </div>
                    </div>
                </div>
                <div class="pt-6">
                    <x-aura::button variant="primary" size="md">Start 14-Day Free Trial</x-aura::button>
                </div>
            </x-aura::card>

            <!-- Enterprise Plan Card -->
            <x-aura::card>
                <div class="space-y-4">
                    <div>
                        <x-aura::badge variant="subtle" size="sm">Enterprise</x-aura::badge>
                        <x-aura::heading level="3" size="md">Scale &amp; Security</x-aura::heading>
                        <x-aura::text variant="subtle" size="xs">Dedicated infrastructure &amp; custom SLAs.</x-aura::text>
                    </div>

                    <div class="font-extrabold text-3xl text-zinc-900 dark:text-white">
                        Custom
                    </div>

                    <div class="space-y-2 pt-2 border-t border-zinc-100 dark:border-zinc-800 text-xs">
                        <div class="flex items-center gap-2 text-zinc-700 dark:text-zinc-300">
                            <x-aura::icon name="check"  size="xs" />
                            <span>Unlimited Volume</span>
                        </div>
                        <div class="flex items-center gap-2 text-zinc-700 dark:text-zinc-300">
                            <x-aura::icon name="check"  size="xs" />
                            <span>Unlimited Team Seats</span>
                        </div>
                        <div class="flex items-center gap-2 text-zinc-700 dark:text-zinc-300">
                            <x-aura::icon name="check"  size="xs" />
                            <span>365-Day Retention</span>
                        </div>
                        <div class="flex items-center gap-2 text-zinc-700 dark:text-zinc-300">
                            <x-aura::icon name="check"  size="xs" />
                            <span>Dedicated Account Manager</span>
                        </div>
                    </div>
                </div>
                <div class="pt-6">
                    <x-aura::button variant="outline" size="md"  icon-trailing="arrow-right">Contact Sales</x-aura::button>
                </div>
            </x-aura::card>
        </div>
    </div>
</div>

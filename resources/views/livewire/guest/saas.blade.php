<?php

use function Livewire\Volt\{layout, title, state};

layout('layouts.guest');
title('SaaS Platform UI Kit — Aura Wire');

state([
    'annualBilling' => true,
]);

?>

<div class="w-full max-w-6xl space-y-16 py-6">
    <!-- Top Navigation Bar -->
    <div class="flex items-center justify-between border-b border-zinc-200 dark:border-zinc-800 pb-4">
        <div class="flex items-center gap-3">
            <a href="/guest" class="text-xs font-semibold text-zinc-900 dark:text-white hover:underline">&larr; Guest Portal</a>
            <span class="text-zinc-300 dark:text-zinc-700">/</span>
            <x-aura::badge variant="neutral" size="sm">SaaS Platform UI Kit</x-aura::badge>
        </div>

        <x-aura::badge variant="subtle" size="sm">Save 20% on Annual Billing</x-aura::badge>
    </div>

    <!-- SaaS Hero Section -->
    <div class="relative text-center space-y-6 max-w-4xl mx-auto">
        <div class="inline-flex items-center gap-2">
            <x-aura::kicker class="text-zinc-500">⚡ CLOUD MONITORING</x-aura::kicker>
            <x-aura::badge variant="positive" size="sm">99.99% Uptime SLA</x-aura::badge>
        </div>

        <x-aura::heading level="1" size="display-lg" class="tracking-tight text-zinc-900 dark:text-white">
            Accelerate your Application Workflow with <br class="hidden sm:block" />
            <span class="underline decoration-zinc-400 dark:decoration-zinc-600 underline-offset-8">
                Realtime Cloud Analytics
            </span>
        </x-aura::heading>

        <x-aura::subheading class="max-w-2xl mx-auto text-lg">
            Monitor API latencies, server error rates, and user events across multi-region infrastructure with instant alert notifications.
        </x-aura::subheading>

        <div class="flex flex-wrap items-center justify-center gap-4 pt-2">
            <x-aura::button variant="primary" size="lg">Start 14-Day Free Trial &rarr;</x-aura::button>
            <x-aura::button variant="outline" size="lg">Schedule Demo</x-aura::button>
        </div>
    </div>

    <!-- Interactive Pricing Tiers Section -->
    <div class="space-y-8">
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
            <x-aura::card class="flex flex-col justify-between p-6 hover:border-zinc-900 dark:hover:border-white transition-all">
                <div class="space-y-4">
                    <div>
                        <x-aura::badge variant="subtle" size="sm">Starter</x-aura::badge>
                        <x-aura::heading level="3" size="md" class="mt-2">Developer</x-aura::heading>
                        <x-aura::text variant="subtle" size="xs">Essential monitoring for side projects.</x-aura::text>
                    </div>

                    <div class="font-extrabold text-3xl text-zinc-900 dark:text-white">
                        {{ $annualBilling ? '$19' : '$25' }}
                        <span class="text-xs font-normal text-zinc-500">/mo</span>
                    </div>

                    <ul class="space-y-2 text-xs text-zinc-600 dark:text-zinc-400 pt-2 border-t border-zinc-100 dark:border-zinc-800">
                        <li class="flex items-center gap-2">✓ 100,000 Events / month</li>
                        <li class="flex items-center gap-2">✓ 3 Team Members</li>
                        <li class="flex items-center gap-2">✓ 7-Day Log Retention</li>
                    </ul>
                </div>
                <div class="pt-6">
                    <x-aura::button variant="secondary" size="md" class="w-full justify-center">Get Started Free</x-aura::button>
                </div>
            </x-aura::card>

            <!-- Pro Featured Plan Card -->
            <x-aura::card class="flex flex-col justify-between p-6 border-2 border-zinc-900 dark:border-white shadow-xl relative">
                <div class="absolute -top-3 left-1/2 -translate-x-1/2">
                    <x-aura::badge variant="positive" size="sm">Most Popular</x-aura::badge>
                </div>
                <div class="space-y-4">
                    <div>
                        <x-aura::badge variant="neutral" size="sm">Pro Suite</x-aura::badge>
                        <x-aura::heading level="3" size="md" class="mt-2">Growth Team</x-aura::heading>
                        <x-aura::text variant="subtle" size="xs">Advanced insights for scaling startups.</x-aura::text>
                    </div>

                    <div class="font-extrabold text-4xl text-zinc-900 dark:text-white">
                        {{ $annualBilling ? '$79' : '$99' }}
                        <span class="text-xs font-normal text-zinc-500">/mo</span>
                    </div>

                    <ul class="space-y-2 text-xs text-zinc-600 dark:text-zinc-400 pt-2 border-t border-zinc-100 dark:border-zinc-800">
                        <li class="flex items-center gap-2 font-semibold text-zinc-900 dark:text-white">✓ 2,500,000 Events / month</li>
                        <li class="flex items-center gap-2">✓ 15 Team Members</li>
                        <li class="flex items-center gap-2">✓ 30-Day Log Retention</li>
                        <li class="flex items-center gap-2">✓ Slack &amp; Webhook Alerts</li>
                    </ul>
                </div>
                <div class="pt-6">
                    <x-aura::button variant="primary" size="md" class="w-full justify-center">Start 14-Day Free Trial</x-aura::button>
                </div>
            </x-aura::card>

            <!-- Enterprise Plan Card -->
            <x-aura::card class="flex flex-col justify-between p-6 hover:border-zinc-900 dark:hover:border-white transition-all">
                <div class="space-y-4">
                    <div>
                        <x-aura::badge variant="subtle" size="sm">Enterprise</x-aura::badge>
                        <x-aura::heading level="3" size="md" class="mt-2">Scale &amp; Security</x-aura::heading>
                        <x-aura::text variant="subtle" size="xs">Dedicated infrastructure &amp; custom SLAs.</x-aura::text>
                    </div>

                    <div class="font-extrabold text-3xl text-zinc-900 dark:text-white">
                        Custom
                    </div>

                    <ul class="space-y-2 text-xs text-zinc-600 dark:text-zinc-400 pt-2 border-t border-zinc-100 dark:border-zinc-800">
                        <li class="flex items-center gap-2">✓ Unlimited Volume</li>
                        <li class="flex items-center gap-2">✓ Unlimited Team Seats</li>
                        <li class="flex items-center gap-2">✓ 365-Day Retention</li>
                        <li class="flex items-center gap-2">✓ Dedicated Account Manager</li>
                    </ul>
                </div>
                <div class="pt-6">
                    <x-aura::button variant="outline" size="md" class="w-full justify-center">Contact Sales &rarr;</x-aura::button>
                </div>
            </x-aura::card>
        </div>
    </div>
</div>

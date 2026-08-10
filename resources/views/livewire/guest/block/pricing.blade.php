<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('layout.guest')] 
#[Title('Pricing Block — Guest Portal | Aura Wire')] 
class extends Component {};

?>

<div class="w-full max-w-4xl mx-auto space-y-10 flex flex-col items-center justify-center py-6">
    <!-- Header -->
    <div class="space-y-3 text-center flex flex-col items-center">
        <x-aura::kicker>Guest Portal Design Blocks</x-aura::kicker>
        <x-aura::heading level="1" size="lg">Pricing Cards Block</x-aura::heading>
        <x-aura::subheading class="max-w-lg">
            Conversion-optimized pricing tier tables for SaaS platforms, subscriptions, and digital services.
        </x-aura::subheading>
    </div>

    <!-- Pricing Block Preview -->
    <x-aura::code class="w-full" title="3-Tier SaaS Pricing Block">
        <x-slot:preview>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 w-full items-stretch">
                <!-- Tier 1: Starter -->
                <x-aura::card class="flex flex-col justify-between p-6 space-y-6">
                    <div class="space-y-4">
                        <div class="space-y-1">
                            <x-aura::kicker>For Individuals</x-aura::kicker>
                            <h3 class="text-xl font-bold text-zinc-900 dark:text-white">Starter</h3>
                            <p class="text-xs text-zinc-500">Essential tools to launch your initial projects.</p>
                        </div>
                        <div class="flex items-baseline gap-1">
                            <span class="text-3xl font-black font-mono tracking-tight text-zinc-900 dark:text-white">$19</span>
                            <span class="text-xs text-zinc-400 font-semibold">/ month</span>
                        </div>
                        <x-aura::separator />
                        <ul class="space-y-2.5 text-xs text-zinc-600 dark:text-zinc-300">
                            <li class="flex items-center gap-2">
                                <span class="text-emerald-500 font-bold">✓</span>
                                Up to 5 Active Projects
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-emerald-500 font-bold">✓</span>
                                10 GB Cloud Storage
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-emerald-500 font-bold">✓</span>
                                Community Support
                            </li>
                        </ul>
                    </div>
                    <x-aura::button variant="outline" size="md" class="w-full justify-center">Get Started</x-aura::button>
                </x-aura::card>

                <!-- Tier 2: Pro (Featured) -->
                <x-aura::card class="flex flex-col justify-between p-6 space-y-6 relative border-2 border-indigo-500 shadow-xl ring-4 ring-indigo-500/10">
                    <x-aura::badge variant="positive" size="sm" class="absolute -top-3 right-6 shadow-md bg-indigo-600 text-white font-bold">
                        MOST POPULAR
                    </x-aura::badge>
                    <div class="space-y-4">
                        <div class="space-y-1">
                            <x-aura::kicker class="text-indigo-500 font-bold">For Growing Teams</x-aura::kicker>
                            <h3 class="text-xl font-bold text-zinc-900 dark:text-white">Pro Plan</h3>
                            <p class="text-xs text-zinc-500">Advanced collaboration &amp; full power access.</p>
                        </div>
                        <div class="flex items-baseline gap-1">
                            <span class="text-3xl font-black font-mono tracking-tight text-zinc-900 dark:text-white">$49</span>
                            <span class="text-xs text-zinc-400 font-semibold">/ month</span>
                        </div>
                        <x-aura::separator />
                        <ul class="space-y-2.5 text-xs text-zinc-600 dark:text-zinc-300">
                            <li class="flex items-center gap-2 font-medium">
                                <span class="text-emerald-500 font-bold">✓</span>
                                Unlimited Active Projects
                            </li>
                            <li class="flex items-center gap-2 font-medium">
                                <span class="text-emerald-500 font-bold">✓</span>
                                500 GB Storage
                            </li>
                            <li class="flex items-center gap-2 font-medium">
                                <span class="text-emerald-500 font-bold">✓</span>
                                Priority 24/7 Live Chat
                            </li>
                            <li class="flex items-center gap-2 font-medium">
                                <span class="text-emerald-500 font-bold">✓</span>
                                Custom Domain SSL Setup
                            </li>
                        </ul>
                    </div>
                    <x-aura::button variant="primary" size="md" class="w-full justify-center shadow-md">Upgrade to Pro</x-aura::button>
                </x-aura::card>

                <!-- Tier 3: Enterprise -->
                <x-aura::card class="flex flex-col justify-between p-6 space-y-6">
                    <div class="space-y-4">
                        <div class="space-y-1">
                            <x-aura::kicker>For Organizations</x-aura::kicker>
                            <h3 class="text-xl font-bold text-zinc-900 dark:text-white">Enterprise</h3>
                            <p class="text-xs text-zinc-500">Custom SLA &amp; dedicated server nodes.</p>
                        </div>
                        <div class="flex items-baseline gap-1">
                            <span class="text-3xl font-black font-mono tracking-tight text-zinc-900 dark:text-white">$199</span>
                            <span class="text-xs text-zinc-400 font-semibold">/ month</span>
                        </div>
                        <x-aura::separator />
                        <ul class="space-y-2.5 text-xs text-zinc-600 dark:text-zinc-300">
                            <li class="flex items-center gap-2">
                                <span class="text-emerald-500 font-bold">✓</span>
                                Dedicated Bare-Metal Node
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-emerald-500 font-bold">✓</span>
                                Unlimited SAML / SSO Logins
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-emerald-500 font-bold">✓</span>
                                99.99% Uptime Guarantee SLA
                            </li>
                        </ul>
                    </div>
                    <x-aura::button variant="secondary" size="md" class="w-full justify-center">Contact Sales</x-aura::button>
                </x-aura::card>
            </div>
        </x-slot:preview>
        <x-slot name="codeSlot">&lt;div class="grid grid-cols-1 md:grid-cols-3 gap-6"&gt;
    &lt;x-aura::card&gt;Starter ($19)&lt;/x-aura::card&gt;
    &lt;x-aura::card class="border-2 border-indigo-500"&gt;Pro ($49)&lt;/x-aura::card&gt;
    &lt;x-aura::card&gt;Enterprise ($199)&lt;/x-aura::card&gt;
&lt;/div&gt;</x-slot>
    </x-aura::code>
</div>

<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('layout.guest')] 
#[Title('Pricing Cards — Guest Portal | Aura Wire')] 
class extends Component {};

?>

<div class="w-full max-w-4xl mx-auto space-y-4 py-6">
    <!-- Top Header -->
    <div class="space-y-1 px-1">
        <div class="flex items-center justify-between gap-4">
            <div>
                <x-aura::kicker>Design Blocks</x-aura::kicker>
                <x-aura::heading level="1" size="lg">Pricing Cards</x-aura::heading>
            </div>
            <x-aura::button href="/guest" variant="subtle" size="sm" class="shrink-0 gap-1.5">
                <x-aura::icon name="arrow-left" class="w-3.5 h-3.5 shrink-0" />
                <span>Back</span>
            </x-aura::button>
        </div>
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
                    <div class="pt-3">
                        <x-aura::button variant="outline" size="md" class="w-full justify-center">Get Started</x-aura::button>
                    </div>
                </x-aura::card>

                <!-- Tier 2: Pro (Featured) -->
                <x-aura::card class="flex flex-col justify-between p-6 space-y-6 relative border-2 border-indigo-500 shadow-xl ring-4 ring-indigo-500/10">
                    <x-aura::badge variant="positive" size="sm" class="absolute -top-3 right-6 z-10 shadow-md bg-indigo-600 text-white font-bold">
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
                    <div class="pt-3">
                        <x-aura::button variant="primary" size="md" class="w-full justify-center shadow-md">Upgrade to Pro</x-aura::button>
                    </div>
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
                    <div class="pt-3">
                        <x-aura::button variant="secondary" size="md" class="w-full justify-center">Contact Sales</x-aura::button>
                    </div>
                </x-aura::card>
            </div>
        </x-slot:preview>
        <x-slot name="codeSlot">&lt;div class="grid grid-cols-1 md:grid-cols-3 gap-6 w-full"&gt;
    &lt;!-- Starter --&gt;
    &lt;x-aura::card class="flex flex-col justify-between p-6 space-y-6"&gt;
        &lt;div class="space-y-4"&gt;
            &lt;x-aura::kicker&gt;For Individuals&lt;/x-aura::kicker&gt;
            &lt;h3 class="text-xl font-bold"&gt;Starter&lt;/h3&gt;
            &lt;span class="text-3xl font-black font-mono"&gt;$19/mo&lt;/span&gt;
            &lt;x-aura::separator /&gt;
        &lt;/div&gt;
        &lt;x-aura::button variant="outline" class="w-full"&gt;Get Started&lt;/x-aura::button&gt;
    &lt;/x-aura::card&gt;

    &lt;!-- Pro (Featured) --&gt;
    &lt;x-aura::card class="flex flex-col justify-between p-6 space-y-6 border-2 border-indigo-500 shadow-xl"&gt;
        &lt;x-aura::badge variant="positive" class="bg-indigo-600 text-white"&gt;MOST POPULAR&lt;/x-aura::badge&gt;
        &lt;div class="space-y-4"&gt;
            &lt;x-aura::kicker class="text-indigo-500"&gt;For Growing Teams&lt;/x-aura::kicker&gt;
            &lt;h3 class="text-xl font-bold"&gt;Pro Plan&lt;/h3&gt;
            &lt;span class="text-3xl font-black font-mono"&gt;$49/mo&lt;/span&gt;
            &lt;x-aura::separator /&gt;
        &lt;/div&gt;
        &lt;x-aura::button variant="primary" class="w-full"&gt;Upgrade to Pro&lt;/x-aura::button&gt;
    &lt;/x-aura::card&gt;

    &lt;!-- Enterprise --&gt;
    &lt;x-aura::card class="flex flex-col justify-between p-6 space-y-6"&gt;
        &lt;div class="space-y-4"&gt;
            &lt;x-aura::kicker&gt;For Organizations&lt;/x-aura::kicker&gt;
            &lt;h3 class="text-xl font-bold"&gt;Enterprise&lt;/h3&gt;
            &lt;span class="text-3xl font-black font-mono"&gt;$199/mo&lt;/span&gt;
            &lt;x-aura::separator /&gt;
        &lt;/div&gt;
        &lt;x-aura::button variant="secondary" class="w-full"&gt;Contact Sales&lt;/x-aura::button&gt;
    &lt;/x-aura::card&gt;
&lt;/div&gt;</x-slot>
    </x-aura::code>
</div>

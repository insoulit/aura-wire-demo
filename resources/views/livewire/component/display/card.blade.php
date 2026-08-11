<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Card - Aura Wire')] 
class extends Component {};

?>

<div class="w-full max-w-4xl mx-auto space-y-10 flex flex-col items-center justify-center">
    <!-- Header -->
    <div class="space-y-3 text-center flex flex-col items-center">
        <x-aura::kicker>Display</x-aura::kicker>
        <x-aura::heading level="1" size="lg">Card</x-aura::heading>
        <x-aura::subheading size="sm" class="max-w-lg">
            Versatile container cards with header, body, and action footer slots for dashboards, forms, and statistics.
        </x-aura::subheading>
        <div class="pt-1">
            <code class="inline-flex items-center px-3.5 py-1.5 rounded-xl text-sm font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-2xs">
                &lt;x-aura::card&gt;
            </code>
        </div>
    </div>

    <!-- 1. Standard Header & Footer Card -->
    <x-aura::code class="w-full" title="1. Standard Header & Action Footer Card">
        <x-slot:preview>
            <div class="w-full max-w-lg">
                <x-aura::card title="Project Statistics" description="Real-time traffic and performance metrics.">
                    <div class="space-y-3 py-1">
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-zinc-500 dark:text-zinc-400">Total Unique Visitors</span>
                            <span class="font-mono font-bold text-zinc-900 dark:text-white">128,450</span>
                        </div>
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-zinc-500 dark:text-zinc-400">Average Response Time</span>
                            <span class="font-mono font-bold text-emerald-600 dark:text-emerald-400">42 ms</span>
                        </div>
                    </div>
                    <x-slot name="footer">
                        <x-aura::button variant="ghost" size="sm">View Logs</x-aura::button>
                        <x-aura::button variant="primary" size="sm">Export Analytics</x-aura::button>
                    </x-slot>
                </x-aura::card>
            </div>
        </x-slot:preview>
        <x-slot name="codeSlot">&lt;x-aura::card title="Project Statistics" description="Real-time traffic metrics."&gt;
    &lt;div class="flex justify-between text-sm"&gt;
        &lt;span&gt;Total Visitors&lt;/span&gt;
        &lt;span class="font-mono font-bold"&gt;128,450&lt;/span&gt;
    &lt;/div&gt;
    &lt;x-slot name="footer"&gt;
        &lt;x-aura::button variant="primary" size="sm"&gt;Export Analytics&lt;/x-aura::button&gt;
    &lt;/x-slot&gt;
&lt;/x-aura::card&gt;</x-slot>
    </x-aura::code>

    <!-- 2. Metric KPI Cards Grid -->
    <x-aura::code class="w-full" title="2. Metric KPI Dashboard Cards">
        <x-slot:preview>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 w-full">
                <!-- KPI 1 -->
                <x-aura::card>
                    <div class="space-y-1">
                        <x-aura::kicker>Monthly Revenue</x-aura::kicker>
                        <p class="text-2xl font-black font-mono tracking-tight text-zinc-900 dark:text-white">$48,250</p>
                    </div>
                    <div class="pt-2 flex items-center gap-1.5 text-xs text-emerald-600 dark:text-emerald-400 font-semibold">
                        <span>+14.2%</span>
                        <span class="text-zinc-400 font-normal">vs last month</span>
                    </div>
                </x-aura::card>

                <!-- KPI 2 -->
                <x-aura::card>
                    <div class="space-y-1">
                        <x-aura::kicker>Active Customers</x-aura::kicker>
                        <p class="text-2xl font-black font-mono tracking-tight text-zinc-900 dark:text-white">3,892</p>
                    </div>
                    <div class="pt-2 flex items-center gap-1.5 text-xs text-emerald-600 dark:text-emerald-400 font-semibold">
                        <span>+8.5%</span>
                        <span class="text-zinc-400 font-normal">new subscribers</span>
                    </div>
                </x-aura::card>

                <!-- KPI 3 -->
                <x-aura::card>
                    <div class="space-y-1">
                        <x-aura::kicker>Server Uptime</x-aura::kicker>
                        <p class="text-2xl font-black font-mono tracking-tight text-zinc-900 dark:text-white">99.98%</p>
                    </div>
                    <div class="pt-2 flex items-center gap-1.5 text-xs text-zinc-500 font-medium">
                        <x-aura::badge variant="positive" size="sm">Healthy</x-aura::badge>
                    </div>
                </x-aura::card>
            </div>
        </x-slot:preview>
        <x-slot name="codeSlot">&lt;x-aura::card&gt;
    &lt;x-aura::kicker&gt;Monthly Revenue&lt;/x-aura::kicker&gt;
    &lt;p class="text-2xl font-black font-mono"&gt;$48,250&lt;/p&gt;
&lt;/x-aura::card&gt;</x-slot>
    </x-aura::code>

    <!-- 3. User Profile Card Pattern -->
    <x-aura::code class="w-full" title="3. User Profile & Account Status Card">
        <x-slot:preview>
            <div class="w-full max-w-md">
                <x-aura::card>
                    <div class="flex items-center gap-4">
                        <x-aura::avatar initials="AD" status="online" size="lg" />
                        <div class="space-y-1">
                            <div class="flex items-center gap-2">
                                <h4 class="text-base font-bold text-zinc-900 dark:text-white">Alex Morgan</h4>
                                <x-aura::badge variant="positive" size="sm">Admin</x-aura::badge>
                            </div>
                            <p class="text-xs text-zinc-500 dark:text-zinc-400">Lead Product Architect - Insoulit</p>
                        </div>
                    </div>
                    <x-slot name="footer">
                        <x-aura::button variant="outline" size="sm" icon="pencil">
                            Edit Profile
                        </x-aura::button>
                        <x-aura::button variant="secondary" size="sm">Settings</x-aura::button>
                    </x-slot>
                </x-aura::card>
            </div>
        </x-slot:preview>
        <x-slot name="codeSlot">&lt;x-aura::card&gt;
    &lt;div class="flex items-center gap-4"&gt;
        &lt;x-aura::avatar initials="AD" status="online" size="lg" /&gt;
        &lt;div&gt;
            &lt;h4 class="font-bold"&gt;Alex Morgan&lt;/h4&gt;
            &lt;x-aura::badge variant="positive" size="sm"&gt;Admin&lt;/x-aura::badge&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/x-aura::card&gt;</x-slot>
    </x-aura::code>

    <!-- 4. Featured Card with Floating Badge -->
    <x-aura::code class="w-full" title="4. Featured Card with Floating Badge">
        <x-slot:preview>
            <div class="w-full max-w-md relative pt-3">
                <x-aura::card class="border-2 border-indigo-500 shadow-xl relative">
                    <x-aura::badge variant="positive" size="sm" class="absolute -top-3 right-6 z-10 shadow-md bg-indigo-600 text-white font-bold">
                        FEATURED
                    </x-aura::badge>
                    <div class="space-y-2">
                        <x-aura::kicker class="text-indigo-500 font-bold">Pro Plan</x-aura::kicker>
                        <h4 class="text-xl font-bold text-zinc-900 dark:text-white">$49 / month</h4>
                        <p class="text-xs text-zinc-500">Includes advanced analytics and 24/7 priority live support.</p>
                    </div>
                </x-aura::card>
            </div>
        </x-slot:preview>
        <x-slot name="codeSlot">&lt;x-aura::card class="relative border-2 border-indigo-500"&gt;
    &lt;x-aura::badge class="absolute -top-3 right-6 z-10 bg-indigo-600 text-white"&gt;
        FEATURED
    &lt;/x-aura::badge&gt;
    &lt;h4 class="text-xl font-bold"&gt;$49 / month&lt;/h4&gt;
&lt;/x-aura::card&gt;</x-slot>
    </x-aura::code>
</div>

<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Stat Card - Aura Wire');

?>

<div class="w-full max-w-4xl mx-auto space-y-10 flex flex-col items-center justify-center">
    <!-- Header -->
    <div class="space-y-3 text-center flex flex-col items-center">
        <x-aura::kicker>Display</x-aura::kicker>
        <x-aura::heading level="1" size="lg">Stat Card</x-aura::heading>
        <x-aura::subheading size="sm" class="max-w-lg">
            KPI metric display cards with values, labels, trend status badges, and icon indicators.
        </x-aura::subheading>
        <div class="pt-1">
            <code class="inline-flex items-center px-3.5 py-1.5 rounded-xl text-sm font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-2xs">
                &lt;x-aura::stat&gt;
            </code>
        </div>
    </div>

    <!-- 1. Stat Cards Grid -->
    <x-aura::code class="w-full" title="1. Dashboard Metric KPI Cards">
        <x-slot:preview>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 w-full">
                <x-aura::stat label="Total Revenue" value="$48,290" trend="+14.2%" trendDirection="up" description="vs previous month" icon="trending-up" />
                <x-aura::stat label="Active Users" value="2,840" trend="+8.1%" trendDirection="up" description="vs previous week" icon="users" />
                <x-aura::stat label="Bounce Rate" value="24.1%" trend="-2.4%" trendDirection="down" description="vs target" icon="activity" />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::stat label="Total Revenue" value="$48,290" trend="+14.2%" trendDirection="up" description="vs previous month" icon="trending-up" /&gt;
&lt;x-aura::stat label="Active Users" value="2,840" trend="+8.1%" trendDirection="up" description="vs previous week" icon="users" /&gt;
&lt;x-aura::stat label="Bounce Rate" value="24.1%" trend="-2.4%" trendDirection="down" description="vs target" icon="activity" /&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Trend Status Variants -->
    <x-aura::code class="w-full" title="2. Trend Directions (up, down, neutral)">
        <x-slot:preview>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 w-full">
                <x-aura::stat label="Growth Rate" value="+28.4%" trend="+5.2%" trendDirection="up" />
                <x-aura::stat label="Error Rate" value="0.04%" trend="-0.12%" trendDirection="down" />
                <x-aura::stat label="System Uptime" value="99.98%" trend="Stable" trendDirection="neutral" />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::stat label="Growth Rate" value="+28.4%" trend="+5.2%" trendDirection="up" /&gt;
&lt;x-aura::stat label="Error Rate" value="0.04%" trend="-0.12%" trendDirection="down" /&gt;
&lt;x-aura::stat label="System Uptime" value="99.98%" trend="Stable" trendDirection="neutral" /&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>

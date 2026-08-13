<?php

use function Livewire\Volt\{layout, title};

layout('livewire.layout.component');
title('Stat Card - Aura Wire');

?>

<div class="w-full max-w-4xl mx-auto space-y-10 flex flex-col items-center justify-center">
    <!-- Header -->
    <x-aura::card >
        <div class="space-y-2 max-w-2xl">
            <div class="flex items-center gap-2.5">
                <x-aura::kicker>Display</x-aura::kicker>
                <x-aura::badge variant="subtle" size="sm">Component</x-aura::badge>
            </div>
            <x-aura::heading level="1" size="xl">Stat Card</x-aura::heading>
            <x-aura::subheading size="md">
                KPI metric display cards with values, labels, trend status badges, and icon indicators.
            </x-aura::subheading>
        </div>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code" >
        <x-slot:codeSlot>@verbatim<x-aura::stat label="Total Revenue" value="$48,290" trend="+14.2%" trendDirection="up" icon="trending-up" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 1. Stat Cards Grid -->
    <x-aura::code  title="1. Dashboard Metric KPI Cards">
        <x-slot:preview>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 w-full">
                <x-aura::stat label="Total Revenue" value="$48,290" trend="+14.2%" trendDirection="up" description="vs previous month" icon="trending-up" />
                <x-aura::stat label="Active Users" value="2,840" trend="+8.1%" trendDirection="up" description="vs previous week" icon="users" />
                <x-aura::stat label="Bounce Rate" value="24.1%" trend="-2.4%" trendDirection="down" description="vs target" icon="activity" />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::stat label="Total Revenue" value="$48,290" trend="+14.2%" trendDirection="up" description="vs previous month" icon="trending-up" />
<x-aura::stat label="Active Users" value="2,840" trend="+8.1%" trendDirection="up" description="vs previous week" icon="users" />
<x-aura::stat label="Bounce Rate" value="24.1%" trend="-2.4%" trendDirection="down" description="vs target" icon="activity" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Trend Status Variants -->
    <x-aura::code  title="2. Trend Directions (up, down, neutral)">
        <x-slot:preview>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 w-full">
                <x-aura::stat label="Growth Rate" value="+28.4%" trend="+5.2%" trendDirection="up" />
                <x-aura::stat label="Error Rate" value="0.04%" trend="-0.12%" trendDirection="down" />
                <x-aura::stat label="System Uptime" value="99.98%" trend="Stable" trendDirection="neutral" />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::stat label="Growth Rate" value="+28.4%" trend="+5.2%" trendDirection="up" />
<x-aura::stat label="Error Rate" value="0.04%" trend="-0.12%" trendDirection="down" />
<x-aura::stat label="System Uptime" value="99.98%" trend="Stable" trendDirection="neutral" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>
</div>

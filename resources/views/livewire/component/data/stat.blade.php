<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Stat - Aura Wire')] 
class extends Component {};

?>

<x-aura::stack gap="10" class="w-full max-w-4xl mx-auto py-2">
    <!-- Header -->
    <x-aura::card>
        <x-aura::stack gap="2" class="max-w-2xl">
            <x-aura::flex align="center" gap="2.5">
                <x-aura::kicker>Data</x-aura::kicker>
                <x-aura::badge variant="subtle" size="md">Component</x-aura::badge>
            </x-aura::flex>
            <x-aura::heading level="1" size="xl">Stat</x-aura::heading>
            <x-aura::subheading size="md">
                Dashboard metric and KPI stat cards featuring headline values, trend badges, contextual descriptions, icon accents, and custom slot projections.
            </x-aura::subheading>
        </x-aura::stack>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">
        <x-slot:codeSlot>@verbatim<x-aura::stat label="Total Revenue" value="$48,290.00" trend="+14.2%" trendDirection="up" icon="trending-up" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 1. Dashboard Metric KPI Cards Grid -->
    <x-aura::code title="1. Dashboard Metric KPI Cards Grid">
        <x-slot:preview>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 w-full">
                <x-aura::stat
                    label="Total Revenue"
                    value="$48,290.00"
                    trend="+14.2%"
                    trendDirection="up"
                    description="vs. last month"
                    icon="trending-up"
                />
                <x-aura::stat
                    label="Active Subscriptions"
                    value="2,840"
                    trend="+8.1%"
                    trendDirection="up"
                    description="+212 this week"
                    icon="users"
                />
                <x-aura::stat
                    label="Avg. Churn Rate"
                    value="1.8%"
                    trend="-0.4%"
                    trendDirection="down"
                    description="Industry target 2.5%"
                    icon="activity"
                />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<div class="grid grid-cols-1 md:grid-cols-3 gap-4">
    <x-aura::stat
        label="Total Revenue"
        value="$48,290.00"
        trend="+14.2%"
        trendDirection="up"
        description="vs. last month"
        icon="trending-up"
    />

    <x-aura::stat
        label="Active Subscriptions"
        value="2,840"
        trend="+8.1%"
        trendDirection="up"
        description="+212 this week"
        icon="users"
    />

    <x-aura::stat
        label="Avg. Churn Rate"
        value="1.8%"
        trend="-0.4%"
        trendDirection="down"
        description="Industry target 2.5%"
        icon="activity"
    />
</div>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Trend Directions (up, down, neutral) -->
    <x-aura::code title="2. Trend Directions (up, down, neutral)">
        <x-slot:preview>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 w-full">
                <x-aura::stat
                    label="Weekly Signups"
                    value="1,420"
                    trend="+18.5%"
                    trendDirection="up"
                    description="Compared to 1,198 last week"
                />
                <x-aura::stat
                    label="API Error Rate"
                    value="0.04%"
                    trend="-0.12%"
                    trendDirection="down"
                    description="99.96% success rate"
                />
                <x-aura::stat
                    label="System Latency"
                    value="38ms"
                    trend="Stable"
                    trendDirection="neutral"
                    description="Average p95 response time"
                />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
    {{-- Positive Up Trend --}}
    <x-aura::stat
        label="Weekly Signups"
        value="1,420"
        trend="+18.5%"
        trendDirection="up"
        description="Compared to 1,198 last week"
    />

    {{-- Negative Down Trend --}}
    <x-aura::stat
        label="API Error Rate"
        value="0.04%"
        trend="-0.12%"
        trendDirection="down"
        description="99.96% success rate"
    />

    {{-- Neutral Status --}}
    <x-aura::stat
        label="System Latency"
        value="38ms"
        trend="Stable"
        trendDirection="neutral"
        description="Average p95 response time"
    />
</div>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 3. Stat Cards with Custom Slot & Actions -->
    <x-aura::code title="3. Custom Slot & Nested Actions">
        <x-slot:preview>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 w-full">
                <x-aura::stat
                    label="Storage Capacity"
                    value="784.2 GB"
                    trend="78% used"
                    trendDirection="neutral"
                    icon="hard-drive"
                >
                    <div class="space-y-2">
                        <x-aura::progress-bar :percent="78" size="sm" />
                        <div class="flex items-center justify-between text-xs text-zinc-500 dark:text-zinc-400">
                            <span>784 GB of 1 TB Used</span>
                            <x-aura::link href="#">Upgrade</x-aura::link>
                        </div>
                    </div>
                </x-aura::stat>

                <x-aura::stat
                    label="Monthly Cloud Spend"
                    value="$3,410.00"
                    trend="+6.4%"
                    trendDirection="up"
                    icon="credit-card"
                >
                    <div class="flex items-center justify-between">
                        <x-aura::text size="xs" variant="subtle">Next invoice: Sep 1, 2026</x-aura::text>
                        <x-aura::link href="#">View invoices</x-aura::link>
                    </div>
                </x-aura::stat>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::stat
    label="Storage Capacity"
    value="784.2 GB"
    trend="78% used"
    trendDirection="neutral"
    icon="hard-drive"
>
    <div class="space-y-2">
        <x-aura::progress-bar :percent="78" size="sm" />
        <div class="flex items-center justify-between text-xs text-zinc-500">
            <span>784 GB of 1 TB Used</span>
            <x-aura::link href="#">Upgrade</x-aura::link>
        </div>
    </div>
</x-aura::stat>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 4. Minimal Metric Strip -->
    <x-aura::code title="4. Minimal Compact Metric Strip">
        <x-slot:preview>
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 w-full">
                <x-aura::stat label="Total Views" value="128.4K" />
                <x-aura::stat label="Conversions" value="4,821" />
                <x-aura::stat label="Avg. Order" value="$64.20" />
                <x-aura::stat label="Refunds" value="0.2%" />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<div class="grid grid-cols-2 sm:grid-cols-4 gap-3">
    <x-aura::stat label="Total Views" value="128.4K" />
    <x-aura::stat label="Conversions" value="4,821" />
    <x-aura::stat label="Avg. Order" value="$64.20" />
    <x-aura::stat label="Refunds" value="0.2%" />
</div>@endverbatim</x-slot:codeSlot>
    </x-aura::code>
</x-aura::stack>

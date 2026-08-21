<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Stat — Aura Wire')] 
class extends Component {};

?>

<x-aura::container gap="8" :padding="false">

    <!-- Header -->
    <x-aura::card size="full" gap="2">

        <x-aura::flex align="center" gap="2.5">

            <x-aura::kicker>
                Data
            </x-aura::kicker>

            <x-aura::badge variant="subtle" size="md">
                Component
            </x-aura::badge>

        </x-aura::flex>

        <x-aura::heading level="1" size="xl">
            Stat
        </x-aura::heading>

        <x-aura::subheading size="md">
            Dashboard metric and KPI stat cards featuring headline values, trend badges, contextual descriptions, and icon accents.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::stat
                    label="Total Revenue"
                    value="$48,290.00"
                    trend="+14.2%"
                    trendDirection="up"
                    icon="trending-up"
                />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Metric KPI Cards with Trends -->
    <x-aura::code title="1. Metric KPI Cards with Trends">

        <x-slot:preview>

            <x-aura::grid cols="1" sm="2" gap="4">

                <x-aura::stat
                    label="Total Revenue"
                    value="$48,290.00"
                    trend="+14.2%"
                    trendDirection="up"
                    description="vs last month"
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

            </x-aura::grid>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::grid cols="1" sm="2" gap="4">
                    <x-aura::stat
                        label="Total Revenue"
                        value="$48,290.00"
                        trend="+14.2%"
                        trendDirection="up"
                        description="vs last month"
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
                </x-aura::grid>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Downward and Neutral Trends -->
    <x-aura::code title="2. Downward and Neutral Trends">

        <x-slot:preview>

            <x-aura::grid cols="1" sm="2" gap="4">

                <x-aura::stat
                    label="Server Latency"
                    value="142ms"
                    trend="-18.4%"
                    trendDirection="down"
                    description="faster response time"
                    icon="activity"
                />

                <x-aura::stat
                    label="Storage Quota"
                    value="78.2 GB"
                    trend="0.0%"
                    trendDirection="neutral"
                    description="unchanged today"
                    icon="database"
                />

            </x-aura::grid>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::grid cols="1" sm="2" gap="4">
                    <x-aura::stat
                        label="Server Latency"
                        value="142ms"
                        trend="-18.4%"
                        trendDirection="down"
                        description="faster response time"
                        icon="activity"
                    />

                    <x-aura::stat
                        label="Storage Quota"
                        value="78.2 GB"
                        trend="0.0%"
                        trendDirection="neutral"
                        description="unchanged today"
                        icon="database"
                    />
                </x-aura::grid>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 3. Minimal Metrics Without Trends -->
    <x-aura::code title="3. Minimal Metric Cards">

        <x-slot:preview>

            <x-aura::grid cols="1" sm="3" gap="4">

                <x-aura::stat
                    label="Cluster Nodes"
                    value="16 Online"
                    icon="server"
                />

                <x-aura::stat
                    label="API Uptime"
                    value="99.99%"
                    icon="shield-check"
                />

                <x-aura::stat
                    label="Open Tickets"
                    value="4"
                    icon="message-square"
                />

            </x-aura::grid>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::grid cols="1" sm="3" gap="4">
                    <x-aura::stat
                        label="Cluster Nodes"
                        value="16 Online"
                        icon="server"
                    />

                    <x-aura::stat
                        label="API Uptime"
                        value="99.99%"
                        icon="shield-check"
                    />

                    <x-aura::stat
                        label="Open Tickets"
                        value="4"
                        icon="message-square"
                    />
                </x-aura::grid>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 4. Real World Analytics Overview Strip -->
    <x-aura::code title="4. Real World Analytics Overview Strip">

        <x-slot:preview>

            <x-aura::card padding="xl" gap="6">

                <x-aura::flex align="center" justify="between">

                    <x-aura::flex direction="col" gap="none">

                        <x-aura::kicker>
                            Quarterly Overview
                        </x-aura::kicker>

                        <x-aura::heading level="2" size="lg">
                            Financial Health
                        </x-aura::heading>

                    </x-aura::flex>

                    <x-aura::badge variant="neutral" size="sm">
                        Q3 Live Metrics
                    </x-aura::badge>

                </x-aura::flex>

                <x-aura::grid cols="1" sm="2" lg="4" gap="4">

                    <x-aura::stat
                        label="Gross Revenue"
                        value="$124,500"
                        trend="+22.4%"
                        trendDirection="up"
                        description="vs Q2 target"
                        icon="dollar-sign"
                    />

                    <x-aura::stat
                        label="Orders Processed"
                        value="1,842"
                        trend="+12.0%"
                        trendDirection="up"
                        description="+140 this week"
                        icon="shopping-bag"
                    />

                    <x-aura::stat
                        label="Refund Rate"
                        value="0.84%"
                        trend="-0.2%"
                        trendDirection="down"
                        description="below threshold"
                        icon="rotate-ccw"
                    />

                    <x-aura::stat
                        label="Avg Order Value"
                        value="$67.58"
                        trend="+4.3%"
                        trendDirection="up"
                        description="steady growth"
                        icon="trending-up"
                    />

                </x-aura::grid>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::card padding="xl" gap="6">
                    <x-aura::flex align="center" justify="between">
                        <x-aura::heading level="2" size="lg">
                            Financial Health
                        </x-aura::heading>

                        <x-aura::badge variant="neutral" size="sm">
                            Q3 Live Metrics
                        </x-aura::badge>
                    </x-aura::flex>

                    <x-aura::grid cols="1" sm="2" lg="4" gap="4">
                        <x-aura::stat
                            label="Gross Revenue"
                            value="$124,500"
                            trend="+22.4%"
                            trendDirection="up"
                            description="vs Q2 target"
                            icon="dollar-sign"
                        />

                        <x-aura::stat
                            label="Orders Processed"
                            value="1,842"
                            trend="+12.0%"
                            trendDirection="up"
                            description="+140 this week"
                            icon="shopping-bag"
                        />

                        <x-aura::stat
                            label="Refund Rate"
                            value="0.84%"
                            trend="-0.2%"
                            trendDirection="down"
                            description="below threshold"
                            icon="rotate-ccw"
                        />

                        <x-aura::stat
                            label="Avg Order Value"
                            value="$67.58"
                            trend="+4.3%"
                            trendDirection="up"
                            description="steady growth"
                            icon="trending-up"
                        />
                    </x-aura::grid>
                </x-aura::card>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- Component Props -->
    <x-aura::card size="full" gap="4">

        <x-aura::flex direction="col" gap="1">

            <x-aura::heading level="2" size="md">
                Component Props
            </x-aura::heading>

            <x-aura::text variant="subtle" size="sm">
                Available properties and configurations for the stat metric component.
            </x-aura::text>

        </x-aura::flex>

        <x-aura::table>

            <x-slot:header>

                <x-aura::table.column>
                    Prop
                </x-aura::table.column>

                <x-aura::table.column>
                    Default
                </x-aura::table.column>

                <x-aura::table.column>
                    Available Values
                </x-aura::table.column>

            </x-slot:header>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            label
                        </x-aura::text>

                        <x-aura::tooltip text="Category or metric label rendered at the top of the card" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="subtle" size="md">
                        null
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::text size="sm" variant="subtle">
                        Label string
                    </x-aura::text>
                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            value
                        </x-aura::text>

                        <x-aura::tooltip text="Primary headline metric KPI value" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="subtle" size="md">
                        null
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::text size="sm" variant="subtle">
                        Numeric or formatted string (e.g. $48,290.00)
                    </x-aura::text>
                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            trend
                        </x-aura::text>

                        <x-aura::tooltip text="Change percentage or delta string badge" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="subtle" size="md">
                        null
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::text size="sm" variant="subtle">
                        Delta percentage string (e.g. +14.2%, -3.8%)
                    </x-aura::text>
                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            trendDirection
                        </x-aura::text>

                        <x-aura::tooltip text="Semantic intent color and arrow indicator direction" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        up
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

                        <x-aura::badge variant="subtle" size="md">
                            up
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            down
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            neutral
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            description
                        </x-aura::text>

                        <x-aura::tooltip text="Contextual comparison baseline description text" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="subtle" size="md">
                        null
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::text size="sm" variant="subtle">
                        Description string (e.g. vs last month)
                    </x-aura::text>
                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            icon
                        </x-aura::text>

                        <x-aura::tooltip text="Accent Lucide icon displayed in top right" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="subtle" size="md">
                        null
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::text size="sm" variant="subtle">
                        Icon name string
                    </x-aura::text>
                </x-aura::table.cell>

            </x-aura::table.row>

        </x-aura::table>

    </x-aura::card>

</x-aura::container>

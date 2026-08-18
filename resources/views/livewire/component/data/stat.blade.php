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

            <x-aura::badge variant="subtle" size="sm">
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

    <!-- 1. Dashboard Metric Grid -->
    <x-aura::code title="1. Metric KPI Cards">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex align="center" gap="4" class="w-full flex-wrap sm:flex-nowrap">

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

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
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
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>

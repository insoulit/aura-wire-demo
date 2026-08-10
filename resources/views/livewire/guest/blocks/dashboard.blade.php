<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('layouts.guest')] 
#[Title('Dashboard Widgets Block — Guest Portal | Aura Wire')] 
class extends Component {};

?>

<div class="w-full max-w-4xl mx-auto space-y-10 flex flex-col items-center justify-center py-6">
    <!-- Header -->
    <div class="space-y-3 text-center flex flex-col items-center">
        <x-aura::kicker>Guest Portal Design Blocks</x-aura::kicker>
        <x-aura::heading level="1" size="lg">Dashboard Widgets Block</x-aura::heading>
        <x-aura::subheading class="max-w-lg">
            Analytics KPI widgets, operational metric gauges, and activity stream panels.
        </x-aura::subheading>
    </div>

    <!-- Dashboard Widgets Block -->
    <x-aura::code class="w-full" title="Analytics &amp; Server Health Dashboard Block">
        <x-slot:preview>
            <div class="space-y-6 w-full">
                <!-- 3 Metric Summary Cards -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <x-aura::card class="space-y-2">
                        <x-aura::kicker>Gross Monthly Sales</x-aura::kicker>
                        <p class="text-2xl font-black font-mono tracking-tight text-zinc-900 dark:text-white">$84,120.00</p>
                        <x-aura::badge variant="positive" size="sm">+18.4% vs last month</x-aura::badge>
                    </x-aura::card>

                    <x-aura::card class="space-y-2">
                        <x-aura::kicker>Active Team Members</x-aura::kicker>
                        <p class="text-2xl font-black font-mono tracking-tight text-zinc-900 dark:text-white">42 Active</p>
                        <div class="flex items-center gap-1.5 pt-1">
                            <x-aura::avatar initials="AM" status="online" size="xs" />
                            <x-aura::avatar initials="SC" status="online" size="xs" />
                            <x-aura::avatar initials="RK" status="away" size="xs" />
                        </div>
                    </x-aura::card>

                    <x-aura::card class="space-y-2">
                        <x-aura::kicker>Cluster Infrastructure</x-aura::kicker>
                        <p class="text-2xl font-black font-mono tracking-tight text-emerald-600 dark:text-emerald-400">99.98% SLA</p>
                        <x-aura::badge variant="positive" size="sm">All Systems Operational</x-aura::badge>
                    </x-aura::card>
                </div>

                <!-- Server Resource Gauge Card -->
                <x-aura::card title="Infrastructure Load &amp; Capacity">
                    <div class="space-y-4 pt-1">
                        <div>
                            <div class="flex justify-between text-xs font-bold mb-1">
                                <span>CPU Cluster Utilization</span>
                                <span class="font-mono text-emerald-600">38%</span>
                            </div>
                            <x-aura::progress-bar percent="38" variant="emerald" size="md" />
                        </div>
                        <div>
                            <div class="flex justify-between text-xs font-bold mb-1">
                                <span>Memory (RAM) Quota</span>
                                <span class="font-mono text-amber-600">72%</span>
                            </div>
                            <x-aura::progress-bar percent="72" variant="amber" size="md" />
                        </div>
                    </div>
                    <x-slot name="footer">
                        <x-aura::button variant="ghost" size="sm">System Logs</x-aura::button>
                        <x-aura::button variant="primary" size="sm">Scale Node</x-aura::button>
                    </x-slot>
                </x-aura::card>
            </div>
        </x-slot:preview>
        <x-slot name="codeSlot">&lt;div class="grid grid-cols-3 gap-4"&gt;
    &lt;x-aura::card&gt;Metrics&lt;/x-aura::card&gt;
&lt;/div&gt;</x-slot>
    </x-aura::code>
</div>

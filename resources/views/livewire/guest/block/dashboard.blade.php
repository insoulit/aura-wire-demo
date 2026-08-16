<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.app')] 
#[Title('Dashboard Widgets — Guest Portal | Aura Wire')] 
class extends Component {};

?>

<div class="w-full max-w-4xl mx-auto space-y-4 py-6">
    <!-- Top Header -->
    <div class="space-y-1 px-1">
        <div class="flex items-center justify-between gap-4">
            <div>
                <x-aura::kicker>Design Blocks</x-aura::kicker>
                <x-aura::heading level="1" size="lg">Dashboard Widgets</x-aura::heading>
            </div>
            <x-aura::button href="/guest#design-block" variant="subtle" size="sm" >
                <x-aura::icon name="arrow-left"  size="xs" />
                <span>Back</span>
            </x-aura::button>
        </div>
    </div>

    <!-- Dashboard Widgets Block -->
    <x-aura::code  title="Analytics &amp; Server Health Dashboard Block">
        <x-slot:preview>
            <div class="space-y-6 w-full">
                <!-- 3 Metric Summary Cards -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <x-aura::card >
                        <x-aura::kicker>Gross Monthly Sales</x-aura::kicker>
                        <p class="text-2xl font-black font-mono tracking-tight text-zinc-900 dark:text-white">$84,120.00</p>
                        <x-aura::tag variant="success" size="sm">+18.4%</x-aura::tag>
                    </x-aura::card>

                    <x-aura::card >
                        <x-aura::kicker>Active Team Members</x-aura::kicker>
                        <p class="text-2xl font-black font-mono tracking-tight text-zinc-900 dark:text-white">42 Active</p>
                        <div class="flex items-center gap-1.5 pt-1">
                            <x-aura::avatar initials="AM" status="online" size="xs" />
                            <x-aura::avatar initials="SC" status="online" size="xs" />
                            <x-aura::avatar initials="RK" status="away" size="xs" />
                        </div>
                    </x-aura::card>

                    <x-aura::card >
                        <x-aura::kicker>Cluster Infrastructure</x-aura::kicker>
                        <p class="text-2xl font-black font-mono tracking-tight text-zinc-900 dark:text-white">99.98% SLA</p>
                        <x-aura::tag variant="success" size="sm">Operational</x-aura::tag>
                    </x-aura::card>
                </div>

                <!-- Server Resource Gauge Card -->
                <x-aura::card title="Infrastructure Load &amp; Capacity">
                    <div class="space-y-4 pt-1">
                        <div>
                            <div class="flex justify-between text-xs font-bold mb-1.5 text-zinc-900 dark:text-white">
                                <span>CPU Cluster Utilization</span>
                                <span class="font-mono text-zinc-500 dark:text-zinc-400">38%</span>
                            </div>
                            <x-aura::progress-bar percent="38" size="md" />
                        </div>
                        <div>
                            <div class="flex justify-between text-xs font-bold mb-1.5 text-zinc-900 dark:text-white">
                                <span>Memory (RAM) Quota</span>
                                <span class="font-mono text-zinc-500 dark:text-zinc-400">72%</span>
                            </div>
                            <x-aura::progress-bar percent="72" variant="subtle" size="md" />
                        </div>
                    </div>
                    <x-slot name="footer">
                        <x-aura::button variant="subtle" size="sm"><span>Logs</span></x-aura::button>
                        <x-aura::button variant="primary" size="sm"><span>Scale</span></x-aura::button>
                    </x-slot>
                </x-aura::card>
            </div>
        </x-slot:preview>
        <x-slot name="codeSlot">&lt;div class="space-y-6 w-full"&gt;
    &lt;!-- 3 Metric Summary Cards --&gt;
    &lt;div class="grid grid-cols-1 sm:grid-cols-3 gap-4"&gt;
        &lt;x-aura::card class="space-y-2"&gt;
            &lt;x-aura::kicker&gt;Gross Monthly Sales&lt;/x-aura::kicker&gt;
            &lt;p class="text-2xl font-black font-mono text-zinc-900 dark:text-white"&gt;$84,120.00&lt;/p&gt;
            &lt;x-aura::tag variant="success" size="sm"&gt;+18.4%&lt;/x-aura::tag&gt;
        &lt;/x-aura::card&gt;

        &lt;x-aura::card class="space-y-2"&gt;
            &lt;x-aura::kicker&gt;Active Team Members&lt;/x-aura::kicker&gt;
            &lt;p class="text-2xl font-black font-mono text-zinc-900 dark:text-white"&gt;42 Active&lt;/p&gt;
            &lt;div class="flex items-center gap-1.5"&gt;
                &lt;x-aura::avatar initials="AM" status="online" size="xs" /&gt;
                &lt;x-aura::avatar initials="SC" status="online" size="xs" /&gt;
            &lt;/div&gt;
        &lt;/x-aura::card&gt;

        &lt;x-aura::card class="space-y-2"&gt;
            &lt;x-aura::kicker&gt;Cluster Infrastructure&lt;/x-aura::kicker&gt;
            &lt;p class="text-2xl font-black font-mono text-zinc-900 dark:text-white"&gt;99.98% SLA&lt;/p&gt;
            &lt;x-aura::tag variant="success" size="sm"&gt;Operational&lt;/x-aura::tag&gt;
        &lt;/x-aura::card&gt;
    &lt;/div&gt;

    &lt;!-- Capacity Card --&gt;
    &lt;x-aura::card title="Infrastructure Load &amp;amp; Capacity"&gt;
        &lt;div class="space-y-4"&gt;
            &lt;div&gt;
                &lt;div class="flex justify-between text-xs font-bold mb-1"&gt;
                    &lt;span&gt;CPU Cluster Utilization&lt;/span&gt;
                    &lt;span class="font-mono text-zinc-500"&gt;38%&lt;/span&gt;
                &lt;/div&gt;
                &lt;x-aura::progress-bar percent="38" size="md" /&gt;
            &lt;/div&gt;
            &lt;div&gt;
                &lt;div class="flex justify-between text-xs font-bold mb-1"&gt;
                    &lt;span&gt;Memory (RAM) Quota&lt;/span&gt;
                    &lt;span class="font-mono text-zinc-500"&gt;72%&lt;/span&gt;
                &lt;/div&gt;
                &lt;x-aura::progress-bar percent="72" variant="subtle" size="md" /&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;x-slot name="footer"&gt;
            &lt;x-aura::button variant="subtle" size="sm"&gt;System Logs&lt;/x-aura::button&gt;
            &lt;x-aura::button variant="primary" size="sm"&gt;Scale Node&lt;/x-aura::button&gt;
        &lt;/x-slot&gt;
    &lt;/x-aura::card&gt;
&lt;/div&gt;</x-slot>
    </x-aura::code>
</div>

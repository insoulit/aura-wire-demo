<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.app')] 
#[Title('Dashboard Widgets — Guest Portal | Aura Wire')] 
class extends Component {};

?>

<x-aura::stack gap="4" class="w-full max-w-4xl mx-auto py-6">

    <!-- Top Header -->
    <div class="px-1">

        <x-aura::flex align="center" justify="between" gap="4">

            <div>

                <x-aura::kicker>Design Blocks</x-aura::kicker>

                <x-aura::heading level="1" size="lg">Dashboard Widgets</x-aura::heading>

            </div>

            <x-aura::button href="/guest#design-block" variant="subtle" size="sm" icon="arrow-left">
                Back
            </x-aura::button>

        </x-aura::flex>

    </div>

    <!-- Dashboard Widgets Block -->
    <x-aura::code title="Analytics and Server Health Dashboard Block">

        <x-slot:preview>

            <div class="space-y-6 w-full">

                <!-- 3 Metric Summary Cards -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">

                    <x-aura::card>

                        <x-aura::kicker>Gross Monthly Sales</x-aura::kicker>

                        <span class="text-2xl font-black font-mono tracking-tight text-zinc-900 dark:text-white">$84,120.00</span>

                        <div class="pt-1">

                            <x-aura::tag variant="success" size="sm">+18.4%</x-aura::tag>

                        </div>

                    </x-aura::card>

                    <x-aura::card>

                        <x-aura::kicker>Active Team Members</x-aura::kicker>

                        <span class="text-2xl font-black font-mono tracking-tight text-zinc-900 dark:text-white">42 Active</span>

                        <div class="flex items-center gap-1.5 pt-1">

                            <x-aura::avatar initials="AM" status="online" size="xs" />

                            <x-aura::avatar initials="SC" status="online" size="xs" />

                            <x-aura::avatar initials="RK" status="away" size="xs" />

                        </div>

                    </x-aura::card>

                    <x-aura::card>

                        <x-aura::kicker>Cluster Infrastructure</x-aura::kicker>

                        <span class="text-2xl font-black font-mono tracking-tight text-zinc-900 dark:text-white">99.98% SLA</span>

                        <div class="pt-1">

                            <x-aura::tag variant="success" size="sm">Operational</x-aura::tag>

                        </div>

                    </x-aura::card>

                </div>

                <!-- Server Resource Gauge Card -->
                <x-aura::card title="Infrastructure Load and Capacity">

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

                                <span>Memory Quota</span>

                                <span class="font-mono text-zinc-500 dark:text-zinc-400">72%</span>

                            </div>

                            <x-aura::progress-bar percent="72" variant="subtle" size="md" />

                        </div>

                    </div>

                    <x-slot name="footer">

                        <x-aura::button variant="subtle" size="sm">
                            Logs
                        </x-aura::button>

                        <x-aura::button variant="primary" size="sm">
                            Scale
                        </x-aura::button>

                    </x-slot>

                </x-aura::card>

            </div>

        </x-slot:preview>

        <x-slot name="codeSlot">@verbatim<div class="space-y-6 w-full">
    <!-- 3 Metric Summary Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
        <x-aura::card>
            <x-aura::kicker>Gross Monthly Sales</x-aura::kicker>
            <span class="text-2xl font-black font-mono text-zinc-900 dark:text-white">$84,120.00</span>
            <x-aura::tag variant="success" size="sm">+18.4%</x-aura::tag>
        </x-aura::card>

        <x-aura::card>
            <x-aura::kicker>Active Team Members</x-aura::kicker>
            <span class="text-2xl font-black font-mono text-zinc-900 dark:text-white">42 Active</span>
            <div class="flex items-center gap-1.5">
                <x-aura::avatar initials="AM" status="online" size="xs" />
                <x-aura::avatar initials="SC" status="online" size="xs" />
            </div>
        </x-aura::card>

        <x-aura::card>
            <x-aura::kicker>Cluster Infrastructure</x-aura::kicker>
            <span class="text-2xl font-black font-mono text-zinc-900 dark:text-white">99.98% SLA</span>
            <x-aura::tag variant="success" size="sm">Operational</x-aura::tag>
        </x-aura::card>
    </div>

    <!-- Capacity Card -->
    <x-aura::card title="Infrastructure Load and Capacity">
        <div class="space-y-4">
            <div>
                <div class="flex justify-between text-xs font-bold mb-1">
                    <span>CPU Cluster Utilization</span>
                    <span class="font-mono text-zinc-500">38%</span>
                </div>
                <x-aura::progress-bar percent="38" size="md" />
            </div>
            <div>
                <div class="flex justify-between text-xs font-bold mb-1">
                    <span>Memory Quota</span>
                    <span class="font-mono text-zinc-500">72%</span>
                </div>
                <x-aura::progress-bar percent="72" variant="subtle" size="md" />
            </div>
        </div>
        <x-slot name="footer">
            <x-aura::button variant="subtle" size="sm">Logs</x-aura::button>
            <x-aura::button variant="primary" size="sm">Scale</x-aura::button>
        </x-slot>
    </x-aura::card>
</div>@endverbatim</x-slot>

    </x-aura::code>

</x-aura::stack>

<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.app')] 
#[Title('Dashboard Widgets — Guest Portal | Aura Wire')] 
class extends Component {};

?>

<x-aura::container size="4xl" gap="6" class="py-6">

    <!-- Top Header -->
    <x-aura::flex justify="between" gap="4">

        <x-aura::flex direction="col" gap="none">

            <x-aura::kicker>
                Design Blocks
            </x-aura::kicker>

            <x-aura::heading level="1" size="lg">
                Dashboard Widgets
            </x-aura::heading>

        </x-aura::flex>

        <x-aura::flex justify="end" gap="2">

            <x-aura::button href="/guest#design-block" wire:navigate variant="secondary" size="sm" icon="arrow-left">
                Back
            </x-aura::button>

        </x-aura::flex>

    </x-aura::flex>

    <!-- Dashboard Widgets Block -->
    <x-aura::code title="Analytics and Server Health Dashboard Block">

        <x-slot:preview>

            <x-aura::flex direction="col" gap="6" class="w-full">

                <!-- 3 Metric Summary Cards -->
                <x-aura::grid cols="1" sm="3" gap="4">

                    <x-aura::card gap="2">

                        <x-aura::kicker>
                            Gross Monthly Sales
                        </x-aura::kicker>

                        <x-aura::heading level="3" size="lg" class="font-mono">
                            $84,120.00
                        </x-aura::heading>

                        <x-aura::flex align="center" gap="1" class="pt-1">

                            <x-aura::tag variant="neutral" size="sm">
                                +18.4%
                            </x-aura::tag>

                        </x-aura::flex>

                    </x-aura::card>

                    <x-aura::card gap="2">

                        <x-aura::kicker>
                            Active Team Members
                        </x-aura::kicker>

                        <x-aura::heading level="3" size="lg" class="font-mono">
                            42 Active
                        </x-aura::heading>

                        <x-aura::flex align="center" gap="1.5" class="pt-1">

                            <x-aura::avatar initials="AM" status="online" size="xs" />

                            <x-aura::avatar initials="SC" status="online" size="xs" />

                            <x-aura::avatar initials="RK" status="away" size="xs" />

                        </x-aura::flex>

                    </x-aura::card>

                    <x-aura::card gap="2">

                        <x-aura::kicker>
                            Cluster Infrastructure
                        </x-aura::kicker>

                        <x-aura::heading level="3" size="lg" class="font-mono">
                            99.98% SLA
                        </x-aura::heading>

                        <x-aura::flex align="center" gap="1" class="pt-1">

                            <x-aura::tag variant="neutral" size="sm">
                                Operational
                            </x-aura::tag>

                        </x-aura::flex>

                    </x-aura::card>

                </x-aura::grid>

                <!-- Server Resource Gauge Card -->
                <x-aura::card title="Infrastructure Load and Capacity">

                    <x-aura::flex direction="col" gap="4" class="pt-1">

                        <x-aura::flex direction="col" gap="1.5">

                            <x-aura::flex align="center" justify="between">

                                <x-aura::text size="sm" weight="semibold">
                                    CPU Cluster Utilization
                                </x-aura::text>

                                <x-aura::text size="sm" variant="subtle" class="font-mono">
                                    38%
                                </x-aura::text>

                            </x-aura::flex>

                            <x-aura::progress-bar percent="38" size="md" />

                        </x-aura::flex>

                        <x-aura::flex direction="col" gap="1.5">

                            <x-aura::flex align="center" justify="between">

                                <x-aura::text size="sm" weight="semibold">
                                    Memory Quota
                                </x-aura::text>

                                <x-aura::text size="sm" variant="subtle" class="font-mono">
                                    72%
                                </x-aura::text>

                            </x-aura::flex>

                            <x-aura::progress-bar percent="72" variant="subtle" size="md" />

                        </x-aura::flex>

                    </x-aura::flex>

                    <x-slot:footer>

                        <x-aura::button variant="secondary" size="sm">
                            Logs
                        </x-aura::button>

                        <x-aura::button variant="primary" size="sm">
                            Scale
                        </x-aura::button>

                    </x-slot:footer>

                </x-aura::card>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::flex direction="col" gap="6" class="w-full">
                    <!-- 3 Metric Summary Cards -->
                    <x-aura::grid cols="1" sm="3" gap="4">
                        <x-aura::card gap="2">
                            <x-aura::kicker>
                                Gross Monthly Sales
                            </x-aura::kicker>
                            <x-aura::heading level="3" size="lg" class="font-mono">
                                $84,120.00
                            </x-aura::heading>
                            <x-aura::tag variant="neutral" size="sm">
                                +18.4%
                            </x-aura::tag>
                        </x-aura::card>

                        <x-aura::card gap="2">
                            <x-aura::kicker>
                                Active Team Members
                            </x-aura::kicker>
                            <x-aura::heading level="3" size="lg" class="font-mono">
                                42 Active
                            </x-aura::heading>
                            <x-aura::flex align="center" gap="1.5">
                                <x-aura::avatar initials="AM" status="online" size="xs" />
                                <x-aura::avatar initials="SC" status="online" size="xs" />
                            </x-aura::flex>
                        </x-aura::card>

                        <x-aura::card gap="2">
                            <x-aura::kicker>
                                Cluster Infrastructure
                            </x-aura::kicker>
                            <x-aura::heading level="3" size="lg" class="font-mono">
                                99.98% SLA
                            </x-aura::heading>
                            <x-aura::tag variant="neutral" size="sm">
                                Operational
                            </x-aura::tag>
                        </x-aura::card>
                    </x-aura::grid>

                    <!-- Capacity Card -->
                    <x-aura::card title="Infrastructure Load and Capacity">
                        <x-aura::flex direction="col" gap="4">
                            <x-aura::flex direction="col" gap="1.5">
                                <x-aura::flex align="center" justify="between">
                                    <x-aura::text size="sm" weight="semibold">
                                        CPU Cluster Utilization
                                    </x-aura::text>
                                    <x-aura::text size="sm" variant="subtle" class="font-mono">
                                        38%
                                    </x-aura::text>
                                </x-aura::flex>
                                <x-aura::progress-bar percent="38" size="md" />
                            </x-aura::flex>

                            <x-aura::flex direction="col" gap="1.5">
                                <x-aura::flex align="center" justify="between">
                                    <x-aura::text size="sm" weight="semibold">
                                        Memory Quota
                                    </x-aura::text>
                                    <x-aura::text size="sm" variant="subtle" class="font-mono">
                                        72%
                                    </x-aura::text>
                                </x-aura::flex>
                                <x-aura::progress-bar percent="72" variant="subtle" size="md" />
                            </x-aura::flex>
                        </x-aura::flex>

                        <x-slot:footer>
                            <x-aura::button variant="secondary" size="sm">
                                Logs
                            </x-aura::button>

                            <x-aura::button variant="primary" size="sm">
                                Scale
                            </x-aura::button>
                        </x-slot:footer>
                    </x-aura::card>
                </x-aura::flex>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>

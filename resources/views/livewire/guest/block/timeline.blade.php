<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.app')] 
#[Title('Timeline — Guest Portal | Aura Wire')] 
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
                Timeline
            </x-aura::heading>

        </x-aura::flex>

        <x-aura::flex justify="end" gap="2">

            <x-aura::button href="/guest#design-block" wire:navigate variant="secondary" size="sm" icon="arrow-left">
                Back
            </x-aura::button>

        </x-aura::flex>

    </x-aura::flex>

    <!-- Timeline Block Preview -->
    <x-aura::code title="Deployment and Activity Log Stream Block">

        <x-slot:preview>

            <x-aura::card gap="4">

                <x-aura::flex align="center" justify="between">

                    <x-aura::kicker>
                        System Activity Stream
                    </x-aura::kicker>

                    <x-aura::tag variant="neutral" size="sm">
                        Live Feed
                    </x-aura::tag>

                </x-aura::flex>

                <div class="space-y-6 relative ml-3 pl-6 border-l border-zinc-200 dark:border-zinc-800">

                    <!-- Entry 1 -->
                    <div class="relative space-y-1">

                        <span class="absolute -left-[30px] top-1 h-2.5 w-2.5 rounded-full bg-zinc-900 dark:bg-white ring-4 ring-white dark:ring-zinc-900"></span>

                        <x-aura::flex direction="col" sm="row" align="start" smAlign="center" justify="between" gap="1">

                            <x-aura::heading level="3" size="sm">
                                v2.4.0 Deployed to Production
                            </x-aura::heading>

                            <x-aura::text variant="subtle" size="sm">
                                12 min ago
                            </x-aura::text>

                        </x-aura::flex>

                        <x-aura::text variant="subtle" size="sm">
                            Triggered by Alex Morgan via GitHub Webhook deployment pipeline.
                        </x-aura::text>

                    </div>

                    <!-- Entry 2 -->
                    <div class="relative space-y-1">

                        <span class="absolute -left-[30px] top-1 h-2.5 w-2.5 rounded-full bg-zinc-400 dark:bg-zinc-600 ring-4 ring-white dark:ring-zinc-900"></span>

                        <x-aura::flex direction="col" sm="row" align="start" smAlign="center" justify="between" gap="1">

                            <x-aura::heading level="3" size="sm">
                                SSL Certificate Auto Renewed
                            </x-aura::heading>

                            <x-aura::text variant="subtle" size="sm">
                                2 hours ago
                            </x-aura::text>

                        </x-aura::flex>

                        <x-aura::text variant="subtle" size="sm">
                            Let's Encrypt automated TLS certificate renewed for api.aurawire.io.
                        </x-aura::text>

                    </div>

                    <!-- Entry 3 -->
                    <div class="relative space-y-1">

                        <span class="absolute -left-[30px] top-1 h-2.5 w-2.5 rounded-full bg-zinc-300 dark:bg-zinc-700 ring-4 ring-white dark:ring-zinc-900"></span>

                        <x-aura::flex direction="col" sm="row" align="start" smAlign="center" justify="between" gap="1">

                            <x-aura::heading level="3" size="sm">
                                PostgreSQL Database Backup Snapshot
                            </x-aura::heading>

                            <x-aura::text variant="subtle" size="sm">
                                6 hours ago
                            </x-aura::text>

                        </x-aura::flex>

                        <x-aura::text variant="subtle" size="sm">
                            Daily automated cluster snapshot saved to encrypted S3 glacier vault.
                        </x-aura::text>

                    </div>

                </div>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::card gap="4">
                    <x-aura::flex align="center" justify="between">
                        <x-aura::kicker>
                            System Activity Stream
                        </x-aura::kicker>
                        <x-aura::tag variant="neutral" size="sm">
                            Live Feed
                        </x-aura::tag>
                    </x-aura::flex>

                    <div class="space-y-6 relative ml-3 pl-6 border-l border-zinc-200 dark:border-zinc-800">
                        <div class="relative space-y-1">
                            <span class="absolute -left-[30px] top-1 h-2.5 w-2.5 rounded-full bg-zinc-900 dark:bg-white"></span>
                            <div class="flex justify-between">
                                <x-aura::heading level="3" size="sm">
                                    v2.4.0 Deployed
                                </x-aura::heading>
                                <x-aura::text variant="subtle" size="sm">
                                    12 min ago
                                </x-aura::text>
                            </div>
                        </div>
                    </div>
                </x-aura::card>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>

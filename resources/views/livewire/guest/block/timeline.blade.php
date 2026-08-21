<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.app')] 
#[Title('Timeline — Guest Portal | Aura Wire')] 
class extends Component {};

?>

<x-aura::container size="4xl" gap="6">

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

            <x-aura::card gap="6">

                <x-aura::flex align="center" justify="between">

                    <x-aura::kicker>
                        System Activity Stream
                    </x-aura::kicker>

                    <x-aura::tag variant="neutral" size="sm">
                        Live Feed
                    </x-aura::tag>

                </x-aura::flex>

                <x-aura::timeline>

                    <x-aura::timeline.item title="v2.4.0 Deployed to Production" time="12 min ago" description="Triggered by Alex Morgan via GitHub Webhook deployment pipeline." variant="solid" icon="rocket" />

                    <x-aura::timeline.item title="SSL Certificate Auto Renewed" time="2 hours ago" description="Automated TLS certificate renewed for api.aurawire.io." variant="subtle" icon="shield-check" />

                    <x-aura::timeline.item title="PostgreSQL Database Backup Snapshot" time="6 hours ago" description="Daily automated cluster snapshot saved to encrypted S3 glacier vault." variant="subtle" icon="database" />

                </x-aura::timeline>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::card gap="6">
                    <x-aura::flex align="center" justify="between">
                        <x-aura::kicker>
                            System Activity Stream
                        </x-aura::kicker>

                        <x-aura::tag variant="neutral" size="sm">
                            Live Feed
                        </x-aura::tag>
                    </x-aura::flex>

                    <x-aura::timeline>
                        <x-aura::timeline.item 
                            title="v2.4.0 Deployed to Production" 
                            time="12 min ago" 
                            description="Triggered by Alex Morgan via GitHub Webhook deployment pipeline." 
                            variant="solid" 
                            icon="rocket" 
                        />

                        <x-aura::timeline.item 
                            title="SSL Certificate Auto Renewed" 
                            time="2 hours ago" 
                            description="Automated TLS certificate renewed for api.aurawire.io." 
                            variant="subtle" 
                            icon="shield-check" 
                        />

                        <x-aura::timeline.item 
                            title="PostgreSQL Database Backup Snapshot" 
                            time="6 hours ago" 
                            description="Daily automated cluster snapshot saved to encrypted S3 glacier vault." 
                            variant="subtle" 
                            icon="database" 
                        />
                    </x-aura::timeline>
                </x-aura::card>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>

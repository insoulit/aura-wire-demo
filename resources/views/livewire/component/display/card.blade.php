<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Card — Aura Wire')] 
class extends Component {};

?>

<x-aura::container gap="8" :padding="false">

    <!-- Header -->
    <x-aura::card size="full" gap="2">

        <x-aura::flex align="center" gap="2.5">

            <x-aura::kicker>
                Display
            </x-aura::kicker>

            <x-aura::badge variant="subtle" size="sm">
                Component
            </x-aura::badge>

        </x-aura::flex>

        <x-aura::heading level="1" size="xl">
            Card
        </x-aura::heading>

        <x-aura::subheading size="md">
            Versatile container cards with header, body, and action footer slots for dashboards, forms, and statistics.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::card>
                    <x-aura::heading level="3" size="md">
                        Card Title
                    </x-aura::heading>

                    <x-aura::text size="sm">
                        Card body content.
                    </x-aura::text>
                </x-aura::card>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Standard Header & Footer Card -->
    <x-aura::code title="1. Header and Action Footer Card">

        <x-slot:preview>

            <x-aura::card size="2xl" title="Project Statistics" description="Real time traffic and performance metrics.">

                <x-aura::flex direction="col" align="stretch" class="w-full" gap="2">

                    <x-aura::flex align="center" justify="between" class="w-full">

                        <x-aura::text size="sm" variant="subtle">
                            Total Unique Visitors
                        </x-aura::text>

                        <x-aura::text size="sm" variant="mono" weight="bold">
                            128,450
                        </x-aura::text>

                    </x-aura::flex>

                    <x-aura::flex align="center" justify="between" class="w-full">

                        <x-aura::text size="sm" variant="subtle">
                            Average Response Time
                        </x-aura::text>

                        <x-aura::text size="sm" variant="mono" weight="bold">
                            42 ms
                        </x-aura::text>

                    </x-aura::flex>

                </x-aura::flex>

                <x-slot:footer>

                    <x-aura::button variant="ghost" size="sm">
                        Logs
                    </x-aura::button>

                    <x-aura::button variant="primary" size="sm">
                        Export
                    </x-aura::button>

                </x-slot:footer>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::card size="2xl" title="Project Statistics" description="Real time traffic and performance metrics.">

                    <x-aura::flex direction="col" align="stretch" class="w-full" gap="2">

                        <x-aura::flex align="center" justify="between" class="w-full">

                            <x-aura::text size="sm" variant="subtle">
                                Total Unique Visitors
                            </x-aura::text>

                            <x-aura::text size="sm" variant="mono" weight="bold">
                                128,450
                            </x-aura::text>

                        </x-aura::flex>

                        <x-aura::flex align="center" justify="between" class="w-full">

                            <x-aura::text size="sm" variant="subtle">
                                Average Response Time
                            </x-aura::text>

                            <x-aura::text size="sm" variant="mono" weight="bold">
                                42 ms
                            </x-aura::text>

                        </x-aura::flex>

                    </x-aura::flex>

                    <x-slot:footer>

                        <x-aura::button variant="ghost" size="sm">
                            Logs
                        </x-aura::button>

                        <x-aura::button variant="primary" size="sm">
                            Export
                        </x-aura::button>

                    </x-slot:footer>

                </x-aura::card>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>

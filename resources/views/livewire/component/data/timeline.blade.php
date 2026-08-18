<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Timeline — Aura Wire')] 
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
            Timeline
        </x-aura::heading>

        <x-aura::subheading size="md">
            Chronological event history and activity timeline tracker with monochrome status badges, custom icons, and slot content.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::timeline>
                    <x-aura::timeline.item title="Package Released" time="Just now" variant="solid" description="Deployed updates." />
                </x-aura::timeline>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Deployment History -->
    <x-aura::code title="1. Deployment History">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::timeline>

                    <x-aura::timeline.item title="Package Released to Production" time="Just now" variant="solid" description="Deployed 11 new UI components to the suite." />

                    <x-aura::timeline.item title="Pull Request Merged" time="15 mins ago" variant="subtle" description="Approved and merged into main branch." />

                    <x-aura::timeline.item title="Automated Test Suite Passed" time="30 mins ago" variant="solid" description="Test suite passed with zero errors." />

                </x-aura::timeline>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::timeline>

                    <x-aura::timeline.item title="Package Released to Production" time="Just now" variant="solid" description="Deployed 11 new UI components to the suite." />

                    <x-aura::timeline.item title="Pull Request Merged" time="15 mins ago" variant="subtle" description="Approved and merged into main branch." />

                    <x-aura::timeline.item title="Automated Test Suite Passed" time="30 mins ago" variant="solid" description="Test suite passed with zero errors." />

                </x-aura::timeline>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>

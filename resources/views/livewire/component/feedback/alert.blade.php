<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Alert — Aura Wire')] 
class extends Component {};

?>

<x-aura::container gap="8" :padding="false">

    <!-- Header -->
    <x-aura::card size="full" gap="2">

        <x-aura::flex align="center" gap="2.5">

            <x-aura::kicker>
                Feedback
            </x-aura::kicker>

            <x-aura::badge variant="subtle" size="sm">
                Component
            </x-aura::badge>

        </x-aura::flex>

        <x-aura::heading level="1" size="xl">
            Alert
        </x-aura::heading>

        <x-aura::subheading size="md">
            Contextual feedback callouts for status updates, system warnings, product announcements, and inline notices.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::alert variant="info" title="System Notice" description="Maintenance scheduled." dismissible />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Status Alerts -->
    <x-aura::code title="1. Status Alerts">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex direction="col" align="stretch" class="w-full" gap="3">

                    <x-aura::alert variant="info" title="System Update" description="Server maintenance is planned for tonight at 02:00 UTC." dismissible />

                    <x-aura::alert variant="success" title="Payment Authorized" description="Your subscription auto renewed successfully." dismissible />

                    <x-aura::alert variant="warning" title="Storage Notice" description="You have used 92% of your available team storage." dismissible />

                    <x-aura::alert variant="danger" title="Deployment Failure" description="Build process exited with non zero status." dismissible />

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::alert variant="info" title="System Update" description="Server maintenance is planned for tonight at 02:00 UTC." dismissible />

                <x-aura::alert variant="success" title="Payment Authorized" description="Your subscription auto renewed successfully." dismissible />

                <x-aura::alert variant="warning" title="Storage Notice" description="You have used 92% of your available team storage." dismissible />

                <x-aura::alert variant="danger" title="Deployment Failure" description="Build process exited with non zero status." dismissible />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>

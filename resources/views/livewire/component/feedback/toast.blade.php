<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Toast — Aura Wire')] 
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
            Toast
        </x-aura::heading>

        <x-aura::subheading size="md">
            Temporary notification popups supporting status variants, dismiss triggers, and action buttons.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::toast variant="success" title="Changes Saved" description="Profile updated." />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Status Toast Varieties -->
    <x-aura::code title="1. Status Varieties">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex direction="col" align="stretch" class="w-full" gap="3">

                    <x-aura::toast variant="success" title="Project Published" description="Your project has been deployed." />

                    <x-aura::toast variant="info" title="Update Available" description="Aura Wire v2.4.0 is ready for installation." />

                    <x-aura::toast variant="warning" title="Rate Limit Warning" description="You have consumed 85% of your quota." />

                    <x-aura::toast variant="danger" title="Connection Failed" description="Could not connect to database cluster." />

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::toast variant="success" title="Project Published" description="Your project has been deployed." />

                <x-aura::toast variant="info" title="Update Available" description="Aura Wire v2.4.0 is ready for installation." />

                <x-aura::toast variant="warning" title="Rate Limit Warning" description="You have consumed 85% of your quota." />

                <x-aura::toast variant="danger" title="Connection Failed" description="Could not connect to database cluster." />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>

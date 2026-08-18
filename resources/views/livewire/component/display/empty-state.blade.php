<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Empty State — Aura Wire')] 
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
            Empty State
        </x-aura::heading>

        <x-aura::subheading size="md">
            Placeholder layouts for empty datasets, search resets, document creation, and zero state screens.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::empty-state icon="folder-open" title="No Projects Found" description="Get started by creating a new project." />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Standard Empty State -->
    <x-aura::code title="1. Standard Zero State">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::empty-state 
                    icon="folder-open"
                    title="No Projects Found" 
                    description="You haven't created any workspace projects yet. Get started by creating your first project."
                >

                    <x-aura::flex align="center" gap="2.5">

                        <x-aura::button variant="secondary" size="sm">
                            Templates
                        </x-aura::button>

                        <x-aura::button variant="primary" size="sm" icon="plus">
                            Create
                        </x-aura::button>

                    </x-aura::flex>

                </x-aura::empty-state>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::empty-state 
                    icon="folder-open"
                    title="No Projects Found" 
                    description="You haven't created any workspace projects yet. Get started by creating your first project."
                >

                    <x-aura::flex align="center" gap="2.5">

                        <x-aura::button variant="secondary" size="sm">
                            Templates
                        </x-aura::button>

                        <x-aura::button variant="primary" size="sm" icon="plus">
                            Create
                        </x-aura::button>

                    </x-aura::flex>

                </x-aura::empty-state>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>

<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.app')] 
#[Title('Empty State — Guest Portal | Aura Wire')] 
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
                Empty State
            </x-aura::heading>

        </x-aura::flex>

        <x-aura::flex justify="end" gap="2">

            <x-aura::button href="/guest#design-block" wire:navigate variant="secondary" size="sm" icon="arrow-left">
                Back
            </x-aura::button>

        </x-aura::flex>

    </x-aura::flex>

    <!-- Empty State Block Preview -->
    <x-aura::code title="First Time Onboarding Empty State Block">

        <x-slot:preview>

            <x-aura::card>

                <x-aura::empty-state 
                    icon="folder-open" 
                    title="No Projects Created Yet" 
                    description="Get started by creating your very first project or importing an existing repository."
                >

                    <x-slot:actions>

                        <x-aura::button variant="primary" size="md" icon="plus">
                            Create
                        </x-aura::button>

                    </x-slot:actions>

                </x-aura::empty-state>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::card>
                    <x-aura::empty-state 
                        icon="folder-open" 
                        title="No Projects Created Yet" 
                        description="Get started by creating your very first project or importing an existing repository."
                    >
                        <x-slot:actions>
                            <x-aura::button variant="primary" size="md" icon="plus">
                                Create
                            </x-aura::button>
                        </x-slot:actions>
                    </x-aura::empty-state>
                </x-aura::card>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>

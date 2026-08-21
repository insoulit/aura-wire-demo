<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.app')] 
#[Title('Hero Header — Guest Portal | Aura Wire')] 
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
                Hero Header
            </x-aura::heading>

        </x-aura::flex>

        <x-aura::flex justify="end" gap="2">

            <x-aura::button href="/guest#design-block" wire:navigate variant="secondary" size="sm" icon="arrow-left">
                Back
            </x-aura::button>

        </x-aura::flex>

    </x-aura::flex>

    <!-- Hero Header Block Preview -->
    <x-aura::code title="Landing Page Hero Header Block">

        <x-slot:preview>

            <x-aura::card padding="xl" gap="6">

                <x-aura::flex direction="col" align="center" justify="center" gap="4">

                    <x-aura::kicker>
                        Next Gen Component Library
                    </x-aura::kicker>

                    <x-aura::display size="sm" align="center">
                        Build Stunning Web Interfaces in Seconds
                    </x-aura::display>

                    <x-aura::subheading size="md" align="center">
                        Production ready, ultra accessible Blade and Livewire components crafted for modern Laravel applications.
                    </x-aura::subheading>

                    <x-aura::flex align="center" justify="center" gap="3" wrap="true">

                        <x-aura::button variant="primary" size="md">
                            Start
                        </x-aura::button>

                        <x-aura::button variant="outline" size="md">
                            Explore
                        </x-aura::button>

                    </x-aura::flex>

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::card padding="xl" gap="6">
                    <x-aura::flex direction="col" align="center" justify="center" gap="4">
                        <x-aura::kicker>
                            Next Gen Component Library
                        </x-aura::kicker>

                        <x-aura::display size="sm" align="center">
                            Build Stunning Web Interfaces in Seconds
                        </x-aura::display>

                        <x-aura::subheading size="md" align="center">
                            Production ready components for modern Laravel applications.
                        </x-aura::subheading>

                        <x-aura::flex align="center" justify="center" gap="3" wrap="true">
                            <x-aura::button variant="primary" size="md">
                                Start
                            </x-aura::button>

                            <x-aura::button variant="outline" size="md">
                                Explore
                            </x-aura::button>
                        </x-aura::flex>
                    </x-aura::flex>
                </x-aura::card>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>

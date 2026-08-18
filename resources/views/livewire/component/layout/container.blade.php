<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Container — Aura Wire')] 
class extends Component {};

?>

<x-aura::container gap="8" :padding="false">

    <!-- Header -->
    <x-aura::card size="full" gap="2">

        <x-aura::flex align="center" gap="2.5">

            <x-aura::kicker>
                Layout
            </x-aura::kicker>

            <x-aura::badge variant="subtle" size="sm">
                Component
            </x-aura::badge>

        </x-aura::flex>

        <x-aura::heading level="1" size="xl">
            Container
        </x-aura::heading>

        <x-aura::subheading size="md">
            Responsive max width container wrapper enforcing consistent horizontal padding and center alignment across screen sizes.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::container size="7xl">
                    <!-- Page content -->
                </x-aura::container>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Default Container -->
    <x-aura::code title="1. Default Container">

        <x-slot:preview>

            <x-aura::container size="sm">

                <x-aura::card size="full" gap="2">

                    <x-aura::text size="sm">
                        Container Content (sm size)
                    </x-aura::text>

                </x-aura::card>

            </x-aura::container>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::container size="sm">

                    <x-aura::card size="full" gap="2">

                        <x-aura::text size="sm">
                            Container Content (sm size)
                        </x-aura::text>

                    </x-aura::card>

                </x-aura::container>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Container Sizes -->
    <x-aura::code title="2. Custom Container Sizes">

        <x-slot:preview>

            <x-aura::flex direction="col" align="start" class="w-full" gap="4">

                <x-aura::container size="md" class="w-full">

                    <x-aura::card size="full" gap="2">

                        <x-aura::text size="sm">
                            size="md" (max-w-md)
                        </x-aura::text>

                    </x-aura::card>

                </x-aura::container>

                <x-aura::container size="xl" class="w-full">

                    <x-aura::card size="full" gap="2">

                        <x-aura::text size="sm">
                            size="xl" (max-w-xl)
                        </x-aura::text>

                    </x-aura::card>

                </x-aura::container>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::container size="md">

                    <x-aura::card size="full" gap="2">

                        <x-aura::text size="sm">
                            size="md" (max-w-md)
                        </x-aura::text>

                    </x-aura::card>

                </x-aura::container>

                <x-aura::container size="xl">

                    <x-aura::card size="full" gap="2">

                        <x-aura::text size="sm">
                            size="xl" (max-w-xl)
                        </x-aura::text>

                    </x-aura::card>

                </x-aura::container>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>

<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Flex — Aura Wire')] 
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
            Flex
        </x-aura::heading>

        <x-aura::subheading size="md">
            Versatile flexbox container for positioning, aligning, and distributing elements across row or column axes.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::flex align="center" justify="between" gap="4">
                    <x-aura::text size="sm">
                        Start
                    </x-aura::text>
                    <x-aura::text size="sm">
                        End
                    </x-aura::text>
                </x-aura::flex>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Alignment and Distribution -->
    <x-aura::code title="1. Alignment and Distribution">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex align="center" justify="between" gap="4" class="w-full">

                    <x-aura::badge variant="neutral" size="sm">
                        Start
                    </x-aura::badge>

                    <x-aura::badge variant="subtle" size="sm">
                        Center
                    </x-aura::badge>

                    <x-aura::badge variant="neutral" size="sm">
                        End
                    </x-aura::badge>

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::card size="2xl" gap="4">

                    <x-aura::flex align="center" justify="between" gap="4">

                        <x-aura::badge variant="neutral" size="sm">
                            Start
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="sm">
                            Center
                        </x-aura::badge>

                        <x-aura::badge variant="neutral" size="sm">
                            End
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::card>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Column Direction with Gap -->
    <x-aura::code title="2. Column Direction with Gap">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex direction="col" align="start" gap="1">

                    <x-aura::heading level="3" size="xs">
                        Profile Settings
                    </x-aura::heading>

                    <x-aura::text variant="subtle" size="sm">
                        Manage personal preferences and notification rules.
                    </x-aura::text>

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::card size="2xl" gap="4">

                    <x-aura::flex direction="col" align="start" gap="1">

                        <x-aura::heading level="3" size="xs">
                            Profile Settings
                        </x-aura::heading>

                        <x-aura::text variant="subtle" size="sm">
                            Manage personal preferences and notification rules.
                        </x-aura::text>

                    </x-aura::flex>

                </x-aura::card>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>

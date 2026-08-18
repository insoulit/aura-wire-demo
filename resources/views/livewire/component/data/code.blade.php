<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Code — Aura Wire')] 
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
            Code
        </x-aura::heading>

        <x-aura::subheading size="md">
            Interactive code block component with Preview and Code tabs and clipboard copy functionality.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::code title="Example" language="blade">
                    ...
                </x-aura::code>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Code Block Component -->
    <x-aura::code title="1. Interactive Code Block">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::code title="Example Code Block" language="blade">

                    <x-slot:preview>

                        <x-aura::button variant="primary">
                            Explore
                        </x-aura::button>

                    </x-slot:preview>

                    <x-slot:codeSlot>

                        @verbatim
                            <x-aura::button variant="primary">
                                Explore
                            </x-aura::button>
                        @endverbatim

                    </x-slot:codeSlot>

                </x-aura::code>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::code title="Example Code Block" language="blade">

                    <x-slot:preview>

                        <x-aura::button variant="primary">
                            Explore
                        </x-aura::button>

                    </x-slot:preview>

                    <x-slot:codeSlot>

                        <x-aura::button variant="primary">
                            Explore
                        </x-aura::button>

                    </x-slot:codeSlot>

                </x-aura::code>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>

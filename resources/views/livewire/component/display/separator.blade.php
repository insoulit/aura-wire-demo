<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Separator — Aura Wire')] 
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
            Separator
        </x-aura::heading>

        <x-aura::subheading size="md">
            Horizontal and vertical dividers for visually separating section content and UI groups.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::separator label="OR" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Divider with Label -->
    <x-aura::code title="1. Separator with Label">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex direction="col" align="stretch" class="w-full" gap="3">

                    <x-aura::text size="sm">
                        Primary Section
                    </x-aura::text>

                    <x-aura::separator label="OR" />

                    <x-aura::text size="sm">
                        Secondary Section
                    </x-aura::text>

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::flex direction="col" align="stretch" class="w-full" gap="3">

                    <x-aura::text size="sm">
                        Primary Section
                    </x-aura::text>

                    <x-aura::separator label="OR" />

                    <x-aura::text size="sm">
                        Secondary Section
                    </x-aura::text>

                </x-aura::flex>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Plain Separator -->
    <x-aura::code title="2. Plain Line Separator">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex direction="col" align="stretch" class="w-full" gap="3">

                    <x-aura::text size="sm">
                        Section A
                    </x-aura::text>

                    <x-aura::separator />

                    <x-aura::text size="sm">
                        Section B
                    </x-aura::text>

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::flex direction="col" align="stretch" class="w-full" gap="3">

                    <x-aura::text size="sm">
                        Section A
                    </x-aura::text>

                    <x-aura::separator />

                    <x-aura::text size="sm">
                        Section B
                    </x-aura::text>

                </x-aura::flex>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>

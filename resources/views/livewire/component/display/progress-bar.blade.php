<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Progress Bar — Aura Wire')] 
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
            Progress Bar
        </x-aura::heading>

        <x-aura::subheading size="md">
            Visual progress indicators for file uploads, storage quota limits, and system metrics.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::progress-bar percent="75" size="md" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Progress Scale -->
    <x-aura::code title="1. Progress Scale">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex direction="col" align="stretch" class="w-full" gap="4">

                    <x-aura::flex direction="col" align="stretch" gap="1">

                        <x-aura::flex align="center" justify="between" class="w-full">

                            <x-aura::text size="sm" weight="medium">
                                Profile Completion
                            </x-aura::text>

                            <x-aura::text size="sm" variant="mono" weight="bold">
                                75%
                            </x-aura::text>

                        </x-aura::flex>

                        <x-aura::progress-bar percent="75" size="md" />

                    </x-aura::flex>

                    <x-aura::flex direction="col" align="stretch" gap="1">

                        <x-aura::flex align="center" justify="between" class="w-full">

                            <x-aura::text size="sm" weight="medium">
                                Storage Quota
                            </x-aura::text>

                            <x-aura::text size="sm" variant="mono" weight="bold">
                                40%
                            </x-aura::text>

                        </x-aura::flex>

                        <x-aura::progress-bar percent="40" size="md" />

                    </x-aura::flex>

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::flex direction="col" align="stretch" gap="1">

                    <x-aura::flex align="center" justify="between" class="w-full">

                        <x-aura::text size="sm" weight="medium">
                            Profile Completion
                        </x-aura::text>

                        <x-aura::text size="sm" variant="mono" weight="bold">
                            75%
                        </x-aura::text>

                    </x-aura::flex>

                    <x-aura::progress-bar percent="75" size="md" />

                </x-aura::flex>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>

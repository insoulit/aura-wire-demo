<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Spinner — Aura Wire')] 
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
            Spinner
        </x-aura::heading>

        <x-aura::subheading size="md">
            Animated loading indicators supporting circular rings, bouncing dots, pulsating bars, and radar pings.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::spinner variant="ring" size="md" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Spinner Types -->
    <x-aura::code title="1. Spinner Varieties">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex align="center" justify="around" class="w-full py-4">

                    <x-aura::flex direction="col" align="center" gap="2">

                        <x-aura::spinner type="ring" size="lg" />

                        <x-aura::text size="xs" variant="subtle">
                            Ring
                        </x-aura::text>

                    </x-aura::flex>

                    <x-aura::flex direction="col" align="center" gap="2">

                        <x-aura::spinner type="dots" size="lg" />

                        <x-aura::text size="xs" variant="subtle">
                            Dots
                        </x-aura::text>

                    </x-aura::flex>

                    <x-aura::flex direction="col" align="center" gap="2">

                        <x-aura::spinner type="bars" size="lg" />

                        <x-aura::text size="xs" variant="subtle">
                            Bars
                        </x-aura::text>

                    </x-aura::flex>

                    <x-aura::flex direction="col" align="center" gap="2">

                        <x-aura::spinner type="ping" size="lg" />

                        <x-aura::text size="xs" variant="subtle">
                            Ping
                        </x-aura::text>

                    </x-aura::flex>

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::spinner type="ring" size="lg" />

                <x-aura::spinner type="dots" size="lg" />

                <x-aura::spinner type="bars" size="lg" />

                <x-aura::spinner type="ping" size="lg" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Sizes -->
    <x-aura::code title="2. Size Scale">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex align="center" justify="around" class="w-full py-4">

                    <x-aura::flex direction="col" align="center" gap="2">

                        <x-aura::spinner size="xs" />

                        <x-aura::text size="xs" variant="subtle">
                            xs
                        </x-aura::text>

                    </x-aura::flex>

                    <x-aura::flex direction="col" align="center" gap="2">

                        <x-aura::spinner size="sm" />

                        <x-aura::text size="xs" variant="subtle">
                            sm
                        </x-aura::text>

                    </x-aura::flex>

                    <x-aura::flex direction="col" align="center" gap="2">

                        <x-aura::spinner size="md" />

                        <x-aura::text size="xs" variant="subtle">
                            md
                        </x-aura::text>

                    </x-aura::flex>

                    <x-aura::flex direction="col" align="center" gap="2">

                        <x-aura::spinner size="lg" />

                        <x-aura::text size="xs" variant="subtle">
                            lg
                        </x-aura::text>

                    </x-aura::flex>

                    <x-aura::flex direction="col" align="center" gap="2">

                        <x-aura::spinner size="xl" />

                        <x-aura::text size="xs" variant="subtle">
                            xl
                        </x-aura::text>

                    </x-aura::flex>

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::spinner size="xs" />

                <x-aura::spinner size="sm" />

                <x-aura::spinner size="md" />

                <x-aura::spinner size="lg" />

                <x-aura::spinner size="xl" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>

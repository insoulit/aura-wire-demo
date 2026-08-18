<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Rating — Aura Wire')] 
class extends Component {};

?>

<x-aura::container gap="8" :padding="false">

    <!-- Header -->
    <x-aura::card size="full" gap="2">

        <x-aura::flex align="center" gap="2.5">

            <x-aura::kicker>
                Form
            </x-aura::kicker>

            <x-aura::badge variant="subtle" size="sm">
                Component
            </x-aura::badge>

        </x-aura::flex>

        <x-aura::heading level="1" size="xl">
            Rating
        </x-aura::heading>

        <x-aura::subheading size="md">
            Monochrome star rating form controls and read only star rating indicators with precise half star support.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::rating wire:model="score" :max="5" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Interactive Rating -->
    <x-aura::code title="1. Interactive Form Control">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex direction="col" align="start" gap="2">

                    <x-aura::label>
                        Leave Your Rating
                    </x-aura::label>

                    <x-aura::rating rating="4" max="5" name="user_feedback" size="lg" />

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::flex direction="col" align="start" gap="2">

                    <x-aura::label>
                        Leave Your Rating
                    </x-aura::label>

                    <x-aura::rating rating="4" max="5" name="user_feedback" size="lg" />

                </x-aura::flex>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>

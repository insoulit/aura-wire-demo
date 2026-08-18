<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Pagination — Aura Wire')] 
class extends Component {};

?>

<x-aura::container gap="8" :padding="false">

    <!-- Header -->
    <x-aura::card size="full" gap="2">

        <x-aura::flex align="center" gap="2.5">

            <x-aura::kicker>
                Navigation
            </x-aura::kicker>

            <x-aura::badge variant="subtle" size="sm">
                Component
            </x-aura::badge>

        </x-aura::flex>

        <x-aura::heading level="1" size="xl">
            Pagination
        </x-aura::heading>

        <x-aura::subheading size="md">
            Multi purpose pagination components supporting numbered windows, icon only navigation, circular pills, and card footer bars.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::pagination :page="4" :totalPages="12" :total="120" :perPage="10" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Numbered Window Pagination -->
    <x-aura::code title="1. Numbered Window Pagination">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex direction="col" align="stretch" class="w-full" gap="4">

                    <x-aura::pagination :page="4" :totalPages="12" :total="120" :perPage="10" variant="numbers" />

                    <x-aura::pagination :page="4" :totalPages="12" :total="120" :perPage="10" variant="numbers" :iconsOnly="true" />

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::pagination :page="4" :totalPages="12" :total="120" :perPage="10" variant="numbers" />

                <x-aura::pagination :page="4" :totalPages="12" :total="120" :perPage="10" variant="numbers" :iconsOnly="true" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>

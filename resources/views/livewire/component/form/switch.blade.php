<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Switch — Aura Wire')] 
class extends Component {
    public bool $enabled = false;
};

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
            Switch
        </x-aura::heading>

        <x-aura::subheading size="md">
            Interactive toggle switches for binary settings and real time state preferences.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::switch wire:model="enabled" label="Enable Notifications" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Toggle Switch -->
    <x-aura::code title="1. Toggle Switch">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::switch wire:model.live="enabled" label="Enable Notifications" />

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::switch wire:model="enabled" label="Enable Notifications" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>

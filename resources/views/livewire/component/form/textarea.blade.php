<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Textarea — Aura Wire')] 
class extends Component {
    public string $bio = '';
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
            Textarea
        </x-aura::heading>

        <x-aura::subheading size="md">
            Multi line text input field supporting auto resize, custom row count, labels, and error states.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::textarea wire:model="bio" rows="4" label="Biography" placeholder="Tell us about yourself..." />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Textarea Control -->
    <x-aura::code title="1. Textarea Control">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::textarea wire:model="bio" rows="4" label="Biography" placeholder="Tell us about yourself..." />

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::textarea wire:model="bio" rows="4" label="Biography" placeholder="Tell us about yourself..." />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>

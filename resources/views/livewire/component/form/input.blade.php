<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Input — Aura Wire')] 
class extends Component {
    public string $email = 'alex@example.com';
    public string $search = '';
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
            Input
        </x-aura::heading>

        <x-aura::subheading size="md">
            Versatile text, password, and search inputs with icon prefixing, size scales, and validation states.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::input wire:model="email" placeholder="Enter email address" icon="mail" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Standard Input Types -->
    <x-aura::code title="1. Input Types">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex direction="col" align="stretch" class="w-full" gap="3">

                    <x-aura::input name="email" wire:model="email" placeholder="john@example.com" value="alex@example.com" />

                    <x-aura::input type="password" name="password" placeholder="Enter secure password" value="secret123" />

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::input name="email" wire:model="email" placeholder="john@example.com" />

                <x-aura::input type="password" name="password" placeholder="Enter password" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Sizes -->
    <x-aura::code title="2. Input Sizes">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex direction="col" align="stretch" class="w-full" gap="3">

                    <x-aura::input size="sm" placeholder="Small (sm)" />

                    <x-aura::input size="md" placeholder="Medium (md)" />

                    <x-aura::input size="lg" placeholder="Large (lg)" />

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::input size="sm" placeholder="Small (sm)" />

                <x-aura::input size="md" placeholder="Medium (md)" />

                <x-aura::input size="lg" placeholder="Large (lg)" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>

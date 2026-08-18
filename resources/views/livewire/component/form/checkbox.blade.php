<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Checkbox — Aura Wire')] 
class extends Component {
    public bool $remember = true;
    public bool $newsletter = false;
    public array $notifications = ['email', 'security'];
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
            Checkbox
        </x-aura::heading>

        <x-aura::subheading size="md">
            Boolean selection inputs for multi option forms, terms agreements, and toggle states.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::checkbox wire:model="remember" label="Remember me" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Basic Checkbox -->
    <x-aura::code title="1. Basic Checkbox">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::checkbox wire:model.live="remember" label="Remember me on this browser" />

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::checkbox wire:model="remember" label="Remember me on this browser" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Sizes -->
    <x-aura::code title="2. Checkbox Sizes">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex direction="col" align="start" gap="3">

                    <x-aura::checkbox size="xs" label="Extra Small (xs)" :checked="true" />

                    <x-aura::checkbox size="sm" label="Small (sm)" :checked="true" />

                    <x-aura::checkbox size="md" label="Medium (md)" :checked="true" />

                    <x-aura::checkbox size="lg" label="Large (lg)" :checked="true" />

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::checkbox size="xs" label="Extra Small (xs)" :checked="true" />

                <x-aura::checkbox size="sm" label="Small (sm)" :checked="true" />

                <x-aura::checkbox size="md" label="Medium (md)" :checked="true" />

                <x-aura::checkbox size="lg" label="Large (lg)" :checked="true" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 3. With Description -->
    <x-aura::code title="3. With Description">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::checkbox 
                    wire:model.live="newsletter" 
                    label="Product Updates" 
                    description="Receive occasional announcements about new releases and major improvements." 
                />

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::checkbox 
                    wire:model="newsletter" 
                    label="Product Updates" 
                    description="Receive occasional announcements about new releases and major improvements." 
                />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>

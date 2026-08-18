<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Radio — Aura Wire')] 
class extends Component {
    public string $plan = 'pro';
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
            Radio
        </x-aura::heading>

        <x-aura::subheading size="md">
            Exclusive single option radio buttons for selection lists, tier options, and preference choices.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::radio wire:model="plan" value="pro" label="Pro Tier" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Basic Radio Group -->
    <x-aura::code title="1. Radio Group">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex direction="col" align="start" gap="2.5">

                    <x-aura::radio wire:model.live="plan" value="free" label="Free Tier" />

                    <x-aura::radio wire:model.live="plan" value="pro" label="Pro Tier" />

                    <x-aura::radio wire:model.live="plan" value="enterprise" label="Enterprise" />

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::flex direction="col" align="start" gap="2.5">

                    <x-aura::radio wire:model="plan" value="free" label="Free Tier" />

                    <x-aura::radio wire:model="plan" value="pro" label="Pro Tier" />

                    <x-aura::radio wire:model="plan" value="enterprise" label="Enterprise" />

                </x-aura::flex>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>

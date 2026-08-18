<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Stepper — Aura Wire')] 
class extends Component {
    public int $currentStep = 2;

    public function nextStep(): void
    {
        if ($this->currentStep < 4) {
            $this->currentStep++;
        }
    }

    public function previousStep(): void
    {
        if ($this->currentStep > 1) {
            $this->currentStep--;
        }
    }
};

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
            Stepper
        </x-aura::heading>

        <x-aura::subheading size="md">
            Step by step progress workflow indicator for multi stage forms, onboarding wizards, or checkout pipelines.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::stepper :active="$currentStep">
                    <x-aura::stepper.step step="1" title="Account" description="Enter email" status="completed" />
                    <x-aura::stepper.step step="2" title="Workspace" description="Configure team" status="active" />
                </x-aura::stepper>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Interactive Stepper -->
    <x-aura::code title="1. Interactive Wizard">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::stepper :active="$currentStep">

                    <x-aura::stepper.step step="1" title="Account Setup" description="Enter email" :status="$currentStep > 1 ? 'completed' : ($currentStep === 1 ? 'active' : 'pending')" />

                    <x-aura::stepper.step step="2" title="Workspace Setup" description="Configure team" :status="$currentStep > 2 ? 'completed' : ($currentStep === 2 ? 'active' : 'pending')" />

                    <x-aura::stepper.step step="3" title="Team Members" description="Invite users" :status="$currentStep > 3 ? 'completed' : ($currentStep === 3 ? 'active' : 'pending')" />

                </x-aura::stepper>

                <x-aura::flex align="center" justify="between" class="w-full pt-4">

                    <x-aura::button variant="secondary" size="sm" wire:click="previousStep" :disabled="$currentStep === 1">
                        Previous
                    </x-aura::button>

                    <x-aura::button variant="primary" size="sm" wire:click="nextStep" :disabled="$currentStep === 3">
                        Next
                    </x-aura::button>

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::stepper :active="$currentStep">

                    <x-aura::stepper.step step="1" title="Account Setup" description="Enter email" :status="$currentStep > 1 ? 'completed' : ($currentStep === 1 ? 'active' : 'pending')" />

                    <x-aura::stepper.step step="2" title="Workspace Setup" description="Configure team" :status="$currentStep > 2 ? 'completed' : ($currentStep === 2 ? 'active' : 'pending')" />

                    <x-aura::stepper.step step="3" title="Team Members" description="Invite users" :status="$currentStep > 3 ? 'completed' : ($currentStep === 3 ? 'active' : 'pending')" />

                </x-aura::stepper>

                <x-aura::flex align="center" justify="between" class="w-full pt-4">

                    <x-aura::button variant="secondary" size="sm" wire:click="previousStep" :disabled="$currentStep === 1">
                        Previous
                    </x-aura::button>

                    <x-aura::button variant="primary" size="sm" wire:click="nextStep" :disabled="$currentStep === 3">
                        Next
                    </x-aura::button>

                </x-aura::flex>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>

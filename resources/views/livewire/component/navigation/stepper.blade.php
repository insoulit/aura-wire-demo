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

            <x-aura::badge variant="subtle" size="md">
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
                    <x-aura::stepper.step :step="1" title="Account" description="Enter email" status="completed" />
                    <x-aura::stepper.step :step="2" title="Workspace" description="Configure team" status="active" />
                </x-aura::stepper>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Interactive Stepper -->
    <x-aura::code title="1. Interactive Wizard">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::stepper :active="$currentStep">

                    <x-aura::stepper.step :step="1" title="Account Setup" description="Enter email" :status="$currentStep > 1 ? 'completed' : ($currentStep === 1 ? 'active' : 'pending')" />

                    <x-aura::stepper.step :step="2" title="Workspace Setup" description="Configure team" :status="$currentStep > 2 ? 'completed' : ($currentStep === 2 ? 'active' : 'pending')" />

                    <x-aura::stepper.step :step="3" title="Team Members" description="Invite users" :status="$currentStep > 3 ? 'completed' : ($currentStep === 3 ? 'active' : 'pending')" />

                </x-aura::stepper>

                <x-aura::flex align="center" justify="between" class="pt-4">

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

                    <x-aura::stepper.step :step="1" title="Account Setup" description="Enter email" :status="$currentStep > 1 ? 'completed' : ($currentStep === 1 ? 'active' : 'pending')" />

                    <x-aura::stepper.step :step="2" title="Workspace Setup" description="Configure team" :status="$currentStep > 2 ? 'completed' : ($currentStep === 2 ? 'active' : 'pending')" />

                    <x-aura::stepper.step :step="3" title="Team Members" description="Invite users" :status="$currentStep > 3 ? 'completed' : ($currentStep === 3 ? 'active' : 'pending')" />

                </x-aura::stepper>

                <x-aura::flex align="center" justify="between" class="pt-4">

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

    <!-- Component Props -->
    <x-aura::card size="full" gap="4">

        <x-aura::flex direction="col" gap="1">

            <x-aura::heading level="2" size="md">
                Component Props
            </x-aura::heading>

            <x-aura::text variant="subtle" size="sm">
                Available properties and configurations for the stepper component.
            </x-aura::text>

        </x-aura::flex>

        <x-aura::table>

            <x-slot:header>

                <x-aura::table.column>
                    Prop
                </x-aura::table.column>

                <x-aura::table.column>
                    Default
                </x-aura::table.column>

                <x-aura::table.column>
                    Available Values
                </x-aura::table.column>

            </x-slot:header>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            step
                        </x-aura::text>

                        <x-aura::tooltip text="Ordinal numerical index for the step indicator" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        1
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::text size="sm" variant="subtle">
                        Step index integer
                    </x-aura::text>
                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            status
                        </x-aura::text>

                        <x-aura::tooltip text="State status of the step node" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        pending
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

                        <x-aura::badge variant="positive" size="md">
                            completed
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            active
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            pending
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            title
                        </x-aura::text>

                        <x-aura::tooltip text="Primary step label title" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="subtle" size="md">
                        null
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::text size="sm" variant="subtle">
                        Title string
                    </x-aura::text>
                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            description
                        </x-aura::text>

                        <x-aura::tooltip text="Secondary step description helper text" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="subtle" size="md">
                        null
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::text size="sm" variant="subtle">
                        Description string
                    </x-aura::text>
                </x-aura::table.cell>

            </x-aura::table.row>

        </x-aura::table>

    </x-aura::card>

</x-aura::container>

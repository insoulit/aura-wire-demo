<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.app')] 
#[Title('User Profile — Guest Portal | Aura Wire')] 
class extends Component {};

?>

<x-aura::container size="4xl" gap="6">

    <!-- Top Header -->
    <x-aura::flex justify="between" gap="4">

        <x-aura::flex direction="col" gap="none">

            <x-aura::kicker>
                Design Blocks
            </x-aura::kicker>

            <x-aura::heading level="1" size="lg">
                User Profile
            </x-aura::heading>

        </x-aura::flex>

        <x-aura::flex justify="end" gap="2">

            <x-aura::button href="/guest#design-block" wire:navigate variant="secondary" size="sm" icon="arrow-left">
                Back
            </x-aura::button>

        </x-aura::flex>

    </x-aura::flex>

    <!-- User Profile Block Preview -->
    <x-aura::code title="Account Settings and Profile Summary Block">

        <x-slot:preview>

            <x-aura::center>

                <x-aura::card size="xl" title="Public Profile Information" description="Update your account details and public avatar." gap="4">

                    <!-- Avatar Row -->
                    <x-aura::card padding="md" divided="false">

                        <x-aura::flex align="center" gap="4">

                            <x-aura::avatar initials="AM" status="online" size="lg" />

                            <x-aura::flex direction="col" gap="1">

                                <x-aura::heading level="4" size="xs">
                                    Alex Morgan
                                </x-aura::heading>

                                <x-aura::text size="sm" variant="subtle">
                                    Lead Systems Architect
                                </x-aura::text>

                                <x-aura::flex align="center" gap="2">

                                    <x-aura::button variant="secondary" size="xs">
                                        Change
                                    </x-aura::button>

                                    <x-aura::button variant="ghost" size="xs">
                                        Remove
                                    </x-aura::button>

                                </x-aura::flex>

                            </x-aura::flex>

                        </x-aura::flex>

                    </x-aura::card>

                    <!-- Form Grid -->
                    <x-aura::grid cols="1" sm="2" gap="4">

                        <x-aura::field label="First Name">
                            <x-aura::input value="Alex" />
                        </x-aura::field>

                        <x-aura::field label="Last Name">
                            <x-aura::input value="Morgan" />
                        </x-aura::field>

                    </x-aura::grid>

                    <x-aura::field label="Email Address">

                        <x-aura::input type="email" value="alex.morgan@company.com" icon="mail" />

                    </x-aura::field>

                    <x-slot:footer>

                        <x-aura::button variant="secondary" size="sm">
                            Cancel
                        </x-aura::button>

                        <x-aura::button variant="primary" size="sm">
                            Save
                        </x-aura::button>

                    </x-slot:footer>

                </x-aura::card>

            </x-aura::center>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::card title="Public Profile Information" description="Update your account details and public avatar." gap="4">
                    <!-- Avatar Row -->
                    <x-aura::card padding="md" divided="false">
                        <x-aura::flex align="center" gap="4">
                            <x-aura::avatar initials="AM" status="online" size="lg" />
                            <x-aura::flex direction="col" gap="1">
                                <x-aura::heading level="4" size="xs">
                                    Alex Morgan
                                </x-aura::heading>
                                <x-aura::text size="sm" variant="subtle">
                                    Lead Systems Architect
                                </x-aura::text>
                            </x-aura::flex>
                        </x-aura::flex>
                    </x-aura::card>

                    <!-- Form Grid -->
                    <x-aura::grid cols="1" sm="2" gap="4">
                        <x-aura::field label="First Name">
                            <x-aura::input value="Alex" />
                        </x-aura::field>
                        <x-aura::field label="Last Name">
                            <x-aura::input value="Morgan" />
                        </x-aura::field>
                    </x-aura::grid>

                    <x-aura::field label="Email Address">
                        <x-aura::input type="email" value="alex.morgan@company.com" icon="mail" />
                    </x-aura::field>

                    <x-slot:footer>
                        <x-aura::button variant="secondary" size="sm">
                            Cancel
                        </x-aura::button>
                        <x-aura::button variant="primary" size="sm">
                            Save
                        </x-aura::button>
                    </x-slot:footer>
                </x-aura::card>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>

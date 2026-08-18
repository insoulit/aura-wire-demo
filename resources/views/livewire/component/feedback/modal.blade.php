<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Modal — Aura Wire')] 
class extends Component {};

?>

<x-aura::container gap="8" :padding="false">

    <!-- Header -->
    <x-aura::card size="full" gap="2">

        <x-aura::flex align="center" gap="2.5">

            <x-aura::kicker>
                Feedback
            </x-aura::kicker>

            <x-aura::badge variant="subtle" size="sm">
                Component
            </x-aura::badge>

        </x-aura::flex>

        <x-aura::heading level="1" size="xl">
            Modal
        </x-aura::heading>

        <x-aura::subheading size="md">
            Accessible dialog windows supporting standard forms, centered alert popups, destructive prompts, and wide modal layout.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::modal name="create-user" title="Create User">
                    <p>Modal body content...</p>
                </x-aura::modal>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Standard Confirmation Modal -->
    <x-aura::code title="1. Confirmation Modal">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex align="center" gap="3">

                    <x-aura::button variant="primary" x-on:click="$dispatch('open-modal', 'demo-modal')">
                        Launch
                    </x-aura::button>

                    <x-aura::modal name="demo-modal" title="Confirm Deployment" description="Deploying to production environment.">

                        <x-aura::text size="sm">
                            This action will release version v2.4.0 to all live users.
                        </x-aura::text>

                        <x-slot:footer>

                            <x-aura::button variant="ghost" size="sm" x-on:click="$dispatch('close-modal', 'demo-modal')">
                                Cancel
                            </x-aura::button>

                            <x-aura::button variant="primary" size="sm" x-on:click="$dispatch('close-modal', 'demo-modal')">
                                Deploy
                            </x-aura::button>

                        </x-slot:footer>

                    </x-aura::modal>

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::button variant="primary" x-on:click="$dispatch('open-modal', 'demo-modal')">
                    Launch
                </x-aura::button>

                <x-aura::modal name="demo-modal" title="Confirm Deployment" description="Deploying to production environment.">

                    <x-aura::text size="sm">
                        This action will release version v2.4.0 to all live users.
                    </x-aura::text>

                    <x-slot:footer>

                        <x-aura::button variant="ghost" size="sm" x-on:click="$dispatch('close-modal', 'demo-modal')">
                            Cancel
                        </x-aura::button>

                        <x-aura::button variant="primary" size="sm" x-on:click="$dispatch('close-modal', 'demo-modal')">
                            Deploy
                        </x-aura::button>

                    </x-slot:footer>

                </x-aura::modal>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>

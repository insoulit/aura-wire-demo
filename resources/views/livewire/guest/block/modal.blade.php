<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.app')] 
#[Title('Modal — Guest Portal | Aura Wire')] 
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
                Modal Dialogs
            </x-aura::heading>

        </x-aura::flex>

        <x-aura::flex justify="end" gap="2">

            <x-aura::button href="/guest#design-block" wire:navigate variant="secondary" size="sm" icon="arrow-left">
                Back
            </x-aura::button>

        </x-aura::flex>

    </x-aura::flex>

    <!-- 1. Interactive Trigger Modals -->
    <x-aura::code title="1. Live Interactive Overlay Modals">

        <x-slot:preview>

            <x-aura::card padding="xl" gap="6">

                <x-aura::flex direction="col" align="center" justify="center" gap="1">

                    <x-aura::heading level="3" size="md" align="center">
                        Test Interactive Modal Dialogs
                    </x-aura::heading>

                    <x-aura::text variant="subtle" size="sm" align="center">
                        Click the buttons below to open accessible, teleported modal overlays with backdrop blur.
                    </x-aura::text>

                </x-aura::flex>

                <x-aura::flex align="center" justify="center" gap="3" wrap="true">

                    <!-- Form Modal Trigger -->
                    <x-aura::button variant="primary" size="md" x-data x-on:click="$dispatch('open-modal', 'create-key-demo-modal')">
                        Create
                    </x-aura::button>

                    <!-- Destructive Modal Trigger -->
                    <x-aura::button variant="danger" size="md" x-data x-on:click="$dispatch('open-modal', 'delete-project-demo-modal')">
                        Delete
                    </x-aura::button>

                </x-aura::flex>

                <!-- Form Modal Overlay Component -->
                <x-aura::modal name="create-key-demo-modal" title="Generate API Access Key" description="Create a secret access key for SDK authentication." maxWidth="lg">

                    <x-aura::flex direction="col" gap="4">

                        <x-aura::field label="Token Name">

                            <x-aura::input placeholder="e.g. Staging Webhook Worker" />

                        </x-aura::field>

                        <x-aura::field label="Expiration Scope">

                            <x-aura::select>
                                <option>90 Days (Recommended)</option>
                                <option>30 Days</option>
                                <option>Never Expire</option>
                            </x-aura::select>

                        </x-aura::field>

                    </x-aura::flex>

                    <x-slot:footer>

                        <x-aura::button variant="secondary" size="sm" x-on:click="open = false">
                            Cancel
                        </x-aura::button>

                        <x-aura::button variant="primary" size="sm">
                            Create
                        </x-aura::button>

                    </x-slot:footer>

                </x-aura::modal>

                <!-- Destructive Danger Modal Overlay Component -->
                <x-aura::modal name="delete-project-demo-modal" variant="centered" title="Delete Deployment Environment?" description="This action will permanently purge all server instances and backups." maxWidth="md">

                    <x-aura::card padding="sm" divided="false">

                        <x-aura::text size="xs" variant="subtle" align="center">
                            Target: production-us-east-1
                        </x-aura::text>

                    </x-aura::card>

                    <x-slot:footer>

                        <x-aura::button variant="secondary" size="sm" x-on:click="open = false">
                            Cancel
                        </x-aura::button>

                        <x-aura::button variant="danger" size="sm">
                            Delete
                        </x-aura::button>

                    </x-slot:footer>

                </x-aura::modal>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <!-- Modal Trigger Button -->
                <x-aura::button variant="primary" x-on:click="$dispatch('open-modal', 'create-key-modal')">
                    Create
                </x-aura::button>

                <!-- Modal Overlay Component -->
                <x-aura::modal name="create-key-modal" title="Generate API Access Key" description="Create a secret access key for authentication.">
                    <x-aura::flex direction="col" gap="4">
                        <x-aura::field label="Token Name">
                            <x-aura::input placeholder="e.g. Production Worker" />
                        </x-aura::field>
                    </x-aura::flex>

                    <x-slot:footer>
                        <x-aura::button variant="secondary" size="sm" x-on:click="open = false">
                            Cancel
                        </x-aura::button>

                        <x-aura::button variant="primary" size="sm">
                            Create
                        </x-aura::button>
                    </x-slot:footer>
                </x-aura::modal>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Clean Modal Dialog Card Layout Preview -->
    <x-aura::code title="2. Modal Card Dialog Structure">

        <x-slot:preview>

            <x-aura::center>

                <x-aura::card size="lg" gap="4">

                    <x-aura::flex align="center" gap="3">

                        <x-aura::icon name="key" size="md" :container="true" />

                        <x-aura::flex direction="col" gap="none">

                            <x-aura::heading level="3" size="sm">
                                Create Access Token
                            </x-aura::heading>

                            <x-aura::text variant="subtle" size="sm">
                                Configure API permissions for external services.
                            </x-aura::text>

                        </x-aura::flex>

                    </x-aura::flex>

                    <x-aura::field label="Token Name">

                        <x-aura::input placeholder="e.g. Analytics Pipeline" />

                    </x-aura::field>

                    <x-slot:footer>

                        <x-aura::button variant="secondary" size="sm">
                            Cancel
                        </x-aura::button>

                        <x-aura::button variant="primary" size="sm">
                            Create
                        </x-aura::button>

                    </x-slot:footer>

                </x-aura::card>

            </x-aura::center>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::card size="lg" gap="4">
                    <x-aura::flex align="center" gap="3">
                        <x-aura::icon name="key" size="md" :container="true" />

                        <x-aura::flex direction="col" gap="none">
                            <x-aura::heading level="3" size="sm">
                                Create Access Token
                            </x-aura::heading>

                            <x-aura::text variant="subtle" size="sm">
                                Configure API permissions.
                            </x-aura::text>
                        </x-aura::flex>
                    </x-aura::flex>

                    <x-aura::field label="Token Name">
                        <x-aura::input placeholder="e.g. Analytics Pipeline" />
                    </x-aura::field>

                    <x-slot:footer>
                        <x-aura::button variant="secondary" size="sm">
                            Cancel
                        </x-aura::button>

                        <x-aura::button variant="primary" size="sm">
                            Create
                        </x-aura::button>
                    </x-slot:footer>
                </x-aura::card>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>

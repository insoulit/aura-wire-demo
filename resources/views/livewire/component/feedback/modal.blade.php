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

            <x-aura::badge variant="subtle" size="md">
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
                <x-aura::button variant="primary" x-on:click="$dispatch('open-modal', 'demo-modal')">
                    Launch
                </x-aura::button>

                <x-aura::modal name="demo-modal" title="Modal Title">
                    <x-aura::text size="sm">
                        Modal body content.
                    </x-aura::text>
                </x-aura::modal>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Standard Confirmation Modal -->
    <x-aura::code title="1. Confirmation Dialog">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex align="center" gap="3">

                    <x-aura::button variant="primary" x-on:click="$dispatch('open-modal', 'deploy-modal')">
                        Deploy
                    </x-aura::button>

                    <x-aura::modal name="deploy-modal" title="Confirm Deployment" description="Deploying updates to production environment.">

                        <x-aura::text size="sm">
                            This action will release version v1.6.1 to all active tenant nodes.
                        </x-aura::text>

                        <x-slot:footer>

                            <x-aura::button variant="ghost" size="sm" x-on:click="$dispatch('close-modal', 'deploy-modal')">
                                Cancel
                            </x-aura::button>

                            <x-aura::button variant="primary" size="sm" x-on:click="$dispatch('close-modal', 'deploy-modal')">
                                Confirm
                            </x-aura::button>

                        </x-slot:footer>

                    </x-aura::modal>

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::button variant="primary" x-on:click="$dispatch('open-modal', 'deploy-modal')">
                    Deploy
                </x-aura::button>

                <x-aura::modal name="deploy-modal" title="Confirm Deployment" description="Deploying updates to production.">
                    <x-aura::text size="sm">
                        This action will release version v1.6.1 to all active tenant nodes.
                    </x-aura::text>

                    <x-slot:footer>
                        <x-aura::button variant="ghost" size="sm" x-on:click="$dispatch('close-modal', 'deploy-modal')">
                            Cancel
                        </x-aura::button>

                        <x-aura::button variant="primary" size="sm" x-on:click="$dispatch('close-modal', 'deploy-modal')">
                            Confirm
                        </x-aura::button>
                    </x-slot:footer>
                </x-aura::modal>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Form Input Dialog -->
    <x-aura::code title="2. Form Input Dialog (maxWidth=lg)">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex align="center" gap="3">

                    <x-aura::button variant="outline" x-on:click="$dispatch('open-modal', 'create-user-modal')">
                        Invite
                    </x-aura::button>

                    <x-aura::modal name="create-user-modal" title="Invite Team Member" description="Send an onboarding invitation to a new collaborator." maxWidth="lg">

                        <x-aura::flex direction="col" gap="4">

                            <x-aura::field label="Email Address">
                                <x-aura::input placeholder="sarah@company.com" icon="mail" />
                            </x-aura::field>

                            <x-aura::field label="Access Role">

                                <x-aura::select>
                                    <option>Collaborator (Read & Write)</option>
                                    <option>Administrator (Full Access)</option>
                                    <option>Viewer (Read Only)</option>
                                </x-aura::select>

                            </x-aura::field>

                        </x-aura::flex>

                        <x-slot:footer>

                            <x-aura::button variant="ghost" size="sm" x-on:click="$dispatch('close-modal', 'create-user-modal')">
                                Cancel
                            </x-aura::button>

                            <x-aura::button variant="primary" size="sm" x-on:click="$dispatch('close-modal', 'create-user-modal')">
                                Send
                            </x-aura::button>

                        </x-slot:footer>

                    </x-aura::modal>

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::button variant="outline" x-on:click="$dispatch('open-modal', 'create-user-modal')">
                    Invite
                </x-aura::button>

                <x-aura::modal name="create-user-modal" title="Invite Team Member" maxWidth="lg">
                    <x-aura::flex direction="col" gap="4">
                        <x-aura::field label="Email Address">
                            <x-aura::input placeholder="sarah@company.com" icon="mail" />
                        </x-aura::field>

                        <x-aura::field label="Access Role">
                            <x-aura::select>
                                <option>Collaborator (Read & Write)</option>
                                <option>Administrator (Full Access)</option>
                            </x-aura::select>
                        </x-aura::field>
                    </x-aura::flex>

                    <x-slot:footer>
                        <x-aura::button variant="ghost" size="sm" x-on:click="$dispatch('close-modal', 'create-user-modal')">
                            Cancel
                        </x-aura::button>

                        <x-aura::button variant="primary" size="sm" x-on:click="$dispatch('close-modal', 'create-user-modal')">
                            Send
                        </x-aura::button>
                    </x-slot:footer>
                </x-aura::modal>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 3. Destructive Alert Dialog -->
    <x-aura::code title="3. Destructive Alert Dialog">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex align="center" gap="3">

                    <x-aura::button variant="danger" x-on:click="$dispatch('open-modal', 'delete-project-modal')">
                        Delete
                    </x-aura::button>

                    <x-aura::modal name="delete-project-modal" variant="danger" title="Delete Project Repository" description="Are you sure you want to permanently delete this project? This operation cannot be undone.">

                        <x-slot:footer>

                            <x-aura::button variant="ghost" size="sm" x-on:click="$dispatch('close-modal', 'delete-project-modal')">
                                Cancel
                            </x-aura::button>

                            <x-aura::button variant="danger" size="sm" x-on:click="$dispatch('close-modal', 'delete-project-modal')">
                                Delete
                            </x-aura::button>

                        </x-slot:footer>

                    </x-aura::modal>

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::button variant="danger" x-on:click="$dispatch('open-modal', 'delete-project-modal')">
                    Delete
                </x-aura::button>

                <x-aura::modal name="delete-project-modal" variant="danger" title="Delete Project Repository" description="This operation cannot be undone.">
                    <x-slot:footer>
                        <x-aura::button variant="ghost" size="sm" x-on:click="$dispatch('close-modal', 'delete-project-modal')">
                            Cancel
                        </x-aura::button>

                        <x-aura::button variant="danger" size="sm" x-on:click="$dispatch('close-modal', 'delete-project-modal')">
                            Delete
                        </x-aura::button>
                    </x-slot:footer>
                </x-aura::modal>
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
                Available properties and configurations for the modal component.
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
                            name
                        </x-aura::text>

                        <x-aura::tooltip text="Unique window identifier for dispatching open and close events" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        modal
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::text size="sm" variant="subtle">
                        Name identifier string
                    </x-aura::text>
                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            maxWidth
                        </x-aura::text>

                        <x-aura::tooltip text="Maximum horizontal width constraint preset" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        md
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

                        <x-aura::badge variant="subtle" size="md">
                            sm
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            md
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            lg
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            xl
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            2xl
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            full
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            variant
                        </x-aura::text>

                        <x-aura::tooltip text="Visual style and alignment layout" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        default
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

                        <x-aura::badge variant="subtle" size="md">
                            default
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            centered
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            danger
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            success
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

        </x-aura::table>

    </x-aura::card>

</x-aura::container>

<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Toast — Aura Wire')] 
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
            Toast
        </x-aura::heading>

        <x-aura::subheading size="md">
            Temporary notification popups supporting status variants, dismiss triggers, and action buttons.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::toast variant="success" title="Changes Saved" description="Profile updated." />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Status Toast Varieties -->
    <x-aura::code title="1. Status Varieties">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex direction="col" align="stretch" gap="3">

                    <x-aura::toast variant="neutral" title="Task Completed" description="All background queued jobs finished." />

                    <x-aura::toast variant="success" title="Project Published" description="Your project has been deployed to production." />

                    <x-aura::toast variant="warning" title="Rate Limit Warning" description="You have consumed 85% of your API quota." />

                    <x-aura::toast variant="danger" title="Connection Failed" description="Could not establish database connection." />

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::toast variant="neutral" title="Task Completed" description="All background queued jobs finished." />
                <x-aura::toast variant="success" title="Project Published" description="Your project has been deployed." />
                <x-aura::toast variant="warning" title="Rate Limit Warning" description="You have consumed 85% of your quota." />
                <x-aura::toast variant="danger" title="Connection Failed" description="Could not establish database connection." />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Subtle Surface Variant -->
    <x-aura::code title="2. Subtle Surface Toast (variant=subtle)">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex direction="col" align="stretch" gap="3">

                    <x-aura::toast variant="subtle" icon="inbox" title="New Message Received" description="Alex sent you an invitation to review pull request #14." />

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::toast variant="subtle" icon="inbox" title="New Message Received" description="Alex sent you an invitation to review PR #14." />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 3. Toast with Interactive Action -->
    <x-aura::code title="3. Toast with Interactive Action">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex direction="col" align="stretch" gap="3">

                    <x-aura::toast variant="neutral" title="File Deleted" description="Document moved to trash archive.">

                        <x-slot:action>

                            <x-aura::button variant="secondary" size="xs">
                                Undo
                            </x-aura::button>

                        </x-slot:action>

                    </x-aura::toast>

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::toast variant="neutral" title="File Deleted" description="Document moved to trash.">
                    <x-slot:action>
                        <x-aura::button variant="secondary" size="xs">
                            Undo
                        </x-aura::button>
                    </x-slot:action>
                </x-aura::toast>
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
                Available properties and configurations for the toast component.
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
                            variant
                        </x-aura::text>

                        <x-aura::tooltip text="Notification intent and semantic color styling" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        neutral
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

                        <x-aura::badge variant="subtle" size="md">
                            neutral
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            subtle
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            success
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            warning
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            danger
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            dismissible
                        </x-aura::text>

                        <x-aura::tooltip text="Show close button on the toast" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        true
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

                        <x-aura::badge variant="subtle" size="md">
                            true
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            false
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

        </x-aura::table>

    </x-aura::card>

</x-aura::container>

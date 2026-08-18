<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Button — Aura Wire')] 
class extends Component {};

?>

<x-aura::container gap="8" :padding="false">

    <!-- Header -->
    <x-aura::card size="full" gap="2">

        <x-aura::flex align="center" gap="2.5">

            <x-aura::kicker>
                Action
            </x-aura::kicker>

            <x-aura::badge variant="subtle" size="sm">
                Component
            </x-aura::badge>

        </x-aura::flex>

        <x-aura::heading level="1" size="xl">
            Button
        </x-aura::heading>

        <x-aura::subheading size="md">
            Versatile interactive button component supporting semantic variants, size scales, leading and trailing icons, and loading states.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::button variant="primary" size="md">
                    Create
                </x-aura::button>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Variants -->
    <x-aura::code title="1. Button Variants">

        <x-slot:preview>

            <x-aura::flex align="center" gap="3" class="flex-wrap">

                <x-aura::button variant="primary">
                    Primary
                </x-aura::button>

                <x-aura::button variant="secondary">
                    Secondary
                </x-aura::button>

                <x-aura::button variant="filled">
                    Filled
                </x-aura::button>

                <x-aura::button variant="subtle">
                    Subtle
                </x-aura::button>

                <x-aura::button variant="outline">
                    Outline
                </x-aura::button>

                <x-aura::button variant="ghost">
                    Ghost
                </x-aura::button>

                <x-aura::button variant="danger">
                    Danger
                </x-aura::button>

                <x-aura::button variant="link" href="#">
                    Link
                </x-aura::button>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::button variant="primary">
                    Primary
                </x-aura::button>

                <x-aura::button variant="secondary">
                    Secondary
                </x-aura::button>

                <x-aura::button variant="filled">
                    Filled
                </x-aura::button>

                <x-aura::button variant="subtle">
                    Subtle
                </x-aura::button>

                <x-aura::button variant="outline">
                    Outline
                </x-aura::button>

                <x-aura::button variant="ghost">
                    Ghost
                </x-aura::button>

                <x-aura::button variant="danger">
                    Danger
                </x-aura::button>

                <x-aura::button variant="link" href="#">
                    Link
                </x-aura::button>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Sizes -->
    <x-aura::code title="2. Button Sizes">

        <x-slot:preview>

            <x-aura::flex align="center" gap="3" class="flex-wrap">

                <x-aura::button variant="primary" size="xs">
                    Create
                </x-aura::button>

                <x-aura::button variant="primary" size="sm">
                    Create
                </x-aura::button>

                <x-aura::button variant="primary" size="md">
                    Create
                </x-aura::button>

                <x-aura::button variant="primary" size="lg">
                    Create
                </x-aura::button>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::button variant="primary" size="xs">
                    Create
                </x-aura::button>

                <x-aura::button variant="primary" size="sm">
                    Create
                </x-aura::button>

                <x-aura::button variant="primary" size="md">
                    Create
                </x-aura::button>

                <x-aura::button variant="primary" size="lg">
                    Create
                </x-aura::button>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 3. Leading and Trailing Icons -->
    <x-aura::code title="3. Buttons with Icons">

        <x-slot:preview>

            <x-aura::flex align="center" gap="3" class="flex-wrap">

                <x-aura::button variant="primary" icon="plus">
                    Create
                </x-aura::button>

                <x-aura::button variant="secondary" icon-trailing="download">
                    Export
                </x-aura::button>

                <x-aura::button variant="outline" icon="pencil">
                    Edit
                </x-aura::button>

                <x-aura::button variant="danger" icon="trash-2">
                    Delete
                </x-aura::button>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::button variant="primary" icon="plus">
                    Create
                </x-aura::button>

                <x-aura::button variant="secondary" icon-trailing="download">
                    Export
                </x-aura::button>

                <x-aura::button variant="outline" icon="pencil">
                    Edit
                </x-aura::button>

                <x-aura::button variant="danger" icon="trash-2">
                    Delete
                </x-aura::button>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 4. Pill Buttons -->
    <x-aura::code title="4. Pill Shape Buttons">

        <x-slot:preview>

            <x-aura::flex align="center" gap="3" class="flex-wrap">

                <x-aura::button variant="primary" pill>
                    Create
                </x-aura::button>

                <x-aura::button variant="secondary" pill icon="sparkles">
                    Explore
                </x-aura::button>

                <x-aura::button variant="outline" pill icon-trailing="arrow-right">
                    Continue
                </x-aura::button>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::button variant="primary" pill>
                    Create
                </x-aura::button>

                <x-aura::button variant="secondary" pill icon="sparkles">
                    Explore
                </x-aura::button>

                <x-aura::button variant="outline" pill icon-trailing="arrow-right">
                    Continue
                </x-aura::button>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 5. Disabled and Loading States -->
    <x-aura::code title="5. Disabled and Loading States">

        <x-slot:preview>

            <x-aura::flex align="center" gap="3" class="flex-wrap">

                <x-aura::button variant="primary" disabled>
                    Save
                </x-aura::button>

                <x-aura::button variant="secondary" disabled>
                    Cancel
                </x-aura::button>

                <x-aura::button variant="primary" :loading="true">
                    Saving
                </x-aura::button>

                <x-aura::button variant="outline" :loading="true">
                    Syncing
                </x-aura::button>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::button variant="primary" disabled>
                    Save
                </x-aura::button>

                <x-aura::button variant="secondary" disabled>
                    Cancel
                </x-aura::button>

                <x-aura::button variant="primary" :loading="true">
                    Saving
                </x-aura::button>

                <x-aura::button variant="outline" :loading="true">
                    Syncing
                </x-aura::button>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 6. Real World Action Card Pattern -->
    <x-aura::code title="6. Real World Action Card Pattern">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex align="center" justify="between" class="w-full">

                    <x-aura::flex direction="col" align="start" gap="1">

                        <x-aura::heading level="3" size="sm">
                            Unsaved Changes
                        </x-aura::heading>

                        <x-aura::text size="sm" variant="subtle">
                            You have pending configuration updates waiting to be applied.
                        </x-aura::text>

                    </x-aura::flex>

                    <x-aura::flex align="center" gap="2">

                        <x-aura::button variant="secondary" size="sm">
                            Cancel
                        </x-aura::button>

                        <x-aura::button variant="primary" size="sm">
                            Save
                        </x-aura::button>

                    </x-aura::flex>

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::card size="2xl" gap="4">

                    <x-aura::flex align="center" justify="between" class="w-full">

                        <x-aura::flex direction="col" align="start" gap="1">

                            <x-aura::heading level="3" size="sm">
                                Unsaved Changes
                            </x-aura::heading>

                            <x-aura::text size="sm" variant="subtle">
                                You have pending configuration updates waiting to be applied.
                            </x-aura::text>

                        </x-aura::flex>

                        <x-aura::flex align="center" gap="2">

                            <x-aura::button variant="secondary" size="sm">
                                Cancel
                            </x-aura::button>

                            <x-aura::button variant="primary" size="sm">
                                Save
                            </x-aura::button>

                        </x-aura::flex>

                    </x-aura::flex>

                </x-aura::card>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>

<?php

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Volt\Component;

new 
#[Layout('livewire.layout.component')] 
#[Title('Skeleton — Aura Wire')] 
class extends Component {
    public bool $isLoading = true;

    public function toggleLoading(): void
    {
        $this->isLoading = !$this->isLoading;
    }
};

?>

<x-aura::container gap="8" :padding="false">

    <!-- Header -->
    <x-aura::card size="full" gap="2">

        <x-aura::flex align="center" gap="2.5">

            <x-aura::kicker>
                Display
            </x-aura::kicker>

            <x-aura::badge variant="subtle" size="md">
                Component
            </x-aura::badge>

        </x-aura::flex>

        <x-aura::heading level="1" size="xl">
            Skeleton
        </x-aura::heading>

        <x-aura::subheading size="md">
            Animated pulsing placeholders for text lines, avatars, buttons, cards, and complex layout content during async data fetching.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::skeleton variant="text" width="60%" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Interactive Loading State -->
    <x-aura::code title="1. Async Content Loading State">

        <x-slot:preview>

            <x-aura::flex direction="col" align="start" gap="4">

                <x-aura::flex align="center" justify="between">

                    <x-aura::text size="xs" variant="subtle" weight="medium">
                        Status: {{ $isLoading ? 'Loading' : 'Loaded' }}
                    </x-aura::text>

                    <x-aura::button variant="secondary" size="xs" wire:click="toggleLoading">
                        Toggle
                    </x-aura::button>

                </x-aura::flex>

                <x-aura::card size="2xl" gap="4">

                    @if ($isLoading)

                        <x-aura::flex direction="col" align="stretch" gap="4">

                            <x-aura::flex align="center" gap="3">

                                <x-aura::skeleton variant="avatar" size="md" />

                                <x-aura::flex direction="col" align="start" gap="2">

                                    <x-aura::skeleton variant="text" width="60%" />

                                    <x-aura::skeleton variant="text" width="40%" />

                                </x-aura::flex>

                            </x-aura::flex>

                            <x-aura::skeleton variant="card" />

                        </x-aura::flex>

                    @else

                        <x-aura::flex direction="col" align="stretch" gap="4">

                            <x-aura::flex align="center" gap="3">

                                <x-aura::avatar initials="AK" size="md" />

                                <x-aura::flex direction="col" align="start" gap="0.5">

                                    <x-aura::heading level="3" size="sm">
                                        Alex Kovacs
                                    </x-aura::heading>

                                    <x-aura::text size="xs" variant="subtle">
                                        Product Architect
                                    </x-aura::text>

                                </x-aura::flex>

                            </x-aura::flex>

                            <x-aura::text size="sm" variant="subtle">
                                Real time metrics and revenue performance breakdown across active workspaces.
                            </x-aura::text>

                        </x-aura::flex>

                    @endif

                </x-aura::card>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::card size="2xl" gap="4">

                    <x-aura::flex direction="col" align="stretch" gap="4">

                        <x-aura::flex align="center" gap="3">

                            <x-aura::skeleton variant="avatar" size="md" />

                            <x-aura::flex direction="col" align="start" gap="2">

                                <x-aura::skeleton variant="text" width="60%" />

                                <x-aura::skeleton variant="text" width="40%" />

                            </x-aura::flex>

                        </x-aura::flex>

                        <x-aura::skeleton variant="card" />

                    </x-aura::flex>

                </x-aura::card>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Variants -->
    <x-aura::code title="2. Built In Variant Styles">

        <x-slot:preview>

            <x-aura::flex direction="col" align="start" gap="4">

                <x-aura::skeleton variant="text" width="100%" />

                <x-aura::skeleton variant="avatar" size="md" />

                <x-aura::skeleton variant="button" size="sm" />

                <x-aura::skeleton variant="card" />

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::skeleton variant="text" width="100%" />

                <x-aura::skeleton variant="avatar" size="md" />

                <x-aura::skeleton variant="button" size="sm" />

                <x-aura::skeleton variant="card" />
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
                Available properties and configurations for the skeleton component.
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

                        <x-aura::tooltip text="Pre-configured placeholder geometric shape and aspect ratio" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        text
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

                        <x-aura::badge variant="subtle" size="md">
                            text
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            avatar
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            circle
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            button
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            badge
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            card
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            size
                        </x-aura::text>

                        <x-aura::tooltip text="Scale dimension preset for avatar and button variants" position="top">

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
                            xs
                        </x-aura::badge>

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

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            width
                        </x-aura::text>

                        <x-aura::tooltip text="Custom inline width CSS override" position="top">

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
                        CSS width string (e.g. 100%, 200px)
                    </x-aura::text>
                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            height
                        </x-aura::text>

                        <x-aura::tooltip text="Custom inline height CSS override" position="top">

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
                        CSS height string (e.g. 40px, 120px)
                    </x-aura::text>
                </x-aura::table.cell>

            </x-aura::table.row>

        </x-aura::table>

    </x-aura::card>

</x-aura::container>

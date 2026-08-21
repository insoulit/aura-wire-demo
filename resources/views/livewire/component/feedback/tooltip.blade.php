<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Tooltip — Aura Wire')] 
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
            Tooltip
        </x-aura::heading>

        <x-aura::subheading size="md">
            Hover and focus popover tooltips with directional placement options.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::tooltip text="Edit profile" position="top">
                    <x-aura::button size="sm">
                        Edit
                    </x-aura::button>
                </x-aura::tooltip>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Directional Tooltips -->
    <x-aura::code title="1. Directional Positions">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex align="center" justify="center" gap="6" :wrap="true">

                    <x-aura::tooltip text="Tooltip on Top" position="top">

                        <x-aura::button variant="secondary" size="sm">
                            Top
                        </x-aura::button>

                    </x-aura::tooltip>

                    <x-aura::tooltip text="Tooltip on Bottom" position="bottom">

                        <x-aura::button variant="secondary" size="sm">
                            Bottom
                        </x-aura::button>

                    </x-aura::tooltip>

                    <x-aura::tooltip text="Tooltip on Left" position="left">

                        <x-aura::button variant="secondary" size="sm">
                            Left
                        </x-aura::button>

                    </x-aura::tooltip>

                    <x-aura::tooltip text="Tooltip on Right" position="right">

                        <x-aura::button variant="secondary" size="sm">
                            Right
                        </x-aura::button>

                    </x-aura::tooltip>

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::tooltip text="Tooltip on Top" position="top">
                    <x-aura::button variant="secondary" size="sm">Top</x-aura::button>
                </x-aura::tooltip>

                <x-aura::tooltip text="Tooltip on Bottom" position="bottom">
                    <x-aura::button variant="secondary" size="sm">Bottom</x-aura::button>
                </x-aura::tooltip>

                <x-aura::tooltip text="Tooltip on Left" position="left">
                    <x-aura::button variant="secondary" size="sm">Left</x-aura::button>
                </x-aura::tooltip>

                <x-aura::tooltip text="Tooltip on Right" position="right">
                    <x-aura::button variant="secondary" size="sm">Right</x-aura::button>
                </x-aura::tooltip>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Action Toolbar Icon Tooltips -->
    <x-aura::code title="2. Icon Toolbar Tooltips">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex align="center" justify="center" gap="3">

                    <x-aura::tooltip text="Create new document" position="top">
                        <x-aura::icon-button icon="file-plus" variant="outline" size="sm" />
                    </x-aura::tooltip>

                    <x-aura::tooltip text="Share via link" position="top">
                        <x-aura::icon-button icon="share-2" variant="outline" size="sm" />
                    </x-aura::tooltip>

                    <x-aura::tooltip text="Archive item" position="top">
                        <x-aura::icon-button icon="archive" variant="outline" size="sm" />
                    </x-aura::tooltip>

                    <x-aura::tooltip text="Delete item permanently" position="top">
                        <x-aura::icon-button icon="trash-2" variant="danger" size="sm" />
                    </x-aura::tooltip>

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::tooltip text="Create new document" position="top">
                    <x-aura::icon-button icon="file-plus" variant="outline" size="sm" />
                </x-aura::tooltip>

                <x-aura::tooltip text="Share via link" position="top">
                    <x-aura::icon-button icon="share-2" variant="outline" size="sm" />
                </x-aura::tooltip>

                <x-aura::tooltip text="Delete item permanently" position="top">
                    <x-aura::icon-button icon="trash-2" variant="danger" size="sm" />
                </x-aura::tooltip>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 3. Inline Help Tooltips -->
    <x-aura::code title="3. Inline Metadata Help Tooltips">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex align="center" gap="2">

                    <x-aura::text size="sm" weight="semibold">
                        API Rate Limit Policy
                    </x-aura::text>

                    <x-aura::tooltip text="1,000 requests per minute per token" position="right">
                        <x-aura::icon name="info" size="xs" />
                    </x-aura::tooltip>

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::flex align="center" gap="2">
                    <x-aura::text size="sm" weight="semibold">
                        API Rate Limit Policy
                    </x-aura::text>

                    <x-aura::tooltip text="1,000 requests per minute per token" position="right">
                        <x-aura::icon name="info" size="xs" />
                    </x-aura::tooltip>
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
                Available properties and configurations for the tooltip component.
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
                            text
                        </x-aura::text>

                        <x-aura::tooltip text="Tooltip text content string" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="subtle" size="md">
                        empty
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::text size="sm" variant="subtle">
                        Text string
                    </x-aura::text>
                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            position
                        </x-aura::text>

                        <x-aura::tooltip text="Placement alignment relative to child trigger" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        top
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

                        <x-aura::badge variant="subtle" size="md">
                            top
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            bottom
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            left
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            right
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

        </x-aura::table>

    </x-aura::card>

</x-aura::container>

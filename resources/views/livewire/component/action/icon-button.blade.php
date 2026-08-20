<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Icon Button — Aura Wire')] 
class extends Component {};

?>

<x-aura::container gap="8" :padding="false">

    <!-- Header -->
    <x-aura::card size="full" gap="2">

        <x-aura::flex align="center" gap="2.5">

            <x-aura::kicker>
                Action
            </x-aura::kicker>

            <x-aura::badge variant="subtle" size="md">
                Component
            </x-aura::badge>

        </x-aura::flex>

        <x-aura::heading level="1" size="xl">
            Icon Button
        </x-aura::heading>

        <x-aura::subheading size="md">
            Compact circular and square icon triggers powered by Lucide icons for toolbars, list controls, and quick actions.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::icon-button icon="pencil" variant="subtle" size="md" label="Edit" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Variants -->
    <x-aura::code title="1. Icon Button Variants">

        <x-slot:preview>

            <x-aura::flex align="center" gap="4" :wrap="true">

                <x-aura::icon-button icon="pencil" variant="primary" label="Edit" />

                <x-aura::icon-button icon="eye" variant="secondary" label="View" />

                <x-aura::icon-button icon="heart" variant="subtle" label="Favorite" />

                <x-aura::icon-button icon="settings" variant="outline" label="Settings" />

                <x-aura::icon-button icon="share-2" variant="ghost" label="Share" />

                <x-aura::icon-button icon="trash-2" variant="danger" label="Delete" />

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::icon-button icon="pencil" variant="primary" label="Edit" />

                <x-aura::icon-button icon="eye" variant="secondary" label="View" />

                <x-aura::icon-button icon="heart" variant="subtle" label="Favorite" />

                <x-aura::icon-button icon="settings" variant="outline" label="Settings" />

                <x-aura::icon-button icon="share-2" variant="ghost" label="Share" />

                <x-aura::icon-button icon="trash-2" variant="danger" label="Delete" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Shapes (Circle vs Square) -->
    <x-aura::code title="2. Shapes (Circle vs Square)">

        <x-slot:preview>

            <x-aura::flex direction="col" align="start" gap="4">

                <x-aura::flex align="center" gap="3">

                    <x-aura::icon-button icon="pencil" variant="primary" shape="circle" label="Edit" />

                    <x-aura::icon-button icon="eye" variant="secondary" shape="circle" label="View" />

                    <x-aura::icon-button icon="bookmark" variant="subtle" shape="circle" label="Bookmark" />

                    <x-aura::icon-button icon="trash-2" variant="danger" shape="circle" label="Delete" />

                </x-aura::flex>

                <x-aura::flex align="center" gap="3">

                    <x-aura::icon-button icon="pencil" variant="primary" shape="square" label="Edit" />

                    <x-aura::icon-button icon="eye" variant="secondary" shape="square" label="View" />

                    <x-aura::icon-button icon="bookmark" variant="subtle" shape="square" label="Bookmark" />

                    <x-aura::icon-button icon="trash-2" variant="danger" shape="square" label="Delete" />

                </x-aura::flex>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::icon-button icon="pencil" variant="primary" shape="circle" label="Edit" />

                <x-aura::icon-button icon="eye" variant="secondary" shape="circle" label="View" />

                <x-aura::icon-button icon="bookmark" variant="subtle" shape="circle" label="Bookmark" />

                <x-aura::icon-button icon="trash-2" variant="danger" shape="circle" label="Delete" />

                <x-aura::icon-button icon="pencil" variant="primary" shape="square" label="Edit" />

                <x-aura::icon-button icon="eye" variant="secondary" shape="square" label="View" />

                <x-aura::icon-button icon="bookmark" variant="subtle" shape="square" label="Bookmark" />

                <x-aura::icon-button icon="trash-2" variant="danger" shape="square" label="Delete" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 3. Sizes -->
    <x-aura::code title="3. Proportional Sizes">

        <x-slot:preview>

            <x-aura::flex align="center" gap="4" :wrap="true">

                <x-aura::icon-button icon="bell" size="xs" variant="secondary" label="Alert" />

                <x-aura::icon-button icon="bell" size="sm" variant="secondary" label="Alert" />

                <x-aura::icon-button icon="bell" size="md" variant="secondary" label="Alert" />

                <x-aura::icon-button icon="bell" size="lg" variant="secondary" label="Alert" />

                <x-aura::icon-button icon="bell" size="xl" variant="secondary" label="Alert" />

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::icon-button icon="bell" size="xs" variant="secondary" label="Alert" />

                <x-aura::icon-button icon="bell" size="sm" variant="secondary" label="Alert" />

                <x-aura::icon-button icon="bell" size="md" variant="secondary" label="Alert" />

                <x-aura::icon-button icon="bell" size="lg" variant="secondary" label="Alert" />

                <x-aura::icon-button icon="bell" size="xl" variant="secondary" label="Alert" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 4. Real World Table Actions -->
    <x-aura::code title="4. Real World Action Card Pattern">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex align="center" justify="between">

                    <x-aura::flex direction="col" align="start" gap="1">

                        <x-aura::heading level="3" size="sm">
                            Alex Kovacs
                        </x-aura::heading>

                        <x-aura::text size="sm" variant="subtle">
                            alex@example.com
                        </x-aura::text>

                    </x-aura::flex>

                    <x-aura::flex align="center" gap="2">

                        <x-aura::icon-button icon="eye" variant="ghost" size="sm" label="View" />

                        <x-aura::icon-button icon="pencil" variant="ghost" size="sm" label="Edit" />

                        <x-aura::icon-button icon="trash-2" variant="danger" size="sm" label="Delete" />

                    </x-aura::flex>

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::card size="2xl" gap="4">

                    <x-aura::flex align="center" justify="between">

                        <x-aura::flex direction="col" align="start" gap="1">

                            <x-aura::heading level="3" size="sm">
                                Alex Kovacs
                            </x-aura::heading>

                            <x-aura::text size="sm" variant="subtle">
                                alex@example.com
                            </x-aura::text>

                        </x-aura::flex>

                        <x-aura::flex align="center" gap="2">

                            <x-aura::icon-button icon="eye" variant="ghost" size="sm" label="View" />

                            <x-aura::icon-button icon="pencil" variant="ghost" size="sm" label="Edit" />

                            <x-aura::icon-button icon="trash-2" variant="danger" size="sm" label="Delete" />

                        </x-aura::flex>

                    </x-aura::flex>

                </x-aura::card>
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
                Available properties and configurations for the icon button component.
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
                            icon
                        </x-aura::text>

                        <x-aura::tooltip text="Icon name identifier from icon suite" position="top">

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
                        Icon name string
                    </x-aura::text>
                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            variant
                        </x-aura::text>

                        <x-aura::tooltip text="Visual intent and button styling variant" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        secondary
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

                        <x-aura::badge variant="subtle" size="md">
                            primary
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            secondary
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            filled
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            subtle
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            outline
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            ghost
                        </x-aura::badge>

                        <x-aura::badge variant="danger" size="md">
                            danger
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

                        <x-aura::tooltip text="Icon button dimensions and SVG size scale" position="top">

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
                            shape
                        </x-aura::text>

                        <x-aura::tooltip text="Geometry shape (square or circle)" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        square
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

                        <x-aura::badge variant="subtle" size="md">
                            square
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            circle
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            type
                        </x-aura::text>

                        <x-aura::tooltip text="Native HTML button type attribute" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        button
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

                        <x-aura::badge variant="subtle" size="md">
                            button
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            submit
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            reset
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            label
                        </x-aura::text>

                        <x-aura::tooltip text="Accessible aria label for screen readers and tooltips" position="top">

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
                        Label string
                    </x-aura::text>
                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            href
                        </x-aura::text>

                        <x-aura::tooltip text="Render icon button as anchor link element" position="top">

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
                        URL link string
                    </x-aura::text>
                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            disabled
                        </x-aura::text>

                        <x-aura::tooltip text="Disable user interaction and lower opacity" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        false
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

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            loading
                        </x-aura::text>

                        <x-aura::tooltip text="Display loading spinner during async actions" position="top">

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

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

                        <x-aura::badge variant="subtle" size="md">
                            true
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            false
                        </x-aura::badge>

                        <x-aura::text size="sm" variant="subtle">
                            Livewire target string
                        </x-aura::text>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

        </x-aura::table>

    </x-aura::card>

</x-aura::container>

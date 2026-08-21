<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Breadcrumb — Aura Wire')] 
class extends Component {
    public function with(): array
    {
        return [
            'simpleItems' => [
                ['label' => 'Home', 'href' => '#'],
                ['label' => 'Components', 'href' => '#'],
                ['label' => 'Breadcrumb'],
            ],
            'deepItems' => [
                ['label' => 'Workspace', 'href' => '#'],
                ['label' => 'Settings', 'href' => '#'],
                ['label' => 'Security', 'href' => '#'],
                ['label' => 'Audit Logs'],
            ],
        ];
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
            Breadcrumb
        </x-aura::heading>

        <x-aura::subheading size="md">
            Hierarchy navigation trails supporting plain text, rectangular panel containers, pill shaped badge groups, and custom separators.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::breadcrumb :items="$items" separator="chevron" variant="plain" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Separators -->
    <x-aura::code title="1. Separator Varieties">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex direction="col" align="start" gap="4">

                    <x-aura::breadcrumb :items="$simpleItems" separator="chevron" />

                    <x-aura::breadcrumb :items="$simpleItems" separator="slash" />

                    <x-aura::breadcrumb :items="$simpleItems" separator="dot" />

                    <x-aura::breadcrumb :items="$simpleItems" separator="arrow" />

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::breadcrumb :items="$items" separator="chevron" />
                <x-aura::breadcrumb :items="$items" separator="slash" />
                <x-aura::breadcrumb :items="$items" separator="dot" />
                <x-aura::breadcrumb :items="$items" separator="arrow" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Enclosed Bar Container -->
    <x-aura::code title="2. Enclosed Panel Bar (variant=rectangle)">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::breadcrumb :items="$deepItems" variant="rectangle" separator="chevron" />

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::breadcrumb :items="$deepItems" variant="rectangle" separator="chevron" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 3. Pill Badge Group -->
    <x-aura::code title="3. Pill Navigation Badge Group (variant=pills)">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::breadcrumb :items="$simpleItems" variant="pills" />

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::breadcrumb :items="$simpleItems" variant="pills" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 4. Home Icon Navigation -->
    <x-aura::code title="4. Home Icon and Root Trail (:homeIcon=true)">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::breadcrumb :items="$deepItems" :homeIcon="true" separator="chevron" />

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::breadcrumb :items="$deepItems" :homeIcon="true" separator="chevron" />
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
                Available properties and configurations for the breadcrumb component.
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
                            items
                        </x-aura::text>

                        <x-aura::tooltip text="Array of breadcrumb items with label and optional href" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="subtle" size="md">
                        []
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::text size="sm" variant="subtle">
                        Array of associative items
                    </x-aura::text>
                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            separator
                        </x-aura::text>

                        <x-aura::tooltip text="Visual divider glyph placed between route crumbs" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        chevron
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

                        <x-aura::badge variant="subtle" size="md">
                            chevron
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            slash
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            dot
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            arrow
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

                        <x-aura::tooltip text="Outer container boundary presentation format" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        plain
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

                        <x-aura::badge variant="subtle" size="md">
                            plain
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            rectangle
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            pills
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

        </x-aura::table>

    </x-aura::card>

</x-aura::container>

<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Sheet — Aura Wire')] 
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
            Sheet
        </x-aura::heading>

        <x-aura::subheading size="md">
            Slide over panels for filter options, mobile navigation drawers, bottom action sheets, and side parameter panels.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::button variant="primary" x-on:click="$dispatch('open-sheet', 'filters')">
                    Filters
                </x-aura::button>

                <x-aura::sheet name="filters" side="right" title="Filter Records">
                    <p>Sheet content...</p>
                </x-aura::sheet>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Right Slide-Out Sheet -->
    <x-aura::code title="1. Right Slide Out Sheet">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex align="center" gap="3">

                    <x-aura::button variant="primary" x-on:click="$dispatch('open-sheet', 'filter-sheet')">
                        Filter
                    </x-aura::button>

                    <x-aura::sheet name="filter-sheet" side="right" maxWidth="md" title="Filter Products" description="Refine catalog search results.">

                        <x-aura::flex direction="col" align="stretch" gap="4">

                            <x-aura::field label="Category">

                                <x-aura::select>
                                    <option>All Categories</option>
                                    <option>Studio Headphones</option>
                                    <option>Mechanical Keyboards</option>
                                </x-aura::select>

                            </x-aura::field>

                            <x-aura::field label="Availability">

                                <x-aura::select>
                                    <option>In Stock</option>
                                    <option>Pre Order</option>
                                    <option>All Items</option>
                                </x-aura::select>

                            </x-aura::field>

                        </x-aura::flex>

                        <x-slot:footer>

                            <x-aura::button variant="ghost" size="sm" x-on:click="$dispatch('close-sheet', 'filter-sheet')">
                                Cancel
                            </x-aura::button>

                            <x-aura::button variant="primary" size="sm" x-on:click="$dispatch('close-sheet', 'filter-sheet')">
                                Apply
                            </x-aura::button>

                        </x-slot:footer>

                    </x-aura::sheet>

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::button variant="primary" x-on:click="$dispatch('open-sheet', 'filter-sheet')">
                    Filter
                </x-aura::button>

                <x-aura::sheet name="filter-sheet" side="right" maxWidth="md" title="Filter Products">
                    <x-aura::flex direction="col" align="stretch" gap="4">
                        <x-aura::field label="Category">
                            <x-aura::select>
                                <option>All Categories</option>
                                <option>Studio Headphones</option>
                            </x-aura::select>
                        </x-aura::field>
                    </x-aura::flex>

                    <x-slot:footer>
                        <x-aura::button variant="ghost" size="sm" x-on:click="$dispatch('close-sheet', 'filter-sheet')">
                            Cancel
                        </x-aura::button>

                        <x-aura::button variant="primary" size="sm" x-on:click="$dispatch('close-sheet', 'filter-sheet')">
                            Apply
                        </x-aura::button>
                    </x-slot:footer>
                </x-aura::sheet>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Left Slide-Out Navigation Drawer -->
    <x-aura::code title="2. Left Navigation Drawer (side=left)">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex align="center" gap="3">

                    <x-aura::button variant="outline" icon="menu" x-on:click="$dispatch('open-sheet', 'nav-sheet')">
                        Navigation
                    </x-aura::button>

                    <x-aura::sheet name="nav-sheet" side="left" maxWidth="sm" title="Application Menu" description="Quick switch workspace portals.">

                        <x-aura::flex direction="col" gap="2">

                            <x-aura::link href="/guest" size="sm">
                                Guest Design Portal
                            </x-aura::link>

                            <x-aura::link href="/admin" size="sm">
                                Admin Dashboard
                            </x-aura::link>

                            <x-aura::link href="/user" size="sm">
                                User Workspace
                            </x-aura::link>

                            <x-aura::link href="/components" size="sm">
                                Component Suite
                            </x-aura::link>

                        </x-aura::flex>

                    </x-aura::sheet>

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::button variant="outline" icon="menu" x-on:click="$dispatch('open-sheet', 'nav-sheet')">
                    Navigation
                </x-aura::button>

                <x-aura::sheet name="nav-sheet" side="left" maxWidth="sm" title="Application Menu">
                    <x-aura::flex direction="col" gap="2">
                        <x-aura::link href="/guest" size="sm">Guest Portal</x-aura::link>
                        <x-aura::link href="/admin" size="sm">Admin Dashboard</x-aura::link>
                    </x-aura::flex>
                </x-aura::sheet>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 3. Bottom Action Sheet -->
    <x-aura::code title="3. Bottom Action Sheet (side=bottom)">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex align="center" gap="3">

                    <x-aura::button variant="secondary" icon="share-2" x-on:click="$dispatch('open-sheet', 'share-sheet')">
                        Share
                    </x-aura::button>

                    <x-aura::sheet name="share-sheet" side="bottom" title="Share Project" description="Distribute collaboration link to team members.">

                        <x-aura::flex align="center" gap="3" :wrap="true">

                            <x-aura::button variant="outline" size="sm" icon="copy">
                                Copy
                            </x-aura::button>

                            <x-aura::button variant="outline" size="sm" icon="mail">
                                Email
                            </x-aura::button>

                            <x-aura::button variant="outline" size="sm" icon="qr-code">
                                Code
                            </x-aura::button>

                        </x-aura::flex>

                    </x-aura::sheet>

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::button variant="secondary" icon="share-2" x-on:click="$dispatch('open-sheet', 'share-sheet')">
                    Share
                </x-aura::button>

                <x-aura::sheet name="share-sheet" side="bottom" title="Share Project">
                    <x-aura::flex align="center" gap="3" :wrap="true">
                        <x-aura::button variant="outline" size="sm" icon="copy">Copy</x-aura::button>
                        <x-aura::button variant="outline" size="sm" icon="mail">Email</x-aura::button>
                    </x-aura::flex>
                </x-aura::sheet>
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
                Available properties and configurations for the sheet component.
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
                            side
                        </x-aura::text>

                        <x-aura::tooltip text="Screen edge from which the drawer slides out" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        right
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

                        <x-aura::badge variant="subtle" size="md">
                            right
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            left
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            top
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            bottom
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            maxWidth
                        </x-aura::text>

                        <x-aura::tooltip text="Maximum drawer panel width preset" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        sm
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

                        <x-aura::badge variant="subtle" size="md">
                            full
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

        </x-aura::table>

    </x-aura::card>

</x-aura::container>

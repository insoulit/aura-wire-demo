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

            <x-aura::badge variant="subtle" size="sm">
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

                    <x-aura::sheet name="filter-sheet" side="right" maxWidth="md" title="Filter Products" description="Refine catalog results.">

                        <x-aura::flex direction="col" align="stretch" class="w-full" gap="4">

                            <x-aura::field label="Category">
                                <x-aura::select :options="['All Categories', 'Audio', 'Keyboards']" />
                            </x-aura::field>

                            <x-aura::field label="Status">
                                <x-aura::select :options="['In Stock', 'Pre Order', 'All']" />
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

                <x-aura::sheet name="filter-sheet" side="right" maxWidth="md" title="Filter Products" description="Refine catalog results.">

                    <x-aura::flex direction="col" align="stretch" class="w-full" gap="4">

                        <x-aura::field label="Category">
                            <x-aura::select :options="['All Categories', 'Audio', 'Keyboards']" />
                        </x-aura::field>

                        <x-aura::field label="Status">
                            <x-aura::select :options="['In Stock', 'Pre Order', 'All']" />
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

</x-aura::container>

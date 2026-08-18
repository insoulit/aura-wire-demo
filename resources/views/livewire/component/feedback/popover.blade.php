<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Popover — Aura Wire')] 
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
            Popover
        </x-aura::heading>

        <x-aura::subheading size="md">
            Floating rich content popover panels with click outside dismissal, flexible alignments, and customizable trigger slots.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::popover>
                    <x-slot:trigger>
                        <x-aura::button>
                            Open
                        </x-aura::button>
                    </x-slot:trigger>

                    <div>
                        Content
                    </div>
                </x-aura::popover>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Filter Popover -->
    <x-aura::code title="1. Filter Popover">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex align="center" justify="center" class="w-full py-8">

                    <x-aura::popover align="left" width="72">

                        <x-slot:trigger>

                            <x-aura::button variant="secondary" size="sm" icon="sliders-horizontal">
                                Filter
                            </x-aura::button>

                        </x-slot:trigger>

                        <x-aura::flex direction="col" align="stretch" class="w-full" gap="3">

                            <x-aura::flex align="center" justify="between" class="w-full border-b border-zinc-100 dark:border-zinc-800 pb-2">

                                <x-aura::text size="xs" weight="bold">
                                    CRITERIA
                                </x-aura::text>

                                <x-aura::badge variant="subtle" size="sm">
                                    Active
                                </x-aura::badge>

                            </x-aura::flex>

                            <x-aura::flex direction="col" align="start" gap="2">

                                <x-aura::checkbox label="In Stock Only" checked />

                                <x-aura::checkbox label="On Sale" checked />

                            </x-aura::flex>

                            <x-aura::flex align="center" justify="end" gap="2" class="pt-2 border-t border-zinc-100 dark:border-zinc-800">

                                <x-aura::button variant="primary" size="xs">
                                    Apply
                                </x-aura::button>

                            </x-aura::flex>

                        </x-aura::flex>

                    </x-aura::popover>

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::popover align="left" width="72">

                    <x-slot:trigger>

                        <x-aura::button variant="secondary" size="sm" icon="sliders-horizontal">
                            Filter
                        </x-aura::button>

                    </x-slot:trigger>

                    <x-aura::flex direction="col" align="stretch" class="w-full" gap="3">

                        <x-aura::flex align="center" justify="between" class="w-full border-b border-zinc-100 dark:border-zinc-800 pb-2">

                            <x-aura::text size="xs" weight="bold">
                                CRITERIA
                            </x-aura::text>

                            <x-aura::badge variant="subtle" size="sm">
                                Active
                            </x-aura::badge>

                        </x-aura::flex>

                        <x-aura::flex direction="col" align="start" gap="2">

                            <x-aura::checkbox label="In Stock Only" checked />

                            <x-aura::checkbox label="On Sale" checked />

                        </x-aura::flex>

                        <x-aura::flex align="center" justify="end" gap="2" class="pt-2 border-t border-zinc-100 dark:border-zinc-800">

                            <x-aura::button variant="primary" size="xs">
                                Apply
                            </x-aura::button>

                        </x-aura::flex>

                    </x-aura::flex>

                </x-aura::popover>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>

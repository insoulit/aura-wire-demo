<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Button Group — Aura Wire')] 
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
            Button Group
        </x-aura::heading>

        <x-aura::subheading size="md">
            Group related buttons into cohesive segmented controls, toolbars, and layout actions.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::action.group>

                    <x-aura::button variant="secondary" size="sm">
                        Day
                    </x-aura::button>

                    <x-aura::button variant="secondary" size="sm">
                        Week
                    </x-aura::button>

                </x-aura::action.group>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Horizontal Segmented Controls -->
    <x-aura::code title="1. Horizontal Segmented Controls">

        <x-slot:preview>

            <x-aura::flex direction="col" align="start" class="w-full" gap="4">

                <x-aura::action.group>

                    <x-aura::button variant="primary" size="sm">
                        Day
                    </x-aura::button>

                    <x-aura::button variant="secondary" size="sm">
                        Week
                    </x-aura::button>

                    <x-aura::button variant="secondary" size="sm">
                        Month
                    </x-aura::button>

                    <x-aura::button variant="secondary" size="sm">
                        Year
                    </x-aura::button>

                </x-aura::action.group>

                <x-aura::action.group shape="compact">

                    <x-aura::button variant="outline" size="sm">
                        List
                    </x-aura::button>

                    <x-aura::button variant="outline" size="sm">
                        Grid
                    </x-aura::button>

                    <x-aura::button variant="outline" size="sm">
                        Map
                    </x-aura::button>

                </x-aura::action.group>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::action.group>

                    <x-aura::button variant="primary" size="sm">
                        Day
                    </x-aura::button>

                    <x-aura::button variant="secondary" size="sm">
                        Week
                    </x-aura::button>

                    <x-aura::button variant="secondary" size="sm">
                        Month
                    </x-aura::button>

                    <x-aura::button variant="secondary" size="sm">
                        Year
                    </x-aura::button>

                </x-aura::action.group>

                <x-aura::action.group shape="compact">

                    <x-aura::button variant="outline" size="sm">
                        List
                    </x-aura::button>

                    <x-aura::button variant="outline" size="sm">
                        Grid
                    </x-aura::button>

                    <x-aura::button variant="outline" size="sm">
                        Map
                    </x-aura::button>

                </x-aura::action.group>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Icon Action Toolbar Group -->
    <x-aura::code title="2. Icon Action Toolbar Group">

        <x-slot:preview>

            <x-aura::flex align="center" gap="4" class="flex-wrap">

                <x-aura::action.group shape="compact">

                    <x-aura::icon-button icon="pencil" variant="secondary" shape="square" size="sm" label="Edit" />

                    <x-aura::icon-button icon="eye" variant="secondary" shape="square" size="sm" label="View" />

                    <x-aura::icon-button icon="share-2" variant="secondary" shape="square" size="sm" label="Share" />

                    <x-aura::icon-button icon="trash-2" variant="danger" shape="square" size="sm" label="Delete" />

                </x-aura::action.group>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::action.group shape="compact">

                    <x-aura::icon-button icon="pencil" variant="secondary" shape="square" size="sm" label="Edit" />

                    <x-aura::icon-button icon="eye" variant="secondary" shape="square" size="sm" label="View" />

                    <x-aura::icon-button icon="share-2" variant="secondary" shape="square" size="sm" label="Share" />

                    <x-aura::icon-button icon="trash-2" variant="danger" shape="square" size="sm" label="Delete" />

                </x-aura::action.group>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 3. Vertical Stacked Button Group -->
    <x-aura::code title="3. Vertical Stacked Button Group">

        <x-slot:preview>

            <x-aura::flex align="start" class="w-full">

                <x-aura::action.group vertical shape="compact">

                    <x-aura::button variant="outline" size="sm">
                        High
                    </x-aura::button>

                    <x-aura::button variant="outline" size="sm">
                        Medium
                    </x-aura::button>

                    <x-aura::button variant="outline" size="sm">
                        Low
                    </x-aura::button>

                </x-aura::action.group>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::action.group vertical shape="compact">

                    <x-aura::button variant="outline" size="sm">
                        High
                    </x-aura::button>

                    <x-aura::button variant="outline" size="sm">
                        Medium
                    </x-aura::button>

                    <x-aura::button variant="outline" size="sm">
                        Low
                    </x-aura::button>

                </x-aura::action.group>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>

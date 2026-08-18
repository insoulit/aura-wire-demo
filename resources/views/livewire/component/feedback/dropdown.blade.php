<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Dropdown — Aura Wire')] 
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
            Dropdown
        </x-aura::heading>

        <x-aura::subheading size="md">
            Contextual popover menus with support for headers, icon items, badges, separators, and danger actions.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::dropdown>
                    <x-slot:trigger>
                        <x-aura::button>
                            Options
                        </x-aura::button>
                    </x-slot:trigger>

                    <x-aura::dropdown.item icon="user">
                        Profile
                    </x-aura::dropdown.item>
                </x-aura::dropdown>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Action Menu -->
    <x-aura::code title="1. Action Menu">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex align="center" justify="center" class="w-full py-12">

                    <x-aura::dropdown align="right" width="56">

                        <x-slot:trigger>

                            <x-aura::button variant="secondary" icon-trailing="chevron-down">
                                Actions
                            </x-aura::button>

                        </x-slot:trigger>

                        <x-aura::dropdown.header>
                            Manage
                        </x-aura::dropdown.header>

                        <x-aura::dropdown.item href="#" icon="pencil">
                            Edit
                        </x-aura::dropdown.item>

                        <x-aura::dropdown.item href="#" icon="copy" badge="⌘C">
                            Duplicate
                        </x-aura::dropdown.item>

                        <x-aura::dropdown.separator />

                        <x-aura::dropdown.item href="#" icon="trash-2" variant="danger">
                            Delete
                        </x-aura::dropdown.item>

                    </x-aura::dropdown>

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::dropdown align="right" width="56">

                    <x-slot:trigger>

                        <x-aura::button variant="secondary" icon-trailing="chevron-down">
                            Actions
                        </x-aura::button>

                    </x-slot:trigger>

                    <x-aura::dropdown.header>
                        Manage
                    </x-aura::dropdown.header>

                    <x-aura::dropdown.item href="#" icon="pencil">
                        Edit
                    </x-aura::dropdown.item>

                    <x-aura::dropdown.item href="#" icon="copy" badge="⌘C">
                        Duplicate
                    </x-aura::dropdown.item>

                    <x-aura::dropdown.separator />

                    <x-aura::dropdown.item href="#" icon="trash-2" variant="danger">
                        Delete
                    </x-aura::dropdown.item>

                </x-aura::dropdown>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>

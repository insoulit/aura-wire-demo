<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Command — Aura Wire')] 
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
            Command
        </x-aura::heading>

        <x-aura::subheading size="md">
            Keyboard driven command palette modal dialog listening on Cmd+K / Ctrl+K with instant search filtering.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::command key="k" placeholder="Type a command..." />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Trigger -->
    <x-aura::code title="1. Command Palette Trigger">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex align="center" justify="center" class="w-full py-4">

                    <x-aura::button variant="secondary" size="md" icon="search" @click="$dispatch('open-command')">
                        Search
                    </x-aura::button>

                    <x-aura::command placeholder="Type a command or search documentation...">

                        <x-aura::command.group title="Navigation">

                            <x-aura::command.item href="/components/button" icon="square-mouse-pointer" shortcut="⌘B">
                                Button
                            </x-aura::command.item>

                            <x-aura::command.item href="/components/modal" icon="panel-top" shortcut="⌘M">
                                Modal
                            </x-aura::command.item>

                        </x-aura::command.group>

                    </x-aura::command>

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::button variant="secondary" size="md" icon="search" @click="$dispatch('open-command')">
                    Search
                </x-aura::button>

                <x-aura::command placeholder="Type a command or search documentation...">

                    <x-aura::command.group title="Navigation">

                        <x-aura::command.item href="/components/button" icon="square-mouse-pointer" shortcut="⌘B">
                            Button
                        </x-aura::command.item>

                        <x-aura::command.item href="/components/modal" icon="panel-top" shortcut="⌘M">
                            Modal
                        </x-aura::command.item>

                    </x-aura::command.group>

                </x-aura::command>
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
                Available properties and configurations for the command palette component.
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
                            placeholder
                        </x-aura::text>

                        <x-aura::tooltip text="Input search box placeholder text" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        Type a command or search...
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::text size="sm" variant="subtle">
                        Placeholder search string
                    </x-aura::text>
                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            key
                        </x-aura::text>

                        <x-aura::tooltip text="Keyboard hotkey trigger listening combined with Meta or Ctrl" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        k
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

                        <x-aura::badge variant="subtle" size="md">
                            k
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            p
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            /
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

        </x-aura::table>

    </x-aura::card>

</x-aura::container>

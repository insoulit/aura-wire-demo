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

            <x-aura::badge variant="subtle" size="sm">
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
                <x-aura::command shortcut="meta.k" placeholder="Type a command..." />
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

</x-aura::container>

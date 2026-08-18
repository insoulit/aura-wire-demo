<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Keyboard (Kbd) — Aura Wire')] 
class extends Component {};

?>

<x-aura::container gap="8" :padding="false">

    <!-- Header -->
    <x-aura::card size="full" gap="2">

        <x-aura::flex align="center" gap="2.5">

            <x-aura::kicker>
                Typography
            </x-aura::kicker>

            <x-aura::badge variant="subtle" size="sm">
                Component
            </x-aura::badge>

        </x-aura::flex>

        <x-aura::heading level="1" size="xl">
            Keyboard (Kbd)
        </x-aura::heading>

        <x-aura::subheading size="md">
            Keyboard keycap component designed to display single shortcuts, key sequences, and command combinations with 3D tactile elevation.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::kbd>
                    ⌘K
                </x-aura::kbd>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Common Shortcut Combinations -->
    <x-aura::code title="1. Common Shortcut Combinations">

        <x-slot:preview>

            <x-aura::flex direction="col" align="start" class="w-full" gap="4">

                <x-aura::card size="md" gap="2">

                    <x-aura::flex align="center" justify="between" class="w-full">

                        <x-aura::text size="sm" weight="medium">
                            Open Command Palette
                        </x-aura::text>

                        <x-aura::flex align="center" gap="1">

                            <x-aura::kbd>
                                ⌘
                            </x-aura::kbd>

                            <x-aura::kbd>
                                K
                            </x-aura::kbd>

                        </x-aura::flex>

                    </x-aura::flex>

                </x-aura::card>

                <x-aura::card size="md" gap="2">

                    <x-aura::flex align="center" justify="between" class="w-full">

                        <x-aura::text size="sm" weight="medium">
                            Quick Save File
                        </x-aura::text>

                        <x-aura::flex align="center" gap="1">

                            <x-aura::kbd>
                                Ctrl
                            </x-aura::kbd>

                            <x-aura::kbd>
                                S
                            </x-aura::kbd>

                        </x-aura::flex>

                    </x-aura::flex>

                </x-aura::card>

                <x-aura::card size="md" gap="2">

                    <x-aura::flex align="center" justify="between" class="w-full">

                        <x-aura::text size="sm" weight="medium">
                            Close Active Modal
                        </x-aura::text>

                        <x-aura::kbd>
                            Esc
                        </x-aura::kbd>

                    </x-aura::flex>

                </x-aura::card>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::flex align="center" gap="1">

                    <x-aura::kbd>
                        ⌘
                    </x-aura::kbd>

                    <x-aura::kbd>
                        K
                    </x-aura::kbd>

                </x-aura::flex>

                <x-aura::flex align="center" gap="1">

                    <x-aura::kbd>
                        Ctrl
                    </x-aura::kbd>

                    <x-aura::kbd>
                        S
                    </x-aura::kbd>

                </x-aura::flex>

                <x-aura::kbd>
                    Esc
                </x-aura::kbd>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Style Variants -->
    <x-aura::code title="2. Style Variants">

        <x-slot:preview>

            <x-aura::flex align="center" gap="6" class="flex-wrap">

                <x-aura::kbd variant="default">
                    ⌘K
                </x-aura::kbd>

                <x-aura::kbd variant="outline">
                    ⌘K
                </x-aura::kbd>

                <x-aura::kbd variant="solid">
                    ⌘K
                </x-aura::kbd>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::kbd variant="default">
                    ⌘K
                </x-aura::kbd>

                <x-aura::kbd variant="outline">
                    ⌘K
                </x-aura::kbd>

                <x-aura::kbd variant="solid">
                    ⌘K
                </x-aura::kbd>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 3. Size Scales -->
    <x-aura::code title="3. Size Scales">

        <x-slot:preview>

            <x-aura::flex align="center" gap="6" class="flex-wrap">

                <x-aura::kbd size="lg">
                    Shift
                </x-aura::kbd>

                <x-aura::kbd size="md">
                    Shift
                </x-aura::kbd>

                <x-aura::kbd size="sm">
                    Shift
                </x-aura::kbd>

                <x-aura::kbd size="xs">
                    Shift
                </x-aura::kbd>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::kbd size="lg">
                    Shift
                </x-aura::kbd>

                <x-aura::kbd size="md">
                    Shift
                </x-aura::kbd>

                <x-aura::kbd size="sm">
                    Shift
                </x-aura::kbd>

                <x-aura::kbd size="xs">
                    Shift
                </x-aura::kbd>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>

<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Textarea — Aura Wire')] 
class extends Component {
    public string $bio = 'Staff Engineer building high contrast accessible component primitives for modern web applications.';
    public string $notes = '';
};

?>

<x-aura::container gap="8" :padding="false">

    <!-- Header -->
    <x-aura::card size="full" gap="2">

        <x-aura::flex align="center" gap="2.5">

            <x-aura::kicker>
                Form
            </x-aura::kicker>

            <x-aura::badge variant="subtle" size="md">
                Component
            </x-aura::badge>

        </x-aura::flex>

        <x-aura::heading level="1" size="xl">
            Textarea
        </x-aura::heading>

        <x-aura::subheading size="md">
            Multi line text input field supporting auto resize, custom row count, labels, and error states.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::textarea wire:model="bio" :rows="4" label="Biography" placeholder="Tell us about yourself..." />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Textarea Control with Label & Hint -->
    <x-aura::code title="1. Textarea with Label and Hint">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::textarea
                    wire:model="bio"
                    :rows="4"
                    label="Public Biography"
                    hint="Brief description for your team profile card. Max 300 characters."
                    placeholder="Tell us about yourself..."
                />

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::textarea
                    wire:model="bio"
                    :rows="4"
                    label="Public Biography"
                    hint="Brief description for your team profile card. Max 300 characters."
                    placeholder="Tell us about yourself..."
                />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Row Height Variations -->
    <x-aura::code title="2. Row Height Variations">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex direction="col" gap="4">

                    <x-aura::textarea
                        :rows="2"
                        label="Quick Comment (rows=2)"
                        placeholder="Leave a short note..."
                    />

                    <x-aura::textarea
                        :rows="6"
                        label="Release Notes Markdown (rows=6)"
                        placeholder="Paste detailed changelog items..."
                    />

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::textarea :rows="2" label="Quick Comment (rows=2)" placeholder="Leave a short note..." />
                <x-aura::textarea :rows="6" label="Release Notes (rows=6)" placeholder="Paste detailed changelog..." />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 3. Required State & Error Styling -->
    <x-aura::code title="3. Required and Error Validation States">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex direction="col" gap="4">

                    <x-aura::textarea
                        :required="true"
                        label="Incident Summary"
                        hint="Mandatory post mortem analysis documentation."
                        placeholder="Describe root cause and resolution..."
                    />

                    <x-aura::textarea
                        label="Special Instructions"
                        :invalid="true"
                        error="This field cannot exceed 500 characters."
                        placeholder="Enter instructions..."
                    />

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::textarea
                    :required="true"
                    label="Incident Summary"
                    hint="Mandatory post mortem documentation."
                    placeholder="Describe root cause..."
                />

                <x-aura::textarea
                    label="Special Instructions"
                    :invalid="true"
                    error="This field cannot exceed 500 characters."
                />
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
                Available properties and configurations for the textarea component.
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
                            rows
                        </x-aura::text>

                        <x-aura::tooltip text="Initial visible text lines count" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        3
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::text size="sm" variant="subtle">
                        Positive integer (e.g. 2, 4, 6)
                    </x-aura::text>
                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            label
                        </x-aura::text>

                        <x-aura::tooltip text="Header label string for the textarea" position="top">

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
                            required
                        </x-aura::text>

                        <x-aura::tooltip text="Show required asterisk on label" position="top">

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

        </x-aura::table>

    </x-aura::card>

</x-aura::container>

<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Select — Aura Wire')] 
class extends Component {
    public string $selected = 'us';
    public string $tier = 'pro';
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
            Select
        </x-aura::heading>

        <x-aura::subheading size="md">
            Native option selection dropdowns supporting option arrays, key value maps, custom slots, and field validation.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::select wire:model="selected" label="Country" :options="['us' => 'United States', 'ca' => 'Canada']" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Array Options Map -->
    <x-aura::code title="1. Key Value Array Options">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::select
                    wire:model="selected"
                    label="Primary Region"
                    hint="Select the data center closest to your main user base."
                    :options="[
                        'us-east' => 'US East (N. Virginia)',
                        'us-west' => 'US West (Oregon)',
                        'eu-central' => 'EU Central (Frankfurt)',
                        'ap-southeast' => 'Asia Pacific (Singapore)',
                    ]"
                />

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::select
                    wire:model="selected"
                    label="Primary Region"
                    hint="Select the data center closest to your main user base."
                    :options="[
                        'us-east' => 'US East (N. Virginia)',
                        'us-west' => 'US West (Oregon)',
                        'eu-central' => 'EU Central (Frankfurt)',
                        'ap-southeast' => 'Asia Pacific (Singapore)',
                    ]"
                />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Select Sizes -->
    <x-aura::code title="2. Size Variations">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex direction="col" gap="4">

                    <x-aura::select size="sm" :options="['sm' => 'Small Select (sm)', 'opt2' => 'Option 2']" />

                    <x-aura::select size="md" :options="['md' => 'Medium Select (md)', 'opt2' => 'Option 2']" />

                    <x-aura::select size="lg" :options="['lg' => 'Large Select (lg)', 'opt2' => 'Option 2']" />

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::select size="sm" :options="['sm' => 'Small (sm)']" />
                <x-aura::select size="md" :options="['md' => 'Medium (md)']" />
                <x-aura::select size="lg" :options="['lg' => 'Large (lg)']" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 3. Custom Option Slot Children -->
    <x-aura::code title="3. Custom Slot Options and Placeholder">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::select placeholder="Choose a membership tier...">
                    <option value="starter">Starter Plan ($19/mo)</option>
                    <option value="pro">Professional Plan ($49/mo)</option>
                    <option value="enterprise">Enterprise Plan ($199/mo)</option>
                </x-aura::select>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::select placeholder="Choose a membership tier...">
                    <option value="starter">Starter Plan ($19/mo)</option>
                    <option value="pro">Professional Plan ($49/mo)</option>
                    <option value="enterprise">Enterprise Plan ($199/mo)</option>
                </x-aura::select>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 4. Required Field with Validation State -->
    <x-aura::code title="4. Required Field State">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::select
                    label="Account Currency"
                    :required="true"
                    hint="Currency cannot be changed once transactions have occurred."
                    :options="['USD' => 'USD ($)', 'EUR' => 'EUR (€)', 'GBP' => 'GBP (£)']"
                />

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::select
                    label="Account Currency"
                    :required="true"
                    hint="Currency cannot be changed once transactions have occurred."
                    :options="['USD' => 'USD ($)', 'EUR' => 'EUR (€)', 'GBP' => 'GBP (£)']"
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
                Available properties and configurations for the select dropdown component.
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
                            options
                        </x-aura::text>

                        <x-aura::tooltip text="Array or associative map of selectable items" position="top">

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
                        Associative array or flat list
                    </x-aura::text>
                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            size
                        </x-aura::text>

                        <x-aura::tooltip text="Vertical padding and font scale preset" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        md
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

                        <x-aura::badge variant="subtle" size="md">
                            sm
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            md
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            lg
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            label
                        </x-aura::text>

                        <x-aura::tooltip text="Header label string for the input field" position="top">

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

                        <x-aura::tooltip text="Show required asterisk badge" position="top">

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

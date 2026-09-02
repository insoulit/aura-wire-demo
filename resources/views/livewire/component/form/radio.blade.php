<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Radio — Aura Wire')] 
class extends Component {
    public string $plan = 'pro';
    public string $billing = 'annual';
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
            Radio
        </x-aura::heading>

        <x-aura::subheading size="md">
            Exclusive single option radio buttons for selection lists, tier options, and preference choices.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::radio wire:model="plan" value="pro" label="Pro Tier" description="$49 per month." />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Basic Radio Group -->
    <x-aura::code title="1. Basic Radio Group">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex direction="col" align="start" gap="2.5">

                    <x-aura::radio wire:model.live="plan" value="free" label="Free Tier" />

                    <x-aura::radio wire:model.live="plan" value="pro" label="Pro Tier" />

                    <x-aura::radio wire:model.live="plan" value="enterprise" label="Enterprise Tier" />

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::flex direction="col" align="start" gap="2.5">
                    <x-aura::radio wire:model="plan" value="free" label="Free Tier" />
                    <x-aura::radio wire:model="plan" value="pro" label="Pro Tier" />
                    <x-aura::radio wire:model="plan" value="enterprise" label="Enterprise Tier" />
                </x-aura::flex>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Radio with Description -->
    <x-aura::code title="2. Radio with Description Subtitles">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex direction="col" gap="4">

                    <x-aura::radio
                        wire:model.live="plan"
                        value="free"
                        label="Starter Developer"
                        description="Single user sandbox with 5k API requests monthly."
                    />

                    <x-aura::radio
                        wire:model.live="plan"
                        value="pro"
                        label="Professional Team"
                        description="Up to 10 team seats with unlimited requests and SLA."
                    />

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::radio
                    wire:model="plan"
                    value="free"
                    label="Starter Developer"
                    description="Single user sandbox with 5k API requests monthly."
                />

                <x-aura::radio
                    wire:model="plan"
                    value="pro"
                    label="Professional Team"
                    description="Up to 10 team seats with unlimited requests and SLA."
                />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 3. Size Variations -->
    <x-aura::code title="3. Size Variations">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex direction="col" gap="3">

                    <x-aura::radio size="xs" label="Extra Small (xs)" :checked="true" name="size_demo_1" />

                    <x-aura::radio size="sm" label="Small (sm)" :checked="true" name="size_demo_2" />

                    <x-aura::radio size="md" label="Medium (md)" :checked="true" name="size_demo_3" />

                    <x-aura::radio size="lg" label="Large (lg)" :checked="true" name="size_demo_4" />

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::radio size="xs" label="Extra Small (xs)" :checked="true" />
                <x-aura::radio size="sm" label="Small (sm)" :checked="true" />
                <x-aura::radio size="md" label="Medium (md)" :checked="true" />
                <x-aura::radio size="lg" label="Large (lg)" :checked="true" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 4. Real World Billing Cycle Selection -->
    <x-aura::code title="4. Billing Frequency Selector Card">

        <x-slot:preview>

            <x-aura::card size="2xl" padding="xl" gap="6">

                <x-aura::heading level="3" size="md">
                    Choose Billing Schedule
                </x-aura::heading>

                <x-aura::flex direction="col" gap="4">

                    <x-aura::radio
                        wire:model.live="billing"
                        value="monthly"
                        label="Monthly Billing"
                        description="Billed on the 1st of each calendar month. Cancel anytime."
                    />

                    <x-aura::separator />

                    <x-aura::radio
                        wire:model.live="billing"
                        value="annual"
                        label="Annual Billing (Save 20%)"
                        description="Billed upfront once per year. Includes 2 months free."
                    />

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::card size="2xl" padding="xl" gap="6">
                    <x-aura::heading level="3" size="md">
                        Choose Billing Schedule
                    </x-aura::heading>

                    <x-aura::flex direction="col" gap="4">
                        <x-aura::radio
                            wire:model="billing"
                            value="monthly"
                            label="Monthly Billing"
                            description="Billed on the 1st of each month."
                        />

                        <x-aura::separator />

                        <x-aura::radio
                            wire:model="billing"
                            value="annual"
                            label="Annual Billing (Save 20%)"
                            description="Billed upfront once per year."
                        />
                    </x-aura::flex>
                </x-aura::card>
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
                Available properties and configurations for the radio button component.
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
                            value
                        </x-aura::text>

                        <x-aura::tooltip text="Unique option value submitted or compared against model" position="top">

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
                        Value string or numeric
                    </x-aura::text>
                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            label
                        </x-aura::text>

                        <x-aura::tooltip text="Primary label string for the option" position="top">

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
                            description
                        </x-aura::text>

                        <x-aura::tooltip text="Secondary explanatory text below the option label" position="top">

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
                        Description string
                    </x-aura::text>
                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            size
                        </x-aura::text>

                        <x-aura::tooltip text="Radio circle bounding size preset" position="top">

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

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

        </x-aura::table>

    </x-aura::card>

</x-aura::container>

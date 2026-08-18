<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Badge — Aura Wire')] 
class extends Component {};

?>

<x-aura::container gap="8" :padding="false">

    <!-- Header -->
    <x-aura::card size="full" gap="2">

        <x-aura::flex align="center" gap="2.5">

            <x-aura::kicker>
                Display
            </x-aura::kicker>

            <x-aura::badge variant="subtle" size="sm">
                Component
            </x-aura::badge>

        </x-aura::flex>

        <x-aura::heading level="1" size="xl">
            Badge
        </x-aura::heading>

        <x-aura::subheading size="md">
            Compact status pills and indicators for metadata, order states, role tags, and metric notifications.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::badge variant="subtle" size="sm">
                    Active
                </x-aura::badge>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Variants -->
    <x-aura::code title="1. Badge Variants">

        <x-slot:preview>

            <x-aura::flex align="center" gap="3" class="flex-wrap">

                <x-aura::badge variant="neutral">
                    Neutral
                </x-aura::badge>

                <x-aura::badge variant="subtle">
                    Subtle
                </x-aura::badge>

                <x-aura::badge variant="positive">
                    Completed
                </x-aura::badge>

                <x-aura::badge variant="warning">
                    Pending
                </x-aura::badge>

                <x-aura::badge variant="negative">
                    Failed
                </x-aura::badge>

                <x-aura::badge variant="info">
                    Progress
                </x-aura::badge>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::badge variant="neutral">
                    Neutral
                </x-aura::badge>

                <x-aura::badge variant="subtle">
                    Subtle
                </x-aura::badge>

                <x-aura::badge variant="positive">
                    Completed
                </x-aura::badge>

                <x-aura::badge variant="warning">
                    Pending
                </x-aura::badge>

                <x-aura::badge variant="negative">
                    Failed
                </x-aura::badge>

                <x-aura::badge variant="info">
                    Progress
                </x-aura::badge>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Sizes -->
    <x-aura::code title="2. Badge Sizes">

        <x-slot:preview>

            <x-aura::flex align="center" gap="3" class="flex-wrap">

                <x-aura::badge variant="subtle" size="sm">
                    Small
                </x-aura::badge>

                <x-aura::badge variant="subtle" size="md">
                    Medium
                </x-aura::badge>

                <x-aura::badge variant="subtle" size="lg">
                    Large
                </x-aura::badge>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::badge variant="subtle" size="sm">
                    Small
                </x-aura::badge>

                <x-aura::badge variant="subtle" size="md">
                    Medium
                </x-aura::badge>

                <x-aura::badge variant="subtle" size="lg">
                    Large
                </x-aura::badge>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 3. Real World List Pattern -->
    <x-aura::code title="3. Real World Status Cards">

        <x-slot:preview>

            <x-aura::flex direction="col" align="start" class="w-full" gap="2">

                <x-aura::card size="md" gap="2">

                    <x-aura::flex align="center" justify="between" class="w-full">

                        <x-aura::text size="sm" weight="medium">
                            Order 10429
                        </x-aura::text>

                        <x-aura::badge variant="positive" size="sm">
                            Paid
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::card>

                <x-aura::card size="md" gap="2">

                    <x-aura::flex align="center" justify="between" class="w-full">

                        <x-aura::text size="sm" weight="medium">
                            Order 10428
                        </x-aura::text>

                        <x-aura::badge variant="warning" size="sm">
                            Pending
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::card>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::card size="md" gap="2">

                    <x-aura::flex align="center" justify="between" class="w-full">

                        <x-aura::text size="sm" weight="medium">
                            Order 10429
                        </x-aura::text>

                        <x-aura::badge variant="positive" size="sm">
                            Paid
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::card>

                <x-aura::card size="md" gap="2">

                    <x-aura::flex align="center" justify="between" class="w-full">

                        <x-aura::text size="sm" weight="medium">
                            Order 10428
                        </x-aura::text>

                        <x-aura::badge variant="warning" size="sm">
                            Pending
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::card>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>

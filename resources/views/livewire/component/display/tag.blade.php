<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Tag — Aura Wire')] 
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
            Tag
        </x-aura::heading>

        <x-aura::subheading size="md">
            Compact pills with generous horizontal padding for labeling, filtering, categories, and active filters.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::tag variant="default" size="md">
                    Label
                </x-aura::tag>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Variants -->
    <x-aura::code title="1. Tag Variants">

        <x-slot:preview>

            <x-aura::flex align="center" gap="2.5" class="flex-wrap">

                <x-aura::tag variant="default">
                    Default
                </x-aura::tag>

                <x-aura::tag variant="subtle">
                    Subtle
                </x-aura::tag>

                <x-aura::tag variant="neutral">
                    Neutral
                </x-aura::tag>

                <x-aura::tag variant="outline">
                    Outline
                </x-aura::tag>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::tag variant="default">
                    Default
                </x-aura::tag>

                <x-aura::tag variant="subtle">
                    Subtle
                </x-aura::tag>

                <x-aura::tag variant="neutral">
                    Neutral
                </x-aura::tag>

                <x-aura::tag variant="outline">
                    Outline
                </x-aura::tag>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Sizes -->
    <x-aura::code title="2. Tag Sizes">

        <x-slot:preview>

            <x-aura::flex align="center" gap="3" class="flex-wrap">

                <x-aura::tag size="sm" variant="default">
                    Small
                </x-aura::tag>

                <x-aura::tag size="md" variant="default">
                    Medium
                </x-aura::tag>

                <x-aura::tag size="lg" variant="default">
                    Large
                </x-aura::tag>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::tag size="sm" variant="default">
                    Small
                </x-aura::tag>

                <x-aura::tag size="md" variant="default">
                    Medium
                </x-aura::tag>

                <x-aura::tag size="lg" variant="default">
                    Large
                </x-aura::tag>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>

<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Display — Aura Wire')] 
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
            Display
        </x-aura::heading>

        <x-aura::subheading size="md">
            High impact display typography designed for hero headlines, billboard marketing banners, giant KPI metrics, and landing sections.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::display size="xl">
                    Elevate Your Product
                </x-aura::display>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Display Size Scales -->
    <x-aura::code title="1. Display Size Scales">

        <x-slot:preview>

            <x-aura::flex direction="col" align="start" class="w-full" gap="4">

                <x-aura::display size="2xl">
                    Display 2XL
                </x-aura::display>

                <x-aura::display size="xl">
                    Display XL
                </x-aura::display>

                <x-aura::display size="lg">
                    Display Large
                </x-aura::display>

                <x-aura::display size="md">
                    Display Medium
                </x-aura::display>

                <x-aura::display size="sm">
                    Display Small
                </x-aura::display>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::display size="2xl">
                    Display 2XL
                </x-aura::display>

                <x-aura::display size="xl">
                    Display XL
                </x-aura::display>

                <x-aura::display size="lg">
                    Display Large
                </x-aura::display>

                <x-aura::display size="md">
                    Display Medium
                </x-aura::display>

                <x-aura::display size="sm">
                    Display Small
                </x-aura::display>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Monochrome Gradient Headlines -->
    <x-aura::code title="2. Monochrome Gradient Headlines">

        <x-slot:preview>

            <x-aura::flex direction="col" align="start" class="w-full" gap="4">

                <x-aura::display size="lg" :gradient="true">
                    Built for Modern Web Applications
                </x-aura::display>

                <x-aura::display size="md" gradient="subtle" weight="black">
                    Ship Faster with Aura Wire
                </x-aura::display>

                <x-aura::display size="sm" gradient="fade">
                    The Modern Livewire Standard
                </x-aura::display>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::display size="lg" :gradient="true">
                    Built for Modern Web Applications
                </x-aura::display>

                <x-aura::display size="md" gradient="subtle" weight="black">
                    Ship Faster with Aura Wire
                </x-aura::display>

                <x-aura::display size="sm" gradient="fade">
                    The Modern Livewire Standard
                </x-aura::display>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 3. Custom Font Weights -->
    <x-aura::code title="3. Custom Font Weights">

        <x-slot:preview>

            <x-aura::flex direction="col" align="start" class="w-full" gap="4">

                <x-aura::display size="sm" weight="black">
                    Black 900 Weight Display
                </x-aura::display>

                <x-aura::display size="sm" weight="extrabold">
                    Extrabold 800 Weight Display
                </x-aura::display>

                <x-aura::display size="sm" weight="bold">
                    Bold 700 Weight Display
                </x-aura::display>

                <x-aura::display size="sm" weight="semibold">
                    Semibold 600 Weight Display
                </x-aura::display>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::display size="sm" weight="black">
                    Black 900 Weight Display
                </x-aura::display>

                <x-aura::display size="sm" weight="extrabold">
                    Extrabold 800 Weight Display
                </x-aura::display>

                <x-aura::display size="sm" weight="bold">
                    Bold 700 Weight Display
                </x-aura::display>

                <x-aura::display size="sm" weight="semibold">
                    Semibold 600 Weight Display
                </x-aura::display>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 4. Real World Hero Pattern -->
    <x-aura::code title="4. Real World Hero Pattern">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex align="center" gap="2">

                    <x-aura::kicker>
                        NEXT GEN LIVEWIRE PRIMITIVES
                    </x-aura::kicker>

                    <x-aura::badge variant="subtle" size="sm">
                        v2.0
                    </x-aura::badge>

                </x-aura::flex>

                <x-aura::display size="lg" :gradient="true">
                    The Developer Suite for Rapid UI Delivery
                </x-aura::display>

                <x-aura::subheading size="md">
                    Compose rich, accessible, full stack Laravel applications with beautifully orchestrated Blade components.
                </x-aura::subheading>

                <x-aura::flex align="center" gap="3">

                    <x-aura::button variant="primary" iconTrailing="arrow-right">
                        Explore
                    </x-aura::button>

                    <x-aura::button variant="ghost">
                        Catalog
                    </x-aura::button>

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::card size="2xl" gap="4">

                    <x-aura::flex align="center" gap="2">

                        <x-aura::kicker>
                            NEXT GEN LIVEWIRE PRIMITIVES
                        </x-aura::kicker>

                        <x-aura::badge variant="subtle" size="sm">
                            v2.0
                        </x-aura::badge>

                    </x-aura::flex>

                    <x-aura::display size="lg" :gradient="true">
                        The Developer Suite for Rapid UI Delivery
                    </x-aura::display>

                    <x-aura::subheading size="md">
                        Compose rich, accessible, full stack Laravel applications with beautifully orchestrated Blade components.
                    </x-aura::subheading>

                    <x-aura::flex align="center" gap="3">

                        <x-aura::button variant="primary" iconTrailing="arrow-right">
                            Explore
                        </x-aura::button>

                        <x-aura::button variant="ghost">
                            Catalog
                        </x-aura::button>

                    </x-aura::flex>

                </x-aura::card>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>

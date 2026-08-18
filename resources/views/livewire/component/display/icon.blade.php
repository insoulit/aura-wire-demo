<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Icon — Aura Wire')] 
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
            Icon
        </x-aura::heading>

        <x-aura::subheading size="md">
            Render crisp Lucide SVG icons with customizable scales, color variations, and optional boxed container badges.
        </x-aura::subheading>

        <x-aura::flex align="center" class="pt-2">

            <x-aura::button variant="secondary" size="sm" href="/components/icon-library" icon="search">
                Browse
            </x-aura::button>

        </x-aura::flex>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::icon name="sparkles" size="md" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Scale Sizes -->
    <x-aura::code title="1. Scale Sizes">

        <x-slot:preview>

            <x-aura::flex align="center" justify="around" class="w-full py-4">

                <x-aura::flex direction="col" align="center" gap="2">

                    <x-aura::icon name="star" size="xs" />

                    <x-aura::text size="xs" variant="subtle">
                        xs
                    </x-aura::text>

                </x-aura::flex>

                <x-aura::flex direction="col" align="center" gap="2">

                    <x-aura::icon name="star" size="sm" />

                    <x-aura::text size="xs" variant="subtle">
                        sm
                    </x-aura::text>

                </x-aura::flex>

                <x-aura::flex direction="col" align="center" gap="2">

                    <x-aura::icon name="star" size="md" />

                    <x-aura::text size="xs" variant="subtle">
                        md
                    </x-aura::text>

                </x-aura::flex>

                <x-aura::flex direction="col" align="center" gap="2">

                    <x-aura::icon name="star" size="lg" />

                    <x-aura::text size="xs" variant="subtle">
                        lg
                    </x-aura::text>

                </x-aura::flex>

                <x-aura::flex direction="col" align="center" gap="2">

                    <x-aura::icon name="star" size="xl" />

                    <x-aura::text size="xs" variant="subtle">
                        xl
                    </x-aura::text>

                </x-aura::flex>

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::icon name="star" size="xs" />

                <x-aura::icon name="star" size="sm" />

                <x-aura::icon name="star" size="md" />

                <x-aura::icon name="star" size="lg" />

                <x-aura::icon name="star" size="xl" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Boxed Icon Badges -->
    <x-aura::code title="2. Boxed Container Badges">

        <x-slot:preview>

            <x-aura::flex align="center" gap="4" class="flex-wrap">

                <x-aura::icon name="sparkles" variant="dark" size="md" shape="rounded" />

                <x-aura::icon name="shield-check" variant="outline" size="md" shape="rounded" />

                <x-aura::icon name="heart" variant="subtle" size="md" shape="circle" />

                <x-aura::icon name="bell" variant="dark" size="md" shape="circle" />

            </x-aura::flex>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::icon name="sparkles" variant="dark" size="md" shape="rounded" />

                <x-aura::icon name="shield-check" variant="outline" size="md" shape="rounded" />

                <x-aura::icon name="heart" variant="subtle" size="md" shape="circle" />

                <x-aura::icon name="bell" variant="dark" size="md" shape="circle" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>

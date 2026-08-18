<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Breadcrumb — Aura Wire')] 
class extends Component {
    public function with(): array
    {
        return [
            'simpleItems' => [
                ['label' => 'Home', 'href' => '#'],
                ['label' => 'Components', 'href' => '#'],
                ['label' => 'Breadcrumb'],
            ],
        ];
    }
};

?>

<x-aura::container gap="8" :padding="false">

    <!-- Header -->
    <x-aura::card size="full" gap="2">

        <x-aura::flex align="center" gap="2.5">

            <x-aura::kicker>
                Navigation
            </x-aura::kicker>

            <x-aura::badge variant="subtle" size="sm">
                Component
            </x-aura::badge>

        </x-aura::flex>

        <x-aura::heading level="1" size="xl">
            Breadcrumb
        </x-aura::heading>

        <x-aura::subheading size="md">
            Hierarchy navigation trails supporting plain text, rectangular panel containers, pill shaped badge groups, and custom separators.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::breadcrumb :items="$items" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Separators -->
    <x-aura::code title="1. Separator Varieties">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::flex direction="col" align="start" class="w-full" gap="4">

                    <x-aura::breadcrumb :items="$simpleItems" separator="chevron" />

                    <x-aura::breadcrumb :items="$simpleItems" separator="slash" />

                    <x-aura::breadcrumb :items="$simpleItems" separator="dot" />

                </x-aura::flex>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::breadcrumb :items="[
                    ['label' => 'Home', 'href' => '#'],
                    ['label' => 'Components', 'href' => '#'],
                    ['label' => 'Breadcrumb'],
                ]" separator="chevron" />

                <x-aura::breadcrumb :items="$items" separator="slash" />

                <x-aura::breadcrumb :items="$items" separator="dot" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>

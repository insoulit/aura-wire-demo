<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Numbered List — Aura Wire')] 
class extends Component {
    public function with(): array
    {
        return [
            'stepItems' => [
                ['title' => 'Install Package', 'subtitle' => 'composer require insoulit/aura-wire'],
                ['title' => 'Publish Assets', 'subtitle' => 'php artisan aura-wire:install'],
                ['title' => 'Build Features', 'subtitle' => 'Use component tags in views'],
            ],
            'mediaItems' => [
                [
                    'title' => 'Aura Headphones Pro',
                    'subtitle' => 'Wireless Noise Canceling',
                    'badge' => 'Top Seller',
                ],
                [
                    'title' => 'Minimalist Keyboard',
                    'subtitle' => 'Hot Swappable Switches',
                    'badge' => 'New',
                ],
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
                Data
            </x-aura::kicker>

            <x-aura::badge variant="subtle" size="sm">
                Component
            </x-aura::badge>

        </x-aura::flex>

        <x-aura::heading level="1" size="xl">
            Numbered List
        </x-aura::heading>

        <x-aura::subheading size="md">
            Sequential list components with clean circular and boxed index counters for step processes and rankings.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::numbered-list :items="$items" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Step List -->
    <x-aura::code title="1. Onboarding Steps">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::numbered-list :items="$stepItems" variant="compact" />

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::numbered-list :items="[
                    ['title' => 'Install Package', 'subtitle' => 'composer require insoulit/aura-wire'],
                    ['title' => 'Publish Assets', 'subtitle' => 'php artisan aura-wire:install'],
                    ['title' => 'Build Features', 'subtitle' => 'Use component tags in views'],
                ]" variant="compact" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>

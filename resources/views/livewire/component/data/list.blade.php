<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('List — Aura Wire')] 
class extends Component {
    public function with(): array
    {
        return [
            'features' => [
                ['title' => 'Tailwind CSS v4 Integration', 'subtitle' => 'Zero config styling with dark mode and CSS variables.', 'image' => 'https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?w=100&auto=format&fit=crop&q=80', 'badge' => 'Core'],
                ['title' => 'Livewire Volt Single File Views', 'subtitle' => 'Unified component logic and Blade templating in one file.', 'image' => 'https://images.unsplash.com/photo-1555066931-4365d14bab8c?w=100&auto=format&fit=crop&q=80', 'badge' => 'Blade'],
                ['title' => 'Polymorphic Component Engine', 'subtitle' => 'Flexible prop schemas for links, buttons, and custom slots.', 'image' => 'https://images.unsplash.com/photo-1527443224154-c4a3942d3acf?w=100&auto=format&fit=crop&q=80', 'badge' => 'UI'],
            ],
            'compactList' => [
                ['title' => 'System Backup Completed', 'subtitle' => 'Automated snapshot created at 04:00 AM', 'badge' => 'Success'],
                ['title' => 'SSL Certificate Renewed', 'subtitle' => 'Valid until August 2027', 'badge' => 'Active'],
                ['title' => 'Database Vacuum Run', 'subtitle' => 'Cleared 420MB unused index space', 'badge' => 'Optimized'],
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
            List
        </x-aura::heading>

        <x-aura::subheading size="md">
            Clean list components supporting media rows, compact list groups, cards, and minimalist layout.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::list :items="$items" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. Media List -->
    <x-aura::code title="1. Media List">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::list :items="$features" variant="media" />

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::list :items="[
                    ['title' => 'Tailwind CSS v4 Integration', 'subtitle' => 'Zero config styling with dark mode.', 'image' => 'https://...', 'badge' => 'Core'],
                    ['title' => 'Livewire Volt Single File Views', 'subtitle' => 'Unified component logic in one file.', 'image' => 'https://...', 'badge' => 'Blade'],
                ]" variant="media" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Compact List Group -->
    <x-aura::code title="2. Compact List Group">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::list :items="$compactList" variant="compact" />

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::list :items="[
                    ['title' => 'System Backup Completed', 'subtitle' => 'Automated snapshot created', 'badge' => 'Success'],
                    ['title' => 'SSL Certificate Renewed', 'subtitle' => 'Valid until August 2027', 'badge' => 'Active'],
                ]" variant="compact" />
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>

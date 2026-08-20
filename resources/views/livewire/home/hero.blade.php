<?php

use Livewire\Volt\Component;

new class extends Component {};

?>

<x-aura::flex direction="col" align="center" gap="6">

    <!-- Top Version Pill -->
    <x-aura::flex align="center" gap="2" :inline="true">

        <x-aura::badge variant="neutral" size="sm">
            v1.6.0
        </x-aura::badge>

        <x-aura::text size="sm" variant="subtle" weight="medium">
            Laravel &amp; Livewire
        </x-aura::text>

    </x-aura::flex>

    <!-- Display Headline & Subtitle -->
    <x-aura::flex direction="col" align="center" gap="1.5">

        <x-aura::display size="md" align="center">
            Aura Wire
        </x-aura::display>

        <x-aura::subheading size="lg" align="center">
            UI Component Suite for Laravel &amp; Livewire
        </x-aura::subheading>

    </x-aura::flex>

    <!-- Action CTAs -->
    <x-aura::flex align="center" justify="center" gap="3" :wrap="true">

        <x-aura::button variant="primary" size="md" icon="layers" href="/components">
            Components
        </x-aura::button>

        <x-aura::button variant="outline" size="md" icon="github" href="https://github.com/insoulit/aura-wire" target="_blank" rel="noopener noreferrer">
            GitHub
        </x-aura::button>

    </x-aura::flex>

</x-aura::flex>

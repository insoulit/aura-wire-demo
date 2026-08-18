<?php

use Livewire\Volt\Component;

new class extends Component {};

?>

<x-aura::flex direction="col" gap="6" class="max-w-2xl mx-auto items-center">

    <!-- Top Version Pill -->
    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-zinc-100 dark:bg-zinc-800/80 border border-zinc-200/80 dark:border-zinc-700/60 shadow-2xs">

        <x-aura::badge variant="positive" size="sm">
            v1.5.0
        </x-aura::badge>

        <x-aura::text size="sm" variant="subtle" weight="medium">
            Laravel &amp; Livewire
        </x-aura::text>

    </div>

    <!-- Display Headline & Subtitle -->
    <x-aura::flex direction="col" gap="1.5" class="text-center">

        <x-aura::display size="lg">
            Aura Wire
        </x-aura::display>

        <x-aura::subheading size="lg">
            UI Component Suite for Laravel &amp; Livewire
        </x-aura::subheading>

    </x-aura::flex>

    <!-- Action CTAs -->
    <x-aura::flex align="center" justify="center" gap="3" :wrap="true" class="pt-1">

        <x-aura::button variant="primary" size="lg" icon="layers" href="/components">
            Components
        </x-aura::button>

        <x-aura::button variant="outline" size="lg" icon="github" href="https://github.com/insoulit/aura-wire" target="_blank" rel="noopener noreferrer">
            GitHub
        </x-aura::button>

    </x-aura::flex>

</x-aura::flex>

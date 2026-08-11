<?php

use Livewire\Volt\Component;

new class extends Component {};

?>

<div class="space-y-6 max-w-2xl mx-auto flex flex-col items-center">
    <!-- Top Version Pill -->
    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-zinc-100 dark:bg-zinc-800/80 border border-zinc-200/80 dark:border-zinc-700/60 shadow-2xs">
        <x-aura::badge variant="positive" size="sm" class="font-semibold">v1.4.0</x-aura::badge>
        <x-aura::text size="xs" variant="subtle" weight="medium">Laravel &amp; Livewire</x-aura::text>
    </div>

    <!-- Display Headline & Subtitle -->
    <div class="space-y-1.5 text-center">
        <x-aura::heading level="1" size="display-lg">
            Aura Wire
        </x-aura::heading>
        <x-aura::subheading size="lg" class="text-zinc-600 dark:text-zinc-400 font-medium">
            UI Component Suite for Laravel &amp; Livewire
        </x-aura::subheading>
    </div>

    <!-- Action CTAs -->
    <div class="pt-1 flex flex-wrap items-center justify-center gap-3">
        <x-aura::button variant="primary" size="lg" icon="layers" href="/components" class="shadow-sm">
            <span>Components</span>
        </x-aura::button>

        <x-aura::button variant="outline" size="lg" icon="github" href="https://github.com/insoulit/aura-wire" target="_blank" rel="noopener noreferrer">
            <span>GitHub</span>
        </x-aura::button>
    </div>
</div>

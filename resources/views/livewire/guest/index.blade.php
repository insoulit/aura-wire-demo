<?php

use function Livewire\Volt\{layout, title};

layout('layouts.guest');
title('Welcome to Aura Wire — Public Guest Portal');

?>

<div class="w-full max-w-5xl space-y-12 py-6">
    <!-- Hero Section -->
    <div class="text-center space-y-4 max-w-3xl mx-auto">
        <div class="inline-flex items-center gap-2">
            <x-aura::kicker>✨ GUEST PORTAL DEMO</x-aura::kicker>
            <x-aura::badge variant="positive" size="sm">Laravel 11 &amp; 12</x-aura::badge>
        </div>
        <x-aura::heading level="1" size="display-lg">
            Build Stunning Interfaces with <span class="bg-gradient-to-r from-indigo-500 via-violet-500 to-pink-500 dark:from-indigo-400 dark:via-violet-400 dark:to-pink-400 bg-clip-text text-transparent">Aura Wire</span>
        </x-aura::heading>
        <x-aura::subheading>
            A high-contrast, razor-sharp Blade & Livewire component suite fusing Uber Base aesthetics with Flux UI architecture.
        </x-aura::subheading>
        <div class="flex flex-wrap items-center justify-center gap-4 pt-2">
            <x-aura::button variant="primary" size="lg" href="/components">Explore Component Library &rarr;</x-aura::button>
            <x-aura::button variant="secondary" size="lg" href="/dashboard">View User Dashboard &rarr;</x-aura::button>
        </div>
    </div>

    <!-- Feature Cards Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <x-aura::card title="High Contrast Dark Mode" description="Built with automatic class & media theme toggling">
            <x-aura::text variant="subtle" size="sm">
                1px razor-sharp borders and dark contrast ratios ensure maximum readability in low-light environments.
            </x-aura::text>
            <x-slot:footer>
                <x-aura::badge variant="info">Theme Ready</x-aura::badge>
            </x-slot:footer>
        </x-aura::card>

        <x-aura::card title="30+ UI Components" description="Form controls, typography, navigation & overlays">
            <x-aura::text variant="subtle" size="sm">
                From inputs and select dropdowns to modals, sheets, and progress bars — ready for immediate production use.
            </x-aura::text>
            <x-slot:footer>
                <x-aura::badge variant="positive">Full Suite</x-aura::badge>
            </x-slot:footer>
        </x-aura::card>

        <x-aura::card title="Dual Tag Syntax" description="Use <aura:...> or <x-aura::...>Blade syntax">
            <x-aura::text variant="subtle" size="sm">
                Clean and intuitive syntax options matching modern framework developer preferences.
            </x-aura::text>
            <x-slot:footer>
                <x-aura::badge variant="accent">Blade &amp; Volt</x-aura::badge>
            </x-slot:footer>
        </x-aura::card>
    </div>

    <!-- Interactive Component Preview Section -->
    <div class="space-y-6">
        <div class="border-b border-zinc-200 dark:border-zinc-800 pb-3">
            <x-aura::heading level="2" size="md">Live Package Components Showcase</x-aura::heading>
            <x-aura::text variant="subtle" size="sm">Sample interactive components rendered directly from insoulit/aura-wire</x-aura::text>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Form Controls Card -->
            <x-aura::card title="Form Controls Preview">
                <div class="space-y-4">
                    <x-aura::field label="Email Address" description="We will send your invitation link here.">
                        <x-aura::input type="email" placeholder="name@example.com" />
                    </x-aura::field>

                    <x-aura::field label="Role Select">
                        <x-aura::select placeholder="Choose role...">
                            <option value="developer">Developer</option>
                            <option value="designer">Designer</option>
                            <option value="manager">Manager</option>
                        </x-aura::select>
                    </x-aura::field>
                </div>
                <x-slot:footer>
                    <x-aura::button variant="primary" size="sm">Submit Registration</x-aura::button>
                </x-slot:footer>
            </x-aura::card>

            <!-- Buttons & Badges Card -->
            <x-aura::card title="Actions & Badges">
                <div class="space-y-4">
                    <div class="flex flex-wrap gap-2">
                        <x-aura::badge variant="neutral">Default</x-aura::badge>
                        <x-aura::badge variant="positive">Active</x-aura::badge>
                        <x-aura::badge variant="warning">Pending</x-aura::badge>
                        <x-aura::badge variant="danger">Error</x-aura::badge>
                        <x-aura::badge variant="info">Info</x-aura::badge>
                    </div>

                    <div class="pt-2 flex flex-wrap gap-2">
                        <x-aura::button variant="primary">Primary</x-aura::button>
                        <x-aura::button variant="secondary">Secondary</x-aura::button>
                        <x-aura::button variant="outline">Outline</x-aura::button>
                        <x-aura::button variant="ghost">Ghost</x-aura::button>
                    </div>
                </div>
            </x-aura::card>
        </div>
    </div>
</div>

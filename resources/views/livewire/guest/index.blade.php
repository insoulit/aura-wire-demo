<?php

use function Livewire\Volt\{layout, title};

layout('layouts.guest');
title('Welcome to Aura Wire');

?>

<div class="w-full max-w-5xl space-y-12 py-6">
    <!-- Hero Section -->
    <div class="text-center space-y-4 max-w-3xl mx-auto">
        <x-aura::kicker>✨ NEXT GENERATION UI</x-aura::kicker>
        <x-aura::heading level="1" size="display-lg">
            Build Stunning Interfaces with <span class="bg-gradient-to-r from-indigo-400 via-violet-400 to-pink-400 bg-clip-text text-transparent">Aura Wire</span>
        </x-aura::heading>
        <x-aura::subheading>
            A modern, customizable Blade & Livewire component library crafted for Laravel applications.
        </x-aura::subheading>
        <div class="flex items-center justify-center gap-4 pt-2">
            <x-aura::button variant="primary" size="lg" href="/register">Get Started Free</x-aura::button>
            <x-aura::button variant="secondary" size="lg" href="/dashboard">View Demo Dashboard</x-aura::button>
        </div>
    </div>

    <!-- Component Preview Card -->
    <x-aura::card title="Aura Wire Buttons Preview" description="Sample components rendered directly from insoulit/aura-wire">
        <div class="flex flex-wrap items-center gap-3">
            <x-aura::button variant="primary">Primary Button</x-aura::button>
            <x-aura::button variant="secondary">Secondary</x-aura::button>
            <x-aura::button variant="outline">Outline</x-aura::button>
            <x-aura::button variant="ghost">Ghost</x-aura::button>
            <x-aura::button variant="danger">Danger Action</x-aura::button>
        </div>
    </x-aura::card>
</div>

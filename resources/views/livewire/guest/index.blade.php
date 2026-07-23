<?php

use function Livewire\Volt\{layout, title};

layout('layouts.guest');
title('Welcome to Aura Wire');

?>

<div class="w-full max-w-5xl space-y-12 py-6">
    <!-- Hero Section -->
    <div class="text-center space-y-4 max-w-3xl mx-auto">
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-indigo-500/10 border border-indigo-500/20 text-indigo-400 text-xs font-medium">
            ✨ Next Generation UI
        </div>
        <h1 class="text-4xl sm:text-5xl font-bold tracking-tight text-white">
            Build Stunning Interfaces with <span class="bg-gradient-to-r from-indigo-400 via-violet-400 to-pink-400 bg-clip-text text-transparent">Aura Wire</span>
        </h1>
        <p class="text-zinc-400 text-base leading-relaxed">
            A modern, customizable Blade & Livewire component library crafted for Laravel applications.
        </p>
        <div class="flex items-center justify-center gap-4 pt-2">
            <x-aura::button variant="primary" size="lg" href="/register">Get Started Free</x-aura::button>
            <x-aura::button variant="secondary" size="lg" href="/dashboard">View Demo Dashboard</x-aura::button>
        </div>
    </div>

    <!-- Component Preview Card -->
    <div class="rounded-2xl bg-zinc-900/60 border border-zinc-800 p-8 shadow-2xl space-y-6">
        <div class="border-b border-zinc-800 pb-4">
            <h2 class="text-lg font-semibold text-white">Aura Wire Buttons Preview</h2>
            <p class="text-xs text-zinc-400">Sample components rendered directly from <code class="text-indigo-400">insoulit/aura-wire</code></p>
        </div>

        <div class="flex flex-wrap items-center gap-3">
            <x-aura::button variant="primary">Primary Button</x-aura::button>
            <x-aura::button variant="secondary">Secondary</x-aura::button>
            <x-aura::button variant="outline">Outline</x-aura::button>
            <x-aura::button variant="ghost">Ghost</x-aura::button>
            <x-aura::button variant="danger">Danger Action</x-aura::button>
            <x-aura::button variant="primary" :loading="true">Processing</x-aura::button>
        </div>
    </div>
</div>

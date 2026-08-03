<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new #[Layout('layouts.guest')] #[Title('Design Blocks — Guest Portal | Aura Wire')] class extends Component {
    //
};

?>

<div class="w-full max-w-6xl space-y-12 py-6">
    <!-- Header -->
    <div class="relative text-center space-y-4 max-w-3xl mx-auto">
        <x-aura::badge variant="neutral" size="md">GUEST PORTAL DESIGN BLOCKS</x-aura::badge>
        <x-aura::heading level="1" size="display-md">Production-Ready Design Blocks</x-aura::heading>
        <x-aura::subheading class="text-base">
            Explore ready-to-use composite design blocks combining multiple Aura Wire components into sleek UI patterns with full copyable Blade markup.
        </x-aura::subheading>
    </div>

    <!-- Blocks Catalog Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- 1. Product Card Block -->
        <x-aura::card class="flex flex-col justify-between hover:border-zinc-900 dark:hover:border-white transition-all group">
            <div class="space-y-4">
                <div class="h-12 w-12 rounded-2xl bg-indigo-50 text-indigo-600 dark:bg-indigo-950 dark:text-indigo-400 flex items-center justify-center font-bold text-xl">
                    🛍️
                </div>
                <div class="space-y-1">
                    <div class="flex items-center justify-between">
                        <x-aura::heading level="3" size="sm" class="group-hover:underline">Product Card Block</x-aura::heading>
                        <x-aura::badge variant="subtle" size="sm">E-Commerce</x-aura::badge>
                    </div>
                    <x-aura::text variant="subtle" size="sm">
                        Showcase items with discount badges, color swatches, stock indicators, and instant cart triggers.
                    </x-aura::text>
                </div>
            </div>
            <div class="pt-6">
                <x-aura::button variant="primary" size="sm" href="/guest/blocks/product-card" class="w-full justify-center">
                    Explore Product Card Block &rarr;
                </x-aura::button>
            </div>
        </x-aura::card>

        <!-- 2. Pricing Block -->
        <x-aura::card class="flex flex-col justify-between hover:border-zinc-900 dark:hover:border-white transition-all group">
            <div class="space-y-4">
                <div class="h-12 w-12 rounded-2xl bg-indigo-50 text-indigo-600 dark:bg-indigo-950 dark:text-indigo-400 flex items-center justify-center font-bold text-xl">
                    💎
                </div>
                <div class="space-y-1">
                    <div class="flex items-center justify-between">
                        <x-aura::heading level="3" size="sm" class="group-hover:underline">Pricing Tier Cards</x-aura::heading>
                        <x-aura::badge variant="subtle" size="sm">SaaS</x-aura::badge>
                    </div>
                    <x-aura::text variant="subtle" size="sm">
                        3-tier conversion-optimized pricing matrix with feature checklists and highlighted popular tier.
                    </x-aura::text>
                </div>
            </div>
            <div class="pt-6">
                <x-aura::button variant="primary" size="sm" href="/guest/blocks/pricing" class="w-full justify-center">
                    Explore Pricing Cards &rarr;
                </x-aura::button>
            </div>
        </x-aura::card>

        <!-- 3. Dashboard Widgets Block -->
        <x-aura::card class="flex flex-col justify-between hover:border-zinc-900 dark:hover:border-white transition-all group">
            <div class="space-y-4">
                <div class="h-12 w-12 rounded-2xl bg-indigo-50 text-indigo-600 dark:bg-indigo-950 dark:text-indigo-400 flex items-center justify-center font-bold text-xl">
                    📊
                </div>
                <div class="space-y-1">
                    <div class="flex items-center justify-between">
                        <x-aura::heading level="3" size="sm" class="group-hover:underline">Dashboard Widgets</x-aura::heading>
                        <x-aura::badge variant="subtle" size="sm">Analytics</x-aura::badge>
                    </div>
                    <x-aura::text variant="subtle" size="sm">
                        Metric summary cards, team activity avatar stacks, and cluster capacity progress bar gauges.
                    </x-aura::text>
                </div>
            </div>
            <div class="pt-6">
                <x-aura::button variant="primary" size="sm" href="/guest/blocks/dashboard" class="w-full justify-center">
                    Explore Dashboard Widgets &rarr;
                </x-aura::button>
            </div>
        </x-aura::card>

        <!-- 4. Auth & Security Block -->
        <x-aura::card class="flex flex-col justify-between hover:border-zinc-900 dark:hover:border-white transition-all group">
            <div class="space-y-4">
                <div class="h-12 w-12 rounded-2xl bg-indigo-50 text-indigo-600 dark:bg-indigo-950 dark:text-indigo-400 flex items-center justify-center font-bold text-xl">
                    🔐
                </div>
                <div class="space-y-1">
                    <div class="flex items-center justify-between">
                        <x-aura::heading level="3" size="sm" class="group-hover:underline">Auth &amp; Security</x-aura::heading>
                        <x-aura::badge variant="subtle" size="sm">Security</x-aura::badge>
                    </div>
                    <x-aura::text variant="subtle" size="sm">
                        High-security login form card with email icon prefix, password inputs, and remember checkbox.
                    </x-aura::text>
                </div>
            </div>
            <div class="pt-6">
                <x-aura::button variant="primary" size="sm" href="/guest/blocks/auth" class="w-full justify-center">
                    Explore Auth Block &rarr;
                </x-aura::button>
            </div>
        </x-aura::card>

        <!-- 5. User Profile Block -->
        <x-aura::card class="flex flex-col justify-between hover:border-zinc-900 dark:hover:border-white transition-all group">
            <div class="space-y-4">
                <div class="h-12 w-12 rounded-2xl bg-indigo-50 text-indigo-600 dark:bg-indigo-950 dark:text-indigo-400 flex items-center justify-center font-bold text-xl">
                    👤
                </div>
                <div class="space-y-1">
                    <div class="flex items-center justify-between">
                        <x-aura::heading level="3" size="sm" class="group-hover:underline">User Profile</x-aura::heading>
                        <x-aura::badge variant="subtle" size="sm">Account</x-aura::badge>
                    </div>
                    <x-aura::text variant="subtle" size="sm">
                        User settings card with avatar photo uploader, verified email tag, and save actions.
                    </x-aura::text>
                </div>
            </div>
            <div class="pt-6">
                <x-aura::button variant="primary" size="sm" href="/guest/blocks/profile" class="w-full justify-center">
                    Explore User Profile Block &rarr;
                </x-aura::button>
            </div>
        </x-aura::card>
    </div>
</div>

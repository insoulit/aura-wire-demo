<?php

use function Livewire\Volt\{layout, title};

layout('layouts.guest');
title('UI Design Sets & Templates — Guest Portal | Aura Wire');

?>

<div class="w-full max-w-6xl space-y-16 py-10">
    <!-- Hero Section -->
    <div class="relative text-center space-y-6 max-w-4xl mx-auto pt-4">
        <!-- Ambient Background Glow -->
        <div class="absolute -top-12 left-1/2 -translate-x-1/2 w-96 h-96 bg-gradient-to-tr from-indigo-500/20 via-purple-500/15 to-pink-500/10 rounded-full blur-3xl -z-10 pointer-events-none"></div>

        <div class="inline-flex items-center gap-2">
            <x-aura::badge variant="positive" size="md">✨ UI DESIGN SETS</x-aura::badge>            <x-aura::badge variant="subtle" size="md">5 Templates</x-aura::badge>
        </div>

        <x-aura::heading level="1" size="display-lg" class="tracking-tight">
            Explore Pre-Designed <br class="hidden sm:block" />
            <span class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 dark:from-indigo-400 dark:via-purple-400 dark:to-pink-400 bg-clip-text text-transparent">
                Aura Wire UI Kits &amp; Templates
            </span>
        </x-aura::heading>

        <x-aura::subheading class="max-w-2xl mx-auto text-lg">
            Discover full application design sets built natively with Aura Wire Blade components. Select any UI kit below to explore its design system.
        </x-aura::subheading>

        <div class="flex flex-wrap items-center justify-center gap-3 pt-2">
            <x-aura::button variant="primary" size="lg" href="/components">
                Component Documentation &rarr;
            </x-aura::button>
            <x-aura::button variant="secondary" size="lg" href="/admin">
                Admin Console &rarr;
            </x-aura::button>
        </div>
    </div>

    <!-- UI Kits Grid Section -->
    <div class="space-y-6">
        <div class="flex items-center justify-between border-b border-zinc-200 dark:border-zinc-800 pb-4">
            <div>
                <x-aura::heading level="2" size="lg">UI Design Sets</x-aura::heading>
                <x-aura::subheading>Choose a design set template to view layout structure and components</x-aura::subheading>
            </div>
            <x-aura::badge variant="info" size="sm">Explore Templates</x-aura::badge>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- 1. E-Commerce UI Kit Card -->
            <x-aura::card class="flex flex-col justify-between hover:border-indigo-500/50 hover:shadow-xl transition-all group">
                <div class="space-y-4">
                    <div class="h-12 w-12 rounded-2xl bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 flex items-center justify-center font-bold text-xl">
                        🛍️
                    </div>
                    <div>
                        <div class="flex items-center justify-between mb-1">
                            <x-aura::heading level="3" size="sm" class="group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">E-Commerce Storefront</x-aura::heading>
                            <x-aura::badge variant="accent" size="sm">UI Kit</x-aura::badge>
                        </div>
                        <x-aura::text variant="subtle" size="sm">
                            Product catalogs, filtering sidebars, shopping cart drawers, and checkout flow pages.
                        </x-aura::text>
                    </div>
                </div>
                <div class="pt-6">
                    <x-aura::button variant="primary" size="sm" href="/guest/ecommerce" class="w-full justify-center">
                        Explore E-Commerce Kit &rarr;
                    </x-aura::button>
                </div>
            </x-aura::card>

            <!-- 2. Portfolio UI Kit Card -->
            <x-aura::card class="flex flex-col justify-between hover:border-indigo-500/50 hover:shadow-xl transition-all group">
                <div class="space-y-4">
                    <div class="h-12 w-12 rounded-2xl bg-emerald-500/10 text-emerald-600 dark:text-emerald-400 flex items-center justify-center font-bold text-xl">
                        🎨
                    </div>
                    <div>
                        <div class="flex items-center justify-between mb-1">
                            <x-aura::heading level="3" size="sm" class="group-hover:text-emerald-600 dark:group-hover:text-emerald-400 transition-colors">Personal Portfolio</x-aura::heading>
                            <x-aura::badge variant="positive" size="sm">UI Kit</x-aura::badge>
                        </div>
                        <x-aura::text variant="subtle" size="sm">
                            Work showcases, interactive case studies, bio highlights, skill chips, and contact forms.
                        </x-aura::text>
                    </div>
                </div>
                <div class="pt-6">
                    <x-aura::button variant="primary" size="sm" href="/guest/portfolio" class="w-full justify-center">
                        Explore Portfolio Kit &rarr;
                    </x-aura::button>
                </div>
            </x-aura::card>

            <!-- 3. Restaurant & Dining Card -->
            <x-aura::card class="flex flex-col justify-between hover:border-indigo-500/50 hover:shadow-xl transition-all group">
                <div class="space-y-4">
                    <div class="h-12 w-12 rounded-2xl bg-amber-500/10 text-amber-600 dark:text-amber-400 flex items-center justify-center font-bold text-xl">
                        🍽️
                    </div>
                    <div>
                        <div class="flex items-center justify-between mb-1">
                            <x-aura::heading level="3" size="sm" class="group-hover:text-amber-600 dark:group-hover:text-amber-400 transition-colors">Restaurant &amp; Dining</x-aura::heading>
                            <x-aura::badge variant="warning" size="sm">UI Kit</x-aura::badge>
                        </div>
                        <x-aura::text variant="subtle" size="sm">
                            Digital menu tabbed sections, table reservation pickers, chef specials, and dining reviews.
                        </x-aura::text>
                    </div>
                </div>
                <div class="pt-6">
                    <x-aura::button variant="primary" size="sm" href="/guest/restaurant" class="w-full justify-center">
                        Explore Restaurant Kit &rarr;
                    </x-aura::button>
                </div>
            </x-aura::card>

            <!-- 4. SaaS Platform Card -->
            <x-aura::card class="flex flex-col justify-between hover:border-indigo-500/50 hover:shadow-xl transition-all group">
                <div class="space-y-4">
                    <div class="h-12 w-12 rounded-2xl bg-blue-500/10 text-blue-600 dark:text-blue-400 flex items-center justify-center font-bold text-xl">
                        🚀
                    </div>
                    <div>
                        <div class="flex items-center justify-between mb-1">
                            <x-aura::heading level="3" size="sm" class="group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">SaaS Application</x-aura::heading>
                            <x-aura::badge variant="info" size="sm">UI Kit</x-aura::badge>
                        </div>
                        <x-aura::text variant="subtle" size="sm">
                            High-converting landing page, pricing tier comparison tables, and signup modal flows.
                        </x-aura::text>
                    </div>
                </div>
                <div class="pt-6">
                    <x-aura::button variant="primary" size="sm" href="/guest/saas" class="w-full justify-center">
                        Explore SaaS Kit &rarr;
                    </x-aura::button>
                </div>
            </x-aura::card>

            <!-- 5. Creative Agency Card -->
            <x-aura::card class="flex flex-col justify-between hover:border-indigo-500/50 hover:shadow-xl transition-all group">
                <div class="space-y-4">
                    <div class="h-12 w-12 rounded-2xl bg-rose-500/10 text-rose-600 dark:text-rose-400 flex items-center justify-center font-bold text-xl">
                        ⚡
                    </div>
                    <div>
                        <div class="flex items-center justify-between mb-1">
                            <x-aura::heading level="3" size="sm" class="group-hover:text-rose-600 dark:group-hover:text-rose-400 transition-colors">Creative Agency</x-aura::heading>
                            <x-aura::badge variant="negative" size="sm">UI Kit</x-aura::badge>
                        </div>
                        <x-aura::text variant="subtle" size="sm">
                            Bold agency presentation, service cards, client logos, team profiles, and proposal requests.
                        </x-aura::text>
                    </div>
                </div>
                <div class="pt-6">
                    <x-aura::button variant="primary" size="sm" href="/guest/agency" class="w-full justify-center">
                        Explore Agency Kit &rarr;
                    </x-aura::button>
                </div>
            </x-aura::card>
        </div>
    </div>
</div>

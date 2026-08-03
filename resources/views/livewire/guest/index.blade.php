<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new #[Layout('layouts.guest')] #[Title('Guest Portal — Design Blocks & Templates | Aura Wire')] class extends Component {
    //
};

?>

<div class="w-full max-w-6xl space-y-16 py-6">
    <!-- Hero Header Section -->
    <div class="relative text-center space-y-6 max-w-4xl mx-auto pt-2">
        <!-- Ambient Glow -->
        <div class="absolute -top-12 left-1/2 -translate-x-1/2 w-96 h-96 bg-indigo-500/10 dark:bg-indigo-400/5 rounded-full blur-3xl -z-10 pointer-events-none"></div>

        <div class="inline-flex items-center gap-2">
            <x-aura::badge variant="neutral" size="md">✨ AURA WIRE GUEST PORTAL</x-aura::badge>
            <x-aura::badge variant="positive" size="md">Uber Base Design System</x-aura::badge>
        </div>

        <x-aura::heading level="1" size="display-lg" class="tracking-tight text-zinc-900 dark:text-white">
            Design Blocks &amp; Full Templates <br class="hidden sm:block" />
            <span class="text-zinc-900 dark:text-white underline decoration-zinc-400 dark:decoration-zinc-600 underline-offset-8">
                Crafted with Aura Wire
            </span>
        </x-aura::heading>

        <x-aura::subheading class="max-w-2xl mx-auto text-lg">
            Choose from ready-to-use composite design blocks with copyable code snippets, or explore complete end-to-end full page application templates.
        </x-aura::subheading>

        <!-- Quick Jump Navigation Buttons -->
        <div class="flex flex-wrap items-center justify-center gap-3 pt-2">
            <x-aura::button variant="primary" size="lg" href="#design-blocks">
                <x-slot name="icon">
                    <svg class="w-5 h-5 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/></svg>
                </x-slot>
                1. Design Blocks (5) &darr;
            </x-aura::button>
            <x-aura::button variant="secondary" size="lg" href="#templates">
                <x-slot name="icon">
                    <svg class="w-5 h-5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                </x-slot>
                2. Full Templates (5) &darr;
            </x-aura::button>
        </div>
    </div>

    <!-- ========================================================================= -->
    <!-- MAJOR SECTION 1: DESIGN BLOCKS (Cards Linking to Dedicated Block Views) -->
    <!-- ========================================================================= -->
    <div id="design-blocks" class="space-y-8 scroll-mt-24">
        <div class="flex items-center justify-between border-b border-zinc-200 dark:border-zinc-800 pb-4">
            <div class="space-y-1">
                <div class="flex items-center gap-2">
                    <span class="px-2 py-0.5 rounded-md text-xs font-bold bg-indigo-100 text-indigo-700 dark:bg-indigo-950 dark:text-indigo-300">SECTION 1</span>
                    <x-aura::heading level="2" size="lg">Design Blocks</x-aura::heading>
                </div>
                <x-aura::subheading>Composite, production-ready UI blocks with live design previews and copyable Blade markup.</x-aura::subheading>
            </div>
            <div class="flex items-center gap-3">
                <x-aura::button variant="outline" size="sm" href="/guest/blocks">Explore Catalog &rarr;</x-aura::button>
                <x-aura::badge variant="neutral" size="sm">5 Blocks</x-aura::badge>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Block 1: Product Card Block -->
            <x-aura::card class="flex flex-col justify-between hover:border-zinc-900 dark:hover:border-white transition-all group">
                <div class="space-y-4">
                    <div class="h-12 w-12 rounded-2xl bg-indigo-50 text-indigo-600 dark:bg-indigo-950 dark:text-indigo-400 flex items-center justify-center font-bold text-xl shadow-md">
                        🛍️
                    </div>
                    <div class="space-y-1">
                        <div class="flex items-center justify-between mb-1">
                            <x-aura::heading level="3" size="sm" class="group-hover:underline">Product Card Block</x-aura::heading>
                            <x-aura::badge variant="subtle" size="sm">E-Commerce</x-aura::badge>
                        </div>
                        <x-aura::text variant="subtle" size="sm">
                            Product showcase cards with discount badges, color swatches, ratings, and instant add-to-cart actions.
                        </x-aura::text>
                    </div>
                </div>
                <div class="pt-6">
                    <x-aura::button variant="primary" size="sm" href="/guest/blocks/product-card" class="w-full justify-center">
                        Explore Product Block &rarr;
                    </x-aura::button>
                </div>
            </x-aura::card>

            <!-- Block 2: Pricing Block -->
            <x-aura::card class="flex flex-col justify-between hover:border-zinc-900 dark:hover:border-white transition-all group">
                <div class="space-y-4">
                    <div class="h-12 w-12 rounded-2xl bg-indigo-50 text-indigo-600 dark:bg-indigo-950 dark:text-indigo-400 flex items-center justify-center font-bold text-xl shadow-md">
                        💎
                    </div>
                    <div class="space-y-1">
                        <div class="flex items-center justify-between mb-1">
                            <x-aura::heading level="3" size="sm" class="group-hover:underline">Pricing Tier Cards</x-aura::heading>
                            <x-aura::badge variant="subtle" size="sm">SaaS</x-aura::badge>
                        </div>
                        <x-aura::text variant="subtle" size="sm">
                            3-tier SaaS subscription pricing matrix with checkmark feature lists and featured popular tier.
                        </x-aura::text>
                    </div>
                </div>
                <div class="pt-6">
                    <x-aura::button variant="primary" size="sm" href="/guest/blocks/pricing" class="w-full justify-center">
                        Explore Pricing Block &rarr;
                    </x-aura::button>
                </div>
            </x-aura::card>

            <!-- Block 3: Dashboard Widgets Block -->
            <x-aura::card class="flex flex-col justify-between hover:border-zinc-900 dark:hover:border-white transition-all group">
                <div class="space-y-4">
                    <div class="h-12 w-12 rounded-2xl bg-indigo-50 text-indigo-600 dark:bg-indigo-950 dark:text-indigo-400 flex items-center justify-center font-bold text-xl shadow-md">
                        📊
                    </div>
                    <div class="space-y-1">
                        <div class="flex items-center justify-between mb-1">
                            <x-aura::heading level="3" size="sm" class="group-hover:underline">Dashboard Widgets</x-aura::heading>
                            <x-aura::badge variant="subtle" size="sm">Analytics</x-aura::badge>
                        </div>
                        <x-aura::text variant="subtle" size="sm">
                            Sales KPI summary cards, team activity avatar stacks, and cluster memory capacity progress gauges.
                        </x-aura::text>
                    </div>
                </div>
                <div class="pt-6">
                    <x-aura::button variant="primary" size="sm" href="/guest/blocks/dashboard" class="w-full justify-center">
                        Explore Dashboard Block &rarr;
                    </x-aura::button>
                </div>
            </x-aura::card>

            <!-- Block 4: Auth & Security Block -->
            <x-aura::card class="flex flex-col justify-between hover:border-zinc-900 dark:hover:border-white transition-all group">
                <div class="space-y-4">
                    <div class="h-12 w-12 rounded-2xl bg-indigo-50 text-indigo-600 dark:bg-indigo-950 dark:text-indigo-400 flex items-center justify-center font-bold text-xl shadow-md">
                        🔐
                    </div>
                    <div class="space-y-1">
                        <div class="flex items-center justify-between mb-1">
                            <x-aura::heading level="3" size="sm" class="group-hover:underline">Auth &amp; Security</x-aura::heading>
                            <x-aura::badge variant="subtle" size="sm">Security</x-aura::badge>
                        </div>
                        <x-aura::text variant="subtle" size="sm">
                            High-security sign-in card with email icon prefix, password field, remember me checkbox, and submit action.
                        </x-aura::text>
                    </div>
                </div>
                <div class="pt-6">
                    <x-aura::button variant="primary" size="sm" href="/guest/blocks/auth" class="w-full justify-center">
                        Explore Auth Block &rarr;
                    </x-aura::button>
                </div>
            </x-aura::card>

            <!-- Block 5: User Profile Block -->
            <x-aura::card class="flex flex-col justify-between hover:border-zinc-900 dark:hover:border-white transition-all group">
                <div class="space-y-4">
                    <div class="h-12 w-12 rounded-2xl bg-indigo-50 text-indigo-600 dark:bg-indigo-950 dark:text-indigo-400 flex items-center justify-center font-bold text-xl shadow-md">
                        👤
                    </div>
                    <div class="space-y-1">
                        <div class="flex items-center justify-between mb-1">
                            <x-aura::heading level="3" size="sm" class="group-hover:underline">User Profile</x-aura::heading>
                            <x-aura::badge variant="subtle" size="sm">Account</x-aura::badge>
                        </div>
                        <x-aura::text variant="subtle" size="sm">
                            Account settings card with avatar photo uploader, verified email tag, name input fields, and save actions.
                        </x-aura::text>
                    </div>
                </div>
                <div class="pt-6">
                    <x-aura::button variant="primary" size="sm" href="/guest/blocks/profile" class="w-full justify-center">
                        Explore Profile Block &rarr;
                    </x-aura::button>
                </div>
            </x-aura::card>
        </div>
    </div>

    <!-- ========================================================================= -->
    <!-- MAJOR SECTION 2: FULL APPLICATION TEMPLATES (Cards Linking to Templates) -->
    <!-- ========================================================================= -->
    <div id="templates" class="space-y-8 scroll-mt-24 pt-6 border-t border-zinc-200 dark:border-zinc-800">
        <div class="flex items-center justify-between border-b border-zinc-200 dark:border-zinc-800 pb-4">
            <div class="space-y-1">
                <div class="flex items-center gap-2">
                    <span class="px-2 py-0.5 rounded-md text-xs font-bold bg-emerald-100 text-emerald-700 dark:bg-emerald-950 dark:text-emerald-300">SECTION 2</span>
                    <x-aura::heading level="2" size="lg">Full Application Templates</x-aura::heading>
                </div>
                <x-aura::subheading>Explore complete end-to-end page layout templates built with Aura Wire.</x-aura::subheading>
            </div>
            <div class="flex items-center gap-3">
                <x-aura::button variant="outline" size="sm" href="/guest/templates">Explore Catalog &rarr;</x-aura::button>
                <x-aura::badge variant="neutral" size="sm">5 Templates</x-aura::badge>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- 1. E-Commerce Template -->
            <x-aura::card class="flex flex-col justify-between hover:border-zinc-900 dark:hover:border-white transition-all group">
                <div class="space-y-4">
                    <div class="h-12 w-12 rounded-2xl bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 flex items-center justify-center font-bold text-xl shadow-md">
                        🛍️
                    </div>
                    <div class="space-y-1">
                        <div class="flex items-center justify-between mb-1">
                            <x-aura::heading level="3" size="sm" class="group-hover:underline">E-Commerce Storefront</x-aura::heading>
                            <x-aura::badge variant="subtle" size="sm">Full Template</x-aura::badge>
                        </div>
                        <x-aura::text variant="subtle" size="sm">
                            Product catalogs, filtering sidebars, shopping cart drawers, and checkout flow pages.
                        </x-aura::text>
                    </div>
                </div>
                <div class="pt-6">
                    <x-aura::button variant="primary" size="sm" href="/guest/templates/ecommerce" class="w-full justify-center">
                        View E-Commerce &rarr;
                    </x-aura::button>
                </div>
            </x-aura::card>

            <!-- 2. Portfolio Template -->
            <x-aura::card class="flex flex-col justify-between hover:border-zinc-900 dark:hover:border-white transition-all group">
                <div class="space-y-4">
                    <div class="h-12 w-12 rounded-2xl bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 flex items-center justify-center font-bold text-xl shadow-md">
                        🎨
                    </div>
                    <div class="space-y-1">
                        <div class="flex items-center justify-between mb-1">
                            <x-aura::heading level="3" size="sm" class="group-hover:underline">Personal Portfolio</x-aura::heading>
                            <x-aura::badge variant="subtle" size="sm">Full Template</x-aura::badge>
                        </div>
                        <x-aura::text variant="subtle" size="sm">
                            Work showcases, interactive case studies, bio highlights, skill chips, and contact forms.
                        </x-aura::text>
                    </div>
                </div>
                <div class="pt-6">
                    <x-aura::button variant="primary" size="sm" href="/guest/templates/portfolio" class="w-full justify-center">
                        View Portfolio &rarr;
                    </x-aura::button>
                </div>
            </x-aura::card>

            <!-- 3. Restaurant & Dining Template -->
            <x-aura::card class="flex flex-col justify-between hover:border-zinc-900 dark:hover:border-white transition-all group">
                <div class="space-y-4">
                    <div class="h-12 w-12 rounded-2xl bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 flex items-center justify-center font-bold text-xl shadow-md">
                        🍽️
                    </div>
                    <div class="space-y-1">
                        <div class="flex items-center justify-between mb-1">
                            <x-aura::heading level="3" size="sm" class="group-hover:underline">Restaurant &amp; Dining</x-aura::heading>
                            <x-aura::badge variant="subtle" size="sm">Full Template</x-aura::badge>
                        </div>
                        <x-aura::text variant="subtle" size="sm">
                            Digital menu tabbed sections, table reservation pickers, chef specials, and dining reviews.
                        </x-aura::text>
                    </div>
                </div>
                <div class="pt-6">
                    <x-aura::button variant="primary" size="sm" href="/guest/templates/restaurant" class="w-full justify-center">
                        View Restaurant &rarr;
                    </x-aura::button>
                </div>
            </x-aura::card>

            <!-- 4. SaaS Application Template -->
            <x-aura::card class="flex flex-col justify-between hover:border-zinc-900 dark:hover:border-white transition-all group">
                <div class="space-y-4">
                    <div class="h-12 w-12 rounded-2xl bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 flex items-center justify-center font-bold text-xl shadow-md">
                        🚀
                    </div>
                    <div class="space-y-1">
                        <div class="flex items-center justify-between mb-1">
                            <x-aura::heading level="3" size="sm" class="group-hover:underline">SaaS Application</x-aura::heading>
                            <x-aura::badge variant="subtle" size="sm">Full Template</x-aura::badge>
                        </div>
                        <x-aura::text variant="subtle" size="sm">
                            High-converting landing page, pricing comparison tables, feature grids, and signup flows.
                        </x-aura::text>
                    </div>
                </div>
                <div class="pt-6">
                    <x-aura::button variant="primary" size="sm" href="/guest/templates/saas" class="w-full justify-center">
                        View SaaS Template &rarr;
                    </x-aura::button>
                </div>
            </x-aura::card>

            <!-- 5. Creative Agency Template -->
            <x-aura::card class="flex flex-col justify-between hover:border-zinc-900 dark:hover:border-white transition-all group">
                <div class="space-y-4">
                    <div class="h-12 w-12 rounded-2xl bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 flex items-center justify-center font-bold text-xl shadow-md">
                        ⚡
                    </div>
                    <div class="space-y-1">
                        <div class="flex items-center justify-between mb-1">
                            <x-aura::heading level="3" size="sm" class="group-hover:underline">Creative Agency</x-aura::heading>
                            <x-aura::badge variant="subtle" size="sm">Full Template</x-aura::badge>
                        </div>
                        <x-aura::text variant="subtle" size="sm">
                            Bold agency presentation, service cards, client logos, team profiles, and proposal requests.
                        </x-aura::text>
                    </div>
                </div>
                <div class="pt-6">
                    <x-aura::button variant="primary" size="sm" href="/guest/templates/agency" class="w-full justify-center">
                        View Agency &rarr;
                    </x-aura::button>
                </div>
            </x-aura::card>
        </div>
    </div>
</div>

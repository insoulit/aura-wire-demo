<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('layouts.guest')] 
#[Title('Full Page Templates — Guest Portal | Aura Wire')] 
class extends Component {};

?>

<div class="w-full max-w-6xl space-y-12 py-6">
    <!-- Header -->
    <div class="relative text-center space-y-4 max-w-3xl mx-auto">
        <x-aura::badge variant="neutral" size="md">GUEST PORTAL TEMPLATES</x-aura::badge>
        <x-aura::heading level="1" size="display-md">Full Application Page Templates</x-aura::heading>
        <x-aura::subheading class="text-base">
            Complete end-to-end full page website &amp; application templates built using Aura Wire components.
        </x-aura::subheading>
    </div>

    <!-- Templates Catalog Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- 1. E-Commerce Storefront Template -->
        <x-aura::card class="flex flex-col justify-between hover:border-zinc-900 dark:hover:border-white transition-all group">
            <div class="space-y-4">
                <div class="h-12 w-12 rounded-2xl bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 flex items-center justify-center font-bold text-xl shadow-md">
                    🛍️
                </div>
                <div class="space-y-1">
                    <div class="flex items-center justify-between">
                        <x-aura::heading level="3" size="sm" class="group-hover:underline">E-Commerce Storefront</x-aura::heading>
                        <x-aura::badge variant="subtle" size="sm">Template</x-aura::badge>
                    </div>
                    <x-aura::text variant="subtle" size="sm">
                        Product catalogs, category filtering sidebars, shopping cart drawers, and checkout flow pages.
                    </x-aura::text>
                </div>
            </div>
            <div class="pt-6">
                <x-aura::button variant="primary" size="sm" href="/guest/templates/ecommerce" class="w-full justify-center">
                    Explore E-Commerce &rarr;
                </x-aura::button>
            </div>
        </x-aura::card>

        <!-- 2. Personal Portfolio Template -->
        <x-aura::card class="flex flex-col justify-between hover:border-zinc-900 dark:hover:border-white transition-all group">
            <div class="space-y-4">
                <div class="h-12 w-12 rounded-2xl bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 flex items-center justify-center font-bold text-xl shadow-md">
                    🎨
                </div>
                <div class="space-y-1">
                    <div class="flex items-center justify-between">
                        <x-aura::heading level="3" size="sm" class="group-hover:underline">Personal Portfolio</x-aura::heading>
                        <x-aura::badge variant="subtle" size="sm">Template</x-aura::badge>
                    </div>
                    <x-aura::text variant="subtle" size="sm">
                        Work showcases, interactive case studies, bio highlights, skill chips, and contact forms.
                    </x-aura::text>
                </div>
            </div>
            <div class="pt-6">
                <x-aura::button variant="primary" size="sm" href="/guest/templates/portfolio" class="w-full justify-center">
                    Explore Portfolio &rarr;
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
                    <div class="flex items-center justify-between">
                        <x-aura::heading level="3" size="sm" class="group-hover:underline">Restaurant &amp; Dining</x-aura::heading>
                        <x-aura::badge variant="subtle" size="sm">Template</x-aura::badge>
                    </div>
                    <x-aura::text variant="subtle" size="sm">
                        Digital menu tabbed sections, table reservation pickers, chef specials, and dining reviews.
                    </x-aura::text>
                </div>
            </div>
            <div class="pt-6">
                <x-aura::button variant="primary" size="sm" href="/guest/templates/restaurant" class="w-full justify-center">
                    Explore Restaurant &rarr;
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
                    <div class="flex items-center justify-between">
                        <x-aura::heading level="3" size="sm" class="group-hover:underline">SaaS Application</x-aura::heading>
                        <x-aura::badge variant="subtle" size="sm">Template</x-aura::badge>
                    </div>
                    <x-aura::text variant="subtle" size="sm">
                        High-converting landing page, pricing comparison tables, feature grids, and signup flows.
                    </x-aura::text>
                </div>
            </div>
            <div class="pt-6">
                <x-aura::button variant="primary" size="sm" href="/guest/templates/saas" class="w-full justify-center">
                    Explore SaaS Template &rarr;
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
                    <div class="flex items-center justify-between">
                        <x-aura::heading level="3" size="sm" class="group-hover:underline">Creative Agency</x-aura::heading>
                        <x-aura::badge variant="subtle" size="sm">Template</x-aura::badge>
                    </div>
                    <x-aura::text variant="subtle" size="sm">
                        Bold agency presentation, service cards, client logos, team profiles, and proposal requests.
                    </x-aura::text>
                </div>
            </div>
            <div class="pt-6">
                <x-aura::button variant="primary" size="sm" href="/guest/templates/agency" class="w-full justify-center">
                    Explore Agency &rarr;
                </x-aura::button>
            </div>
        </x-aura::card>
    </div>
</div>

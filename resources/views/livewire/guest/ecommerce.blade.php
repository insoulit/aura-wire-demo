<?php

use function Livewire\Volt\{layout, title};

layout('layouts.guest');
title('E-Commerce UI Kit — Aura Wire');

?>

<div class="w-full max-w-5xl space-y-8 py-10">
    <div class="flex items-center gap-3">
        <a href="/guest" class="text-xs font-semibold text-indigo-600 dark:text-indigo-400 hover:underline">&larr; Back to Guest Portal</a>
        <x-aura::badge variant="accent" size="sm">UI Kit</x-aura::badge>
    </div>

    <div>
        <x-aura::kicker class="text-indigo-600 dark:text-indigo-400">🛍️ UI DESIGN SET</x-aura::kicker>
        <x-aura::heading level="1" size="display-sm">E-Commerce Storefront Kit</x-aura::heading>
        <x-aura::subheading class="mt-2">Full-featured online shop template with product grids, shopping cart drawer, checkout forms, and filtering.</x-aura::subheading>
    </div>

    <x-aura::card class="p-12 text-center space-y-4">
        <x-aura::heading level="2" size="md">E-Commerce Kit Ready for Implementation</x-aura::heading>
        <x-aura::text variant="subtle" size="sm">This UI design set will feature product cards, checkout flows, category navigation, and filter sidebars built natively with Aura Wire components.</x-aura::text>
        <div class="pt-2">
            <x-aura::button variant="primary" size="md" href="/guest">Return to Design Sets Showcase</x-aura::button>
        </div>
    </x-aura::card>
</div>

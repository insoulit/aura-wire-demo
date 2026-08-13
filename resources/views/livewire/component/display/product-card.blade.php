<?php

use function Livewire\Volt\{layout, title};

layout('livewire.layout.component');
title('Product Card - Aura Wire');

?>

<div class="w-full max-w-4xl mx-auto space-y-10 flex flex-col items-center justify-center">
    <!-- Header -->
    <x-aura::card class="p-6 sm:p-8 bg-white/60 dark:bg-zinc-900/50 backdrop-blur-md shadow-xs w-full">
        <div class="space-y-2 max-w-2xl">
            <div class="flex items-center gap-2.5">
                <x-aura::kicker>Display</x-aura::kicker>
                <x-aura::badge variant="subtle" size="sm">Component</x-aura::badge>
            </div>
            <x-aura::heading level="1" size="xl">Product Card</x-aura::heading>
            <x-aura::subheading size="md">
                E-commerce and SaaS item showcase card with badge overlays, original vs discounted prices, and action slots.
            </x-aura::subheading>
        </div>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code" class="w-full">
        <x-slot:codeSlot>@verbatim<x-aura::product-card title="Headphones" price="$199" badge="Popular" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 1. E-Commerce Product Card -->
    <x-aura::code class="w-full" title="1. E-Commerce Product Showcase Card">
        <x-slot:preview>
            <div class="w-full max-w-sm">
                <x-aura::product-card
                    title="Aura Pro Wireless Headphones"
                    subtitle="Audio & Electronics"
                    price="$299.00"
                    originalPrice="$349.00"
                    badge="Save $50"
                    href="#"
                >
                    <x-aura::button variant="primary" size="sm">Add to Cart</x-aura::button>
                </x-aura::product-card>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::product-card
    title="Aura Pro Wireless Headphones"
    subtitle="Audio & Electronics"
    price="$299.00"
    originalPrice="$349.00"
    badge="Save $50"
    href="#"
>
    <x-aura::button variant="primary" size="sm">Add to Cart</x-aura::button>
</x-aura::product-card>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Dual Product Grid -->
    <x-aura::code class="w-full" title="2. E-Commerce Product Grid Showcase">
        <x-slot:preview>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 w-full max-w-2xl">
                <x-aura::product-card
                    title="Minimalist Studio Desk"
                    subtitle="Furniture & Interior"
                    price="$549.00"
                    badge="Best Seller"
                    href="#"
                >
                    <x-aura::button variant="secondary" size="sm">Quick View</x-aura::button>
                </x-aura::product-card>

                <x-aura::product-card
                    title="Ergonomic Mesh Chair"
                    subtitle="Office Supplies"
                    price="$389.00"
                    originalPrice="$429.00"
                    badge="Sale"
                    href="#"
                >
                    <x-aura::button variant="primary" size="sm">Buy Now</x-aura::button>
                </x-aura::product-card>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::product-card title="Minimalist Studio Desk" price="$549.00" badge="Best Seller">
    <x-aura::button variant="secondary" size="sm">Quick View</x-aura::button>
</x-aura::product-card>@endverbatim</x-slot:codeSlot>
    </x-aura::code>
</div>

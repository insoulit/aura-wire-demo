<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.app')] 
#[Title('E-Commerce UI Kit — Guest Portal | Aura Wire')] 
class extends Component {
    public string $search = '';
    public string $category = 'all';
    public int $cartCount = 2;
};

?>

<div class="w-full max-w-6xl space-y-10 py-6">
    <!-- Navigation Breadcrumbs & Top Bar -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 border-b border-zinc-200 dark:border-zinc-800 pb-4">
        <div class="flex items-center gap-3">
            <x-aura::button href="/guest#full-template" variant="subtle" size="sm" icon="arrow-left">
                Back
            </x-aura::button>
            <span class="text-zinc-300 dark:text-zinc-700">/</span>
            <x-aura::badge variant="neutral" size="sm">E-Commerce UI Kit</x-aura::badge>
        </div>

        <div class="flex items-center gap-3">
            <x-aura::button variant="secondary" size="sm" square title="Shopping Cart">
                <x-aura::icon name="shopping-bag"  size="xs" />
            </x-aura::button>
            <x-aura::badge variant="neutral" size="sm">{{ $cartCount }} Items in Bag</x-aura::badge>
        </div>
    </div>

    <!-- Store Hero Banner -->
    <div class="rounded-3xl bg-zinc-100/90 dark:bg-zinc-900 text-zinc-900 dark:text-white p-8 md:p-12 relative overflow-hidden border border-zinc-200/80 dark:border-zinc-800 shadow-sm">
        <div class="max-w-2xl space-y-4">
            <div class="inline-flex items-center gap-2">
                <x-aura::badge variant="neutral" size="sm">🔥 Summer Collection 2026</x-aura::badge>
                <x-aura::badge variant="warning" size="sm">Up to 40% Off</x-aura::badge>
            </div>
            <x-aura::heading level="1" size="display-md" >
                Next-Gen Audio &amp; Workspace Gear
            </x-aura::heading>
            <x-aura::subheading >
                Discover precision-crafted headphones, minimalist desk lamps, and ergonomic studio accessories designed for creators.
            </x-aura::subheading>
            <div class="pt-2 flex flex-wrap gap-3">
                <x-aura::button variant="primary" size="md" icon-trailing="arrow-right">Shop New Arrivals</x-aura::button>
                <x-aura::button variant="outline" size="md">Browse Deals</x-aura::button>
            </div>
        </div>
    </div>

    <!-- Search & Filter Controls -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
        <div class="w-full sm:w-80">
            <x-aura::input wire:model.live="search" placeholder="Search products, brands, gear..." icon="search" />
        </div>

        <div class="flex items-center gap-2 overflow-x-auto pb-1 scrollbar-none">
            <x-aura::button variant="primary" size="sm">All Products</x-aura::button>
            <x-aura::button variant="ghost" size="sm">Audio</x-aura::button>
            <x-aura::button variant="ghost" size="sm">Desk Setup</x-aura::button>
            <x-aura::button variant="ghost" size="sm">Wearables</x-aura::button>
        </div>
    </div>

    <!-- Product Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        <!-- Product 1 -->
        <x-aura::card >
            <div class="aspect-4/3 bg-zinc-100 dark:bg-zinc-800/60 flex items-center justify-center relative p-6">
                <span class="text-6xl group-hover:scale-110 transition-transform duration-300">🎧</span>
                <div class="absolute top-3 left-3">
                    <x-aura::badge variant="neutral" size="sm">Best Seller</x-aura::badge>
                </div>
            </div>
            <div class="p-5 space-y-3">
                <div class="flex items-start justify-between gap-2">
                    <div>
                        <x-aura::heading level="3" size="sm" >Aura Pro Studio ANC Headphones</x-aura::heading>
                        <x-aura::text variant="subtle" size="xs">High-fidelity active noise canceling audio.</x-aura::text>
                    </div>
                </div>
                <div class="flex items-center justify-between pt-2 border-t border-zinc-100 dark:border-zinc-800">
                    <div class="font-extrabold text-lg text-zinc-900 dark:text-white">$299.00</div>
                    <x-aura::button variant="primary" size="sm">Add to Cart</x-aura::button>
                </div>
            </div>
        </x-aura::card>

        <!-- Product 2 -->
        <x-aura::card >
            <div class="aspect-4/3 bg-zinc-100 dark:bg-zinc-800/60 flex items-center justify-center relative p-6">
                <span class="text-6xl group-hover:scale-110 transition-transform duration-300">💡</span>
                <div class="absolute top-3 left-3">
                    <x-aura::badge variant="subtle" size="sm">New</x-aura::badge>
                </div>
            </div>
            <div class="p-5 space-y-3">
                <div class="flex items-start justify-between gap-2">
                    <div>
                        <x-aura::heading level="3" size="sm" >Minimalist Aluminum Desk Lamp</x-aura::heading>
                        <x-aura::text variant="subtle" size="xs">Dimmable LED touch bar with wireless charger.</x-aura::text>
                    </div>
                </div>
                <div class="flex items-center justify-between pt-2 border-t border-zinc-100 dark:border-zinc-800">
                    <div class="font-extrabold text-lg text-zinc-900 dark:text-white">$129.00</div>
                    <x-aura::button variant="primary" size="sm">Add to Cart</x-aura::button>
                </div>
            </div>
        </x-aura::card>

        <!-- Product 3 -->
        <x-aura::card >
            <div class="aspect-4/3 bg-zinc-100 dark:bg-zinc-800/60 flex items-center justify-center relative p-6">
                <span class="text-6xl group-hover:scale-110 transition-transform duration-300">⌨️</span>
                <div class="absolute top-3 left-3">
                    <x-aura::badge variant="warning" size="sm">Low Stock</x-aura::badge>
                </div>
            </div>
            <div class="p-5 space-y-3">
                <div class="flex items-start justify-between gap-2">
                    <div>
                        <x-aura::heading level="3" size="sm" >Compact Wireless Mechanical Keyboard</x-aura::heading>
                        <x-aura::text variant="subtle" size="xs">Custom hot-swappable switches with RGB.</x-aura::text>
                    </div>
                </div>
                <div class="flex items-center justify-between pt-2 border-t border-zinc-100 dark:border-zinc-800">
                    <div class="font-extrabold text-lg text-zinc-900 dark:text-white">$189.00</div>
                    <x-aura::button variant="primary" size="sm">Add to Cart</x-aura::button>
                </div>
            </div>
        </x-aura::card>
    </div>

    <!-- Quick Checkout Summary Card -->
    <x-aura::card title="Quick Checkout Summary">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="space-y-4">
                <x-aura::field label="Shipping Address">
                    <x-aura::input placeholder="123 Creator St, Tech District" icon="map-pin" />
                </x-aura::field>

                <x-aura::field label="Payment Method">
                    <x-aura::select>
                        <option value="card">Credit Card (Apple Pay / Visa)</option>
                        <option value="paypal">PayPal Express</option>
                    </x-aura::select>
                </x-aura::field>
            </div>

            <div class="space-y-3 bg-zinc-50 dark:bg-zinc-800/50 p-5 rounded-2xl border border-zinc-200 dark:border-zinc-700/60">
                <div class="flex justify-between text-sm text-zinc-600 dark:text-zinc-400">
                    <span>Subtotal (2 items)</span>
                    <span class="font-semibold text-zinc-900 dark:text-white">$428.00</span>
                </div>
                <div class="flex justify-between text-sm text-zinc-600 dark:text-zinc-400">
                    <span>Express Shipping</span>
                    <span class="font-bold text-zinc-900 dark:text-white">FREE</span>
                </div>
                <div class="pt-3 border-t border-zinc-200 dark:border-zinc-700 flex justify-between text-base font-extrabold text-zinc-900 dark:text-white">
                    <span>Total Amount</span>
                    <span>$428.00</span>
                </div>
                <x-aura::button variant="primary" size="md"  icon-trailing="arrow-right">
                    Complete Secure Checkout
                </x-aura::button>
            </div>
        </div>
    </x-aura::card>
</div>

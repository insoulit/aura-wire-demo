<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.app')] 
#[Title('E Commerce UI Kit — Guest Portal | Aura Wire')] 
class extends Component {
    public string $search = '';
    public string $category = 'all';
    public int $cartCount = 2;
};

?>

<x-aura::flex direction="col" gap="10" class="w-full max-w-6xl py-6">
    <!-- Navigation Breadcrumbs & Top Bar -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 border-b border-zinc-200 dark:border-zinc-800 pb-4">
        <x-aura::breadcrumb :items="[
            ['label' => 'Back to Templates', 'href' => '/guest#full-template', 'icon' => 'arrow-left'],
            ['label' => 'E Commerce UI Kit']
        ]" separator="slash" variant="pills" />

        <div class="flex items-center gap-3">
            <x-aura::button variant="secondary" size="sm" square title="Shopping Cart">
                <x-aura::icon name="shopping-bag" size="xs" />
            </x-aura::button>
            <x-aura::badge variant="neutral" size="sm">{{ $cartCount }} Items in Bag</x-aura::badge>
        </div>
    </div>

    <!-- Store Hero Banner -->
    <x-aura::card>
        <div class="space-y-4 max-w-2xl">
            <div class="inline-flex items-center gap-2">
                <x-aura::badge variant="neutral" size="sm">🔥 Summer Collection 2026</x-aura::badge>
                <x-aura::badge variant="warning" size="sm">Up to 40% Off</x-aura::badge>
            </div>
            <x-aura::heading level="1" size="display-md">
                Next-Gen Audio &amp; Workspace Gear
            </x-aura::heading>
            <x-aura::subheading size="md">
                Discover precision-crafted headphones, minimalist desk lamps, and ergonomic studio accessories designed for creators.
            </x-aura::subheading>
            <div class="pt-2 flex flex-wrap gap-3">
                <x-aura::button variant="primary" size="md" icon-trailing="arrow-right">Shop New Arrivals</x-aura::button>
                <x-aura::button variant="outline" size="md">Browse Deals</x-aura::button>
            </div>
        </div>
    </x-aura::card>

    <!-- Search & Filter Controls -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
        <div class="w-full sm:w-80">
            <x-aura::input wire:model.live="search" placeholder="Search products, brands, gear..." icon="search" />
        </div>

        <x-aura::group>
            <x-aura::button variant="primary" size="sm">All Products</x-aura::button>
            <x-aura::button variant="ghost" size="sm">Audio</x-aura::button>
            <x-aura::button variant="ghost" size="sm">Desk Setup</x-aura::button>
            <x-aura::button variant="ghost" size="sm">Wearables</x-aura::button>
        </x-aura::group>
    </div>

    <!-- Product Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Product 1 -->
        <x-aura::card>
            <div class="mb-4">
                <x-aura::image src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=800&auto=format&fit=crop&q=80" alt="Aura Pro Studio ANC Headphones" aspect="4/3" rounded="xl" zoom>
                    <div class="absolute top-3 left-3 z-10">
                        <x-aura::badge variant="neutral" size="sm">Best Seller</x-aura::badge>
                    </div>
                </x-aura::image>
            </div>
            <div class="space-y-3">
                <div>
                    <x-aura::kicker>Audio</x-aura::kicker>
                    <x-aura::text weight="bold" size="lg">Aura Pro Studio ANC Headphones</x-aura::text>
                    <x-aura::text variant="subtle" size="xs">High-fidelity active noise canceling audio.</x-aura::text>
                </div>
                <div class="flex items-center justify-between pt-2 border-t border-zinc-100 dark:border-zinc-800">
                    <div class="font-extrabold text-lg text-zinc-900 dark:text-white">$299.00</div>
                    <x-aura::button variant="primary" size="sm" icon="shopping-bag">Add to Cart</x-aura::button>
                </div>
            </div>
        </x-aura::card>

        <!-- Product 2 -->
        <x-aura::card>
            <div class="mb-4">
                <x-aura::image src="https://images.unsplash.com/photo-1507473885765-e6ed057f782c?w=800&auto=format&fit=crop&q=80" alt="Minimalist Aluminum Desk Lamp" aspect="4/3" rounded="xl" zoom>
                    <div class="absolute top-3 left-3 z-10">
                        <x-aura::badge variant="subtle" size="sm">New</x-aura::badge>
                    </div>
                </x-aura::image>
            </div>
            <div class="space-y-3">
                <div>
                    <x-aura::kicker>Desk Setup</x-aura::kicker>
                    <x-aura::text weight="bold" size="lg">Minimalist Aluminum Desk Lamp</x-aura::text>
                    <x-aura::text variant="subtle" size="xs">Dimmable LED touch bar with wireless charger.</x-aura::text>
                </div>
                <div class="flex items-center justify-between pt-2 border-t border-zinc-100 dark:border-zinc-800">
                    <div class="font-extrabold text-lg text-zinc-900 dark:text-white">$129.00</div>
                    <x-aura::button variant="primary" size="sm" icon="shopping-bag">Add to Cart</x-aura::button>
                </div>
            </div>
        </x-aura::card>

        <!-- Product 3 -->
        <x-aura::card>
            <div class="mb-4">
                <x-aura::image src="https://images.unsplash.com/photo-1587829741301-dc798b83add3?w=800&auto=format&fit=crop&q=80" alt="Compact Wireless Mechanical Keyboard" aspect="4/3" rounded="xl" zoom>
                    <div class="absolute top-3 left-3 z-10">
                        <x-aura::badge variant="warning" size="sm">Low Stock</x-aura::badge>
                    </div>
                </x-aura::image>
            </div>
            <div class="space-y-3">
                <div>
                    <x-aura::kicker>Desk Setup</x-aura::kicker>
                    <x-aura::text weight="bold" size="lg">Compact Wireless Mechanical Keyboard</x-aura::text>
                    <x-aura::text variant="subtle" size="xs">Custom hot swappable switches with RGB.</x-aura::text>
                </div>
                <div class="flex items-center justify-between pt-2 border-t border-zinc-100 dark:border-zinc-800">
                    <div class="font-extrabold text-lg text-zinc-900 dark:text-white">$189.00</div>
                    <x-aura::button variant="primary" size="sm" icon="shopping-bag">Add to Cart</x-aura::button>
                </div>
            </div>
        </x-aura::card>
    </div>

    <!-- Quick Checkout Summary Card -->
    <x-aura::card title="Quick Checkout Summary" description="Review items and complete your purchase securely.">
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

            <div class="space-y-4">
                <x-aura::stat title="Order Total" value="$428.00" description="Subtotal ($428.00) + Free Express Shipping" />
                <x-aura::separator />
                <x-aura::button variant="primary" size="md" icon-trailing="arrow-right">
                    Complete Secure Checkout
                </x-aura::button>
            </div>
        </div>
    </x-aura::card>
</x-aura::flex>

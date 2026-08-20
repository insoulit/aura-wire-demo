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

<x-aura::flex direction="col" gap="10">

    <!-- Navigation Breadcrumbs & Top Bar -->
    <x-aura::flex direction="col" sm="row" align="start" smAlign="center" justify="between" gap="4" class="border-b border-zinc-200 dark:border-zinc-800 pb-4">

        <x-aura::breadcrumb :items="[
            ['label' => 'Back to Templates', 'href' => '/guest#full-template', 'icon' => 'arrow-left'],
            ['label' => 'E Commerce UI Kit']
        ]" separator="slash" variant="pills" />

        <x-aura::flex align="center" gap="3">

            <x-aura::button variant="secondary" size="sm" icon="shopping-bag">
                Bag
            </x-aura::button>

            <x-aura::badge variant="neutral" size="sm">
                {{ $cartCount }} Items
            </x-aura::badge>

        </x-aura::flex>

    </x-aura::flex>

    <!-- Store Hero Banner -->
    <x-aura::card gap="4">

        <x-aura::flex direction="col" gap="4" class="max-w-2xl">

            <x-aura::flex align="center" gap="2">

                <x-aura::badge variant="neutral" size="sm">
                    Summer Collection
                </x-aura::badge>

                <x-aura::badge variant="subtle" size="sm">
                    Up to 40% Off
                </x-aura::badge>

            </x-aura::flex>

            <x-aura::display size="md">
                Next Gen Audio and Workspace Gear
            </x-aura::display>

            <x-aura::subheading size="md">
                Discover precision crafted headphones, minimalist desk lamps, and ergonomic studio accessories designed for creators.
            </x-aura::subheading>

            <x-aura::flex align="center" gap="3" wrap="true" class="pt-2">

                <x-aura::button variant="primary" size="md" icon="arrow-right" iconPlacement="right">
                    Shop
                </x-aura::button>

                <x-aura::button variant="secondary" size="md">
                    Deals
                </x-aura::button>

            </x-aura::flex>

        </x-aura::flex>

    </x-aura::card>

    <!-- Search & Filter Controls -->
    <x-aura::flex direction="col" sm="row" align="start" smAlign="center" justify="between" gap="4">

        <div class="w-full sm:w-80">
            <x-aura::input wire:model.live="search" placeholder="Search products, gear..." icon="search" />
        </div>

        <x-aura::group>

            <x-aura::button variant="primary" size="sm">
                All
            </x-aura::button>

            <x-aura::button variant="ghost" size="sm">
                Audio
            </x-aura::button>

            <x-aura::button variant="ghost" size="sm">
                Desk
            </x-aura::button>

            <x-aura::button variant="ghost" size="sm">
                Gear
            </x-aura::button>

        </x-aura::group>

    </x-aura::flex>

    <!-- Product Grid -->
    <x-aura::grid cols="1" sm="2" lg="3" gap="6">

        <!-- Product 1 -->
        <x-aura::card gap="3">

            <div class="w-full h-48 rounded-xl bg-zinc-100 dark:bg-zinc-800 flex items-center justify-center relative overflow-hidden">

                <x-aura::icon name="headphones" size="xl" />

                <div class="absolute top-3 left-3 z-10">

                    <x-aura::badge variant="neutral" size="sm">
                        Best Seller
                    </x-aura::badge>

                </div>

            </div>

            <x-aura::flex direction="col" gap="1">

                <x-aura::kicker>
                    Audio
                </x-aura::kicker>

                <x-aura::text weight="bold" size="lg">
                    Aura Pro Studio ANC Headphones
                </x-aura::text>

                <x-aura::text variant="subtle" size="sm">
                    High fidelity active noise canceling audio.
                </x-aura::text>

            </x-aura::flex>

            <x-slot:footer>

                <div class="font-bold text-lg text-zinc-900 dark:text-white font-mono">$299.00</div>

                <x-aura::button variant="primary" size="sm" icon="shopping-bag">
                    Add
                </x-aura::button>

            </x-slot:footer>

        </x-aura::card>

        <!-- Product 2 -->
        <x-aura::card gap="3">

            <div class="w-full h-48 rounded-xl bg-zinc-100 dark:bg-zinc-800 flex items-center justify-center relative overflow-hidden">

                <x-aura::icon name="sun" size="xl" />

                <div class="absolute top-3 left-3 z-10">

                    <x-aura::badge variant="subtle" size="sm">
                        New
                    </x-aura::badge>

                </div>

            </div>

            <x-aura::flex direction="col" gap="1">

                <x-aura::kicker>
                    Desk Setup
                </x-aura::kicker>

                <x-aura::text weight="bold" size="lg">
                    Minimalist Aluminum Desk Lamp
                </x-aura::text>

                <x-aura::text variant="subtle" size="sm">
                    Dimmable LED touch bar with wireless charger.
                </x-aura::text>

            </x-aura::flex>

            <x-slot:footer>

                <div class="font-bold text-lg text-zinc-900 dark:text-white font-mono">$129.00</div>

                <x-aura::button variant="primary" size="sm" icon="shopping-bag">
                    Add
                </x-aura::button>

            </x-slot:footer>

        </x-aura::card>

        <!-- Product 3 -->
        <x-aura::card gap="3">

            <div class="w-full h-48 rounded-xl bg-zinc-100 dark:bg-zinc-800 flex items-center justify-center relative overflow-hidden">

                <x-aura::icon name="keyboard" size="xl" />

                <div class="absolute top-3 left-3 z-10">

                    <x-aura::badge variant="neutral" size="sm">
                        Low Stock
                    </x-aura::badge>

                </div>

            </div>

            <x-aura::flex direction="col" gap="1">

                <x-aura::kicker>
                    Desk Setup
                </x-aura::kicker>

                <x-aura::text weight="bold" size="lg">
                    Compact Wireless Mechanical Keyboard
                </x-aura::text>

                <x-aura::text variant="subtle" size="sm">
                    Custom hot swappable switches with backlight.
                </x-aura::text>

            </x-aura::flex>

            <x-slot:footer>

                <div class="font-bold text-lg text-zinc-900 dark:text-white font-mono">$189.00</div>

                <x-aura::button variant="primary" size="sm" icon="shopping-bag">
                    Add
                </x-aura::button>

            </x-slot:footer>

        </x-aura::card>

    </x-aura::grid>

    <!-- Quick Checkout Summary Card -->
    <x-aura::card title="Quick Checkout Summary" description="Review items and complete your purchase securely." gap="6">

        <x-aura::grid cols="1" md="2" gap="6">

            <x-aura::flex direction="col" gap="4">

                <x-aura::field label="Shipping Address">
                    <x-aura::input placeholder="123 Creator St, Tech District" icon="map-pin" />
                </x-aura::field>

                <x-aura::field label="Payment Method">
                    <x-aura::select>
                        <option value="card">Credit Card (Apple Pay / Visa)</option>
                        <option value="paypal">PayPal Express</option>
                    </x-aura::select>
                </x-aura::field>

            </x-aura::flex>

            <x-aura::flex direction="col" gap="4">

                <x-aura::stat title="Order Total" value="$428.00" description="Subtotal ($428.00) + Free Express Shipping" />

                <x-aura::separator />

                <x-aura::button variant="primary" size="md" icon="arrow-right" iconPlacement="right">
                    Checkout
                </x-aura::button>

            </x-aura::flex>

        </x-aura::grid>

    </x-aura::card>

</x-aura::flex>

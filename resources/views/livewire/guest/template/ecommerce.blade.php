<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.app')] 
#[Title('E Commerce Storefront UI Kit — Guest Portal | Aura Wire')] 
class extends Component {
    public string $search = '';
    public string $category = 'all';
    public string $sortBy = 'featured';
    public bool $inStockOnly = false;
    public string $currency = 'USD';
    public string $promoCode = '';
    public int $discountPercent = 0;
    public string $promoMessage = '';
    public string $newsletterEmail = '';
    public bool $subscribed = false;
    public bool $checkoutSuccess = false;
    public string $orderNumber = '';
    public array $wishlist = [1, 3];
    public array $cart = [
        1 => [
            'id' => 1,
            'name' => 'Aura Studio Wireless ANC Headphones',
            'category' => 'Audio Acoustics',
            'price' => 299,
            'quantity' => 1,
            'icon' => 'headphones',
        ],
        2 => [
            'id' => 2,
            'name' => 'Minimalist Precision Aluminum Desk Lamp',
            'category' => 'Lighting',
            'price' => 129,
            'quantity' => 1,
            'icon' => 'sun',
        ],
    ];

    public function products(): array
    {
        $all = [
            [
                'id' => 1,
                'name' => 'Aura Studio Wireless ANC Headphones',
                'category' => 'audio',
                'categoryLabel' => 'Audio Acoustics',
                'badge' => 'Best Seller',
                'badgeVariant' => 'neutral',
                'price' => 299,
                'originalPrice' => 349,
                'rating' => 5,
                'reviews' => 128,
                'inStock' => true,
                'icon' => 'headphones',
                'description' => 'High fidelity active noise cancelling studio headphones with 40mm beryllium drivers and 36 hour battery.',
            ],
            [
                'id' => 2,
                'name' => 'Minimalist Precision Aluminum Desk Lamp',
                'category' => 'lighting',
                'categoryLabel' => 'Lighting',
                'badge' => 'New',
                'badgeVariant' => 'subtle',
                'price' => 129,
                'originalPrice' => null,
                'rating' => 5,
                'reviews' => 84,
                'inStock' => true,
                'icon' => 'sun',
                'description' => 'Precision balanced CNC aluminum task lamp with capacitive touch slider and wireless charging base.',
            ],
            [
                'id' => 3,
                'name' => 'Compact Wireless Mechanical Keyboard',
                'category' => 'keyboards',
                'categoryLabel' => 'Keyboards',
                'badge' => 'Staff Pick',
                'badgeVariant' => 'neutral',
                'price' => 189,
                'originalPrice' => 219,
                'rating' => 5,
                'reviews' => 210,
                'inStock' => true,
                'icon' => 'keyboard',
                'description' => 'Gasket mounted 75 percent mechanical keyboard with pre lubed switches and sound dampening silicone.',
            ],
            [
                'id' => 4,
                'name' => 'Ergonomic Precision Wireless Mouse',
                'category' => 'accessories',
                'categoryLabel' => 'Accessories',
                'badge' => 'Sale',
                'badgeVariant' => 'subtle',
                'price' => 99,
                'originalPrice' => 120,
                'rating' => 5,
                'reviews' => 64,
                'inStock' => true,
                'icon' => 'mouse',
                'description' => 'Sculpted thumb rest ergonomic mouse with dual sensor tracking and ultra low latency multi device pairing.',
            ],
            [
                'id' => 5,
                'name' => 'Modular Studio Microphone Arm',
                'category' => 'audio',
                'categoryLabel' => 'Audio Acoustics',
                'badge' => 'Limited',
                'badgeVariant' => 'neutral',
                'price' => 149,
                'originalPrice' => null,
                'rating' => 5,
                'reviews' => 92,
                'inStock' => true,
                'icon' => 'mic',
                'description' => 'Internal spring broadcast boom arm with integrated cable management channel and 360 degree rotation.',
            ],
            [
                'id' => 6,
                'name' => 'Merino Wool Dual Sided Desk Mat',
                'category' => 'accessories',
                'categoryLabel' => 'Accessories',
                'badge' => 'Popular',
                'badgeVariant' => 'subtle',
                'price' => 49,
                'originalPrice' => 59,
                'rating' => 5,
                'reviews' => 45,
                'inStock' => true,
                'icon' => 'layers',
                'description' => 'Water resistant merino wool felt desk pad with anti slip rubber backing protecting tabletop surfaces.',
            ],
        ];

        return array_values(array_filter($all, function ($item) {
            $matchesCategory = $this->category === 'all' || $item['category'] === $this->category;
            $matchesSearch = empty($this->search) || str_contains(strtolower($item['name']), strtolower($this->search)) || str_contains(strtolower($item['description']), strtolower($this->search));
            $matchesStock = !$this->inStockOnly || $item['inStock'];

            return $matchesCategory && $matchesSearch && $matchesStock;
        }));
    }

    public function addToCart(int $productId): void
    {
        $all = [
            1 => ['id' => 1, 'name' => 'Aura Studio Wireless ANC Headphones', 'category' => 'Audio Acoustics', 'price' => 299, 'icon' => 'headphones'],
            2 => ['id' => 2, 'name' => 'Minimalist Precision Aluminum Desk Lamp', 'category' => 'Lighting', 'price' => 129, 'icon' => 'sun'],
            3 => ['id' => 3, 'name' => 'Compact Wireless Mechanical Keyboard', 'category' => 'Keyboards', 'price' => 189, 'icon' => 'keyboard'],
            4 => ['id' => 4, 'name' => 'Ergonomic Precision Wireless Mouse', 'category' => 'Accessories', 'price' => 99, 'icon' => 'mouse'],
            5 => ['id' => 5, 'name' => 'Modular Studio Microphone Arm', 'category' => 'Audio Acoustics', 'price' => 149, 'icon' => 'mic'],
            6 => ['id' => 6, 'name' => 'Merino Wool Dual Sided Desk Mat', 'category' => 'Accessories', 'price' => 49, 'icon' => 'layers'],
        ];

        if (isset($all[$productId])) {
            if (isset($this->cart[$productId])) {
                $this->cart[$productId]['quantity']++;
            } else {
                $item = $all[$productId];
                $this->cart[$productId] = [
                    'id' => $item['id'],
                    'name' => $item['name'],
                    'category' => $item['category'],
                    'price' => $item['price'],
                    'quantity' => 1,
                    'icon' => $item['icon'],
                ];
            }
        }
    }

    public function addBundle(): void
    {
        $this->addToCart(1);
        $this->addToCart(2);
        $this->addToCart(3);
    }

    public function removeFromCart(int $productId): void
    {
        unset($this->cart[$productId]);
    }

    public function updateQuantity(int $productId, int $delta): void
    {
        if (isset($this->cart[$productId])) {
            $this->cart[$productId]['quantity'] += $delta;
            if ($this->cart[$productId]['quantity'] <= 0) {
                unset($this->cart[$productId]);
            }
        }
    }

    public function toggleWishlist(int $productId): void
    {
        if (in_array($productId, $this->wishlist)) {
            $this->wishlist = array_values(array_diff($this->wishlist, [$productId]));
        } else {
            $this->wishlist[] = $productId;
        }
    }

    public function applyPromo(): void
    {
        if (strtoupper(trim($this->promoCode)) === 'AURA2026') {
            $this->discountPercent = 15;
            $this->promoMessage = 'Promo code AURA2026 applied for 15 percent discount';
        } else {
            $this->discountPercent = 0;
            $this->promoMessage = 'Invalid promo code entered';
        }
    }

    public function checkout(): void
    {
        if (count($this->cart) > 0) {
            $this->orderNumber = 'AURA-ORD-' . rand(100000, 999999);
            $this->checkoutSuccess = true;
            $this->cart = [];
        }
    }

    public function resetCheckout(): void
    {
        $this->checkoutSuccess = false;
        $this->cart = [
            1 => [
                'id' => 1,
                'name' => 'Aura Studio Wireless ANC Headphones',
                'category' => 'Audio Acoustics',
                'price' => 299,
                'quantity' => 1,
                'icon' => 'headphones',
            ],
            2 => [
                'id' => 2,
                'name' => 'Minimalist Precision Aluminum Desk Lamp',
                'category' => 'Lighting',
                'price' => 129,
                'quantity' => 1,
                'icon' => 'sun',
            ],
        ];
    }

    public function subscribeNewsletter(): void
    {
        if (!empty($this->newsletterEmail)) {
            $this->subscribed = true;
        }
    }

    public function resetFilters(): void
    {
        $this->search = '';
        $this->category = 'all';
        $this->inStockOnly = false;
        $this->sortBy = 'featured';
    }

    public function getSubtotalProperty(): float
    {
        $subtotal = 0;
        foreach ($this->cart as $item) {
            $subtotal += $item['price'] * $item['quantity'];
        }
        return (float) $subtotal;
    }

    public function getDiscountAmountProperty(): float
    {
        return $this->subtotal * ($this->discountPercent / 100);
    }

    public function getTotalProperty(): float
    {
        return max(0, $this->subtotal - $this->discountAmount);
    }

    public function getCartCountProperty(): int
    {
        $count = 0;
        foreach ($this->cart as $item) {
            $count += $item['quantity'];
        }
        return $count;
    }
};

?>

<x-aura::flex direction="col" gap="16">

    <!-- Top Announcement Bar -->
    <x-aura::alert variant="primary" layout="announcement">

        <x-aura::flex align="center" justify="between" gap="4">

            <x-aura::flex align="center" gap="3">

                <x-aura::badge variant="neutral" size="sm">
                    SEASON OPENING
                </x-aura::badge>

                <x-aura::text size="sm" variant="white">
                    Free global express delivery on orders over $150 with code AURA2026
                </x-aura::text>

            </x-aura::flex>

            <x-aura::badge variant="subtle" size="sm">
                AURA2026
            </x-aura::badge>

        </x-aura::flex>

    </x-aura::alert>

    <!-- Navigation Breadcrumb & Top Controls -->
    <x-aura::flex direction="col" sm="row" align="start" smAlign="center" justify="between" gap="4">

        <x-aura::flex align="center" gap="3">

            <x-aura::button href="/guest#full-template" wire:navigate variant="secondary" size="sm" icon="arrow-left">
                Back
            </x-aura::button>

            <x-aura::separator orientation="vertical" />

            <x-aura::badge variant="neutral" size="sm">
                E Commerce Storefront UI Kit
            </x-aura::badge>

        </x-aura::flex>

        <x-aura::flex align="center" gap="3">

            <x-aura::badge variant="subtle" size="sm">
                {{ $this->cartCount }} In Bag
            </x-aura::badge>

            <x-aura::button href="#checkout" variant="secondary" size="sm" icon="shopping-bag">
                Cart
            </x-aura::button>

        </x-aura::flex>

    </x-aura::flex>

    <!-- Store Hero Banner Section -->
    <x-aura::card padding="xl" gap="8">

        <x-aura::flex direction="col" gap="6">

            <x-aura::flex align="center" gap="3">

                <x-aura::kicker>
                    PRECISION HARDWARE 2026
                </x-aura::kicker>

                <x-aura::badge variant="neutral" size="sm">
                    Flagship Studio Series
                </x-aura::badge>

            </x-aura::flex>

            <x-aura::display size="xl">
                Studio Grade Audio and Minimalist Workspace Gear
            </x-aura::display>

            <x-aura::subheading size="lg">
                Engineered for creators, developers, and architects who demand high fidelity acoustics and timeless tactile craftsmanship.
            </x-aura::subheading>

            <x-aura::flex align="center" gap="4" wrap="true">

                <x-aura::button href="#catalog" variant="primary" size="lg" icon="arrow-right" iconTrailing="arrow-right">
                    Shop
                </x-aura::button>

                <x-aura::button href="#bundle" variant="secondary" size="lg" icon="sparkles">
                    Lookbook
                </x-aura::button>

            </x-aura::flex>

        </x-aura::flex>

    </x-aura::card>

    <!-- Store Value Pillars & Guarantees -->
    <x-aura::grid cols="1" sm="2" lg="4" gap="4">

        <x-aura::stat label="Shipping" value="Carbon Neutral" description="Expedited worldwide dispatch from regional hubs" icon="truck" />

        <x-aura::stat label="Warranty" value="Lifetime Care" description="Full hardware coverage against manufacturing defects" icon="shield-check" />

        <x-aura::stat label="Trial" value="30 Day Test" description="Risk free studio testing with complimentary returns" icon="rotate-ccw" />

        <x-aura::stat label="Support" value="24 7 Concierge" description="Direct dedicated assistance from studio engineers" icon="headphones" />

    </x-aura::grid>

    <!-- Catalog Header & Dynamic Filtering -->
    <div id="catalog">

        <x-aura::flex direction="col" gap="6">

            <x-aura::flex direction="col" sm="row" align="start" smAlign="center" justify="between" gap="4">

                <x-aura::flex direction="col" gap="1">

                    <x-aura::heading level="2" size="xl">
                        Featured Studio Hardware
                    </x-aura::heading>

                    <x-aura::subheading size="sm">
                        Curated collection of acoustic monitors, tactile keyboards, and precision desk accessories
                    </x-aura::subheading>

                </x-aura::flex>

                <x-aura::flex align="center" gap="3">

                    <x-aura::text size="sm" variant="subtle">
                        Showing {{ count($this->products()) }} Products
                    </x-aura::text>

                </x-aura::flex>

            </x-aura::flex>

            <!-- Search, Filter Pills & Sort Toolbar -->
            <x-aura::card padding="sm" gap="4">

                <x-aura::flex direction="col" lg="row" align="stretch" lgAlign="center" justify="between" gap="4">

                    <!-- Category Filter Group -->
                    <x-aura::group>

                        <x-aura::button wire:click="$set('category', 'all')" variant="{{ $category === 'all' ? 'primary' : 'ghost' }}" size="sm">
                            All
                        </x-aura::button>

                        <x-aura::button wire:click="$set('category', 'audio')" variant="{{ $category === 'audio' ? 'primary' : 'ghost' }}" size="sm">
                            Audio
                        </x-aura::button>

                        <x-aura::button wire:click="$set('category', 'keyboards')" variant="{{ $category === 'keyboards' ? 'primary' : 'ghost' }}" size="sm">
                            Keyboards
                        </x-aura::button>

                        <x-aura::button wire:click="$set('category', 'lighting')" variant="{{ $category === 'lighting' ? 'primary' : 'ghost' }}" size="sm">
                            Lighting
                        </x-aura::button>

                        <x-aura::button wire:click="$set('category', 'accessories')" variant="{{ $category === 'accessories' ? 'primary' : 'ghost' }}" size="sm">
                            Accessories
                        </x-aura::button>

                    </x-aura::group>

                    <!-- Search Input & Quick Controls -->
                    <x-aura::flex align="center" gap="3" wrap="true">

                        <x-aura::input wire:model.live.debounce.250ms="search" placeholder="Search gear by name..." size="sm" icon="search" />

                        <x-aura::button wire:click="resetFilters" variant="secondary" size="sm" icon="rotate-ccw">
                            Reset
                        </x-aura::button>

                    </x-aura::flex>

                </x-aura::flex>

            </x-aura::card>

        </x-aura::flex>

    </div>

    <!-- Product Grid Section -->
    @if (count($this->products()) > 0)

        <x-aura::grid cols="1" md="2" lg="3" gap="6">

            @foreach ($this->products() as $product)

                <x-aura::card padding="md" gap="4">

                    <!-- Product Mockup Image Container -->
                    <x-aura::card padding="lg" divided="false" gap="4">

                        <x-aura::flex direction="col" align="center" justify="center" gap="4">

                            <x-aura::flex align="center" justify="between">

                                @if ($product['badge'])

                                    <x-aura::badge variant="{{ $product['badgeVariant'] }}" size="sm">
                                        {{ $product['badge'] }}
                                    </x-aura::badge>

                                @else

                                    <div></div>

                                @endif

                                <x-aura::icon-button wire:click="toggleWishlist({{ $product['id'] }})" variant="{{ in_array($product['id'], $wishlist) ? 'primary' : 'ghost' }}" size="sm" icon="heart" ariaLabel="Wishlist" />

                            </x-aura::flex>

                            <x-aura::icon :name="$product['icon']" size="xl" />

                            <x-aura::badge variant="subtle" size="xs">
                                In Stock
                            </x-aura::badge>

                        </x-aura::flex>

                    </x-aura::card>

                    <!-- Product Details -->
                    <x-aura::flex direction="col" gap="2">

                        <x-aura::flex align="center" justify="between">

                            <x-aura::kicker>
                                {{ $product['categoryLabel'] }}
                            </x-aura::kicker>

                            <x-aura::flex align="center" gap="1">

                                <x-aura::rating rating="{{ $product['rating'] }}" size="sm" readonly="true" />

                                <x-aura::text size="sm" variant="subtle">
                                    ({{ $product['reviews'] }})
                                </x-aura::text>

                            </x-aura::flex>

                        </x-aura::flex>

                        <x-aura::heading level="3" size="md">
                            {{ $product['name'] }}
                        </x-aura::heading>

                        <x-aura::text size="sm" variant="subtle">
                            {{ $product['description'] }}
                        </x-aura::text>

                    </x-aura::flex>

                    <x-slot:footer>

                        <x-aura::flex align="center" justify="between">

                            <x-aura::flex align="baseline" gap="2">

                                <x-aura::heading level="4" size="lg">
                                    ${{ $product['price'] }}.00
                                </x-aura::heading>

                                @if ($product['originalPrice'])

                                    <x-aura::text size="sm" variant="subtle">
                                        <del>${{ $product['originalPrice'] }}.00</del>
                                    </x-aura::text>

                                @endif

                            </x-aura::flex>

                            <x-aura::button wire:click="addToCart({{ $product['id'] }})" variant="primary" size="sm" icon="shopping-bag">
                                Add
                            </x-aura::button>

                        </x-aura::flex>

                    </x-slot:footer>

                </x-aura::card>

            @endforeach

        </x-aura::grid>

    @else

        <x-aura::empty-state icon="search" title="No hardware matches found" description="We could not find any products matching your current search and category criteria.">

            <x-aura::button wire:click="resetFilters" variant="primary" size="sm" icon="rotate-ccw">
                Reset
            </x-aura::button>

        </x-aura::empty-state>

    @endif

    <!-- Featured Bundle Spotlight Card -->
    <div id="bundle">

        <x-aura::card padding="xl" gap="8">

            <x-aura::grid cols="1" lg="2" gap="8">

                <!-- Bundle Copy & Itemization -->
                <x-aura::flex direction="col" gap="6">

                    <x-aura::flex align="center" gap="3">

                        <x-aura::kicker>
                            EXCLUSIVE BUNDLE OFFER
                        </x-aura::kicker>

                        <x-aura::badge variant="neutral" size="sm">
                            Save $140
                        </x-aura::badge>

                    </x-aura::flex>

                    <x-aura::heading level="2" size="xl">
                        The Master Acoustic and Desk Studio Bundle
                    </x-aura::heading>

                    <x-aura::subheading size="md">
                        Everything required for an uncompromising workspace setup. Includes our flagship wireless headphones, mechanical keyboard, precision lamp, and merino wool desk pad.
                    </x-aura::subheading>

                    <x-aura::card padding="sm" divided="false" gap="3">

                        <x-aura::flex direction="col" gap="3">

                            <x-aura::flex align="center" justify="between">

                                <x-aura::flex align="center" gap="3">

                                    <x-aura::badge variant="neutral" size="sm">
                                        1
                                    </x-aura::badge>

                                    <x-aura::text size="sm" weight="semibold">
                                        Aura Studio Wireless ANC Headphones
                                    </x-aura::text>

                                </x-aura::flex>

                                <x-aura::text size="sm" variant="subtle">
                                    $299 Value
                                </x-aura::text>

                            </x-aura::flex>

                            <x-aura::separator />

                            <x-aura::flex align="center" justify="between">

                                <x-aura::flex align="center" gap="3">

                                    <x-aura::badge variant="neutral" size="sm">
                                        2
                                    </x-aura::badge>

                                    <x-aura::text size="sm" weight="semibold">
                                        Compact Wireless Mechanical Keyboard
                                    </x-aura::text>

                                </x-aura::flex>

                                <x-aura::text size="sm" variant="subtle">
                                    $189 Value
                                </x-aura::text>

                            </x-aura::flex>

                            <x-aura::separator />

                            <x-aura::flex align="center" justify="between">

                                <x-aura::flex align="center" gap="3">

                                    <x-aura::badge variant="neutral" size="sm">
                                        3
                                    </x-aura::badge>

                                    <x-aura::text size="sm" weight="semibold">
                                        Minimalist Precision Aluminum Desk Lamp
                                    </x-aura::text>

                                </x-aura::flex>

                                <x-aura::text size="sm" variant="subtle">
                                    $129 Value
                                </x-aura::text>

                            </x-aura::flex>

                        </x-aura::flex>

                    </x-aura::card>

                    <x-aura::flex align="center" gap="4">

                        <x-aura::button wire:click="addBundle" variant="primary" size="lg" icon="sparkles">
                            Bundle
                        </x-aura::button>

                        <x-aura::text size="sm" variant="subtle">
                            Instant express shipping included
                        </x-aura::text>

                    </x-aura::flex>

                </x-aura::flex>

                <!-- Bundle Summary Stat Box -->
                <x-aura::flex direction="col" justify="between" gap="6">

                    <x-aura::card padding="lg" divided="false" gap="6">

                        <x-aura::flex align="center" justify="between">

                            <x-aura::kicker>
                                BUNDLE VALUATION
                            </x-aura::kicker>

                            <x-aura::badge variant="subtle" size="sm">
                                25 Percent Off
                            </x-aura::badge>

                        </x-aura::flex>

                        <x-aura::flex align="baseline" gap="3">

                            <x-aura::heading level="3" size="2xl">
                                $477.00
                            </x-aura::heading>

                            <x-aura::text size="lg" variant="subtle">
                                <del>$617.00</del>
                            </x-aura::text>

                        </x-aura::flex>

                        <x-aura::separator />

                        <x-aura::flex direction="col" gap="3">

                            <x-aura::flex align="center" gap="2">

                                <x-aura::icon name="check" size="sm" />

                                <x-aura::text size="sm">
                                    Complimentary premium custom braided cables
                                </x-aura::text>

                            </x-aura::flex>

                            <x-aura::flex align="center" gap="2">

                                <x-aura::icon name="check" size="sm" />

                                <x-aura::text size="sm">
                                    Extended five year comprehensive warranty
                                </x-aura::text>

                            </x-aura::flex>

                            <x-aura::flex align="center" gap="2">

                                <x-aura::icon name="check" size="sm" />

                                <x-aura::text size="sm">
                                    Priority access to future firmware enhancements
                                </x-aura::text>

                            </x-aura::flex>

                        </x-aura::flex>

                    </x-aura::card>

                    <x-aura::alert variant="primary">

                        <x-aura::text size="sm">
                            Limited production release. Only 40 bundle sets remaining for current quarter.
                        </x-aura::text>

                    </x-aura::alert>

                </x-aura::flex>

            </x-aura::grid>

        </x-aura::card>

    </div>

    <!-- Live Cart Drawer & Order Summary Section -->
    <div id="checkout">

        <x-aura::flex direction="col" gap="6">

            <x-aura::flex direction="col" gap="1">

                <x-aura::heading level="2" size="xl">
                    Live Order Summary and Checkout
                </x-aura::heading>

                <x-aura::subheading size="sm">
                    Review your items, apply promotional discounts, and complete express purchase
                </x-aura::subheading>

            </x-aura::flex>

            @if ($checkoutSuccess)

                <x-aura::card padding="xl" gap="6">

                    <x-aura::flex direction="col" align="center" justify="center" gap="4">

                        <x-aura::badge variant="neutral" size="lg">
                            ORDER CONFIRMED
                        </x-aura::badge>

                        <x-aura::heading level="3" size="xl">
                            Thank You for Your Order
                        </x-aura::heading>

                        <x-aura::text size="sm" variant="subtle">
                            Your order reference is <strong class="text-zinc-900 dark:text-white">{{ $orderNumber }}</strong>. We have dispatched a confirmation email with express tracking logistics.
                        </x-aura::text>

                        <x-aura::button wire:click="resetCheckout" variant="primary" size="md" icon="shopping-bag">
                            Continue
                        </x-aura::button>

                    </x-aura::flex>

                </x-aura::card>

            @else

                <x-aura::grid cols="1" lg="3" gap="6">

                    <!-- Active Cart Items (2 Columns) -->
                    <div class="lg:col-span-2">

                        <x-aura::card padding="md" gap="4">

                            <!-- Free Shipping Progress Tracker -->
                            <x-aura::card padding="sm" divided="false" gap="2">

                                <x-aura::flex align="center" justify="between">

                                    <x-aura::text size="sm" weight="semibold">
                                        @if ($this->subtotal >= 150)

                                            Unlocked Free Global Express Delivery

                                        @else

                                            Add ${{ 150 - $this->subtotal }}.00 more for Free Express Delivery

                                        @endif
                                    </x-aura::text>

                                    <x-aura::badge variant="neutral" size="xs">
                                        {{ min(100, round(($this->subtotal / 150) * 100)) }}%
                                    </x-aura::badge>

                                </x-aura::flex>

                                <x-aura::progress-bar percent="{{ min(100, round(($this->subtotal / 150) * 100)) }}" size="sm" />

                            </x-aura::card>

                            <!-- Items List -->
                            @if (count($cart) > 0)

                                <x-aura::flex direction="col" gap="4">

                                    @foreach ($cart as $item)

                                        <x-aura::card padding="sm" divided="false" gap="3">

                                            <x-aura::flex direction="col" sm="row" align="start" smAlign="center" justify="between" gap="4">

                                                <x-aura::flex align="center" gap="3">

                                                    <x-aura::card padding="xs" divided="false">

                                                        <x-aura::icon :name="$item['icon']" size="md" />

                                                    </x-aura::card>

                                                    <x-aura::flex direction="col" gap="none">

                                                        <x-aura::kicker>
                                                            {{ $item['category'] }}
                                                        </x-aura::kicker>

                                                        <x-aura::text size="sm" weight="bold">
                                                            {{ $item['name'] }}
                                                        </x-aura::text>

                                                        <x-aura::text size="sm" variant="subtle">
                                                            ${{ $item['price'] }}.00 each
                                                        </x-aura::text>

                                                    </x-aura::flex>

                                                </x-aura::flex>

                                                <x-aura::flex align="center" gap="3">

                                                    <!-- Quantity Stepper -->
                                                    <x-aura::group>

                                                        <x-aura::button wire:click="updateQuantity({{ $item['id'] }}, -1)" variant="secondary" size="xs">
                                                            -
                                                        </x-aura::button>

                                                        <x-aura::button variant="ghost" size="xs">
                                                            {{ $item['quantity'] }}
                                                        </x-aura::button>

                                                        <x-aura::button wire:click="updateQuantity({{ $item['id'] }}, 1)" variant="secondary" size="xs">
                                                            +
                                                        </x-aura::button>

                                                    </x-aura::group>

                                                    <x-aura::heading level="4" size="md">
                                                        ${{ $item['price'] * $item['quantity'] }}.00
                                                    </x-aura::heading>

                                                    <x-aura::button wire:click="removeFromCart({{ $item['id'] }})" variant="ghost" size="xs" icon="trash">
                                                        Remove
                                                    </x-aura::button>

                                                </x-aura::flex>

                                            </x-aura::flex>

                                        </x-aura::card>

                                    @endforeach

                                </x-aura::flex>

                            @else

                                <x-aura::empty-state icon="shopping-bag" title="Your shopping bag is empty" description="Browse our curated hardware catalogue above to discover premium studio tools.">

                                    <x-aura::button href="#catalog" variant="primary" size="sm">
                                        Shop
                                    </x-aura::button>

                                </x-aura::empty-state>

                            @endif

                        </x-aura::card>

                    </div>

                    <!-- Checkout Summary Card (1 Column) -->
                    <div>

                        <x-aura::card padding="md" gap="6">

                            <x-aura::heading level="3" size="lg">
                                Payment and Dispatch
                            </x-aura::heading>

                            <!-- Promo Code Input -->
                            <x-aura::flex direction="col" gap="2">

                                <x-aura::flex align="center" gap="2">

                                    <x-aura::input wire:model="promoCode" placeholder="Enter coupon code" size="sm" icon="tag" />

                                    <x-aura::button wire:click="applyPromo" variant="secondary" size="sm">
                                        Apply
                                    </x-aura::button>

                                </x-aura::flex>

                                @if ($promoMessage)

                                    <x-aura::text size="sm" variant="subtle">
                                        {{ $promoMessage }}
                                    </x-aura::text>

                                @endif

                            </x-aura::flex>

                            <x-aura::separator />

                            <!-- Totals Breakdown -->
                            <x-aura::flex direction="col" gap="3">

                                <x-aura::flex align="center" justify="between">

                                    <x-aura::text size="sm" variant="subtle">
                                        Subtotal
                                    </x-aura::text>

                                    <x-aura::text size="sm" weight="semibold">
                                        ${{ number_format($this->subtotal, 2) }}
                                    </x-aura::text>

                                </x-aura::flex>

                                @if ($discountPercent > 0)

                                    <x-aura::flex align="center" justify="between">

                                        <x-aura::text size="sm" variant="subtle">
                                            Discount ({{ $discountPercent }}%)
                                        </x-aura::text>

                                        <x-aura::text size="sm" weight="semibold">
                                            -${{ number_format($this->discountAmount, 2) }}
                                        </x-aura::text>

                                    </x-aura::flex>

                                @endif

                                <x-aura::flex align="center" justify="between">

                                    <x-aura::text size="sm" variant="subtle">
                                        Estimated Shipping
                                    </x-aura::text>

                                    <x-aura::text size="sm" weight="semibold">
                                        {{ $this->subtotal >= 150 ? 'Free' : '$15.00' }}
                                    </x-aura::text>

                                </x-aura::flex>

                                <x-aura::separator />

                                <x-aura::flex align="center" justify="between">

                                    <x-aura::heading level="4" size="lg">
                                        Total
                                    </x-aura::heading>

                                    <x-aura::heading level="4" size="xl">
                                        ${{ number_format($this->total, 2) }}
                                    </x-aura::heading>

                                </x-aura::flex>

                            </x-aura::flex>

                            <x-aura::button wire:click="checkout" variant="primary" size="lg" icon="arrow-right" iconTrailing="arrow-right">
                                Checkout
                            </x-aura::button>

                            <x-aura::flex align="center" justify="center" gap="2">

                                <x-aura::icon name="lock" size="xs" />

                                <x-aura::text size="sm" variant="subtle">
                                    256 Bit Encrypted Studio Checkout
                                </x-aura::text>

                            </x-aura::flex>

                        </x-aura::card>

                    </div>

                </x-aura::grid>

            @endif

        </x-aura::flex>

    </div>

    <!-- Verified Customer Reviews Section -->
    <x-aura::flex direction="col" gap="6">

        <x-aura::flex direction="col" gap="1">

            <x-aura::heading level="2" size="xl">
                Verified Creator Feedback
            </x-aura::heading>

            <x-aura::subheading size="sm">
                Authentic thoughts from audio engineers, software developers, and architects
            </x-aura::subheading>

        </x-aura::flex>

        <x-aura::grid cols="1" md="3" gap="6">

            <x-aura::card padding="md" gap="4">

                <x-aura::rating rating="5" size="sm" readonly="true" />

                <x-aura::text size="sm">
                    The active noise cancellation on the Aura studio headphones is extraordinary. The soundstage separation allows me to mix tracks for hours without fatigue.
                </x-aura::text>

                <x-slot:footer>

                    <x-aura::flex align="center" gap="3">

                        <x-aura::avatar initials="MR" size="sm" />

                        <x-aura::flex direction="col" gap="none">

                            <x-aura::text size="sm" weight="bold">
                                Marcus Reynolds
                            </x-aura::text>

                            <x-aura::text size="sm" variant="subtle">
                                Mastering Sound Engineer
                            </x-aura::text>

                        </x-aura::flex>

                    </x-aura::flex>

                </x-slot:footer>

            </x-aura::card>

            <x-aura::card padding="md" gap="4">

                <x-aura::rating rating="5" size="sm" readonly="true" />

                <x-aura::text size="sm">
                    The compact mechanical keyboard is the best typing experience I have had in a decade of software engineering. Build quality is peerless.
                </x-aura::text>

                <x-slot:footer>

                    <x-aura::flex align="center" gap="3">

                        <x-aura::avatar initials="EL" size="sm" />

                        <x-aura::flex direction="col" gap="none">

                            <x-aura::text size="sm" weight="bold">
                                Elena Lin
                            </x-aura::text>

                            <x-aura::text size="sm" variant="subtle">
                                Senior Platform Architect
                            </x-aura::text>

                        </x-aura::flex>

                    </x-aura::flex>

                </x-slot:footer>

            </x-aura::card>

            <x-aura::card padding="md" gap="4">

                <x-aura::rating rating="5" size="sm" readonly="true" />

                <x-aura::text size="sm">
                    The minimalist aluminum desk lamp provides crisp shadowless task illumination. Fits seamlessly into our design studio aesthetic.
                </x-aura::text>

                <x-slot:footer>

                    <x-aura::flex align="center" gap="3">

                        <x-aura::avatar initials="DK" size="sm" />

                        <x-aura::flex direction="col" gap="none">

                            <x-aura::text size="sm" weight="bold">
                                David Keller
                            </x-aura::text>

                            <x-aura::text size="sm" variant="subtle">
                                Industrial Product Designer
                            </x-aura::text>

                        </x-aura::flex>

                    </x-aura::flex>

                </x-slot:footer>

            </x-aura::card>

        </x-aura::grid>

    </x-aura::flex>

    <!-- Frequently Asked Questions (FAQ) Section -->
    <x-aura::flex direction="col" gap="6">

        <x-aura::flex direction="col" gap="1">

            <x-aura::heading level="2" size="xl">
                Frequently Asked Inquiries
            </x-aura::heading>

            <x-aura::subheading size="sm">
                Answers to common questions regarding logistics, guarantees, and hardware maintenance
            </x-aura::subheading>

        </x-aura::flex>

        <x-aura::card padding="md" gap="4">

            <x-aura::accordion>

                <x-aura::accordion.item title="What does the lifetime hardware warranty cover?">

                    <x-aura::text size="sm" variant="subtle">
                        Our lifetime warranty covers all internal electronic components, switch contacts, driver membranes, and CNC structural aluminum integrity against manufacturing defects.
                    </x-aura::text>

                </x-aura::accordion.item>

                <x-aura::accordion.item title="How long does international express transit take?">

                    <x-aura::text size="sm" variant="subtle">
                        Orders are dispatched within 24 hours from regional fulfillment centers in North America, Europe, and Asia Pacific. Transit typically takes between 2 to 4 business days.
                    </x-aura::text>

                </x-aura::accordion.item>

                <x-aura::accordion.item title="How does the 30 day studio trial work?">

                    <x-aura::text size="sm" variant="subtle">
                        You have 30 days from delivery to evaluate the hardware in your own studio environment. If unsatisfied for any reason, return the items in original packaging for a full refund.
                    </x-aura::text>

                </x-aura::accordion.item>

                <x-aura::accordion.item title="Are custom mechanical switches easily hot swappable?">

                    <x-aura::text size="sm" variant="subtle">
                        Yes, our mechanical keyboards feature universal five pin hot swappable sockets compatible with all standard Cherry MX, Gateron, and Kailh switch configurations without soldering.
                    </x-aura::text>

                </x-aura::accordion.item>

            </x-aura::accordion>

        </x-aura::card>

    </x-aura::flex>

    <!-- VIP Studio Newsletter Access Section -->
    <x-aura::card padding="xl" gap="6">

        <x-aura::flex direction="col" md="row" align="start" mdAlign="center" justify="between" gap="6">

            <x-aura::flex direction="col" gap="2">

                <x-aura::kicker>
                    INSIDER DISPATCH
                </x-aura::kicker>

                <x-aura::heading level="3" size="lg">
                    Join the Aura Hardware Collective
                </x-aura::heading>

                <x-aura::text size="sm" variant="subtle">
                    Receive early access to limited production batches, architectural guides, and engineering updates.
                </x-aura::text>

            </x-aura::flex>

            @if ($subscribed)

                <x-aura::badge variant="neutral" size="md">
                    Subscribed to Insider Dispatch
                </x-aura::badge>

            @else

                <x-aura::flex align="center" gap="3">

                    <x-aura::input wire:model="newsletterEmail" placeholder="Enter your work email" size="md" icon="mail" />

                    <x-aura::button wire:click="subscribeNewsletter" variant="primary" size="md">
                        Subscribe
                    </x-aura::button>

                </x-aura::flex>

            @endif

        </x-aura::flex>

    </x-aura::card>

</x-aura::flex>

<?php

use Livewire\Volt\Component;

new class extends Component {
    public string $search = '';
    public string $category = 'all';
    public bool $inStockOnly = false;
    public array $wishlist = [1, 3];

    public function categories(): array
    {
        return [
            ['id' => 'all', 'label' => 'All'],
            ['id' => 'audio', 'label' => 'Audio'],
            ['id' => 'keyboards', 'label' => 'Keyboards'],
            ['id' => 'lighting', 'label' => 'Lighting'],
            ['id' => 'accessories', 'label' => 'Accessories'],
        ];
    }

    public function allProducts(): array
    {
        return [
            1 => [
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
            2 => [
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
            3 => [
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
            4 => [
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
            5 => [
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
            6 => [
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
    }

    public function products(): array
    {
        return array_values(array_filter($this->allProducts(), function ($item) {
            $matchesCategory = $this->category === 'all' || $item['category'] === $this->category;
            $matchesSearch = empty($this->search) || str_contains(strtolower($item['name']), strtolower($this->search)) || str_contains(strtolower($item['description']), strtolower($this->search));
            $matchesStock = !$this->inStockOnly || $item['inStock'];

            return $matchesCategory && $matchesSearch && $matchesStock;
        }));
    }

    public function addToCart(int $productId): void
    {
        $this->dispatch('add-to-cart', productId: $productId);
    }

    public function toggleWishlist(int $productId): void
    {
        if (in_array($productId, $this->wishlist)) {
            $this->wishlist = array_values(array_diff($this->wishlist, [$productId]));
        } else {
            $this->wishlist[] = $productId;
        }
    }

    public function resetFilters(): void
    {
        $this->search = '';
        $this->category = 'all';
        $this->inStockOnly = false;
    }
};

?>

<x-aura::flex direction="col" gap="8">

    <!-- Catalog Header & Filter Navigation -->
    <div id="catalog">

        <x-aura::flex direction="col" gap="6">

            <!-- Section Title & Subheading -->
            <x-aura::flex direction="col" align="center" justify="center" gap="2">

                <x-aura::kicker>
                    CURATED STUDIO HARDWARE
                </x-aura::kicker>

                <x-aura::heading level="2" size="2xl" align="center">
                    Featured Studio Hardware
                </x-aura::heading>

                <x-aura::subheading size="md" align="center">
                    Acoustic monitors, tactile keyboards, and precision desk accessories engineered for professional creators
                </x-aura::subheading>

            </x-aura::flex>

            <!-- Category Filter Buttons & Search Input Grouped Together -->
            <x-aura::flex align="center" justify="center" gap="3" wrap="true">

                <!-- Category Segmented Buttons -->
                <x-aura::group>

                    @foreach ($this->categories() as $cat)

                        <x-aura::button wire:click="$set('category', '{{ $cat['id'] }}')" variant="{{ $category === $cat['id'] ? 'primary' : 'secondary' }}" size="sm">
                            {{ $cat['label'] }}
                        </x-aura::button>

                    @endforeach

                </x-aura::group>

                <!-- Search Input with Native width Prop -->
                <x-aura::input wire:model.live.debounce.250ms="search" placeholder="Search..." size="sm" width="md" icon="search" />

                @if ($search || $category !== 'all')

                    <x-aura::button wire:click="resetFilters" variant="ghost" size="sm" icon="rotate-ccw">
                        Reset
                    </x-aura::button>

                @endif

            </x-aura::flex>

        </x-aura::flex>

    </div>

    <!-- Product Grid Section -->
    @if (count($this->products()) > 0)

        <x-aura::grid cols="1" md="2" lg="3" gap="8">

            @foreach ($this->products() as $product)

                <x-aura::card padding="lg" gap="4">

                    <!-- Top Card Bar: Badge + Wishlist Action -->
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

                    <!-- Product Mockup Visual Stage -->
                    <x-aura::card padding="xl" divided="false">

                        <x-aura::center>

                            <x-aura::icon :name="$product['icon']" size="2xl" :container="true" />

                        </x-aura::center>

                    </x-aura::card>

                    <!-- Category & Review Rating Row -->
                    <x-aura::flex align="center" justify="between">

                        <x-aura::kicker>
                            {{ $product['categoryLabel'] }}
                        </x-aura::kicker>

                        <x-aura::flex align="center" gap="1">

                            <x-aura::rating rating="{{ $product['rating'] }}" size="xs" readonly="true" />

                            <x-aura::text size="sm" variant="subtle">
                                ({{ $product['reviews'] }})
                            </x-aura::text>

                        </x-aura::flex>

                    </x-aura::flex>

                    <!-- Product Title & Summary -->
                    <x-aura::flex direction="col" gap="1">

                        <x-aura::heading level="3" size="md">
                            {{ $product['name'] }}
                        </x-aura::heading>

                        <x-aura::text size="sm" variant="subtle">
                            {{ $product['description'] }}
                        </x-aura::text>

                    </x-aura::flex>

                    <!-- Footer: Valuation & Add to Cart -->
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

                            <x-aura::button wire:click="addToCart({{ $product['id'] }})" variant="primary" size="md" icon="shopping-bag">
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

</x-aura::flex>

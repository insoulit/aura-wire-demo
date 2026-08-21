<?php

use Livewire\Volt\Component;
use Livewire\Attributes\On;

new class extends Component {
    public bool $checkoutSuccess = false;
    public string $orderNumber = '';
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

    public function allProducts(): array
    {
        return [
            1 => ['id' => 1, 'name' => 'Aura Studio Wireless ANC Headphones', 'category' => 'Audio Acoustics', 'price' => 299, 'icon' => 'headphones'],
            2 => ['id' => 2, 'name' => 'Minimalist Precision Aluminum Desk Lamp', 'category' => 'Lighting', 'price' => 129, 'icon' => 'sun'],
            3 => ['id' => 3, 'name' => 'Compact Wireless Mechanical Keyboard', 'category' => 'Keyboards', 'price' => 189, 'icon' => 'keyboard'],
            4 => ['id' => 4, 'name' => 'Ergonomic Precision Wireless Mouse', 'category' => 'Accessories', 'price' => 99, 'icon' => 'mouse'],
            5 => ['id' => 5, 'name' => 'Modular Studio Microphone Arm', 'category' => 'Audio Acoustics', 'price' => 149, 'icon' => 'mic'],
            6 => ['id' => 6, 'name' => 'Merino Wool Dual Sided Desk Mat', 'category' => 'Accessories', 'price' => 49, 'icon' => 'layers'],
        ];
    }

    #[On('add-to-cart')]
    public function handleAddToCart(int $productId): void
    {
        $all = $this->allProducts();

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
            $this->notifyCartUpdated();
        }
    }

    #[On('add-bundle')]
    public function handleAddBundle(): void
    {
        $this->handleAddToCart(1);
        $this->handleAddToCart(2);
        $this->handleAddToCart(3);
    }

    public function updateQuantity(int $productId, int $delta): void
    {
        if (isset($this->cart[$productId])) {
            $this->cart[$productId]['quantity'] += $delta;
            if ($this->cart[$productId]['quantity'] <= 0) {
                unset($this->cart[$productId]);
            }
            $this->notifyCartUpdated();
        }
    }

    public function removeFromCart(int $productId): void
    {
        unset($this->cart[$productId]);
        $this->notifyCartUpdated();
    }

    public function checkout(): void
    {
        if (count($this->cart) > 0) {
            $this->orderNumber = 'AURA-ORD-' . rand(100000, 999999);
            $this->checkoutSuccess = true;
            $this->cart = [];
            $this->notifyCartUpdated();
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
        $this->notifyCartUpdated();
    }

    private function notifyCartUpdated(): void
    {
        $this->dispatch('cart-updated', count: $this->cartCount);
    }

    public function getTotalProperty(): float
    {
        $total = 0;
        foreach ($this->cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }
        return (float) $total;
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

<!-- 2-Column Split Live Order Summary and Checkout Section -->
<div id="checkout">

    <x-aura::flex direction="col" gap="8">

        <!-- Section Title & Subheading -->
        <x-aura::flex direction="col" align="center" justify="center" gap="2">

            <x-aura::kicker>
                EXPRESS CHECKOUT
            </x-aura::kicker>

            <x-aura::heading level="2" size="2xl" align="center">
                Live Order Summary and Checkout
            </x-aura::heading>

            <x-aura::subheading size="md" align="center">
                Review your items, dispatch details, and complete express purchase
            </x-aura::subheading>

        </x-aura::flex>

        @if ($checkoutSuccess)

            <x-aura::card padding="xl" gap="6">

                <x-aura::flex direction="col" align="center" justify="center" gap="4">

                    <x-aura::badge variant="neutral" size="sm">
                        ORDER CONFIRMED
                    </x-aura::badge>

                    <x-aura::heading level="3" size="lg" align="center">
                        Thank You for Your Order
                    </x-aura::heading>

                    <x-aura::flex align="center" gap="1.5">

                        <x-aura::text size="sm" variant="subtle">
                            Your order reference is
                        </x-aura::text>

                        <x-aura::tag variant="neutral" size="sm">
                            {{ $orderNumber }}
                        </x-aura::tag>

                    </x-aura::flex>

                    <x-aura::button wire:click="resetCheckout" variant="primary" size="md" icon="shopping-bag">
                        Continue
                    </x-aura::button>

                </x-aura::flex>

            </x-aura::card>

        @elseif (count($cart) > 0)

            <!-- 2-Column Split: Cart Items on Left, Order Summary Card on Right -->
            <x-aura::grid cols="1" lg="2" gap="8">

                <!-- Left: Selected Cart Items List -->
                <x-aura::flex direction="col" gap="4">

                    @foreach ($cart as $item)

                        <x-aura::card padding="md" divided="false">

                            <x-aura::flex align="center" justify="between" gap="4">

                                <x-aura::flex align="center" gap="4">

                                    <x-aura::icon :name="$item['icon']" size="lg" :container="true" />

                                    <x-aura::flex direction="col" gap="none">

                                        <x-aura::kicker>
                                            {{ $item['category'] }}
                                        </x-aura::kicker>

                                        <x-aura::heading level="3" size="md">
                                            {{ $item['name'] }}
                                        </x-aura::heading>

                                        <x-aura::text size="sm" variant="subtle">
                                            ${{ $item['price'] }}.00 each
                                        </x-aura::text>

                                    </x-aura::flex>

                                </x-aura::flex>

                                <x-aura::flex align="center" width="auto" gap="4">

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

                                    <x-aura::icon-button wire:click="removeFromCart({{ $item['id'] }})" variant="ghost" size="xs" icon="trash" ariaLabel="Remove" />

                                </x-aura::flex>

                            </x-aura::flex>

                        </x-aura::card>

                    @endforeach

                    <!-- Complimentary Dispatch Callout -->
                    <x-aura::card padding="sm" divided="false">

                        <x-aura::flex align="center" justify="between" gap="3">

                            <x-aura::flex align="center" gap="3">

                                <x-aura::icon name="truck" size="sm" />

                                <x-aura::text size="sm">
                                    Complimentary express carbon neutral dispatch on this order
                                </x-aura::text>

                            </x-aura::flex>

                            <x-aura::badge variant="neutral" size="xs">
                                Free
                            </x-aura::badge>

                        </x-aura::flex>

                    </x-aura::card>

                </x-aura::flex>

                <!-- Right: Dedicated Order Summary & Action Card -->
                <x-aura::card padding="lg" gap="6">

                    <x-aura::flex align="center" justify="between">

                        <x-aura::kicker>
                            ORDER VALUATION
                        </x-aura::kicker>

                        <x-aura::badge variant="neutral" size="sm">
                            Instant Checkout
                        </x-aura::badge>

                    </x-aura::flex>

                    <x-aura::flex direction="col" gap="3">

                        <x-aura::flex align="center" justify="between">

                            <x-aura::text size="sm" variant="subtle">
                                Subtotal
                            </x-aura::text>

                            <x-aura::text size="sm" weight="semibold">
                                ${{ number_format($this->total, 2) }}
                            </x-aura::text>

                        </x-aura::flex>

                        <x-aura::flex align="center" justify="between">

                            <x-aura::text size="sm" variant="subtle">
                                Express Dispatch
                            </x-aura::text>

                            <x-aura::badge variant="neutral" size="xs">
                                Free
                            </x-aura::badge>

                        </x-aura::flex>

                        <x-aura::flex align="center" justify="between">

                            <x-aura::text size="sm" variant="subtle">
                                Taxes & Surcharges
                            </x-aura::text>

                            <x-aura::text size="sm" variant="subtle">
                                Included
                            </x-aura::text>

                        </x-aura::flex>

                    </x-aura::flex>

                    <x-aura::separator />

                    <x-aura::flex align="center" justify="between">

                        <x-aura::heading level="3" size="md">
                            Total
                        </x-aura::heading>

                        <x-aura::heading level="3" size="2xl">
                            ${{ number_format($this->total, 2) }}
                        </x-aura::heading>

                    </x-aura::flex>

                    <x-aura::button wire:click="checkout" variant="primary" size="lg" block="true">
                        Checkout
                    </x-aura::button>

                    <x-aura::separator />

                    <!-- Security Trust Bullet Points -->
                    <x-aura::flex direction="col" gap="2.5">

                        <x-aura::flex align="center" gap="2.5">

                            <x-aura::icon name="check" size="sm" />

                            <x-aura::text size="sm" variant="subtle">
                                256 bit encrypted express checkout
                            </x-aura::text>

                        </x-aura::flex>

                        <x-aura::flex align="center" gap="2.5">

                            <x-aura::icon name="check" size="sm" />

                            <x-aura::text size="sm" variant="subtle">
                                30 day risk free studio trial
                            </x-aura::text>

                        </x-aura::flex>

                        <x-aura::flex align="center" gap="2.5">

                            <x-aura::icon name="check" size="sm" />

                            <x-aura::text size="sm" variant="subtle">
                                Complimentary tracked returns
                            </x-aura::text>

                        </x-aura::flex>

                    </x-aura::flex>

                </x-aura::card>

            </x-aura::grid>

        @else

            <x-aura::card padding="xl" gap="6">

                <x-aura::empty-state icon="shopping-bag" title="Your shopping bag is empty" description="Browse our curated hardware catalogue above to discover premium studio tools.">

                    <x-slot:actions>

                        <x-aura::button href="#catalog" variant="primary" size="sm" icon="shopping-bag">
                            Shop
                        </x-aura::button>

                    </x-slot:actions>

                </x-aura::empty-state>

            </x-aura::card>

        @endif

    </x-aura::flex>

</div>

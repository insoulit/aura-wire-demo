<?php

use Livewire\Volt\Component;
use Livewire\Attributes\On;

new class extends Component {
    public int $cartCount = 2;

    #[On('cart-updated')]
    public function updateCartCount(int $count): void
    {
        $this->cartCount = $count;
    }
};

?>

<!-- Top Navigation & Return Bar -->
<x-aura::flex direction="col" gap="4">

    <x-aura::flex align="center" justify="between" gap="4">

        <x-aura::flex align="center" width="auto" gap="3">

            <x-aura::button href="/guest#full-template" wire:navigate variant="secondary" size="sm" icon="arrow-left">
                Back
            </x-aura::button>

            <span class="text-zinc-300 dark:text-zinc-700">/</span>

            <x-aura::badge variant="neutral" size="sm">
                Storefront UI Kit
            </x-aura::badge>

        </x-aura::flex>

        <x-aura::flex align="center" width="auto" gap="4">

            <x-aura::badge variant="subtle" size="sm">
                Worldwide Express Shipping
            </x-aura::badge>

            <x-aura::link href="#checkout" size="sm" variant="subtle">
                Cart ({{ $cartCount }})
            </x-aura::link>

        </x-aura::flex>

    </x-aura::flex>

    <x-aura::separator />

</x-aura::flex>

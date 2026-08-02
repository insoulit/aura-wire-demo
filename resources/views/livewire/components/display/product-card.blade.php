<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Product Card Component — Aura Wire');

?>

<div class="w-full space-y-10">
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <x-aura::heading level="1" size="xl">Product Card Component</x-aura::heading>
        <x-aura::text variant="subtle" size="sm" class="mt-1"><x-aura::code>&lt;x-aura::product-card&gt;</x-aura::code></x-aura::text>
    </div>

    {{-- Product Card Demo --}}
    <x-aura::code title="E-Commerce Product Card">
        <x-slot:preview>
            <div class="w-full max-w-sm">
                <x-aura::product-card
                    title="Aura Pro Wireless Headphones"
                    subtitle="Audio & Electronics"
                    price="$299.00"
                    originalPrice="$349.00"
                    badge="Popular"
                    href="#"
                >
                    <x-aura::button variant="primary" size="sm">Add to Cart</x-aura::button>
                </x-aura::product-card>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::product-card
    title="Aura Pro Wireless Headphones"
    subtitle="Audio & Electronics"
    price="$299.00"
    originalPrice="$349.00"
    badge="Popular"
    href="#"
&gt;
    &lt;x-aura::button variant="primary" size="sm"&gt;Add to Cart&lt;/x-aura::button&gt;
&lt;/x-aura::product-card&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>

<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Product Card — Aura Wire');

?>

<div class="w-full max-w-3xl mx-auto space-y-6 flex flex-col items-center justify-center">
    <div class="space-y-2 text-center flex flex-col items-center">
        <x-aura::heading level="1" size="md">Product Card</x-aura::heading>
        <code class="inline-flex items-center px-3.5 py-1.5 mt-3 rounded-xl text-base sm:text-lg font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-sm">&lt;x-aura::card&gt;</code>
    </div>

    {{-- Product Card Demo --}}
    <x-aura::code class="w-full" title="E-Commerce Product Card">
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

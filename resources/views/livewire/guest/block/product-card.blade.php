<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.app')] 
#[Title('Product Card — Guest Portal | Aura Wire')] 
class extends Component {};

?>

<x-aura::stack gap="4" class="w-full max-w-4xl mx-auto py-6">

    <!-- Top Header -->
    <div class="px-1">

        <x-aura::flex align="center" justify="between" gap="4">

            <div>

                <x-aura::kicker>Design Blocks</x-aura::kicker>

                <x-aura::heading level="1" size="lg">Product Card</x-aura::heading>

            </div>

            <x-aura::button href="/guest#design-block" variant="subtle" size="sm" icon="arrow-left">
                Back
            </x-aura::button>

        </x-aura::flex>

    </div>

    <!-- 1. E Commerce Masterpiece Product Block -->
    <x-aura::code title="1. Premium E Commerce Product Card Block">

        <x-slot:preview>

            <div class="w-full max-w-md mx-auto">

                <x-aura::card>

                    <!-- Image Showcase Area -->
                    <div class="relative w-full h-56 bg-gradient-to-br from-zinc-900 via-zinc-800 to-zinc-950 flex items-center justify-center p-6 group">

                        <div class="absolute top-3 left-3">

                            <x-aura::badge variant="positive" size="sm">
                                Save $50 (15% OFF)
                            </x-aura::badge>

                        </div>

                        <div class="absolute top-3 right-3">

                            <x-aura::icon-button icon="heart" variant="ghost" size="sm" label="Save wishlist" />

                        </div>

                        <div class="w-28 h-28 rounded-2xl bg-zinc-800/80 border border-zinc-700/50 flex items-center justify-center text-zinc-300 shadow-2xl group-hover:scale-105 transition-transform duration-300">

                            <svg class="w-14 h-14 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>

                        </div>

                    </div>

                    <!-- Card Body Details -->
                    <div class="p-6 space-y-4">

                        <div class="space-y-1">

                            <div class="flex items-center justify-between">

                                <x-aura::kicker>Audio and Electronics</x-aura::kicker>

                                <div class="flex items-center gap-1 text-amber-400 text-xs font-bold">
                                    <span>★ 4.9</span>
                                    <span class="text-zinc-400 font-normal">(128)</span>
                                </div>

                            </div>

                            <x-aura::heading level="3" size="sm">Aura SoundPro Wireless ANC</x-aura::heading>

                            <x-aura::text size="sm" variant="subtle">
                                Active noise cancelling studio headphones with 40h playback and custom acoustic drivers.
                            </x-aura::text>

                        </div>

                        <!-- Options & Color Selector -->
                        <div class="flex items-center justify-between pt-1 border-t border-zinc-100 dark:border-zinc-800">

                            <div class="flex items-center gap-2">

                                <span class="text-xs font-semibold text-zinc-500">Colors:</span>

                                <div class="flex items-center gap-1.5">
                                    <span class="w-3.5 h-3.5 rounded-full bg-zinc-900 ring-2 ring-indigo-500 ring-offset-1 cursor-pointer"></span>
                                    <span class="w-3.5 h-3.5 rounded-full bg-zinc-300 hover:ring-2 hover:ring-zinc-400 cursor-pointer"></span>
                                    <span class="w-3.5 h-3.5 rounded-full bg-indigo-600 hover:ring-2 hover:ring-indigo-400 cursor-pointer"></span>
                                </div>

                            </div>

                            <x-aura::badge variant="neutral" size="sm">In Stock</x-aura::badge>

                        </div>

                        <!-- Price & Action CTA -->
                        <div class="pt-2 flex items-center justify-between">

                            <div>

                                <span class="text-2xl font-black font-mono tracking-tight text-zinc-900 dark:text-white">$299.00</span>

                                <span class="text-xs line-through text-zinc-400 font-mono ml-1.5">$349.00</span>

                            </div>

                            <x-aura::button variant="primary" size="md">
                                Add
                            </x-aura::button>

                        </div>

                    </div>

                </x-aura::card>

            </div>

        </x-slot:preview>

        <x-slot name="codeSlot">@verbatim<x-aura::card>
    <!-- Image Showcase Area -->
    <div class="relative w-full h-56 bg-zinc-900 flex items-center justify-center p-6">
        <x-aura::badge variant="positive" size="sm">Save $50 (15% OFF)</x-aura::badge>
    </div>

    <!-- Card Body Details -->
    <div class="p-6 space-y-4">
        <div class="space-y-1">
            <x-aura::kicker>Audio and Electronics</x-aura::kicker>
            <x-aura::heading level="3" size="sm">Aura SoundPro Wireless ANC</x-aura::heading>
            <x-aura::text size="sm" variant="subtle">Active noise cancelling studio headphones.</x-aura::text>
        </div>

        <!-- Price & Action CTA -->
        <div class="pt-2 flex items-center justify-between">
            <span class="text-2xl font-black font-mono">$299.00</span>
            <x-aura::button variant="primary" size="md">Add</x-aura::button>
        </div>
    </div>
</x-aura::card>@endverbatim</x-slot>

    </x-aura::code>

    <!-- 2. Dual Product Grid Showcase -->
    <x-aura::code title="2. Grid Comparison Layout">

        <x-slot:preview>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 w-full max-w-3xl">

                <x-aura::card>

                    <div class="flex items-center justify-between">

                        <x-aura::badge variant="neutral" size="sm">Workspace</x-aura::badge>

                        <x-aura::badge variant="positive" size="sm">Popular</x-aura::badge>

                    </div>

                    <div class="space-y-1">

                        <x-aura::heading level="4" size="xs">Minimalist Ergonomic Studio Desk</x-aura::heading>

                        <x-aura::text size="sm" variant="subtle">Solid oak desk with motorized height memory controls.</x-aura::text>

                    </div>

                    <div class="flex items-center justify-between pt-2 border-t border-zinc-100 dark:border-zinc-800">

                        <span class="text-xl font-bold font-mono text-zinc-900 dark:text-white">$649.00</span>

                        <x-aura::button variant="secondary" size="sm">
                            View
                        </x-aura::button>

                    </div>

                </x-aura::card>

                <x-aura::card>

                    <div class="flex items-center justify-between">

                        <x-aura::badge variant="neutral" size="sm">Office</x-aura::badge>

                        <x-aura::badge variant="warning" size="sm">Low Stock</x-aura::badge>

                    </div>

                    <div class="space-y-1">

                        <x-aura::heading level="4" size="xs">Adaptive Breathable Mesh Chair</x-aura::heading>

                        <x-aura::text size="sm" variant="subtle">3D lumbar support with 4D dynamic armrests.</x-aura::text>

                    </div>

                    <div class="flex items-center justify-between pt-2 border-t border-zinc-100 dark:border-zinc-800">

                        <span class="text-xl font-bold font-mono text-zinc-900 dark:text-white">$389.00</span>

                        <x-aura::button variant="primary" size="sm">
                            Buy
                        </x-aura::button>

                    </div>

                </x-aura::card>

            </div>

        </x-slot:preview>

        <x-slot name="codeSlot">@verbatim<div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
    <x-aura::card>
        <div class="flex items-center justify-between">
            <x-aura::badge variant="neutral" size="sm">Workspace</x-aura::badge>
            <x-aura::badge variant="positive" size="sm">Popular</x-aura::badge>
        </div>
        <x-aura::heading level="4" size="xs">Minimalist Ergonomic Studio Desk</x-aura::heading>
        <div class="flex items-center justify-between pt-2 border-t border-zinc-100 dark:border-zinc-800">
            <span class="text-xl font-bold font-mono">$649.00</span>
            <x-aura::button variant="secondary" size="sm">View</x-aura::button>
        </div>
    </x-aura::card>

    <x-aura::card>
        <div class="flex items-center justify-between">
            <x-aura::badge variant="neutral" size="sm">Office</x-aura::badge>
            <x-aura::badge variant="warning" size="sm">Low Stock</x-aura::badge>
        </div>
        <x-aura::heading level="4" size="xs">Adaptive Breathable Mesh Chair</x-aura::heading>
        <div class="flex items-center justify-between pt-2 border-t border-zinc-100 dark:border-zinc-800">
            <span class="text-xl font-bold font-mono">$389.00</span>
            <x-aura::button variant="primary" size="sm">Buy</x-aura::button>
        </div>
    </x-aura::card>
</div>@endverbatim</x-slot>

    </x-aura::code>

</x-aura::stack>

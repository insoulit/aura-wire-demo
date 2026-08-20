<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.app')] 
#[Title('Product Card — Guest Portal | Aura Wire')] 
class extends Component {};

?>

<x-aura::container size="4xl" gap="6" class="py-6">

    <!-- Top Header -->
    <x-aura::flex justify="between" gap="4">

        <x-aura::flex direction="col" gap="none">

            <x-aura::kicker>
                Design Blocks
            </x-aura::kicker>

            <x-aura::heading level="1" size="lg">
                Product Card
            </x-aura::heading>

        </x-aura::flex>

        <x-aura::flex justify="end" gap="2">

            <x-aura::button href="/guest#design-block" wire:navigate variant="secondary" size="sm" icon="arrow-left">
                Back
            </x-aura::button>

        </x-aura::flex>

    </x-aura::flex>

    <!-- 1. E Commerce Masterpiece Product Block -->
    <x-aura::code title="1. Premium E Commerce Product Card Block">

        <x-slot:preview>

            <div class="w-full max-w-md mx-auto">

                <x-aura::card padding="none">

                    <!-- Image Showcase Area -->
                    <div class="relative w-full h-56 bg-zinc-900 dark:bg-zinc-950 flex items-center justify-center p-6 group rounded-t-2xl">

                        <div class="absolute top-3 left-3">

                            <x-aura::badge variant="neutral" size="sm">
                                Save $50
                            </x-aura::badge>

                        </div>

                        <div class="absolute top-3 right-3">

                            <x-aura::icon-button icon="heart" variant="ghost" size="sm" label="Save wishlist" />

                        </div>

                        <div class="w-28 h-28 rounded-2xl bg-zinc-800/80 border border-zinc-700/50 flex items-center justify-center text-zinc-300 shadow-2xl group-hover:scale-105 transition-transform duration-300">

                            <x-aura::icon name="headphones" size="lg" />

                        </div>

                    </div>

                    <!-- Card Body Details -->
                    <x-aura::flex direction="col" gap="4" class="p-6">

                        <x-aura::flex direction="col" gap="1">

                            <x-aura::flex align="center" justify="between">

                                <x-aura::kicker>
                                    Audio and Electronics
                                </x-aura::kicker>

                                <x-aura::flex align="center" gap="1">

                                    <x-aura::text size="sm" weight="semibold">
                                        ★ 4.9
                                    </x-aura::text>

                                    <x-aura::text size="sm" variant="subtle">
                                        (128)
                                    </x-aura::text>

                                </x-aura::flex>

                            </x-aura::flex>

                            <x-aura::heading level="3" size="sm">
                                Aura SoundPro Wireless ANC
                            </x-aura::heading>

                            <x-aura::text size="sm" variant="subtle">
                                Active noise cancelling studio headphones with 40h playback and custom acoustic drivers.
                            </x-aura::text>

                        </x-aura::flex>

                        <!-- Options & Color Selector -->
                        <x-aura::flex align="center" justify="between" class="pt-2 border-t border-zinc-100 dark:border-zinc-800">

                            <x-aura::flex align="center" gap="2">

                                <x-aura::text size="sm" variant="subtle" weight="medium">
                                    Colors:
                                </x-aura::text>

                                <div class="flex items-center gap-1.5">
                                    <span class="w-3.5 h-3.5 rounded-full bg-zinc-900 ring-2 ring-zinc-500 ring-offset-1 cursor-pointer"></span>
                                    <span class="w-3.5 h-3.5 rounded-full bg-zinc-300 hover:ring-2 hover:ring-zinc-400 cursor-pointer"></span>
                                    <span class="w-3.5 h-3.5 rounded-full bg-zinc-600 hover:ring-2 hover:ring-zinc-400 cursor-pointer"></span>
                                </div>

                            </x-aura::flex>

                            <x-aura::badge variant="neutral" size="sm">
                                In Stock
                            </x-aura::badge>

                        </x-aura::flex>

                        <!-- Price & Action CTA -->
                        <x-aura::flex align="center" justify="between" class="pt-2">

                            <x-aura::flex align="baseline" gap="1.5">

                                <span class="text-2xl font-bold font-mono tracking-tight text-zinc-900 dark:text-white">$299.00</span>

                                <span class="text-sm line-through text-zinc-400 font-mono">$349.00</span>

                            </x-aura::flex>

                            <x-aura::button variant="primary" size="md">
                                Add
                            </x-aura::button>

                        </x-aura::flex>

                    </x-aura::flex>

                </x-aura::card>

            </div>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::card padding="none">
                    <div class="relative w-full h-56 bg-zinc-900 flex items-center justify-center p-6 rounded-t-2xl">
                        <x-aura::badge variant="neutral" size="sm">
                            Save $50
                        </x-aura::badge>
                    </div>

                    <x-aura::flex direction="col" gap="4" class="p-6">
                        <x-aura::kicker>
                            Audio and Electronics
                        </x-aura::kicker>
                        <x-aura::heading level="3" size="sm">
                            Aura SoundPro Wireless ANC
                        </x-aura::heading>

                        <x-aura::flex align="center" justify="between" class="pt-2">
                            <span class="text-2xl font-bold font-mono">$299.00</span>
                            <x-aura::button variant="primary" size="md">
                                Add
                            </x-aura::button>
                        </x-aura::flex>
                    </x-aura::flex>
                </x-aura::card>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Dual Product Grid Showcase -->
    <x-aura::code title="2. Grid Comparison Layout">

        <x-slot:preview>

            <x-aura::grid cols="1" sm="2" gap="6" class="w-full max-w-3xl">

                <x-aura::card gap="3">

                    <x-aura::flex align="center" justify="between">

                        <x-aura::badge variant="neutral" size="sm">
                            Workspace
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="sm">
                            Popular
                        </x-aura::badge>

                    </x-aura::flex>

                    <x-aura::flex direction="col" gap="1">

                        <x-aura::heading level="4" size="xs">
                            Minimalist Ergonomic Studio Desk
                        </x-aura::heading>

                        <x-aura::text size="sm" variant="subtle">
                            Solid oak desk with motorized height memory controls.
                        </x-aura::text>

                    </x-aura::flex>

                    <x-slot:footer>

                        <span class="text-xl font-bold font-mono text-zinc-900 dark:text-white">$649.00</span>

                        <x-aura::button variant="secondary" size="sm">
                            View
                        </x-aura::button>

                    </x-slot:footer>

                </x-aura::card>

                <x-aura::card gap="3">

                    <x-aura::flex align="center" justify="between">

                        <x-aura::badge variant="neutral" size="sm">
                            Office
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="sm">
                            Low Stock
                        </x-aura::badge>

                    </x-aura::flex>

                    <x-aura::flex direction="col" gap="1">

                        <x-aura::heading level="4" size="xs">
                            Adaptive Breathable Mesh Chair
                        </x-aura::heading>

                        <x-aura::text size="sm" variant="subtle">
                            3D lumbar support with 4D dynamic armrests.
                        </x-aura::text>

                    </x-aura::flex>

                    <x-slot:footer>

                        <span class="text-xl font-bold font-mono text-zinc-900 dark:text-white">$389.00</span>

                        <x-aura::button variant="primary" size="sm">
                            Buy
                        </x-aura::button>

                    </x-slot:footer>

                </x-aura::card>

            </x-aura::grid>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::grid cols="1" sm="2" gap="6">
                    <x-aura::card gap="3">
                        <x-aura::flex align="center" justify="between">
                            <x-aura::badge variant="neutral" size="sm">
                                Workspace
                            </x-aura::badge>
                            <x-aura::badge variant="subtle" size="sm">
                                Popular
                            </x-aura::badge>
                        </x-aura::flex>

                        <x-aura::heading level="4" size="xs">
                            Minimalist Ergonomic Studio Desk
                        </x-aura::heading>

                        <x-slot:footer>
                            <span class="text-xl font-bold font-mono">$649.00</span>
                            <x-aura::button variant="secondary" size="sm">
                                View
                            </x-aura::button>
                        </x-slot:footer>
                    </x-aura::card>
                </x-aura::grid>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>

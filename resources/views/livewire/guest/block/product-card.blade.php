<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.app')] 
#[Title('Product Card — Guest Portal | Aura Wire')] 
class extends Component {};

?>

<x-aura::container size="4xl" gap="6">

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

    <!-- 1. E Commerce Product Block -->
    <x-aura::code title="1. Premium E Commerce Product Card Block">

        <x-slot:preview>

            <x-aura::center>

                <x-aura::card size="md" padding="none">

                    <!-- Image Showcase Area -->
                    <x-aura::card padding="lg" divided="false">

                        <x-aura::flex align="center" justify="between">

                            <x-aura::badge variant="neutral" size="sm">
                                Save $50
                            </x-aura::badge>

                            <x-aura::icon-button icon="heart" variant="ghost" size="sm" label="Save wishlist" />

                        </x-aura::flex>

                        <x-aura::center>

                            <x-aura::icon name="headphones" size="2xl" container="true" />

                        </x-aura::center>

                    </x-aura::card>

                    <!-- Card Body Details -->
                    <x-aura::card padding="lg" gap="4" divided="false">

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

                        <x-aura::separator />

                        <!-- Price & Action CTA -->
                        <x-aura::flex align="center" justify="between">

                            <x-aura::flex align="baseline" gap="2">

                                <x-aura::heading level="4" size="xl">
                                    $299.00
                                </x-aura::heading>

                                <x-aura::text size="sm" variant="subtle">
                                    $349.00
                                </x-aura::text>

                            </x-aura::flex>

                            <x-aura::button variant="primary" size="md">
                                Add
                            </x-aura::button>

                        </x-aura::flex>

                    </x-aura::card>

                </x-aura::card>

            </x-aura::center>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::card size="md" padding="none">
                    <x-aura::card padding="lg" divided="false">
                        <x-aura::flex align="center" justify="between">
                            <x-aura::badge variant="neutral" size="sm">
                                Save $50
                            </x-aura::badge>
                            <x-aura::icon-button icon="heart" variant="ghost" size="sm" label="Save wishlist" />
                        </x-aura::flex>

                        <x-aura::center>
                            <x-aura::icon name="headphones" size="2xl" container="true" />
                        </x-aura::center>
                    </x-aura::card>

                    <x-aura::card padding="lg" gap="4" divided="false">
                        <x-aura::kicker>
                            Audio and Electronics
                        </x-aura::kicker>

                        <x-aura::heading level="3" size="sm">
                            Aura SoundPro Wireless ANC
                        </x-aura::heading>

                        <x-aura::separator />

                        <x-aura::flex align="center" justify="between">
                            <x-aura::heading level="4" size="xl">
                                $299.00
                            </x-aura::heading>

                            <x-aura::button variant="primary" size="md">
                                Add
                            </x-aura::button>
                        </x-aura::flex>
                    </x-aura::card>
                </x-aura::card>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Dual Product Grid Showcase -->
    <x-aura::code title="2. Grid Comparison Layout">

        <x-slot:preview>

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

                    <x-aura::flex direction="col" gap="1">

                        <x-aura::heading level="4" size="xs">
                            Minimalist Ergonomic Studio Desk
                        </x-aura::heading>

                        <x-aura::text size="sm" variant="subtle">
                            Solid oak desk with motorized height memory controls.
                        </x-aura::text>

                    </x-aura::flex>

                    <x-slot:footer>

                        <x-aura::heading level="4" size="lg">
                            $649.00
                        </x-aura::heading>

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

                        <x-aura::heading level="4" size="lg">
                            $389.00
                        </x-aura::heading>

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
                            <x-aura::heading level="4" size="lg">
                                $649.00
                            </x-aura::heading>
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

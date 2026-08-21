<?php

use Livewire\Volt\Component;

new class extends Component {
    public function pillars(): array
    {
        return [
            ['label' => 'Shipping', 'value' => 'Carbon Neutral', 'description' => 'Expedited worldwide dispatch from regional hubs', 'icon' => 'truck'],
            ['label' => 'Warranty', 'value' => 'Lifetime Care', 'description' => 'Full hardware coverage against manufacturing defects', 'icon' => 'shield-check'],
            ['label' => 'Trial', 'value' => '30 Day Test', 'description' => 'Risk free studio testing with complimentary returns', 'icon' => 'rotate-ccw'],
            ['label' => 'Support', 'value' => '24 7 Concierge', 'description' => 'Direct dedicated assistance from studio engineers', 'icon' => 'headphones'],
        ];
    }
};

?>

<x-aura::flex direction="col" gap="8">

    <!-- Store Hero Banner Section -->
    <x-aura::card padding="xl" gap="8">

        <x-aura::flex direction="col" align="center" gap="6">

            <x-aura::flex align="center" justify="center" gap="3">

                <x-aura::kicker>
                    PRECISION HARDWARE 2026
                </x-aura::kicker>

                <x-aura::badge variant="neutral" size="sm">
                    Flagship Studio Series
                </x-aura::badge>

            </x-aura::flex>

            <div class="text-center max-w-3xl">

                <x-aura::display size="xl">
                    Studio Grade Audio and Minimalist Workspace Gear
                </x-aura::display>

            </div>

            <div class="text-center max-w-2xl">

                <x-aura::subheading size="lg">
                    Engineered for creators, developers, and architects who demand high fidelity acoustics and timeless tactile craftsmanship.
                </x-aura::subheading>

            </div>

            <x-aura::flex align="center" justify="center" gap="4" wrap="true" class="pt-2">

                <x-aura::button href="#catalog" variant="primary" size="lg" icon="shopping-bag">
                    Shop
                </x-aura::button>

                <x-aura::button href="#bundle" variant="secondary" size="lg" icon="sparkles">
                    Lookbook
                </x-aura::button>

            </x-aura::flex>

        </x-aura::flex>

    </x-aura::card>

    <!-- Store Value Pillars & Guarantees -->
    <x-aura::grid cols="1" sm="2" lg="4" gap="6">

        @foreach ($this->pillars() as $pillar)

            <x-aura::stat :label="$pillar['label']" :value="$pillar['value']" :description="$pillar['description']" :icon="$pillar['icon']" />

        @endforeach

    </x-aura::grid>

</x-aura::flex>

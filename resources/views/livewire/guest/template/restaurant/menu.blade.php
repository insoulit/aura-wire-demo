<?php

use Livewire\Volt\Component;

new class extends Component {
    public string $activeTab = 'starters';

    public function menuItems(): array
    {
        return [
            'starters' => [
                [
                    'name' => 'Truffle Wild Mushroom Arancini',
                    'price' => '$18.50',
                    'description' => 'Crispy carnaroli risotto infused with black truffle emulsion and aged parmesan dip.',
                    'tag' => 'Vegetarian',
                    'badge' => 'Chef Favorite',
                ],
                [
                    'name' => 'Smoked Burrata and Heritage Tomatoes',
                    'price' => '$19.00',
                    'description' => 'Creamy Puglia burrata with heirloom tomatoes, cold pressed olive oil, and aged balsamic glaze.',
                    'tag' => 'Vegetarian',
                    'badge' => 'Seasonal',
                ],
                [
                    'name' => 'Yellowfin Tuna Carpaccio',
                    'price' => '$22.00',
                    'description' => 'Thinly sliced sashimi grade tuna with caper berries, lemon zest, and pink peppercorns.',
                    'tag' => 'Gluten Free',
                    'badge' => 'Signature',
                ],
            ],
            'mains' => [
                [
                    'name' => 'Wood Fired Prime Ribeye Steak',
                    'price' => '$44.00',
                    'description' => 'Dry aged Angus ribeye cooked over charcoal, served with roasted bone marrow butter and jus.',
                    'tag' => 'Gluten Free',
                    'badge' => 'Signature Dish',
                ],
                [
                    'name' => 'Pan Roasted Wild Sea Bass',
                    'price' => '$38.00',
                    'description' => 'Crisp skin Mediterranean sea bass with saffron fennel broth and crushed fingerling potatoes.',
                    'tag' => 'Gluten Free',
                    'badge' => 'Wild Catch',
                ],
                [
                    'name' => 'Handmade Black Truffle Gnocchi',
                    'price' => '$32.00',
                    'description' => 'Pillow soft potato gnocchi tossed in cultured butter, shaved black truffle, and reggiano.',
                    'tag' => 'Vegetarian',
                    'badge' => 'Handmade Pasta',
                ],
            ],
            'desserts' => [
                [
                    'name' => 'Dark Chocolate Lava Cake',
                    'price' => '$14.00',
                    'description' => 'Warm Valrhona chocolate fondant with Tahitian vanilla bean gelato and cocoa crumble.',
                    'tag' => 'Vegetarian',
                    'badge' => 'Classic',
                ],
                [
                    'name' => 'Sicilian Pistachio Tiramisu',
                    'price' => '$15.50',
                    'description' => 'Espresso soaked savoiardi layered with Bronte pistachio mascarpone and roasted nuts.',
                    'tag' => 'Vegetarian',
                    'badge' => 'House Special',
                ],
                [
                    'name' => 'Yuzu Lemon Tart',
                    'price' => '$13.50',
                    'description' => 'Crisp butter sable with tangy Japanese yuzu curd and lightly torched Italian meringue.',
                    'tag' => 'Vegetarian',
                    'badge' => 'Refreshing',
                ],
            ],
        ];
    }
};

?>

<!-- Digital Menu Section with Category Tabs -->
<div id="menu">

    <x-aura::flex direction="col" gap="8">

        <x-aura::flex direction="col" align="center" justify="center" gap="2">

            <x-aura::kicker>
                A LA CARTE SELECTIONS
            </x-aura::kicker>

            <x-aura::heading level="2" size="xl" align="center">
                Chef's Seasonal Menu
            </x-aura::heading>

            <x-aura::subheading size="md" align="center">
                Explore our daily prepared artisanal dishes crafted from regional produce
            </x-aura::subheading>

            <!-- Category Filter Tabs -->
            <x-aura::group>

                <x-aura::button variant="{{ $activeTab === 'starters' ? 'primary' : 'ghost' }}" size="sm" wire:click="$set('activeTab', 'starters')">
                    Starters
                </x-aura::button>

                <x-aura::button variant="{{ $activeTab === 'mains' ? 'primary' : 'ghost' }}" size="sm" wire:click="$set('activeTab', 'mains')">
                    Mains
                </x-aura::button>

                <x-aura::button variant="{{ $activeTab === 'desserts' ? 'primary' : 'ghost' }}" size="sm" wire:click="$set('activeTab', 'desserts')">
                    Desserts
                </x-aura::button>

            </x-aura::group>

        </x-aura::flex>

        <!-- Menu Item Cards Grid -->
        <x-aura::grid cols="1" md="3" gap="6">

            @foreach ($this->menuItems()[$activeTab] as $dish)

                <x-aura::card padding="lg" gap="4">

                    <x-aura::flex align="center" justify="between">

                        <x-aura::heading level="3" size="md">
                            {{ $dish['name'] }}
                        </x-aura::heading>

                        <x-aura::heading level="4" size="lg">
                            {{ $dish['price'] }}
                        </x-aura::heading>

                    </x-aura::flex>

                    <x-aura::text variant="subtle" size="sm">
                        {{ $dish['description'] }}
                    </x-aura::text>

                    <x-slot:footer>

                        <x-aura::badge variant="neutral" size="xs">
                            {{ $dish['tag'] }}
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="xs">
                            {{ $dish['badge'] }}
                        </x-aura::badge>

                    </x-slot:footer>

                </x-aura::card>

            @endforeach

        </x-aura::grid>

    </x-aura::flex>

</div>

<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.app')] 
#[Title('Restaurant and Bistro UI Kit — Guest Portal | Aura Wire')] 
class extends Component {
    public string $activeTab = 'starters';
    public string $guests = '2';
    public string $date = '2026-08-15';
    public string $time = '19:00';
};

?>

<x-aura::container size="5xl" gap="12" class="py-6">

    <!-- Top Bar -->
    <x-aura::flex align="center" justify="between" class="border-b border-zinc-200 dark:border-zinc-800 pb-4">

        <x-aura::flex align="center" gap="3">

            <x-aura::button href="/guest#full-template" wire:navigate variant="secondary" size="sm" icon="arrow-left">
                Back
            </x-aura::button>

            <span class="text-zinc-300 dark:text-zinc-700">/</span>

            <x-aura::badge variant="neutral" size="sm">
                Restaurant UI Kit
            </x-aura::badge>

        </x-aura::flex>

        <x-aura::badge variant="neutral" size="sm">
            Open Today 12:00 PM – 11:00 PM
        </x-aura::badge>

    </x-aura::flex>

    <!-- Dining Hero -->
    <div class="rounded-3xl bg-zinc-100/90 dark:bg-zinc-900 text-zinc-900 dark:text-white p-8 md:p-12 relative overflow-hidden border border-zinc-200/80 dark:border-zinc-800 shadow-xs">

        <x-aura::flex direction="col" gap="4" class="max-w-2xl">

            <x-aura::flex align="center" gap="2">

                <x-aura::kicker>
                    L'AURA BISTRO AND GRILL
                </x-aura::kicker>

                <x-aura::badge variant="neutral" size="sm">
                    Michelin Recommended
                </x-aura::badge>

            </x-aura::flex>

            <x-aura::display size="md">
                Artisanal Culinary Craft and Fine Dining
            </x-aura::display>

            <x-aura::subheading>
                Fresh seasonal ingredients, wood-fired specialties, and curated organic wine pairings served in a cozy modern atmosphere.
            </x-aura::subheading>

            <x-aura::flex align="center" gap="3" wrap="true" class="pt-2">

                <x-aura::button variant="primary" size="md" icon="arrow-right" iconPlacement="right">
                    Reserve
                </x-aura::button>

                <x-aura::button variant="secondary" size="md">
                    Menu
                </x-aura::button>

            </x-aura::flex>

        </x-aura::flex>

    </div>

    <!-- Digital Menu Section with Tabs -->
    <x-aura::flex direction="col" gap="6">

        <x-aura::flex direction="col" sm="row" align="start" smAlign="center" justify="between" gap="4" class="border-b border-zinc-200 dark:border-zinc-800 pb-4">

            <x-aura::flex direction="col" gap="none">

                <x-aura::heading level="2" size="lg">
                    Chef's Signature Menu
                </x-aura::heading>

                <x-aura::subheading>
                    Explore our daily prepared dishes and seasonal specialties
                </x-aura::subheading>

            </x-aura::flex>

            <!-- Menu Category Category Tabs -->
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

        <!-- Menu Item Cards -->
        <x-aura::grid cols="1" md="2" gap="6">

            <!-- Item 1 -->
            <x-aura::card gap="3">

                <x-aura::flex align="center" justify="between">

                    <x-aura::heading level="3" size="sm">
                        Truffle Wild Mushroom Arancini
                    </x-aura::heading>

                    <div class="font-bold text-zinc-900 dark:text-white font-mono">$18.50</div>

                </x-aura::flex>

                <x-aura::text variant="subtle" size="sm">
                    Crispy risotto balls infused with black truffle emulsion and aged parmesan dip.
                </x-aura::text>

                <x-slot:footer>

                    <x-aura::badge variant="neutral" size="sm">
                        Vegetarian
                    </x-aura::badge>

                    <x-aura::badge variant="subtle" size="sm">
                        Chef Favorite
                    </x-aura::badge>

                </x-slot:footer>

            </x-aura::card>

            <!-- Item 2 -->
            <x-aura::card gap="3">

                <x-aura::flex align="center" justify="between">

                    <x-aura::heading level="3" size="sm">
                        Wood Fired Ribeye Steak
                    </x-aura::heading>

                    <div class="font-bold text-zinc-900 dark:text-white font-mono">$42.00</div>

                </x-aura::flex>

                <x-aura::text variant="subtle" size="sm">
                    Prime dry aged Angus ribeye served with roasted bone marrow butter and herb jus.
                </x-aura::text>

                <x-slot:footer>

                    <x-aura::badge variant="neutral" size="sm">
                        Gluten Free
                    </x-aura::badge>

                    <x-aura::badge variant="subtle" size="sm">
                        Signature Dish
                    </x-aura::badge>

                </x-slot:footer>

            </x-aura::card>

        </x-aura::grid>

    </x-aura::flex>

    <!-- Table Reservation Form Card -->
    <x-aura::card title="Reserve Your Table Online" gap="6">

        <x-aura::grid cols="1" sm="3" gap="4">

            <x-aura::field label="Number of Guests">
                <x-aura::select wire:model="guests">
                    <option value="2">2 Guests (Table for Two)</option>
                    <option value="4">4 Guests (Family Table)</option>
                    <option value="6">6+ Guests (Private Booth)</option>
                </x-aura::select>
            </x-aura::field>

            <x-aura::field label="Date">
                <x-aura::input wire:model="date" type="date" />
            </x-aura::field>

            <x-aura::field label="Time Slot">
                <x-aura::select wire:model="time">
                    <option value="18:00">06:00 PM</option>
                    <option value="19:00">07:00 PM (Prime)</option>
                    <option value="20:30">08:30 PM</option>
                </x-aura::select>
            </x-aura::field>

        </x-aura::grid>

        <x-slot:footer>

            <x-aura::badge variant="neutral" size="sm">
                Instant Confirmation
            </x-aura::badge>

            <x-aura::button variant="primary" size="sm" icon="arrow-right" iconPlacement="right">
                Confirm
            </x-aura::button>

        </x-slot:footer>

    </x-aura::card>

</x-aura::container>

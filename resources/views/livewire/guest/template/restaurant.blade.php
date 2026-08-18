<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.app')] 
#[Title('Restaurant & Bistro UI Kit — Guest Portal | Aura Wire')] 
class extends Component {
    public string $activeTab = 'starters';
    public string $guests = '2';
    public string $date = '2026-08-15';
    public string $time = '19:00';
};

?>

<x-aura::flex direction="col" gap="12" class="w-full max-w-5xl py-6">
    <!-- Top Bar -->
    <div class="flex items-center justify-between border-b border-zinc-200 dark:border-zinc-800 pb-4">
        <div class="flex items-center gap-3">
            <x-aura::button href="/guest#full-template" variant="subtle" size="sm">
                <x-aura::icon name="arrow-left" size="xs" />
                <span>Back</span>
            </x-aura::button>
            <span class="text-zinc-300 dark:text-zinc-700">/</span>
            <x-aura::badge variant="neutral" size="sm">Restaurant UI Kit</x-aura::badge>
        </div>

        <x-aura::badge variant="neutral" size="sm">Open Today 12:00 PM – 11:00 PM</x-aura::badge>
    </div>

    <!-- Dining Hero -->
    <div class="rounded-3xl bg-zinc-100/90 dark:bg-zinc-900 text-zinc-900 dark:text-white p-8 md:p-12 relative overflow-hidden border border-zinc-200/80 dark:border-zinc-800 shadow-sm">
        <div class="max-w-2xl space-y-4">
            <div class="inline-flex items-center gap-2">
                <x-aura::kicker>🍽️ L'AURA BISTRO &amp; GRILL</x-aura::kicker>
                <x-aura::badge variant="neutral" size="sm">★ 4.9 Michelin Recommended</x-aura::badge>
            </div>
            <x-aura::heading level="1" size="display-md">
                Artisanal Culinary Craft &amp; Fine Dining
            </x-aura::heading>
            <x-aura::subheading>
                Fresh seasonal ingredients, wood-fired specialties, and curated organic wine pairings served in a cozy modern atmosphere.
            </x-aura::subheading>
            <div class="pt-2 flex flex-wrap gap-3">
                <x-aura::button variant="primary" size="md" icon-trailing="arrow-right">
                    Reserve a Table
                </x-aura::button>
                <x-aura::button variant="outline" size="md">
                    Explore Digital Menu
                </x-aura::button>
            </div>
        </div>
    </div>

    <!-- Digital Menu Section with Tabs -->
    <div class="space-y-6">
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 border-b border-zinc-200 dark:border-zinc-800 pb-4">
            <div>
                <x-aura::heading level="2" size="lg">Chef's Signature Menu</x-aura::heading>
                <x-aura::subheading>Explore our daily prepared dishes and seasonal specialties</x-aura::subheading>
            </div>

            <!-- Menu Category Category Tabs -->
            <div class="inline-flex items-center p-1 rounded-xl bg-zinc-100 dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-700">
                <x-aura::button variant="{{ $activeTab === 'starters' ? 'primary' : 'subtle' }}" size="sm" wire:click="$set('activeTab', 'starters')">Starters</x-aura::button>
                <x-aura::button variant="{{ $activeTab === 'mains' ? 'primary' : 'subtle' }}" size="sm" wire:click="$set('activeTab', 'mains')">Mains</x-aura::button>
                <x-aura::button variant="{{ $activeTab === 'desserts' ? 'primary' : 'subtle' }}" size="sm" wire:click="$set('activeTab', 'desserts')">Desserts</x-aura::button>
            </div>
        </div>

        <!-- Menu Item Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Item 1 -->
            <x-aura::card>
                <div class="space-y-3">
                    <div class="flex items-center justify-between">
                        <x-aura::heading level="3" size="sm">Truffle Wild Mushroom Arancini</x-aura::heading>
                        <div class="font-extrabold text-zinc-900 dark:text-white">$18.50</div>
                    </div>
                    <x-aura::text variant="subtle" size="xs">Crispy risotto balls infused with black truffle emulsion and aged parmesan dip.</x-aura::text>
                </div>
                <div class="pt-4 flex items-center gap-2 border-t border-zinc-100 dark:border-zinc-800">
                    <x-aura::badge variant="neutral" size="sm">Vegetarian</x-aura::badge>
                    <x-aura::badge variant="subtle" size="sm">Chef Favorite</x-aura::badge>
                </div>
            </x-aura::card>

            <!-- Item 2 -->
            <x-aura::card>
                <div class="space-y-3">
                    <div class="flex items-center justify-between">
                        <x-aura::heading level="3" size="sm">Wood-Fired Ribeye Steak</x-aura::heading>
                        <div class="font-extrabold text-zinc-900 dark:text-white">$42.00</div>
                    </div>
                    <x-aura::text variant="subtle" size="xs">Prime dry-aged Angus ribeye served with roasted bone marrow butter and herb jus.</x-aura::text>
                </div>
                <div class="pt-4 flex items-center gap-2 border-t border-zinc-100 dark:border-zinc-800">
                    <x-aura::badge variant="neutral" size="sm">Gluten-Free</x-aura::badge>
                    <x-aura::badge variant="subtle" size="sm">Signature Dish</x-aura::badge>
                </div>
            </x-aura::card>
        </div>
    </div>

    <!-- Table Reservation Form Card -->
    <x-aura::card title="Reserve Your Table Online">
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
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
        </div>

        <x-slot:footer>
            <div class="flex items-center justify-between w-full">
                <x-aura::badge variant="neutral" size="sm">Instant Confirmation</x-aura::badge>
                <x-aura::button variant="primary" size="sm" icon-trailing="arrow-right">Confirm Reservation</x-aura::button>
            </div>
        </x-slot:footer>
    </x-aura::card>
</x-aura::flex>

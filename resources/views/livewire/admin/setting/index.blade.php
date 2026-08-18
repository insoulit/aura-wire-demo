<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.admin')] 
#[Title('Admin Settings — Admin Panel | Aura Wire')] 
class extends Component {};

?>

<x-aura::flex direction="col" gap="4" class="w-full max-w-3xl mx-auto py-2">

    <!-- Top Header -->
    <div>

        <x-aura::flex align="center" justify="between" gap="4">

            <div>

                <x-aura::kicker>
                    Administration
                </x-aura::kicker>

                <x-aura::heading level="1" size="lg">
                    Admin Settings
                </x-aura::heading>

            </div>

            <div class="shrink-0">

                <x-aura::button variant="secondary" size="sm" href="/admin" wire:navigate icon="arrow-left">
                    Back
                </x-aura::button>

            </div>

        </x-aura::flex>

        <x-aura::subheading size="sm">
            Manage global portal identity, theme preferences, and automation controls.
        </x-aura::subheading>

    </div>

    <!-- 1. General Configuration -->
    <livewire:admin.setting.general />

    <!-- 2. System & Automation Controls -->
    <livewire:admin.setting.system />

</x-aura::flex>

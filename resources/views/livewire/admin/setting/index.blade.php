<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.admin')] 
#[Title('Admin Settings — Admin Panel | Aura Wire')] 
class extends Component {};

?>

<x-aura::container size="3xl" gap="4">

    <!-- Top Header -->
    <x-aura::flex direction="col" gap="2">

        <x-aura::flex align="end" justify="between" gap="4">

            <x-aura::flex direction="col" gap="none">

                <x-aura::kicker>
                    Administration
                </x-aura::kicker>

                <x-aura::heading level="1" size="lg">
                    Admin Settings
                </x-aura::heading>

            </x-aura::flex>

            <x-aura::button variant="secondary" size="sm" href="/admin" wire:navigate icon="arrow-left">
                Back
            </x-aura::button>

        </x-aura::flex>

        <x-aura::subheading size="sm">
            Manage global portal identity, theme preferences, and automation controls.
        </x-aura::subheading>

    </x-aura::flex>

    <!-- 1. General Configuration -->
    <livewire:admin.setting.general />

    <!-- 2. System & Automation Controls -->
    <livewire:admin.setting.system />

</x-aura::container>

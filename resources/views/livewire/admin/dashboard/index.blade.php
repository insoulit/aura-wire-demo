<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.admin')] 
#[Title('Admin Console — Aura Wire')] 
class extends Component {};

?>

<x-aura::container size="6xl" gap="4">

    <!-- Top Header -->
    <x-aura::flex justify="between" gap="4">

        <x-aura::flex direction="col" gap="none">

            <x-aura::kicker>
                Administration
            </x-aura::kicker>

            <x-aura::heading level="1" size="lg">
                Admin Dashboard
            </x-aura::heading>

        </x-aura::flex>

        <x-aura::flex justify="end" gap="2">

            <x-aura::button href="/admin/logs" wire:navigate variant="secondary" size="sm" icon="file-text">
                Logs
            </x-aura::button>

            <x-aura::button href="/admin/users" wire:navigate variant="primary" size="sm" icon="users">
                Users
            </x-aura::button>

        </x-aura::flex>

    </x-aura::flex>

    <!-- Metrics Cards Grid -->
    <livewire:admin.dashboard.stats />

    <!-- Demo Charts Section Grid -->
    <x-aura::grid cols="1" lg="2" gap="4">

        <livewire:admin.dashboard.traffic-chart />

        <livewire:admin.dashboard.volume-chart />

    </x-aura::grid>

</x-aura::container>

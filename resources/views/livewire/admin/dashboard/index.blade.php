<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.admin')] 
#[Title('Admin Console — Aura Wire')] 
class extends Component {};

?>

<x-aura::stack gap="4" class="w-full max-w-6xl mx-auto">

    <!-- Top Header -->
    <div class="px-1">
        <x-aura::flex align="center" justify="between" gap="4">
            <div>
                <x-aura::kicker>Administration</x-aura::kicker>
                <x-aura::heading level="1" size="lg">Admin Dashboard</x-aura::heading>
            </div>
            <x-aura::flex align="center" gap="2">
                <x-aura::button href="/admin/logs" wire:navigate variant="secondary" size="sm">
                    <x-aura::icon name="file-text" size="xs" />
                    <span>Logs</span>
                </x-aura::button>
                <x-aura::button href="/admin/users" wire:navigate variant="primary" size="sm">
                    <x-aura::icon name="users" size="xs" />
                    <span>Users</span>
                </x-aura::button>
            </x-aura::flex>
        </x-aura::flex>
    </div>

    <!-- Metrics Cards Grid -->
    <livewire:admin.dashboard.stats />

    <!-- Demo Charts Section Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
        <livewire:admin.dashboard.traffic-chart />
        <livewire:admin.dashboard.volume-chart />
    </div>

</x-aura::stack>

<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.admin')] 
#[Title('User Profile — Admin Panel | Aura Wire')] 
class extends Component {
    public array $user = [
        'id' => 1001,
        'name' => 'Alex Kovacs',
        'email' => 'alex.k@example.com',
        'initials' => 'AK',
        'role' => 'Administrator',
        'role_variant' => 'positive',
        'status' => 'Active',
        'status_variant' => 'neutral',
        'joined' => 'August 1, 2026',
        'last_login' => '12 minutes ago (192.168.1.45)',
        'two_factor' => 'Enabled',
    ];
};

?>

<div class="w-full max-w-3xl mx-auto space-y-3">

    <!-- Header with Back & Edit Buttons -->
    <div class="flex items-center justify-between gap-4 px-1">
        <div>
            <x-aura::kicker>User Profile</x-aura::kicker>
            <x-aura::heading level="1" size="lg">{{ $user['name'] }}</x-aura::heading>
        </div>
        <div class="flex items-center gap-2">
            <x-aura::button href="/admin/users" wire:navigate variant="secondary" size="sm">
                <x-aura::icon name="arrow-left" class="w-3.5 h-3.5 mr-1" />
                <span>Back</span>
            </x-aura::button>
        </div>
    </div>

    <!-- Simple & Clean User Profile Card -->
    <x-aura::card>
        <div class="flex items-center justify-between gap-4">
            <div class="flex items-center gap-4">
                <x-aura::avatar :initials="$user['initials']" size="md" />
                <div>
                    <div class="flex items-center gap-2">
                        <x-aura::heading level="2" size="xs" class="font-bold text-zinc-900 dark:text-white">{{ $user['name'] }}</x-aura::heading>
                        <x-aura::badge :variant="$user['role_variant']" size="sm">{{ $user['role'] }}</x-aura::badge>
                    </div>
                    <x-aura::text variant="subtle" size="xs">{{ $user['email'] }}</x-aura::text>
                </div>
            </div>
            <x-aura::badge :variant="$user['status_variant']" size="sm">{{ $user['status'] }}</x-aura::badge>
        </div>
    </x-aura::card>

   

    <!-- Account Details Table Card -->
    <x-aura::card title="Account Specification & Security">
        <div class="divide-y divide-zinc-100 dark:divide-zinc-800 text-xs">
            <div class="py-3 flex items-center justify-between">
                <span class="font-medium text-zinc-500 dark:text-zinc-400">Full Name</span>
                <span class="font-semibold text-zinc-900 dark:text-white">{{ $user['name'] }}</span>
            </div>
            <div class="py-3 flex items-center justify-between">
                <span class="font-medium text-zinc-500 dark:text-zinc-400">Primary Email Address</span>
                <span class="font-semibold text-zinc-900 dark:text-white">{{ $user['email'] }}</span>
            </div>
            <div class="py-3 flex items-center justify-between">
                <span class="font-medium text-zinc-500 dark:text-zinc-400">Access Level / Role</span>
                <x-aura::badge :variant="$user['role_variant']" size="sm">{{ $user['role'] }}</x-aura::badge>
            </div>
            <div class="py-3 flex items-center justify-between">
                <span class="font-medium text-zinc-500 dark:text-zinc-400">Account Status</span>
                <x-aura::badge :variant="$user['status_variant']" size="sm">{{ $user['status'] }}</x-aura::badge>
            </div>
            <div class="py-3 flex items-center justify-between">
                <span class="font-medium text-zinc-500 dark:text-zinc-400">Two-Factor Authentication</span>
                <span class="font-semibold text-emerald-600 dark:text-emerald-400">{{ $user['two_factor'] }} (TOTP Authenticator)</span>
            </div>
            <div class="py-3 flex items-center justify-between">
                <span class="font-medium text-zinc-500 dark:text-zinc-400">Account Created</span>
                <span class="text-zinc-700 dark:text-zinc-300">{{ $user['joined'] }}</span>
            </div>
        </div>

        <x-slot:footer>
            <div class="flex items-center justify-center w-full">
                <x-aura::button href="/admin/users/edit" wire:navigate variant="primary" size="sm">
                    <x-aura::icon name="edit" class="w-3.5 h-3.5 mr-1" />
                    <span>Edit</span>
                </x-aura::button>
            </div>
        </x-slot:footer>
    </x-aura::card>

</div>

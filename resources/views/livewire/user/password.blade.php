<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new #[Layout('layouts.user')] #[Title('Change Password & Security — User Panel | Aura Wire')] class extends Component {
    public string $currentPassword = '';
    public string $newPassword = '';
    public string $confirmPassword = '';
    public bool $twoFactor = true;
    public string $pinCode = '4829';
    public bool $saved = false;

    public function save()
    {
        $this->saved = true;
    }
};

?>

<div class="space-y-6 w-full max-w-2xl mx-auto py-4">
    {{-- Header with Back Button --}}
    <div class="flex items-center justify-between border-b border-zinc-200 dark:border-zinc-800 pb-4">
        <div>
            <x-aura::heading level="1" size="lg">Change Password &amp; Security</x-aura::heading>
            <x-aura::text variant="subtle" size="xs">Manage your account login credentials, 2FA authentication, and PIN code.</x-aura::text>
        </div>
        <x-aura::button variant="outline" size="sm" href="/dashboard">&larr; Back to Dashboard</x-aura::button>
    </div>

    @if($saved)
        <x-aura::banner variant="success" dismissible="true">
            Security settings updated successfully!
        </x-aura::banner>
    @endif

    {{-- Password Change Card --}}
    <x-aura::card>
        <x-slot name="header">
            <x-aura::heading level="2" size="md">Change Account Password</x-aura::heading>
        </x-slot>

        <form wire:submit="save" class="space-y-6">
            <x-aura::field label="Current Password" required>
                <x-aura::input wire:model="currentPassword" type="password" placeholder="••••••••" required />
            </x-aura::field>

            <x-aura::field label="New Password" hint="Minimum 8 characters with numbers and symbols." required>
                <x-aura::input wire:model="newPassword" type="password" placeholder="••••••••" required />
            </x-aura::field>

            <x-aura::field label="Confirm New Password" required>
                <x-aura::input wire:model="confirmPassword" type="password" placeholder="••••••••" required />
            </x-aura::field>

            <div class="pt-4 border-t border-zinc-100 dark:border-zinc-800 flex justify-end">
                <x-aura::button variant="primary" type="submit">Update Password</x-aura::button>
            </div>
        </form>
    </x-aura::card>

    {{-- 2FA & PIN Code Card --}}
    <x-aura::card>
        <x-slot name="header">
            <x-aura::heading level="2" size="md">Two-Factor &amp; PIN Code Security</x-aura::heading>
        </x-slot>

        <div class="space-y-6">
            <div class="flex items-center justify-between pb-6 border-b border-zinc-100 dark:border-zinc-800">
                <div>
                    <h3 class="text-sm font-bold text-zinc-900 dark:text-white">Two-Factor Authentication (2FA)</h3>
                    <p class="text-xs text-zinc-500">Require an authenticator code when logging in from new devices.</p>
                </div>
                <x-aura::switch wire:model.live="twoFactor" />
            </div>

            <x-aura::field label="4-Digit Security PIN" hint="Used for instant authentication on high-risk actions.">
                <x-aura::pin-code wire:model="pinCode" length="4" />
            </x-aura::field>
        </div>
    </x-aura::card>
</div>

<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new #[Layout('layouts.user')] #[Title('Change Email Address — User Panel | Aura Wire')] class extends Component {
    public string $currentEmail = 'alex.kovacs@example.com';
    public string $newEmail = '';
    public string $confirmPassword = '';
    public bool $sent = false;

    public function updateEmail()
    {
        $this->sent = true;
    }
};

?>

<div class="space-y-6 w-full max-w-2xl mx-auto py-4">
    {{-- Header with Back Button --}}
    <div class="flex items-center justify-between border-b border-zinc-200 dark:border-zinc-800 pb-4">
        <div>
            <x-aura::heading level="1" size="lg">Change Email Address</x-aura::heading>
            <x-aura::text variant="subtle" size="xs">Update your primary login and notification email address.</x-aura::text>
        </div>
        <x-aura::button variant="outline" size="sm" href="/dashboard">&larr; Back to Dashboard</x-aura::button>
    </div>

    @if($sent)
        <x-aura::banner variant="warning" dismissible="true">
            Verification link sent to <strong>{{ $newEmail ?: 'new email' }}</strong>. Please check your inbox.
        </x-aura::banner>
    @endif

    {{-- Email Change Card --}}
    <x-aura::card>
        <form wire:submit="updateEmail" class="space-y-6">
            <x-aura::field label="Current Email Address">
                <x-aura::input wire:model="currentEmail" disabled readonly />
            </x-aura::field>

            <x-aura::field label="New Email Address" hint="Must be a valid email address you have access to." required>
                <x-aura::input wire:model="newEmail" type="email" placeholder="alex.new@example.com" required />
            </x-aura::field>

            <x-aura::field label="Current Password Confirmation" hint="Required to confirm security changes." required>
                <x-aura::input wire:model="confirmPassword" type="password" placeholder="••••••••" required />
            </x-aura::field>

            <div class="pt-4 border-t border-zinc-100 dark:border-zinc-800 flex justify-end">
                <x-aura::button variant="primary" type="submit">Update Email &amp; Send Verification</x-aura::button>
            </div>
        </form>
    </x-aura::card>
</div>

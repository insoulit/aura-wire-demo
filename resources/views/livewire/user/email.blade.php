<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('layouts.user')] 
#[Title('Change Email Address — User Panel | Aura Wire')] 
class extends Component {
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

<div class="max-w-2xl mx-auto space-y-6 py-4">

    <!-- Top Header -->
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-4 space-y-1">
        <div class="flex items-center justify-between gap-4">
            <x-aura::heading level="1" size="lg">Change Email Address</x-aura::heading>
            <x-aura::button variant="secondary" size="sm" href="/dashboard" wire:navigate class="shrink-0">
                <x-aura::icon name="arrow-left" class="w-4 h-4 mr-1.5 shrink-0 inline-block text-zinc-900 dark:text-white" />
                <span>Back</span>
            </x-aura::button>
        </div>
        <x-aura::subheading size="xs" class="text-zinc-500 dark:text-zinc-400">
            Update your primary login and notification email address.
        </x-aura::subheading>
    </div>

    @if($sent)
        <x-aura::banner variant="success" dismissible="true">
            Verification email code sent to <strong>{{ $newEmail ?: 'new email' }}</strong>. Please check your inbox.
        </x-aura::banner>
    @endif

    <!-- Email Form Card -->
    <x-aura::card>
        <div class="flex items-center justify-between pb-6 mb-6 border-b border-zinc-100 dark:border-zinc-800">
            <div class="flex items-center gap-4">
                <x-aura::avatar initials="AK" size="lg" />
                <div>
                    <x-aura::heading level="2" size="sm">Alex Kovacs</x-aura::heading>
                    <x-aura::text variant="subtle" size="xs">alex.kovacs@example.com</x-aura::text>
                </div>
            </div>
            <x-aura::badge variant="neutral" size="sm">Primary Address</x-aura::badge>
        </div>

        <form wire:submit="updateEmail" class="space-y-5">
            <x-aura::field label="Current Email Address">
                <x-aura::input wire:model="currentEmail" disabled readonly class="opacity-75 cursor-not-allowed" />
            </x-aura::field>

            <x-aura::field label="New Email Address" hint="Must be a valid email address you have access to." required>
                <x-aura::input wire:model="newEmail" type="email" placeholder="alex.new@example.com" required />
            </x-aura::field>

            <x-aura::field label="Current Password Confirmation" hint="Required to confirm security changes." required>
                <x-aura::input wire:model="confirmPassword" type="password" placeholder="••••••••" required />
            </x-aura::field>

            <div class="pt-4 border-t border-zinc-100 dark:border-zinc-800 flex justify-end">
                <x-aura::button variant="primary" size="md" type="submit">Update Email &amp; Send Code</x-aura::button>
            </div>
        </form>
    </x-aura::card>

</div>

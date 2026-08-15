<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.app')] 
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
    <div class="space-y-1">
        <div class="flex items-center justify-between gap-4">
            <x-aura::heading level="1" size="lg">Change Email Address</x-aura::heading>
            <div class="shrink-0">
                <x-aura::button variant="secondary" size="sm" href="/user" wire:navigate>
                    <x-aura::icon name="arrow-left" size="xs" />
                    <span>Back</span>
                </x-aura::button>
            </div>
        </div>
        <x-aura::subheading size="xs">
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
        <div class="flex items-center justify-between mb-6">
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
                <x-aura::input wire:model="currentEmail" disabled readonly />
            </x-aura::field>

            <x-aura::field label="New Email Address" hint="Must be a valid email address you have access to." required>
                <x-aura::input wire:model="newEmail" type="email" placeholder="alex.new@example.com" required />
            </x-aura::field>

            <x-aura::field label="Current Password Confirmation" hint="Required to confirm security changes." required>
                <x-aura::input wire:model="confirmPassword" type="password" placeholder="••••••••" required />
            </x-aura::field>

            <div class="pt-2 flex justify-end">
                <x-aura::button variant="primary" size="md" type="submit">Update Email &amp; Send Code</x-aura::button>
            </div>
        </form>
    </x-aura::card>

</div>

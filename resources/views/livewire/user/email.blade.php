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

<x-aura::flex direction="col" gap="6" class="max-w-2xl mx-auto py-4">

    <!-- Top Header -->
    <x-aura::flex direction="col" gap="1">
        <x-aura::flex align="center" justify="between" gap="4">
            <x-aura::heading level="1" size="lg">Change Email Address</x-aura::heading>
            <div class="shrink-0">
                <x-aura::button variant="secondary" size="sm" href="/user" wire:navigate>
                    <x-aura::icon name="arrow-left" size="xs" />
                    <span>Back</span>
                </x-aura::button>
            </div>
        </x-aura::flex>
        <x-aura::subheading size="sm">
            Update your primary login and notification email address.
        </x-aura::subheading>
    </x-aura::flex>

    @if($sent)
        <x-aura::banner variant="dark" dismissible="true">
            Verification email code sent to <strong>{{ $newEmail ?: 'new email' }}</strong>. Please check your inbox.
        </x-aura::banner>
    @endif

    <!-- Email Form Card -->
    <x-aura::card>
        <x-aura::flex align="center" justify="between" class="mb-6">
            <x-aura::flex align="center" gap="4">
                <x-aura::avatar initials="AK" size="lg" />
                <div>
                    <x-aura::heading level="2" size="sm">Alex Kovacs</x-aura::heading>
                    <x-aura::text variant="subtle" size="sm">alex.kovacs@example.com</x-aura::text>
                </div>
            </x-aura::flex>
            <x-aura::badge variant="neutral" size="sm">Primary Address</x-aura::badge>
        </x-aura::flex>

        <form wire:submit="updateEmail">
            <x-aura::flex direction="col" gap="5">
                <x-aura::field label="Current Email Address">
                    <x-aura::input wire:model="currentEmail" size="sm" disabled readonly />
                </x-aura::field>

                <x-aura::field label="New Email Address" hint="Must be a valid email address you have access to." required>
                    <x-aura::input wire:model="newEmail" type="email" placeholder="alex.new@example.com" size="sm" required />
                </x-aura::field>

                <x-aura::field label="Current Password Confirmation" hint="Required to confirm security changes." required>
                    <x-aura::input wire:model="confirmPassword" type="password" placeholder="••••••••" size="sm" required />
                </x-aura::field>

                <x-aura::flex align="center" justify="end" class="pt-2">
                    <x-aura::button variant="primary" size="sm" type="submit">
                        <x-aura::icon name="mail" size="xs" />
                        <span>Update</span>
                    </x-aura::button>
                </x-aura::flex>
            </x-aura::flex>
        </form>
    </x-aura::card>

</x-aura::flex>

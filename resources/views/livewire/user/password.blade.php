<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.app')] 
#[Title('Change Password — User Panel | Aura Wire')] 
class extends Component {
    public string $currentPassword = '';
    public string $newPassword = '';
    public string $confirmPassword = '';
    public string $pinCode = '4829';
    public bool $saved = false;

    public function save()
    {
        $this->saved = true;
    }
};

?>

<div class="max-w-2xl mx-auto space-y-6 py-4">

    <!-- Top Header -->
    <div class="space-y-1">
        <div class="flex items-center justify-between gap-4">
            <x-aura::heading level="1" size="lg">Change Password &amp; PIN</x-aura::heading>
            <div class="shrink-0">
                <x-aura::button variant="secondary" size="sm" href="/dashboard" wire:navigate>
                    <x-aura::icon name="arrow-left" size="xs" />
                    <span>Back</span>
                </x-aura::button>
            </div>
        </div>
        <x-aura::subheading size="xs">
            Manage your account login password credentials and 4-digit security PIN code.
        </x-aura::subheading>
    </div>

    @if($saved)
        <x-aura::banner variant="success" dismissible="true">
            Password credentials and security PIN updated successfully!
        </x-aura::banner>
    @endif

    <!-- Password & PIN Form Card -->
    <x-aura::card>
        <div class="flex items-center justify-between mb-6">
            <div class="flex items-center gap-4">
                <x-aura::avatar initials="AK" size="lg" />
                <div>
                    <x-aura::heading level="2" size="sm">Alex Kovacs</x-aura::heading>
                    <x-aura::text variant="subtle" size="xs">alex.kovacs@example.com</x-aura::text>
                </div>
            </div>
            <x-aura::badge variant="positive" size="sm">2FA Security Active</x-aura::badge>
        </div>

        <form wire:submit="save" class="space-y-6">
            <div class="space-y-5">
                <x-aura::field label="Current Password" required>
                    <x-aura::input wire:model="currentPassword" type="password" placeholder="••••••••" required />
                </x-aura::field>

                <x-aura::field label="New Password" hint="Minimum 8 characters with numbers and symbols." required>
                    <x-aura::input wire:model="newPassword" type="password" placeholder="••••••••" required />
                </x-aura::field>

                <x-aura::field label="Confirm New Password" required>
                    <x-aura::input wire:model="confirmPassword" type="password" placeholder="••••••••" required />
                </x-aura::field>
            </div>

            <div class="pt-3 space-y-3">
                <x-aura::field label="4-Digit Security PIN" hint="Used for quick confirmation on sensitive workspace actions.">
                    <x-aura::pin-code wire:model="pinCode" length="4" />
                </x-aura::field>
            </div>

            <div class="pt-2 flex justify-end">
                <x-aura::button variant="primary" size="md" type="submit">Update Password &amp; PIN</x-aura::button>
            </div>
        </form>
    </x-aura::card>

</div>

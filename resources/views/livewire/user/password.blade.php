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
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-4 space-y-1">
        <div class="flex items-center justify-between gap-4">
            <x-aura::heading level="1" size="lg">Change Password &amp; PIN</x-aura::heading>
            <x-aura::button variant="secondary" size="sm" href="/dashboard" wire:navigate class="shrink-0">
                <x-aura::icon name="arrow-left" class="w-4 h-4 mr-1.5 shrink-0 inline-block text-zinc-900 dark:text-white" />
                <span>Back</span>
            </x-aura::button>
        </div>
        <x-aura::subheading size="xs" class="text-zinc-500 dark:text-zinc-400">
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
        <div class="flex items-center justify-between pb-6 mb-6 border-b border-zinc-100 dark:border-zinc-800">
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

            <div class="pt-5 border-t border-zinc-100 dark:border-zinc-800 space-y-3">
                <x-aura::field label="4-Digit Security PIN" hint="Used for quick confirmation on sensitive workspace actions.">
                    <x-aura::pin-code wire:model="pinCode" length="4" />
                </x-aura::field>
            </div>

            <div class="pt-4 border-t border-zinc-100 dark:border-zinc-800 flex justify-end">
                <x-aura::button variant="primary" size="md" type="submit">Update Password &amp; PIN</x-aura::button>
            </div>
        </form>
    </x-aura::card>

</div>

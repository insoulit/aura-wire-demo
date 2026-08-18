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

<x-aura::flex direction="col" gap="6" class="max-w-2xl mx-auto py-4">

    <!-- Top Header -->
    <x-aura::flex direction="col" gap="1">

        <x-aura::flex align="center" justify="between" gap="4">

            <x-aura::heading level="1" size="lg">
                Change Password &amp; PIN
            </x-aura::heading>

            <div class="shrink-0">

                <x-aura::button variant="secondary" size="sm" href="/user" wire:navigate icon="arrow-left">
                    Back
                </x-aura::button>

            </div>

        </x-aura::flex>

        <x-aura::subheading size="sm">
            Manage your account login password credentials and 4 digit security PIN code.
        </x-aura::subheading>

    </x-aura::flex>

    @if ($saved)

        <x-aura::banner variant="dark" dismissible="true">
            Password credentials and security PIN updated successfully!
        </x-aura::banner>

    @endif

    <!-- Password & PIN Form Card -->
    <x-aura::card>

        <x-aura::flex align="center" justify="between" class="mb-6">

            <x-aura::flex align="center" gap="4">

                <x-aura::avatar initials="AK" size="lg" />

                <div>

                    <x-aura::heading level="2" size="sm">
                        Alex Kovacs
                    </x-aura::heading>

                    <x-aura::text variant="subtle" size="sm">
                        alex.kovacs@example.com
                    </x-aura::text>

                </div>

            </x-aura::flex>

            <x-aura::badge variant="positive" size="sm">
                2FA Security Active
            </x-aura::badge>

        </x-aura::flex>

        <form wire:submit="save">

            <x-aura::flex direction="col" gap="6">

                <x-aura::flex direction="col" gap="5">

                    <x-aura::field label="Current Password" required>
                        <x-aura::input wire:model="currentPassword" type="password" placeholder="••••••••" size="sm" required />
                    </x-aura::field>

                    <x-aura::field label="New Password" hint="Minimum 8 characters with numbers and symbols." required>
                        <x-aura::input wire:model="newPassword" type="password" placeholder="••••••••" size="sm" required />
                    </x-aura::field>

                    <x-aura::field label="Confirm New Password" required>
                        <x-aura::input wire:model="confirmPassword" type="password" placeholder="••••••••" size="sm" required />
                    </x-aura::field>

                </x-aura::flex>

                <x-aura::flex direction="col" gap="3" class="pt-2">

                    <x-aura::field label="4 Digit Security PIN" hint="Used for quick confirmation on sensitive workspace actions.">
                        <x-aura::pin-code wire:model="pinCode" length="4" />
                    </x-aura::field>

                </x-aura::flex>

                <x-aura::flex align="center" justify="end" class="pt-2">

                    <x-aura::button variant="primary" size="sm" type="submit" icon="check">
                        Save
                    </x-aura::button>

                </x-aura::flex>

            </x-aura::flex>

        </form>

    </x-aura::card>

</x-aura::flex>

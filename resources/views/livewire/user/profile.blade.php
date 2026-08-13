<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.app')] 
#[Title('Profile Details — User Panel | Aura Wire')] 
class extends Component {
    public string $name = 'Alex Kovacs';
    public string $bio = 'Senior Product Designer & Frontend Developer.';
    public string $mobile = '+1 (555) 234-5678';
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
            <x-aura::heading level="1" size="lg">Profile Info</x-aura::heading>
            <div class="shrink-0">
                <x-aura::button variant="secondary" size="sm" href="/dashboard" wire:navigate>
                    <x-aura::icon name="arrow-left" size="xs" />
                    <span>Back</span>
                </x-aura::button>
            </div>
        </div>
        <x-aura::subheading size="xs">
            Manage your account display name, bio, and mobile contact number.
        </x-aura::subheading>
    </div>

    @if($saved)
        <x-aura::banner variant="success" dismissible="true">
            Profile details updated successfully!
        </x-aura::banner>
    @endif

    <!-- Profile Form Card (No Sidebar) -->
    <x-aura::card>
        <div class="flex items-center justify-between mb-6">
            <div class="flex items-center gap-4">
                <x-aura::avatar initials="AK" size="lg" />
                <div>
                    <x-aura::heading level="2" size="sm">Alex Kovacs</x-aura::heading>
                    <x-aura::text variant="subtle" size="xs">alex.kovacs@example.com</x-aura::text>
                </div>
            </div>
            <x-aura::button variant="secondary" size="xs" href="/user/avatar" wire:navigate>
                Change Photo
            </x-aura::button>
        </div>

        <form wire:submit="save" class="space-y-5">
            <x-aura::field label="Display Name" hint="Your full name visible across workspace modules." required>
                <x-aura::input wire:model="name" placeholder="Enter display name" required />
            </x-aura::field>

            <x-aura::field label="Short Bio" hint="Brief overview of your role or organization.">
                <x-aura::textarea wire:model="bio" rows="3" placeholder="Tell us about yourself..." />
            </x-aura::field>

            <x-aura::field label="Mobile Phone" hint="Optional mobile contact number for SMS alerts.">
                <x-aura::input wire:model="mobile" placeholder="+1 (555) 000-0000" />
            </x-aura::field>

            <div class="pt-2 flex justify-end">
                <x-aura::button variant="primary" size="md" type="submit">
                    Save Changes
                </x-aura::button>
            </div>
        </form>
    </x-aura::card>

</div>

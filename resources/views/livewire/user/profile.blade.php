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

<x-aura::stack gap="6" class="max-w-2xl mx-auto py-4">

    <!-- Top Header -->
    <x-aura::stack gap="1">
        <x-aura::flex align="center" justify="between" gap="4">
            <x-aura::heading level="1" size="lg">Profile Info</x-aura::heading>
            <div class="shrink-0">
                <x-aura::button variant="secondary" size="sm" href="/user" wire:navigate>
                    <x-aura::icon name="arrow-left" size="xs" />
                    <span>Back</span>
                </x-aura::button>
            </div>
        </x-aura::flex>
        <x-aura::subheading size="sm">
            Manage your account display name, bio, and mobile contact number.
        </x-aura::subheading>
    </x-aura::stack>

    @if($saved)
        <x-aura::banner variant="dark" dismissible="true">
            Profile details updated successfully!
        </x-aura::banner>
    @endif

    <!-- Profile Form Card -->
    <x-aura::card>
        <x-aura::flex align="center" justify="between" class="mb-6">
            <x-aura::flex align="center" gap="4">
                <x-aura::avatar initials="AK" size="lg" />
                <div>
                    <x-aura::heading level="2" size="sm">Alex Kovacs</x-aura::heading>
                    <x-aura::text variant="subtle" size="sm">alex.kovacs@example.com</x-aura::text>
                </div>
            </x-aura::flex>
            <x-aura::button variant="secondary" size="sm" href="/user/avatar" wire:navigate>
                <span>Avatar</span>
            </x-aura::button>
        </x-aura::flex>

        <form wire:submit="save">
            <x-aura::stack gap="5">
                <x-aura::field label="Display Name" hint="Your full name visible across workspace modules." required>
                    <x-aura::input wire:model="name" placeholder="Enter display name" size="sm" required />
                </x-aura::field>

                <x-aura::field label="Short Bio" hint="Brief overview of your role or organization.">
                    <x-aura::textarea wire:model="bio" rows="3" placeholder="Tell us about yourself..." />
                </x-aura::field>

                <x-aura::field label="Mobile Phone" hint="Optional mobile contact number for SMS alerts.">
                    <x-aura::input wire:model="mobile" placeholder="+1 (555) 000-0000" size="sm" />
                </x-aura::field>

                <x-aura::flex align="center" justify="end" class="pt-2">
                    <x-aura::button variant="primary" size="sm" type="submit">
                        <x-aura::icon name="check" size="xs" />
                        <span>Save</span>
                    </x-aura::button>
                </x-aura::flex>
            </x-aura::stack>
        </form>
    </x-aura::card>

</x-aura::stack>

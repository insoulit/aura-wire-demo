<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new #[Layout('layouts.user')] #[Title('Profile Details — User Panel | Aura Wire')] class extends Component {
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

<div class="space-y-6 w-full max-w-2xl mx-auto py-4">
    {{-- Header Section --}}
    <div class="flex items-center justify-between border-b border-zinc-200 dark:border-zinc-800 pb-4">
        <div>
            <x-aura::heading level="1" size="lg">Profile Info</x-aura::heading>
            <x-aura::subheading class="mt-1">
                Update your global account display name, bio, and mobile contact number.
            </x-aura::subheading>
        </div>
        <x-aura::button variant="outline" size="sm" href="/dashboard">&larr; Back to Dashboard</x-aura::button>
    </div>

    @if($saved)
        <x-aura::banner variant="success" dismissible="true">
            Profile details updated successfully!
        </x-aura::banner>
    @endif

    {{-- Form Card --}}
    <x-aura::card>
        <div class="flex items-center gap-4 pb-6 mb-6 border-b border-zinc-100 dark:border-zinc-800">
            <x-aura::avatar initials="AK" size="lg" status="online" />
            <div>
                <x-aura::heading level="2" size="md" class="uppercase tracking-tight">
                    ALEX KOVACS
                </x-aura::heading>
                <x-aura::text variant="subtle" size="xs" weight="medium">
                    alex.kovacs@example.com
                </x-aura::text>
            </div>
        </div>

        <form wire:submit="save" class="space-y-6">
            <x-aura::field label="Display Name" hint="Your full name visible across workspace modules." required>
                <x-aura::input wire:model="name" placeholder="Enter display name" required />
            </x-aura::field>

            <x-aura::field label="Short Bio" hint="Brief overview of your role or organization.">
                <x-aura::textarea wire:model="bio" rows="3" placeholder="Tell us about yourself..." />
            </x-aura::field>

            <x-aura::field label="Mobile Phone" hint="Optional mobile contact number for SMS alerts.">
                <x-aura::input wire:model="mobile" placeholder="+1 (555) 000-0000" />
            </x-aura::field>

            <div class="pt-4 border-t border-zinc-100 dark:border-zinc-800 flex justify-end">
                <x-aura::button variant="primary" type="submit">Save Profile Changes</x-aura::button>
            </div>
        </form>
    </x-aura::card>
</div>

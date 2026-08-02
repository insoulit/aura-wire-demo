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
    {{-- Header with Back Button --}}
    <div class="flex items-center justify-between border-b border-zinc-200 dark:border-zinc-800 pb-4">
        <div>
            <x-aura::heading level="1" size="lg">Profile Details</x-aura::heading>
            <x-aura::text variant="subtle" size="xs">Update your global account display name, bio, and mobile number.</x-aura::text>
        </div>
        <x-aura::button variant="outline" size="sm" href="/dashboard">&larr; Back to Dashboard</x-aura::button>
    </div>

    @if($saved)
        <x-aura::banner variant="success" dismissible="true">
            Profile details updated successfully!
        </x-aura::banner>
    @endif

    {{-- Profile Form Card --}}
    <x-aura::card>
        <form wire:submit="save" class="space-y-6">
            <x-aura::field label="Display Name" hint="Your full name visible across workspace modules." required>
                <x-aura::input wire:model="name" placeholder="Enter display name" required />
            </x-aura::field>

            <x-aura::field label="Short Bio" hint="Brief overview of your role or organization.">
                <textarea wire:model="bio" rows="3" class="w-full rounded-xl border border-zinc-300 dark:border-zinc-700 bg-white dark:bg-zinc-900 text-zinc-900 dark:text-white px-3.5 py-2.5 text-sm focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 transition-all"></textarea>
            </x-aura::field>

            <x-aura::field label="Mobile Phone" hint="Optional mobile contact number for SMS alerts.">
                <x-aura::input wire:model="mobile" placeholder="+1 (555) 000-0000" />
            </x-aura::field>

            <div class="pt-4 border-t border-zinc-100 dark:border-zinc-800 flex justify-end">
                <x-aura::button variant="primary" type="submit">Save Profile</x-aura::button>
            </div>
        </form>
    </x-aura::card>
</div>

<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new #[Layout('layouts.user')] #[Title('Profile Picture — User Panel | Aura Wire')] class extends Component {
    public bool $uploaded = false;

    public function save()
    {
        $this->uploaded = true;
    }
};

?>

<div class="space-y-6 w-full max-w-2xl mx-auto py-4">
    {{-- Header Section --}}
    <div class="flex items-center justify-between border-b border-zinc-200 dark:border-zinc-800 pb-4">
        <div>
            <x-aura::heading level="1" size="lg">Change Profile Picture</x-aura::heading>
            <x-aura::subheading class="mt-1">
                Upload and crop your profile avatar for team recognition.
            </x-aura::subheading>
        </div>
        <x-aura::button variant="outline" size="sm" href="/dashboard">&larr; Back to Dashboard</x-aura::button>
    </div>

    @if($uploaded)
        <x-aura::banner variant="success" dismissible="true">
            New profile avatar image saved successfully!
        </x-aura::banner>
    @endif

    {{-- Avatar Card --}}
    <x-aura::card>
        <form wire:submit="save" class="space-y-6">
            <div class="flex items-center gap-6 pb-6 border-b border-zinc-100 dark:border-zinc-800">
                <x-aura::avatar initials="AK" size="xl"  />
                <div class="space-y-1">
                    <x-aura::heading level="2" size="md">Current Avatar</x-aura::heading>
                    <x-aura::text variant="subtle" size="xs">
                        JPG, PNG, or GIF up to 5MB. Square 400x400px recommended.
                    </x-aura::text>
                </div>
            </div>

            <x-aura::file-upload label="Upload New Avatar Image" hint="Drag & drop your new profile picture file here." />

            <div class="pt-4 border-t border-zinc-100 dark:border-zinc-800 flex justify-between items-center">
                <x-aura::button variant="secondary" type="button" wire:click="$set('uploaded', false)">Remove Photo</x-aura::button>
                <x-aura::button variant="primary" type="submit">Update Avatar Image</x-aura::button>
            </div>
        </form>
    </x-aura::card>
</div>

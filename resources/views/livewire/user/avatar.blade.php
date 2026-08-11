<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.app')] 
#[Title('Profile Picture — User Panel | Aura Wire')] 
class extends Component {
    public bool $uploaded = false;

    public function save()
    {
        $this->uploaded = true;
    }
};

?>

<div class="max-w-2xl mx-auto space-y-6 py-4">

    <!-- Top Header -->
    <div class="space-y-1">
        <div class="flex items-center justify-between gap-4">
            <x-aura::heading level="1" size="lg">Change Profile Picture</x-aura::heading>
            <x-aura::button variant="secondary" size="sm" href="/dashboard" wire:navigate class="shrink-0">
                <x-aura::icon name="arrow-left" class="w-4 h-4 mr-1.5 shrink-0 inline-block text-zinc-900 dark:text-white" />
                <span>Back</span>
            </x-aura::button>
        </div>
        <x-aura::subheading size="xs" class="text-zinc-500 dark:text-zinc-400">
            Upload and crop your profile avatar for team recognition.
        </x-aura::subheading>
    </div>

    @if($uploaded)
        <x-aura::banner variant="success" dismissible="true">
            New profile avatar image saved successfully!
        </x-aura::banner>
    @endif

    <!-- Avatar Form Card -->
    <x-aura::card>
        <div class="flex items-center justify-between mb-6">
            <div class="flex items-center gap-4">
                <x-aura::avatar initials="AK" size="lg" />
                <div>
                    <x-aura::heading level="2" size="sm">Alex Kovacs</x-aura::heading>
                    <x-aura::text variant="subtle" size="xs">alex.kovacs@example.com</x-aura::text>
                </div>
            </div>
            <x-aura::text variant="subtle" size="xs" class="font-medium">JPG, PNG or GIF (max 5MB)</x-aura::text>
        </div>

        <form wire:submit="save" class="space-y-6">
            <x-aura::file-upload label="Upload New Avatar Image" hint="Drag & drop your new profile picture file here or click to browse." />

            <div class="pt-2 flex justify-between items-center">
                <x-aura::button variant="secondary" size="sm" type="button" wire:click="$set('uploaded', false)">Remove Current Photo</x-aura::button>
                <x-aura::button variant="primary" size="md" type="submit">Save Avatar Changes</x-aura::button>
            </div>
        </form>
    </x-aura::card>

</div>

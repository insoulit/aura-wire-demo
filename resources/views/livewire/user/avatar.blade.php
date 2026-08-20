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

<x-aura::container size="2xl" gap="6" class="py-4">

    <!-- Top Header -->
    <x-aura::flex direction="col" gap="2">

        <x-aura::flex justify="between" gap="4">

            <x-aura::flex direction="col" gap="none">

                <x-aura::kicker>
                    User Account
                </x-aura::kicker>

                <x-aura::heading level="1" size="lg">
                    Change Profile Picture
                </x-aura::heading>

            </x-aura::flex>

            <x-aura::flex justify="end" gap="2">

                <x-aura::button variant="secondary" size="sm" href="/user" wire:navigate icon="arrow-left">
                    Back
                </x-aura::button>

            </x-aura::flex>

        </x-aura::flex>

        <x-aura::subheading size="sm">
            Upload and crop your profile avatar for team recognition.
        </x-aura::subheading>

    </x-aura::flex>

    @if ($uploaded)

        <x-aura::banner variant="dark" dismissible="true">
            New profile avatar image saved successfully!
        </x-aura::banner>

    @endif

    <!-- Avatar Form Card -->
    <x-aura::card>

        <x-aura::flex align="center" justify="between" class="mb-6">

            <x-aura::flex align="center" gap="4">

                <x-aura::avatar initials="AK" size="lg" />

                <x-aura::flex direction="col" gap="none">

                    <x-aura::heading level="2" size="sm">
                        Alex Kovacs
                    </x-aura::heading>

                    <x-aura::text variant="subtle" size="sm">
                        alex.kovacs@example.com
                    </x-aura::text>

                </x-aura::flex>

            </x-aura::flex>

            <x-aura::text variant="subtle" size="sm">
                JPG, PNG or GIF (max 5MB)
            </x-aura::text>

        </x-aura::flex>

        <form wire:submit="save">

            <x-aura::flex direction="col" gap="6">

                <x-aura::file-upload label="Upload New Avatar Image" hint="Drag & drop your new profile picture file here or click to browse." />

                <x-aura::flex align="center" justify="between" class="pt-2">

                    <x-aura::button variant="secondary" size="sm" type="button" wire:click="$set('uploaded', false)">
                        Remove
                    </x-aura::button>

                    <x-aura::button variant="primary" size="sm" type="submit" icon="check">
                        Save
                    </x-aura::button>

                </x-aura::flex>

            </x-aura::flex>

        </form>

    </x-aura::card>

</x-aura::container>

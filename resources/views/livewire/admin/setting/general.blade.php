<?php

use Livewire\Volt\Component;

new class extends Component {
    public string $siteName = 'Aura Wire Portal';
    public string $adminEmail = 'admin@example.com';
    public string $darkMode = 'class';
    public string $borderRadius = 'md';
    public bool $saved = false;

    public function save(): void
    {
        $this->validate([
            'siteName' => 'required|min:2|max:100',
            'adminEmail' => 'required|email',
            'darkMode' => 'required',
            'borderRadius' => 'required',
        ]);

        $this->saved = true;
    }
};

?>

<x-aura::card title="General Configuration" description="Manage portal title, administrator email, and visual theme tokens.">

    <form wire:submit.prevent="save">

        <x-aura::flex direction="col" gap="5" class="pt-2">

            @if ($saved)

                <x-aura::banner variant="dark" dismissible="true">
                    General settings updated successfully!
                </x-aura::banner>

            @endif

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">

                <x-aura::field label="Application Title" required hint="Portal title displayed in headers and browser tabs." error="{{ $errors->first('siteName') }}">
                    <x-aura::input wire:model="siteName" placeholder="Aura Wire Portal" size="sm" />
                </x-aura::field>

                <x-aura::field label="Admin Notification Email" required hint="Primary address for system alerts and notices." error="{{ $errors->first('adminEmail') }}">
                    <x-aura::input wire:model="adminEmail" type="email" placeholder="admin@example.com" size="sm" />
                </x-aura::field>

            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">

                <x-aura::field label="Dark Mode Strategy" required hint="Theme detection strategy across components." error="{{ $errors->first('darkMode') }}">
                    <x-aura::select wire:model="darkMode" size="sm">
                        <option value="class">Class (HTML dark class)</option>
                        <option value="media">Media (System preference)</option>
                    </x-aura::select>
                </x-aura::field>

                <x-aura::field label="Default Border Radius" required hint="Global corner rounding applied to components." error="{{ $errors->first('borderRadius') }}">
                    <x-aura::select wire:model="borderRadius" size="sm">
                        <option value="sm">Small (sm)</option>
                        <option value="md">Medium (md)</option>
                        <option value="lg">Large (lg)</option>
                        <option value="full">Full Pill</option>
                    </x-aura::select>
                </x-aura::field>

            </div>

        </x-aura::flex>

        <x-slot:footer>

            <x-aura::flex align="center" justify="end" class="w-full">

                <x-aura::button type="submit" variant="primary" size="sm" icon="save">
                    Save
                </x-aura::button>

            </x-aura::flex>

        </x-slot:footer>

    </form>

</x-aura::card>

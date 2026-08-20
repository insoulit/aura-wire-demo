<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.admin')] 
#[Title('Create User — Admin Panel | Aura Wire')] 
class extends Component {
    public string $name = '';
    public string $email = '';
    public string $role = 'member';
    public string $status = 'Active';
    public string $password = '';
    public string $password_confirmation = '';
    public bool $saved = false;

    public function save(): void
    {
        $this->validate([
            'name' => 'required|min:2',
            'email' => 'required|email',
            'role' => 'required|in:admin,dev,member',
            'status' => 'required',
            'password' => 'required|min:8',
        ]);

        $this->saved = true;
        $this->reset(['name', 'email', 'password', 'password_confirmation']);
        $this->role = 'member';
        $this->status = 'Active';
    }

    public function resetForm(): void
    {
        $this->reset(['name', 'email', 'password', 'password_confirmation']);
        $this->role = 'member';
        $this->status = 'Active';
        $this->saved = false;
    }
};

?>

<x-aura::container size="3xl" gap="3">

    <!-- Header with Back Button -->
    <x-aura::flex justify="between" gap="4">

        <x-aura::flex direction="col" gap="none">

            <x-aura::kicker>
                Administration
            </x-aura::kicker>

            <x-aura::heading level="1" size="lg">
                Create User
            </x-aura::heading>

        </x-aura::flex>

        <x-aura::flex justify="end" gap="2">

            <x-aura::button href="/admin/users" wire:navigate variant="secondary" size="sm" icon="arrow-left">
                Back
            </x-aura::button>

        </x-aura::flex>

    </x-aura::flex>

    @if ($saved)

        <div class="fixed bottom-5 right-5 z-50">
            <x-aura::toast variant="neutral" title="User Created" description="User account created successfully." />
        </div>

    @endif

    <!-- Create User Card Form -->
    <form wire:submit.prevent="save">

        <x-aura::card title="Account Details" description="Fill out the profile and security details to register a new user account.">

            <x-aura::flex direction="col" gap="5" class="pt-2">

                <!-- Full Name & Email -->
                <x-aura::grid cols="1" sm="2" gap="4">

                    <x-aura::field label="Full Name" required error="{{ $errors->first('name') }}">
                        <x-aura::input wire:model="name" placeholder="e.g. Marcus Vance" size="sm" />
                    </x-aura::field>

                    <x-aura::field label="Email Address" required error="{{ $errors->first('email') }}">
                        <x-aura::input wire:model="email" type="email" placeholder="e.g. marcus@company.com" size="sm" />
                    </x-aura::field>

                </x-aura::grid>

                <!-- Role & Status -->
                <x-aura::grid cols="1" sm="2" gap="4">

                    <x-aura::field label="Account Role" required error="{{ $errors->first('role') }}">
                        <x-aura::select wire:model="role" size="sm">
                            <option value="member">Member</option>
                            <option value="dev">Developer</option>
                            <option value="admin">Administrator</option>
                        </x-aura::select>
                    </x-aura::field>

                    <x-aura::field label="Initial Status" required error="{{ $errors->first('status') }}">
                        <x-aura::select wire:model="status" size="sm">
                            <option value="Active">Active</option>
                            <option value="Pending">Pending Verification</option>
                            <option value="Inactive">Inactive</option>
                        </x-aura::select>
                    </x-aura::field>

                </x-aura::grid>

                <x-aura::separator />

                <!-- Security Credentials -->
                <x-aura::grid cols="1" sm="2" gap="4">

                    <x-aura::field label="Password" required error="{{ $errors->first('password') }}">
                        <x-aura::input wire:model="password" type="password" placeholder="Minimum 8 characters" size="sm" />
                    </x-aura::field>

                    <x-aura::field label="Confirm Password" required>
                        <x-aura::input wire:model="password_confirmation" type="password" placeholder="Re-enter password" size="sm" />
                    </x-aura::field>

                </x-aura::grid>

            </x-aura::flex>

            <x-slot:footer>

                <x-aura::flex align="center" justify="between" class="w-full">

                    <x-aura::button href="/admin/users" wire:navigate variant="secondary" size="sm">
                        Cancel
                    </x-aura::button>

                    <x-aura::button type="submit" variant="primary" size="sm" icon="plus">
                        Create
                    </x-aura::button>

                </x-aura::flex>

            </x-slot:footer>

        </x-aura::card>

    </form>

</x-aura::container>

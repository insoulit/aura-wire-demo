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

<div class="w-full max-w-3xl mx-auto space-y-3">

    <!-- Header with Back Button -->
    <div class="flex items-center justify-between gap-4 px-1">
        <div>
            <x-aura::kicker>Administration</x-aura::kicker>
            <x-aura::heading level="1" size="lg">Create New User</x-aura::heading>
        </div>
        <div class="flex items-center gap-2">
            <x-aura::button href="/admin/users" wire:navigate variant="secondary" size="sm">
                <x-aura::icon name="arrow-left"  size="xs" />
                <span>Back</span>
            </x-aura::button>
        </div>
    </div>

    @if ($saved)
        <div class="fixed bottom-5 right-5 z-50">
            <x-aura::toast variant="success" title="User Created" description="User account created successfully." />
        </div>
    @endif

    <!-- Create User Card Form -->
    <form wire:submit.prevent="save">
        <x-aura::card title="Account Details" description="Fill out the profile and security details to register a new user account.">
            <div class="space-y-5 pt-2">

                <!-- Full Name & Email -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <x-aura::field label="Full Name" required error="{{ $errors->first('name') }}">
                        <x-aura::input wire:model="name" placeholder="e.g. Marcus Vance" size="sm" />
                    </x-aura::field>

                    <x-aura::field label="Email Address" required error="{{ $errors->first('email') }}">
                        <x-aura::input wire:model="email" type="email" placeholder="e.g. marcus@company.com" size="sm" />
                    </x-aura::field>
                </div>

                <!-- Role & Status -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
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
                </div>

                <x-aura::separator />

                <!-- Security Credentials -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <x-aura::field label="Password" required error="{{ $errors->first('password') }}">
                        <x-aura::input wire:model="password" type="password" placeholder="Minimum 8 characters" size="sm" />
                    </x-aura::field>

                    <x-aura::field label="Confirm Password" required>
                        <x-aura::input wire:model="password_confirmation" type="password" placeholder="Re-enter password" size="sm" />
                    </x-aura::field>
                </div>

            </div>

            <x-slot:footer>
                <div class="flex items-center justify-between w-full">
                    <x-aura::button href="/admin/users" wire:navigate variant="secondary" size="sm">
                        Cancel
                    </x-aura::button>

                    <x-aura::button type="submit" variant="primary" size="sm">
                        <x-aura::icon name="plus"  size="xs" />
                        <span>Create</span>
                    </x-aura::button>
                </div>
            </x-slot:footer>
        </x-aura::card>
    </form>

</div>

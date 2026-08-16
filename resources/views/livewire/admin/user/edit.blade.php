<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.admin')] 
#[Title('Edit User — Admin Panel | Aura Wire')] 
class extends Component {
    public string $name = 'Alex Kovacs';
    public string $email = 'alex.k@example.com';
    public string $role = 'admin';
    public string $status = 'Active';
    public bool $saved = false;

    public function update(): void
    {
        $this->validate([
            'name' => 'required|min:2',
            'email' => 'required|email',
            'role' => 'required',
            'status' => 'required',
        ]);

        $this->saved = true;
    }
};

?>

<div class="w-full max-w-3xl mx-auto space-y-3">

    <!-- Header with Back Button -->
    <div class="flex items-center justify-between gap-4 px-1">
        <div>
            <x-aura::kicker>Administration</x-aura::kicker>
            <x-aura::heading level="1" size="lg">Edit User Profile</x-aura::heading>
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
            <x-aura::toast variant="neutral" title="Changes Saved" description="User details for {{ $name }} updated successfully." />
        </div>
    @endif

    <!-- Edit User Card Form -->
    <form wire:submit.prevent="update">
        <x-aura::card title="Profile Information" description="Update user identity, role permissions, and access status.">
            <div class="space-y-5 pt-2">

                <!-- Avatar & Identity Preview -->
                <x-aura::card >
                    <x-aura::avatar initials="AK" size="md" />
                    <div>
                        <div class="font-bold text-zinc-900 dark:text-white text-sm">Alex Kovacs</div>
                        <div class="text-xs text-zinc-500">ID #1001 &bull; Member since Aug 2026</div>
                    </div>
                </x-aura::card>

                <!-- Full Name & Email -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <x-aura::field label="Full Name" required error="{{ $errors->first('name') }}">
                        <x-aura::input wire:model="name" size="sm" />
                    </x-aura::field>

                    <x-aura::field label="Email Address" required error="{{ $errors->first('email') }}">
                        <x-aura::input wire:model="email" type="email" size="sm" />
                    </x-aura::field>
                </div>

                <!-- Role & Status -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <x-aura::field label="Account Role" required error="{{ $errors->first('role') }}">
                        <x-aura::select wire:model="role" size="sm">
                            <option value="admin">Administrator</option>
                            <option value="dev">Developer</option>
                            <option value="member">Member</option>
                        </x-aura::select>
                    </x-aura::field>

                    <x-aura::field label="Account Status" required error="{{ $errors->first('status') }}">
                        <x-aura::select wire:model="status" size="sm">
                            <option value="Active">Active</option>
                            <option value="Pending">Pending Verification</option>
                            <option value="Inactive">Inactive</option>
                        </x-aura::select>
                    </x-aura::field>
                </div>

            </div>

            <x-slot:footer>
                <div class="flex items-center justify-between w-full">
                    <x-aura::button href="/admin/users" wire:navigate variant="secondary" size="sm">
                        Cancel
                    </x-aura::button>

                    <div class="flex items-center gap-2">
                        <x-aura::button href="/admin/users/show" wire:navigate variant="subtle" size="sm">
                            View Profile
                        </x-aura::button>
                        <x-aura::button type="submit" variant="primary" size="sm">
                            <span>Save</span>
                        </x-aura::button>
                    </div>
                </div>
            </x-slot:footer>
        </x-aura::card>
    </form>

    <!-- Danger Zone Card -->
    <x-aura::card title="Account Security & Access" >
        <div class="space-y-4">
            <div class="flex items-center justify-between gap-4 py-2 border-b border-zinc-100 dark:border-zinc-800">
                <div>
                    <div class="font-semibold text-xs text-zinc-900 dark:text-white">Reset Password</div>
                    <div class="text-xs text-zinc-500">Send a password reset link to user's email address.</div>
                </div>
                <x-aura::button variant="secondary" size="xs">Send Reset Link</x-aura::button>
            </div>

            <div class="flex items-center justify-between gap-4 py-2">
                <div>
                    <div class="font-semibold text-xs text-red-600 dark:text-red-400">Delete Account</div>
                    <div class="text-xs text-zinc-500">Permanently remove this user account and active access.</div>
                </div>
                <x-aura::button variant="danger" size="xs" type="button" x-on:click="$dispatch('open-modal', 'delete-user-modal')">Delete User</x-aura::button>
            </div>
        </div>
    </x-aura::card>

    <!-- Delete Confirmation Modal -->
    <x-aura::modal name="delete-user-modal" variant="centered" maxWidth="sm">
        <div class="flex flex-col items-center text-center space-y-3">
            <div class="w-12 h-12 rounded-2xl bg-red-100 dark:bg-red-950/60 text-red-600 dark:text-red-400 border border-red-200 dark:border-red-800/60 flex items-center justify-center shrink-0 shadow-xs">
                <x-aura::icon name="trash"  size="md" />
            </div>
            
            <div class="space-y-1">
                <h3 class="text-base font-bold text-zinc-900 dark:text-white tracking-tight">Delete User Account?</h3>
                <p class="text-xs text-zinc-500 dark:text-zinc-400 leading-relaxed">
                    This action will permanently delete this user profile, active sessions, and permissions. This cannot be undone.
                </p>
            </div>
        </div>

        <x-slot:footer>
            <div class="grid grid-cols-2 gap-3 w-full">
                <x-aura::button variant="secondary" size="sm"  x-on:click="$dispatch('close-modal', 'delete-user-modal')">
                    Cancel
                </x-aura::button>
                <x-aura::button variant="danger" size="sm"  x-on:click="$dispatch('close-modal', 'delete-user-modal')">
                    Delete
                </x-aura::button>
            </div>
        </x-slot:footer>
    </x-aura::modal>

</div>

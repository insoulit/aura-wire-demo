<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.admin')] 
#[Title('Edit User — Admin Panel | Aura Wire')] 
class extends Component {
    public int $userId = 1;
    public string $name = 'Alex Kovacs';
    public string $email = 'alex.k@example.com';
    public string $initials = 'AK';
    public string $role = 'admin';
    public string $status = 'Active';
    public bool $saved = false;

    public function mount(): void
    {
        $id = (int) request()->query('id', 1);
        $this->userId = $id;

        $allUsers = [
            1 => ['id' => 1, 'name' => 'Alex Kovacs', 'email' => 'alex.k@example.com', 'initials' => 'AK', 'role' => 'admin', 'status' => 'Active'],
            2 => ['id' => 2, 'name' => 'Jane Doe', 'email' => 'jane.doe@example.com', 'initials' => 'JD', 'role' => 'dev', 'status' => 'Active'],
            3 => ['id' => 3, 'name' => 'Marcus Smith', 'email' => 'marcus@example.com', 'initials' => 'MS', 'role' => 'member', 'status' => 'Pending'],
            4 => ['id' => 4, 'name' => 'Sarah Lee', 'email' => 'sarah.lee@example.com', 'initials' => 'SL', 'role' => 'member', 'status' => 'Inactive'],
            5 => ['id' => 5, 'name' => 'David Chen', 'email' => 'david.chen@example.com', 'initials' => 'DC', 'role' => 'dev', 'status' => 'Active'],
            6 => ['id' => 6, 'name' => 'Emily Watson', 'email' => 'emily.w@example.com', 'initials' => 'EW', 'role' => 'admin', 'status' => 'Active'],
        ];

        $u = $allUsers[$id] ?? $allUsers[1];
        $this->name = $u['name'];
        $this->email = $u['email'];
        $this->initials = $u['initials'];
        $this->role = $u['role'];
        $this->status = $u['status'];
    }

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

<x-aura::flex direction="col" gap="3" class="w-full max-w-3xl mx-auto">

    <!-- Header with Back Button -->
    <x-aura::flex align="center" justify="between" gap="4" class="px-1">

        <div>

            <x-aura::kicker>
                Administration
            </x-aura::kicker>

            <x-aura::heading level="1" size="lg">
                Edit User
            </x-aura::heading>

        </div>

        <x-aura::flex align="center" gap="2">

            <x-aura::button href="/admin/users" wire:navigate variant="secondary" size="sm" icon="arrow-left">
                Back
            </x-aura::button>

        </x-aura::flex>

    </x-aura::flex>

    @if ($saved)

        <div class="fixed bottom-5 right-5 z-50">
            <x-aura::toast variant="neutral" title="Changes Saved" description="User details updated successfully." />
        </div>

    @endif

    <!-- Edit User Card Form -->
    <form wire:submit.prevent="update">

        <x-aura::card title="Profile Information" description="Update user identity, role permissions, and access status.">

            <x-aura::flex direction="col" gap="5" class="pt-2">

                <!-- Avatar & Identity Preview -->
                <x-aura::flex align="center" gap="4" class="p-4 rounded-xl bg-zinc-50/80 dark:bg-zinc-800/50 border border-zinc-200 dark:border-zinc-700/60">

                    <x-aura::avatar :initials="$initials" size="md" />

                    <div>

                        <x-aura::text weight="bold" size="sm">
                            {{ $name }}
                        </x-aura::text>

                        <x-aura::text variant="subtle" size="sm">
                            {{ $email }}
                        </x-aura::text>

                    </div>

                </x-aura::flex>

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
                            <option value="member">Member</option>
                            <option value="dev">Developer</option>
                            <option value="admin">Administrator</option>
                        </x-aura::select>
                    </x-aura::field>

                    <x-aura::field label="Status" required error="{{ $errors->first('status') }}">
                        <x-aura::select wire:model="status" size="sm">
                            <option value="Active">Active</option>
                            <option value="Pending">Pending Verification</option>
                            <option value="Inactive">Inactive</option>
                        </x-aura::select>
                    </x-aura::field>

                </div>

            </x-aura::flex>

            <x-slot:footer>

                <x-aura::flex align="center" justify="between" class="w-full">

                    <x-aura::button href="/admin/users/show?id={{ $userId }}" wire:navigate variant="secondary" size="sm">
                        View
                    </x-aura::button>

                    <x-aura::flex align="center" gap="2">

                        <x-aura::button href="/admin/users" wire:navigate variant="secondary" size="sm">
                            Cancel
                        </x-aura::button>

                        <x-aura::button type="submit" variant="primary" size="sm" icon="check">
                            Save
                        </x-aura::button>

                    </x-aura::flex>

                </x-aura::flex>

            </x-slot:footer>

        </x-aura::card>

    </form>

    <!-- Danger Zone Card -->
    <x-aura::card title="Danger Zone" description="Irreversible actions for this user account.">

        <x-aura::flex align="center" justify="between" gap="4" class="py-1">

            <div>

                <x-aura::text weight="semibold" size="sm" class="text-red-600 dark:text-red-400">
                    Delete Account
                </x-aura::text>

                <x-aura::text variant="subtle" size="sm">
                    Permanently remove this user account and active access.
                </x-aura::text>

            </div>

            <x-aura::button variant="danger" size="sm" type="button" x-on:click="$dispatch('open-modal', 'delete-user-modal')">
                Delete
            </x-aura::button>

        </x-aura::flex>

    </x-aura::card>

    <!-- Delete Confirmation Modal -->
    <x-aura::modal 
        name="delete-user-modal" 
        variant="danger" 
        centered="true"
        icon="trash"
        title="Delete User Account?" 
        description="This action will permanently delete this user profile, active sessions, and permissions. This cannot be undone."
        maxWidth="sm"
    >

        <x-slot:footer>

            <div class="grid grid-cols-2 gap-3 w-full">

                <x-aura::button variant="secondary" size="sm" x-on:click="$dispatch('close-modal', 'delete-user-modal')">
                    Cancel
                </x-aura::button>

                <x-aura::button variant="danger" size="sm" x-on:click="$dispatch('close-modal', 'delete-user-modal')">
                    Delete
                </x-aura::button>

            </div>

        </x-slot:footer>

    </x-aura::modal>

</x-aura::flex>

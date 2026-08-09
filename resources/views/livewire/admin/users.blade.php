<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new #[Layout('layouts.admin')] #[Title('User Management — Admin Panel | Aura Wire')] class extends Component {
    public string $search = '';
    public string $role = 'all';
};

?>

<div class="w-full max-w-6xl mx-auto space-y-8">
    <!-- Header -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <div>
            <x-aura::kicker>Administration</x-aura::kicker>
            <x-aura::heading level="1" size="xl">User Management</x-aura::heading>
            <x-aura::subheading size="xs" class="mt-1">
                Manage organization user accounts, roles, access permissions, and active sessions.
            </x-aura::subheading>
        </div>
        <div class="flex items-center gap-3">
            <x-aura::button variant="primary" size="sm">
                <x-aura::icon name="plus" class="w-4 h-4 mr-1.5 inline-block" />
                <span>Add New User</span>
            </x-aura::button>
        </div>
    </div>

    <!-- Filter & Action Bar -->
    <x-aura::card class="p-4">
        <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
            <div class="flex items-center gap-3 w-full sm:w-auto">
                <x-aura::input wire:model.live="search" placeholder="Search users..." class="w-full sm:w-64" size="sm" />
                <x-aura::select wire:model.live="role" size="sm" class="w-36">
                    <option value="all">All Roles</option>
                    <option value="admin">Admins</option>
                    <option value="dev">Developers</option>
                    <option value="member">Members</option>
                </x-aura::select>
            </div>
            <div class="flex items-center gap-2 text-xs text-zinc-500">
                <x-aura::text size="xs" variant="subtle">Showing 4 active users</x-aura::text>
            </div>
        </div>
    </x-aura::card>

    <!-- Users Table -->
    <x-aura::card>
        <x-aura::table>
            <x-aura::table.header>
                <x-aura::table.row>
                    <x-aura::table.column>User</x-aura::table.column>
                    <x-aura::table.column>Role</x-aura::table.column>
                    <x-aura::table.column>Status</x-aura::table.column>
                    <x-aura::table.column>Joined Date</x-aura::table.column>
                    <x-aura::table.column class="text-right">Actions</x-aura::table.column>
                </x-aura::table.row>
            </x-aura::table.header>
            <x-aura::table.body>
                <x-aura::table.row>
                    <x-aura::table.cell>
                        <div class="flex items-center gap-3">
                            <x-aura::avatar initials="AK" size="sm" />
                            <div>
                                <div class="font-semibold text-zinc-900 dark:text-white">Alex Kovacs</div>
                                <div class="text-xs text-zinc-500">alex@example.com</div>
                            </div>
                        </div>
                    </x-aura::table.cell>
                    <x-aura::table.cell><x-aura::badge variant="positive" size="sm">Admin</x-aura::badge></x-aura::table.cell>
                    <x-aura::table.cell><x-aura::badge variant="neutral" size="sm">Active</x-aura::badge></x-aura::table.cell>
                    <x-aura::table.cell class="text-xs text-zinc-500">2026-08-01</x-aura::table.cell>
                    <x-aura::table.cell class="text-right">
                        <div class="flex items-center justify-end gap-1.5">
                            <x-aura::icon-button icon="eye" variant="ghost" size="sm" label="View User" />
                            <x-aura::icon-button icon="pencil" variant="ghost" size="sm" label="Edit User" />
                            <x-aura::icon-button icon="trash-2" variant="danger" size="sm" label="Delete User" />
                        </div>
                    </x-aura::table.cell>
                </x-aura::table.row>

                <x-aura::table.row>
                    <x-aura::table.cell>
                        <div class="flex items-center gap-3">
                            <x-aura::avatar initials="JD" size="sm" />
                            <div>
                                <div class="font-semibold text-zinc-900 dark:text-white">Jane Doe</div>
                                <div class="text-xs text-zinc-500">jane.doe@example.com</div>
                            </div>
                        </div>
                    </x-aura::table.cell>
                    <x-aura::table.cell><x-aura::badge variant="neutral" size="sm">Developer</x-aura::badge></x-aura::table.cell>
                    <x-aura::table.cell><x-aura::badge variant="neutral" size="sm">Active</x-aura::badge></x-aura::table.cell>
                    <x-aura::table.cell class="text-xs text-zinc-500">2026-07-28</x-aura::table.cell>
                    <x-aura::table.cell class="text-right">
                        <div class="flex items-center justify-end gap-1.5">
                            <x-aura::icon-button icon="eye" variant="ghost" size="sm" label="View User" />
                            <x-aura::icon-button icon="pencil" variant="ghost" size="sm" label="Edit User" />
                            <x-aura::icon-button icon="trash-2" variant="danger" size="sm" label="Delete User" />
                        </div>
                    </x-aura::table.cell>
                </x-aura::table.row>

                <x-aura::table.row>
                    <x-aura::table.cell>
                        <div class="flex items-center gap-3">
                            <x-aura::avatar initials="MS" size="sm" />
                            <div>
                                <div class="font-semibold text-zinc-900 dark:text-white">Marcus Smith</div>
                                <div class="text-xs text-zinc-500">marcus@example.com</div>
                            </div>
                        </div>
                    </x-aura::table.cell>
                    <x-aura::table.cell><x-aura::badge variant="neutral" size="sm">Member</x-aura::badge></x-aura::table.cell>
                    <x-aura::table.cell><x-aura::badge variant="subtle" size="sm">Pending</x-aura::badge></x-aura::table.cell>
                    <x-aura::table.cell class="text-xs text-zinc-500">2026-07-15</x-aura::table.cell>
                    <x-aura::table.cell class="text-right">
                        <div class="flex items-center justify-end gap-1.5">
                            <x-aura::icon-button icon="eye" variant="ghost" size="sm" label="View User" />
                            <x-aura::icon-button icon="pencil" variant="ghost" size="sm" label="Edit User" />
                            <x-aura::icon-button icon="trash-2" variant="danger" size="sm" label="Delete User" />
                        </div>
                    </x-aura::table.cell>
                </x-aura::table.row>

                <x-aura::table.row>
                    <x-aura::table.cell>
                        <div class="flex items-center gap-3">
                            <x-aura::avatar initials="SL" size="sm" />
                            <div>
                                <div class="font-semibold text-zinc-900 dark:text-white">Sarah Lee</div>
                                <div class="text-xs text-zinc-500">sarah.lee@example.com</div>
                            </div>
                        </div>
                    </x-aura::table.cell>
                    <x-aura::table.cell><x-aura::badge variant="neutral" size="sm">Member</x-aura::badge></x-aura::table.cell>
                    <x-aura::table.cell><x-aura::badge variant="subtle" size="sm">Inactive</x-aura::badge></x-aura::table.cell>
                    <x-aura::table.cell class="text-xs text-zinc-500">2026-06-10</x-aura::table.cell>
                    <x-aura::table.cell class="text-right">
                        <div class="flex items-center justify-end gap-1.5">
                            <x-aura::icon-button icon="eye" variant="ghost" size="sm" label="View User" />
                            <x-aura::icon-button icon="pencil" variant="ghost" size="sm" label="Edit User" />
                            <x-aura::icon-button icon="trash-2" variant="danger" size="sm" label="Delete User" />
                        </div>
                    </x-aura::table.cell>
                </x-aura::table.row>
            </x-aura::table.body>
        </x-aura::table>
    </x-aura::card>
</div>

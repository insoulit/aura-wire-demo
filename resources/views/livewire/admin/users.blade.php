<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new #[Layout('layouts.admin')] #[Title('User Management — Admin Panel | Aura Wire')] class extends Component {
    public string $search = '';
    public string $role = 'all';
};

?>

<div class="w-full max-w-6xl mx-auto space-y-6">

    <!-- Top Header -->
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-5 space-y-1">
        <div class="flex items-center justify-between gap-4">
            <div>
                <x-aura::kicker>Administration</x-aura::kicker>
                <x-aura::heading level="1" size="xl">User Management</x-aura::heading>
            </div>
            <x-aura::button variant="primary" size="sm" class="shrink-0 gap-1">
                <x-aura::icon name="plus" class="w-3.5 h-3.5 shrink-0" />
                <span>Create</span>
            </x-aura::button>
        </div>
        <x-aura::subheading size="xs" class="text-zinc-500 dark:text-zinc-400">
            Manage organization user accounts, roles, access permissions, and active sessions.
        </x-aura::subheading>
    </div>

    <!-- Ultra-Clean Unified Table Card -->
    <x-aura::card class="p-0 overflow-hidden">
        <x-slot:header>
            <div class="flex flex-col sm:flex-row items-center justify-between gap-4 w-full">
                <div class="flex items-center gap-3 w-full sm:w-auto">
                    <x-aura::input wire:model.live="search" placeholder="Search by name or email..." class="w-full sm:w-72" size="sm" />
                    <x-aura::select wire:model.live="role" size="sm" class="w-40">
                        <option value="all">All Roles</option>
                        <option value="admin">Admins</option>
                        <option value="dev">Developers</option>
                        <option value="member">Members</option>
                    </x-aura::select>
                </div>
                <x-aura::badge variant="neutral" size="sm">4 Registered Accounts</x-aura::badge>
            </div>
        </x-slot:header>

        <x-aura::table borderless="true">
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
                                <x-aura::heading level="3" size="xs" class="font-semibold text-zinc-900 dark:text-white">Alex Kovacs</x-aura::heading>
                                <x-aura::text variant="subtle" size="xs">alex@example.com</x-aura::text>
                            </div>
                        </div>
                    </x-aura::table.cell>
                    <x-aura::table.cell><x-aura::badge variant="positive" size="sm">Admin</x-aura::badge></x-aura::table.cell>
                    <x-aura::table.cell><x-aura::badge variant="neutral" size="sm">Active</x-aura::badge></x-aura::table.cell>
                    <x-aura::table.cell class="text-xs text-zinc-500">2026-08-01</x-aura::table.cell>
                    <x-aura::table.cell class="text-right">
                        <div class="flex items-center justify-end gap-1.5">
                            <x-aura::icon-button icon="show" variant="subtle" size="sm" shape="circle" label="View User" href="/user/profile" wire:navigate />
                            <x-aura::icon-button icon="edit" variant="subtle" size="sm" shape="circle" label="Edit User" />
                            <x-aura::icon-button icon="delete" variant="subtle-danger" size="sm" shape="circle" label="Delete User" />
                        </div>
                    </x-aura::table.cell>
                </x-aura::table.row>

                <x-aura::table.row>
                    <x-aura::table.cell>
                        <div class="flex items-center gap-3">
                            <x-aura::avatar initials="JD" size="sm" />
                            <div>
                                <x-aura::heading level="3" size="xs" class="font-semibold text-zinc-900 dark:text-white">Jane Doe</x-aura::heading>
                                <x-aura::text variant="subtle" size="xs">jane.doe@example.com</x-aura::text>
                            </div>
                        </div>
                    </x-aura::table.cell>
                    <x-aura::table.cell><x-aura::badge variant="neutral" size="sm">Developer</x-aura::badge></x-aura::table.cell>
                    <x-aura::table.cell><x-aura::badge variant="neutral" size="sm">Active</x-aura::badge></x-aura::table.cell>
                    <x-aura::table.cell class="text-xs text-zinc-500">2026-07-28</x-aura::table.cell>
                    <x-aura::table.cell class="text-right">
                        <div class="flex items-center justify-end gap-1.5">
                            <x-aura::icon-button icon="show" variant="subtle" size="sm" shape="circle" label="View User" />
                            <x-aura::icon-button icon="edit" variant="subtle" size="sm" shape="circle" label="Edit User" />
                            <x-aura::icon-button icon="delete" variant="subtle-danger" size="sm" shape="circle" label="Delete User" />
                        </div>
                    </x-aura::table.cell>
                </x-aura::table.row>

                <x-aura::table.row>
                    <x-aura::table.cell>
                        <div class="flex items-center gap-3">
                            <x-aura::avatar initials="MS" size="sm" />
                            <div>
                                <x-aura::heading level="3" size="xs" class="font-semibold text-zinc-900 dark:text-white">Marcus Smith</x-aura::heading>
                                <x-aura::text variant="subtle" size="xs">marcus@example.com</x-aura::text>
                            </div>
                        </div>
                    </x-aura::table.cell>
                    <x-aura::table.cell><x-aura::badge variant="neutral" size="sm">Member</x-aura::badge></x-aura::table.cell>
                    <x-aura::table.cell><x-aura::badge variant="subtle" size="sm">Pending</x-aura::badge></x-aura::table.cell>
                    <x-aura::table.cell class="text-xs text-zinc-500">2026-07-15</x-aura::table.cell>
                    <x-aura::table.cell class="text-right">
                        <div class="flex items-center justify-end gap-1.5">
                            <x-aura::icon-button icon="show" variant="subtle" size="sm" shape="circle" label="View User" />
                            <x-aura::icon-button icon="edit" variant="subtle" size="sm" shape="circle" label="Edit User" />
                            <x-aura::icon-button icon="delete" variant="subtle-danger" size="sm" shape="circle" label="Delete User" />
                        </div>
                    </x-aura::table.cell>
                </x-aura::table.row>

                <x-aura::table.row>
                    <x-aura::table.cell>
                        <div class="flex items-center gap-3">
                            <x-aura::avatar initials="SL" size="sm" />
                            <div>
                                <x-aura::heading level="3" size="xs" class="font-semibold text-zinc-900 dark:text-white">Sarah Lee</x-aura::heading>
                                <x-aura::text variant="subtle" size="xs">sarah.lee@example.com</x-aura::text>
                            </div>
                        </div>
                    </x-aura::table.cell>
                    <x-aura::table.cell><x-aura::badge variant="neutral" size="sm">Member</x-aura::badge></x-aura::table.cell>
                    <x-aura::table.cell><x-aura::badge variant="subtle" size="sm">Inactive</x-aura::badge></x-aura::table.cell>
                    <x-aura::table.cell class="text-xs text-zinc-500">2026-06-10</x-aura::table.cell>
                    <x-aura::table.cell class="text-right">
                        <div class="flex items-center justify-end gap-1.5">
                            <x-aura::icon-button icon="show" variant="subtle" size="sm" shape="circle" label="View User" />
                            <x-aura::icon-button icon="edit" variant="subtle" size="sm" shape="circle" label="Edit User" />
                            <x-aura::icon-button icon="delete" variant="subtle-danger" size="sm" shape="circle" label="Delete User" />
                        </div>
                    </x-aura::table.cell>
                </x-aura::table.row>
            </x-aura::table.body>
        </x-aura::table>

        <x-slot:footer>
            <x-aura::pagination :page="1" :totalPages="5" :total="48" :perPage="10" size="sm" shape="circle" />
        </x-slot:footer>
    </x-aura::card>

</div>

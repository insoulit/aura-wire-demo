<?php

use function Livewire\Volt\{layout, title};

layout('layouts.admin');
title('User Management — Admin Console | Aura Wire');

?>

<div class="space-y-8">
    <!-- Header -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 border-b border-zinc-200 dark:border-zinc-800 pb-5">
        <div>
            <div class="flex items-center gap-2 mb-1">
                <x-aura::kicker class="text-zinc-500">⚡ ADMIN MODULE</x-aura::kicker>
                <x-aura::badge variant="info" size="sm">4 Accounts</x-aura::badge>
            </div>
            <x-aura::heading level="1" size="lg">User Management</x-aura::heading>
            <x-aura::subheading>Manage application user accounts, security roles, and active permissions</x-aura::subheading>
        </div>

        <div class="flex items-center gap-3">
            <x-aura::button variant="primary" size="sm">
                <x-slot name="icon">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                </x-slot>
                Create New User
            </x-aura::button>
        </div>
    </div>

    <!-- Search & Filter Card -->
    <x-aura::card>
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
            <div class="w-full sm:w-80">
                <x-aura::input placeholder="Search users by name or email..." />
            </div>
            <div class="flex items-center gap-2">
                <x-aura::select placeholder="Filter by Role">
                    <option value="all">All Roles</option>
                    <option value="admin">Admin</option>
                    <option value="member">Member</option>
                </x-aura::select>
                <x-aura::button variant="secondary" size="sm">Filter</x-aura::button>
            </div>
        </div>
    </x-aura::card>

    <!-- Users Table styled following Episure design system -->
    <x-aura::card title="System Users Registry">
        <x-aura::table>
            <x-aura::table.header>
                <tr>
                    <x-aura::table.column>User</x-aura::table.column>
                    <x-aura::table.column>Role</x-aura::table.column>
                    <x-aura::table.column>Status</x-aura::table.column>
                    <x-aura::table.column>Joined Date</x-aura::table.column>
                    <x-aura::table.column class="text-right">Actions</x-aura::table.column>
                </tr>
            </x-aura::table.header>
            <x-aura::table.body>
                <x-aura::table.row>
                    <x-aura::table.cell>
                        <div class="flex items-center gap-3">
                            <x-aura::avatar initials="AK" size="sm" status="online" />
                            <div>
                                <div class="font-semibold text-zinc-900 dark:text-white">Alex Kovacs</div>
                                <div class="text-xs text-zinc-500">alex.kovacs@example.com</div>
                            </div>
                        </div>
                    </x-aura::table.cell>
                    <x-aura::table.cell><x-aura::badge variant="negative" size="sm">System Admin</x-aura::badge></x-aura::table.cell>
                    <x-aura::table.cell><x-aura::badge variant="positive" size="sm">Active</x-aura::badge></x-aura::table.cell>
                    <x-aura::table.cell class="text-xs text-zinc-500">2026-08-01</x-aura::table.cell>
                    <x-aura::table.cell class="text-right">
                        <div class="flex items-center justify-end gap-2">
                            <x-aura::button variant="subtle" size="sm" square title="View User Details" class="text-zinc-400 hover:bg-blue-50 hover:text-blue-600 dark:hover:bg-blue-950/40 dark:hover:text-blue-400">
                                <x-aura::icon.show />
                            </x-aura::button>
                            <x-aura::button variant="subtle" size="sm" square title="Edit User" class="text-zinc-400 hover:bg-blue-50 hover:text-blue-600 dark:hover:bg-blue-950/40 dark:hover:text-blue-400">
                                <x-aura::icon.edit />
                            </x-aura::button>
                            <x-aura::button variant="subtle" size="sm" square title="Delete User" class="text-zinc-400 hover:bg-red-50 hover:text-red-600 dark:hover:bg-red-950/40 dark:hover:text-red-400">
                                <x-aura::icon.delete />
                            </x-aura::button>
                        </div>
                    </x-aura::table.cell>
                </x-aura::table.row>

                <x-aura::table.row>
                    <x-aura::table.cell>
                        <div class="flex items-center gap-3">
                            <x-aura::avatar initials="JD" size="sm" status="online" />
                            <div>
                                <div class="font-semibold text-zinc-900 dark:text-white">Jane Doe</div>
                                <div class="text-xs text-zinc-500">jane.doe@example.com</div>
                            </div>
                        </div>
                    </x-aura::table.cell>
                    <x-aura::table.cell><x-aura::badge variant="info" size="sm">Developer</x-aura::badge></x-aura::table.cell>
                    <x-aura::table.cell><x-aura::badge variant="positive" size="sm">Active</x-aura::badge></x-aura::table.cell>
                    <x-aura::table.cell class="text-xs text-zinc-500">2026-07-28</x-aura::table.cell>
                    <x-aura::table.cell class="text-right">
                        <div class="flex items-center justify-end gap-2">
                            <x-aura::button variant="subtle" size="sm" square title="View User Details" class="text-zinc-400 hover:bg-blue-50 hover:text-blue-600 dark:hover:bg-blue-950/40 dark:hover:text-blue-400">
                                <x-aura::icon.show />
                            </x-aura::button>
                            <x-aura::button variant="subtle" size="sm" square title="Edit User" class="text-zinc-400 hover:bg-blue-50 hover:text-blue-600 dark:hover:bg-blue-950/40 dark:hover:text-blue-400">
                                <x-aura::icon.edit />
                            </x-aura::button>
                            <x-aura::button variant="subtle" size="sm" square title="Delete User" class="text-zinc-400 hover:bg-red-50 hover:text-red-600 dark:hover:bg-red-950/40 dark:hover:text-red-400">
                                <x-aura::icon.delete />
                            </x-aura::button>
                        </div>
                    </x-aura::table.cell>
                </x-aura::table.row>

                <x-aura::table.row>
                    <x-aura::table.cell>
                        <div class="flex items-center gap-3">
                            <x-aura::avatar initials="MS" size="sm" status="away" />
                            <div>
                                <div class="font-semibold text-zinc-900 dark:text-white">Marcus Smith</div>
                                <div class="text-xs text-zinc-500">marcus@example.com</div>
                            </div>
                        </div>
                    </x-aura::table.cell>
                    <x-aura::table.cell><x-aura::badge variant="neutral" size="sm">Member</x-aura::badge></x-aura::table.cell>
                    <x-aura::table.cell><x-aura::badge variant="warning" size="sm">Pending</x-aura::badge></x-aura::table.cell>
                    <x-aura::table.cell class="text-xs text-zinc-500">2026-07-15</x-aura::table.cell>
                    <x-aura::table.cell class="text-right">
                        <div class="flex items-center justify-end gap-2">
                            <x-aura::button variant="subtle" size="sm" square title="View User Details" class="text-zinc-400 hover:bg-blue-50 hover:text-blue-600 dark:hover:bg-blue-950/40 dark:hover:text-blue-400">
                                <x-aura::icon.show />
                            </x-aura::button>
                            <x-aura::button variant="subtle" size="sm" square title="Edit User" class="text-zinc-400 hover:bg-blue-50 hover:text-blue-600 dark:hover:bg-blue-950/40 dark:hover:text-blue-400">
                                <x-aura::icon.edit />
                            </x-aura::button>
                            <x-aura::button variant="subtle" size="sm" square title="Delete User" class="text-zinc-400 hover:bg-red-50 hover:text-red-600 dark:hover:bg-red-950/40 dark:hover:text-red-400">
                                <x-aura::icon.delete />
                            </x-aura::button>
                        </div>
                    </x-aura::table.cell>
                </x-aura::table.row>

                <x-aura::table.row>
                    <x-aura::table.cell>
                        <div class="flex items-center gap-3">
                            <x-aura::avatar initials="SL" size="sm" status="offline" />
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
                        <div class="flex items-center justify-end gap-2">
                            <x-aura::button variant="subtle" size="sm" square title="View User Details" class="text-zinc-400 hover:bg-blue-50 hover:text-blue-600 dark:hover:bg-blue-950/40 dark:hover:text-blue-400">
                                <x-aura::icon.show />
                            </x-aura::button>
                            <x-aura::button variant="subtle" size="sm" square title="Edit User" class="text-zinc-400 hover:bg-blue-50 hover:text-blue-600 dark:hover:bg-blue-950/40 dark:hover:text-blue-400">
                                <x-aura::icon.edit />
                            </x-aura::button>
                            <x-aura::button variant="subtle" size="sm" square title="Delete User" class="text-zinc-400 hover:bg-red-50 hover:text-red-600 dark:hover:bg-red-950/40 dark:hover:text-red-400">
                                <x-aura::icon.delete />
                            </x-aura::button>
                        </div>
                    </x-aura::table.cell>
                </x-aura::table.row>
            </x-aura::table.body>
        </x-aura::table>
    </x-aura::card>
</div>

<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.admin')] 
#[Title('User Profile — Admin Panel | Aura Wire')] 
class extends Component {
    public int $userId = 1;
    public array $user = [];

    public function mount(): void
    {
        $id = (int) request()->query('id', 1);
        $this->userId = $id;

        $allUsers = [
            1 => ['id' => 1, 'name' => 'Alex Kovacs', 'email' => 'alex.k@example.com', 'initials' => 'AK', 'role' => 'admin', 'role_label' => 'Administrator', 'status' => 'Active', 'joined' => 'August 1, 2026', 'last_login' => '12 minutes ago (192.168.1.45)', 'two_factor' => 'Enabled'],
            2 => ['id' => 2, 'name' => 'Jane Doe', 'email' => 'jane.doe@example.com', 'initials' => 'JD', 'role' => 'dev', 'role_label' => 'Developer', 'status' => 'Active', 'joined' => 'July 28, 2026', 'last_login' => '2 hours ago (192.168.1.50)', 'two_factor' => 'Enabled'],
            3 => ['id' => 3, 'name' => 'Marcus Smith', 'email' => 'marcus@example.com', 'initials' => 'MS', 'role' => 'member', 'role_label' => 'Member', 'status' => 'Pending', 'joined' => 'July 15, 2026', 'last_login' => 'Never', 'two_factor' => 'Disabled'],
            4 => ['id' => 4, 'name' => 'Sarah Lee', 'email' => 'sarah.lee@example.com', 'initials' => 'SL', 'role' => 'member', 'role_label' => 'Member', 'status' => 'Inactive', 'joined' => 'June 10, 2026', 'last_login' => '3 weeks ago', 'two_factor' => 'Disabled'],
            5 => ['id' => 5, 'name' => 'David Chen', 'email' => 'david.chen@example.com', 'initials' => 'DC', 'role' => 'dev', 'role_label' => 'Developer', 'status' => 'Active', 'joined' => 'June 2, 2026', 'last_login' => 'Yesterday', 'two_factor' => 'Enabled'],
            6 => ['id' => 6, 'name' => 'Emily Watson', 'email' => 'emily.w@example.com', 'initials' => 'EW', 'role' => 'admin', 'role_label' => 'Administrator', 'status' => 'Active', 'joined' => 'May 25, 2026', 'last_login' => '1 hour ago', 'two_factor' => 'Enabled'],
        ];

        $this->user = $allUsers[$id] ?? $allUsers[1];
    }
};

?>

<x-aura::container size="3xl" gap="3">

    <!-- Top Header -->
    <x-aura::flex justify="between" gap="4">

        <x-aura::flex direction="col" gap="none">

            <x-aura::kicker>
                Administration
            </x-aura::kicker>

            <x-aura::heading level="1" size="lg">
                User Profile
            </x-aura::heading>

        </x-aura::flex>

        <x-aura::flex justify="end" gap="2">

            <x-aura::button href="/admin/users" wire:navigate variant="secondary" size="sm" icon="arrow-left">
                Back
            </x-aura::button>

        </x-aura::flex>

    </x-aura::flex>

    <!-- Unified Profile Card -->
    <x-aura::card>

        <!-- Profile Header Banner -->
        <x-aura::flex align="center" justify="between" gap="4" class="pb-6 border-b border-zinc-100 dark:border-zinc-800 flex-col sm:flex-row">

            <x-aura::flex align="center" gap="4">

                <x-aura::avatar :initials="$user['initials']" size="lg" />

                <x-aura::flex direction="col" gap="1">

                    <x-aura::flex align="center" gap="2" :wrap="true">

                        <x-aura::heading level="2" size="sm">
                            {{ $user['name'] }}
                        </x-aura::heading>

                        <x-aura::badge :variant="$user['role'] === 'admin' ? 'neutral' : 'subtle'" size="sm">
                            {{ $user['role_label'] }}
                        </x-aura::badge>

                    </x-aura::flex>

                    <x-aura::text variant="subtle" size="sm">
                        {{ $user['email'] }}
                    </x-aura::text>

                </x-aura::flex>

            </x-aura::flex>

            <x-aura::badge :variant="$user['status'] === 'Active' ? 'neutral' : 'subtle'" size="sm">
                {{ $user['status'] }}
            </x-aura::badge>

        </x-aura::flex>

        <!-- Specifications & Details -->
        <x-aura::table borderless="true">

            <x-aura::table.body>

                <x-aura::table.row>

                    <x-aura::table.cell>
                        <x-aura::text variant="subtle" size="sm">
                            User Identifier
                        </x-aura::text>
                    </x-aura::table.cell>

                    <x-aura::table.cell align="right">
                        <x-aura::text variant="mono" size="sm">
                            USR-{{ str_pad($user['id'], 4, '0', STR_PAD_LEFT) }}
                        </x-aura::text>
                    </x-aura::table.cell>

                </x-aura::table.row>

                <x-aura::table.row>

                    <x-aura::table.cell>
                        <x-aura::text variant="subtle" size="sm">
                            Full Name
                        </x-aura::text>
                    </x-aura::table.cell>

                    <x-aura::table.cell align="right">
                        <x-aura::text size="sm" weight="semibold">
                            {{ $user['name'] }}
                        </x-aura::text>
                    </x-aura::table.cell>

                </x-aura::table.row>

                <x-aura::table.row>

                    <x-aura::table.cell>
                        <x-aura::text variant="subtle" size="sm">
                            Email Address
                        </x-aura::text>
                    </x-aura::table.cell>

                    <x-aura::table.cell align="right">
                        <x-aura::text size="sm">
                            {{ $user['email'] }}
                        </x-aura::text>
                    </x-aura::table.cell>

                </x-aura::table.row>

                <x-aura::table.row>

                    <x-aura::table.cell>
                        <x-aura::text variant="subtle" size="sm">
                            Access Level
                        </x-aura::text>
                    </x-aura::table.cell>

                    <x-aura::table.cell align="right">
                        <x-aura::badge :variant="$user['role'] === 'admin' ? 'neutral' : 'subtle'" size="sm">
                            {{ $user['role_label'] }}
                        </x-aura::badge>
                    </x-aura::table.cell>

                </x-aura::table.row>

                <x-aura::table.row>

                    <x-aura::table.cell>
                        <x-aura::text variant="subtle" size="sm">
                            Account Status
                        </x-aura::text>
                    </x-aura::table.cell>

                    <x-aura::table.cell align="right">
                        <x-aura::badge :variant="$user['status'] === 'Active' ? 'neutral' : 'subtle'" size="sm">
                            {{ $user['status'] }}
                        </x-aura::badge>
                    </x-aura::table.cell>

                </x-aura::table.row>

                <x-aura::table.row>

                    <x-aura::table.cell>
                        <x-aura::text variant="subtle" size="sm">
                            Two Factor Authentication
                        </x-aura::text>
                    </x-aura::table.cell>

                    <x-aura::table.cell align="right">
                        <x-aura::text size="sm">
                            {{ $user['two_factor'] }} (TOTP Authenticator)
                        </x-aura::text>
                    </x-aura::table.cell>

                </x-aura::table.row>

                <x-aura::table.row>

                    <x-aura::table.cell>
                        <x-aura::text variant="subtle" size="sm">
                            Last Login
                        </x-aura::text>
                    </x-aura::table.cell>

                    <x-aura::table.cell align="right">
                        <x-aura::text size="sm">
                            {{ $user['last_login'] }}
                        </x-aura::text>
                    </x-aura::table.cell>

                </x-aura::table.row>

                <x-aura::table.row>

                    <x-aura::table.cell>
                        <x-aura::text variant="subtle" size="sm">
                            Date Registered
                        </x-aura::text>
                    </x-aura::table.cell>

                    <x-aura::table.cell align="right">
                        <x-aura::text size="sm">
                            {{ $user['joined'] }}
                        </x-aura::text>
                    </x-aura::table.cell>

                </x-aura::table.row>

            </x-aura::table.body>

        </x-aura::table>

        <x-slot:footer>

            <x-aura::center class="w-full">

                <x-aura::button href="/admin/users/edit?id={{ $user['id'] }}" wire:navigate variant="primary" size="sm" icon="pencil">
                    Edit
                </x-aura::button>

            </x-aura::center>

        </x-slot:footer>

    </x-aura::card>

</x-aura::container>

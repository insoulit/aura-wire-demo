<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.admin')] 
#[Title('Admin Console — Aura Wire')] 
class extends Component {
    public function with(): array
    {
        return [
            'recentUsers' => collect([
                ['id' => 1, 'name' => 'Alex Kovacs', 'email' => 'alex.k@example.com', 'initials' => 'AK', 'role' => 'Admin', 'role_label' => 'Administrator', 'variant' => 'neutral', 'joined' => '2026-08-01'],
                ['id' => 2, 'name' => 'Jane Doe', 'email' => 'jane.doe@example.com', 'initials' => 'JD', 'role' => 'Developer', 'role_label' => 'Developer', 'variant' => 'subtle', 'joined' => '2026-07-28'],
                ['id' => 3, 'name' => 'Marcus Vance', 'email' => 'marcus.v@example.com', 'initials' => 'MV', 'role' => 'Member', 'role_label' => 'Member', 'variant' => 'subtle', 'joined' => '2026-07-20'],
                ['id' => 4, 'name' => 'Elena Rostova', 'email' => 'elena.r@example.com', 'initials' => 'ER', 'role' => 'Admin', 'role_label' => 'Administrator', 'variant' => 'neutral', 'joined' => '2026-07-15'],
            ]),
            'recentLogs' => collect([
                ['time' => '10:48:12', 'level' => 'INFO', 'variant' => 'neutral', 'message' => 'Compiled views cleared successfully via view:clear.'],
                ['time' => '10:42:05', 'level' => 'NOTICE', 'variant' => 'subtle', 'message' => 'Aura Wire ServiceProvider registered 9 component paths.'],
                ['time' => '10:35:19', 'level' => 'WARNING', 'variant' => 'warning', 'message' => 'View cache empty for route [components.installation].'],
                ['time' => '10:20:44', 'level' => 'ERROR', 'variant' => 'danger', 'message' => 'Uncaught ConnectionException: Redis server unreachable.'],
            ]),
        ];
    }
};

?>

<div class="w-full max-w-6xl mx-auto space-y-4">

    <!-- Top Header -->
    <div class="space-y-1 px-1">
        <x-aura::flex align="center" justify="between" gap="4">
            <div>
                <x-aura::kicker>Administration</x-aura::kicker>
                <x-aura::heading level="1" size="lg">Admin Dashboard</x-aura::heading>
            </div>
            <x-aura::flex align="center" gap="2">
                <x-aura::button href="/admin/logs" wire:navigate variant="secondary" size="sm">
                    <x-aura::icon name="file-text" size="xs" />
                    <span>Logs</span>
                </x-aura::button>
                <x-aura::button href="/admin/users" wire:navigate variant="primary" size="sm">
                    <x-aura::icon name="users" size="xs" />
                    <span>Users</span>
                </x-aura::button>
            </x-aura::flex>
        </x-aura::flex>
    </div>

    <!-- Metrics Cards Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3">
        <x-aura::stat label="Total Users" value="30" trend="+14% month" trendDirection="up" icon="users" />
        <x-aura::stat label="Active Sessions" value="18" trend="98% healthy" trendDirection="up" icon="activity" />
        <x-aura::stat label="System Logs" value="24" trend="0 Errors" trendDirection="neutral" icon="terminal" />
        <x-aura::stat label="Aura Wire" value="v1.0" trend="Volt 1.11" trendDirection="neutral" icon="box" />
    </div>

    <!-- Quick Overview Section Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
        
        <!-- Recent Users Card -->
        <x-aura::card title="Recent Registered Users" description="Latest member registrations in system">
            <x-aura::table borderless="true">
                <x-aura::table.body>
                    @foreach ($recentUsers as $user)
                        <x-aura::table.row>
                            <x-aura::table.cell>
                                <x-aura::flex align="center" gap="3">
                                    <x-aura::avatar :initials="$user['initials']" size="sm" />
                                    <div>
                                        <x-aura::heading level="3" size="xs">{{ $user['name'] }}</x-aura::heading>
                                        <x-aura::text variant="subtle" size="sm">{{ $user['email'] }}</x-aura::text>
                                    </div>
                                </x-aura::flex>
                            </x-aura::table.cell>
                            <x-aura::table.cell nowrap="true">
                                <x-aura::badge :variant="$user['variant']" size="sm">{{ $user['role_label'] }}</x-aura::badge>
                            </x-aura::table.cell>
                            <x-aura::table.cell nowrap="true" align="right">
                                <x-aura::icon-button icon="show" variant="subtle" size="sm" shape="circle" label="View" href="/admin/users/show?id={{ $user['id'] }}" wire:navigate />
                            </x-aura::table.cell>
                        </x-aura::table.row>
                    @endforeach
                </x-aura::table.body>
            </x-aura::table>

            <x-slot:footer>
                <x-aura::flex align="center" justify="end" class="w-full">
                    <x-aura::button href="/admin/users" wire:navigate variant="ghost" size="sm">
                        <span>Users</span>
                        <x-aura::icon name="arrow-right" size="xs" />
                    </x-aura::button>
                </x-aura::flex>
            </x-slot:footer>
        </x-aura::card>

        <!-- System Log Activity Card -->
        <x-aura::card title="Recent System Logs" description="Latest runtime events and exception traces">
            <x-aura::table borderless="true">
                <x-aura::table.body>
                    @foreach ($recentLogs as $log)
                        <x-aura::table.row>
                            <x-aura::table.cell nowrap="true">
                                <x-aura::badge :variant="$log['variant']" size="sm">{{ $log['level'] }}</x-aura::badge>
                            </x-aura::table.cell>
                            <x-aura::table.cell truncate="true">
                                <x-aura::text size="sm" truncate="true">{{ $log['message'] }}</x-aura::text>
                            </x-aura::table.cell>
                            <x-aura::table.cell nowrap="true">
                                <x-aura::text variant="mono" size="sm" variant="subtle">{{ $log['time'] }}</x-aura::text>
                            </x-aura::table.cell>
                            <x-aura::table.cell nowrap="true" align="right">
                                <x-aura::icon-button icon="show" variant="subtle" size="sm" shape="circle" label="View" href="/admin/logs/show" wire:navigate />
                            </x-aura::table.cell>
                        </x-aura::table.row>
                    @endforeach
                </x-aura::table.body>
            </x-aura::table>

            <x-slot:footer>
                <x-aura::flex align="center" justify="end" class="w-full">
                    <x-aura::button href="/admin/logs" wire:navigate variant="ghost" size="sm">
                        <span>Logs</span>
                        <x-aura::icon name="arrow-right" size="xs" />
                    </x-aura::button>
                </x-aura::flex>
            </x-slot:footer>
        </x-aura::card>

    </div>

</div>

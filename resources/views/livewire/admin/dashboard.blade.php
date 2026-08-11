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
                ['id' => 1, 'name' => 'Alex Kovacs', 'email' => 'alex.k@example.com', 'initials' => 'AK', 'role' => 'Admin', 'variant' => 'positive', 'joined' => '2026-08-01'],
                ['id' => 2, 'name' => 'Jane Doe', 'email' => 'jane.doe@example.com', 'initials' => 'JD', 'role' => 'Developer', 'variant' => 'neutral', 'joined' => '2026-07-28'],
                ['id' => 3, 'name' => 'Marcus Vance', 'email' => 'marcus.v@example.com', 'initials' => 'MV', 'role' => 'Member', 'variant' => 'subtle', 'joined' => '2026-07-20'],
                ['id' => 4, 'name' => 'Elena Rostova', 'email' => 'elena.r@example.com', 'initials' => 'ER', 'role' => 'Admin', 'variant' => 'positive', 'joined' => '2026-07-15'],
            ]),
            'recentLogs' => collect([
                ['time' => '10:48:12', 'level' => 'INFO', 'variant' => 'neutral', 'message' => 'Compiled views cleared successfully via view:clear.'],
                ['time' => '10:42:05', 'level' => 'NOTICE', 'variant' => 'positive', 'message' => 'Aura Wire ServiceProvider registered 9 component paths.'],
                ['time' => '10:35:19', 'level' => 'WARNING', 'variant' => 'subtle', 'message' => 'View cache empty for route [components.installation].'],
                ['time' => '10:20:44', 'level' => 'ERROR', 'variant' => 'danger', 'message' => 'Uncaught ConnectionException: Redis server unreachable.'],
            ]),
        ];
    }
};

?>

<div class="w-full max-w-6xl mx-auto space-y-3">

    <!-- Top Header -->
    <div class="space-y-1 px-1">
        <div class="flex items-center justify-between gap-4">
            <div>
                <x-aura::kicker>Administration</x-aura::kicker>
                <x-aura::heading level="1" size="lg">Admin Dashboard</x-aura::heading>
            </div>
            <div class="flex items-center gap-2">
                <x-aura::button href="/admin/users" wire:navigate variant="primary" size="sm" class="shrink-0 gap-1">
                    <x-aura::icon name="users" class="w-3.5 h-3.5 shrink-0" />
                    <span>Manage Users</span>
                </x-aura::button>
            </div>
        </div>
    </div>

    <!-- Metrics Cards Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3">
        <x-aura::stat title="Total Users" value="30" trend="+14% month" trendDirection="up">
            <x-slot:icon><x-aura::icon name="users" class="w-4 h-4 text-zinc-900 dark:text-white" /></x-slot:icon>
        </x-aura::stat>

        <x-aura::stat title="System Logs" value="24" trend="0 Errors" trendDirection="neutral">
            <x-slot:icon><x-aura::icon name="activity" class="w-4 h-4 text-zinc-900 dark:text-white" /></x-slot:icon>
        </x-aura::stat>

        <x-aura::stat title="Package Mode" value="@dev" trend="aura-wire" trendDirection="neutral">
            <x-slot:icon><x-aura::icon name="box" class="w-4 h-4 text-zinc-900 dark:text-white" /></x-slot:icon>
        </x-aura::stat>

        <x-aura::stat title="PHP &amp; Volt" value="v8.3+" trend="Volt v1.11" trendDirection="up">
            <x-slot:icon><x-aura::icon name="terminal" class="w-4 h-4 text-zinc-900 dark:text-white" /></x-slot:icon>
        </x-aura::stat>
    </div>

    <!-- Quick Overview Section Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
        
        <!-- Recent Users Card -->
        <x-aura::card title="Recent Registered Users" description="Latest member registrations in system">
            <div class="divide-y divide-zinc-100 dark:divide-zinc-800">
                @foreach ($recentUsers as $user)
                    <div class="py-3 flex items-center justify-between gap-3">
                        <div class="flex items-center gap-3">
                            <x-aura::avatar :initials="$user['initials']" size="sm" />
                            <div>
                                <div class="font-semibold text-xs text-zinc-900 dark:text-white">{{ $user['name'] }}</div>
                                <div class="text-[11px] text-zinc-500">{{ $user['email'] }}</div>
                            </div>
                        </div>
                        <x-aura::badge :variant="$user['variant']" size="sm">{{ $user['role'] }}</x-aura::badge>
                    </div>
                @endforeach
            </div>

            <x-slot:footer>
                <div class="flex items-center justify-end w-full">
                    <x-aura::button href="/admin/users" wire:navigate variant="ghost" size="xs">
                        <span>View All Users</span>
                        <x-aura::icon name="chevron-right" class="w-3.5 h-3.5 ml-1" />
                    </x-aura::button>
                </div>
            </x-slot:footer>
        </x-aura::card>

        <!-- System Log Activity Card -->
        <x-aura::card title="Recent System Logs" description="Latest runtime events and exception traces">
            <div class="divide-y divide-zinc-100 dark:divide-zinc-800">
                @foreach ($recentLogs as $log)
                    <div class="py-3 flex items-center justify-between gap-3">
                        <div class="flex items-center gap-2.5 min-w-0">
                            <x-aura::badge :variant="$log['variant']" size="sm" class="shrink-0">{{ $log['level'] }}</x-aura::badge>
                            <span class="font-mono text-xs text-zinc-800 dark:text-zinc-200 truncate">{{ $log['message'] }}</span>
                        </div>
                        <span class="text-[11px] font-mono text-zinc-400 shrink-0">{{ $log['time'] }}</span>
                    </div>
                @endforeach
            </div>

            <x-slot:footer>
                <div class="flex items-center justify-end w-full">
                    <x-aura::button href="/admin/logs" wire:navigate variant="ghost" size="xs">
                        <span>View All Logs</span>
                        <x-aura::icon name="chevron-right" class="w-3.5 h-3.5 ml-1" />
                    </x-aura::button>
                </div>
            </x-slot:footer>
        </x-aura::card>

    </div>

</div>

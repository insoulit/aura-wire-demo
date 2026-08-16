<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.admin')] 
#[Title('Admin Console — Aura Wire')] 
class extends Component {
    public string $timeframe = 'Day';

    public function setTimeframe(string $period): void
    {
        $this->timeframe = $period;
    }

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
                ['time' => '10:35:19', 'level' => 'WARNING', 'variant' => 'subtle', 'message' => 'View cache empty for route [components.installation].'],
                ['time' => '10:20:44', 'level' => 'ERROR', 'variant' => 'neutral', 'message' => 'Uncaught ConnectionException: Redis server unreachable.'],
            ]),
            'chartData' => [
                'Day' => [
                    'total' => '48.2k',
                    'trend' => '+18.4%',
                    'points' => 'M0,110 C80,120 120,40 180,60 C240,80 280,20 340,35 C400,50 440,15 500,25',
                    'area' => 'M0,110 C80,120 120,40 180,60 C240,80 280,20 340,35 C400,50 440,15 500,25 L500,150 L0,150 Z',
                    'labels' => ['00:00', '04:00', '08:00', '12:00', '16:00', '20:00', '23:59'],
                ],
                'Week' => [
                    'total' => '312.8k',
                    'trend' => '+12.1%',
                    'points' => 'M0,90 C80,70 140,110 200,50 C260,30 320,70 380,25 C440,15 470,30 500,15',
                    'area' => 'M0,90 C80,70 140,110 200,50 C260,30 320,70 380,25 C440,15 470,30 500,15 L500,150 L0,150 Z',
                    'labels' => ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                ],
                'Month' => [
                    'total' => '1.42M',
                    'trend' => '+24.6%',
                    'points' => 'M0,120 C90,100 160,80 240,40 C310,60 380,30 440,20 480,10 500,8',
                    'area' => 'M0,120 C90,100 160,80 240,40 C310,60 380,30 440,20 480,10 500,8 L500,150 L0,150 Z',
                    'labels' => ['Week 1', 'Week 2', 'Week 3', 'Week 4'],
                ],
            ],
            'weeklyBars' => [
                ['day' => 'Mon', 'requests' => 140, 'errors' => 14, 'primaryHeight' => '65%', 'secondaryHeight' => '25%'],
                ['day' => 'Tue', 'requests' => 180, 'errors' => 22, 'primaryHeight' => '85%', 'secondaryHeight' => '35%'],
                ['day' => 'Wed', 'requests' => 160, 'errors' => 9, 'primaryHeight' => '72%', 'secondaryHeight' => '18%'],
                ['day' => 'Thu', 'requests' => 210, 'errors' => 28, 'primaryHeight' => '95%', 'secondaryHeight' => '42%'],
                ['day' => 'Fri', 'requests' => 195, 'errors' => 18, 'primaryHeight' => '88%', 'secondaryHeight' => '32%'],
                ['day' => 'Sat', 'requests' => 90, 'errors' => 5, 'primaryHeight' => '42%', 'secondaryHeight' => '12%'],
                ['day' => 'Sun', 'requests' => 75, 'errors' => 5, 'primaryHeight' => '36%', 'secondaryHeight' => '10%'],
            ],
        ];
    }
};

?>

<x-aura::stack gap="4" class="w-full max-w-6xl mx-auto">

    <!-- Top Header -->
    <div class="px-1">
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

    <!-- Metrics Cards Grid (High Contrast Black & White) -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3">
        <x-aura::stat label="Total Users" value="30" trend="+14% month" trendDirection="neutral" icon="users" />
        <x-aura::stat label="Active Sessions" value="18" trend="98% healthy" trendDirection="neutral" icon="activity" />
        <x-aura::stat label="System Logs" value="24" trend="0 Errors" trendDirection="neutral" icon="terminal" />
        <x-aura::stat label="Aura Wire" value="v1.0" trend="Volt 1.11" trendDirection="neutral" icon="box" />
    </div>

    <!-- Demo Charts Section Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">

        <!-- Chart 1: System Throughput & Traffic Area Chart (Black & White Minimalist) -->
        <x-aura::card>
            <x-aura::stack gap="4">
                <!-- Header with Period Toggles -->
                <x-aura::flex align="center" justify="between" gap="3" wrap="true">
                    <div>
                        <x-aura::flex align="center" gap="2">
                            <x-aura::heading level="2" size="sm">System Traffic</x-aura::heading>
                            <x-aura::badge variant="neutral" size="sm">Live</x-aura::badge>
                        </x-aura::flex>
                        <x-aura::flex align="baseline" gap="2">
                            <x-aura::heading level="3" size="lg">{{ $chartData[$timeframe]['total'] }}</x-aura::heading>
                            <x-aura::badge variant="neutral" size="sm">{{ $chartData[$timeframe]['trend'] }}</x-aura::badge>
                            <x-aura::text variant="subtle" size="sm">requests</x-aura::text>
                        </x-aura::flex>
                    </div>

                    <!-- Period Filter Tabs -->
                    <x-aura::flex align="center" gap="1">
                        @foreach (['Day', 'Week', 'Month'] as $period)
                            <x-aura::button 
                                type="button" 
                                wire:click="setTimeframe('{{ $period }}')" 
                                variant="{{ $timeframe === $period ? 'primary' : 'ghost' }}"
                                size="xs"
                            >
                                <span>{{ $period }}</span>
                            </x-aura::button>
                        @endforeach
                    </x-aura::flex>
                </x-aura::flex>

                <!-- Monochromatic SVG Area Line Chart -->
                <div class="relative w-full h-44 pt-2">
                    <svg viewBox="0 0 500 150" preserveAspectRatio="none" class="w-full h-full overflow-visible">
                        <defs>
                            <linearGradient id="trafficGradient" x1="0" y1="0" x2="0" y2="1">
                                <stop offset="0%" stop-color="#000000" stop-opacity="0.18" class="dark:stop-color-white" />
                                <stop offset="100%" stop-color="#000000" stop-opacity="0.18" class="dark:stop-color-white" />
                            </linearGradient>
                        </defs>

                        <!-- Grid Reference Lines -->
                        <line x1="0" y1="35" x2="500" y2="35" stroke="currentColor" class="text-zinc-100 dark:text-zinc-800/60" stroke-dasharray="4 4" stroke-width="1" />
                        <line x1="0" y1="75" x2="500" y2="75" stroke="currentColor" class="text-zinc-100 dark:text-zinc-800/60" stroke-dasharray="4 4" stroke-width="1" />
                        <line x1="0" y1="115" x2="500" y2="115" stroke="currentColor" class="text-zinc-100 dark:text-zinc-800/60" stroke-dasharray="4 4" stroke-width="1" />

                        <!-- Monochrome Area Fill -->
                        <path d="{{ $chartData[$timeframe]['area'] }}" fill="url(#trafficGradient)" />

                        <!-- Monochrome Stroke Line -->
                        <path d="{{ $chartData[$timeframe]['points'] }}" fill="none" stroke="currentColor" class="text-zinc-900 dark:text-white transition-all duration-300" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>

                <!-- X Axis Labels -->
                <div>
                    <x-aura::separator />
                    <x-aura::flex align="center" justify="between" class="pt-1">
                        @foreach ($chartData[$timeframe]['labels'] as $label)
                            <x-aura::text variant="mono" size="sm" variant="subtle">{{ $label }}</x-aura::text>
                        @endforeach
                    </x-aura::flex>
                </div>
            </x-aura::stack>
        </x-aura::card>

        <!-- Chart 2: Weekly Event Volume Dual Bar Chart (High Contrast Black & White) -->
        <x-aura::card>
            <x-aura::stack gap="4">
                <!-- Header with Clear Visual Legends -->
                <x-aura::flex align="center" justify="between" gap="3" wrap="true">
                    <div>
                        <x-aura::heading level="2" size="sm">Event Volume</x-aura::heading>
                        <x-aura::flex align="baseline" gap="2">
                            <x-aura::heading level="3" size="lg">1,052</x-aura::heading>
                            <x-aura::text variant="subtle" size="sm">weekly events</x-aura::text>
                        </x-aura::flex>
                    </div>

                    <!-- Clear High-Contrast Monochrome Legends -->
                    <x-aura::flex align="center" gap="3">
                        <x-aura::flex align="center" gap="1.5">
                            <div class="w-2.5 h-2.5 rounded-xs bg-zinc-900 dark:bg-white shrink-0"></div>
                            <x-aura::text size="sm">Events</x-aura::text>
                        </x-aura::flex>
                        <x-aura::flex align="center" gap="1.5">
                            <div class="w-2.5 h-2.5 rounded-xs bg-zinc-400 dark:bg-zinc-500 shrink-0"></div>
                            <x-aura::text size="sm" variant="subtle">Issues</x-aura::text>
                        </x-aura::flex>
                    </x-aura::flex>
                </x-aura::flex>

                <!-- High-Contrast Dual Bar Columns Grid -->
                <div class="h-44 flex items-end justify-between gap-2 sm:gap-3 pt-4 px-1">
                    @foreach ($weeklyBars as $bar)
                        <div class="flex-1 flex flex-col items-center gap-2 group cursor-pointer">
                            <div class="flex items-end justify-center gap-1 h-36 w-full pb-1 border-b border-zinc-200 dark:border-zinc-800">
                                <!-- Primary Bar (Events) -->
                                <div 
                                    class="w-3 sm:w-3.5 bg-zinc-900 dark:bg-white rounded-t-sm transition-all duration-300 group-hover:opacity-85 shadow-2xs" 
                                    style="height: {{ $bar['primaryHeight'] }}"
                                    title="{{ $bar['day'] }} Events: {{ $bar['requests'] }}"
                                ></div>

                                <!-- Secondary Bar (Issues - Clearly Visible Medium Grey) -->
                                <div 
                                    class="w-3 sm:w-3.5 bg-zinc-400 dark:bg-zinc-500 rounded-t-sm transition-all duration-300 group-hover:opacity-85 shadow-2xs border border-zinc-500/20 dark:border-zinc-400/20" 
                                    style="height: {{ $bar['secondaryHeight'] }}"
                                    title="{{ $bar['day'] }} Issues: {{ $bar['errors'] }}"
                                ></div>
                            </div>
                            <x-aura::text size="sm">{{ $bar['day'] }}</x-aura::text>
                        </div>
                    @endforeach
                </div>

                <!-- Footer Summary Info -->
                <div>
                    <x-aura::separator />
                    <x-aura::flex align="center" justify="between" class="pt-1">
                        <x-aura::text variant="subtle" size="sm">Peak: Thursday (238 events)</x-aura::text>
                        <x-aura::badge variant="neutral" size="sm">99.4% uptime</x-aura::badge>
                    </x-aura::flex>
                </div>
            </x-aura::stack>
        </x-aura::card>

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

</x-aura::stack>

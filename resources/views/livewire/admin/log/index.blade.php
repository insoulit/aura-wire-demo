<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('layout.admin')] 
#[Title('System Logs — Admin Panel | Aura Wire')] 
class extends Component {
    public string $search = '';
    public string $level = 'all';
    public int $page = 1;
    public int $perPage = 8;

    public function updatedSearch(): void
    {
        $this->page = 1;
    }

    public function updatedLevel(): void
    {
        $this->page = 1;
    }

    public function setPage(int $page): void
    {
        $this->page = max(1, $page);
    }

    public function previousPage(): void
    {
        if ($this->page > 1) {
            $this->page--;
        }
    }

    public function nextPage(int $maxPages): void
    {
        if ($this->page < $maxPages) {
            $this->page++;
        }
    }

    public function with(): array
    {
        $allLogs = collect([
            ['id' => 1, 'timestamp' => '2026-08-10 10:48:12', 'time' => '10:48:12', 'level' => 'INFO', 'variant' => 'neutral', 'env' => 'local', 'message' => 'Compiled views cleared successfully via ddev artisan view:clear.'],
            ['id' => 2, 'timestamp' => '2026-08-10 10:42:05', 'time' => '10:42:05', 'level' => 'NOTICE', 'variant' => 'positive', 'env' => 'local', 'message' => 'Aura Wire ServiceProvider registered 9 component group anonymous paths.'],
            ['id' => 3, 'timestamp' => '2026-08-10 10:35:19', 'time' => '10:35:19', 'level' => 'WARNING', 'variant' => 'subtle', 'env' => 'local', 'message' => 'View cache empty for route [components.installation]. Recompiled template.'],
            ['id' => 4, 'timestamp' => '2026-08-10 10:20:44', 'time' => '10:20:44', 'level' => 'ERROR', 'variant' => 'danger', 'env' => 'local', 'message' => 'Uncaught ConnectionException: Redis server unreachable on 127.0.0.1:6379.'],
            ['id' => 5, 'timestamp' => '2026-08-10 09:58:30', 'time' => '09:58:30', 'level' => 'INFO', 'variant' => 'neutral', 'env' => 'production', 'message' => 'User authentication token generated for account alex.k@example.com.'],
            ['id' => 6, 'timestamp' => '2026-08-10 09:44:11', 'time' => '09:44:11', 'level' => 'CRITICAL', 'variant' => 'danger', 'env' => 'production', 'message' => 'SQLSTATE[42S02]: Base table or view not found: 1146 Table logs_archive does not exist.'],
            ['id' => 7, 'timestamp' => '2026-08-10 09:12:00', 'time' => '09:12:00', 'level' => 'INFO', 'variant' => 'neutral', 'env' => 'local', 'message' => 'Scheduled cron job [App\\Jobs\\CleanupTempFiles] executed in 142ms.'],
            ['id' => 8, 'timestamp' => '2026-08-10 08:50:22', 'time' => '08:50:22', 'level' => 'NOTICE', 'variant' => 'positive', 'env' => 'production', 'message' => 'HTTP POST /admin/users/create returned 200 OK (Content-Type: application/json).'],
            ['id' => 9, 'timestamp' => '2026-08-10 08:35:10', 'time' => '08:35:10', 'level' => 'WARNING', 'variant' => 'subtle', 'env' => 'production', 'message' => 'Rate limit threshold (60 req/min) reached for IP 192.168.1.105.'],
            ['id' => 10, 'timestamp' => '2026-08-10 08:15:00', 'time' => '08:15:00', 'level' => 'INFO', 'variant' => 'neutral', 'env' => 'local', 'message' => 'Database migration 2026_08_01_000000_create_users_table completed successfully.'],
            ['id' => 11, 'timestamp' => '2026-08-10 07:48:33', 'time' => '07:48:33', 'level' => 'ERROR', 'variant' => 'danger', 'env' => 'production', 'message' => 'GuzzleHttp\\Exception\\ConnectException: cURL error 28: Connection timed out after 5001ms.'],
            ['id' => 12, 'timestamp' => '2026-08-10 07:30:15', 'time' => '07:30:15', 'level' => 'INFO', 'variant' => 'neutral', 'env' => 'local', 'message' => 'Vite dev server connected via HMR web sockets on port 5173.'],
            ['id' => 13, 'timestamp' => '2026-08-10 07:00:00', 'time' => '07:00:00', 'level' => 'NOTICE', 'variant' => 'positive', 'env' => 'production', 'message' => 'Queue worker process [default:job-849] completed successfully.'],
            ['id' => 14, 'timestamp' => '2026-08-10 06:42:19', 'time' => '06:42:19', 'level' => 'WARNING', 'variant' => 'subtle', 'env' => 'local', 'message' => 'Deprecated function call: str_slug() used in resources/views/components/card.blade.php.'],
            ['id' => 15, 'timestamp' => '2026-08-10 06:15:02', 'time' => '06:15:02', 'level' => 'INFO', 'variant' => 'neutral', 'env' => 'production', 'message' => 'Application cache cleared via CLI artisan cache:clear.'],
            ['id' => 16, 'timestamp' => '2026-08-10 05:55:40', 'time' => '05:55:40', 'level' => 'ERROR', 'variant' => 'danger', 'env' => 'production', 'message' => 'Swift_TransportException: Expected response code 250 but got code 530 (Auth required).'],
            ['id' => 17, 'timestamp' => '2026-08-10 05:20:11', 'time' => '05:20:11', 'level' => 'INFO', 'variant' => 'neutral', 'env' => 'local', 'message' => 'Loaded 15 custom Blade components from aura-wire package namespace.'],
            ['id' => 18, 'timestamp' => '2026-08-10 04:50:00', 'time' => '04:50:00', 'level' => 'NOTICE', 'variant' => 'positive', 'env' => 'production', 'message' => 'SSL Certificate renewed for *.aura-wire-demo.ddev.site.'],
            ['id' => 19, 'timestamp' => '2026-08-10 04:12:35', 'time' => '04:12:35', 'level' => 'WARNING', 'variant' => 'subtle', 'env' => 'local', 'message' => 'Session store read latency exceeded threshold (140ms > 50ms).'],
            ['id' => 20, 'timestamp' => '2026-08-10 03:40:18', 'time' => '03:40:18', 'level' => 'INFO', 'variant' => 'neutral', 'env' => 'production', 'message' => 'User password reset requested for email user@company.com.'],
            ['id' => 21, 'timestamp' => '2026-08-10 03:10:05', 'time' => '03:10:05', 'level' => 'CRITICAL', 'variant' => 'danger', 'env' => 'production', 'message' => 'Disk Space Warning: /var/log filesystem at 92% capacity.'],
            ['id' => 22, 'timestamp' => '2026-08-10 02:45:50', 'time' => '02:45:50', 'level' => 'INFO', 'variant' => 'neutral', 'env' => 'local', 'message' => 'Database connection pool initialized with 10 max connections.'],
            ['id' => 23, 'timestamp' => '2026-08-10 02:15:30', 'time' => '02:15:30', 'level' => 'NOTICE', 'variant' => 'positive', 'env' => 'production', 'message' => 'Backup archive generated: aura_backup_2026_08_10.tar.gz (42.8 MB).'],
            ['id' => 24, 'timestamp' => '2026-08-10 01:30:00', 'time' => '01:30:00', 'level' => 'INFO', 'variant' => 'neutral', 'env' => 'local', 'message' => 'System log rotator archived 1,420 lines into log_2026_08_09.log.'],
        ]);

        $filtered = $allLogs->filter(function ($log) {
            $matchesSearch = empty($this->search) || 
                str_contains(strtolower($log['message']), strtolower($this->search)) || 
                str_contains(strtolower($log['level']), strtolower($this->search)) || 
                str_contains(strtolower($log['env']), strtolower($this->search));
            
            $matchesLevel = $this->level === 'all' || strtolower($log['level']) === strtolower($this->level);

            return $matchesSearch && $matchesLevel;
        });

        $totalCount = $filtered->count();
        $totalPages = max(1, (int) ceil($totalCount / $this->perPage));
        
        if ($this->page > $totalPages) {
            $this->page = $totalPages;
        }

        $paginatedLogs = $filtered->slice(($this->page - 1) * $this->perPage, $this->perPage);

        return [
            'logs' => $paginatedLogs,
            'totalCount' => $totalCount,
            'totalPages' => $totalPages,
            'currentPage' => $this->page,
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
                <x-aura::heading level="1" size="lg">System Logs &amp; Activity</x-aura::heading>
            </div>
            <div class="flex items-center gap-2">
                <x-aura::button variant="secondary" size="sm" class="shrink-0 gap-1">
                    <x-aura::icon name="download" class="w-3.5 h-3.5 shrink-0" />
                    <span>Export CSV</span>
                </x-aura::button>
                <x-aura::button variant="danger" size="sm" class="shrink-0 gap-1" x-on:click="$dispatch('open-modal', 'clear-logs-modal')">
                    <x-aura::icon name="trash" class="w-3.5 h-3.5 shrink-0" />
                    <span>Clear Logs</span>
                </x-aura::button>
            </div>
        </div>
    </div>

    <!-- Unified Logs Datatable Card -->
    <x-aura::card class="p-0 overflow-hidden">
        <x-slot:header>
            <div class="flex flex-col sm:flex-row items-center justify-between gap-3 p-4 border-b border-zinc-100 dark:border-zinc-800">
                <div class="relative w-full sm:w-72">
                    <x-aura::input wire:model.live.debounce.250ms="search" placeholder="Search logs or trace details..." size="sm" class="pl-9">
                        <x-slot:icon>
                            <x-aura::icon name="search" class="w-4 h-4 text-zinc-400" />
                        </x-slot:icon>
                    </x-aura::input>
                </div>

                <div class="flex items-center gap-2 w-full sm:w-auto">
                    <x-aura::select wire:model.live="level" size="sm" class="w-full sm:w-36">
                        <option value="all">All Levels</option>
                        <option value="info">INFO</option>
                        <option value="notice">NOTICE</option>
                        <option value="warning">WARNING</option>
                        <option value="error">ERROR</option>
                        <option value="critical">CRITICAL</option>
                    </x-aura::select>
                </div>
            </div>
        </x-slot:header>

        <x-aura::table>
            <x-aura::table.header>
                <x-aura::table.row>
                    <x-aura::table.column class="w-32">Timestamp</x-aura::table.column>
                    <x-aura::table.column class="w-24">Level</x-aura::table.column>
                    <x-aura::table.column class="w-24">Env</x-aura::table.column>
                    <x-aura::table.column>Message</x-aura::table.column>
                    <x-aura::table.column class="text-right w-24">Action</x-aura::table.column>
                </x-aura::table.row>
            </x-aura::table.header>
            <x-aura::table.body>
                @forelse ($logs as $log)
                    <x-aura::table.row>
                        <x-aura::table.cell class="text-xs font-mono text-zinc-500 whitespace-nowrap">
                            {{ $log['time'] }}
                        </x-aura::table.cell>
                        <x-aura::table.cell>
                            <x-aura::badge :variant="$log['variant']" size="sm">{{ $log['level'] }}</x-aura::badge>
                        </x-aura::table.cell>
                        <x-aura::table.cell class="text-xs text-zinc-500 dark:text-zinc-400 font-medium">
                            {{ $log['env'] }}
                        </x-aura::table.cell>
                        <x-aura::table.cell class="font-mono text-xs text-zinc-800 dark:text-zinc-200 truncate max-w-md">
                            {{ $log['message'] }}
                        </x-aura::table.cell>
                        <x-aura::table.cell class="text-right whitespace-nowrap">
                            <x-aura::icon-button icon="show" variant="subtle" size="sm" shape="circle" label="View Log Details" href="/admin/logs/show" wire:navigate />
                        </x-aura::table.cell>
                    </x-aura::table.row>
                @empty
                    <x-aura::table.row>
                        <x-aura::table.cell colspan="5" class="text-center py-8 text-zinc-500 dark:text-zinc-400">
                            No log events match your filter criteria.
                        </x-aura::table.cell>
                    </x-aura::table.row>
                @endforelse
            </x-aura::table.body>
        </x-aura::table>

        <x-slot:footer>
            <div class="flex flex-col sm:flex-row items-center justify-between gap-4 w-full">
                <div class="text-xs sm:text-sm text-zinc-500 dark:text-zinc-400">
                    Showing <span class="font-bold text-zinc-900 dark:text-white">{{ $totalCount ? (($currentPage - 1) * $perPage) + 1 : 0 }}</span> to <span class="font-bold text-zinc-900 dark:text-white">{{ min($currentPage * $perPage, $totalCount) }}</span> of <span class="font-bold text-zinc-900 dark:text-white">{{ $totalCount }}</span> items
                </div>

                <div class="flex items-center gap-1.5">
                    <button type="button" wire:click="previousPage" @disabled($currentPage <= 1) class="p-1.5 rounded-full text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800 disabled:opacity-40 disabled:cursor-not-allowed transition-colors" aria-label="Previous Page">
                        <x-aura::icon name="chevron-left" class="w-4 h-4" />
                    </button>

                    @for ($i = 1; $i <= $totalPages; $i++)
                        <button type="button" wire:click="setPage({{ $i }})" class="w-8 h-8 rounded-full text-xs font-semibold transition-all {{ $i === $currentPage ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 shadow-xs' : 'text-zinc-600 dark:text-zinc-400 hover:bg-zinc-100 dark:hover:bg-zinc-800' }}">
                            {{ $i }}
                        </button>
                    @endfor

                    <button type="button" wire:click="nextPage({{ $totalPages }})" @disabled($currentPage >= $totalPages) class="p-1.5 rounded-full text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800 disabled:opacity-40 disabled:cursor-not-allowed transition-colors" aria-label="Next Page">
                        <x-aura::icon name="chevron-right" class="w-4 h-4" />
                    </button>
                </div>
            </div>
        </x-slot:footer>
    </x-aura::card>

    <!-- Clear Logs Modal -->
    <x-aura::modal name="clear-logs-modal" variant="centered" maxWidth="sm">
        <div class="flex flex-col items-center text-center space-y-3">
            <div class="w-12 h-12 rounded-2xl bg-red-100 dark:bg-red-950/60 text-red-600 dark:text-red-400 border border-red-200 dark:border-red-800/60 flex items-center justify-center shrink-0 shadow-xs">
                <x-aura::icon name="trash" class="w-6 h-6" />
            </div>
            
            <div class="space-y-1">
                <h3 class="text-base font-bold text-zinc-900 dark:text-white tracking-tight">Clear System Logs?</h3>
                <p class="text-xs text-zinc-500 dark:text-zinc-400 leading-relaxed">
                    This will clear all cached event stream logs and exception records from active memory. Archived files on disk will not be affected.
                </p>
            </div>
        </div>

        <x-slot:footer>
            <div class="grid grid-cols-2 gap-3 w-full">
                <x-aura::button variant="secondary" size="sm" class="w-full justify-center" x-on:click="$dispatch('close-modal', 'clear-logs-modal')">
                    Cancel
                </x-aura::button>
                <x-aura::button variant="danger" size="sm" class="w-full justify-center" x-on:click="$dispatch('close-modal', 'clear-logs-modal')">
                    Clear Logs
                </x-aura::button>
            </div>
        </x-slot:footer>
    </x-aura::modal>

</div>

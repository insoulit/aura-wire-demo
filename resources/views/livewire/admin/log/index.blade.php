<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\WithPagination;

new 
#[Layout('livewire.layout.admin')] 
#[Title('System Logs — Admin Panel | Aura Wire')] 
class extends Component {
    use WithPagination;

    public string $search = '';
    public string $level = 'all';
    public int $perPage = 10;
    public int $page = 1;

    public function updatingSearch(): void
    {
        $this->page = 1;
    }

    public function updatingLevel(): void
    {
        $this->page = 1;
    }

    public function setPage(int $pageNumber): void
    {
        $this->page = $pageNumber;
    }

    public function nextPage(int $totalPages): void
    {
        if ($this->page < $totalPages) {
            $this->page++;
        }
    }

    public function previousPage(): void
    {
        if ($this->page > 1) {
            $this->page--;
        }
    }

    public function with(): array
    {
        $allLogs = collect([
            ['id' => 1, 'time' => '2026-08-16 17:42:10', 'level' => 'INFO', 'variant' => 'neutral', 'env' => 'production', 'message' => 'User authenticated successfully (alex.k@example.com)'],
            ['id' => 2, 'time' => '2026-08-16 17:41:55', 'level' => 'INFO', 'variant' => 'neutral', 'env' => 'production', 'message' => 'Cache cleared via artisan command [optimize:clear]'],
            ['id' => 3, 'time' => '2026-08-16 17:39:12', 'level' => 'WARNING', 'variant' => 'warning', 'env' => 'production', 'message' => 'Rate limit warning: IP 192.168.1.10 exceeded 60 req/min threshold'],
            ['id' => 4, 'time' => '2026-08-16 17:35:04', 'level' => 'ERROR', 'variant' => 'danger', 'env' => 'production', 'message' => 'Database query timeout: SELECT * FROM audit_logs WHERE created_at < ? [4.2s]'],
            ['id' => 5, 'time' => '2026-08-16 17:30:21', 'level' => 'INFO', 'variant' => 'neutral', 'env' => 'production', 'message' => 'Background worker job ProcessWebhookEvent completed [142ms]'],
            ['id' => 6, 'time' => '2026-08-16 17:28:44', 'level' => 'NOTICE', 'variant' => 'subtle', 'env' => 'production', 'message' => 'SSL certificate autorenewal check passed (expiry in 78 days)'],
            ['id' => 7, 'time' => '2026-08-16 17:22:18', 'level' => 'INFO', 'variant' => 'neutral', 'env' => 'production', 'message' => 'Livewire asset bundle dispatched to client session #a9f23'],
            ['id' => 8, 'time' => '2026-08-16 17:15:09', 'level' => 'WARNING', 'variant' => 'warning', 'env' => 'production', 'message' => 'Redis memory utilization reached 78% threshold on node-01'],
            ['id' => 9, 'time' => '2026-08-16 17:10:00', 'level' => 'INFO', 'variant' => 'neutral', 'env' => 'production', 'message' => 'Cron heartbeat dispatched successfully via scheduler'],
            ['id' => 10, 'time' => '2026-08-16 17:04:33', 'level' => 'CRITICAL', 'variant' => 'danger', 'env' => 'production', 'message' => 'External API gateway webhook timeout (Stripe Endpoint 504 Gateway Time-out)'],
            ['id' => 11, 'time' => '2026-08-16 17:00:15', 'level' => 'INFO', 'variant' => 'neutral', 'env' => 'production', 'message' => 'User profile updated (ID: 4, Sarah Lee)'],
            ['id' => 12, 'time' => '2026-08-16 16:55:40', 'level' => 'NOTICE', 'variant' => 'subtle', 'env' => 'production', 'message' => 'New developer API token generated for Marcus Vance'],
            ['id' => 13, 'time' => '2026-08-16 16:48:19', 'level' => 'ERROR', 'variant' => 'danger', 'env' => 'production', 'message' => 'Failed mail delivery attempt to invalid SMTP host [ConnectionRefused]'],
            ['id' => 14, 'time' => '2026-08-16 16:40:02', 'level' => 'INFO', 'variant' => 'neutral', 'env' => 'production', 'message' => 'Daily backup snapshot created: s3://aura-backups/2026-08-16.sql.gz [84MB]'],
            ['id' => 15, 'time' => '2026-08-16 16:32:55', 'level' => 'INFO', 'variant' => 'neutral', 'env' => 'production', 'message' => 'Two factor authentication enabled for user Alex Kovacs'],
        ]);

        $filtered = $allLogs->filter(function ($log) {
            $matchesSearch = empty($this->search) || 
                str_contains(strtolower($log['message']), strtolower($this->search)) || 
                str_contains(strtolower($log['level']), strtolower($this->search)) ||
                str_contains(strtolower($log['time']), strtolower($this->search));
            
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
        <x-aura::flex align="center" justify="between" gap="4">
            <div>
                <x-aura::kicker>Administration</x-aura::kicker>
                <x-aura::heading level="1" size="lg">System Logs</x-aura::heading>
            </div>
            <x-aura::flex align="center" gap="2">
                <x-aura::button variant="secondary" size="sm">
                    <x-aura::icon name="download" size="xs" />
                    <span>Export</span>
                </x-aura::button>
                <x-aura::button variant="danger" size="sm" x-on:click="$dispatch('open-modal', 'clear-logs-modal')">
                    <x-aura::icon name="trash" size="xs" />
                    <span>Clear</span>
                </x-aura::button>
            </x-aura::flex>
        </x-aura::flex>
    </div>

    <!-- Unified Logs Datatable Card -->
    <x-aura::card>
        <x-slot:header>
            <x-aura::flex align="center" justify="between" gap="3" class="w-full flex-col sm:flex-row">
                <div class="relative w-full sm:w-72">
                    <x-aura::input wire:model.live.debounce.250ms="search" placeholder="Search logs or trace details..." size="sm">
                        <x-slot:icon>
                            <x-aura::icon name="search" size="xs" />
                        </x-slot:icon>
                    </x-aura::input>
                </div>

                <x-aura::flex align="center" gap="2" class="w-full sm:w-auto">
                    <x-aura::select wire:model.live="level" size="sm">
                        <option value="all">All Levels</option>
                        <option value="info">INFO</option>
                        <option value="notice">NOTICE</option>
                        <option value="warning">WARNING</option>
                        <option value="error">ERROR</option>
                        <option value="critical">CRITICAL</option>
                    </x-aura::select>
                </x-aura::flex>
            </x-aura::flex>
        </x-slot:header>

        <x-aura::table borderless="true">
            <x-aura::table.header>
                <x-aura::table.row>
                    <x-aura::table.column>Timestamp</x-aura::table.column>
                    <x-aura::table.column>Level</x-aura::table.column>
                    <x-aura::table.column>Env</x-aura::table.column>
                    <x-aura::table.column>Message</x-aura::table.column>
                    <x-aura::table.column align="right">Actions</x-aura::table.column>
                </x-aura::table.row>
            </x-aura::table.header>
            <x-aura::table.body>
                @forelse ($logs as $log)
                    <x-aura::table.row>
                        <x-aura::table.cell>
                            <x-aura::text variant="mono" size="sm">{{ $log['time'] }}</x-aura::text>
                        </x-aura::table.cell>
                        <x-aura::table.cell>
                            <x-aura::badge :variant="$log['variant']" size="sm">{{ $log['level'] }}</x-aura::badge>
                        </x-aura::table.cell>
                        <x-aura::table.cell>
                            <x-aura::text size="sm">{{ $log['env'] }}</x-aura::text>
                        </x-aura::table.cell>
                        <x-aura::table.cell>
                            <x-aura::text size="sm">{{ $log['message'] }}</x-aura::text>
                        </x-aura::table.cell>
                        <x-aura::table.cell align="right">
                            <x-aura::icon-button icon="show" variant="subtle" size="sm" shape="circle" label="View" href="/admin/logs/show" wire:navigate />
                        </x-aura::table.cell>
                    </x-aura::table.row>
                @empty
                    <x-aura::table.row>
                        <x-aura::table.cell colspan="5">
                            <x-aura::center direction="col" gap="2" class="py-10 text-center">
                                <div class="w-10 h-10 rounded-full bg-zinc-100 dark:bg-zinc-800 text-zinc-500 flex items-center justify-center">
                                    <x-aura::icon name="document-text" size="sm" />
                                </div>
                                <x-aura::heading level="4" size="sm">No logs found</x-aura::heading>
                                <x-aura::text variant="subtle" size="sm">No log events match your search or filter criteria.</x-aura::text>
                            </x-aura::center>
                        </x-aura::table.cell>
                    </x-aura::table.row>
                @endforelse
            </x-aura::table.body>
        </x-aura::table>

        <x-slot:footer>
            <x-aura::flex align="center" justify="between" gap="4" class="w-full flex-col sm:flex-row">
                <div class="text-xs sm:text-sm text-zinc-500 dark:text-zinc-400">
                    Showing <span class="font-bold text-zinc-900 dark:text-white">{{ $totalCount ? (($currentPage - 1) * $perPage) + 1 : 0 }}</span> to <span class="font-bold text-zinc-900 dark:text-white">{{ min($currentPage * $perPage, $totalCount) }}</span> of <span class="font-bold text-zinc-900 dark:text-white">{{ $totalCount }}</span> items
                </div>

                <x-aura::flex align="center" gap="1.5">
                    <button type="button" wire:click="previousPage" @disabled($currentPage <= 1) class="p-1.5 rounded-full text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800 disabled:opacity-40 disabled:cursor-not-allowed transition-colors" aria-label="Previous Page">
                        <x-aura::icon name="chevron-left" size="xs" />
                    </button>

                    @for ($i = 1; $i <= $totalPages; $i++)
                        <button type="button" wire:click="setPage({{ $i }})" class="w-8 h-8 rounded-full text-xs font-semibold transition-all {{ $i === $currentPage ? 'bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 shadow-xs' : 'text-zinc-600 dark:text-zinc-400 hover:bg-zinc-100 dark:hover:bg-zinc-800' }}">
                            {{ $i }}
                        </button>
                    @endfor

                    <button type="button" wire:click="nextPage({{ $totalPages }})" @disabled($currentPage >= $totalPages) class="p-1.5 rounded-full text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800 disabled:opacity-40 disabled:cursor-not-allowed transition-colors" aria-label="Next Page">
                        <x-aura::icon name="chevron-right" size="xs" />
                    </button>
                </x-aura::flex>
            </x-aura::flex>
        </x-slot:footer>
    </x-aura::card>

    <!-- Clear Logs Modal -->
    <x-aura::modal name="clear-logs-modal" variant="centered" maxWidth="sm">
        <x-aura::center direction="col" gap="3" class="text-center">
            <div class="w-12 h-12 rounded-2xl bg-red-100 dark:bg-red-950/60 text-red-600 dark:text-red-400 border border-red-200 dark:border-red-800/60 flex items-center justify-center shrink-0 shadow-xs">
                <x-aura::icon name="trash" size="md" />
            </div>
            
            <div class="space-y-1">
                <h3 class="text-base font-bold text-zinc-900 dark:text-white tracking-tight">Clear System Logs?</h3>
                <p class="text-sm text-zinc-500 dark:text-zinc-400 leading-relaxed">
                    This will clear all cached event stream logs and exception records from active memory. Archived files on disk will not be affected.
                </p>
            </div>
        </x-aura::center>

        <x-slot:footer>
            <div class="grid grid-cols-2 gap-3 w-full">
                <x-aura::button variant="secondary" size="sm" x-on:click="$dispatch('close-modal', 'clear-logs-modal')">
                    Cancel
                </x-aura::button>
                <x-aura::button variant="danger" size="sm" x-on:click="$dispatch('close-modal', 'clear-logs-modal')">
                    Clear
                </x-aura::button>
            </div>
        </x-slot:footer>
    </x-aura::modal>

</div>

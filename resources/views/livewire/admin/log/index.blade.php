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
    public string $sortField = 'time';
    public string $sortDirection = 'desc';
    public int $perPage = 10;
    public int $page = 1;

    public array $selected = [];
    public bool $selectAll = false;

    public array $visibleColumns = [
        'level' => true,
        'env' => true,
        'message' => true,
    ];

    public function updatingSearch(): void
    {
        $this->page = 1;
        $this->resetSelection();
    }

    public function updatingLevel(): void
    {
        $this->page = 1;
        $this->resetSelection();
    }

    public function updatedSelectAll($value): void
    {
        if ($value) {
            $data = $this->with();
            $this->selected = $data['logs']->pluck('id')->map(fn($id) => (string) $id)->toArray();
        } else {
            $this->selected = [];
        }
    }

    public function resetFilters(): void
    {
        $this->reset(['search', 'level']);
        $this->resetSelection();
        $this->page = 1;
    }

    public function resetSelection(): void
    {
        $this->selected = [];
        $this->selectAll = false;
    }

    public function deleteSelected(): void
    {
        // Bulk delete demonstration hook
        $this->resetSelection();
    }

    public function exportSelected(): void
    {
        // Bulk export demonstration hook
    }

    public function sortBy(string $field): void
    {
        if ($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortField = $field;
            $this->sortDirection = 'asc';
        }
        $this->page = 1;
        $this->resetSelection();
    }

    public function setPage(int $pageNumber): void
    {
        $this->page = $pageNumber;
        $this->resetSelection();
    }

    public function nextPage(int $totalPages): void
    {
        if ($this->page < $totalPages) {
            $this->page++;
            $this->resetSelection();
        }
    }

    public function previousPage(): void
    {
        if ($this->page > 1) {
            $this->page--;
            $this->resetSelection();
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

        $sorted = $this->sortDirection === 'desc' 
            ? $filtered->sortByDesc($this->sortField) 
            : $filtered->sortBy($this->sortField);

        $totalCount = $sorted->count();
        $totalPages = max(1, (int) ceil($totalCount / $this->perPage));
        
        if ($this->page > $totalPages) {
            $this->page = $totalPages;
        }

        $paginatedLogs = $sorted->slice(($this->page - 1) * $this->perPage, $this->perPage);

        return [
            'logs' => $paginatedLogs,
            'totalCount' => $totalCount,
            'totalPages' => $totalPages,
            'currentPage' => $this->page,
        ];
    }
};

?>

<x-aura::container size="6xl" gap="3">

    <!-- Top Header -->
    <x-aura::flex align="end" justify="between" gap="4">

        <x-aura::flex direction="col" gap="none" width="auto">

            <x-aura::kicker>
                Administration
            </x-aura::kicker>

            <x-aura::heading level="1" size="lg">
                System Logs
            </x-aura::heading>

        </x-aura::flex>

        <x-aura::flex align="center" justify="end" gap="2" width="auto">

            <x-aura::button variant="secondary" size="sm" icon="download">
                Export
            </x-aura::button>

            <x-aura::button variant="danger" size="sm" icon="trash" x-on:click="$dispatch('open-modal', 'clear-logs-modal')">
                Clear
            </x-aura::button>

        </x-aura::flex>

    </x-aura::flex>

    <!-- Unified Logs Datatable Card -->
    <x-aura::card :divided="false">

        <x-slot:header>

            @if (count($selected) > 0)

                <x-aura::flex align="center" justify="between" gap="3" class="w-full bg-zinc-100/90 dark:bg-zinc-800/90 px-4 py-2 rounded-xl border border-zinc-200/80 dark:border-zinc-700/80">

                    <x-aura::flex align="center" gap="2.5">

                        <x-aura::badge variant="neutral" size="sm">
                            {{ count($selected) }} Selected
                        </x-aura::badge>

                        <x-aura::text variant="subtle" size="sm">
                            of {{ $totalCount }} total
                        </x-aura::text>

                    </x-aura::flex>

                    <x-aura::flex align="center" gap="2">

                        <x-aura::button wire:click="exportSelected" variant="secondary" size="sm" icon="download">
                            Export
                        </x-aura::button>

                        <x-aura::button x-on:click="$dispatch('open-modal', 'bulk-delete-modal')" variant="danger" size="sm" icon="trash">
                            Delete
                        </x-aura::button>

                        <x-aura::button wire:click="resetSelection" variant="ghost" size="sm">
                            Deselect
                        </x-aura::button>

                    </x-aura::flex>

                </x-aura::flex>

            @else

                <x-aura::flex align="center" justify="between" gap="3" :wrap="true" class="w-full">

                    <x-aura::flex align="center" gap="2.5" :wrap="true" class="w-full sm:w-auto">

                        <div class="w-full sm:w-72">
                            <x-aura::input wire:model.live.debounce.250ms="search" placeholder="Search logs..." icon="search" size="sm" />
                        </div>

                        <div class="w-full sm:w-40">
                            <x-aura::select wire:model.live="level" size="sm">
                                <option value="all">All Levels</option>
                                <option value="info">INFO</option>
                                <option value="notice">NOTICE</option>
                                <option value="warning">WARNING</option>
                                <option value="error">ERROR</option>
                                <option value="critical">CRITICAL</option>
                            </x-aura::select>
                        </div>

                        @if ($search !== '' || $level !== 'all')

                            <x-aura::button wire:click="resetFilters" variant="subtle" size="sm" icon="x">
                                Reset
                            </x-aura::button>

                        @endif

                    </x-aura::flex>

                    <div wire:ignore.self class="w-full sm:w-auto flex justify-center sm:justify-end">

                        <x-aura::dropdown align="right" width="48">

                            <x-slot:trigger>

                                <x-aura::button type="button" variant="secondary" size="sm" icon="columns">
                                    Columns
                                </x-aura::button>

                            </x-slot:trigger>

                            <x-aura::dropdown.header>
                                Columns
                            </x-aura::dropdown.header>

                            <x-aura::dropdown.checkbox size="xs" wire:model.live="visibleColumns.level" label="Level" />

                            <x-aura::dropdown.checkbox size="xs" wire:model.live="visibleColumns.env" label="Environment" />

                            <x-aura::dropdown.checkbox size="xs" wire:model.live="visibleColumns.message" label="Message" />

                        </x-aura::dropdown>

                    </div>

                </x-aura::flex>

            @endif

        </x-slot:header>

        <x-aura::table borderless="true">

            <x-aura::table.header>

                <x-aura::table.row>

                    <x-aura::table.column class="w-10">
                        <x-aura::checkbox size="xs" wire:model.live="selectAll" aria-label="Select All" />
                    </x-aura::table.column>

                    <x-aura::table.column nowrap="true" sortable wire:click="sortBy('time')" :sorted="$sortField === 'time' ? $sortDirection : null">
                        Timestamp
                    </x-aura::table.column>

                    @if ($visibleColumns['level'] ?? true)

                        <x-aura::table.column nowrap="true" sortable wire:click="sortBy('level')" :sorted="$sortField === 'level' ? $sortDirection : null">
                            Level
                        </x-aura::table.column>

                    @endif

                    @if ($visibleColumns['env'] ?? true)

                        <x-aura::table.column nowrap="true" sortable wire:click="sortBy('env')" :sorted="$sortField === 'env' ? $sortDirection : null">
                            Environment
                        </x-aura::table.column>

                    @endif

                    @if ($visibleColumns['message'] ?? true)

                        <x-aura::table.column sortable wire:click="sortBy('message')" :sorted="$sortField === 'message' ? $sortDirection : null">
                            Message
                        </x-aura::table.column>

                    @endif

                    <x-aura::table.column nowrap="true" align="right">
                        Action
                    </x-aura::table.column>

                </x-aura::table.row>

            </x-aura::table.header>

            <x-aura::table.body>

                @forelse ($logs as $log)

                    <x-aura::table.row :class="in_array((string)$log['id'], $selected) ? 'bg-zinc-100/60 dark:bg-zinc-800/40' : ''">

                        <x-aura::table.cell class="w-10">
                            <x-aura::checkbox size="xs" wire:model.live="selected" value="{{ (string)$log['id'] }}" aria-label="Select row" />
                        </x-aura::table.cell>

                        <x-aura::table.cell nowrap="true">
                            <x-aura::text variant="mono" size="sm">
                                {{ $log['time'] }}
                            </x-aura::text>
                        </x-aura::table.cell>

                        @if ($visibleColumns['level'] ?? true)

                            <x-aura::table.cell nowrap="true">
                                <x-aura::badge :variant="$log['variant']" size="sm">
                                    {{ $log['level'] }}
                                </x-aura::badge>
                            </x-aura::table.cell>

                        @endif

                        @if ($visibleColumns['env'] ?? true)

                            <x-aura::table.cell nowrap="true">
                                <x-aura::text size="sm">
                                    {{ $log['env'] }}
                                </x-aura::text>
                            </x-aura::table.cell>

                        @endif

                        @if ($visibleColumns['message'] ?? true)

                            <x-aura::table.cell truncate="true">
                                <x-aura::text size="sm" truncate="true">
                                    {{ $log['message'] }}
                                </x-aura::text>
                            </x-aura::table.cell>

                        @endif

                        <x-aura::table.cell nowrap="true" align="right">
                            <x-aura::icon-button icon="show" variant="subtle" size="sm" shape="circle" label="View" href="/admin/logs/show" wire:navigate />
                        </x-aura::table.cell>

                    </x-aura::table.row>

                @empty

                    <x-aura::table.row>

                        <x-aura::table.cell :colspan="3 + count(array_filter($visibleColumns))">

                            <x-aura::empty-state 
                                icon="document-text" 
                                title="No logs found" 
                                description="No log events match your search or filter criteria." 
                            />

                        </x-aura::table.cell>

                    </x-aura::table.row>

                @endforelse

            </x-aura::table.body>

        </x-aura::table>

        <x-slot:footer>

            <x-aura::pagination 
                :page="$currentPage" 
                :totalPages="$totalPages" 
                :total="$totalCount" 
                :perPage="$perPage" 
            />

        </x-slot:footer>

    </x-aura::card>

    <!-- Clear Logs Modal -->
    <x-aura::modal 
        name="clear-logs-modal" 
        variant="danger" 
        centered="true"
        icon="trash"
        title="Clear System Logs?" 
        description="This will clear all cached event stream logs and exception records from active memory. Archived files on disk will not be affected."
        maxWidth="sm"
    >

        <x-slot:footer>

            <x-aura::grid cols="2" gap="3" class="w-full">

                <x-aura::button variant="secondary" size="sm" block="true" x-on:click="$dispatch('close-modal', 'clear-logs-modal')">
                    Cancel
                </x-aura::button>

                <x-aura::button variant="danger" size="sm" block="true" x-on:click="$dispatch('close-modal', 'clear-logs-modal')">
                    Clear
                </x-aura::button>

            </x-aura::grid>

        </x-slot:footer>

    </x-aura::modal>

    <!-- Bulk Delete Confirmation Modal -->
    <x-aura::modal 
        name="bulk-delete-modal" 
        variant="danger" 
        centered="true"
        icon="trash"
        title="Delete Selected Logs?" 
        description="This action will permanently delete all selected log events. This cannot be undone."
        maxWidth="sm"
    >

        <x-slot:footer>

            <x-aura::grid cols="2" gap="3" class="w-full">

                <x-aura::button variant="secondary" size="sm" block="true" x-on:click="$dispatch('close-modal', 'bulk-delete-modal')">
                    Cancel
                </x-aura::button>

                <x-aura::button variant="danger" size="sm" block="true" wire:click="deleteSelected" x-on:click="$dispatch('close-modal', 'bulk-delete-modal')">
                    Delete
                </x-aura::button>

            </x-aura::grid>

        </x-slot:footer>

    </x-aura::modal>

</x-aura::container>

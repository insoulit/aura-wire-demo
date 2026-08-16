<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\WithPagination;

new 
#[Layout('livewire.layout.admin')] 
#[Title('User Management — Admin Panel | Aura Wire')] 
class extends Component {
    use WithPagination;

    public string $search = '';
    public string $role = 'all';
    public string $status = 'all';
    public string $sortField = 'name';
    public string $sortDirection = 'asc';
    public int $perPage = 6;
    public int $page = 1;

    public array $selected = [];
    public bool $selectAll = false;

    public array $visibleColumns = [
        'role' => true,
        'status' => true,
        'joined' => true,
    ];

    public function updatingSearch(): void
    {
        $this->page = 1;
        $this->resetSelection();
    }

    public function updatingRole(): void
    {
        $this->page = 1;
        $this->resetSelection();
    }

    public function updatingStatus(): void
    {
        $this->page = 1;
        $this->resetSelection();
    }

    public function updatedSelectAll($value): void
    {
        if ($value) {
            $data = $this->with();
            $this->selected = $data['users']->pluck('id')->map(fn($id) => (string) $id)->toArray();
        } else {
            $this->selected = [];
        }
    }

    public function resetFilters(): void
    {
        $this->reset(['search', 'role', 'status']);
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

    public function deleteUser(int $id): void
    {
        // Demonstration hook
    }

    public function with(): array
    {
        $allUsers = collect([
            ['id' => 1, 'name' => 'Alex Kovacs', 'email' => 'alex.k@example.com', 'initials' => 'AK', 'role' => 'admin', 'role_label' => 'Admin', 'status' => 'Active', 'joined' => '2026-08-01'],
            ['id' => 2, 'name' => 'Jane Doe', 'email' => 'jane.doe@example.com', 'initials' => 'JD', 'role' => 'dev', 'role_label' => 'Developer', 'status' => 'Active', 'joined' => '2026-07-28'],
            ['id' => 3, 'name' => 'Marcus Smith', 'email' => 'marcus@example.com', 'initials' => 'MS', 'role' => 'member', 'role_label' => 'Member', 'status' => 'Pending', 'joined' => '2026-07-15'],
            ['id' => 4, 'name' => 'Sarah Lee', 'email' => 'sarah.lee@example.com', 'initials' => 'SL', 'role' => 'member', 'role_label' => 'Member', 'status' => 'Inactive', 'joined' => '2026-06-10'],
            ['id' => 5, 'name' => 'David Chen', 'email' => 'david.chen@example.com', 'initials' => 'DC', 'role' => 'dev', 'role_label' => 'Developer', 'status' => 'Active', 'joined' => '2026-06-02'],
            ['id' => 6, 'name' => 'Emily Watson', 'email' => 'emily.w@example.com', 'initials' => 'EW', 'role' => 'admin', 'role_label' => 'Admin', 'status' => 'Active', 'joined' => '2026-05-25'],
            ['id' => 7, 'name' => 'Michael Brown', 'email' => 'michael.b@example.com', 'initials' => 'MB', 'role' => 'member', 'role_label' => 'Member', 'status' => 'Active', 'joined' => '2026-05-18'],
            ['id' => 8, 'name' => 'Sophia Martinez', 'email' => 'sophia.m@example.com', 'initials' => 'SM', 'role' => 'dev', 'role_label' => 'Developer', 'status' => 'Pending', 'joined' => '2026-05-10'],
            ['id' => 9, 'name' => 'James Wilson', 'email' => 'james.w@example.com', 'initials' => 'JW', 'role' => 'member', 'role_label' => 'Member', 'status' => 'Active', 'joined' => '2026-04-30'],
            ['id' => 10, 'name' => 'Olivia Taylor', 'email' => 'olivia.t@example.com', 'initials' => 'OT', 'role' => 'admin', 'role_label' => 'Admin', 'status' => 'Active', 'joined' => '2026-04-22'],
            ['id' => 11, 'name' => 'Liam Anderson', 'email' => 'liam.a@example.com', 'initials' => 'LA', 'role' => 'dev', 'role_label' => 'Developer', 'status' => 'Active', 'joined' => '2026-04-15'],
            ['id' => 12, 'name' => 'Emma Thomas', 'email' => 'emma.t@example.com', 'initials' => 'ET', 'role' => 'member', 'role_label' => 'Member', 'status' => 'Inactive', 'joined' => '2026-04-05'],
            ['id' => 13, 'name' => 'Noah Jackson', 'email' => 'noah.j@example.com', 'initials' => 'NJ', 'role' => 'dev', 'role_label' => 'Developer', 'status' => 'Active', 'joined' => '2026-03-29'],
            ['id' => 14, 'name' => 'Ava White', 'email' => 'ava.w@example.com', 'initials' => 'AW', 'role' => 'member', 'role_label' => 'Member', 'status' => 'Active', 'joined' => '2026-03-20'],
            ['id' => 15, 'name' => 'Ethan Harris', 'email' => 'ethan.h@example.com', 'initials' => 'EH', 'role' => 'admin', 'role_label' => 'Admin', 'status' => 'Active', 'joined' => '2026-03-12'],
            ['id' => 16, 'name' => 'Isabella Martin', 'email' => 'isabella.m@example.com', 'initials' => 'IM', 'role' => 'member', 'role_label' => 'Member', 'status' => 'Pending', 'joined' => '2026-03-01'],
            ['id' => 17, 'name' => 'Lucas Thompson', 'email' => 'lucas.t@example.com', 'initials' => 'LT', 'role' => 'dev', 'role_label' => 'Developer', 'status' => 'Active', 'joined' => '2026-02-22'],
            ['id' => 18, 'name' => 'Mia Garcia', 'email' => 'mia.g@example.com', 'initials' => 'MG', 'role' => 'member', 'role_label' => 'Member', 'status' => 'Active', 'joined' => '2026-02-14'],
            ['id' => 19, 'name' => 'Benjamin Robinson', 'email' => 'benjamin.r@example.com', 'initials' => 'BR', 'role' => 'admin', 'role_label' => 'Admin', 'status' => 'Active', 'joined' => '2026-02-05'],
            ['id' => 20, 'name' => 'Charlotte Clark', 'email' => 'charlotte.c@example.com', 'initials' => 'CC', 'role' => 'dev', 'role_label' => 'Developer', 'status' => 'Active', 'joined' => '2026-01-28'],
            ['id' => 21, 'name' => 'Alexander Rodriguez', 'email' => 'alexander.r@example.com', 'initials' => 'AR', 'role' => 'member', 'role_label' => 'Member', 'status' => 'Inactive', 'joined' => '2026-01-20'],
            ['id' => 22, 'name' => 'Amelia Lewis', 'email' => 'amelia.l@example.com', 'initials' => 'AL', 'role' => 'dev', 'role_label' => 'Developer', 'status' => 'Active', 'joined' => '2026-01-12'],
            ['id' => 23, 'name' => 'Henry Lee', 'email' => 'henry.l@example.com', 'initials' => 'HL', 'role' => 'member', 'role_label' => 'Member', 'status' => 'Active', 'joined' => '2026-01-04'],
            ['id' => 24, 'name' => 'Harper Walker', 'email' => 'harper.w@example.com', 'initials' => 'HW', 'role' => 'admin', 'role_label' => 'Admin', 'status' => 'Active', 'joined' => '2025-12-28'],
            ['id' => 25, 'name' => 'Sebastian Hall', 'email' => 'sebastian.h@example.com', 'initials' => 'SH', 'role' => 'dev', 'role_label' => 'Developer', 'status' => 'Pending', 'joined' => '2025-12-18'],
            ['id' => 26, 'name' => 'Evelyn Allen', 'email' => 'evelyn.a@example.com', 'initials' => 'EA', 'role' => 'member', 'role_label' => 'Member', 'status' => 'Active', 'joined' => '2025-12-10'],
            ['id' => 27, 'name' => 'Jack Young', 'email' => 'jack.y@example.com', 'initials' => 'JY', 'role' => 'dev', 'role_label' => 'Developer', 'status' => 'Active', 'joined' => '2025-12-01'],
            ['id' => 28, 'name' => 'Abigail King', 'email' => 'abigail.k@example.com', 'initials' => 'AK', 'role' => 'member', 'role_label' => 'Member', 'status' => 'Inactive', 'joined' => '2025-11-22'],
            ['id' => 29, 'name' => 'Owen Wright', 'email' => 'owen.w@example.com', 'initials' => 'OW', 'role' => 'admin', 'role_label' => 'Admin', 'status' => 'Active', 'joined' => '2025-11-15'],
            ['id' => 30, 'name' => 'Ella Scott', 'email' => 'ella.s@example.com', 'initials' => 'ES', 'role' => 'member', 'role_label' => 'Member', 'status' => 'Active', 'joined' => '2025-11-05'],
        ]);

        $filtered = $allUsers->filter(function ($user) {
            $matchesSearch = empty($this->search) || 
                str_contains(strtolower($user['name']), strtolower($this->search)) || 
                str_contains(strtolower($user['email']), strtolower($this->search));
            
            $matchesRole = $this->role === 'all' || $user['role'] === $this->role;
            $matchesStatus = $this->status === 'all' || $user['status'] === $this->status;

            return $matchesSearch && $matchesRole && $matchesStatus;
        });

        $sorted = $this->sortDirection === 'desc' 
            ? $filtered->sortByDesc($this->sortField) 
            : $filtered->sortBy($this->sortField);

        $totalCount = $sorted->count();
        $totalPages = max(1, (int) ceil($totalCount / $this->perPage));
        
        if ($this->page > $totalPages) {
            $this->page = $totalPages;
        }

        $paginatedUsers = $sorted->slice(($this->page - 1) * $this->perPage, $this->perPage);

        return [
            'users' => $paginatedUsers,
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
                <x-aura::heading level="1" size="lg">Users</x-aura::heading>
            </div>
            <x-aura::flex align="center" gap="2">
                <x-aura::button variant="secondary" size="sm">
                    <x-aura::icon name="download" size="xs" />
                    <span>Export</span>
                </x-aura::button>
                <x-aura::button href="/admin/users/create" wire:navigate variant="primary" size="sm">
                    <x-aura::icon name="plus" size="xs" />
                    <span>Create</span>
                </x-aura::button>
            </x-aura::flex>
        </x-aura::flex>
    </div>

    <!-- Ultra Clean Unified Table Card -->
    <x-aura::card :divided="false">
        <x-slot:header>
            @if (count($selected) > 0)
                <x-aura::flex align="center" justify="between" gap="3" class="w-full bg-zinc-100/90 dark:bg-zinc-800/90 px-4 py-2 rounded-xl border border-zinc-200/80 dark:border-zinc-700/80">
                    <x-aura::flex align="center" gap="2.5">
                        <x-aura::badge variant="neutral" size="sm">
                            {{ count($selected) }} Selected
                        </x-aura::badge>
                        <x-aura::text variant="subtle" size="sm">of {{ $totalCount }} total</x-aura::text>
                    </x-aura::flex>

                    <x-aura::flex align="center" gap="2">
                        <x-aura::button wire:click="exportSelected" variant="secondary" size="sm">
                            <x-aura::icon name="download" size="xs" />
                            <span>Export</span>
                        </x-aura::button>
                        <x-aura::button x-on:click="$dispatch('open-modal', 'bulk-delete-modal')" variant="danger" size="sm">
                            <x-aura::icon name="trash" size="xs" />
                            <span>Delete</span>
                        </x-aura::button>
                        <x-aura::button wire:click="resetSelection" variant="ghost" size="sm">
                            <span>Deselect</span>
                        </x-aura::button>
                    </x-aura::flex>
                </x-aura::flex>
            @else
                <x-aura::flex align="center" justify="between" gap="3" :wrap="true" class="w-full">
                    <x-aura::flex align="center" gap="2.5" :wrap="true" class="w-full sm:w-auto">
                        <div class="w-full sm:w-60">
                            <x-aura::input wire:model.live.debounce.250ms="search" placeholder="Search users..." icon="search" size="sm" />
                        </div>
                        <div class="w-full sm:w-36">
                            <x-aura::select wire:model.live="role" size="sm">
                                <option value="all">All Roles</option>
                                <option value="admin">Admins</option>
                                <option value="dev">Developers</option>
                                <option value="member">Members</option>
                            </x-aura::select>
                        </div>
                        <div class="w-full sm:w-36">
                            <x-aura::select wire:model.live="status" size="sm">
                                <option value="all">All Statuses</option>
                                <option value="Active">Active</option>
                                <option value="Pending">Pending</option>
                                <option value="Inactive">Inactive</option>
                            </x-aura::select>
                        </div>

                        @if ($search !== '' || $role !== 'all' || $status !== 'all')
                            <x-aura::button wire:click="resetFilters" variant="subtle" size="sm">
                                <x-aura::icon name="x" size="xs" />
                                <span>Reset</span>
                            </x-aura::button>
                        @endif
                    </x-aura::flex>

                    <div wire:ignore.self class="w-full sm:w-auto flex justify-center sm:justify-end">
                        <x-aura::dropdown align="right" width="48">
                            <x-slot:trigger>
                                <x-aura::button type="button" variant="secondary" size="sm">
                                    <x-aura::icon name="columns" size="xs" />
                                    <span>Columns</span>
                                </x-aura::button>
                            </x-slot:trigger>

                            <x-aura::dropdown.header>Columns</x-aura::dropdown.header>
                            <x-aura::dropdown.checkbox size="xs" wire:model.live="visibleColumns.role" label="Role" />
                            <x-aura::dropdown.checkbox size="xs" wire:model.live="visibleColumns.status" label="Status" />
                            <x-aura::dropdown.checkbox size="xs" wire:model.live="visibleColumns.joined" label="Joined Date" />
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
                    <x-aura::table.column sortable wire:click="sortBy('name')" :sorted="$sortField === 'name' ? $sortDirection : null">User</x-aura::table.column>
                    @if ($visibleColumns['role'] ?? true)
                        <x-aura::table.column sortable wire:click="sortBy('role')" :sorted="$sortField === 'role' ? $sortDirection : null">Role</x-aura::table.column>
                    @endif
                    @if ($visibleColumns['status'] ?? true)
                        <x-aura::table.column sortable wire:click="sortBy('status')" :sorted="$sortField === 'status' ? $sortDirection : null">Status</x-aura::table.column>
                    @endif
                    @if ($visibleColumns['joined'] ?? true)
                        <x-aura::table.column sortable wire:click="sortBy('joined')" :sorted="$sortField === 'joined' ? $sortDirection : null">Joined Date</x-aura::table.column>
                    @endif
                    <x-aura::table.column align="right">Actions</x-aura::table.column>
                </x-aura::table.row>
            </x-aura::table.header>
            <x-aura::table.body>
                @forelse ($users as $user)
                    <x-aura::table.row :class="in_array((string)$user['id'], $selected) ? 'bg-zinc-100/60 dark:bg-zinc-800/40' : ''">
                        <x-aura::table.cell class="w-10">
                            <x-aura::checkbox size="xs" wire:model.live="selected" value="{{ (string)$user['id'] }}" aria-label="Select row" />
                        </x-aura::table.cell>
                        <x-aura::table.cell>
                            <x-aura::flex align="center" gap="3">
                                <x-aura::avatar :initials="$user['initials']" size="sm" />
                                <div>
                                    <x-aura::heading level="3" size="xs">{{ $user['name'] }}</x-aura::heading>
                                    <x-aura::text variant="subtle" size="sm">{{ $user['email'] }}</x-aura::text>
                                </div>
                            </x-aura::flex>
                        </x-aura::table.cell>
                        @if ($visibleColumns['role'] ?? true)
                            <x-aura::table.cell>
                                <x-aura::badge :variant="$user['role'] === 'admin' ? 'neutral' : 'subtle'" size="sm">
                                    {{ $user['role_label'] }}
                                </x-aura::badge>
                            </x-aura::table.cell>
                        @endif
                        @if ($visibleColumns['status'] ?? true)
                            <x-aura::table.cell>
                                <x-aura::badge :variant="$user['status'] === 'Active' ? 'neutral' : 'subtle'" size="sm">
                                    {{ $user['status'] }}
                                </x-aura::badge>
                            </x-aura::table.cell>
                        @endif
                        @if ($visibleColumns['joined'] ?? true)
                            <x-aura::table.cell>
                                <x-aura::text size="sm">{{ $user['joined'] }}</x-aura::text>
                            </x-aura::table.cell>
                        @endif
                        <x-aura::table.cell align="right">
                            <x-aura::flex align="center" justify="end" gap="1.5">
                                <x-aura::icon-button icon="show" variant="subtle" size="sm" shape="circle" label="View" href="/admin/users/show?id={{ $user['id'] }}" wire:navigate />
                                <x-aura::icon-button icon="edit" variant="subtle" size="sm" shape="circle" label="Edit" href="/admin/users/edit?id={{ $user['id'] }}" wire:navigate />
                                <x-aura::icon-button icon="delete" variant="subtle-danger" size="sm" shape="circle" label="Delete" x-on:click="$dispatch('open-modal', 'delete-user-modal')" />
                            </x-aura::flex>
                        </x-aura::table.cell>
                    </x-aura::table.row>
                @empty
                    <x-aura::table.row>
                        <x-aura::table.cell :colspan="3 + count(array_filter($visibleColumns))">
                            <x-aura::empty-state 
                                icon="users" 
                                title="No users found" 
                                description="No user accounts match your search or filter criteria." 
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

    <!-- Delete Single User Confirmation Modal -->
    <x-aura::modal 
        name="delete-user-modal" 
        variant="danger" 
        centered="true"
        icon="trash"
        title="Delete User Account?" 
        description="This action will permanently delete this user profile, active sessions, and permissions. This cannot be undone."
        maxWidth="sm"
    >
        <x-slot:footer>
            <div class="grid grid-cols-2 gap-3 w-full">
                <x-aura::button variant="secondary" size="sm" block="true" x-on:click="$dispatch('close-modal', 'delete-user-modal')">
                    Cancel
                </x-aura::button>
                <x-aura::button variant="danger" size="sm" block="true" x-on:click="$dispatch('close-modal', 'delete-user-modal')">
                    Delete
                </x-aura::button>
            </div>
        </x-slot:footer>
    </x-aura::modal>

    <!-- Bulk Delete Confirmation Modal -->
    <x-aura::modal 
        name="bulk-delete-modal" 
        variant="danger" 
        centered="true"
        icon="trash"
        title="Delete Selected Users?" 
        description="This action will permanently delete all selected user accounts, active sessions, and permissions. This cannot be undone."
        maxWidth="sm"
    >
        <x-slot:footer>
            <div class="grid grid-cols-2 gap-3 w-full">
                <x-aura::button variant="secondary" size="sm" block="true" x-on:click="$dispatch('close-modal', 'bulk-delete-modal')">
                    Cancel
                </x-aura::button>
                <x-aura::button variant="danger" size="sm" block="true" wire:click="deleteSelected" x-on:click="$dispatch('close-modal', 'bulk-delete-modal')">
                    Delete
                </x-aura::button>
            </div>
        </x-slot:footer>
    </x-aura::modal>

</div>

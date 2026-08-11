<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.admin')] 
#[Title('User Management — Admin Panel | Aura Wire')] 
class extends Component {
    public string $search = '';
    public string $role = 'all';
    public int $page = 1;
    public int $perPage = 8;

    public function updatedSearch(): void
    {
        $this->page = 1;
    }

    public function updatedRole(): void
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
        $allUsers = collect([
            ['id' => 1, 'name' => 'Alex Kovacs', 'email' => 'alex.k@example.com', 'initials' => 'AK', 'role' => 'admin', 'role_label' => 'Admin', 'role_variant' => 'positive', 'status' => 'Active', 'status_variant' => 'neutral', 'joined' => '2026-08-01'],
            ['id' => 2, 'name' => 'Jane Doe', 'email' => 'jane.doe@example.com', 'initials' => 'JD', 'role' => 'dev', 'role_label' => 'Developer', 'role_variant' => 'neutral', 'status' => 'Active', 'status_variant' => 'neutral', 'joined' => '2026-07-28'],
            ['id' => 3, 'name' => 'Marcus Smith', 'email' => 'marcus@example.com', 'initials' => 'MS', 'role' => 'member', 'role_label' => 'Member', 'role_variant' => 'neutral', 'status' => 'Pending', 'status_variant' => 'subtle', 'joined' => '2026-07-15'],
            ['id' => 4, 'name' => 'Sarah Lee', 'email' => 'sarah.lee@example.com', 'initials' => 'SL', 'role' => 'member', 'role_label' => 'Member', 'role_variant' => 'neutral', 'status' => 'Inactive', 'status_variant' => 'subtle', 'joined' => '2026-06-10'],
            ['id' => 5, 'name' => 'David Chen', 'email' => 'david.chen@example.com', 'initials' => 'DC', 'role' => 'dev', 'role_label' => 'Developer', 'role_variant' => 'neutral', 'status' => 'Active', 'status_variant' => 'neutral', 'joined' => '2026-06-02'],
            ['id' => 6, 'name' => 'Emily Watson', 'email' => 'emily.w@example.com', 'initials' => 'EW', 'role' => 'admin', 'role_label' => 'Admin', 'role_variant' => 'positive', 'status' => 'Active', 'status_variant' => 'neutral', 'joined' => '2026-05-25'],
            ['id' => 7, 'name' => 'Michael Brown', 'email' => 'michael.b@example.com', 'initials' => 'MB', 'role' => 'member', 'role_label' => 'Member', 'role_variant' => 'neutral', 'status' => 'Active', 'status_variant' => 'neutral', 'joined' => '2026-05-18'],
            ['id' => 8, 'name' => 'Sophia Martinez', 'email' => 'sophia.m@example.com', 'initials' => 'SM', 'role' => 'dev', 'role_label' => 'Developer', 'role_variant' => 'neutral', 'status' => 'Pending', 'status_variant' => 'subtle', 'joined' => '2026-05-10'],
            ['id' => 9, 'name' => 'James Wilson', 'email' => 'james.w@example.com', 'initials' => 'JW', 'role' => 'member', 'role_label' => 'Member', 'role_variant' => 'neutral', 'status' => 'Active', 'status_variant' => 'neutral', 'joined' => '2026-04-30'],
            ['id' => 10, 'name' => 'Olivia Taylor', 'email' => 'olivia.t@example.com', 'initials' => 'OT', 'role' => 'admin', 'role_label' => 'Admin', 'role_variant' => 'positive', 'status' => 'Active', 'status_variant' => 'neutral', 'joined' => '2026-04-22'],
            ['id' => 11, 'name' => 'Liam Anderson', 'email' => 'liam.a@example.com', 'initials' => 'LA', 'role' => 'dev', 'role_label' => 'Developer', 'role_variant' => 'neutral', 'status' => 'Active', 'status_variant' => 'neutral', 'joined' => '2026-04-15'],
            ['id' => 12, 'name' => 'Emma Thomas', 'email' => 'emma.t@example.com', 'initials' => 'ET', 'role' => 'member', 'role_label' => 'Member', 'role_variant' => 'neutral', 'status' => 'Inactive', 'status_variant' => 'subtle', 'joined' => '2026-04-05'],
            ['id' => 13, 'name' => 'Noah Jackson', 'email' => 'noah.j@example.com', 'initials' => 'NJ', 'role' => 'dev', 'role_label' => 'Developer', 'role_variant' => 'neutral', 'status' => 'Active', 'status_variant' => 'neutral', 'joined' => '2026-03-29'],
            ['id' => 14, 'name' => 'Ava White', 'email' => 'ava.w@example.com', 'initials' => 'AW', 'role' => 'member', 'role_label' => 'Member', 'role_variant' => 'neutral', 'status' => 'Active', 'status_variant' => 'neutral', 'joined' => '2026-03-20'],
            ['id' => 15, 'name' => 'Ethan Harris', 'email' => 'ethan.h@example.com', 'initials' => 'EH', 'role' => 'admin', 'role_label' => 'Admin', 'role_variant' => 'positive', 'status' => 'Active', 'status_variant' => 'neutral', 'joined' => '2026-03-12'],
            ['id' => 16, 'name' => 'Isabella Martin', 'email' => 'isabella.m@example.com', 'initials' => 'IM', 'role' => 'member', 'role_label' => 'Member', 'role_variant' => 'neutral', 'status' => 'Pending', 'status_variant' => 'subtle', 'joined' => '2026-03-01'],
            ['id' => 17, 'name' => 'Lucas Thompson', 'email' => 'lucas.t@example.com', 'initials' => 'LT', 'role' => 'dev', 'role_label' => 'Developer', 'role_variant' => 'neutral', 'status' => 'Active', 'status_variant' => 'neutral', 'joined' => '2026-02-22'],
            ['id' => 18, 'name' => 'Mia Garcia', 'email' => 'mia.g@example.com', 'initials' => 'MG', 'role' => 'member', 'role_label' => 'Member', 'role_variant' => 'neutral', 'status' => 'Active', 'status_variant' => 'neutral', 'joined' => '2026-02-14'],
            ['id' => 19, 'name' => 'Benjamin Robinson', 'email' => 'benjamin.r@example.com', 'initials' => 'BR', 'role' => 'admin', 'role_label' => 'Admin', 'role_variant' => 'positive', 'status' => 'Active', 'status_variant' => 'neutral', 'joined' => '2026-02-05'],
            ['id' => 20, 'name' => 'Charlotte Clark', 'email' => 'charlotte.c@example.com', 'initials' => 'CC', 'role' => 'dev', 'role_label' => 'Developer', 'role_variant' => 'neutral', 'status' => 'Active', 'status_variant' => 'neutral', 'joined' => '2026-01-28'],
            ['id' => 21, 'name' => 'Alexander Rodriguez', 'email' => 'alexander.r@example.com', 'initials' => 'AR', 'role' => 'member', 'role_label' => 'Member', 'role_variant' => 'neutral', 'status' => 'Inactive', 'status_variant' => 'subtle', 'joined' => '2026-01-20'],
            ['id' => 22, 'name' => 'Amelia Lewis', 'email' => 'amelia.l@example.com', 'initials' => 'AL', 'role' => 'dev', 'role_label' => 'Developer', 'role_variant' => 'neutral', 'status' => 'Active', 'status_variant' => 'neutral', 'joined' => '2026-01-12'],
            ['id' => 23, 'name' => 'Henry Lee', 'email' => 'henry.l@example.com', 'initials' => 'HL', 'role' => 'member', 'role_label' => 'Member', 'role_variant' => 'neutral', 'status' => 'Active', 'status_variant' => 'neutral', 'joined' => '2026-01-04'],
            ['id' => 24, 'name' => 'Harper Walker', 'email' => 'harper.w@example.com', 'initials' => 'HW', 'role' => 'admin', 'role_label' => 'Admin', 'role_variant' => 'positive', 'status' => 'Active', 'status_variant' => 'neutral', 'joined' => '2025-12-28'],
            ['id' => 25, 'name' => 'Sebastian Hall', 'email' => 'sebastian.h@example.com', 'initials' => 'SH', 'role' => 'dev', 'role_label' => 'Developer', 'role_variant' => 'neutral', 'status' => 'Pending', 'status_variant' => 'subtle', 'joined' => '2025-12-18'],
            ['id' => 26, 'name' => 'Evelyn Allen', 'email' => 'evelyn.a@example.com', 'initials' => 'EA', 'role' => 'member', 'role_label' => 'Member', 'role_variant' => 'neutral', 'status' => 'Active', 'status_variant' => 'neutral', 'joined' => '2025-12-10'],
            ['id' => 27, 'name' => 'Jack Young', 'email' => 'jack.y@example.com', 'initials' => 'JY', 'role' => 'dev', 'role_label' => 'Developer', 'role_variant' => 'neutral', 'status' => 'Active', 'status_variant' => 'neutral', 'joined' => '2025-12-01'],
            ['id' => 28, 'name' => 'Abigail King', 'email' => 'abigail.k@example.com', 'initials' => 'AK', 'role' => 'member', 'role_label' => 'Member', 'role_variant' => 'neutral', 'status' => 'Inactive', 'status_variant' => 'subtle', 'joined' => '2025-11-22'],
            ['id' => 29, 'name' => 'Owen Wright', 'email' => 'owen.w@example.com', 'initials' => 'OW', 'role' => 'admin', 'role_label' => 'Admin', 'role_variant' => 'positive', 'status' => 'Active', 'status_variant' => 'neutral', 'joined' => '2025-11-15'],
            ['id' => 30, 'name' => 'Ella Scott', 'email' => 'ella.s@example.com', 'initials' => 'ES', 'role' => 'member', 'role_label' => 'Member', 'role_variant' => 'neutral', 'status' => 'Active', 'status_variant' => 'neutral', 'joined' => '2025-11-05'],
        ]);

        $filtered = $allUsers->filter(function ($user) {
            $matchesSearch = empty($this->search) || 
                str_contains(strtolower($user['name']), strtolower($this->search)) || 
                str_contains(strtolower($user['email']), strtolower($this->search));
            
            $matchesRole = $this->role === 'all' || $user['role'] === $this->role;

            return $matchesSearch && $matchesRole;
        });

        $totalCount = $filtered->count();
        $totalPages = max(1, (int) ceil($totalCount / $this->perPage));
        
        if ($this->page > $totalPages) {
            $this->page = $totalPages;
        }

        $paginatedUsers = $filtered->slice(($this->page - 1) * $this->perPage, $this->perPage);

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
        <div class="flex items-center justify-between gap-4">
            <div>
                <x-aura::kicker>Administration</x-aura::kicker>
                <x-aura::heading level="1" size="lg">User Management</x-aura::heading>
            </div>
            <x-aura::button href="/admin/users/create" wire:navigate variant="primary" size="sm" class="shrink-0 gap-1">
                <x-aura::icon name="plus" class="w-3.5 h-3.5 shrink-0" />
                <span>Create</span>
            </x-aura::button>
        </div>
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
                <x-aura::badge variant="neutral" size="sm">{{ $totalCount }} Registered Account{{ $totalCount === 1 ? '' : 's' }}</x-aura::badge>
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
                @forelse ($users as $user)
                    <x-aura::table.row>
                        <x-aura::table.cell>
                            <div class="flex items-center gap-3">
                                <x-aura::avatar :initials="$user['initials']" size="sm" />
                                <div>
                                    <x-aura::heading level="3" size="xs" class="font-semibold text-zinc-900 dark:text-white">{{ $user['name'] }}</x-aura::heading>
                                    <x-aura::text variant="subtle" size="xs">{{ $user['email'] }}</x-aura::text>
                                </div>
                            </div>
                        </x-aura::table.cell>
                        <x-aura::table.cell><x-aura::badge :variant="$user['role_variant']" size="sm">{{ $user['role_label'] }}</x-aura::badge></x-aura::table.cell>
                        <x-aura::table.cell><x-aura::badge :variant="$user['status_variant']" size="sm">{{ $user['status'] }}</x-aura::badge></x-aura::table.cell>
                        <x-aura::table.cell class="text-xs text-zinc-500">{{ $user['joined'] }}</x-aura::table.cell>
                        <x-aura::table.cell class="text-right">
                            <div class="flex items-center justify-end gap-1.5">
                                <x-aura::icon-button icon="show" variant="subtle" size="sm" shape="circle" label="View User" href="/admin/users/show" wire:navigate />
                                <x-aura::icon-button icon="edit" variant="subtle" size="sm" shape="circle" label="Edit User" href="/admin/users/edit" wire:navigate />
                                <x-aura::icon-button icon="delete" variant="subtle-danger" size="sm" shape="circle" label="Delete User" x-on:click="$dispatch('open-modal', 'delete-user-modal')" />
                            </div>
                        </x-aura::table.cell>
                    </x-aura::table.row>
                @empty
                    <x-aura::table.row>
                        <x-aura::table.cell colspan="5" class="text-center py-8 text-zinc-500 dark:text-zinc-400">
                            No registered user accounts match your filter criteria.
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

    <!-- Delete Confirmation Modal -->
    <x-aura::modal name="delete-user-modal" variant="centered" maxWidth="sm">
        <div class="flex flex-col items-center text-center space-y-3">
            <div class="w-12 h-12 rounded-2xl bg-red-100 dark:bg-red-950/60 text-red-600 dark:text-red-400 border border-red-200 dark:border-red-800/60 flex items-center justify-center shrink-0 shadow-xs">
                <x-aura::icon name="trash" class="w-6 h-6" />
            </div>
            
            <div class="space-y-1">
                <h3 class="text-base font-bold text-zinc-900 dark:text-white tracking-tight">Delete User Account?</h3>
                <p class="text-xs text-zinc-500 dark:text-zinc-400 leading-relaxed">
                    This action will permanently delete this user profile, active sessions, and permissions. This cannot be undone.
                </p>
            </div>
        </div>

        <x-slot:footer>
            <div class="grid grid-cols-2 gap-3 w-full">
                <x-aura::button variant="secondary" size="sm" class="w-full justify-center" x-on:click="$dispatch('close-modal', 'delete-user-modal')">
                    Cancel
                </x-aura::button>
                <x-aura::button variant="danger" size="sm" class="w-full justify-center" x-on:click="$dispatch('close-modal', 'delete-user-modal')">
                    Delete
                </x-aura::button>
            </div>
        </x-slot:footer>
    </x-aura::modal>

</div>

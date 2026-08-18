<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Table - Aura Wire')] 
class extends Component {
    public function with(): array
    {
        return [
            'users' => [
                [
                    'name' => 'Alex Morgan',
                    'email' => 'alex.morgan@example.com',
                    'role' => 'Lead Frontend Engineer',
                    'department' => 'Engineering',
                    'status' => 'Active',
                    'avatar' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=100&auto=format&fit=crop&q=80',
                ],
                [
                    'name' => 'Sarah Chen',
                    'email' => 'sarah.chen@example.com',
                    'role' => 'Senior UI/UX Designer',
                    'department' => 'Design',
                    'status' => 'Active',
                    'avatar' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=100&auto=format&fit=crop&q=80',
                ],
                [
                    'name' => 'Marcus Vance',
                    'email' => 'marcus.vance@example.com',
                    'role' => 'DevOps Architect',
                    'department' => 'Infrastructure',
                    'status' => 'Offline',
                    'avatar' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100&auto=format&fit=crop&q=80',
                ],
                [
                    'name' => 'Elena Rostova',
                    'email' => 'elena.r@example.com',
                    'role' => 'Product Manager',
                    'department' => 'Product',
                    'status' => 'Away',
                    'avatar' => 'https://images.unsplash.com/photo-1517841905240-472988babdf9?w=100&auto=format&fit=crop&q=80',
                ],
            ],

            'orders' => [
                ['id' => 'ORD-9482', 'customer' => 'TechCorp Inc.', 'date' => 'Aug 06, 2026', 'amount' => '$1,450.00', 'payment' => 'Credit Card', 'status' => 'Paid'],
                ['id' => 'ORD-9483', 'customer' => 'Acme Logistics', 'date' => 'Aug 05, 2026', 'amount' => '$890.50', 'payment' => 'PayPal', 'status' => 'Paid'],
                ['id' => 'ORD-9484', 'customer' => 'Starlight Media', 'date' => 'Aug 05, 2026', 'amount' => '$3,200.00', 'payment' => 'Wire Transfer', 'status' => 'Pending'],
                ['id' => 'ORD-9485', 'customer' => 'Nexus Global', 'date' => 'Aug 04, 2026', 'amount' => '$420.00', 'payment' => 'Credit Card', 'status' => 'Failed'],
            ],

            'tasks' => [
                ['task' => 'Design System Tokens Audit', 'project' => 'Aura Wire Core', 'progress' => 85, 'priority' => 'High', 'assignee' => 'Sarah C.'],
                ['task' => 'Laravel Livewire 3 Integration', 'project' => 'Aura Package', 'progress' => 100, 'priority' => 'Critical', 'assignee' => 'Alex M.'],
                ['task' => 'Documentation & Showcase Pages', 'project' => 'Demo Site', 'progress' => 60, 'priority' => 'Medium', 'assignee' => 'Elena R.'],
                ['task' => 'CI/CD Pipeline Automation', 'project' => 'DevOps System', 'progress' => 30, 'priority' => 'Low', 'assignee' => 'Marcus V.'],
            ],

            'apiKeys' => [
                ['name' => 'Production Webhook Secret', 'token' => 'sk_live_9f83...4a12', 'created' => 'Jul 12, 2026', 'lastUsed' => '2 mins ago', 'status' => 'Active'],
                ['name' => 'Staging Environment Key', 'token' => 'sk_test_3b11...88ee', 'created' => 'Jun 28, 2026', 'lastUsed' => 'Yesterday', 'status' => 'Active'],
                ['name' => 'Legacy V1 Mobile Token', 'token' => 'sk_live_1a90...99cc', 'created' => 'Jan 15, 2026', 'lastUsed' => '30 days ago', 'status' => 'Revoked'],
            ],
        ];
    }
};

?>

<div class="w-full max-w-4xl mx-auto space-y-12 flex flex-col items-center justify-center">
    <!-- Header -->
    <x-aura::card>
        <x-aura::flex direction="col" gap="2" class="max-w-2xl">
            <x-aura::flex align="center" gap="2.5">
                <x-aura::kicker>Data</x-aura::kicker>
                <x-aura::badge variant="subtle" size="sm">Component</x-aura::badge>
            </x-aura::flex>
            <x-aura::heading level="1" size="xl">Table</x-aura::heading>
            <x-aura::subheading size="md">
                Production-grade data tables supporting avatars, status badges, progress indicators, action toolbars, and striped layout.
            </x-aura::subheading>
        </x-aura::flex>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code" >
        <x-slot:codeSlot>@verbatim<x-aura::table>
    <x-slot:header>
        <x-aura::table.column>Name</x-aura::table.column>
        <x-aura::table.column align="right">Actions</x-aura::table.column>
    </x-slot:header>
    <x-aura::table.row>
        <x-aura::table.cell>John Doe</x-aura::table.cell>
        <x-aura::table.cell align="right"><x-aura::button size="xs">View</x-aura::button></x-aura::table.cell>
    </x-aura::table.row>
</x-aura::table>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 1. User Management Directory Table (with Show, Edit, Delete Actions) -->
    <x-aura::code  title="1. User Management Directory Table">
        <x-slot:preview>
            <div class="w-full">
                <x-aura::table>
                    <x-slot:header>
                        <x-aura::table.column>Member</x-aura::table.column>
                        <x-aura::table.column>Role & Dept</x-aura::table.column>
                        <x-aura::table.column>Status</x-aura::table.column>
                        <x-aura::table.column align="right">Actions</x-aura::table.column>
                    </x-slot:header>

                    @foreach($users as $user)
                        <x-aura::table.row>
                            <x-aura::table.cell>
                                <div class="flex items-center gap-3">
                                    <img src="{{ $user['avatar'] }}" alt="{{ $user['name'] }}" class="w-9 h-9 rounded-full object-cover border border-zinc-200 dark:border-zinc-700 shrink-0" />
                                    <div>
                                        <p class="font-bold text-zinc-900 dark:text-white leading-tight">{{ $user['name'] }}</p>
                                        <p class="text-xs text-zinc-500 dark:text-zinc-400">{{ $user['email'] }}</p>
                                    </div>
                                </div>
                            </x-aura::table.cell>
                            <x-aura::table.cell>
                                <p class="font-medium text-zinc-900 dark:text-white text-sm">{{ $user['role'] }}</p>
                                <p class="text-xs text-zinc-500 dark:text-zinc-400">{{ $user['department'] }}</p>
                            </x-aura::table.cell>
                            <x-aura::table.cell>
                                @if ($user['status'] === 'Active')
                                    <x-aura::badge variant="positive" size="sm">Active</x-aura::badge>
                                @elseif ($user['status'] === 'Away')
                                    <x-aura::badge variant="warning" size="sm">Away</x-aura::badge>
                                @else
                                    <x-aura::badge variant="neutral" size="sm">Offline</x-aura::badge>
                                @endif
                            </x-aura::table.cell>
                            <x-aura::table.cell align="right">
                                <div class="flex items-center justify-end gap-1.5">
                                    <x-aura::icon-button icon="show" variant="subtle" size="sm" shape="circle" label="View User" />
                                    <x-aura::icon-button icon="edit" variant="subtle" size="sm" shape="circle" label="Edit User" />
                                    <x-aura::icon-button icon="delete" variant="subtle-danger" size="sm" shape="circle" label="Delete User" />
                                </div>
                            </x-aura::table.cell>
                        </x-aura::table.row>
                    @endforeach
                </x-aura::table>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::table>
    <x-slot:header>
        <x-aura::table.column>Member</x-aura::table.column>
        <x-aura::table.column>Role</x-aura::table.column>
        <x-aura::table.column>Status</x-aura::table.column>
        <x-aura::table.column align="right">Actions</x-aura::table.column>
    </x-slot:header>

    <x-aura::table.row>
        <x-aura::table.cell>
            <div class="flex items-center gap-3">
                <img src="..." class="w-9 h-9 rounded-full" />
                <div>
                    <p class="font-bold">Alex Morgan</p>
                    <p class="text-xs text-zinc-500">alex@company.com</p>
                </div>
            </div>
        </x-aura::table.cell>
        <x-aura::table.cell>Lead Developer</x-aura::table.cell>
        <x-aura::table.cell><x-aura::badge variant="positive">Active</x-aura::badge></x-aura::table.cell>
        <x-aura::table.cell align="right">
            <div class="flex items-center justify-end gap-1.5">
                <x-aura::icon-button icon="show" variant="subtle" size="sm" shape="circle" />
                <x-aura::icon-button icon="edit" variant="subtle" size="sm" shape="circle" />
                <x-aura::icon-button icon="delete" variant="subtle" size="sm" shape="circle" />
            </div>
        </x-aura::table.cell>
    </x-aura::table.row>
</x-aura::table>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Orders & Transactions Log Table -->
    <x-aura::code  title="2. Orders & Transactions Log Table">
        <x-slot:preview>
            <div class="w-full">
                <x-aura::table>
                    <x-slot:header>
                        <x-aura::table.column>Order ID</x-aura::table.column>
                        <x-aura::table.column>Customer</x-aura::table.column>
                        <x-aura::table.column>Date</x-aura::table.column>
                        <x-aura::table.column>Payment</x-aura::table.column>
                        <x-aura::table.column>Amount</x-aura::table.column>
                        <x-aura::table.column>Status</x-aura::table.column>
                        <x-aura::table.column align="right">Action</x-aura::table.column>
                    </x-slot:header>

                    @foreach($orders as $order)
                        <x-aura::table.row>
                            <x-aura::table.cell>
                                <span class="font-mono font-bold text-xs text-indigo-600 dark:text-indigo-400">{{ $order['id'] }}</span>
                            </x-aura::table.cell>
                            <x-aura::table.cell>
                                <span class="font-semibold text-zinc-900 dark:text-white">{{ $order['customer'] }}</span>
                            </x-aura::table.cell>
                            <x-aura::table.cell>
                                <span class="text-xs text-zinc-500 dark:text-zinc-400">{{ $order['date'] }}</span>
                            </x-aura::table.cell>
                            <x-aura::table.cell>
                                <span class="text-xs text-zinc-600 dark:text-zinc-300">{{ $order['payment'] }}</span>
                            </x-aura::table.cell>
                            <x-aura::table.cell>
                                <span class="font-bold text-zinc-900 dark:text-white">{{ $order['amount'] }}</span>
                            </x-aura::table.cell>
                            <x-aura::table.cell>
                                @if ($order['status'] === 'Paid')
                                    <x-aura::badge variant="positive" size="sm">Paid</x-aura::badge>
                                @elseif ($order['status'] === 'Pending')
                                    <x-aura::badge variant="warning" size="sm">Pending</x-aura::badge>
                                @else
                                    <x-aura::badge variant="negative" size="sm">Failed</x-aura::badge>
                                @endif
                            </x-aura::table.cell>
                            <x-aura::table.cell align="right">
                                <x-aura::icon-button icon="show" variant="ghost" size="sm" shape="circle" label="View Receipt" />
                            </x-aura::table.cell>
                        </x-aura::table.row>
                    @endforeach
                </x-aura::table>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::table>
    <x-slot:header>
        <x-aura::table.column>Order ID</x-aura::table.column>
        <x-aura::table.column>Customer</x-aura::table.column>
        <x-aura::table.column>Amount</x-aura::table.column>
        <x-aura::table.column>Status</x-aura::table.column>
    </x-slot:header>

    <x-aura::table.row>
        <x-aura::table.cell><span class="font-mono">ORD-9482</span></x-aura::table.cell>
        <x-aura::table.cell>TechCorp Inc.</x-aura::table.cell>
        <x-aura::table.cell><span class="font-bold">$1,450.00</span></x-aura::table.cell>
        <x-aura::table.cell><x-aura::badge variant="positive">Paid</x-aura::badge></x-aura::table.cell>
    </x-aura::table.row>
</x-aura::table>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 3. Project Tasks & Issue Tracker Table -->
    <x-aura::code  title="3. Project Task Tracker with Progress Indicators">
        <x-slot:preview>
            <div class="w-full">
                <x-aura::table>
                    <x-slot:header>
                        <x-aura::table.column>Task Title</x-aura::table.column>
                        <x-aura::table.column>Project</x-aura::table.column>
                        <x-aura::table.column>Priority</x-aura::table.column>
                        <x-aura::table.column>Completion</x-aura::table.column>
                        <x-aura::table.column>Assignee</x-aura::table.column>
                    </x-slot:header>

                    @foreach($tasks as $task)
                        <x-aura::table.row>
                            <x-aura::table.cell>
                                <span class="font-bold text-zinc-900 dark:text-white">{{ $task['task'] }}</span>
                            </x-aura::table.cell>
                            <x-aura::table.cell>
                                <span class="text-xs text-zinc-500 dark:text-zinc-400 font-medium">{{ $task['project'] }}</span>
                            </x-aura::table.cell>
                            <x-aura::table.cell>
                                @if ($task['priority'] === 'Critical')
                                    <x-aura::badge variant="negative" size="sm">Critical</x-aura::badge>
                                @elseif ($task['priority'] === 'High')
                                    <x-aura::badge variant="warning" size="sm">High</x-aura::badge>
                                @else
                                    <x-aura::badge variant="neutral" size="sm">{{ $task['priority'] }}</x-aura::badge>
                                @endif
                            </x-aura::table.cell>
                            <x-aura::table.cell>
                                <div class="w-48 space-y-1">
                                    <div class="flex items-center justify-between text-xs font-bold">
                                        <span class="text-zinc-600 dark:text-zinc-400">{{ $task['progress'] }}%</span>
                                    </div>
                                    <x-aura::progress-bar :value="$task['progress']" size="xs" variant="{{ $task['progress'] === 100 ? 'positive' : 'indigo' }}" />
                                </div>
                            </x-aura::table.cell>
                            <x-aura::table.cell>
                                <span class="font-semibold text-xs text-zinc-700 dark:text-zinc-300">{{ $task['assignee'] }}</span>
                            </x-aura::table.cell>
                        </x-aura::table.row>
                    @endforeach
                </x-aura::table>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::table>
    <x-slot:header>
        <x-aura::table.column>Task</x-aura::table.column>
        <x-aura::table.column>Priority</x-aura::table.column>
        <x-aura::table.column>Completion</x-aura::table.column>
    </x-slot:header>

    <x-aura::table.row>
        <x-aura::table.cell><span class="font-bold">Design Tokens Audit</span></x-aura::table.cell>
        <x-aura::table.cell><x-aura::badge variant="warning">High</x-aura::badge></x-aura::table.cell>
        <x-aura::table.cell>
            <div class="w-48"><x-aura::progress-bar :value="85" size="xs" /></div>
        </x-aura::table.cell>
    </x-aura::table.row>
</x-aura::table>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 4. Striped API Keys & Security Tokens Table -->
    <x-aura::code  title="4. Alternating Striped API Keys Table">
        <x-slot:preview>
            <div class="w-full">
                <x-aura::table :striped="true">
                    <x-slot:header>
                        <x-aura::table.column>Key Name</x-aura::table.column>
                        <x-aura::table.column>Token</x-aura::table.column>
                        <x-aura::table.column>Created Date</x-aura::table.column>
                        <x-aura::table.column>Last Active</x-aura::table.column>
                        <x-aura::table.column>Status</x-aura::table.column>
                        <x-aura::table.column align="right">Actions</x-aura::table.column>
                    </x-slot:header>

                    @foreach($apiKeys as $key)
                        <x-aura::table.row>
                            <x-aura::table.cell>
                                <span class="font-bold text-zinc-900 dark:text-white">{{ $key['name'] }}</span>
                            </x-aura::table.cell>
                            <x-aura::table.cell>
                                <code class="px-2 py-1 rounded bg-zinc-100 dark:bg-zinc-800 text-xs font-mono text-zinc-700 dark:text-zinc-300 border border-zinc-200 dark:border-zinc-700">{{ $key['token'] }}</code>
                            </x-aura::table.cell>
                            <x-aura::table.cell>
                                <span class="text-xs text-zinc-500 dark:text-zinc-400">{{ $key['created'] }}</span>
                            </x-aura::table.cell>
                            <x-aura::table.cell>
                                <span class="text-xs text-zinc-500 dark:text-zinc-400">{{ $key['lastUsed'] }}</span>
                            </x-aura::table.cell>
                            <x-aura::table.cell>
                                @if ($key['status'] === 'Active')
                                    <x-aura::badge variant="positive" size="sm">Active</x-aura::badge>
                                @else
                                    <x-aura::badge variant="negative" size="sm">Revoked</x-aura::badge>
                                @endif
                            </x-aura::table.cell>
                            <x-aura::table.cell align="right">
                                <div class="flex items-center justify-end gap-1.5">
                                    <x-aura::icon-button icon="show" variant="subtle" size="sm" shape="circle" label="View Token Details" />
                                    <x-aura::icon-button icon="delete" variant="subtle-danger" size="sm" shape="circle" label="Revoke Key" />
                                </div>
                            </x-aura::table.cell>
                        </x-aura::table.row>
                    @endforeach
                </x-aura::table>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::table :striped="true">
    <x-slot:header>
        <x-aura::table.column>Key Name</x-aura::table.column>
        <x-aura::table.column>Token</x-aura::table.column>
        <x-aura::table.column>Status</x-aura::table.column>
        <x-aura::table.column align="right">Actions</x-aura::table.column>
    </x-slot:header>

    <x-aura::table.row>
        <x-aura::table.cell><span class="font-bold">Production Secret</span></x-aura::table.cell>
        <x-aura::table.cell><code class="px-2 py-1 font-mono">sk_live_9f83...</code></x-aura::table.cell>
        <x-aura::table.cell><x-aura::badge variant="positive">Active</x-aura::badge></x-aura::table.cell>
        <x-aura::table.cell align="right">
            <x-aura::icon-button icon="delete" variant="subtle" size="sm" shape="circle" />
        </x-aura::table.cell>
    </x-aura::table.row>
</x-aura::table>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 5. Table with Footer Totals Summary -->
    <x-aura::code  title="5. Invoice Summary Table with Footer Row">
        <x-slot:preview>
            <div class="w-full">
                <x-aura::table>
                    <x-slot:header>
                        <x-aura::table.column>Item Description</x-aura::table.column>
                        <x-aura::table.column align="center">Qty</x-aura::table.column>
                        <x-aura::table.column align="right">Unit Price</x-aura::table.column>
                        <x-aura::table.column align="right">Subtotal</x-aura::table.column>
                    </x-slot:header>

                    <x-aura::table.row>
                        <x-aura::table.cell>
                            <span class="font-semibold text-zinc-900 dark:text-white">Aura UI Pro License (Unlimited Teams)</span>
                        </x-aura::table.cell>
                        <x-aura::table.cell align="center">1</x-aura::table.cell>
                        <x-aura::table.cell align="right">$299.00</x-aura::table.cell>
                        <x-aura::table.cell align="right">
                            <span class="font-bold">$299.00</span>
                        </x-aura::table.cell>
                    </x-aura::table.row>

                    <x-aura::table.row>
                        <x-aura::table.cell>
                            <span class="font-semibold text-zinc-900 dark:text-white">Custom Domain SSL Certificate setup</span>
                        </x-aura::table.cell>
                        <x-aura::table.cell align="center">2</x-aura::table.cell>
                        <x-aura::table.cell align="right">$49.00</x-aura::table.cell>
                        <x-aura::table.cell align="right">
                            <span class="font-bold">$98.00</span>
                        </x-aura::table.cell>
                    </x-aura::table.row>

                    <x-slot:footer>
                        <tr>
                            <td colspan="3" class="px-4 py-3 text-right font-bold uppercase tracking-wider text-zinc-900 dark:text-white">Total Due:</td>
                            <td class="px-4 py-3 text-right font-black text-base text-indigo-600 dark:text-indigo-400">$397.00</td>
                        </tr>
                    </x-slot:footer>
                </x-aura::table>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::table>
    <x-slot:header>
        <x-aura::table.column>Item Description</x-aura::table.column>
        <x-aura::table.column align="center">Qty</x-aura::table.column>
        <x-aura::table.column align="right">Subtotal</x-aura::table.column>
    </x-slot:header>

    <x-aura::table.row>
        <x-aura::table.cell>Aura UI Pro License</x-aura::table.cell>
        <x-aura::table.cell align="center">1</x-aura::table.cell>
        <x-aura::table.cell align="right"><span class="font-bold">$299.00</span></x-aura::table.cell>
    </x-aura::table.row>

    <x-slot:footer>
        <tr>
            <td colspan="2" class="px-4 py-3 text-right font-bold">Total Due:</td>
            <td class="px-4 py-3 text-right font-black">$397.00</td>
        </tr>
    </x-slot:footer>
</x-aura::table>@endverbatim</x-slot:codeSlot>
    </x-aura::code>
</div>

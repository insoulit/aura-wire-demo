<?php

use function Livewire\Volt\{layout, title, with};

layout('layout.component');
title('Table - Aura Wire');

with([
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
]);

?>

<div class="w-full max-w-4xl mx-auto space-y-12 flex flex-col items-center justify-center">
    <!-- Header -->
    <div class="space-y-3 text-center flex flex-col items-center">
        <x-aura::kicker>Data Display</x-aura::kicker>
        <x-aura::heading level="1" size="lg">Table</x-aura::heading>
        <x-aura::subheading size="sm" class="max-w-lg">
            Production-grade data tables supporting avatars, status badges, progress indicators, action toolbars, and striped layout.
        </x-aura::subheading>
        <div class="pt-1">
            <code class="inline-flex items-center px-3.5 py-1.5 rounded-xl text-sm font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-2xs">
                &lt;x-aura::table&gt;
            </code>
        </div>
    </div>

    <!-- 1. User Management Directory Table (with Show, Edit, Delete Actions) -->
    <x-aura::code class="w-full" title="1. User Management Directory Table">
        <x-slot:preview>
            <div class="w-full">
                <x-aura::table>
                    <x-slot:header>
                        <x-aura::table.column>Member</x-aura::table.column>
                        <x-aura::table.column>Role & Dept</x-aura::table.column>
                        <x-aura::table.column>Status</x-aura::table.column>
                        <x-aura::table.column class="text-right">Actions</x-aura::table.column>
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
                            <x-aura::table.cell class="text-right">
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
        <x-slot:codeSlot>&lt;x-aura::table&gt;
    &lt;x-slot:header&gt;
        &lt;x-aura::table.column&gt;Member&lt;/x-aura::table.column&gt;
        &lt;x-aura::table.column&gt;Role&lt;/x-aura::table.column&gt;
        &lt;x-aura::table.column&gt;Status&lt;/x-aura::table.column&gt;
        &lt;x-aura::table.column class="text-right"&gt;Actions&lt;/x-aura::table.column&gt;
    &lt;/x-slot:header&gt;

    &lt;x-aura::table.row&gt;
        &lt;x-aura::table.cell&gt;
            &lt;div class="flex items-center gap-3"&gt;
                &lt;img src="..." class="w-9 h-9 rounded-full" /&gt;
                &lt;div&gt;
                    &lt;p class="font-bold"&gt;Alex Morgan&lt;/p&gt;
                    &lt;p class="text-xs text-zinc-500"&gt;alex@company.com&lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/x-aura::table.cell&gt;
        &lt;x-aura::table.cell&gt;Lead Developer&lt;/x-aura::table.cell&gt;
        &lt;x-aura::table.cell&gt;&lt;x-aura::badge variant="positive"&gt;Active&lt;/x-aura::badge&gt;&lt;/x-aura::table.cell&gt;
        &lt;x-aura::table.cell class="text-right"&gt;
            &lt;div class="flex items-center justify-end gap-1.5"&gt;
                &lt;x-aura::icon-button icon="show" variant="subtle" size="sm" shape="circle" /&gt;
                &lt;x-aura::icon-button icon="edit" variant="subtle" size="sm" shape="circle" /&gt;
                &lt;x-aura::icon-button icon="delete" variant="subtle" size="sm" shape="circle" class="text-red-600" /&gt;
            &lt;/div&gt;
        &lt;/x-aura::table.cell&gt;
    &lt;/x-aura::table.row&gt;
&lt;/x-aura::table&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Orders & Transactions Log Table -->
    <x-aura::code class="w-full" title="2. Orders & Transactions Log Table">
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
                        <x-aura::table.column class="text-right">Action</x-aura::table.column>
                    </x-slot:header>

                    @foreach($orders as $order)
                        <x-aura::table.row>
                            <x-aura::table.cell class="font-mono font-bold text-xs text-indigo-600 dark:text-indigo-400">{{ $order['id'] }}</x-aura::table.cell>
                            <x-aura::table.cell class="font-semibold text-zinc-900 dark:text-white">{{ $order['customer'] }}</x-aura::table.cell>
                            <x-aura::table.cell class="text-xs text-zinc-500 dark:text-zinc-400">{{ $order['date'] }}</x-aura::table.cell>
                            <x-aura::table.cell class="text-xs text-zinc-600 dark:text-zinc-300">{{ $order['payment'] }}</x-aura::table.cell>
                            <x-aura::table.cell class="font-bold text-zinc-900 dark:text-white">{{ $order['amount'] }}</x-aura::table.cell>
                            <x-aura::table.cell>
                                @if ($order['status'] === 'Paid')
                                    <x-aura::badge variant="positive" size="sm">Paid</x-aura::badge>
                                @elseif ($order['status'] === 'Pending')
                                    <x-aura::badge variant="warning" size="sm">Pending</x-aura::badge>
                                @else
                                    <x-aura::badge variant="negative" size="sm">Failed</x-aura::badge>
                                @endif
                            </x-aura::table.cell>
                            <x-aura::table.cell class="text-right">
                                <x-aura::icon-button icon="show" variant="ghost" size="sm" shape="circle" label="View Receipt" />
                            </x-aura::table.cell>
                        </x-aura::table.row>
                    @endforeach
                </x-aura::table>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::table&gt;
    &lt;x-slot:header&gt;
        &lt;x-aura::table.column&gt;Order ID&lt;/x-aura::table.column&gt;
        &lt;x-aura::table.column&gt;Customer&lt;/x-aura::table.column&gt;
        &lt;x-aura::table.column&gt;Amount&lt;/x-aura::table.column&gt;
        &lt;x-aura::table.column&gt;Status&lt;/x-aura::table.column&gt;
    &lt;/x-slot:header&gt;

    &lt;x-aura::table.row&gt;
        &lt;x-aura::table.cell class="font-mono"&gt;ORD-9482&lt;/x-aura::table.cell&gt;
        &lt;x-aura::table.cell&gt;TechCorp Inc.&lt;/x-aura::table.cell&gt;
        &lt;x-aura::table.cell class="font-bold"&gt;$1,450.00&lt;/x-aura::table.cell&gt;
        &lt;x-aura::table.cell&gt;&lt;x-aura::badge variant="positive"&gt;Paid&lt;/x-aura::badge&gt;&lt;/x-aura::table.cell&gt;
    &lt;/x-aura::table.row&gt;
&lt;/x-aura::table&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 3. Project Tasks & Issue Tracker Table -->
    <x-aura::code class="w-full" title="3. Project Task Tracker with Progress Indicators">
        <x-slot:preview>
            <div class="w-full">
                <x-aura::table>
                    <x-slot:header>
                        <x-aura::table.column>Task Title</x-aura::table.column>
                        <x-aura::table.column>Project</x-aura::table.column>
                        <x-aura::table.column>Priority</x-aura::table.column>
                        <x-aura::table.column class="w-48">Completion</x-aura::table.column>
                        <x-aura::table.column>Assignee</x-aura::table.column>
                    </x-slot:header>

                    @foreach($tasks as $task)
                        <x-aura::table.row>
                            <x-aura::table.cell class="font-bold text-zinc-900 dark:text-white">{{ $task['task'] }}</x-aura::table.cell>
                            <x-aura::table.cell class="text-xs text-zinc-500 dark:text-zinc-400 font-medium">{{ $task['project'] }}</x-aura::table.cell>
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
                                <div class="space-y-1">
                                    <div class="flex items-center justify-between text-xs font-bold">
                                        <span class="text-zinc-600 dark:text-zinc-400">{{ $task['progress'] }}%</span>
                                    </div>
                                    <x-aura::progress-bar :value="$task['progress']" size="xs" variant="{{ $task['progress'] === 100 ? 'positive' : 'indigo' }}" />
                                </div>
                            </x-aura::table.cell>
                            <x-aura::table.cell class="font-semibold text-xs text-zinc-700 dark:text-zinc-300">{{ $task['assignee'] }}</x-aura::table.cell>
                        </x-aura::table.row>
                    @endforeach
                </x-aura::table>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::table&gt;
    &lt;x-slot:header&gt;
        &lt;x-aura::table.column&gt;Task&lt;/x-aura::table.column&gt;
        &lt;x-aura::table.column&gt;Priority&lt;/x-aura::table.column&gt;
        &lt;x-aura::table.column&gt;Completion&lt;/x-aura::table.column&gt;
    &lt;/x-slot:header&gt;

    &lt;x-aura::table.row&gt;
        &lt;x-aura::table.cell class="font-bold"&gt;Design Tokens Audit&lt;/x-aura::table.cell&gt;
        &lt;x-aura::table.cell&gt;&lt;x-aura::badge variant="warning"&gt;High&lt;/x-aura::badge&gt;&lt;/x-aura::table.cell&gt;
        &lt;x-aura::table.cell&gt;
            &lt;x-aura::progress-bar :value="85" size="xs" /&gt;
        &lt;/x-aura::table.cell&gt;
    &lt;/x-aura::table.row&gt;
&lt;/x-aura::table&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 4. Striped API Keys & Security Tokens Table -->
    <x-aura::code class="w-full" title="4. Alternating Striped API Keys Table">
        <x-slot:preview>
            <div class="w-full">
                <x-aura::table :striped="true">
                    <x-slot:header>
                        <x-aura::table.column>Key Name</x-aura::table.column>
                        <x-aura::table.column>Token</x-aura::table.column>
                        <x-aura::table.column>Created Date</x-aura::table.column>
                        <x-aura::table.column>Last Active</x-aura::table.column>
                        <x-aura::table.column>Status</x-aura::table.column>
                        <x-aura::table.column class="text-right">Actions</x-aura::table.column>
                    </x-slot:header>

                    @foreach($apiKeys as $key)
                        <x-aura::table.row>
                            <x-aura::table.cell class="font-bold text-zinc-900 dark:text-white">{{ $key['name'] }}</x-aura::table.cell>
                            <x-aura::table.cell>
                                <code class="px-2 py-1 rounded bg-zinc-100 dark:bg-zinc-800 text-xs font-mono text-zinc-700 dark:text-zinc-300 border border-zinc-200 dark:border-zinc-700">{{ $key['token'] }}</code>
                            </x-aura::table.cell>
                            <x-aura::table.cell class="text-xs text-zinc-500 dark:text-zinc-400">{{ $key['created'] }}</x-aura::table.cell>
                            <x-aura::table.cell class="text-xs text-zinc-500 dark:text-zinc-400">{{ $key['lastUsed'] }}</x-aura::table.cell>
                            <x-aura::table.cell>
                                @if ($key['status'] === 'Active')
                                    <x-aura::badge variant="positive" size="sm">Active</x-aura::badge>
                                @else
                                    <x-aura::badge variant="negative" size="sm">Revoked</x-aura::badge>
                                @endif
                            </x-aura::table.cell>
                            <x-aura::table.cell class="text-right">
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
        <x-slot:codeSlot>&lt;x-aura::table :striped="true"&gt;
    &lt;x-slot:header&gt;
        &lt;x-aura::table.column&gt;Key Name&lt;/x-aura::table.column&gt;
        &lt;x-aura::table.column&gt;Token&lt;/x-aura::table.column&gt;
        &lt;x-aura::table.column&gt;Status&lt;/x-aura::table.column&gt;
        &lt;x-aura::table.column class="text-right"&gt;Actions&lt;/x-aura::table.column&gt;
    &lt;/x-slot:header&gt;

    &lt;x-aura::table.row&gt;
        &lt;x-aura::table.cell class="font-bold"&gt;Production Secret&lt;/x-aura::table.cell&gt;
        &lt;x-aura::table.cell&gt;&lt;code class="px-2 py-1 font-mono"&gt;sk_live_9f83...&lt;/code&gt;&lt;/x-aura::table.cell&gt;
        &lt;x-aura::table.cell&gt;&lt;x-aura::badge variant="positive"&gt;Active&lt;/x-aura::badge&gt;&lt;/x-aura::table.cell&gt;
        &lt;x-aura::table.cell class="text-right"&gt;
            &lt;x-aura::icon-button icon="delete" variant="subtle" size="sm" shape="circle" class="text-red-600" /&gt;
        &lt;/x-aura::table.cell&gt;
    &lt;/x-aura::table.row&gt;
&lt;/x-aura::table&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 5. Table with Footer Totals Summary -->
    <x-aura::code class="w-full" title="5. Invoice Summary Table with Footer Row">
        <x-slot:preview>
            <div class="w-full">
                <x-aura::table>
                    <x-slot:header>
                        <x-aura::table.column>Item Description</x-aura::table.column>
                        <x-aura::table.column class="text-center">Qty</x-aura::table.column>
                        <x-aura::table.column class="text-right">Unit Price</x-aura::table.column>
                        <x-aura::table.column class="text-right">Subtotal</x-aura::table.column>
                    </x-slot:header>

                    <x-aura::table.row>
                        <x-aura::table.cell class="font-semibold text-zinc-900 dark:text-white">Aura UI Pro License (Unlimited Teams)</x-aura::table.cell>
                        <x-aura::table.cell class="text-center">1</x-aura::table.cell>
                        <x-aura::table.cell class="text-right">$299.00</x-aura::table.cell>
                        <x-aura::table.cell class="text-right font-bold">$299.00</x-aura::table.cell>
                    </x-aura::table.row>

                    <x-aura::table.row>
                        <x-aura::table.cell class="font-semibold text-zinc-900 dark:text-white">Custom Domain SSL Certificate setup</x-aura::table.cell>
                        <x-aura::table.cell class="text-center">2</x-aura::table.cell>
                        <x-aura::table.cell class="text-right">$49.00</x-aura::table.cell>
                        <x-aura::table.cell class="text-right font-bold">$98.00</x-aura::table.cell>
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
        <x-slot:codeSlot>&lt;x-aura::table&gt;
    &lt;x-slot:header&gt;
        &lt;x-aura::table.column&gt;Item Description&lt;/x-aura::table.column&gt;
        &lt;x-aura::table.column class="text-center"&gt;Qty&lt;/x-aura::table.column&gt;
        &lt;x-aura::table.column class="text-right"&gt;Subtotal&lt;/x-aura::table.column&gt;
    &lt;/x-slot:header&gt;

    &lt;x-aura::table.row&gt;
        &lt;x-aura::table.cell&gt;Aura UI Pro License&lt;/x-aura::table.cell&gt;
        &lt;x-aura::table.cell class="text-center"&gt;1&lt;/x-aura::table.cell&gt;
        &lt;x-aura::table.cell class="text-right font-bold"&gt;$299.00&lt;/x-aura::table.cell&gt;
    &lt;/x-aura::table.row&gt;

    &lt;x-slot:footer&gt;
        &lt;tr&gt;
            &lt;td colspan="2" class="px-4 py-3 text-right font-bold"&gt;Total Due:&lt;/td&gt;
            &lt;td class="px-4 py-3 text-right font-black"&gt;$397.00&lt;/td&gt;
        &lt;/tr&gt;
    &lt;/x-slot:footer&gt;
&lt;/x-aura::table&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>

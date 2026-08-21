<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Table — Aura Wire')] 
class extends Component {
    public function with(): array
    {
        return [
            'users' => [
                [
                    'name' => 'Alex Morgan',
                    'email' => 'alex.morgan@example.com',
                    'role' => 'Lead Engineer',
                    'department' => 'Engineering',
                    'status' => 'Active',
                    'avatar' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=100&auto=format&fit=crop&q=80',
                ],
                [
                    'name' => 'Sarah Chen',
                    'email' => 'sarah.chen@example.com',
                    'role' => 'UI Designer',
                    'department' => 'Design',
                    'status' => 'Active',
                    'avatar' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=100&auto=format&fit=crop&q=80',
                ],
                [
                    'name' => 'Marcus Vance',
                    'email' => 'marcus.vance@example.com',
                    'role' => 'Architect',
                    'department' => 'Infrastructure',
                    'status' => 'Offline',
                    'avatar' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100&auto=format&fit=crop&q=80',
                ],
            ],
            'invoices' => [
                ['id' => 'INV-2024-001', 'client' => 'Acme Corporation', 'amount' => '$1,250.00', 'status' => 'Paid'],
                ['id' => 'INV-2024-002', 'client' => 'Starlight Design Studio', 'amount' => '$840.00', 'status' => 'Pending'],
                ['id' => 'INV-2024-003', 'client' => 'Global Logistics Inc', 'amount' => '$3,400.00', 'status' => 'Paid'],
            ],
            'metrics' => [
                ['endpoint' => '/api/v1/users', 'method' => 'GET', 'duration' => '32ms', 'status' => '200 OK'],
                ['endpoint' => '/api/v1/auth/login', 'method' => 'POST', 'duration' => '115ms', 'status' => '200 OK'],
                ['endpoint' => '/api/v1/checkout', 'method' => 'POST', 'duration' => '84ms', 'status' => '201 Created'],
            ],
        ];
    }
};

?>

<x-aura::container gap="8" :padding="false">

    <!-- Header -->
    <x-aura::card size="full" gap="2">

        <x-aura::flex align="center" gap="2.5">

            <x-aura::kicker>
                Data
            </x-aura::kicker>

            <x-aura::badge variant="subtle" size="sm">
                Component
            </x-aura::badge>

        </x-aura::flex>

        <x-aura::heading level="1" size="xl">
            Table
        </x-aura::heading>

        <x-aura::subheading size="md">
            Production data tables supporting striped rows, compact modes, avatars, status badges, and action toolbars.
        </x-aura::subheading>

    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">

        <x-slot:codeSlot>

            @verbatim
                <x-aura::table>
                    <x-slot:header>
                        <x-aura::table.column>
                            Member
                        </x-aura::table.column>

                        <x-aura::table.column align="right">
                            Action
                        </x-aura::table.column>
                    </x-slot:header>

                    <x-aura::table.row>
                        <x-aura::table.cell>
                            Alex Morgan
                        </x-aura::table.cell>

                        <x-aura::table.cell align="right">
                            <x-aura::button size="xs">
                                View
                            </x-aura::button>
                        </x-aura::table.cell>
                    </x-aura::table.row>
                </x-aura::table>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 1. User Directory Table -->
    <x-aura::code title="1. Directory Table with Avatars">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::table>

                    <x-slot:header>

                        <x-aura::table.column>
                            Member
                        </x-aura::table.column>

                        <x-aura::table.column>
                            Role
                        </x-aura::table.column>

                        <x-aura::table.column>
                            Status
                        </x-aura::table.column>

                        <x-aura::table.column align="right">
                            Action
                        </x-aura::table.column>

                    </x-slot:header>

                    @foreach ($users as $user)

                        <x-aura::table.row>

                            <x-aura::table.cell>

                                <x-aura::flex align="center" gap="3">

                                    <x-aura::avatar src="{{ $user['avatar'] }}" size="sm" />

                                    <x-aura::flex direction="col" align="start" gap="0.5">

                                        <x-aura::text size="sm" weight="semibold">
                                            {{ $user['name'] }}
                                        </x-aura::text>

                                        <x-aura::text size="xs" variant="subtle">
                                            {{ $user['email'] }}
                                        </x-aura::text>

                                    </x-aura::flex>

                                </x-aura::flex>

                            </x-aura::table.cell>

                            <x-aura::table.cell>

                                <x-aura::text size="sm">
                                    {{ $user['role'] }}
                                </x-aura::text>

                            </x-aura::table.cell>

                            <x-aura::table.cell>

                                <x-aura::badge variant="{{ $user['status'] === 'Active' ? 'neutral' : 'subtle' }}" size="sm">
                                    {{ $user['status'] }}
                                </x-aura::badge>

                            </x-aura::table.cell>

                            <x-aura::table.cell align="right">

                                <x-aura::flex align="center" justify="end" gap="1.5">

                                    <x-aura::icon-button icon="eye" variant="ghost" size="xs" label="View" />

                                    <x-aura::icon-button icon="pencil" variant="ghost" size="xs" label="Edit" />

                                </x-aura::flex>

                            </x-aura::table.cell>

                        </x-aura::table.row>

                    @endforeach

                </x-aura::table>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::table>
                    <x-slot:header>
                        <x-aura::table.column>
                            Member
                        </x-aura::table.column>

                        <x-aura::table.column>
                            Role
                        </x-aura::table.column>

                        <x-aura::table.column>
                            Status
                        </x-aura::table.column>

                        <x-aura::table.column align="right">
                            Action
                        </x-aura::table.column>
                    </x-slot:header>

                    @foreach ($users as $user)
                        <x-aura::table.row>
                            <x-aura::table.cell>
                                <x-aura::flex align="center" gap="3">
                                    <x-aura::avatar src="{{ $user['avatar'] }}" size="sm" />

                                    <x-aura::flex direction="col" align="start" gap="0.5">
                                        <x-aura::text size="sm" weight="semibold">
                                            {{ $user['name'] }}
                                        </x-aura::text>

                                        <x-aura::text size="xs" variant="subtle">
                                            {{ $user['email'] }}
                                        </x-aura::text>
                                    </x-aura::flex>
                                </x-aura::flex>
                            </x-aura::table.cell>

                            <x-aura::table.cell>
                                <x-aura::text size="sm">
                                    {{ $user['role'] }}
                                </x-aura::text>
                            </x-aura::table.cell>

                            <x-aura::table.cell>
                                <x-aura::badge variant="{{ $user['status'] === 'Active' ? 'neutral' : 'subtle' }}" size="sm">
                                    {{ $user['status'] }}
                                </x-aura::badge>
                            </x-aura::table.cell>

                            <x-aura::table.cell align="right">
                                <x-aura::flex align="center" justify="end" gap="1.5">
                                    <x-aura::icon-button icon="eye" variant="ghost" size="xs" label="View" />
                                    <x-aura::icon-button icon="pencil" variant="ghost" size="xs" label="Edit" />
                                </x-aura::flex>
                            </x-aura::table.cell>
                        </x-aura::table.row>
                    @endforeach
                </x-aura::table>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 2. Striped Invoice Table -->
    <x-aura::code title="2. Striped Invoices Table with Footer">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::table :striped="true">

                    <x-slot:header>

                        <x-aura::table.column>
                            Invoice ID
                        </x-aura::table.column>

                        <x-aura::table.column>
                            Client
                        </x-aura::table.column>

                        <x-aura::table.column>
                            Status
                        </x-aura::table.column>

                        <x-aura::table.column align="right">
                            Amount
                        </x-aura::table.column>

                    </x-slot:header>

                    @foreach ($invoices as $inv)

                        <x-aura::table.row>

                            <x-aura::table.cell>

                                <x-aura::text variant="mono" size="sm">
                                    {{ $inv['id'] }}
                                </x-aura::text>

                            </x-aura::table.cell>

                            <x-aura::table.cell>

                                <x-aura::text size="sm" weight="medium">
                                    {{ $inv['client'] }}
                                </x-aura::text>

                            </x-aura::table.cell>

                            <x-aura::table.cell>

                                <x-aura::tag variant="{{ $inv['status'] === 'Paid' ? 'neutral' : 'subtle' }}" size="sm">
                                    {{ $inv['status'] }}
                                </x-aura::tag>

                            </x-aura::table.cell>

                            <x-aura::table.cell align="right">

                                <x-aura::text size="sm" weight="semibold">
                                    {{ $inv['amount'] }}
                                </x-aura::text>

                            </x-aura::table.cell>

                        </x-aura::table.row>

                    @endforeach

                    <x-slot:footer>

                        <tr>

                            <td colspan="3" class="px-4 py-3 font-semibold text-zinc-900 dark:text-white">
                                Total Invoiced (3 Items)
                            </td>

                            <td class="px-4 py-3 text-right font-bold text-zinc-900 dark:text-white">
                                $5,490.00
                            </td>

                        </tr>

                    </x-slot:footer>

                </x-aura::table>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::table :striped="true">
                    <x-slot:header>
                        <x-aura::table.column>
                            Invoice ID
                        </x-aura::table.column>

                        <x-aura::table.column>
                            Client
                        </x-aura::table.column>

                        <x-aura::table.column>
                            Status
                        </x-aura::table.column>

                        <x-aura::table.column align="right">
                            Amount
                        </x-aura::table.column>
                    </x-slot:header>

                    @foreach ($invoices as $inv)
                        <x-aura::table.row>
                            <x-aura::table.cell>
                                <x-aura::text variant="mono" size="sm">
                                    {{ $inv['id'] }}
                                </x-aura::text>
                            </x-aura::table.cell>

                            <x-aura::table.cell>
                                <x-aura::text size="sm" weight="medium">
                                    {{ $inv['client'] }}
                                </x-aura::text>
                            </x-aura::table.cell>

                            <x-aura::table.cell>
                                <x-aura::tag variant="{{ $inv['status'] === 'Paid' ? 'neutral' : 'subtle' }}" size="sm">
                                    {{ $inv['status'] }}
                                </x-aura::tag>
                            </x-aura::table.cell>

                            <x-aura::table.cell align="right">
                                <x-aura::text size="sm" weight="semibold">
                                    {{ $inv['amount'] }}
                                </x-aura::text>
                            </x-aura::table.cell>
                        </x-aura::table.row>
                    @endforeach

                    <x-slot:footer>
                        <tr>
                            <td colspan="3" class="px-4 py-3 font-semibold">
                                Total Invoiced (3 Items)
                            </td>

                            <td class="px-4 py-3 text-right font-bold">
                                $5,490.00
                            </td>
                        </tr>
                    </x-slot:footer>
                </x-aura::table>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- 3. Compact Metrics Table -->
    <x-aura::code title="3. Compact Metrics Log Table">

        <x-slot:preview>

            <x-aura::card size="2xl" gap="4">

                <x-aura::table :compact="true">

                    <x-slot:header>

                        <x-aura::table.column>
                            HTTP Method
                        </x-aura::table.column>

                        <x-aura::table.column>
                            API Endpoint
                        </x-aura::table.column>

                        <x-aura::table.column>
                            Status
                        </x-aura::table.column>

                        <x-aura::table.column align="right">
                            Latency
                        </x-aura::table.column>

                    </x-slot:header>

                    @foreach ($metrics as $metric)

                        <x-aura::table.row>

                            <x-aura::table.cell>

                                <x-aura::tag variant="neutral" size="sm">
                                    {{ $metric['method'] }}
                                </x-aura::tag>

                            </x-aura::table.cell>

                            <x-aura::table.cell>

                                <x-aura::text variant="mono" size="xs">
                                    {{ $metric['endpoint'] }}
                                </x-aura::text>

                            </x-aura::table.cell>

                            <x-aura::table.cell>

                                <x-aura::badge variant="subtle" size="sm">
                                    {{ $metric['status'] }}
                                </x-aura::badge>

                            </x-aura::table.cell>

                            <x-aura::table.cell align="right">

                                <x-aura::text variant="mono" size="xs">
                                    {{ $metric['duration'] }}
                                </x-aura::text>

                            </x-aura::table.cell>

                        </x-aura::table.row>

                    @endforeach

                </x-aura::table>

            </x-aura::card>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::table :compact="true">
                    <x-slot:header>
                        <x-aura::table.column>
                            HTTP Method
                        </x-aura::table.column>

                        <x-aura::table.column>
                            API Endpoint
                        </x-aura::table.column>

                        <x-aura::table.column>
                            Status
                        </x-aura::table.column>

                        <x-aura::table.column align="right">
                            Latency
                        </x-aura::table.column>
                    </x-slot:header>

                    @foreach ($metrics as $metric)
                        <x-aura::table.row>
                            <x-aura::table.cell>
                                <x-aura::tag variant="neutral" size="sm">
                                    {{ $metric['method'] }}
                                </x-aura::tag>
                            </x-aura::table.cell>

                            <x-aura::table.cell>
                                <x-aura::text variant="mono" size="xs">
                                    {{ $metric['endpoint'] }}
                                </x-aura::text>
                            </x-aura::table.cell>

                            <x-aura::table.cell>
                                <x-aura::badge variant="subtle" size="sm">
                                    {{ $metric['status'] }}
                                </x-aura::badge>
                            </x-aura::table.cell>

                            <x-aura::table.cell align="right">
                                <x-aura::text variant="mono" size="xs">
                                    {{ $metric['duration'] }}
                                </x-aura::text>
                            </x-aura::table.cell>
                        </x-aura::table.row>
                    @endforeach
                </x-aura::table>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

    <!-- Component Props -->
    <x-aura::card size="full" gap="4">

        <x-aura::flex direction="col" gap="1">

            <x-aura::heading level="2" size="md">
                Component Props
            </x-aura::heading>

            <x-aura::text variant="subtle" size="sm">
                Available properties and configurations for the table component.
            </x-aura::text>

        </x-aura::flex>

        <x-aura::table>

            <x-slot:header>

                <x-aura::table.column>
                    Prop
                </x-aura::table.column>

                <x-aura::table.column>
                    Default
                </x-aura::table.column>

                <x-aura::table.column>
                    Available Values
                </x-aura::table.column>

            </x-slot:header>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            striped
                        </x-aura::text>

                        <x-aura::tooltip text="Alternate background tint on even rows" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        false
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

                        <x-aura::badge variant="subtle" size="md">
                            true
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            false
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            compact
                        </x-aura::text>

                        <x-aura::tooltip text="Reduced vertical padding for high density listings" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        false
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

                        <x-aura::badge variant="subtle" size="md">
                            true
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            false
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            hover
                        </x-aura::text>

                        <x-aura::tooltip text="Highlight row on pointer hover" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        true
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

                        <x-aura::badge variant="subtle" size="md">
                            true
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            false
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

            <x-aura::table.row>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :inline="true">

                        <x-aura::text variant="mono" size="sm" weight="semibold">
                            borderless
                        </x-aura::text>

                        <x-aura::tooltip text="Remove card outer border wrapper" position="top">

                            <x-aura::icon name="info" size="xs" />

                        </x-aura::tooltip>

                    </x-aura::flex>

                </x-aura::table.cell>

                <x-aura::table.cell>
                    <x-aura::badge variant="neutral" size="md">
                        false
                    </x-aura::badge>
                </x-aura::table.cell>

                <x-aura::table.cell>

                    <x-aura::flex align="center" gap="1.5" :wrap="true">

                        <x-aura::badge variant="subtle" size="md">
                            true
                        </x-aura::badge>

                        <x-aura::badge variant="subtle" size="md">
                            false
                        </x-aura::badge>

                    </x-aura::flex>

                </x-aura::table.cell>

            </x-aura::table.row>

        </x-aura::table>

    </x-aura::card>

</x-aura::container>

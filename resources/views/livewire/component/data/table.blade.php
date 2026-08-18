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
            Production data tables supporting avatars, status badges, progress indicators, and action toolbars.
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

    <!-- 1. User Table -->
    <x-aura::code title="1. Directory Table">

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

                                <x-aura::badge variant="{{ $user['status'] === 'Active' ? 'positive' : 'subtle' }}" size="sm">
                                    {{ $user['status'] }}
                                </x-aura::badge>

                            </x-aura::table.cell>

                            <x-aura::table.cell align="right">

                                <x-aura::flex align="center" justify="end" gap="1.5">

                                    <x-aura::icon-button icon="eye" variant="ghost" size="xs" label="View" />

                                    <x-aura::icon-button icon="pencil" variant="ghost" size="xs" label="Edit" />

                                    <x-aura::icon-button icon="trash-2" variant="danger" size="xs" label="Delete" />

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

                                <x-aura::badge variant="{{ $user['status'] === 'Active' ? 'positive' : 'subtle' }}" size="sm">
                                    {{ $user['status'] }}
                                </x-aura::badge>

                            </x-aura::table.cell>

                            <x-aura::table.cell align="right">

                                <x-aura::flex align="center" justify="end" gap="1.5">

                                    <x-aura::icon-button icon="eye" variant="ghost" size="xs" label="View" />

                                    <x-aura::icon-button icon="pencil" variant="ghost" size="xs" label="Edit" />

                                    <x-aura::icon-button icon="trash-2" variant="danger" size="xs" label="Delete" />

                                </x-aura::flex>

                            </x-aura::table.cell>

                        </x-aura::table.row>

                    @endforeach

                </x-aura::table>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>

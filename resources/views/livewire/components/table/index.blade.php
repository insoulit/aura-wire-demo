<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Table - Aura Wire');

?>

<div class="w-full max-w-4xl mx-auto space-y-10 flex flex-col items-center justify-center">
    <!-- Header -->
    <div class="space-y-3 text-center flex flex-col items-center">
        <x-aura::kicker>Data Display Components</x-aura::kicker>
        <x-aura::heading level="1" size="lg">Table</x-aura::heading>
        <x-aura::subheading class="max-w-lg">
            Structured grid tables for dataset visualization, user management, and transactional logs.
        </x-aura::subheading>
        <div class="pt-1">
            <code class="inline-flex items-center px-3.5 py-1.5 rounded-xl text-sm font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-2xs">
                &lt;x-aura::table&gt;
            </code>
        </div>
    </div>

    <!-- 1. Rich User Management Table -->
    <x-aura::code class="w-full" title="1. Rich User Management Table with Avatars & Actions">
        <x-slot:preview>
            <div class="w-full">
                <x-aura::table>
                    <x-slot:header>
                        <x-aura::table.column>User</x-aura::table.column>
                        <x-aura::table.column>Role</x-aura::table.column>
                        <x-aura::table.column>Status</x-aura::table.column>
                        <x-aura::table.column class="text-right">Action</x-aura::table.column>
                    </x-slot:header>

                    <x-aura::table.row>
                        <x-aura::table.cell>
                            <div class="flex items-center gap-3">
                                <x-aura::avatar initials="AM" status="online" size="sm" />
                                <div>
                                    <p class="font-bold text-zinc-900 dark:text-white">Alex Morgan</p>
                                    <p class="text-xs text-zinc-500">alex@company.com</p>
                                </div>
                            </div>
                        </x-aura::table.cell>
                        <x-aura::table.cell class="font-medium">Lead Developer</x-aura::table.cell>
                        <x-aura::table.cell><x-aura::badge variant="positive" size="sm">Active</x-aura::badge></x-aura::table.cell>
                        <x-aura::table.cell class="text-right">
                            <x-aura::button variant="ghost" square size="xs">
                                <x-aura::icon.edit size="xs" />
                            </x-aura::button>
                        </x-aura::table.cell>
                    </x-aura::table.row>

                    <x-aura::table.row>
                        <x-aura::table.cell>
                            <div class="flex items-center gap-3">
                                <x-aura::avatar initials="SC" status="away" size="sm" />
                                <div>
                                    <p class="font-bold text-zinc-900 dark:text-white">Sarah Chen</p>
                                    <p class="text-xs text-zinc-500">sarah@company.com</p>
                                </div>
                            </div>
                        </x-aura::table.cell>
                        <x-aura::table.cell class="font-medium">Product Designer</x-aura::table.cell>
                        <x-aura::table.cell><x-aura::badge variant="warning" size="sm">Away</x-aura::badge></x-aura::table.cell>
                        <x-aura::table.cell class="text-right">
                            <x-aura::button variant="ghost" square size="xs">
                                <x-aura::icon.edit size="xs" />
                            </x-aura::button>
                        </x-aura::table.cell>
                    </x-aura::table.row>
                </x-aura::table>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::table&gt;
    &lt;x-slot:header&gt;
        &lt;x-aura::table.column&gt;User&lt;/x-aura::table.column&gt;
        &lt;x-aura::table.column&gt;Role&lt;/x-aura::table.column&gt;
        &lt;x-aura::table.column&gt;Status&lt;/x-aura::table.column&gt;
    &lt;/x-slot:header&gt;

    &lt;x-aura::table.row&gt;
        &lt;x-aura::table.cell&gt;Alex Morgan&lt;/x-aura::table.cell&gt;
        &lt;x-aura::table.cell&gt;Lead Developer&lt;/x-aura::table.cell&gt;
        &lt;x-aura::table.cell&gt;&lt;x-aura::badge variant="positive"&gt;Active&lt;/x-aura::badge&gt;&lt;/x-aura::table.cell&gt;
    &lt;/x-aura::table.row&gt;
&lt;/x-aura::table&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>

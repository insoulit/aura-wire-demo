<?php

use Livewire\Volt\Component;

new class extends Component {};

?>

<section class="max-w-6xl mx-auto px-4 space-y-10 pt-16 sm:pt-24">
    <div class="text-center max-w-xl mx-auto">
        <x-aura::kicker>Layout Architectures</x-aura::kicker>
        <x-aura::heading level="2" size="xl">Application Layouts</x-aura::heading>
        <x-aura::subheading size="md">
            Interactive layout environment templates built with Aura Wire components.
        </x-aura::subheading>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        <!-- Portal 1: Guest Portal -->
        <div class="flex flex-col justify-between h-full group transition-all duration-200">
            <x-aura::card>
                <div class="space-y-4">
                    <!-- Card Header -->
                    <div class="flex items-center justify-between">
                        <div class="group-hover:scale-105 transition-transform pointer-events-none">
                            <x-aura::icon-button icon="globe" variant="secondary" size="lg" />
                        </div>
                        <x-aura::badge variant="subtle" size="sm">Public</x-aura::badge>
                    </div>

                    <!-- Mini Visual Layout Skeleton Diagram (100px height) -->
                    <div class="p-3 rounded-lg bg-zinc-100/70 dark:bg-zinc-950/60 border border-zinc-200/60 dark:border-zinc-800/80 space-y-2 select-none h-[100px] flex flex-col justify-between">
                        <div class="h-3 rounded bg-zinc-300 dark:bg-zinc-700/80 w-full flex items-center justify-between px-2 shrink-0">
                            <x-aura::skeleton height="6px" width="32px" />
                            <x-aura::skeleton height="6px" width="48px" />
                        </div>
                        <div class="h-14 rounded-md bg-zinc-200/80 dark:bg-zinc-800/60 border border-dashed border-zinc-300 dark:border-zinc-700/60 flex items-center justify-center font-mono text-[10px]">
                            <x-aura::text size="xs" variant="subtle">Guest Layout</x-aura::text>
                        </div>
                    </div>

                    <!-- Info -->
                    <div class="space-y-1.5">
                        <x-aura::heading level="3" size="sm">Guest</x-aura::heading>
                        <x-aura::text variant="subtle" size="sm">
                            Public-facing portal layout for landing pages, marketing features, and authentication screens.
                        </x-aura::text>
                    </div>
                </div>

                <x-slot:footer>
                    <div class="w-full">
                        <x-aura::button variant="primary" size="md" iconTrailing="arrow-right" href="/guest">
                            Explore Guest
                        </x-aura::button>
                    </div>
                </x-slot:footer>
            </x-aura::card>
        </div>

        <!-- Portal 2: User Workspace -->
        <div class="flex flex-col justify-between h-full group transition-all duration-200">
            <x-aura::card>
                <div class="space-y-4">
                    <!-- Card Header -->
                    <div class="flex items-center justify-between">
                        <div class="group-hover:scale-105 transition-transform pointer-events-none">
                            <x-aura::icon-button icon="user" variant="secondary" size="lg" />
                        </div>
                        <x-aura::badge variant="subtle" size="sm">Member</x-aura::badge>
                    </div>

                    <!-- Mini Visual Layout Skeleton Diagram (100px height) -->
                    <div class="p-3 rounded-lg bg-zinc-100/70 dark:bg-zinc-950/60 border border-zinc-200/60 dark:border-zinc-800/80 space-y-2 select-none h-[100px] flex flex-col justify-between">
                        <div class="h-3 rounded bg-zinc-300 dark:bg-zinc-700/80 w-full flex items-center justify-between px-2 shrink-0">
                            <x-aura::skeleton height="6px" width="40px" />
                            <x-aura::skeleton height="6px" width="16px" />
                        </div>
                        <div class="grid grid-cols-2 gap-1.5 h-14">
                            <div class="rounded-md bg-zinc-200/80 dark:bg-zinc-800/60 p-1.5 flex flex-col justify-between">
                                <x-aura::skeleton height="6px" width="24px" />
                                <x-aura::skeleton height="12px" width="32px" />
                            </div>
                            <div class="rounded-md bg-zinc-200/80 dark:bg-zinc-800/60 p-1.5 flex flex-col justify-between">
                                <x-aura::skeleton height="6px" width="24px" />
                                <x-aura::skeleton height="12px" width="32px" />
                            </div>
                        </div>
                    </div>

                    <!-- Info -->
                    <div class="space-y-1.5">
                        <x-aura::heading level="3" size="sm">User</x-aura::heading>
                        <x-aura::text variant="subtle" size="sm">
                            Authenticated member workspace layout featuring a header navbar, status badges, and project metrics.
                        </x-aura::text>
                    </div>
                </div>

                <x-slot:footer>
                    <div class="w-full">
                        <x-aura::button variant="primary" size="md" iconTrailing="arrow-right" href="/dashboard">
                            Launch User
                        </x-aura::button>
                    </div>
                </x-slot:footer>
            </x-aura::card>
        </div>

        <!-- Portal 3: Admin Console -->
        <div class="flex flex-col justify-between h-full group transition-all duration-200">
            <x-aura::card>
                <div class="space-y-4">
                    <!-- Card Header -->
                    <div class="flex items-center justify-between">
                        <div class="group-hover:scale-105 transition-transform pointer-events-none">
                            <x-aura::icon-button icon="shield-check" variant="primary" size="lg" />
                        </div>
                        <x-aura::badge variant="primary" size="sm">Admin</x-aura::badge>
                    </div>

                    <!-- Mini Visual Layout Skeleton Diagram (100px height) -->
                    <div class="p-3 rounded-lg bg-zinc-100/70 dark:bg-zinc-950/60 border border-zinc-200/60 dark:border-zinc-800/80 flex gap-2 h-[100px] select-none">
                        <!-- Mini Sidebar -->
                        <div class="w-7 rounded-md bg-zinc-900 dark:bg-zinc-800 p-1.5 flex flex-col gap-1.5 shrink-0 justify-start">
                            <x-aura::skeleton height="6px" />
                            <x-aura::skeleton height="4px" />
                            <x-aura::skeleton height="4px" />
                            <x-aura::skeleton height="4px" />
                        </div>
                        <!-- Mini Main -->
                        <div class="flex-1 flex flex-col justify-between gap-2">
                            <div class="h-3 rounded bg-zinc-200 dark:bg-zinc-800 w-full flex items-center px-1 shrink-0">
                                <x-aura::skeleton height="4px" width="32px" />
                            </div>
                            <div class="flex-1 rounded-md bg-zinc-200/80 dark:bg-zinc-800/60 border border-dashed border-zinc-300 dark:border-zinc-700/60 flex items-center justify-center font-mono text-[10px]">
                                <x-aura::text size="xs" variant="subtle">Admin Layout</x-aura::text>
                            </div>
                        </div>
                    </div>

                    <!-- Info -->
                    <div class="space-y-1.5">
                        <x-aura::heading level="3" size="sm">Admin</x-aura::heading>
                        <x-aura::text variant="subtle" size="sm">
                            System administrator console layout featuring a dedicated sidebar navigation, metrics, and health logs.
                        </x-aura::text>
                    </div>
                </div>

                <x-slot:footer>
                    <div class="w-full">
                        <x-aura::button variant="primary" size="md" iconTrailing="arrow-right" href="/admin">
                            Access Admin
                        </x-aura::button>
                    </div>
                </x-slot:footer>
            </x-aura::card>
        </div>

    </div>
</section>

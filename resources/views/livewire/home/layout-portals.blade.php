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
        <x-aura::card class="flex flex-col justify-between h-full group hover:border-zinc-400 dark:hover:border-zinc-600 transition-all duration-200 shadow-sm hover:shadow-md">
            <div class="space-y-4">
                <!-- Card Header -->
                <div class="flex items-center justify-between">
                    <x-aura::icon-button icon="globe" variant="secondary" size="lg" class="rounded-xl group-hover:scale-105 transition-transform pointer-events-none" />
                    <x-aura::badge variant="subtle" size="sm">Public</x-aura::badge>
                </div>

                <!-- Mini Visual Layout Skeleton Diagram (100px height) -->
                <div class="p-3 rounded-lg bg-zinc-100/70 dark:bg-zinc-950/60 border border-zinc-200/60 dark:border-zinc-800/80 space-y-2 select-none h-[100px] flex flex-col justify-between">
                    <div class="h-3 rounded bg-zinc-300 dark:bg-zinc-700/80 w-full flex items-center justify-between px-2 shrink-0">
                        <x-aura::skeleton height="6px" width="32px" class="bg-zinc-400 dark:bg-zinc-600" />
                        <x-aura::skeleton height="6px" width="48px" class="bg-zinc-400 dark:bg-zinc-600" />
                    </div>
                    <div class="h-14 rounded-md bg-zinc-200/80 dark:bg-zinc-800/60 border border-dashed border-zinc-300 dark:border-zinc-700/60 flex items-center justify-center">
                        <x-aura::text size="xs" variant="subtle" class="font-mono text-[10px]">Guest Layout</x-aura::text>
                    </div>
                </div>

                <!-- Info -->
                <div>
                    <x-aura::heading level="3" size="sm">Guest</x-aura::heading>
                    <x-aura::text variant="subtle" size="sm" class="mt-1.5 leading-relaxed">
                        Public-facing portal layout for landing pages, marketing features, and authentication screens.
                    </x-aura::text>
                </div>
            </div>

            <x-slot:footer>
                <x-aura::button variant="primary" size="md" iconTrailing="arrow-right" class="w-full justify-between" href="/guest">
                    Explore Guest
                </x-aura::button>
            </x-slot:footer>
        </x-aura::card>

        <!-- Portal 2: User Workspace -->
        <x-aura::card class="flex flex-col justify-between h-full group hover:border-zinc-400 dark:hover:border-zinc-600 transition-all duration-200 shadow-sm hover:shadow-md">
            <div class="space-y-4">
                <!-- Card Header -->
                <div class="flex items-center justify-between">
                    <x-aura::icon-button icon="user" variant="secondary" size="lg" class="rounded-xl group-hover:scale-105 transition-transform pointer-events-none" />
                    <x-aura::badge variant="subtle" size="sm">Member</x-aura::badge>
                </div>

                <!-- Mini Visual Layout Skeleton Diagram (100px height) -->
                <div class="p-3 rounded-lg bg-zinc-100/70 dark:bg-zinc-950/60 border border-zinc-200/60 dark:border-zinc-800/80 space-y-2 select-none h-[100px] flex flex-col justify-between">
                    <div class="h-3 rounded bg-zinc-300 dark:bg-zinc-700/80 w-full flex items-center justify-between px-2 shrink-0">
                        <x-aura::skeleton height="6px" width="40px" class="bg-zinc-400 dark:bg-zinc-600" />
                        <x-aura::skeleton height="6px" width="16px" class="bg-zinc-400 dark:bg-zinc-600 rounded-full" />
                    </div>
                    <div class="grid grid-cols-2 gap-1.5 h-14">
                        <div class="rounded-md bg-zinc-200/80 dark:bg-zinc-800/60 p-1.5 flex flex-col justify-between">
                            <x-aura::skeleton height="6px" width="24px" class="bg-zinc-400 dark:bg-zinc-600" />
                            <x-aura::skeleton height="12px" width="32px" class="bg-zinc-400 dark:bg-zinc-500" />
                        </div>
                        <div class="rounded-md bg-zinc-200/80 dark:bg-zinc-800/60 p-1.5 flex flex-col justify-between">
                            <x-aura::skeleton height="6px" width="24px" class="bg-zinc-400 dark:bg-zinc-600" />
                            <x-aura::skeleton height="12px" width="32px" class="bg-zinc-400 dark:bg-zinc-500" />
                        </div>
                    </div>
                </div>

                <!-- Info -->
                <div>
                    <x-aura::heading level="3" size="sm">User</x-aura::heading>
                    <x-aura::text variant="subtle" size="sm" class="mt-1.5 leading-relaxed">
                        Authenticated member workspace layout featuring a header navbar, status badges, and project metrics.
                    </x-aura::text>
                </div>
            </div>

            <x-slot:footer>
                <x-aura::button variant="primary" size="md" iconTrailing="arrow-right" class="w-full justify-between" href="/dashboard">
                    Launch User
                </x-aura::button>
            </x-slot:footer>
        </x-aura::card>

        <!-- Portal 3: Admin Console -->
        <x-aura::card class="flex flex-col justify-between h-full group hover:border-zinc-400 dark:hover:border-zinc-600 transition-all duration-200 shadow-sm hover:shadow-md">
            <div class="space-y-4">
                <!-- Card Header -->
                <div class="flex items-center justify-between">
                    <x-aura::icon-button icon="shield-check" variant="primary" size="lg" class="rounded-xl group-hover:scale-105 transition-transform pointer-events-none" />
                    <x-aura::badge variant="primary" size="sm">Admin</x-aura::badge>
                </div>

                <!-- Mini Visual Layout Skeleton Diagram (100px height) -->
                <div class="p-3 rounded-lg bg-zinc-100/70 dark:bg-zinc-950/60 border border-zinc-200/60 dark:border-zinc-800/80 flex gap-2 h-[100px] select-none">
                    <!-- Mini Sidebar -->
                    <div class="w-7 rounded-md bg-zinc-900 dark:bg-zinc-800 p-1.5 flex flex-col gap-1.5 shrink-0 justify-start">
                        <x-aura::skeleton height="6px" class="w-full bg-white/40 dark:bg-zinc-600" />
                        <x-aura::skeleton height="4px" class="w-full bg-white/20 dark:bg-zinc-700" />
                        <x-aura::skeleton height="4px" class="w-full bg-white/20 dark:bg-zinc-700" />
                        <x-aura::skeleton height="4px" class="w-full bg-white/20 dark:bg-zinc-700" />
                    </div>
                    <!-- Mini Main -->
                    <div class="flex-1 flex flex-col justify-between gap-2">
                        <div class="h-3 rounded bg-zinc-200 dark:bg-zinc-800 w-full flex items-center px-1 shrink-0">
                            <x-aura::skeleton height="4px" width="32px" class="bg-zinc-400 dark:bg-zinc-600" />
                        </div>
                        <div class="flex-1 rounded-md bg-zinc-200/80 dark:bg-zinc-800/60 border border-dashed border-zinc-300 dark:border-zinc-700/60 flex items-center justify-center">
                            <x-aura::text size="xs" variant="subtle" class="font-mono text-[10px]">Admin Layout</x-aura::text>
                        </div>
                    </div>
                </div>

                <!-- Info -->
                <div>
                    <x-aura::heading level="3" size="sm">Admin</x-aura::heading>
                    <x-aura::text variant="subtle" size="sm" class="mt-1.5 leading-relaxed">
                        System administrator console layout featuring a dedicated sidebar navigation, metrics, and health logs.
                    </x-aura::text>
                </div>
            </div>

            <x-slot:footer>
                <x-aura::button variant="primary" size="md" iconTrailing="arrow-right" class="w-full justify-between" href="/admin">
                    Access Admin
                </x-aura::button>
            </x-slot:footer>
        </x-aura::card>

    </div>
</section>

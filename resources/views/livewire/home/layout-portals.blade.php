<?php

use Livewire\Volt\Component;

new class extends Component {};

?>

<x-aura::container size="6xl" gap="12">

    <x-aura::container size="xl" gap="0.5" :padding="false">

        <x-aura::kicker align="center">
            Layout Architectures
        </x-aura::kicker>

        <x-aura::heading level="2" size="xl" align="center">
            Application Layouts
        </x-aura::heading>

        <x-aura::subheading size="md" align="center">
            Interactive layout environment templates built with Aura Wire components.
        </x-aura::subheading>

    </x-aura::container>

    <x-aura::grid cols="1" md="3" gap="6">

        <!-- Portal 1: Guest Portal -->
        <x-aura::card>

            <x-aura::flex direction="col" gap="4">

                <!-- Card Header -->
                <x-aura::flex align="center" justify="between">

                    <div class="relative group-hover:scale-110 transition-transform duration-300 pointer-events-none">

                        <div class="absolute inset-0 bg-zinc-400/20 dark:bg-zinc-500/10 rounded-xl blur-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>

                        <x-aura::icon-button icon="globe" variant="secondary" size="lg" />

                    </div>

                    <x-aura::badge variant="subtle" size="sm">
                        Public
                    </x-aura::badge>

                </x-aura::flex>

                <!-- Mini Visual Layout Skeleton — Guest -->
                <div class="relative overflow-hidden p-3 rounded-xl bg-gradient-to-b from-zinc-50 to-zinc-100/80 dark:from-zinc-950/80 dark:to-zinc-900/60 border border-zinc-200/70 dark:border-zinc-800/80 select-none h-[120px] flex flex-col gap-1.5 transition-all duration-300 group-hover:border-zinc-400/50 dark:group-hover:border-zinc-600/40 group-hover:shadow-[0_0_20px_-4px_rgba(0,0,0,0.1)] dark:group-hover:shadow-[0_0_20px_-4px_rgba(255,255,255,0.06)]">

                    <div class="absolute -top-4 left-1/2 -translate-x-1/2 w-16 h-8 bg-zinc-400/10 dark:bg-zinc-500/8 rounded-full blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

                    <!-- Navbar -->
                    <div class="h-3.5 rounded-md bg-zinc-200/90 dark:bg-zinc-800/90 w-full flex items-center justify-between px-2 shrink-0">

                        <x-aura::skeleton height="5px" width="28px" />

                        <div class="flex gap-1">

                            <x-aura::skeleton height="5px" width="20px" />

                            <x-aura::skeleton height="5px" width="20px" />

                            <x-aura::skeleton height="5px" width="20px" />

                        </div>

                    </div>

                    <!-- Hero content area -->
                    <div class="flex-1 flex flex-col items-center justify-center gap-1.5 px-4">

                        <x-aura::skeleton height="6px" width="64px" />

                        <x-aura::skeleton height="4px" width="96px" />

                        <div class="flex gap-1.5 mt-1">

                            <div class="h-3 w-10 rounded-sm bg-zinc-900 dark:bg-white"></div>

                            <div class="h-3 w-10 rounded-sm bg-zinc-300 dark:bg-zinc-700"></div>

                        </div>

                    </div>

                    <!-- Footer -->
                    <div class="h-2.5 rounded-md bg-zinc-200/60 dark:bg-zinc-800/50 w-full shrink-0 flex items-center justify-center">

                        <x-aura::skeleton height="3px" width="40px" />

                    </div>

                </div>

                <!-- Info -->
                <x-aura::flex direction="col" gap="1.5">

                    <x-aura::heading level="3" size="sm">
                        Guest
                    </x-aura::heading>

                    <x-aura::text variant="subtle" size="sm">
                        Public facing portal layout for landing pages, marketing features, and authentication screens.
                    </x-aura::text>

                </x-aura::flex>

            </x-aura::flex>

            <x-slot:footer>

                <x-aura::button variant="primary" size="md" :block="true" href="/guest" icon-trailing="arrow-right">
                    Explore
                </x-aura::button>

            </x-slot:footer>

        </x-aura::card>

        <!-- Portal 2: User Workspace -->
        <x-aura::card>

            <x-aura::flex direction="col" gap="4">

                <!-- Card Header -->
                <x-aura::flex align="center" justify="between">

                    <div class="relative group-hover:scale-110 transition-transform duration-300 pointer-events-none">

                        <div class="absolute inset-0 bg-zinc-400/20 dark:bg-zinc-500/10 rounded-xl blur-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>

                        <x-aura::icon-button icon="user" variant="secondary" size="lg" />

                    </div>

                    <x-aura::badge variant="subtle" size="sm">
                        Member
                    </x-aura::badge>

                </x-aura::flex>

                <!-- Mini Visual Layout Skeleton — User -->
                <div class="relative overflow-hidden p-3 rounded-xl bg-gradient-to-b from-zinc-50 to-zinc-100/80 dark:from-zinc-950/80 dark:to-zinc-900/60 border border-zinc-200/70 dark:border-zinc-800/80 select-none h-[120px] flex flex-col gap-1.5 transition-all duration-300 group-hover:border-zinc-400/50 dark:group-hover:border-zinc-600/40 group-hover:shadow-[0_0_20px_-4px_rgba(0,0,0,0.1)] dark:group-hover:shadow-[0_0_20px_-4px_rgba(255,255,255,0.06)]">

                    <div class="absolute -top-4 left-1/2 -translate-x-1/2 w-16 h-8 bg-zinc-400/10 dark:bg-zinc-500/8 rounded-full blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

                    <!-- Header bar -->
                    <div class="h-3.5 rounded-md bg-zinc-200/90 dark:bg-zinc-800/90 w-full flex items-center justify-between px-2 shrink-0">

                        <x-aura::skeleton height="5px" width="36px" />

                        <div class="flex items-center gap-1">

                            <x-aura::skeleton height="5px" width="14px" />

                            <div class="w-3 h-3 rounded-full bg-zinc-300 dark:bg-zinc-700"></div>

                        </div>

                    </div>

                    <!-- Stat cards row -->
                    <div class="grid grid-cols-3 gap-1.5 shrink-0">

                        <div class="rounded-md bg-zinc-200/80 dark:bg-zinc-800/60 p-1.5 flex flex-col justify-between gap-0.5">

                            <x-aura::skeleton height="4px" width="16px" />

                            <x-aura::skeleton height="8px" width="20px" />

                        </div>

                        <div class="rounded-md bg-zinc-300/80 dark:bg-zinc-700/40 border border-zinc-400/60 dark:border-zinc-600/40 p-1.5 flex flex-col justify-between gap-0.5">

                            <x-aura::skeleton height="4px" width="16px" />

                            <x-aura::skeleton height="8px" width="20px" />

                        </div>

                        <div class="rounded-md bg-zinc-200/80 dark:bg-zinc-800/60 p-1.5 flex flex-col justify-between gap-0.5">

                            <x-aura::skeleton height="4px" width="16px" />

                            <x-aura::skeleton height="8px" width="20px" />

                        </div>

                    </div>

                    <!-- Content area -->
                    <div class="flex-1 rounded-md bg-zinc-200/50 dark:bg-zinc-800/40 p-1.5 flex flex-col gap-1 justify-start overflow-hidden">

                        <div class="flex items-center gap-1">

                            <x-aura::skeleton height="4px" width="100%" />

                        </div>

                        <div class="flex items-center gap-1">

                            <x-aura::skeleton height="4px" width="80%" />

                        </div>

                        <div class="flex items-center gap-1">

                            <x-aura::skeleton height="4px" width="60%" />

                        </div>

                    </div>

                </div>

                <!-- Info -->
                <x-aura::flex direction="col" gap="1.5">

                    <x-aura::heading level="3" size="sm">
                        User
                    </x-aura::heading>

                    <x-aura::text variant="subtle" size="sm">
                        Authenticated member workspace layout featuring a header navbar, status badges, and project metrics.
                    </x-aura::text>

                </x-aura::flex>

            </x-aura::flex>

            <x-slot:footer>

                <x-aura::button variant="primary" size="md" :block="true" href="/user" icon-trailing="arrow-right">
                    Launch
                </x-aura::button>

            </x-slot:footer>

        </x-aura::card>

        <!-- Portal 3: Admin Console -->
        <x-aura::card>

            <x-aura::flex direction="col" gap="4">

                <!-- Card Header -->
                <x-aura::flex align="center" justify="between">

                    <div class="relative group-hover:scale-110 transition-transform duration-300 pointer-events-none">

                        <div class="absolute inset-0 bg-zinc-400/20 dark:bg-zinc-500/10 rounded-xl blur-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>

                        <x-aura::icon-button icon="shield-check" variant="primary" size="lg" />

                    </div>

                    <x-aura::badge variant="primary" size="sm">
                        Admin
                    </x-aura::badge>

                </x-aura::flex>

                <!-- Mini Visual Layout Skeleton — Admin -->
                <div class="relative overflow-hidden p-3 rounded-xl bg-gradient-to-b from-zinc-50 to-zinc-100/80 dark:from-zinc-950/80 dark:to-zinc-900/60 border border-zinc-200/70 dark:border-zinc-800/80 flex gap-2 h-[120px] select-none transition-all duration-300 group-hover:border-zinc-400/50 dark:group-hover:border-zinc-600/40 group-hover:shadow-[0_0_20px_-4px_rgba(0,0,0,0.1)] dark:group-hover:shadow-[0_0_20px_-4px_rgba(255,255,255,0.06)]">

                    <div class="absolute -top-4 -left-2 w-12 h-8 bg-zinc-400/10 dark:bg-zinc-500/8 rounded-full blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

                    <!-- Mini Sidebar -->
                    <div class="w-8 rounded-lg bg-zinc-900 dark:bg-zinc-800 p-1.5 flex flex-col gap-1.5 shrink-0 justify-start">

                        <div class="w-full h-3 rounded-sm bg-zinc-600/30 dark:bg-zinc-500/30 flex items-center justify-center">

                            <x-aura::skeleton height="4px" width="12px" />

                        </div>

                        <div class="w-full h-0.5 rounded bg-zinc-700/50 my-0.5"></div>

                        <x-aura::skeleton height="4px" />

                        <x-aura::skeleton height="4px" />

                        <x-aura::skeleton height="4px" />

                        <div class="mt-auto">

                            <x-aura::skeleton height="4px" width="16px" />

                        </div>

                    </div>

                    <!-- Mini Main Area -->
                    <div class="flex-1 flex flex-col gap-1.5">

                        <!-- Top bar -->
                        <div class="h-3.5 rounded-md bg-zinc-200/90 dark:bg-zinc-800/90 w-full flex items-center justify-between px-1.5 shrink-0">

                            <x-aura::skeleton height="4px" width="28px" />

                            <div class="flex items-center gap-1">

                                <div class="w-2 h-2 rounded-full bg-zinc-400 dark:bg-zinc-500"></div>

                                <x-aura::skeleton height="4px" width="12px" />

                            </div>

                        </div>

                        <!-- Content grid -->
                        <div class="flex-1 grid grid-cols-2 gap-1.5">

                            <div class="rounded-md bg-zinc-200/80 dark:bg-zinc-800/60 p-1.5 flex flex-col gap-1">

                                <x-aura::skeleton height="4px" width="20px" />

                                <div class="flex-1 rounded-sm bg-zinc-300/60 dark:bg-zinc-700/40"></div>

                            </div>

                            <div class="rounded-md bg-zinc-200/80 dark:bg-zinc-800/60 p-1.5 flex flex-col gap-1">

                                <x-aura::skeleton height="4px" width="20px" />

                                <div class="flex-1 flex flex-col gap-0.5 justify-end">

                                    <div class="h-1 rounded-full bg-zinc-900/40 dark:bg-white/30 w-3/4"></div>

                                    <div class="h-1 rounded-full bg-zinc-300/60 dark:bg-zinc-700/40 w-1/2"></div>

                                    <div class="h-1 rounded-full bg-zinc-300/60 dark:bg-zinc-700/40 w-full"></div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Info -->
                <x-aura::flex direction="col" gap="1.5">

                    <x-aura::heading level="3" size="sm">
                        Admin
                    </x-aura::heading>

                    <x-aura::text variant="subtle" size="sm">
                        System administrator console layout featuring a dedicated sidebar navigation, metrics, and health logs.
                    </x-aura::text>

                </x-aura::flex>

            </x-aura::flex>

            <x-slot:footer>

                <x-aura::button variant="primary" size="md" :block="true" href="/admin" icon-trailing="arrow-right">
                    Access
                </x-aura::button>

            </x-slot:footer>

        </x-aura::card>

    </x-aura::grid>

</x-aura::container>

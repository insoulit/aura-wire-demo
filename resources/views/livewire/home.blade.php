<?php

use function Livewire\Volt\{layout, title};

layout('layout.app');
title('Aura Wire — Modern Blade & Livewire UI Components for Laravel');

?>

<div class="w-full space-y-20 pb-16">

    <!-- 1. Hero Section (Option 3: Hero + Code Snippet Terminal Card) -->
    <section class="min-h-[calc(100vh-5rem)] flex flex-col justify-between items-center max-w-4xl mx-auto px-4 py-8 text-center space-y-8">
        <!-- Top Empty Spacer for Vertical Balance -->
        <div></div>

        <!-- Hero Content -->
        <div class="space-y-6 max-w-2xl mx-auto flex flex-col items-center">
            
            <!-- Top Version Pill -->
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-zinc-100 dark:bg-zinc-800/80 border border-zinc-200/80 dark:border-zinc-700/60 shadow-2xs">
                <x-aura::badge variant="positive" size="sm" class="font-semibold">v1.4.0</x-aura::badge>
                <span class="text-xs font-medium text-zinc-600 dark:text-zinc-300">Laravel 11/12 &amp; Livewire 3</span>
            </div>

            <!-- Display Headline & Subtitle -->
            <div class="space-y-1.5 text-center">
                <h1 class="text-5xl sm:text-6xl font-black tracking-tight text-zinc-900 dark:text-white">
                    Aura Wire
                </h1>
                <p class="text-lg sm:text-xl font-medium text-zinc-500 dark:text-zinc-400 tracking-tight">
                    Component Suite for Laravel
                </p>
            </div>

            <!-- Description -->
            <p class="text-sm sm:text-base text-zinc-600 dark:text-zinc-400 max-w-md mx-auto text-center leading-relaxed">
                Unstyled-first Blade components, block layouts, and full-page portal templates.
            </p>

            <!-- Action CTAs -->
            <div class="pt-1 flex flex-wrap items-center justify-center gap-3">
                <x-aura::button variant="primary" size="lg" href="/components" class="shadow-sm">
                    <span>Components</span>
                    <x-aura::icon name="arrow-right" class="w-4 h-4 ml-1.5 inline-block" />
                </x-aura::button>

                <x-aura::button variant="outline" size="lg" href="https://github.com/insoulit/aura-wire" target="_blank" rel="noopener noreferrer">
                    <svg class="w-4 h-4 mr-1.5 inline-block" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.53 1.032 1.53 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"/></svg>
                    <span>GitHub</span>
                </x-aura::button>
            </div>
        </div>

        <!-- IDE Code Snippet Terminal Card -->
        <div class="w-full max-w-2xl text-left rounded-2xl bg-zinc-900 text-zinc-100 border border-zinc-800 shadow-2xl overflow-hidden font-mono text-xs">
            <!-- Window Header Bar -->
            <div class="flex items-center justify-between px-4 py-3 bg-zinc-950/80 border-b border-zinc-800/80">
                <div class="flex items-center gap-2">
                    <div class="w-3 h-3 rounded-full bg-red-500/80"></div>
                    <div class="w-3 h-3 rounded-full bg-amber-500/80"></div>
                    <div class="w-3 h-3 rounded-full bg-emerald-500/80"></div>
                    <span class="ml-2 text-[11px] text-zinc-400 font-sans font-medium">resources/views/welcome.blade.php</span>
                </div>
                <div
                    x-data="{ copied: false, snippet: @js('<x-aura::card title=\'Welcome\'>\n    <x-aura::input label=\'Email\' />\n    <x-aura::button variant=\'primary\'>Submit</x-aura::button>\n</x-aura::card>') }"
                    x-on:click="navigator.clipboard.writeText(snippet); copied = true; setTimeout(() => copied = false, 2000)"
                    class="flex items-center gap-1.5 px-2.5 py-1 rounded-md bg-zinc-800/60 hover:bg-zinc-800 text-zinc-300 hover:text-white transition-colors cursor-pointer text-[11px] font-sans"
                >
                    <template x-if="!copied">
                        <div class="flex items-center gap-1">
                            <x-aura::icon name="copy" class="w-3 h-3" />
                            <span>Copy Code</span>
                        </div>
                    </template>
                    <template x-if="copied">
                        <div class="flex items-center gap-1 text-emerald-400">
                            <x-aura::icon name="check" class="w-3 h-3" />
                            <span>Copied!</span>
                        </div>
                    </template>
                </div>
            </div>

            <!-- Code Preview Content -->
            <div class="p-4 sm:p-5 space-y-1.5 overflow-x-auto text-[12px] leading-relaxed">
                <div><span class="text-zinc-500">&lt;!-- Easy Blade Component Usage --&gt;</span></div>
                <div><span class="text-indigo-400">&lt;x-aura::card</span> <span class="text-emerald-300">title</span>=<span class="text-amber-300">"Welcome to Aura Wire"</span><span class="text-indigo-400">&gt;</span></div>
                <div class="pl-4"><span class="text-indigo-400">&lt;x-aura::field</span> <span class="text-emerald-300">label</span>=<span class="text-amber-300">"Email Address"</span><span class="text-indigo-400">&gt;</span></div>
                <div class="pl-8"><span class="text-indigo-400">&lt;x-aura::input</span> <span class="text-emerald-300">placeholder</span>=<span class="text-amber-300">"alex@example.com"</span> <span class="text-indigo-400">/&gt;</span></div>
                <div class="pl-4"><span class="text-indigo-400">&lt;/x-aura::field&gt;</span></div>
                <div class="pl-4 pt-1"><span class="text-indigo-400">&lt;x-aura::button</span> <span class="text-emerald-300">variant</span>=<span class="text-amber-300">"primary"</span><span class="text-indigo-400">&gt;</span>Create<span class="text-indigo-400">&lt;/x-aura::button&gt;</span></div>
                <div><span class="text-indigo-400">&lt;/x-aura::card&gt;</span></div>
            </div>
        </div>

        <!-- Bottom Scroll Down Hint -->
        <div class="pt-4 flex flex-col items-center gap-1.5 animate-bounce">
            <x-aura::text size="xs" variant="subtle" class="font-medium tracking-wider uppercase">Scroll For Demos</x-aura::text>
            <x-aura::icon name="arrow-down" class="w-4 h-4 text-zinc-400" />
        </div>
    </section>

    <!-- 2. Application Layout Portals (Elevated Interactive Showcase) -->
    <section class="max-w-6xl mx-auto px-4 space-y-10 pt-4">
        <div class="text-center space-y-2 max-w-xl mx-auto">
            <x-aura::kicker>Layout Architectures</x-aura::kicker>
            <x-aura::heading level="2" size="lg">Explore Application Layouts</x-aura::heading>
            <x-aura::subheading size="sm">
                Interactive layout environment templates built with Aura Wire components.
            </x-aura::subheading>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            <!-- Portal 1: Guest Portal -->
            <x-aura::card class="flex flex-col justify-between h-full group hover:border-zinc-400 dark:hover:border-zinc-600 transition-all duration-200 shadow-sm hover:shadow-md">
                <div class="space-y-4">
                    <!-- Card Header -->
                    <div class="flex items-center justify-between">
                        <div class="w-10 h-10 rounded-xl bg-zinc-100 dark:bg-zinc-800 text-zinc-900 dark:text-white flex items-center justify-center font-bold border border-zinc-200/80 dark:border-zinc-700/60 shadow-2xs group-hover:scale-105 transition-transform">
                            <x-aura::icon name="globe" class="w-5 h-5 text-zinc-900 dark:text-white" />
                        </div>
                        <x-aura::badge variant="neutral" size="sm">Public Portal</x-aura::badge>
                    </div>

                    <!-- Mini Visual Layout Skeleton Diagram -->
                    <div class="p-3 rounded-lg bg-zinc-100/70 dark:bg-zinc-950/60 border border-zinc-200/60 dark:border-zinc-800/80 space-y-2 select-none">
                        <div class="h-3 rounded bg-zinc-300 dark:bg-zinc-700/80 w-full flex items-center justify-between px-2">
                            <div class="h-1.5 w-8 rounded bg-zinc-400 dark:bg-zinc-600"></div>
                            <div class="h-1.5 w-12 rounded bg-zinc-400 dark:bg-zinc-600"></div>
                        </div>
                        <div class="h-14 rounded-md bg-zinc-200/80 dark:bg-zinc-800/60 border border-dashed border-zinc-300 dark:border-zinc-700/60 flex items-center justify-center">
                            <x-aura::text size="xs" variant="subtle" class="font-mono text-[10px]">Hero Layout</x-aura::text>
                        </div>
                    </div>

                    <!-- Info -->
                    <div>
                        <x-aura::heading level="3" size="xs">Guest Layout</x-aura::heading>
                        <x-aura::text variant="subtle" size="xs" class="mt-1.5 leading-relaxed">
                            Public-facing portal layout for landing pages, marketing features, and authentication screens.
                        </x-aura::text>
                    </div>
                </div>

                <x-slot:footer>
                    <x-aura::button variant="primary" size="md" class="w-full justify-between" href="/guest">
                        <span>Explore Guest Portal</span>
                        <x-aura::icon name="arrow-right" class="w-4 h-4 ml-2 shrink-0 inline-block" />
                    </x-aura::button>
                </x-slot:footer>
            </x-aura::card>

            <!-- Portal 2: User Workspace -->
            <x-aura::card class="flex flex-col justify-between h-full group hover:border-zinc-400 dark:hover:border-zinc-600 transition-all duration-200 shadow-sm hover:shadow-md">
                <div class="space-y-4">
                    <!-- Card Header -->
                    <div class="flex items-center justify-between">
                        <div class="w-10 h-10 rounded-xl bg-zinc-100 dark:bg-zinc-800 text-zinc-900 dark:text-white flex items-center justify-center font-bold border border-zinc-200/80 dark:border-zinc-700/60 shadow-2xs group-hover:scale-105 transition-transform">
                            <x-aura::icon name="user" class="w-5 h-5 text-zinc-900 dark:text-white" />
                        </div>
                        <x-aura::badge variant="positive" size="sm">Member Portal</x-aura::badge>
                    </div>

                    <!-- Mini Visual Layout Skeleton Diagram -->
                    <div class="p-3 rounded-lg bg-zinc-100/70 dark:bg-zinc-950/60 border border-zinc-200/60 dark:border-zinc-800/80 space-y-2 select-none">
                        <div class="h-3 rounded bg-zinc-300 dark:bg-zinc-700/80 w-full flex items-center justify-between px-2">
                            <div class="h-1.5 w-10 rounded bg-zinc-400 dark:bg-zinc-600"></div>
                            <div class="h-1.5 w-4 rounded-full bg-zinc-400 dark:bg-zinc-600"></div>
                        </div>
                        <div class="grid grid-cols-2 gap-1.5 h-14">
                            <div class="rounded-md bg-zinc-200/80 dark:bg-zinc-800/60 p-1.5 flex flex-col justify-between">
                                <div class="h-1.5 w-6 bg-zinc-400 dark:bg-zinc-600 rounded"></div>
                                <div class="h-3 w-8 bg-zinc-400 dark:bg-zinc-500 rounded"></div>
                            </div>
                            <div class="rounded-md bg-zinc-200/80 dark:bg-zinc-800/60 p-1.5 flex flex-col justify-between">
                                <div class="h-1.5 w-6 bg-zinc-400 dark:bg-zinc-600 rounded"></div>
                                <div class="h-3 w-8 bg-zinc-400 dark:bg-zinc-500 rounded"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Info -->
                    <div>
                        <x-aura::heading level="3" size="xs">User Workspace</x-aura::heading>
                        <x-aura::text variant="subtle" size="xs" class="mt-1.5 leading-relaxed">
                            Authenticated member workspace layout featuring a header navbar, status badges, and project metrics.
                        </x-aura::text>
                    </div>
                </div>

                <x-slot:footer>
                    <x-aura::button variant="primary" size="md" class="w-full justify-between" href="/dashboard">
                        <span>Launch Workspace</span>
                        <x-aura::icon name="arrow-right" class="w-4 h-4 ml-2 shrink-0 inline-block" />
                    </x-aura::button>
                </x-slot:footer>
            </x-aura::card>

            <!-- Portal 3: Admin Console -->
            <x-aura::card class="flex flex-col justify-between h-full group hover:border-zinc-400 dark:hover:border-zinc-600 transition-all duration-200 shadow-sm hover:shadow-md">
                <div class="space-y-4">
                    <!-- Card Header -->
                    <div class="flex items-center justify-between">
                        <div class="w-10 h-10 rounded-xl bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 flex items-center justify-center font-bold border border-transparent shadow-2xs group-hover:scale-105 transition-transform">
                            <x-aura::icon name="shield-check" class="w-5 h-5" />
                        </div>
                        <x-aura::badge variant="primary" size="sm">Admin Portal</x-aura::badge>
                    </div>

                    <!-- Mini Visual Layout Skeleton Diagram -->
                    <div class="p-3 rounded-lg bg-zinc-100/70 dark:bg-zinc-950/60 border border-zinc-200/60 dark:border-zinc-800/80 flex gap-2 h-[76px] select-none">
                        <!-- Mini Sidebar -->
                        <div class="w-7 rounded bg-zinc-900 dark:bg-zinc-800 p-1 flex flex-col gap-1 shrink-0">
                            <div class="h-1.5 w-full bg-white/40 dark:bg-zinc-600 rounded"></div>
                            <div class="h-1 w-full bg-white/20 dark:bg-zinc-700 rounded"></div>
                            <div class="h-1 w-full bg-white/20 dark:bg-zinc-700 rounded"></div>
                            <div class="h-1 w-full bg-white/20 dark:bg-zinc-700 rounded"></div>
                        </div>
                        <!-- Mini Main -->
                        <div class="flex-1 flex flex-col justify-between gap-1.5">
                            <div class="h-3 rounded bg-zinc-200 dark:bg-zinc-800 w-full flex items-center px-1">
                                <div class="h-1 w-8 bg-zinc-400 dark:bg-zinc-600 rounded"></div>
                            </div>
                            <div class="flex-1 rounded bg-zinc-200/80 dark:bg-zinc-800/60 border border-dashed border-zinc-300 dark:border-zinc-700/60 flex items-center justify-center">
                                <x-aura::text size="xs" variant="subtle" class="font-mono text-[9px]">Admin Console</x-aura::text>
                            </div>
                        </div>
                    </div>

                    <!-- Info -->
                    <div>
                        <x-aura::heading level="3" size="xs">Admin Console</x-aura::heading>
                        <x-aura::text variant="subtle" size="xs" class="mt-1.5 leading-relaxed">
                            System administrator console layout featuring a dedicated sidebar navigation, metrics, and health logs.
                        </x-aura::text>
                    </div>
                </div>

                <x-slot:footer>
                    <x-aura::button variant="primary" size="md" class="w-full justify-between" href="/admin">
                        <span>Access Admin Console</span>
                        <x-aura::icon name="arrow-right" class="w-4 h-4 ml-2 shrink-0 inline-block" />
                    </x-aura::button>
                </x-slot:footer>
            </x-aura::card>

        </div>
    </section>

    <!-- 3. Footer -->
    <x-aura::footer class="mt-24 sm:mt-36">
        <x-slot name="brand">
            <div class="flex items-center gap-2">
                <div class="w-6 h-6 rounded-md bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 flex items-center justify-center text-xs font-bold shadow-2xs">A</div>
                <x-aura::text size="sm" class="font-bold text-zinc-900 dark:text-white">Aura Wire</x-aura::text>
            </div>
        </x-slot>

        <a href="/components" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Components</a>
        <a href="/components/installation" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Installation</a>
        <a href="/components/icon" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Icons (1000+)</a>
        <a href="https://packagist.org/packages/insoulit/aura-wire" target="_blank" rel="noopener noreferrer" class="hover:text-zinc-900 dark:hover:text-white transition-colors flex items-center gap-1">
            <span>Packagist</span>
            <x-aura::icon name="external-link" class="w-3 h-3 text-zinc-400 inline-block" />
        </a>

        <x-slot name="bottom">
            <x-aura::text size="xs" variant="subtle">&copy; {{ date('Y') }} Aura Wire. Built with Laravel &amp; Livewire Volt.</x-aura::text>
            <x-aura::text size="xs" variant="subtle">Laravel v{{ app()->version() }}</x-aura::text>
        </x-slot>
    </x-aura::footer>

</div>

<x-layouts::app :title="$title ?? 'Component Library — Aura Wire'">
    <div class="min-h-[93vh] flex flex-col justify-between">
        @include('layouts.components.header')

        <!-- Mobile Quick Component Navigation Bar (< lg) -->
        <div class="lg:hidden sticky top-0 z-20 bg-white/90 dark:bg-zinc-900/90 backdrop-blur-md border-b border-zinc-200 dark:border-zinc-800 px-4 py-2 flex items-center justify-between shadow-2xs">
            <button
                type="button"
                x-on:click="$dispatch('open-sheet', 'components-mobile-sidebar')"
                class="w-full flex items-center justify-between px-3.5 py-2 rounded-xl bg-zinc-100 dark:bg-zinc-800/80 hover:bg-zinc-200 dark:hover:bg-zinc-700/80 text-xs font-semibold text-zinc-800 dark:text-zinc-200 transition-colors cursor-pointer border border-zinc-200/80 dark:border-zinc-700/60"
            >
                <div class="flex items-center gap-2">
                    <x-aura::icon name="panel-left" size="xs" class="text-indigo-500" />
                    <span>Browse Component Documentation</span>
                </div>
                <x-aura::icon name="chevron-right" size="xs" class="text-zinc-400" />
            </button>
        </div>

        <!-- Main Body Area with Full-Height Sidebar + Centered Content Slot -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 w-full flex-1 flex gap-0 lg:gap-8 items-stretch">
            <!-- Component Navigation Sidebar -->
            @include('layouts.components.sidebar')

            <!-- Main Component Page Content Slot Centered on X Axis -->
            <main class="flex-1 min-w-0 w-full flex flex-col items-center">
                {{ $slot }}
            </main>
        </div>
    </div>

    @include('layouts.shared.footer')
</x-layouts::app>

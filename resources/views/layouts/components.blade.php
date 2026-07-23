<x-layouts::app :title="$title ?? 'Component Library — Aura Wire'">
    <div class="min-h-[93vh] flex flex-col justify-between">
        @include('layouts.components.header')

        <!-- Main Body Area with Sidebar + Content Slot -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 w-full flex-1 flex gap-8">
            <!-- Component Navigation Sidebar -->
            @include('layouts.components.sidebar')

            <!-- Main Component Page Content Slot -->
            <main class="flex-1 min-w-0">
                {{ $slot }}
            </main>
        </div>
    </div>

    @include('layouts.shared.footer')
</x-layouts::app>

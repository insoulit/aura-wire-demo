<x-layouts::app :title="$title ?? 'User Dashboard — Aura Wire'">
    <div class="min-h-full flex flex-col justify-between">
        @include('layouts.user.header')

        <!-- Main View Slot -->
        <main class="flex-1 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 w-full">
            {{ $slot }}
        </main>

        @include('layouts.shared.footer')
    </div>
</x-layouts::app>

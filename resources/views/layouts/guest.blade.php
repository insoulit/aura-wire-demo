<x-layouts::app :title="$title ?? 'Welcome — Aura Wire'">
    <div class="min-h-full flex flex-col justify-between">
        @include('layouts.guest.header')

        <!-- Main View Slot -->
        <main class="flex-1 flex flex-col justify-center items-center max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 w-full">
            {{ $slot }}
        </main>

        @include('layouts.shared.footer')
    </div>
</x-layouts::app>

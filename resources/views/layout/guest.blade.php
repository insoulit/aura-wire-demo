<x-layout::app :title="$title ?? 'Welcome — Aura Wire'">
    <div class="min-h-[93vh] flex flex-col justify-between">
        @include('layout.guest.header')

        <!-- Main View Slot -->
        <main class="flex-1 flex flex-col justify-center items-center max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 w-full">
            {{ $slot }}
        </main>
    </div>

    @include('layout.guest.footer')
</x-layout::app>

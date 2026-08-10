<x-layout::app :title="$title ?? 'User Panel UI Suite — Aura Wire'">
    <div class="min-h-[93vh] flex flex-col justify-between">
        @include('layout.user.header')

        <!-- Main View Slot (Vertically Centered on Y-Axis) -->
        <main class="flex-1 flex flex-col justify-center max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-8 w-full">
            {{ $slot }}
        </main>
    </div>

    @include('layout.shared.footer')
</x-layout::app>

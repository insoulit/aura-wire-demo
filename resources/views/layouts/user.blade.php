<x-layouts::app :title="$title ?? 'User Panel UI Suite — Aura Wire'">
    <div class="min-h-[93vh] flex flex-col justify-between">
        @include('layouts.user.header')

        <!-- Main View Slot -->
        <main class="flex-1 max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-8 w-full">
            {{ $slot }}
        </main>
    </div>

    @include('layouts.shared.footer')
</x-layouts::app>

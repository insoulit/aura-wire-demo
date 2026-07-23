<x-layouts::app :title="$title ?? 'Admin Console — Aura Wire'">
    <div class="flex-1 flex min-h-[93vh]">
        <!-- Admin Sidebar -->
        @include('layouts.admin.sidebar')

        <!-- Main Content Area -->
        <div class="flex-1 flex flex-col min-w-0 min-h-[93vh]">
            @include('layouts.admin.header')

            <main class="flex-1 p-6 md:p-8 overflow-y-auto">
                {{ $slot }}
            </main>
        </div>
    </div>

    @include('layouts.shared.footer')
</x-layouts::app>

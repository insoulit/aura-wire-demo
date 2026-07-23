<x-layouts::app :title="$title ?? 'Admin Console — Aura Wire'">
    <div class="flex-1 flex min-h-screen">
        <!-- Admin Sidebar -->
        @include('layouts.admin.sidebar')

        <!-- Main Content Area -->
        <div class="flex-1 flex flex-col min-w-0">
            @include('layouts.admin.header')

            <main class="flex-1 p-6 md:p-8 overflow-y-auto">
                {{ $slot }}
            </main>

            @include('layouts.shared.footer')
        </div>
    </div>
</x-layouts::app>

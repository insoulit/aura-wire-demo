<x-layouts::app :title="$title ?? 'Admin Console — Aura Wire'">
    <div class="flex-1 flex min-h-screen">
        <!-- Admin Sidebar with Compact Portal Links -->
        @include('layouts.admin.sidebar')

        <!-- Main Content Area (Max Width 7xl Centered Vertically & Horizontally) -->
        <main class="flex-1 p-6 md:p-8 min-w-0 overflow-y-auto flex flex-col justify-center items-center">
            <div class="max-w-7xl mx-auto w-full my-auto">
                {{ $slot }}
            </div>
        </main>
    </div>

    @include('layouts.shared.footer')
</x-layouts::app>

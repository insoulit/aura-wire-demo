<x-layouts::app :title="$title ?? 'Admin Console — Aura Wire'">
    <div class="flex-1 flex min-h-screen">
        <!-- Admin Sidebar with Compact Portal Links -->
        @include('layouts.admin.sidebar')

        <!-- Main Content Area & Scoped Footer -->
        <div class="flex-1 flex flex-col min-w-0">
            <main class="min-h-screen p-6 md:p-8 flex flex-col justify-center items-center">
                <div class="max-w-7xl mx-auto w-full my-auto">
                    {{ $slot }}
                </div>
            </main>

            @include('layouts.shared.footer')
        </div>
    </div>
</x-layouts::app>


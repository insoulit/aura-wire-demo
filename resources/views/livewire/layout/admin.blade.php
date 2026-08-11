<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full antialiased">
<x-layout::shared.head :title="$title ?? 'Admin Console — Aura Wire'" />
<x-aura::body>

    <div class="flex-1 flex min-h-screen">
        <!-- Admin Sidebar with Compact Portal Links & Theme Switcher -->
        <livewire:layout.admin.sidebar />

        <!-- Main Content Area -->
        <div class="flex-1 flex flex-col min-w-0">
            <x-aura::main class="p-6 md:p-8">
                {{ $slot }}
            </x-aura::main>

            <livewire:layout.shared.footer />
        </div>
    </div>

</x-aura::body>
</html>

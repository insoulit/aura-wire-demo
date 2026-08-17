<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full antialiased">

<x-layout::shared.head :title="$title ?? 'Admin Console — Aura Wire'" />

<x-aura::body>

    <div class="flex-1 flex min-h-screen">

        <!-- Admin Sidebar with Compact Portal Links & Theme Switcher -->
        <livewire:layout.admin.sidebar />

        <!-- Main Content Area -->
        <x-aura::flex direction="col" align="stretch" gap="none">

            <x-aura::main>
                {{ $slot }}
            </x-aura::main>

            <livewire:layout.shared.footer />

        </x-aura::flex>

    </div>

</x-aura::body>

</html>

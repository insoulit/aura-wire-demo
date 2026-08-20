<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full antialiased">

<x-layout::shared.head :title="$title ?? 'Admin Console — Aura Wire'" />

<x-aura::body>

    <x-aura::flex align="stretch" gap="none" class="flex-1 min-h-screen">

        <!-- Admin Sidebar with Compact Portal Links & Theme Switcher -->
        <livewire:layout.admin.sidebar />

        <!-- Main Content Area -->
        <x-aura::flex direction="col" gap="none" class="flex-1 min-w-0">

            <x-aura::main class="min-h-screen" alignX="center" alignY="center">
                {{ $slot }}
            </x-aura::main>

            <livewire:layout.shared.footer />

        </x-aura::flex>

    </x-aura::flex>

</x-aura::body>

</html>

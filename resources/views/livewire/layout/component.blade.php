<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full antialiased">

<x-layout::shared.head :title="$title ?? 'Component Library — Aura Wire'" />

<x-aura::body>

    <x-aura::flex direction="col" align="stretch" gap="none">

        <livewire:layout.shared.header />

        <x-aura::container>

            <x-aura::flex align="stretch" gap="none">

                <!-- Component Navigation Sidebar -->
                <livewire:layout.component.sidebar />

                <!-- Main Component Page Content Slot -->
                <x-aura::main :container="false">

                    {{ $slot }}

                    <livewire:layout.component.doc-pagination />

                </x-aura::main>

            </x-aura::flex>

        </x-aura::container>

        <livewire:layout.shared.footer />

    </x-aura::flex>

</x-aura::body>

</html>

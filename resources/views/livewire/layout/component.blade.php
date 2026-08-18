<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full antialiased">

<x-layout::shared.head :title="$title ?? 'Component Library — Aura Wire'" />

<x-aura::body>

    <x-aura::flex direction="col" align="stretch" gap="none" class="flex-1">

        <livewire:layout.shared.header />

        <x-aura::container>

            <x-aura::flex align="stretch" gap="none" class="flex-1 lg:gap-6 min-w-0">

                <!-- Component Navigation Sidebar -->
                <livewire:layout.component.sidebar />

                <!-- Main Component Page Content Slot -->
                <x-aura::flex direction="col" gap="none" class="flex-1 min-w-0 w-full">

                    <x-aura::main :container="false">

                        {{ $slot }}

                        <livewire:layout.component.doc-pagination />

                    </x-aura::main>

                </x-aura::flex>

            </x-aura::flex>

        </x-aura::container>

    </x-aura::flex>

    <livewire:layout.shared.footer />

</x-aura::body>

</html>

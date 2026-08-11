<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full antialiased">
<x-layout::shared.head :title="$title ?? 'Component Library — Aura Wire'" />
<x-aura::body>

    <div class="flex-1 flex flex-col justify-between">
        <livewire:layout.shared.header />

        <x-aura::container class="flex-1 flex gap-0 lg:gap-8 items-stretch">
            <!-- Component Navigation Sidebar -->
            <livewire:layout.component.sidebar />

            <!-- Main Component Page Content Slot -->
            <x-aura::main :container="false" class="my-auto">
                {{ $slot }}
                
                <livewire:layout.component.doc-pagination />
            </x-aura::main>
        </x-aura::container>
    </div>

    <livewire:layout.shared.footer />

</x-aura::body>
</html>

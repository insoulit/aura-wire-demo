<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full antialiased">
<x-layout::shared.head :title="$title ?? 'Component Library — Aura Wire'" />
<x-aura::body>

    <div class="flex-1 flex flex-col">
        <livewire:layout.shared.header />

        <x-aura::container>
            <div class="flex-1 flex gap-0 lg:gap-8 items-stretch min-w-0">
                <!-- Component Navigation Sidebar -->
                <livewire:layout.component.sidebar />

                <!-- Main Component Page Content Slot -->
                <div class="flex-1 min-w-0">
                    <x-aura::main :container="false">
                        {{ $slot }}
                        
                        <livewire:layout.component.doc-pagination />
                    </x-aura::main>
                </div>
            </div>
        </x-aura::container>
    </div>

    <livewire:layout.shared.footer />

</x-aura::body>
</html>

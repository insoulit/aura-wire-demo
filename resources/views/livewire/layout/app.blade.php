<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full antialiased">
<x-layout::shared.head :title="$title ?? 'Aura Wire'" />
<x-aura::body>

    <div class="flex-1 flex flex-col justify-between">
        <livewire:layout.shared.header />

        <x-aura::main>
            {{ $slot }}
        </x-aura::main>
    </div>

    <livewire:layout.shared.footer />

</x-aura::body>
</html>

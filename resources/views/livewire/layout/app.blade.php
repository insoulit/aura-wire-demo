<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full antialiased">

<x-layout::shared.head :title="$title ?? 'Aura Wire'" />

<x-aura::body>

    <x-aura::flex direction="col" align="stretch" gap="none">

        <livewire:layout.shared.header />

        <x-aura::main>
            {{ $slot }}
        </x-aura::main>

        <livewire:layout.shared.footer />

    </x-aura::flex>

</x-aura::body>

</html>

<x-aura::header>
    <x-slot:brand>
        <x-aura::badge variant="negative">Admin Console</x-aura::badge>
    </x-slot:brand>

    <div class="flex items-center gap-1">
        <x-aura::header.item href="{{ route('home') }}">Home Page</x-aura::header.item>
        <x-aura::header.item href="/components">Components</x-aura::header.item>
    </div>

    <x-slot:actions>
        <x-theme-switcher />
        <x-aura::avatar initials="AD" size="sm" status="busy" />
    </x-slot:actions>
</x-aura::header>

<?php

use Livewire\Volt\Component;

new class extends Component {};

?>

<x-aura::footer>

    <x-slot:brand>

        <x-aura::link href="/" underline="none">

            <x-aura::flex align="center" gap="sm">

                <x-aura::icon name="sparkles" size="sm" variant="dark" shape="sm" />

                <x-aura::heading level="2" size="xs" weight="bold">
                    Aura Wire
                </x-aura::heading>

            </x-aura::flex>

        </x-aura::link>

    </x-slot:brand>

    <x-aura::link href="/components" size="sm">
        Components
    </x-aura::link>

    <x-aura::link href="/components/installation" size="sm">
        Installation
    </x-aura::link>

    <x-aura::link href="/components/icon" size="sm">
        Icons (1000+)
    </x-aura::link>

    <x-aura::link href="https://packagist.org/packages/insoulit/aura-wire" size="sm" target="_blank">
        Packagist
    </x-aura::link>

    <x-slot:bottom>

        <x-aura::text size="sm" variant="muted">
            &copy; {{ date('Y') }} Aura Wire. Built with Laravel &amp; Livewire Volt.
        </x-aura::text>

        <x-aura::flex align="center" gap="sm">

            <x-aura::text size="sm">
                Laravel &amp; Livewire
            </x-aura::text>

        </x-aura::flex>

    </x-slot:bottom>

</x-aura::footer>

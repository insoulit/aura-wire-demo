<?php

use Livewire\Volt\Component;

new class extends Component {};

?>

<x-aura::header>

    <x-slot:brand>

        <x-aura::link href="/" underline="none">

            <x-aura::flex align="center" gap="2.5">

                <x-aura::icon name="sparkles" size="md" variant="dark" shape="sm" />

                <x-aura::flex direction="col" align="start" gap="0">

                    <x-aura::heading level="2" size="sm" weight="extrabold">
                        Aura Wire
                    </x-aura::heading>

                    <x-aura::text size="xs" variant="subtle" weight="medium" tracking="wide">
                        Livewire UI Kit
                    </x-aura::text>

                </x-aura::flex>

            </x-aura::flex>

        </x-aura::link>

    </x-slot:brand>

    <x-aura::header.item href="/components" icon="layers" :active="request()->is('components*')">
        Components
    </x-aura::header.item>

    <x-aura::header.item href="/guest" icon="globe" :active="request()->is('guest*')">
        Guest
    </x-aura::header.item>

    <x-aura::header.item href="/user" icon="user" :active="request()->is('user*')">
        User
    </x-aura::header.item>

    <x-aura::header.item href="/admin" icon="shield-check" :active="request()->is('admin*')">
        Admin
    </x-aura::header.item>

    <x-slot:actions>

        @if (request()->is('components*'))

            <div class="lg:hidden">

                <x-aura::icon-button icon="panel-left" variant="ghost" size="sm" label="Menu" x-on:click="$dispatch('open-sheet', 'components-mobile-sidebar')" />

            </div>

        @endif

        <div class="hidden md:inline-flex">

            <x-aura::button variant="outline" size="md" icon="package" href="https://packagist.org/packages/insoulit/aura-wire" target="_blank" rel="noopener noreferrer">
                Packagist
            </x-aura::button>

        </div>

        <div class="hidden md:inline-flex">

            <x-theme-switcher />

        </div>

    </x-slot:actions>

</x-aura::header>

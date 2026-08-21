<?php

use Livewire\Volt\Component;

new class extends Component {};

?>

<!-- Top Navigation & Return Bar -->
<x-aura::flex direction="col" gap="4">

    <x-aura::flex align="center" justify="between" gap="4">

        <x-aura::flex align="center" width="auto" gap="3">

            <x-aura::button href="/guest#full-template" wire:navigate variant="secondary" size="sm" icon="arrow-left">
                Back
            </x-aura::button>

            <x-aura::text variant="subtle">
                /
            </x-aura::text>

            <x-aura::badge variant="neutral" size="sm">
                Portfolio UI Kit
            </x-aura::badge>

        </x-aura::flex>

        <x-aura::flex align="center" width="auto" gap="4">

            <x-aura::badge variant="subtle" size="sm">
                Available for New Projects
            </x-aura::badge>

            <x-aura::link href="#contact" size="sm" variant="subtle">
                Get in Touch
            </x-aura::link>

        </x-aura::flex>

    </x-aura::flex>

    <x-aura::separator />

</x-aura::flex>

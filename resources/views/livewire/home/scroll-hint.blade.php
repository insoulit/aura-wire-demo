<?php

use Livewire\Volt\Component;

new class extends Component {};

?>

<x-aura::flex direction="col" align="center" gap="1.5">

    <x-aura::text size="sm" variant="subtle" weight="medium">
        Scroll For Demos
    </x-aura::text>

    <x-aura::animate type="bounce">

        <x-aura::icon name="arrow-down" size="sm" />

    </x-aura::animate>

</x-aura::flex>

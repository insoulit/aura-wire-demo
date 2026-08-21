<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.app')] 
#[Title('Restaurant and Bistro UI Kit — Guest Portal | Aura Wire')] 
class extends Component {};

?>

<x-aura::flex direction="col" gap="10">

    <livewire:guest.template.restaurant.navigation />

    <x-aura::flex direction="col" gap="32">

        <livewire:guest.template.restaurant.hero />

        <livewire:guest.template.restaurant.menu />

        <livewire:guest.template.restaurant.reservation />

        <livewire:guest.template.restaurant.hours />

    </x-aura::flex>

</x-aura::flex>

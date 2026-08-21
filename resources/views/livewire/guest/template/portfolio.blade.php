<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.app')] 
#[Title('Portfolio UI Kit — Guest Portal | Aura Wire')] 
class extends Component {};

?>

<x-aura::flex direction="col" gap="10">

    <livewire:guest.template.portfolio.navigation />

    <x-aura::flex direction="col" gap="32">

        <livewire:guest.template.portfolio.hero />

        <livewire:guest.template.portfolio.works />

        <livewire:guest.template.portfolio.skills />

        <livewire:guest.template.portfolio.contact />

    </x-aura::flex>

</x-aura::flex>

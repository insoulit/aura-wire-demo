<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.app')] 
#[Title('Creative Agency UI Kit — Guest Portal | Aura Wire')] 
class extends Component {};

?>

<x-aura::flex direction="col" gap="10">

    <livewire:guest.template.agency.navigation />

    <x-aura::flex direction="col" gap="32">

        <livewire:guest.template.agency.hero />

        <livewire:guest.template.agency.services />

        <livewire:guest.template.agency.portfolio />

        <livewire:guest.template.agency.estimator />

    </x-aura::flex>

</x-aura::flex>

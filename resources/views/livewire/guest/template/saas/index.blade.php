<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.app')] 
#[Title('SaaS Platform UI Kit — Guest Portal | Aura Wire')] 
class extends Component {};

?>

<x-aura::flex direction="col" gap="10">

    <livewire:guest.template.saas.navigation />

    <x-aura::flex direction="col" gap="32">

        <livewire:guest.template.saas.hero />

        <livewire:guest.template.saas.features />

        <livewire:guest.template.saas.pricing />

        <livewire:guest.template.saas.faq />

        <livewire:guest.template.saas.cta />

    </x-aura::flex>

</x-aura::flex>

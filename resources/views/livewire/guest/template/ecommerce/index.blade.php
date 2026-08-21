<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.app')] 
#[Title('E Commerce Storefront UI Kit — Guest Portal | Aura Wire')] 
class extends Component {};

?>

<x-aura::flex direction="col" gap="20">

    <livewire:guest.template.ecommerce.hero />

    <livewire:guest.template.ecommerce.catalog />

    <livewire:guest.template.ecommerce.bundle />

    <livewire:guest.template.ecommerce.checkout />

    <livewire:guest.template.ecommerce.reviews />

    <livewire:guest.template.ecommerce.faq />

    <livewire:guest.template.ecommerce.newsletter />

</x-aura::flex>

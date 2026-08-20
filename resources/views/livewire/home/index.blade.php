<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.app')] 
#[Title('Aura Wire — Modern Blade & Livewire UI Components for Laravel')] 
class extends Component {};

?>

<x-aura::flex direction="col" gap="16">

    <!-- 1. Hero Section (Hero + Code Snippet Terminal Card) -->
    <x-aura::container as="section" size="4xl" gap="8" :center="true" screen="hero">

        <livewire:home.hero />

        <livewire:home.code-terminal />

        <livewire:home.scroll-hint />

    </x-aura::container>

    <!-- 2. Application Layout Portals (Elevated Interactive Showcase) -->
    <livewire:home.layout-portals />

</x-aura::flex>

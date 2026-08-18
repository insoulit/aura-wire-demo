<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.app')] 
#[Title('Aura Wire — Modern Blade & Livewire UI Components for Laravel')] 
class extends Component {};

?>

<x-aura::flex direction="col" gap="16" class="w-full pb-16">
    <!-- 1. Hero Section (Hero + Code Snippet Terminal Card) -->
    <section class="min-h-[calc(100vh-4rem)] flex flex-col justify-center items-center max-w-4xl mx-auto px-4 py-6 text-center space-y-8">
        <livewire:home.hero />
        <livewire:home.code-terminal />
        <livewire:home.scroll-hint />
    </section>

    <!-- 2. Application Layout Portals (Elevated Interactive Showcase) -->
    <livewire:home.layout-portals />
</x-aura::flex>

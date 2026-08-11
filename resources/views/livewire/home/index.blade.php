<?php

use function Livewire\Volt\{layout, title};

layout('livewire.layout.app');
title('Aura Wire — Modern Blade & Livewire UI Components for Laravel');

?>

<div class="w-full pb-16">
    <!-- 1. Hero Section (Hero + Code Snippet Terminal Card) -->
    <section class="min-h-[calc(100vh-4rem)] flex flex-col justify-center items-center max-w-4xl mx-auto px-4 py-6 text-center space-y-8">
        <livewire:home.hero />
        <livewire:home.code-terminal />
        <livewire:home.scroll-hint />
    </section>

    <!-- 2. Application Layout Portals (Elevated Interactive Showcase) -->
    <livewire:home.layout-portals />
</div>

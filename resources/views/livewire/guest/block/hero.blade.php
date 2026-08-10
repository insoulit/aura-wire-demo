<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('layout.guest')] 
#[Title('Hero Header — Guest Portal | Aura Wire')] 
class extends Component {};

?>

<div class="w-full max-w-4xl mx-auto space-y-6 py-6">
    <!-- Top Header -->
    <div class="space-y-1 px-1">
        <div class="flex items-center justify-between gap-4">
            <div>
                <x-aura::kicker>Design Blocks</x-aura::kicker>
                <x-aura::heading level="1" size="lg">Hero Header</x-aura::heading>
            </div>
            <x-aura::button href="/guest#design-block" variant="subtle" size="sm" class="shrink-0 gap-1.5">
                <x-aura::icon name="arrow-left" class="w-3.5 h-3.5 shrink-0" />
                <span>Back</span>
            </x-aura::button>
        </div>
    </div>

    <!-- Hero Header Block Preview -->
    <x-aura::code class="w-full" title="Landing Page Hero Header Block">
        <x-slot:preview>
            <div class="w-full py-8 text-center space-y-4 flex flex-col items-center justify-center">
                <x-aura::kicker>Next-Gen Component Library</x-aura::kicker>
                <x-aura::heading level="1" size="xl" class="max-w-2xl leading-tight">
                    Build Stunning Web Interfaces in Seconds
                </x-aura::heading>
                <x-aura::subheading size="md" class="max-w-lg">
                    Production-ready, ultra-accessible Blade &amp; Livewire components crafted for modern Laravel applications.
                </x-aura::subheading>
                <div class="flex flex-col sm:flex-row items-stretch sm:items-center justify-center gap-3 pt-2 w-full sm:w-auto max-w-xs sm:max-w-none">
                    <x-aura::button variant="primary" size="md" class="w-full sm:w-auto">Get Started Free</x-aura::button>
                    <x-aura::button variant="outline" size="md" class="w-full sm:w-auto">Explore Components</x-aura::button>
                </div>
            </div>
        </x-slot:preview>
        <x-slot name="codeSlot">&lt;div class="w-full py-8 text-center space-y-4 flex flex-col items-center justify-center"&gt;
    &lt;x-aura::kicker&gt;Next-Gen Component Library&lt;/x-aura::kicker&gt;
    &lt;x-aura::heading level="1" size="xl" class="max-w-2xl"&gt;
        Build Stunning Web Interfaces in Seconds
    &lt;/x-aura::heading&gt;
    &lt;x-aura::subheading size="md" class="max-w-lg"&gt;
        Production-ready components for modern Laravel applications.
    &lt;/x-aura::subheading&gt;
    &lt;div class="flex flex-col sm:flex-row items-center justify-center gap-3 pt-2 w-full sm:w-auto"&gt;
        &lt;x-aura::button variant="primary" size="md" class="w-full sm:w-auto"&gt;Get Started Free&lt;/x-aura::button&gt;
        &lt;x-aura::button variant="outline" size="md" class="w-full sm:w-auto"&gt;Explore Components&lt;/x-aura::button&gt;
    &lt;/div&gt;
&lt;/div&gt;</x-slot>
    </x-aura::code>
</div>

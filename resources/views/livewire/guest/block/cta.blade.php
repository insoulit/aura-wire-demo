<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('layout.guest')] 
#[Title('CTA Banner — Guest Portal | Aura Wire')] 
class extends Component {};

?>

<div class="w-full max-w-4xl mx-auto space-y-6 py-6">
    <!-- Top Header -->
    <div class="space-y-1 px-1">
        <div class="flex items-center justify-between gap-4">
            <div>
                <x-aura::kicker>Design Blocks</x-aura::kicker>
                <x-aura::heading level="1" size="lg">CTA Banners</x-aura::heading>
            </div>
            <x-aura::button href="/guest#design-block" variant="subtle" size="sm" class="shrink-0 gap-1.5">
                <x-aura::icon name="arrow-left" class="w-3.5 h-3.5 shrink-0" />
                <span>Back</span>
            </x-aura::button>
        </div>
    </div>

    <!-- 1. Promotional CTA Banner -->
    <x-aura::code class="w-full" title="1. High-Converting Promotional CTA Banner">
        <x-slot:preview>
            <x-aura::card class="p-8 w-full border border-zinc-200 dark:border-zinc-800">
                <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-6">
                    <div class="space-y-3 max-w-xl">
                        <div class="flex items-center gap-2">
                            <x-aura::tag variant="success" size="sm">Special Offer</x-aura::tag>
                            <span class="text-xs text-zinc-400 font-mono">Limited Time</span>
                        </div>
                        <div class="space-y-1">
                            <x-aura::heading level="2" size="md">Ready to Upgrade Your Workflow?</x-aura::heading>
                            <x-aura::text variant="subtle" size="sm">
                                Unlock access to all premium design blocks, Livewire components, and priority email support.
                            </x-aura::text>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 shrink-0 w-full sm:w-auto">
                        <x-aura::button variant="subtle" size="md" class="w-full sm:w-auto">Learn More</x-aura::button>
                        <x-aura::button variant="primary" size="md" class="w-full sm:w-auto">Get Started</x-aura::button>
                    </div>
                </div>
            </x-aura::card>
        </x-slot:preview>
        <x-slot name="codeSlot">&lt;x-aura::card class="p-8 w-full"&gt;
    &lt;div class="flex flex-col md:flex-row items-center justify-between gap-6"&gt;
        &lt;div class="space-y-3 max-w-xl"&gt;
            &lt;x-aura::tag variant="success" size="sm"&gt;Special Offer&lt;/x-aura::tag&gt;
            &lt;div class="space-y-1"&gt;
                &lt;x-aura::heading level="2" size="md"&gt;Ready to Upgrade Your Workflow?&lt;/x-aura::heading&gt;
                &lt;x-aura::text variant="subtle" size="sm"&gt;
                    Unlock access to all premium design blocks and Livewire components.
                &lt;/x-aura::text&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="flex gap-3"&gt;
            &lt;x-aura::button variant="subtle" size="md"&gt;Learn More&lt;/x-aura::button&gt;
            &lt;x-aura::button variant="primary" size="md"&gt;Get Started&lt;/x-aura::button&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/x-aura::card&gt;</x-slot>
    </x-aura::code>

    <!-- 2. Newsletter CTA Banner -->
    <x-aura::code class="w-full" title="2. Newsletter Subscription CTA Card">
        <x-slot:preview>
            <x-aura::card class="p-8 w-full border border-zinc-200 dark:border-zinc-800 text-center flex flex-col items-center justify-center space-y-4">
                <div class="space-y-1.5 max-w-lg mx-auto">
                    <x-aura::heading level="2" size="md">Join 10,000+ Laravel Developers</x-aura::heading>
                    <x-aura::text variant="subtle" size="sm">
                        Get weekly component updates, performance tips, and tutorials delivered straight to your inbox.
                    </x-aura::text>
                </div>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-2.5 w-full max-w-md mx-auto pt-1">
                    <div class="flex-1 w-full">
                        <x-aura::input placeholder="Enter your work email..." icon="mail" />
                    </div>
                    <x-aura::button variant="primary" size="md" class="w-full sm:w-auto shrink-0">
                        Subscribe
                    </x-aura::button>
                </div>
                
            </x-aura::card>
        </x-slot:preview>
        <x-slot name="codeSlot">&lt;x-aura::card class="p-8 text-center flex flex-col items-center space-y-4"&gt;
    &lt;div class="space-y-1.5 max-w-lg mx-auto"&gt;
        &lt;x-aura::heading level="2" size="md"&gt;Join 10,000+ Laravel Developers&lt;/x-aura::heading&gt;
        &lt;x-aura::text variant="subtle" size="sm"&gt;Get weekly component updates delivered to your inbox.&lt;/x-aura::text&gt;
    &lt;/div&gt;
    &lt;div class="flex flex-col sm:flex-row items-center justify-center gap-2.5 w-full max-w-md mx-auto"&gt;
        &lt;div class="flex-1 w-full"&gt;
            &lt;x-aura::input placeholder="Enter your work email..." icon="mail" /&gt;
        &lt;/div&gt;
        &lt;x-aura::button variant="primary" size="md"&gt;Subscribe&lt;/x-aura::button&gt;
    &lt;/div&gt;
    &lt;div class="flex flex-wrap items-center justify-center gap-x-6 gap-y-1.5 text-xs text-zinc-500 dark:text-zinc-400"&gt;
        &lt;span class="inline-flex items-center gap-1.5"&gt;
            &lt;x-aura::icon name="check" class="w-3.5 h-3.5 text-emerald-600 dark:text-emerald-400" /&gt;
            &lt;span&gt;No spam ever&lt;/span&gt;
        &lt;/span&gt;
        &lt;span class="inline-flex items-center gap-1.5"&gt;
            &lt;x-aura::icon name="check" class="w-3.5 h-3.5 text-emerald-600 dark:text-emerald-400" /&gt;
            &lt;span&gt;One-click unsubscribe&lt;/span&gt;
        &lt;/span&gt;
    &lt;/div&gt;
&lt;/x-aura::card&gt;</x-slot>
    </x-aura::code>
</div>

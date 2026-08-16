<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.app')] 
#[Title('Feature Grid — Guest Portal | Aura Wire')] 
class extends Component {};

?>

<div class="w-full max-w-4xl mx-auto space-y-4 py-6">
    <!-- Top Header -->
    <div class="space-y-1 px-1">
        <div class="flex items-center justify-between gap-4">
            <div>
                <x-aura::kicker>Design Blocks</x-aura::kicker>
                <x-aura::heading level="1" size="lg">Feature Grid</x-aura::heading>
            </div>
            <x-aura::button href="/guest#design-block" variant="subtle" size="sm" >
                <x-aura::icon name="arrow-left"  size="xs" />
                <span>Back</span>
            </x-aura::button>
        </div>
    </div>

    <!-- Feature Grid Block Preview -->
    <x-aura::code  title="3-Column Feature Highlight Block">
        <x-slot:preview>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-5 w-full">
                <!-- Feature 1: Enterprise Security -->
                <x-aura::card >
                    <div class="space-y-3">
                        <div class="h-10 w-10 rounded-xl bg-emerald-50 dark:bg-emerald-950/40 border border-emerald-200/80 dark:border-emerald-800/40 flex items-center justify-center text-emerald-600 dark:text-emerald-400 shadow-2xs">
                            <x-aura::icon name="shield-check"  size="sm" />
                        </div>
                        <div class="space-y-1">
                            <x-aura::heading level="3" size="sm" >
                                Enterprise Access Control
                            </x-aura::heading>
                            <x-aura::text variant="subtle" size="sm">
                                Role-based permissions, encrypted audit logging, and single sign-on integration built in.
                            </x-aura::text>
                        </div>
                    </div>
                    <div class="pt-2">
                        <x-aura::tag variant="success" size="sm">SOC 2 Ready</x-aura::tag>
                    </div>
                </x-aura::card>

                <!-- Feature 2: High Performance -->
                <x-aura::card >
                    <div class="space-y-3">
                        <div class="h-10 w-10 rounded-xl bg-amber-50 dark:bg-amber-950/40 border border-amber-200/80 dark:border-amber-800/40 flex items-center justify-center text-amber-600 dark:text-amber-400 shadow-2xs">
                            <x-aura::icon name="zap"  size="sm" />
                        </div>
                        <div class="space-y-1">
                            <x-aura::heading level="3" size="sm" >
                                Edge State Hydration
                            </x-aura::heading>
                            <x-aura::text variant="subtle" size="sm">
                                Ultra-low latency reactive state diffing powered natively by Livewire v3 Volt engine.
                            </x-aura::text>
                        </div>
                    </div>
                    <div class="pt-2">
                        <x-aura::tag variant="warning" size="sm">Sub-Millisecond</x-aura::tag>
                    </div>
                </x-aura::card>

                <!-- Feature 3: Developer Experience -->
                <x-aura::card >
                    <div class="space-y-3">
                        <div class="h-10 w-10 rounded-xl bg-indigo-50 dark:bg-indigo-950/40 border border-indigo-200/80 dark:border-indigo-800/40 flex items-center justify-center text-indigo-600 dark:text-indigo-400 shadow-2xs">
                            <x-aura::icon name="sparkles"  size="sm" />
                        </div>
                        <div class="space-y-1">
                            <x-aura::heading level="3" size="sm" >
                                Native Blade Component API
                            </x-aura::heading>
                            <x-aura::text variant="subtle" size="sm">
                                Zero build step required. Copy-paste production ready Blade tags with full IDE autocompletion.
                            </x-aura::text>
                        </div>
                    </div>
                    <div class="pt-2">
                        <x-aura::tag variant="primary" size="sm">Developer First</x-aura::tag>
                    </div>
                </x-aura::card>
            </div>
        </x-slot:preview>
        <x-slot name="codeSlot">&lt;div class="grid grid-cols-1 sm:grid-cols-3 gap-5 w-full"&gt;
    &lt;!-- Feature Card: Icon -&gt; Title -&gt; Description -&gt; Bottom Tag --&gt;
    &lt;x-aura::card class="p-5 hover:border-zinc-400 dark:hover:border-zinc-600 flex flex-col justify-between space-y-4 group"&gt;
        &lt;div class="space-y-3"&gt;
            &lt;div class="h-10 w-10 rounded-xl bg-emerald-50 dark:bg-emerald-950/40 border border-emerald-200/80 text-emerald-600 dark:text-emerald-400 flex items-center justify-center"&gt;
                &lt;x-aura::icon name="shield-check" class="w-5 h-5" /&gt;
            &lt;/div&gt;
            &lt;div class="space-y-1"&gt;
                &lt;x-aura::heading level="3" size="sm" class="group-hover:text-emerald-600 transition-colors"&gt;
                    Enterprise Access Control
                &lt;/x-aura::heading&gt;
                &lt;x-aura::text variant="subtle" size="sm"&gt;
                    Role-based permissions, encrypted audit logging, and SSO built in.
                &lt;/x-aura::text&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="pt-2"&gt;
            &lt;x-aura::tag variant="success" size="sm"&gt;SOC 2 Ready&lt;/x-aura::tag&gt;
        &lt;/div&gt;
    &lt;/x-aura::card&gt;
&lt;/div&gt;</x-slot>
    </x-aura::code>
</div>

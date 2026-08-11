<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Pagination - Aura Wire')] 
class extends Component {};

?>

<div class="w-full max-w-4xl mx-auto space-y-10 flex flex-col items-center justify-center">
    <!-- Header -->
    <x-aura::card class="p-6 sm:p-8 bg-white/60 dark:bg-zinc-900/50 backdrop-blur-md shadow-xs w-full">
        <div class="space-y-2 max-w-2xl">
            <div class="flex items-center gap-2.5">
                <x-aura::kicker>Navigation</x-aura::kicker>
                <x-aura::badge variant="subtle" size="sm">Component</x-aura::badge>
            </div>
            <x-aura::heading level="1" size="xl">Pagination</x-aura::heading>
            <x-aura::subheading size="md">
                Multi-purpose pagination components supporting numbered windows, icon-only navigation, circular pills, card footer bars, and alignment controls.
            </x-aura::subheading>
        </div>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code" class="w-full">
        <x-slot:codeSlot>&lt;x-aura::pagination :currentPage="2" :totalPages="8" /&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 1. Numbered Window Pagination (Text vs Icon-Only) -->
    <x-aura::code class="w-full" title="1. Standard Numbered Window Pagination (Text vs Icon-Only)">
        <x-slot:preview>
            <div class="space-y-6 w-full">
                <div class="space-y-2">
                    <p class="text-xs font-bold text-zinc-500 uppercase tracking-wider">Clean Text Buttons (Default):</p>
                    <x-aura::pagination :page="4" :totalPages="12" :total="120" :perPage="10" variant="numbers" />
                </div>

                <div class="space-y-2">
                    <p class="text-xs font-bold text-zinc-500 uppercase tracking-wider">Icon-Only Triggers (:iconsOnly="true"):</p>
                    <x-aura::pagination :page="4" :totalPages="12" :total="120" :perPage="10" variant="numbers" :iconsOnly="true" />
                </div>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;!-- Clean Text Previous / Next Buttons --&gt;
&lt;x-aura::pagination :page="4" :totalPages="12" :total="120" :perPage="10" variant="numbers" /&gt;

&lt;!-- Icon-Only Previous / Next Triggers --&gt;
&lt;x-aura::pagination :page="4" :totalPages="12" :total="120" :perPage="10" variant="numbers" :iconsOnly="true" /&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Contained Card Footer Bar -->
    <x-aura::code class="w-full" title="2. Contained Card Footer Bar">
        <x-slot:preview>
            <div class="w-full">
                <x-aura::pagination :page="2" :totalPages="8" :total="80" :perPage="10" variant="card" />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::pagination :page="2" :totalPages="8" :total="80" :perPage="10" variant="card" /&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 3. Circular Pill Buttons Group in 3 Alignment Positions (Start, Center, End) -->
    <x-aura::code class="w-full" title="3. Circular Pill Buttons Group (3 Alignment Positions: Start, Center, End)">
        <x-slot:preview>
            <div class="space-y-5 w-full">
                <div class="space-y-1">
                    <p class="text-xs font-bold text-zinc-500 uppercase tracking-wider">Start Aligned (align="start"):</p>
                    <x-aura::pagination :page="3" :totalPages="5" variant="pills" align="start" />
                </div>

                <div class="space-y-1">
                    <p class="text-xs font-bold text-zinc-500 uppercase tracking-wider">Center Aligned (align="center"):</p>
                    <x-aura::pagination :page="3" :totalPages="5" variant="pills" align="center" />
                </div>

                <div class="space-y-1">
                    <p class="text-xs font-bold text-zinc-500 uppercase tracking-wider">End Aligned (align="end"):</p>
                    <x-aura::pagination :page="3" :totalPages="5" variant="pills" align="end" />
                </div>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;!-- Start Aligned (Left) --&gt;
&lt;x-aura::pagination :page="3" :totalPages="5" variant="pills" align="start" /&gt;

&lt;!-- Center Aligned --&gt;
&lt;x-aura::pagination :page="3" :totalPages="5" variant="pills" align="center" /&gt;

&lt;!-- End Aligned (Right) --&gt;
&lt;x-aura::pagination :page="3" :totalPages="5" variant="pills" align="end" /&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 4. Simple Previous / Next with Page Label -->
    <x-aura::code class="w-full" title="4. Simple Previous / Next with Page Counter">
        <x-slot:preview>
            <div class="w-full">
                <x-aura::pagination :page="3" :totalPages="10" variant="simple" />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::pagination :page="3" :totalPages="10" variant="simple" /&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 5. Compact Icon Controls -->
    <x-aura::code class="w-full" title="5. Compact Icon Controls">
        <x-slot:preview>
            <div class="w-full flex justify-center">
                <x-aura::pagination :page="5" :totalPages="15" variant="compact" shape="circle" />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::pagination :page="5" :totalPages="15" variant="compact" shape="circle" /&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>

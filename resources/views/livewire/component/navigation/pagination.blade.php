<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('layout.component')] 
#[Title('Pagination - Aura Wire')] 
class extends Component {};

?>

<div class="w-full max-w-4xl mx-auto space-y-10 flex flex-col items-center justify-center">
    <!-- Header -->
    <div class="space-y-3 text-center flex flex-col items-center">
        <x-aura::kicker>Navigation</x-aura::kicker>
        <x-aura::heading level="1" size="lg">Pagination</x-aura::heading>
        <x-aura::subheading size="sm" class="max-w-lg">
            Multi-purpose pagination components supporting numbered windows, icon-only navigation, circular pills, card footer bars, and alignment controls.
        </x-aura::subheading>
        <div class="pt-1">
            <code class="inline-flex items-center px-3.5 py-1.5 rounded-xl text-sm font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-2xs">
                &lt;x-aura::pagination&gt;
            </code>
        </div>
    </div>

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

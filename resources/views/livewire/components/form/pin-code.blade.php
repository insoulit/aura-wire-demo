<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('PIN Code - Aura Wire');

?>

<div class="w-full max-w-3xl mx-auto space-y-6 flex flex-col items-center justify-center">
    <div class="space-y-2 text-center flex flex-col items-center">
        <x-aura::heading level="1" size="md">PIN Code Input</x-aura::heading>
        <code class="inline-flex items-center px-3.5 py-1.5 mt-3 rounded-xl text-base sm:text-lg font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-sm">&lt;x-aura::pin-code&gt;</code>
    </div>

    {{-- Default PIN Code (4 digits) --}}
    <x-aura::code class="w-full" title="Default 4-Digit Verification Code">
        <x-slot:preview>
            <div class="space-y-3">
                <x-aura::label>Enter Security Code</x-aura::label>
                <x-aura::pin-code length="4" size="md" />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::label&gt;Enter Security Code&lt;/x-aura::label&gt;
&lt;x-aura::pin-code length="4" size="md" /&gt;</x-slot:codeSlot>
    </x-aura::code>

    {{-- 6-Digit PIN Code & Sizes --}}
    <x-aura::code class="w-full" title="6-Digit Code & Size Variations">
        <x-slot:preview>
            <div class="space-y-6">
                <div>
                    <x-aura::text size="xs" class="mb-2">Small Size (sm)</x-aura::text>
                    <x-aura::pin-code length="6" size="sm" />
                </div>

                <div>
                    <x-aura::text size="xs" class="mb-2">Large Size (lg)</x-aura::text>
                    <x-aura::pin-code length="6" size="lg" />
                </div>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;!-- Small 6-digit --&gt;
&lt;x-aura::pin-code length="6" size="sm" /&gt;

&lt;!-- Large 6-digit --&gt;
&lt;x-aura::pin-code length="6" size="lg" /&gt;</x-slot:codeSlot>
    </x-aura::code>

    {{-- Invalid State --}}
    <x-aura::code class="w-full" title="Invalid State">
        <x-slot:preview>
            <div class="space-y-2 text-center flex flex-col items-center">
                <x-aura::pin-code length="4" :invalid="true" />
                <x-aura::error>The security code you entered is invalid.</x-aura::error>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::pin-code length="4" :invalid="true" /&gt;
&lt;x-aura::error&gt;The security code you entered is invalid.&lt;/x-aura::error&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>

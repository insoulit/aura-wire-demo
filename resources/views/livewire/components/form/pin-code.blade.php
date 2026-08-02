<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('PIN Code Component — Aura Wire');

?>

<div class="w-full space-y-10">
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <x-aura::heading level="1" size="xl">PIN Code Input Component</x-aura::heading>
        <x-aura::text variant="subtle" size="sm" class="mt-1"><x-aura::code>&lt;x-aura::pin-code&gt;</x-aura::code></x-aura::text>
    </div>

    {{-- Default PIN Code (4 digits) --}}
    <x-aura::code title="Default 4-Digit Verification Code">
        <x-slot:preview>
            <div class="space-y-4">
                <x-aura::label>Enter Security Code</x-aura::label>
                <x-aura::pin-code length="4" size="md" />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::label&gt;Enter Security Code&lt;/x-aura::label&gt;
&lt;x-aura::pin-code length="4" size="md" /&gt;</x-slot:codeSlot>
    </x-aura::code>

    {{-- 6-Digit PIN Code & Sizes --}}
    <x-aura::code title="6-Digit Code & Size Variations">
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
    <x-aura::code title="Invalid State">
        <x-slot:preview>
            <div class="space-y-2">
                <x-aura::pin-code length="4" :invalid="true" />
                <x-aura::error>The security code you entered is invalid.</x-aura::error>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::pin-code length="4" :invalid="true" /&gt;
&lt;x-aura::error&gt;The security code you entered is invalid.&lt;/x-aura::error&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>

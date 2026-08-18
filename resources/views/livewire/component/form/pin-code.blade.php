<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('PIN Code - Aura Wire')] 
class extends Component {};

?>

<x-aura::flex direction="col" gap="10" class="w-full max-w-4xl mx-auto py-2">
    <!-- Header -->
    <x-aura::card>
        <x-aura::flex direction="col" gap="2" class="max-w-2xl">
            <x-aura::flex align="center" gap="2.5">
                <x-aura::kicker>Form Controls</x-aura::kicker>
                <x-aura::badge variant="subtle" size="sm">Component</x-aura::badge>
            </x-aura::flex>
            <x-aura::heading level="1" size="xl">PIN Code Input</x-aura::heading>
            <x-aura::subheading size="md">
                Multi-digit OTP and security verification PIN inputs with auto-focus movement.
            </x-aura::subheading>
        </x-aura::flex>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code" >
        <x-slot:codeSlot>@verbatim<x-aura::pin-code length="4" wire:model="otp" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    {{-- Default PIN Code (4 digits) --}}
    <x-aura::code  title="Default 4 Digit Verification Code">
        <x-slot:preview>
            <div class="space-y-3">
                <x-aura::label>Enter Security Code</x-aura::label>
                <x-aura::pin-code length="4" size="md" />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::label>Enter Security Code</x-aura::label>
<x-aura::pin-code length="4" size="md" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    {{-- 6-Digit PIN Code & Sizes --}}
    <x-aura::code  title="6-Digit Code & Size Variations">
        <x-slot:preview>
            <div class="space-y-6">
                <div>
                    <x-aura::text size="xs" >Small Size (sm)</x-aura::text>
                    <x-aura::pin-code length="6" size="sm" />
                </div>

                <div>
                    <x-aura::text size="xs" >Large Size (lg)</x-aura::text>
                    <x-aura::pin-code length="6" size="lg" />
                </div>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<!-- Small 6-digit -->
<x-aura::pin-code length="6" size="sm" />

<!-- Large 6-digit -->
<x-aura::pin-code length="6" size="lg" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    {{-- Invalid State --}}
    <x-aura::code  title="Invalid State">
        <x-slot:preview>
            <div class="space-y-2 text-center flex flex-col items-center">
                <x-aura::pin-code length="4" :invalid="true" />
                <x-aura::error>The security code you entered is invalid.</x-aura::error>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::pin-code length="4" :invalid="true" />
<x-aura::error>The security code you entered is invalid.</x-aura::error>@endverbatim</x-slot:codeSlot>
    </x-aura::code>
</x-aura::flex>

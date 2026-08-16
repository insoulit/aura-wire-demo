<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Radio - Aura Wire')] 
class extends Component {
    public string $plan = 'pro';
    public string $shipping = 'express';
};

?>

<div class="w-full max-w-4xl mx-auto space-y-10 flex flex-col items-center justify-center">
    <!-- Header -->
    <x-aura::card>
        <div class="space-y-2 max-w-2xl">
            <div class="flex items-center gap-2.5">
                <x-aura::kicker>Form Controls</x-aura::kicker>
                <x-aura::badge variant="subtle" size="sm">Component</x-aura::badge>
            </div>
            <x-aura::heading level="1" size="xl">Radio</x-aura::heading>
            <x-aura::subheading size="md">
                Exclusive single option radio buttons for selection lists, tier options, and preference choices.
            </x-aura::subheading>
        </div>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">
        <x-slot:codeSlot>@verbatim<x-aura::radio wire:model="plan" value="pro" label="Pro Tier" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 1. Basic Radio Group -->
    <x-aura::code title="1. Basic Radio Group">
        <x-slot:preview>
            <x-aura::stack direction="col" gap="2.5" class="w-full max-w-sm mx-auto">
                <x-aura::radio wire:model.live="plan" value="free" label="Free Tier" />
                <x-aura::radio wire:model.live="plan" value="pro" label="Pro Tier" />
                <x-aura::radio wire:model.live="plan" value="enterprise" label="Enterprise" />
            </x-aura::stack>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::stack direction="col" gap="2.5">
    <x-aura::radio wire:model="plan" value="free" label="Free Tier" />
    <x-aura::radio wire:model="plan" value="pro" label="Pro Tier" />
    <x-aura::radio wire:model="plan" value="enterprise" label="Enterprise" />
</x-aura::stack>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Radio Sizes -->
    <x-aura::code title="2. Sizes">
        <x-slot:preview>
            <x-aura::stack direction="col" gap="3" class="w-full max-w-sm mx-auto">
                <x-aura::radio name="size_demo" size="xs" label="Extra Small (xs)" :checked="true" />
                <x-aura::radio name="size_demo" size="sm" label="Small (sm)" />
                <x-aura::radio name="size_demo" size="md" label="Medium (md)" />
                <x-aura::radio name="size_demo" size="lg" label="Large (lg)" />
            </x-aura::stack>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::radio size="xs" label="Extra Small (xs)" :checked="true" />
<x-aura::radio size="sm" label="Small (sm)" />
<x-aura::radio size="md" label="Medium (md)" />
<x-aura::radio size="lg" label="Large (lg)" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 3. With Description -->
    <x-aura::code title="3. With Description">
        <x-slot:preview>
            <x-aura::stack direction="col" gap="3" class="w-full max-w-md mx-auto">
                <x-aura::radio 
                    wire:model.live="shipping" 
                    value="standard" 
                    label="Standard Delivery" 
                    description="Estimated arrival in 3 to 5 business days." 
                />
                <x-aura::radio 
                    wire:model.live="shipping" 
                    value="express" 
                    label="Express Shipping" 
                    description="Next business day courier delivery with real time tracking." 
                />
                <x-aura::radio 
                    wire:model.live="shipping" 
                    value="priority" 
                    label="Priority Overnight" 
                    description="Guaranteed morning delivery with dedicated support." 
                />
            </x-aura::stack>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::stack direction="col" gap="3">
    <x-aura::radio 
        wire:model="shipping" 
        value="standard" 
        label="Standard Delivery" 
        description="Estimated arrival in 3 to 5 business days." 
    />
    <x-aura::radio 
        wire:model="shipping" 
        value="express" 
        label="Express Shipping" 
        description="Next business day courier delivery with real time tracking." 
    />
    <x-aura::radio 
        wire:model="shipping" 
        value="priority" 
        label="Priority Overnight" 
        description="Guaranteed morning delivery with dedicated support." 
    />
</x-aura::stack>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 4. Disabled States -->
    <x-aura::code title="4. Disabled States">
        <x-slot:preview>
            <x-aura::stack direction="col" gap="3" class="w-full max-w-sm mx-auto">
                <x-aura::radio name="disabled_demo" label="Disabled Unchecked" :disabled="true" />
                <x-aura::radio name="disabled_demo" label="Disabled Checked" :disabled="true" :checked="true" />
            </x-aura::stack>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::radio label="Disabled Unchecked" :disabled="true" />
<x-aura::radio label="Disabled Checked" :disabled="true" :checked="true" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>
</div>

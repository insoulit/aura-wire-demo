<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Checkbox - Aura Wire')] 
class extends Component {
    public bool $remember = true;
    public bool $newsletter = false;
    public array $notifications = ['email', 'security'];
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
            <x-aura::heading level="1" size="xl">Checkbox</x-aura::heading>
            <x-aura::subheading size="md">
                Boolean selection inputs for multi option forms, terms agreements, and toggle states.
            </x-aura::subheading>
        </div>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code">
        <x-slot:codeSlot>@verbatim<x-aura::checkbox wire:model="remember" label="Remember me" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 1. Basic Checkbox -->
    <x-aura::code title="1. Basic Checkbox">
        <x-slot:preview>
            <div class="flex items-center justify-center w-full">
                <x-aura::checkbox wire:model.live="remember" label="Remember me on this browser" />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::checkbox wire:model="remember" label="Remember me on this browser" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Checkbox Sizes -->
    <x-aura::code title="2. Sizes">
        <x-slot:preview>
            <x-aura::stack direction="col" gap="3" class="w-full max-w-sm mx-auto">
                <x-aura::checkbox size="xs" label="Extra Small (xs)" :checked="true" />
                <x-aura::checkbox size="sm" label="Small (sm)" :checked="true" />
                <x-aura::checkbox size="md" label="Medium (md)" :checked="true" />
                <x-aura::checkbox size="lg" label="Large (lg)" :checked="true" />
            </x-aura::stack>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::checkbox size="xs" label="Extra Small (xs)" :checked="true" />
<x-aura::checkbox size="sm" label="Small (sm)" :checked="true" />
<x-aura::checkbox size="md" label="Medium (md)" :checked="true" />
<x-aura::checkbox size="lg" label="Large (lg)" :checked="true" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 3. With Description -->
    <x-aura::code title="3. With Description">
        <x-slot:preview>
            <div class="w-full max-w-md mx-auto">
                <x-aura::checkbox 
                    wire:model.live="newsletter" 
                    label="Product Updates" 
                    description="Receive occasional announcements about new releases and major improvements." 
                />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::checkbox 
    wire:model="newsletter" 
    label="Product Updates" 
    description="Receive occasional announcements about new releases and major improvements." 
/>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 4. Multiple Selection Group -->
    <x-aura::code title="4. Multiple Selection Group">
        <x-slot:preview>
            <x-aura::stack direction="col" gap="2.5" class="w-full max-w-md mx-auto">
                <x-aura::checkbox 
                    wire:model.live="notifications" 
                    value="email" 
                    label="Email Notifications" 
                    description="Daily digests and activity summaries" 
                />
                <x-aura::checkbox 
                    wire:model.live="notifications" 
                    value="sms" 
                    label="SMS Alerts" 
                    description="Critical security notices and login warnings" 
                />
                <x-aura::checkbox 
                    wire:model.live="notifications" 
                    value="security" 
                    label="Security Audits" 
                    description="Weekly audit logs and session history" 
                />
            </x-aura::stack>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::stack direction="col" gap="2.5">
    <x-aura::checkbox 
        wire:model="notifications" 
        value="email" 
        label="Email Notifications" 
        description="Daily digests and activity summaries" 
    />
    <x-aura::checkbox 
        wire:model="notifications" 
        value="sms" 
        label="SMS Alerts" 
        description="Critical security notices and login warnings" 
    />
    <x-aura::checkbox 
        wire:model="notifications" 
        value="security" 
        label="Security Audits" 
        description="Weekly audit logs and session history" 
    />
</x-aura::stack>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 5. Disabled States -->
    <x-aura::code title="5. Disabled States">
        <x-slot:preview>
            <x-aura::stack direction="col" gap="3" class="w-full max-w-sm mx-auto">
                <x-aura::checkbox label="Disabled Unchecked" :disabled="true" />
                <x-aura::checkbox label="Disabled Checked" :disabled="true" :checked="true" />
            </x-aura::stack>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::checkbox label="Disabled Unchecked" :disabled="true" />
<x-aura::checkbox label="Disabled Checked" :disabled="true" :checked="true" />@endverbatim</x-slot:codeSlot>
    </x-aura::code>
</div>

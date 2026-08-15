<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Accordion - Aura Wire')] 
class extends Component {};

?>

<div class="w-full max-w-4xl mx-auto space-y-10 flex flex-col items-center justify-center">
    <!-- Header -->
    <x-aura::card>
        <div class="space-y-2 max-w-2xl">
            <div class="flex items-center gap-2.5">
                <x-aura::kicker>Display</x-aura::kicker>
                <x-aura::badge variant="subtle" size="sm">Component</x-aura::badge>
            </div>
            <x-aura::heading level="1" size="xl">Accordion</x-aura::heading>
            <x-aura::subheading size="md">
                Expandable vertical accordion item groups with support for single or multiple open items.
            </x-aura::subheading>
        </div>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code" >
        <x-slot:codeSlot>@verbatim<x-aura::accordion default="faq-1">
    <x-aura::accordion.item name="faq-1" title="Question Title">Content...</x-aura::accordion.item>
</x-aura::accordion>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 1. Standard FAQ Accordion -->
    <x-aura::code  title="1. Standard FAQ Accordion (Single Expand)">
        <x-slot:preview>
            <div class="w-full">
                <x-aura::accordion default="faq-1">
                    <x-aura::accordion.item name="faq-1" title="What is AuraWire?">
                        AuraWire is a sleek Blade and Livewire component library crafted with high-contrast monochrome design foundation.
                    </x-aura::accordion.item>
                    <x-aura::accordion.item name="faq-2" title="How do I install it into my project?">
                        Install via Composer using <code class="text-xs bg-zinc-100 dark:bg-zinc-800 px-2 py-0.5 rounded">composer require insoulit/aura-wire</code> and publish configuration assets.
                    </x-aura::accordion.item>
                    <x-aura::accordion.item name="faq-3" title="Does it support Dark Mode?">
                        Yes, dark mode is supported out of the box with automatic class or media strategy options.
                    </x-aura::accordion.item>
                </x-aura::accordion>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::accordion default="faq-1">
    <x-aura::accordion.item name="faq-1" title="What is AuraWire?">
        AuraWire is a sleek Blade component library.
    </x-aura::accordion.item>
    <x-aura::accordion.item name="faq-2" title="How do I install it?">
        Install via Composer.
    </x-aura::accordion.item>
</x-aura::accordion>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Multiple Expand Accordion -->
    <x-aura::code  title="2. Multiple Simultaneous Open Items">
        <x-slot:preview>
            <div class="w-full">
                <x-aura::accordion multiple :default="['opt-1', 'opt-2']">
                    <x-aura::accordion.item name="opt-1" title="Notification Preferences">
                        Receive instant push notifications and weekly email digests.
                    </x-aura::accordion.item>
                    <x-aura::accordion.item name="opt-2" title="Security & Authentication">
                        Two-Factor Authentication (2FA) is enabled for your account.
                    </x-aura::accordion.item>
                    <x-aura::accordion.item name="opt-3" title="API Access Tokens">
                        Manage secret keys and application access scopes.
                    </x-aura::accordion.item>
                </x-aura::accordion>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::accordion multiple :default="['opt-1', 'opt-2']">
    <x-aura::accordion.item name="opt-1" title="Notification Preferences">...</x-aura::accordion.item>
    <x-aura::accordion.item name="opt-2" title="Security & Auth">...</x-aura::accordion.item>
</x-aura::accordion>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 3. Accordion with Category Icons -->
    <x-aura::code  title="3. Accordion Items with Category Icons">
        <x-slot:preview>
            <div class="w-full">
                <x-aura::accordion>
                    <x-aura::accordion.item name="sec-1" icon="lock" title="Password & Security Controls">
                        Update your master password and active session tokens.
                    </x-aura::accordion.item>
                    <x-aura::accordion.item name="sec-2" icon="bell" title="Email & Webhooks Notifications">
                        Configure webhooks endpoints and alert escalation levels.
                    </x-aura::accordion.item>
                </x-aura::accordion>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::accordion>
    <x-aura::accordion.item name="sec-1" icon="lock" title="Password Controls">...</x-aura::accordion.item>
    <x-aura::accordion.item name="sec-2" icon="bell" title="Email Notifications">...</x-aura::accordion.item>
</x-aura::accordion>@endverbatim</x-slot:codeSlot>
    </x-aura::code>
</div>

<?php

use function Livewire\Volt\{layout, title};

layout('livewire.layout.component');
title('Accordion - Aura Wire');

?>

<div class="w-full max-w-4xl mx-auto space-y-10 flex flex-col items-center justify-center">
    <!-- Header -->
    <x-aura::card class="p-6 sm:p-8 bg-white/60 dark:bg-zinc-900/50 backdrop-blur-md shadow-xs w-full">
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
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code" class="w-full">
        <x-slot:codeSlot>&lt;x-aura::accordion default="faq-1"&gt;
    &lt;x-aura::accordion.item name="faq-1" title="Question Title"&gt;Content...&lt;/x-aura::accordion.item&gt;
&lt;/x-aura::accordion&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 1. Standard FAQ Accordion -->
    <x-aura::code class="w-full" title="1. Standard FAQ Accordion (Single Expand)">
        <x-slot:preview>
            <x-aura::accordion default="faq-1" class="w-full">
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
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::accordion default="faq-1"&gt;
    &lt;x-aura::accordion.item name="faq-1" title="What is AuraWire?"&gt;
        AuraWire is a sleek Blade component library.
    &lt;/x-aura::accordion.item&gt;
    &lt;x-aura::accordion.item name="faq-2" title="How do I install it?"&gt;
        Install via Composer.
    &lt;/x-aura::accordion.item&gt;
&lt;/x-aura::accordion&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Multiple Expand Accordion -->
    <x-aura::code class="w-full" title="2. Multiple Simultaneous Open Items">
        <x-slot:preview>
            <x-aura::accordion multiple :default="['opt-1', 'opt-2']" class="w-full">
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
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::accordion multiple :default="['opt-1', 'opt-2']"&gt;
    &lt;x-aura::accordion.item name="opt-1" title="Notification Preferences"&gt;...&lt;/x-aura::accordion.item&gt;
    &lt;x-aura::accordion.item name="opt-2" title="Security & Auth"&gt;...&lt;/x-aura::accordion.item&gt;
&lt;/x-aura::accordion&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 3. Accordion with Category Icons -->
    <x-aura::code class="w-full" title="3. Accordion Items with Category Icons">
        <x-slot:preview>
            <x-aura::accordion class="w-full">
                <x-aura::accordion.item name="sec-1" icon="lock" title="Password & Security Controls">
                    Update your master password and active session tokens.
                </x-aura::accordion.item>
                <x-aura::accordion.item name="sec-2" icon="bell" title="Email & Webhooks Notifications">
                    Configure webhooks endpoints and alert escalation levels.
                </x-aura::accordion.item>
            </x-aura::accordion>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::accordion&gt;
    &lt;x-aura::accordion.item name="sec-1" icon="lock" title="Password Controls"&gt;...&lt;/x-aura::accordion.item&gt;
    &lt;x-aura::accordion.item name="sec-2" icon="bell" title="Email Notifications"&gt;...&lt;/x-aura::accordion.item&gt;
&lt;/x-aura::accordion&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>

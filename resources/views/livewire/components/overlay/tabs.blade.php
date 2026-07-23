<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Tabs Component — Aura Wire');

?>

<div class="w-full space-y-10">
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <x-aura::heading level="1" size="xl">Tabs Component</x-aura::heading>
        <x-aura::text variant="subtle" size="sm" class="mt-1"><x-aura::code>&lt;x-aura::tabs&gt;</x-aura::code> &amp; <x-aura::code>&lt;x-aura::tabs.tab&gt;</x-aura::code></x-aura::text>
    </div>
    <x-aura::code title="Tabs Navigation">
        <x-slot:preview>
            <x-aura::tabs active="account">
                <x-aura::tabs.tab name="account">Account</x-aura::tabs.tab>
                <x-aura::tabs.tab name="security">Security</x-aura::tabs.tab>
                <x-aura::tabs.tab name="notifications">Notifications</x-aura::tabs.tab>
            </x-aura::tabs>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::tabs active="account"&gt;
    &lt;x-aura::tabs.tab name="account"&gt;Account&lt;/x-aura::tabs.tab&gt;
    &lt;x-aura::tabs.tab name="security"&gt;Security&lt;/x-aura::tabs.tab&gt;
&lt;/x-aura::tabs&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>

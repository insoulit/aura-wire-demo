<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Tabs — Aura Wire');

?>

<div class="w-full max-w-3xl mx-auto space-y-6 flex flex-col items-center justify-center">
    <div class="space-y-2 text-center flex flex-col items-center">
        <x-aura::heading level="1" size="md">Tabs</x-aura::heading>
        <code class="inline-flex items-center px-3.5 py-1.5 mt-3 rounded-xl text-base sm:text-lg font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-sm">&lt;x-aura::tabs&gt;</code>
    </div>
    <x-aura::code class="w-full" title="Tabs Navigation">
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

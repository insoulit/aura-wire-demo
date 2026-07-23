<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Tabs Component — Aura Wire');

?>

<div class="w-full space-y-10">
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <h1 class="text-3xl font-extrabold text-zinc-900 dark:text-white tracking-tight">Tabs Component</h1>
        <p class="text-sm text-zinc-600 dark:text-zinc-400 mt-1"><code class="text-indigo-600 dark:text-indigo-400 font-mono">&lt;x-aura::tabs&gt;</code> & <code class="text-indigo-600 dark:text-indigo-400 font-mono">&lt;x-aura::tabs.tab&gt;</code></p>
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

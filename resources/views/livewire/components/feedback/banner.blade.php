<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Banner Component — Aura Wire');

?>

<div class="w-full space-y-10">
    <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6">
        <x-aura::heading level="1" size="xl">Banner Component</x-aura::heading>
        <x-aura::text variant="subtle" size="sm" class="mt-1"><x-aura::code>&lt;x-aura::banner&gt;</x-aura::code></x-aura::text>
    </div>

    {{-- Banner Variants --}}
    <x-aura::code title="Banner Alert Variants & Dismissible Interaction">
        <x-slot:preview>
            <div class="w-full max-w-2xl space-y-4">
                <x-aura::banner variant="info">
                    ℹ️ A new version of Aura Wire is available. Please update your dependencies.
                </x-aura::banner>

                <x-aura::banner variant="success" :dismissible="true">
                    ✅ Your changes have been successfully saved!
                </x-aura::banner>

                <x-aura::banner variant="warning" :dismissible="true">
                    ⚠️ Your trial period expires in 3 days. Upgrade to maintain full access.
                </x-aura::banner>

                <x-aura::banner variant="danger" :dismissible="true">
                    🚨 Failed to establish a database connection. Please check your credentials.
                </x-aura::banner>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::banner variant="info"&gt;
    ℹ️ A new version of Aura Wire is available.
&lt;/x-aura::banner&gt;

&lt;x-aura::banner variant="success" :dismissible="true"&gt;
    ✅ Your changes have been successfully saved!
&lt;/x-aura::banner&gt;

&lt;x-aura::banner variant="warning" :dismissible="true"&gt;
    ⚠️ Your trial period expires in 3 days.
&lt;/x-aura::banner&gt;

&lt;x-aura::banner variant="danger" :dismissible="true"&gt;
    🚨 Failed to establish a database connection.
&lt;/x-aura::banner&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>

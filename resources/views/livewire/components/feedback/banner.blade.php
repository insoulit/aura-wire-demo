<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Banner - Aura Wire');

?>

<div class="w-full max-w-3xl mx-auto space-y-6 flex flex-col items-center justify-center">
    <div class="space-y-2 text-center flex flex-col items-center">
        <x-aura::heading level="1" size="md">Banner</x-aura::heading>
        <code class="inline-flex items-center px-3.5 py-1.5 mt-3 rounded-xl text-base sm:text-lg font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-sm">&lt;x-aura::banner&gt;</code>
    </div>

    {{-- Banner Variants --}}
    <x-aura::code class="w-full" title="Banner Alert Variants & Dismissible Interaction">
        <x-slot:preview>
            <div class="w-full max-w-2xl space-y-3">
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

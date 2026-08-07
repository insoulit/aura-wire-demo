<?php

use function Livewire\Volt\{layout, title};

layout('layouts.components');
title('Avatar - Aura Wire');

?>

<div class="w-full max-w-3xl mx-auto space-y-6 flex flex-col items-center justify-center">
    <div class="space-y-3 text-center flex flex-col items-center">
        <x-aura::kicker>Data Display</x-aura::kicker>
        <x-aura::heading level="1" size="lg">Avatar</x-aura::heading>
        <x-aura::subheading class="max-w-xl">
            User profile images and fallback initial badges with online status indicators.
        </x-aura::subheading>
        <div class="pt-1">
            <code class="inline-flex items-center px-3.5 py-1.5 rounded-xl text-sm font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-2xs">
                &lt;x-aura::avatar&gt;
            </code>
        </div>
    </div>
    <x-aura::code class="w-full" title="User Avatars">
        <x-slot:preview>
            <div class="flex flex-wrap items-center gap-4">
                <x-aura::avatar initials="AW" size="xs" status="online" />
                <x-aura::avatar initials="JD" size="sm" status="online" />
                <x-aura::avatar initials="US" size="md" status="busy" />
                <x-aura::avatar initials="AD" size="lg" status="away" />
                <x-aura::avatar initials="SQ" size="xl" square status="offline" />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::avatar initials="AW" size="xs" status="online" /&gt;
&lt;x-aura::avatar initials="US" size="md" status="busy" /&gt;
&lt;x-aura::avatar initials="SQ" size="xl" square status="offline" /&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>

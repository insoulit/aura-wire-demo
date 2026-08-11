<?php

use function Livewire\Volt\{layout, title};

layout('livewire.layout.component');
title('Avatar - Aura Wire');

?>

<div class="w-full max-w-3xl mx-auto space-y-6 flex flex-col items-center justify-center">
    <!-- Header -->
    <x-aura::card class="p-6 sm:p-8 bg-white/60 dark:bg-zinc-900/50 backdrop-blur-md shadow-xs w-full">
        <div class="space-y-2 max-w-2xl">
            <div class="flex items-center gap-2.5">
                <x-aura::kicker>Display</x-aura::kicker>
                <x-aura::badge variant="subtle" size="sm">Component</x-aura::badge>
            </div>
            <x-aura::heading level="1" size="xl">Avatar</x-aura::heading>
            <x-aura::subheading size="md">
                User profile images and fallback initial badges with online status indicators.
            </x-aura::subheading>
        </div>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code" class="w-full">
        <x-slot:codeSlot>&lt;x-aura::avatar initials="JD" size="md" status="online" /&gt;</x-slot:codeSlot>
    </x-aura::code>
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

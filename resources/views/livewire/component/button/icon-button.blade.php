<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Icon Button - Aura Wire')] 
class extends Component {};

?>

<div class="w-full max-w-4xl mx-auto space-y-10 flex flex-col items-center justify-center">
    <!-- Header -->
    <div class="space-y-3 text-center flex flex-col items-center">
        <x-aura::kicker>Action</x-aura::kicker>
        <x-aura::heading level="1" size="lg">Icon Button</x-aura::heading>
        <x-aura::subheading size="sm" class="max-w-lg">
            Compact circular and square icon triggers powered by 1,000+ Lucide icons for toolbars, list controls, and quick actions.
        </x-aura::subheading>
        <div class="pt-1 flex items-center gap-2">
            <code class="inline-flex items-center px-3.5 py-1.5 rounded-xl text-sm font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-2xs">
                &lt;x-aura::icon-button icon="pencil" /&gt;
            </code>
        </div>
    </div>

    <!-- 1. General Action Variants (Diverse Icons) -->
    <x-aura::code class="w-full" title="1. Icon Button Variants">
        <x-slot:preview>
            <div class="flex flex-wrap items-center gap-4">
                <x-aura::icon-button icon="pencil" variant="primary" label="Primary Edit" />
                <x-aura::icon-button icon="eye" variant="secondary" label="Secondary View" />
                <x-aura::icon-button icon="heart" variant="subtle" class="text-rose-500" label="Subtle Favorite" />
                <x-aura::icon-button icon="settings" variant="outline" label="Outline Settings" />
                <x-aura::icon-button icon="share-2" variant="ghost" label="Ghost Share" />
                <x-aura::icon-button icon="search" variant="secondary" label="Search" />
                <x-aura::icon-button icon="plus" variant="primary" label="Add New" />
                <x-aura::icon-button icon="sparkles" variant="link" href="#" label="Link Sparkles" />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::icon-button icon="pencil" variant="primary" label="Edit" /&gt;
&lt;x-aura::icon-button icon="eye" variant="secondary" label="View" /&gt;
&lt;x-aura::icon-button icon="heart" variant="subtle" label="Favorite" /&gt;
&lt;x-aura::icon-button icon="settings" variant="outline" label="Settings" /&gt;
&lt;x-aura::icon-button icon="share-2" variant="ghost" label="Share" /&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Destructive & Delete Icon Buttons -->
    <x-aura::code class="w-full" title="2. Destructive &amp; Delete Actions (Red Icon on Hover)">
        <x-slot:preview>
            <div class="flex flex-wrap items-center gap-4">
                <x-aura::icon-button icon="trash-2" variant="danger" label="Hover Red Delete (Default)" />
                <x-aura::icon-button icon="trash" variant="danger-subtle" label="Subtle Danger" />
                <x-aura::icon-button icon="trash-2" variant="danger-solid" label="Solid Red Delete" />
                <x-aura::icon-button icon="x" variant="danger" label="Cancel / Close" />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;!-- Hover Red Delete (No solid red background by default) --&gt;
&lt;x-aura::icon-button icon="trash-2" variant="danger" label="Delete" /&gt;

&lt;!-- Subtle Danger --&gt;
&lt;x-aura::icon-button icon="trash" variant="danger-subtle" label="Delete" /&gt;

&lt;!-- Solid Red Background (For critical alerts) --&gt;
&lt;x-aura::icon-button icon="trash-2" variant="danger-solid" label="Solid Delete" /&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 3. Shapes (Circle vs Square) -->
    <x-aura::code class="w-full" title="3. Shapes (Circle vs Square)">
        <x-slot:preview>
            <div class="space-y-4">
                <div class="flex items-center gap-3">
                    <span class="text-xs font-semibold text-zinc-500 w-28">Circle (Default):</span>
                    <x-aura::icon-button icon="pencil" variant="primary" shape="circle" label="Circle Primary" />
                    <x-aura::icon-button icon="eye" variant="secondary" shape="circle" label="Circle Secondary" />
                    <x-aura::icon-button icon="bookmark" variant="subtle" shape="circle" label="Circle Bookmark" />
                    <x-aura::icon-button icon="trash-2" variant="danger" shape="circle" label="Circle Delete" />
                </div>
                <div class="flex items-center gap-3">
                    <span class="text-xs font-semibold text-zinc-500 w-28">Square:</span>
                    <x-aura::icon-button icon="pencil" variant="primary" shape="square" label="Square Primary" />
                    <x-aura::icon-button icon="eye" variant="secondary" shape="square" label="Square Secondary" />
                    <x-aura::icon-button icon="bookmark" variant="subtle" shape="square" label="Square Bookmark" />
                    <x-aura::icon-button icon="trash-2" variant="danger" shape="square" label="Square Delete" />
                </div>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;!-- Circle (Default) --&gt;
&lt;x-aura::icon-button icon="pencil" variant="primary" shape="circle" /&gt;

&lt;!-- Square --&gt;
&lt;x-aura::icon-button icon="pencil" variant="primary" shape="square" /&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 4. Sizes -->
    <x-aura::code class="w-full" title="4. Proportional Sizes (xs, sm, md, lg, xl)">
        <x-slot:preview>
            <div class="flex flex-wrap items-center gap-4">
                <x-aura::icon-button icon="bell" size="xs" variant="secondary" label="Extra Small" />
                <x-aura::icon-button icon="bell" size="sm" variant="secondary" label="Small" />
                <x-aura::icon-button icon="bell" size="md" variant="secondary" label="Medium" />
                <x-aura::icon-button icon="bell" size="lg" variant="secondary" label="Large" />
                <x-aura::icon-button icon="bell" size="xl" variant="secondary" label="Extra Large" />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::icon-button icon="bell" size="xs" /&gt;
&lt;x-aura::icon-button icon="bell" size="sm" /&gt;
&lt;x-aura::icon-button icon="bell" size="md" /&gt;
&lt;x-aura::icon-button icon="bell" size="lg" /&gt;
&lt;x-aura::icon-button icon="bell" size="xl" /&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 5. Real-World Table & Toolbar Actions -->
    <x-aura::code class="w-full" title="5. Real-World Table Actions">
        <x-slot:preview>
            <div class="w-full p-4 rounded-2xl bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 flex items-center justify-between">
                <div>
                    <h4 class="text-sm font-bold text-zinc-900 dark:text-white">User Account: Alex Kovacs</h4>
                    <p class="text-xs text-zinc-500">alex@example.com</p>
                </div>
                <div class="flex items-center gap-1.5">
                    <x-aura::icon-button icon="eye" variant="ghost" size="sm" label="View Profile" />
                    <x-aura::icon-button icon="pencil" variant="ghost" size="sm" label="Edit Profile" />
                    <x-aura::icon-button icon="trash-2" variant="danger" size="sm" label="Delete User" />
                </div>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;div class="flex items-center gap-1.5"&gt;
    &lt;x-aura::icon-button icon="eye" variant="ghost" size="sm" label="View Profile" /&gt;
    &lt;x-aura::icon-button icon="pencil" variant="ghost" size="sm" label="Edit Profile" /&gt;
    &lt;x-aura::icon-button icon="trash-2" variant="danger" size="sm" label="Delete User" /&gt;
&lt;/div&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>

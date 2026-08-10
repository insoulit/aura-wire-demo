<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('layouts.components')] 
#[Title('Subheading - Aura Wire')] 
class extends Component {};

?>

<div class="w-full max-w-4xl mx-auto space-y-10">
    <!-- Header -->
    <div class="space-y-3 text-center flex flex-col items-center">
        <x-aura::kicker>Typography Components</x-aura::kicker>
        <x-aura::heading level="1" size="lg">Subheading</x-aura::heading>
        <x-aura::subheading size="sm" class="max-w-xl">
            Subheading typography component for section lead paragraphs, feature summaries, card header descriptions, and hero text.
        </x-aura::subheading>
        <div class="pt-1">
            <code class="inline-flex items-center px-3.5 py-1.5 rounded-xl text-sm font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-2xs">
                &lt;x-aura::subheading&gt;
            </code>
        </div>
    </div>

    <!-- 1. Standard Section Subheading -->
    <x-aura::code class="w-full" title="1. Standard Section Subheading">
        <x-slot:preview>
            <div class="space-y-2 text-center flex flex-col items-center w-full">
                <x-aura::heading level="2" size="md">Dashboard Analytics</x-aura::heading>
                <x-aura::subheading size="sm" class="max-w-lg">
                    Monitor your key performance metrics, revenue growth, and active project statistics in real time.
                </x-aura::subheading>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::heading level="2" size="md"&gt;Dashboard Analytics&lt;/x-aura::heading&gt;
&lt;x-aura::subheading class="max-w-lg"&gt;
    Monitor your key performance metrics, revenue growth, and active project statistics in real time.
&lt;/x-aura::subheading&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Hero Section Header Pattern -->
    <x-aura::code class="w-full" title="2. Hero Section Header Pattern">
        <x-slot:preview>
            <div class="p-8 rounded-2xl border border-zinc-200 dark:border-zinc-800 bg-zinc-50 dark:bg-zinc-900/60 space-y-4 text-center flex flex-col items-center w-full">
                <x-aura::kicker>PRODUCTIVITY PLATFORM</x-aura::kicker>
                <x-aura::heading level="1" size="display-lg" class="max-w-2xl">
                    Build faster with modern Blade components
                </x-aura::heading>
                <x-aura::subheading class="max-w-xl text-base sm:text-lg">
                    Aura Wire provides unstyled, accessible Livewire design primitives designed to elevate your developer workflow.
                </x-aura::subheading>
                <div class="pt-2 flex items-center gap-3">
                    <x-aura::button variant="primary" pill icon-trailing="arrow-right">Get Started</x-aura::button>
                    <x-aura::button variant="ghost" pill>Documentation</x-aura::button>
                </div>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;div class="text-center flex flex-col items-center space-y-3"&gt;
    &lt;x-aura::kicker&gt;PRODUCTIVITY PLATFORM&lt;/x-aura::kicker&gt;
    &lt;x-aura::heading level="1" size="display-lg"&gt;
        Build faster with modern Blade components
    &lt;/x-aura::heading&gt;
    &lt;x-aura::subheading class="max-w-xl"&gt;
        Aura Wire provides unstyled, accessible Livewire design primitives designed to elevate your developer workflow.
    &lt;/x-aura::subheading&gt;
&lt;/div&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 3. Custom HTML Tags (as="h2", as="p", as="span") -->
    <x-aura::code class="w-full" title="3. Custom HTML Element Types (as prop)">
        <x-slot:preview>
            <div class="space-y-4 w-full">
                <div class="p-4 rounded-xl border border-zinc-200 dark:border-zinc-800 bg-white dark:bg-zinc-900 space-y-1">
                    <p class="text-xs font-mono font-bold text-indigo-600 dark:text-indigo-400 uppercase">as="p" (Default paragraph tag)</p>
                    <x-aura::subheading as="p">
                        Standard paragraph lead text for descriptive body content.
                    </x-aura::subheading>
                </div>

                <div class="p-4 rounded-xl border border-zinc-200 dark:border-zinc-800 bg-white dark:bg-zinc-900 space-y-1">
                    <p class="text-xs font-mono font-bold text-indigo-600 dark:text-indigo-400 uppercase">as="h2" (Semantic H2 heading element)</p>
                    <x-aura::subheading as="h2">
                        Subheading rendered as a semantic level-2 header tag for search engines.
                    </x-aura::subheading>
                </div>

                <div class="p-4 rounded-xl border border-zinc-200 dark:border-zinc-800 bg-white dark:bg-zinc-900 space-y-1">
                    <p class="text-xs font-mono font-bold text-indigo-600 dark:text-indigo-400 uppercase">as="span" (Inline span element)</p>
                    <x-aura::subheading as="span">
                        Inline subheading element for flexible inline container integration.
                    </x-aura::subheading>
                </div>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::subheading as="p"&gt;Standard paragraph lead text.&lt;/x-aura::subheading&gt;
&lt;x-aura::subheading as="h2"&gt;Semantic level-2 header tag.&lt;/x-aura::subheading&gt;
&lt;x-aura::subheading as="span"&gt;Inline subheading element.&lt;/x-aura::subheading&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 4. Card & Panel Header Descriptions -->
    <x-aura::code class="w-full" title="4. Card &amp; Panel Header Descriptions">
        <x-slot:preview>
            <div class="p-6 rounded-2xl border border-zinc-200 dark:border-zinc-800 bg-white dark:bg-zinc-900 space-y-6 w-full">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 border-b border-zinc-200 dark:border-zinc-800 pb-4">
                    <div>
                        <x-aura::heading level="3" size="sm">Security &amp; Authentication</x-aura::heading>
                        <x-aura::subheading class="text-sm">
                            Manage two-factor authentication and active login sessions.
                        </x-aura::subheading>
                    </div>
                    <x-aura::button variant="secondary" size="sm">Manage Sessions</x-aura::button>
                </div>

                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                    <div>
                        <x-aura::heading level="3" size="sm">API Webhooks</x-aura::heading>
                        <x-aura::subheading class="text-sm">
                            Receive real-time HTTP callbacks when events occur in your account.
                        </x-aura::subheading>
                    </div>
                    <x-aura::button variant="primary" size="sm" icon="plus">Add Webhook</x-aura::button>
                </div>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;div class="flex items-center justify-between gap-4"&gt;
    &lt;div&gt;
        &lt;x-aura::heading level="3" size="sm"&gt;Security &amp;amp; Authentication&lt;/x-aura::heading&gt;
        &lt;x-aura::subheading class="text-sm"&gt;
            Manage two-factor authentication and active login sessions.
        &lt;/x-aura::subheading&gt;
    &lt;/div&gt;
    &lt;x-aura::button variant="secondary" size="sm"&gt;Manage Sessions&lt;/x-aura::button&gt;
&lt;/div&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>

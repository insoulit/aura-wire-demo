<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('layout.component')] 
#[Title('Alert - Aura Wire')] 
class extends Component {};

?>

<div class="w-full max-w-4xl mx-auto space-y-10 flex flex-col items-center justify-center">
    <!-- Header -->
    <div class="space-y-3 text-center flex flex-col items-center">
        <x-aura::kicker>Feedback</x-aura::kicker>
        <x-aura::heading level="1" size="lg">Alert</x-aura::heading>
        <x-aura::subheading size="sm" class="max-w-lg">
            Contextual feedback callouts for status updates, system warnings, product announcements, and inline error notices.
        </x-aura::subheading>
        <div class="pt-1">
            <code class="inline-flex items-center px-3.5 py-1.5 rounded-xl text-sm font-mono font-bold bg-zinc-100 text-zinc-900 dark:bg-zinc-800 dark:text-zinc-100 border border-zinc-200 dark:border-zinc-700 shadow-2xs">
                &lt;x-aura::alert&gt;
            </code>
        </div>
    </div>

    <!-- 1. Status Alerts -->
    <x-aura::code class="w-full" title="1. Status Alerts (subtle layout)">
        <x-slot:preview>
            <div class="space-y-4 w-full">
                <x-aura::alert variant="info" title="System Update Scheduled" description="Server maintenance is planned for tonight at 02:00 UTC." dismissible />
                <x-aura::alert variant="success" title="Payment Authorized" description="Your subscription auto-renewed successfully." dismissible />
                <x-aura::alert variant="warning" title="Storage Limit Reached" description="You have used 92% of your available team storage." dismissible />
                <x-aura::alert variant="danger" title="Deployment Failure" description="Build process exited with non-zero status code 1." dismissible />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::alert variant="info" title="System Update" description="..." dismissible /&gt;
&lt;x-aura::alert variant="success" title="Payment Authorized" description="..." dismissible /&gt;
&lt;x-aura::alert variant="warning" title="Storage Limit Reached" description="..." dismissible /&gt;
&lt;x-aura::alert variant="danger" title="Deployment Failure" description="..." dismissible /&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Left-Accent Alerts -->
    <x-aura::code class="w-full" title="2. Left-Accent Border Layout (layout='left-accent')">
        <x-slot:preview>
            <div class="space-y-4 w-full">
                <x-aura::alert layout="left-accent" variant="info" title="New Feature Unlocked" description="You can now invite guest reviewers directly to your workspace.">
                    <x-slot:action>
                        <x-aura::button variant="outline" size="xs">Learn More</x-aura::button>
                    </x-slot:action>
                </x-aura::alert>

                <x-aura::alert layout="left-accent" variant="warning" title="API Deprecation Notice" description="Legacy API v1 endpoint will be deactivated on October 31st.">
                    <x-slot:action>
                        <x-aura::button variant="ghost" size="xs">Migration Guide &rarr;</x-aura::button>
                    </x-slot:action>
                </x-aura::alert>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::alert layout="left-accent" variant="info" title="New Feature Unlocked" description="..."&gt;
    &lt;x-slot:action&gt;
        &lt;x-aura::button variant="outline" size="xs"&gt;Learn More&lt;/x-aura::button&gt;
    &lt;/x-slot:action&gt;
&lt;/x-aura::alert&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 3. Announcement Banner Layout -->
    <x-aura::code class="w-full" title="3. Product Announcement Layout (layout='announcement')">
        <x-slot:preview>
            <div class="w-full">
                <x-aura::alert layout="announcement" badge="NEW" title="Aura Wire v2.4.0 Released" description="Introducing responsive sheet drawers, custom toast stacks, and centered modal popups.">
                    <x-slot:action>
                        <x-aura::button variant="primary" size="xs">Read Changelog</x-aura::button>
                    </x-slot:action>
                </x-aura::alert>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::alert layout="announcement" badge="NEW" title="Aura Wire v2.4.0 Released" description="..."&gt;
    &lt;x-slot:action&gt;
        &lt;x-aura::button variant="primary" size="xs"&gt;Read Changelog&lt;/x-aura::button&gt;
    &lt;/x-slot:action&gt;
&lt;/x-aura::alert&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>

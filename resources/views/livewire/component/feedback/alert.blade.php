<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.component')] 
#[Title('Alert - Aura Wire')] 
class extends Component {};

?>

<x-aura::stack gap="10" class="w-full max-w-4xl mx-auto py-2">
    <!-- Header -->
    <x-aura::card>
        <x-aura::stack gap="2" class="max-w-2xl">
            <x-aura::flex align="center" gap="2.5">
                <x-aura::kicker>Feedback</x-aura::kicker>
                <x-aura::badge variant="subtle" size="sm">Component</x-aura::badge>
            </x-aura::flex>
            <x-aura::heading level="1" size="xl">Alert</x-aura::heading>
            <x-aura::subheading size="md">
                Contextual feedback callouts for status updates, system warnings, product announcements, and inline error notices.
            </x-aura::subheading>
        </x-aura::stack>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code" >
        <x-slot:codeSlot>@verbatim<x-aura::alert variant="info" title="System Notice">Maintenance scheduled.</x-aura::alert>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 1. Status Alerts -->
    <x-aura::code  title="1. Status Alerts (subtle layout)">
        <x-slot:preview>
            <div class="space-y-4 w-full">
                <x-aura::alert variant="info" title="System Update Scheduled" description="Server maintenance is planned for tonight at 02:00 UTC." dismissible />
                <x-aura::alert variant="success" title="Payment Authorized" description="Your subscription auto-renewed successfully." dismissible />
                <x-aura::alert variant="warning" title="Storage Limit Reached" description="You have used 92% of your available team storage." dismissible />
                <x-aura::alert variant="danger" title="Deployment Failure" description="Build process exited with non-zero status code 1." dismissible />
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::alert variant="info" title="System Update" description="..." dismissible />
<x-aura::alert variant="success" title="Payment Authorized" description="..." dismissible />
<x-aura::alert variant="warning" title="Storage Limit Reached" description="..." dismissible />
<x-aura::alert variant="danger" title="Deployment Failure" description="..." dismissible />@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Left-Accent Alerts -->
    <x-aura::code  title="2. Left-Accent Border Layout (layout='left-accent')">
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
        <x-slot:codeSlot>@verbatim<x-aura::alert layout="left-accent" variant="info" title="New Feature Unlocked" description="...">
    <x-slot:action>
        <x-aura::button variant="outline" size="xs">Learn More</x-aura::button>
    </x-slot:action>
</x-aura::alert>@endverbatim</x-slot:codeSlot>
    </x-aura::code>

    <!-- 3. Announcement Banner Layout -->
    <x-aura::code  title="3. Product Announcement Layout (layout='announcement')">
        <x-slot:preview>
            <div class="w-full">
                <x-aura::alert layout="announcement" badge="NEW" title="Aura Wire v2.4.0 Released" description="Introducing responsive sheet drawers, custom toast stacks, and centered modal popups.">
                    <x-slot:action>
                        <x-aura::button variant="primary" size="xs">Read Changelog</x-aura::button>
                    </x-slot:action>
                </x-aura::alert>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>@verbatim<x-aura::alert layout="announcement" badge="NEW" title="Aura Wire v2.4.0 Released" description="...">
    <x-slot:action>
        <x-aura::button variant="primary" size="xs">Read Changelog</x-aura::button>
    </x-slot:action>
</x-aura::alert>@endverbatim</x-slot:codeSlot>
    </x-aura::code>
</x-aura::stack>

<?php

use Livewire\Volt\Component;

new class extends Component {
    public int $currentStep = 2;

    public function nextStep()
    {
        if ($this->currentStep < 4) {
            $this->currentStep++;
        }
    }

    public function previousStep()
    {
        if ($this->currentStep > 1) {
            $this->currentStep--;
        }
    }

    public function rendering($view)
    {
        $view->layout('livewire.layout.component')->title('Stepper - Aura Wire');
    }
};

?>

<div class="w-full max-w-4xl mx-auto space-y-10 flex flex-col items-center justify-center">
    <!-- Header -->
    <x-aura::card class="p-6 sm:p-8 bg-white/60 dark:bg-zinc-900/50 backdrop-blur-md shadow-xs w-full">
        <div class="space-y-2 max-w-2xl">
            <div class="flex items-center gap-2.5">
                <x-aura::kicker>Navigation</x-aura::kicker>
                <x-aura::badge variant="subtle" size="sm">Component</x-aura::badge>
            </div>
            <x-aura::heading level="1" size="xl">Stepper</x-aura::heading>
            <x-aura::subheading size="md">
                Step-by-step progress workflow indicator for multi-stage forms, onboarding wizards, or checkout pipelines.
            </x-aura::subheading>
        </div>
    </x-aura::card>

    <!-- Component Syntax -->
    <x-aura::code variant="dark" title="Component Syntax" :showTabs="false" active="code" class="w-full">
        <x-slot:codeSlot>&lt;x-aura::stepper :steps="$steps" :currentStep="$currentStep" /&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 1. Interactive Livewire Stepper Form -->
    <x-aura::code class="w-full" title="1. Interactive Livewire Multi-step Form Wizard">
        <x-slot:preview>
            <div class="w-full space-y-6 py-2">
                <x-aura::stepper :active="$currentStep" class="w-full">
                    <x-aura::stepper.step step="1" title="Account Setup" description="Enter email & password" :status="$currentStep > 1 ? 'completed' : ($currentStep === 1 ? 'active' : 'pending')" />
                    <x-aura::stepper.step step="2" title="Workspace Setup" description="Configure team domain" :status="$currentStep > 2 ? 'completed' : ($currentStep === 2 ? 'active' : 'pending')" />
                    <x-aura::stepper.step step="3" title="Team Members" description="Invite collaborators" :status="$currentStep > 3 ? 'completed' : ($currentStep === 3 ? 'active' : 'pending')" />
                    <x-aura::stepper.step step="4" title="Finish" description="Launch dashboard" :status="$currentStep === 4 ? 'completed' : ($currentStep === 4 ? 'active' : 'pending')" />
                </x-aura::stepper>

                <x-aura::card class="p-6 bg-zinc-50/80 dark:bg-zinc-900 space-y-4">
                    @if ($currentStep === 1)
                        <div class="space-y-3">
                            <h4 class="text-sm font-bold text-zinc-900 dark:text-white">Step 1: Account Information</h4>
                            <x-aura::input label="Work Email" placeholder="alex@company.com" />
                            <x-aura::input label="Password" type="password" placeholder="••••••••" />
                        </div>
                    @elseif ($currentStep === 2)
                        <div class="space-y-3">
                            <h4 class="text-sm font-bold text-zinc-900 dark:text-white">Step 2: Workspace Details</h4>
                            <x-aura::input label="Workspace Name" placeholder="Aura Systems Inc." />
                            <x-aura::input label="Subdomain" placeholder="aura-systems" />
                        </div>
                    @elseif ($currentStep === 3)
                        <div class="space-y-3">
                            <h4 class="text-sm font-bold text-zinc-900 dark:text-white">Step 3: Invite Team Members</h4>
                            <x-aura::input label="Teammate Email" placeholder="sarah@company.com" />
                            <x-aura::select label="Role" :options="['admin' => 'Administrator', 'member' => 'Member', 'viewer' => 'Viewer']" />
                        </div>
                    @else
                        <div class="space-y-2 text-center py-4">
                            <x-aura::icon name="check-circle" size="lg" class="mx-auto text-zinc-900 dark:text-white" />
                            <h4 class="text-base font-bold text-zinc-900 dark:text-white">Workspace Created Successfully!</h4>
                            <p class="text-xs text-zinc-500">Your account and team environment are ready to use.</p>
                        </div>
                    @endif

                    <div class="flex items-center justify-between pt-2">
                        <x-aura::button variant="secondary" size="sm" wire:click="previousStep" :disabled="$currentStep === 1">
                            Previous Step
                        </x-aura::button>
                        <x-aura::button variant="primary" size="sm" wire:click="nextStep" :disabled="$currentStep === 4">
                            {{ $currentStep === 3 ? 'Complete Setup' : ($currentStep === 4 ? 'Done' : 'Next Step') }}
                        </x-aura::button>
                    </div>
                </x-aura::card>
            </div>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::stepper :active="$currentStep"&gt;
    &lt;x-aura::stepper.step step="1" title="Account Setup" description="Enter email &amp; password" :status="$currentStep &gt; 1 ? 'completed' : ($currentStep === 1 ? 'active' : 'pending')" /&gt;
    &lt;x-aura::stepper.step step="2" title="Workspace Setup" description="Configure team domain" :status="$currentStep &gt; 2 ? 'completed' : ($currentStep === 2 ? 'active' : 'pending')" /&gt;
    &lt;x-aura::stepper.step step="3" title="Team Members" description="Invite collaborators" :status="$currentStep &gt; 3 ? 'completed' : ($currentStep === 3 ? 'active' : 'pending')" /&gt;
    &lt;x-aura::stepper.step step="4" title="Finish" description="Launch dashboard" :status="$currentStep === 4 ? 'completed' : ($currentStep === 4 ? 'active' : 'pending')" /&gt;
&lt;/x-aura::stepper&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 2. Order Checkout Stepper -->
    <x-aura::code class="w-full" title="2. E-Commerce Order Processing Pipeline">
        <x-slot:preview>
            <x-aura::stepper active="3" class="w-full py-4">
                <x-aura::stepper.step step="1" title="Cart Review" description="2 items in cart" status="completed" />
                <x-aura::stepper.step step="2" title="Shipping Address" description="Express shipping" status="completed" />
                <x-aura::stepper.step step="3" title="Payment Method" description="Credit card ending 4242" status="active" />
                <x-aura::stepper.step step="4" title="Order Placed" description="Send confirmation email" status="pending" />
            </x-aura::stepper>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::stepper active="3"&gt;
    &lt;x-aura::stepper.step step="1" title="Cart Review" description="2 items in cart" status="completed" /&gt;
    &lt;x-aura::stepper.step step="2" title="Shipping Address" description="Express shipping" status="completed" /&gt;
    &lt;x-aura::stepper.step step="3" title="Payment Method" description="Credit card ending 4242" status="active" /&gt;
    &lt;x-aura::stepper.step step="4" title="Order Placed" description="Send confirmation email" status="pending" /&gt;
&lt;/x-aura::stepper&gt;</x-slot:codeSlot>
    </x-aura::code>

    <!-- 3. Identity Verification & KYC Pipeline -->
    <x-aura::code class="w-full" title="3. User Identity Verification (KYC) Workflow">
        <x-slot:preview>
            <x-aura::stepper active="2" class="w-full py-4">
                <x-aura::stepper.step step="1" title="Personal Details" description="Name & DOB" status="completed" />
                <x-aura::stepper.step step="2" title="Government ID" description="Upload passport or license" status="active" />
                <x-aura::stepper.step step="3" title="Selfie Verification" description="Biometric face check" status="pending" />
                <x-aura::stepper.step step="4" title="Approval" description="Instant verification" status="pending" />
            </x-aura::stepper>
        </x-slot:preview>
        <x-slot:codeSlot>&lt;x-aura::stepper active="2"&gt;
    &lt;x-aura::stepper.step step="1" title="Personal Details" description="Name &amp; DOB" status="completed" /&gt;
    &lt;x-aura::stepper.step step="2" title="Government ID" description="Upload passport or license" status="active" /&gt;
    &lt;x-aura::stepper.step step="3" title="Selfie Verification" description="Biometric face check" status="pending" /&gt;
    &lt;x-aura::stepper.step step="4" title="Approval" description="Instant verification" status="pending" /&gt;
&lt;/x-aura::stepper&gt;</x-slot:codeSlot>
    </x-aura::code>
</div>

<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('layouts.guest')] 
#[Title('Auth & Security Block — Guest Portal | Aura Wire')] 
class extends Component {};

?>

<div class="w-full max-w-4xl mx-auto space-y-10 flex flex-col items-center justify-center py-6">
    <!-- Header -->
    <div class="space-y-3 text-center flex flex-col items-center">
        <x-aura::kicker>Guest Portal Design Blocks</x-aura::kicker>
        <x-aura::heading level="1" size="lg">Auth &amp; Security Blocks</x-aura::heading>
        <x-aura::subheading class="max-w-lg">
            High-security sign-in cards, multi-factor OTP verification forms, and password recovery modules.
        </x-aura::subheading>
    </div>

    <!-- Login Block Preview -->
    <x-aura::code class="w-full" title="Sign-In &amp; Security Authentication Block">
        <x-slot:preview>
            <div class="w-full max-w-md mx-auto">
                <x-aura::card class="p-8 space-y-6 shadow-xl">
                    <div class="space-y-2 text-center">
                        <div class="w-12 h-12 rounded-xl bg-indigo-50 dark:bg-indigo-950/50 text-indigo-600 dark:text-indigo-400 mx-auto flex items-center justify-center font-black text-xl border border-indigo-200 dark:border-indigo-800">
                            A
                        </div>
                        <h3 class="text-xl font-extrabold text-zinc-900 dark:text-white">Welcome Back</h3>
                        <p class="text-xs text-zinc-500">Sign in to access your dashboard workspace.</p>
                    </div>

                    <form class="space-y-4" onsubmit="event.preventDefault()">
                        <x-aura::field label="Work Email">
                            <x-aura::input type="email" placeholder="alex@company.com" value="alex@company.com">
                                <x-slot name="icon">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                </x-slot>
                            </x-aura::input>
                        </x-aura::field>

                        <x-aura::field label="Password">
                            <x-aura::input type="password" value="secret123" placeholder="••••••••" />
                        </x-aura::field>

                        <div class="flex items-center justify-between text-xs">
                            <x-aura::checkbox label="Remember me for 30 days" checked />
                            <a href="#" class="text-indigo-600 dark:text-indigo-400 font-semibold hover:underline">Forgot password?</a>
                        </div>

                        <x-aura::button variant="primary" size="md" class="w-full justify-center shadow-md">
                            Sign In to Account
                        </x-aura::button>
                    </form>
                </x-aura::card>
            </div>
        </x-slot:preview>
        <x-slot name="codeSlot">&lt;x-aura::card class="p-8 max-w-md"&gt;
    &lt;x-aura::field label="Work Email"&gt;
        &lt;x-aura::input type="email" /&gt;
    &lt;/x-aura::field&gt;
    &lt;x-aura::button variant="primary"&gt;Sign In&lt;/x-aura::button&gt;
&lt;/x-aura::card&gt;</x-slot>
    </x-aura::code>
</div>

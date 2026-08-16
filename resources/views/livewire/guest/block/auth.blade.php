<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.app')] 
#[Title('Auth & Security — Guest Portal | Aura Wire')] 
class extends Component {};

?>

<div class="w-full max-w-4xl mx-auto space-y-4 py-6">
    <!-- Top Header -->
    <div class="space-y-1 px-1">
        <div class="flex items-center justify-between gap-4">
            <div>
                <x-aura::kicker>Design Blocks</x-aura::kicker>
                <x-aura::heading level="1" size="lg">Auth &amp; Security</x-aura::heading>
            </div>
            <x-aura::button href="/guest#design-block" variant="subtle" size="sm" >
                <x-aura::icon name="arrow-left"  size="xs" />
                <span>Back</span>
            </x-aura::button>
        </div>
    </div>

    <!-- Login Block Preview -->
    <x-aura::code  title="Sign-In &amp; Security Authentication Block">
        <x-slot:preview>
            <div class="w-full max-w-md mx-auto">
                <x-aura::card >
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

                        <x-aura::button variant="primary" size="md" >
                            <span>Login</span>
                        </x-aura::button>
                    </form>
                </x-aura::card>
            </div>
        </x-slot:preview>
        <x-slot name="codeSlot">&lt;x-aura::card class="p-8 max-w-md space-y-6 shadow-xl"&gt;
    &lt;div class="space-y-2 text-center"&gt;
        &lt;h3 class="text-xl font-extrabold"&gt;Welcome Back&lt;/h3&gt;
        &lt;p class="text-xs text-zinc-500"&gt;Sign in to access your dashboard workspace.&lt;/p&gt;
    &lt;/div&gt;

    &lt;form class="space-y-4"&gt;
        &lt;x-aura::field label="Work Email"&gt;
            &lt;x-aura::input type="email" placeholder="alex@company.com" /&gt;
        &lt;/x-aura::field&gt;

        &lt;x-aura::field label="Password"&gt;
            &lt;x-aura::input type="password" placeholder="••••••••" /&gt;
        &lt;/x-aura::field&gt;

        &lt;div class="flex items-center justify-between text-xs"&gt;
            &lt;x-aura::checkbox label="Remember me for 30 days" checked /&gt;
            &lt;a href="#" class="text-indigo-600 font-semibold hover:underline"&gt;Forgot password?&lt;/a&gt;
        &lt;/div&gt;

        &lt;x-aura::button variant="primary" size="md" class="w-full"&gt;
            Sign In to Account
        &lt;/x-aura::button&gt;
    &lt;/form&gt;
&lt;/x-aura::card&gt;</x-slot>
    </x-aura::code>
</div>

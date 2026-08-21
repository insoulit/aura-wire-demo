<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new 
#[Layout('livewire.layout.app')] 
#[Title('Auth and Security — Guest Portal | Aura Wire')] 
class extends Component {};

?>

<x-aura::container size="4xl" gap="6">

    <!-- Top Header -->
    <x-aura::flex justify="between" gap="4">

        <x-aura::flex direction="col" gap="none">

            <x-aura::kicker>
                Design Blocks
            </x-aura::kicker>

            <x-aura::heading level="1" size="lg">
                Auth and Security
            </x-aura::heading>

        </x-aura::flex>

        <x-aura::flex justify="end" gap="2">

            <x-aura::button href="/guest#design-block" wire:navigate variant="secondary" size="sm" icon="arrow-left">
                Back
            </x-aura::button>

        </x-aura::flex>

    </x-aura::flex>

    <!-- Login Block Preview -->
    <x-aura::code title="Sign In and Security Authentication Block">

        <x-slot:preview>

            <x-aura::center>

                <x-aura::card size="md" padding="lg" gap="6">

                    <x-aura::flex direction="col" gap="2" align="center" justify="center">

                        <x-aura::icon name="lock" size="lg" :container="true" />

                        <x-aura::heading level="3" size="md" align="center">
                            Welcome Back
                        </x-aura::heading>

                        <x-aura::text variant="subtle" size="sm" align="center">
                            Sign in to access your dashboard workspace.
                        </x-aura::text>

                    </x-aura::flex>

                    <form onsubmit="event.preventDefault()">

                        <x-aura::flex direction="col" gap="4">

                            <x-aura::field label="Work Email">

                                <x-aura::input type="email" placeholder="alex@company.com" value="alex@company.com" icon="mail" />

                            </x-aura::field>

                            <x-aura::field label="Password">

                                <x-aura::input type="password" value="secret123" placeholder="••••••••" icon="lock" />

                            </x-aura::field>

                            <x-aura::flex align="center" justify="between">

                                <x-aura::checkbox label="Remember me for 30 days" checked size="sm" />

                                <x-aura::link href="#" size="sm" underline="hover">
                                    Forgot Password
                                </x-aura::link>

                            </x-aura::flex>

                            <x-aura::button variant="primary" size="md" block="true">
                                Login
                            </x-aura::button>

                        </x-aura::flex>

                    </form>

                </x-aura::card>

            </x-aura::center>

        </x-slot:preview>

        <x-slot:codeSlot>

            @verbatim
                <x-aura::card size="md" padding="lg" gap="6">
                    <x-aura::flex direction="col" gap="2" align="center" justify="center">
                        <x-aura::icon name="lock" size="lg" :container="true" />

                        <x-aura::heading level="3" size="md" align="center">
                            Welcome Back
                        </x-aura::heading>

                        <x-aura::text variant="subtle" size="sm" align="center">
                            Sign in to access your dashboard workspace.
                        </x-aura::text>
                    </x-aura::flex>

                    <form>
                        <x-aura::flex direction="col" gap="4">
                            <x-aura::field label="Work Email">
                                <x-aura::input type="email" placeholder="alex@company.com" icon="mail" />
                            </x-aura::field>

                            <x-aura::field label="Password">
                                <x-aura::input type="password" placeholder="••••••••" icon="lock" />
                            </x-aura::field>

                            <x-aura::flex align="center" justify="between">
                                <x-aura::checkbox label="Remember me for 30 days" checked size="sm" />

                                <x-aura::link href="#" size="sm" underline="hover">
                                    Forgot Password
                                </x-aura::link>
                            </x-aura::flex>

                            <x-aura::button variant="primary" size="md" block="true">
                                Login
                            </x-aura::button>
                        </x-aura::flex>
                    </form>
                </x-aura::card>
            @endverbatim

        </x-slot:codeSlot>

    </x-aura::code>

</x-aura::container>

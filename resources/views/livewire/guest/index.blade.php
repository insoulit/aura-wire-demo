<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new #[Layout('layouts.guest')] #[Title('Design Blocks & Templates — Guest Portal | Aura Wire')] class extends Component {
    //
};

?>

<div class="w-full max-w-6xl space-y-16 py-6">
    <!-- Hero Header Section -->
    <div class="relative text-center space-y-6 max-w-4xl mx-auto pt-2">
        <!-- Ambient Monochrome Glow -->
        <div class="absolute -top-12 left-1/2 -translate-x-1/2 w-96 h-96 bg-zinc-500/10 dark:bg-zinc-400/5 rounded-full blur-3xl -z-10 pointer-events-none"></div>

        <div class="inline-flex items-center gap-2">
            <x-aura::badge variant="neutral" size="md">✨ AURA WIRE GUEST PORTAL</x-aura::badge>
            <x-aura::badge variant="positive" size="md">Uber Base Aesthetics</x-aura::badge>
        </div>

        <x-aura::heading level="1" size="display-lg" class="tracking-tight text-zinc-900 dark:text-white">
            Design Blocks &amp; Full Templates <br class="hidden sm:block" />
            <span class="text-zinc-900 dark:text-white underline decoration-zinc-400 dark:decoration-zinc-600 underline-offset-8">
                Crafted with Aura Wire
            </span>
        </x-aura::heading>

        <x-aura::subheading class="max-w-2xl mx-auto text-lg">
            Explore ready-to-use composite UI design blocks with live preview code, and explore complete full-page application templates.
        </x-aura::subheading>

        <!-- Quick Jump Section Buttons -->
        <div class="flex flex-wrap items-center justify-center gap-3 pt-2">
            <x-aura::button variant="primary" size="lg" href="#design-blocks">
                <x-slot name="icon">
                    <svg class="w-5 h-5 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/></svg>
                </x-slot>
                1. Explore Design Blocks &darr;
            </x-aura::button>
            <x-aura::button variant="secondary" size="lg" href="#templates">
                <x-slot name="icon">
                    <svg class="w-5 h-5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                </x-slot>
                2. View Full Templates &darr;
            </x-aura::button>
        </div>
    </div>

    <!-- ========================================================================= -->
    <!-- MAJOR SECTION 1: DESIGN BLOCKS (With Live Preview & Copyable Code) -->
    <!-- ========================================================================= -->
    <div id="design-blocks" class="space-y-12 scroll-mt-24">
        <div class="flex items-center justify-between border-b border-zinc-200 dark:border-zinc-800 pb-4">
            <div class="space-y-1">
                <div class="flex items-center gap-2">
                    <span class="px-2 py-0.5 rounded-md text-xs font-bold bg-indigo-100 text-indigo-700 dark:bg-indigo-950 dark:text-indigo-300">SECTION 1</span>
                    <x-aura::heading level="2" size="lg">Design Blocks</x-aura::heading>
                </div>
                <x-aura::subheading>Composite, production-ready UI blocks combining multiple Aura Wire components with copyable code snippets.</x-aura::subheading>
            </div>
            <x-aura::badge variant="neutral" size="sm">5 Premium Blocks</x-aura::badge>
        </div>

        <div class="space-y-12">
            <!-- Block 1: E-Commerce Product Card Block -->
            <div class="space-y-4">
                <div class="flex items-center justify-between">
                    <h3 class="text-lg font-bold text-zinc-900 dark:text-white flex items-center gap-2">
                        <span>🛍️</span> Product Card Block
                    </h3>
                    <x-aura::badge variant="subtle" size="sm">E-Commerce</x-aura::badge>
                </div>
                <x-aura::code class="w-full" title="E-Commerce Product Showcase Block">
                    <x-slot:preview>
                        <div class="w-full max-w-md mx-auto">
                            <x-aura::card class="overflow-hidden p-0 border border-zinc-200 dark:border-zinc-800 shadow-md">
                                <div class="relative w-full h-52 bg-gradient-to-br from-zinc-900 via-zinc-800 to-zinc-950 flex items-center justify-center p-6">
                                    <x-aura::badge variant="positive" size="sm" class="absolute top-3 left-3 shadow-sm font-bold">Save $50</x-aura::badge>
                                    <div class="w-24 h-24 rounded-2xl bg-zinc-800/80 border border-zinc-700/50 flex items-center justify-center text-zinc-300 shadow-2xl">
                                        <svg class="w-12 h-12 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
                                    </div>
                                </div>
                                <div class="p-6 space-y-4">
                                    <div class="space-y-1">
                                        <div class="flex items-center justify-between">
                                            <x-aura::kicker>Audio &amp; Electronics</x-aura::kicker>
                                            <span class="text-amber-400 text-xs font-bold">★ 4.9 (128)</span>
                                        </div>
                                        <h3 class="text-lg font-extrabold text-zinc-900 dark:text-white">Aura SoundPro Wireless ANC</h3>
                                        <p class="text-xs text-zinc-500">Spatial acoustics with 40h battery life.</p>
                                    </div>
                                    <div class="pt-2 flex items-center justify-between">
                                        <span class="text-2xl font-black font-mono text-zinc-900 dark:text-white">$299.00</span>
                                        <x-aura::button variant="primary" size="md">Add to Cart</x-aura::button>
                                    </div>
                                </div>
                            </x-aura::card>
                        </div>
                    </x-slot:preview>
                    <x-slot name="codeSlot">&lt;x-aura::card class="p-0 border overflow-hidden"&gt;
    &lt;div class="h-52 bg-zinc-900 flex items-center justify-center"&gt;
        &lt;x-aura::badge variant="positive" size="sm"&gt;Save $50&lt;/x-aura::badge&gt;
    &lt;/div&gt;
    &lt;div class="p-6 space-y-4"&gt;
        &lt;x-aura::kicker&gt;Audio &amp; Electronics&lt;/x-aura::kicker&gt;
        &lt;h3 class="text-lg font-extrabold"&gt;Aura SoundPro Wireless&lt;/h3&gt;
        &lt;div class="flex items-center justify-between"&gt;
            &lt;span class="text-2xl font-black font-mono"&gt;$299.00&lt;/span&gt;
            &lt;x-aura::button variant="primary" size="md"&gt;Add to Cart&lt;/x-aura::button&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/x-aura::card&gt;</x-slot>
                </x-aura::code>
            </div>

            <!-- Block 2: SaaS Pricing Tier Table Block -->
            <div class="space-y-4">
                <div class="flex items-center justify-between">
                    <h3 class="text-lg font-bold text-zinc-900 dark:text-white flex items-center gap-2">
                        <span>💎</span> Pricing Tier Block
                    </h3>
                    <x-aura::badge variant="subtle" size="sm">SaaS &amp; Subscriptions</x-aura::badge>
                </div>
                <x-aura::code class="w-full" title="3-Tier SaaS Pricing Matrix Block">
                    <x-slot:preview>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 w-full items-stretch">
                            <!-- Tier 1 -->
                            <x-aura::card class="flex flex-col justify-between p-6 space-y-6">
                                <div class="space-y-4">
                                    <div class="space-y-1">
                                        <x-aura::kicker>Starter</x-aura::kicker>
                                        <h3 class="text-xl font-bold text-zinc-900 dark:text-white">Individual</h3>
                                        <p class="text-xs text-zinc-500">Essential tools to launch.</p>
                                    </div>
                                    <span class="text-3xl font-black font-mono text-zinc-900 dark:text-white">$19<span class="text-xs text-zinc-400 font-semibold">/mo</span></span>
                                    <x-aura::separator />
                                    <ul class="space-y-2 text-xs text-zinc-600 dark:text-zinc-300">
                                        <li class="flex items-center gap-2"><span class="text-emerald-500 font-bold">✓</span> 5 Active Projects</li>
                                        <li class="flex items-center gap-2"><span class="text-emerald-500 font-bold">✓</span> 10 GB Storage</li>
                                    </ul>
                                </div>
                                <x-aura::button variant="outline" size="md" class="w-full justify-center">Get Started</x-aura::button>
                            </x-aura::card>

                            <!-- Tier 2: Featured -->
                            <x-aura::card class="flex flex-col justify-between p-6 space-y-6 relative border-2 border-indigo-500 shadow-xl">
                                <x-aura::badge variant="positive" size="sm" class="absolute -top-3 right-6 bg-indigo-600 text-white font-bold">MOST POPULAR</x-aura::badge>
                                <div class="space-y-4">
                                    <div class="space-y-1">
                                        <x-aura::kicker class="text-indigo-500 font-bold">Pro Plan</x-aura::kicker>
                                        <h3 class="text-xl font-bold text-zinc-900 dark:text-white">Teams</h3>
                                        <p class="text-xs text-zinc-500">Full power collaboration.</p>
                                    </div>
                                    <span class="text-3xl font-black font-mono text-zinc-900 dark:text-white">$49<span class="text-xs text-zinc-400 font-semibold">/mo</span></span>
                                    <x-aura::separator />
                                    <ul class="space-y-2 text-xs text-zinc-600 dark:text-zinc-300">
                                        <li class="flex items-center gap-2 font-medium"><span class="text-emerald-500 font-bold">✓</span> Unlimited Projects</li>
                                        <li class="flex items-center gap-2 font-medium"><span class="text-emerald-500 font-bold">✓</span> 500 GB Storage</li>
                                        <li class="flex items-center gap-2 font-medium"><span class="text-emerald-500 font-bold">✓</span> Priority 24/7 Support</li>
                                    </ul>
                                </div>
                                <x-aura::button variant="primary" size="md" class="w-full justify-center">Upgrade to Pro</x-aura::button>
                            </x-aura::card>

                            <!-- Tier 3 -->
                            <x-aura::card class="flex flex-col justify-between p-6 space-y-6">
                                <div class="space-y-4">
                                    <div class="space-y-1">
                                        <x-aura::kicker>Enterprise</x-aura::kicker>
                                        <h3 class="text-xl font-bold text-zinc-900 dark:text-white">Organization</h3>
                                        <p class="text-xs text-zinc-500">Dedicated node SLA.</p>
                                    </div>
                                    <span class="text-3xl font-black font-mono text-zinc-900 dark:text-white">$199<span class="text-xs text-zinc-400 font-semibold">/mo</span></span>
                                    <x-aura::separator />
                                    <ul class="space-y-2 text-xs text-zinc-600 dark:text-zinc-300">
                                        <li class="flex items-center gap-2"><span class="text-emerald-500 font-bold">✓</span> Bare-Metal Node</li>
                                        <li class="flex items-center gap-2"><span class="text-emerald-500 font-bold">✓</span> SAML / SSO Logins</li>
                                    </ul>
                                </div>
                                <x-aura::button variant="secondary" size="md" class="w-full justify-center">Contact Sales</x-aura::button>
                            </x-aura::card>
                        </div>
                    </x-slot:preview>
                    <x-slot name="codeSlot">&lt;div class="grid grid-cols-1 md:grid-cols-3 gap-6"&gt;
    &lt;x-aura::card&gt;Starter ($19)&lt;/x-aura::card&gt;
    &lt;x-aura::card class="border-2 border-indigo-500"&gt;Pro ($49)&lt;/x-aura::card&gt;
    &lt;x-aura::card&gt;Enterprise ($199)&lt;/x-aura::card&gt;
&lt;/div&gt;</x-slot>
                </x-aura::code>
            </div>

            <!-- Block 3: Dashboard Metrics Block -->
            <div class="space-y-4">
                <div class="flex items-center justify-between">
                    <h3 class="text-lg font-bold text-zinc-900 dark:text-white flex items-center gap-2">
                        <span>📊</span> Dashboard Widgets Block
                    </h3>
                    <x-aura::badge variant="subtle" size="sm">Analytics</x-aura::badge>
                </div>
                <x-aura::code class="w-full" title="Analytics &amp; Resource Gauges Block">
                    <x-slot:preview>
                        <div class="space-y-6 w-full">
                            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                                <x-aura::card class="space-y-2">
                                    <x-aura::kicker>Gross Sales</x-aura::kicker>
                                    <p class="text-2xl font-black font-mono text-zinc-900 dark:text-white">$84,120.00</p>
                                    <x-aura::badge variant="positive" size="sm">+18.4% vs last month</x-aura::badge>
                                </x-aura::card>
                                <x-aura::card class="space-y-2">
                                    <x-aura::kicker>Team Members</x-aura::kicker>
                                    <p class="text-2xl font-black font-mono text-zinc-900 dark:text-white">42 Active</p>
                                    <div class="flex items-center gap-1.5 pt-1">
                                        <x-aura::avatar initials="AM" status="online" size="xs" />
                                        <x-aura::avatar initials="SC" status="online" size="xs" />
                                        <x-aura::avatar initials="RK" status="away" size="xs" />
                                    </div>
                                </x-aura::card>
                                <x-aura::card class="space-y-2">
                                    <x-aura::kicker>Cluster SLA</x-aura::kicker>
                                    <p class="text-2xl font-black font-mono text-emerald-600 dark:text-emerald-400">99.98%</p>
                                    <x-aura::badge variant="positive" size="sm">Operational</x-aura::badge>
                                </x-aura::card>
                            </div>
                        </div>
                    </x-slot:preview>
                    <x-slot name="codeSlot">&lt;div class="grid grid-cols-3 gap-4"&gt;
    &lt;x-aura::card&gt;Gross Sales ($84,120)&lt;/x-aura::card&gt;
    &lt;x-aura::card&gt;Active Members (42)&lt;/x-aura::card&gt;
    &lt;x-aura::card&gt;Cluster SLA (99.98%)&lt;/x-aura::card&gt;
&lt;/div&gt;</x-slot>
                </x-aura::code>
            </div>
        </div>
    </div>

    <!-- ========================================================================= -->
    <!-- MAJOR SECTION 2: FULL APPLICATION TEMPLATES -->
    <!-- ========================================================================= -->
    <div id="templates" class="space-y-8 scroll-mt-24 pt-6 border-t border-zinc-200 dark:border-zinc-800">
        <div class="flex items-center justify-between border-b border-zinc-200 dark:border-zinc-800 pb-4">
            <div class="space-y-1">
                <div class="flex items-center gap-2">
                    <span class="px-2 py-0.5 rounded-md text-xs font-bold bg-emerald-100 text-emerald-700 dark:bg-emerald-950 dark:text-emerald-300">SECTION 2</span>
                    <x-aura::heading level="2" size="lg">Full Application Templates</x-aura::heading>
                </div>
                <x-aura::subheading>Explore complete end-to-end page layout templates built with Aura Wire.</x-aura::subheading>
            </div>
            <x-aura::badge variant="neutral" size="sm">5 Complete Templates</x-aura::badge>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- 1. E-Commerce Template -->
            <x-aura::card class="flex flex-col justify-between hover:border-zinc-900 dark:hover:border-white transition-all group">
                <div class="space-y-4">
                    <div class="h-12 w-12 rounded-2xl bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 flex items-center justify-center font-bold text-xl shadow-md">
                        🛍️
                    </div>
                    <div class="space-y-1">
                        <div class="flex items-center justify-between">
                            <x-aura::heading level="3" size="sm" class="group-hover:underline">E-Commerce Storefront</x-aura::heading>
                            <x-aura::badge variant="subtle" size="sm">Full Template</x-aura::badge>
                        </div>
                        <x-aura::text variant="subtle" size="sm">
                            Product catalogs, sidebars, shopping cart drawers, and checkout flow pages.
                        </x-aura::text>
                    </div>
                </div>
                <div class="pt-6">
                    <x-aura::button variant="primary" size="sm" href="/guest/ecommerce" class="w-full justify-center">
                        View E-Commerce Template &rarr;
                    </x-aura::button>
                </div>
            </x-aura::card>

            <!-- 2. Portfolio Template -->
            <x-aura::card class="flex flex-col justify-between hover:border-zinc-900 dark:hover:border-white transition-all group">
                <div class="space-y-4">
                    <div class="h-12 w-12 rounded-2xl bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 flex items-center justify-center font-bold text-xl shadow-md">
                        🎨
                    </div>
                    <div class="space-y-1">
                        <div class="flex items-center justify-between">
                            <x-aura::heading level="3" size="sm" class="group-hover:underline">Personal Portfolio</x-aura::heading>
                            <x-aura::badge variant="subtle" size="sm">Full Template</x-aura::badge>
                        </div>
                        <x-aura::text variant="subtle" size="sm">
                            Work showcases, interactive case studies, bio highlights, and contact forms.
                        </x-aura::text>
                    </div>
                </div>
                <div class="pt-6">
                    <x-aura::button variant="primary" size="sm" href="/guest/portfolio" class="w-full justify-center">
                        View Portfolio Template &rarr;
                    </x-aura::button>
                </div>
            </x-aura::card>

            <!-- 3. Restaurant & Dining Template -->
            <x-aura::card class="flex flex-col justify-between hover:border-zinc-900 dark:hover:border-white transition-all group">
                <div class="space-y-4">
                    <div class="h-12 w-12 rounded-2xl bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 flex items-center justify-center font-bold text-xl shadow-md">
                        🍽️
                    </div>
                    <div class="space-y-1">
                        <div class="flex items-center justify-between">
                            <x-aura::heading level="3" size="sm" class="group-hover:underline">Restaurant &amp; Dining</x-aura::heading>
                            <x-aura::badge variant="subtle" size="sm">Full Template</x-aura::badge>
                        </div>
                        <x-aura::text variant="subtle" size="sm">
                            Digital menu tabbed sections, table reservation pickers, and dining reviews.
                        </x-aura::text>
                    </div>
                </div>
                <div class="pt-6">
                    <x-aura::button variant="primary" size="sm" href="/guest/restaurant" class="w-full justify-center">
                        View Restaurant Template &rarr;
                    </x-aura::button>
                </div>
            </x-aura::card>

            <!-- 4. SaaS Application Template -->
            <x-aura::card class="flex flex-col justify-between hover:border-zinc-900 dark:hover:border-white transition-all group">
                <div class="space-y-4">
                    <div class="h-12 w-12 rounded-2xl bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 flex items-center justify-center font-bold text-xl shadow-md">
                        🚀
                    </div>
                    <div class="space-y-1">
                        <div class="flex items-center justify-between">
                            <x-aura::heading level="3" size="sm" class="group-hover:underline">SaaS Application</x-aura::heading>
                            <x-aura::badge variant="subtle" size="sm">Full Template</x-aura::badge>
                        </div>
                        <x-aura::text variant="subtle" size="sm">
                            High-converting landing page, pricing comparison tables, and signup flows.
                        </x-aura::text>
                    </div>
                </div>
                <div class="pt-6">
                    <x-aura::button variant="primary" size="sm" href="/guest/saas" class="w-full justify-center">
                        View SaaS Template &rarr;
                    </x-aura::button>
                </div>
            </x-aura::card>

            <!-- 5. Creative Agency Template -->
            <x-aura::card class="flex flex-col justify-between hover:border-zinc-900 dark:hover:border-white transition-all group">
                <div class="space-y-4">
                    <div class="h-12 w-12 rounded-2xl bg-zinc-900 text-white dark:bg-white dark:text-zinc-900 flex items-center justify-center font-bold text-xl shadow-md">
                        ⚡
                    </div>
                    <div class="space-y-1">
                        <div class="flex items-center justify-between">
                            <x-aura::heading level="3" size="sm" class="group-hover:underline">Creative Agency</x-aura::heading>
                            <x-aura::badge variant="subtle" size="sm">Full Template</x-aura::badge>
                        </div>
                        <x-aura::text variant="subtle" size="sm">
                            Bold agency presentation, service cards, client logos, and team profiles.
                        </x-aura::text>
                    </div>
                </div>
                <div class="pt-6">
                    <x-aura::button variant="primary" size="sm" href="/guest/agency" class="w-full justify-center">
                        View Agency Template &rarr;
                    </x-aura::button>
                </div>
            </x-aura::card>
        </div>
    </div>
</div>

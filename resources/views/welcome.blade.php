<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-zinc-950 text-zinc-100 antialiased">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aura Wire UI — Button Showcase</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <script src="https://cdn.tailwindcss.com"></script>
    @endif

    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="min-h-full bg-zinc-950 text-zinc-100 selection:bg-indigo-500 selection:text-white flex flex-col justify-between">
    
    <!-- Top Navigation Bar -->
    <header class="border-b border-zinc-800/80 bg-zinc-900/50 backdrop-blur sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="h-8 w-8 rounded-lg bg-gradient-to-tr from-indigo-600 to-violet-500 flex items-center justify-center font-bold text-white shadow-md shadow-indigo-500/20">
                    A
                </div>
                <div>
                    <h1 class="text-sm font-semibold tracking-tight text-white">Aura Wire</h1>
                    <p class="text-xs text-zinc-400">insoulit/aura-wire</p>
                </div>
            </div>

            <div class="flex items-center gap-3">
                <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-emerald-500/10 text-emerald-400 border border-emerald-500/20">
                    <span class="h-1.5 w-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                    v1.0.0-dev
                </span>
            </div>
        </div>
    </header>

    <!-- Main Showcase Content -->
    <main class="max-w-6xl mx-auto px-6 py-12 w-full space-y-12">
        
        <!-- Hero Banner -->
        <div class="relative overflow-hidden rounded-2xl bg-gradient-to-b from-zinc-900 to-zinc-900/60 border border-zinc-800 p-8 md:p-10 shadow-2xl">
            <div class="absolute -right-20 -top-20 w-80 h-80 bg-indigo-500/10 rounded-full blur-3xl pointer-events-none"></div>
            <div class="max-w-2xl relative z-10 space-y-4">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-indigo-500/10 border border-indigo-500/20 text-indigo-400 text-xs font-medium">
                    ✨ Component Library
                </div>
                <h2 class="text-3xl sm:text-4xl font-bold tracking-tight text-white">Button Component Showcase</h2>
                <p class="text-zinc-400 text-base leading-relaxed">
                    Flexible, accessible, and customizable Blade button components provided by the <code class="px-2 py-0.5 rounded bg-zinc-800 text-indigo-300 font-mono text-sm">aura-wire</code> package.
                </p>
            </div>
        </div>

        <!-- Section 1: Button Variants -->
        <section class="space-y-4">
            <div class="border-b border-zinc-800 pb-3 flex items-center justify-between">
                <div>
                    <h3 class="text-lg font-semibold text-white">Variants</h3>
                    <p class="text-xs text-zinc-400">Available visual styles for action buttons</p>
                </div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                <div class="p-4 rounded-xl bg-zinc-900/40 border border-zinc-800/80 space-y-3">
                    <span class="text-xs font-medium text-zinc-500 uppercase tracking-wider">Primary</span>
                    <div><x-aura::button variant="primary">Primary Action</x-aura::button></div>
                </div>
                <div class="p-4 rounded-xl bg-zinc-900/40 border border-zinc-800/80 space-y-3">
                    <span class="text-xs font-medium text-zinc-500 uppercase tracking-wider">Secondary</span>
                    <div><x-aura::button variant="secondary">Secondary Action</x-aura::button></div>
                </div>
                <div class="p-4 rounded-xl bg-zinc-900/40 border border-zinc-800/80 space-y-3">
                    <span class="text-xs font-medium text-zinc-500 uppercase tracking-wider">Subtle / Filled</span>
                    <div><x-aura::button variant="subtle">Subtle Action</x-aura::button></div>
                </div>
                <div class="p-4 rounded-xl bg-zinc-900/40 border border-zinc-800/80 space-y-3">
                    <span class="text-xs font-medium text-zinc-500 uppercase tracking-wider">Outline</span>
                    <div><x-aura::button variant="outline">Outline Action</x-aura::button></div>
                </div>
                <div class="p-4 rounded-xl bg-zinc-900/40 border border-zinc-800/80 space-y-3">
                    <span class="text-xs font-medium text-zinc-500 uppercase tracking-wider">Ghost</span>
                    <div><x-aura::button variant="ghost">Ghost Action</x-aura::button></div>
                </div>
                <div class="p-4 rounded-xl bg-zinc-900/40 border border-zinc-800/80 space-y-3">
                    <span class="text-xs font-medium text-zinc-500 uppercase tracking-wider">Danger</span>
                    <div><x-aura::button variant="danger">Delete Item</x-aura::button></div>
                </div>
                <div class="p-4 rounded-xl bg-zinc-900/40 border border-zinc-800/80 space-y-3">
                    <span class="text-xs font-medium text-zinc-500 uppercase tracking-wider">Link</span>
                    <div><x-aura::button variant="link" href="#">Learn More &rarr;</x-aura::button></div>
                </div>
            </div>
        </section>

        <!-- Section 2: Button Sizes -->
        <section class="space-y-4">
            <div class="border-b border-zinc-800 pb-3">
                <h3 class="text-lg font-semibold text-white">Sizes</h3>
                <p class="text-xs text-zinc-400">Available size scale options (<code class="text-indigo-400 font-mono">xs</code>, <code class="text-indigo-400 font-mono">sm</code>, <code class="text-indigo-400 font-mono">md</code>, <code class="text-indigo-400 font-mono">lg</code>)</p>
            </div>
            <div class="p-6 rounded-xl bg-zinc-900/40 border border-zinc-800/80 flex flex-wrap items-center gap-4">
                <x-aura::button variant="primary" size="xs">Extra Small (xs)</x-aura::button>
                <x-aura::button variant="primary" size="sm">Small (sm)</x-aura::button>
                <x-aura::button variant="primary" size="md">Medium (md)</x-aura::button>
                <x-aura::button variant="primary" size="lg">Large (lg)</x-aura::button>
            </div>
        </section>

        <!-- Section 3: Icons & Square Buttons -->
        <section class="space-y-4">
            <div class="border-b border-zinc-800 pb-3">
                <h3 class="text-lg font-semibold text-white">Icons & Square Buttons</h3>
                <p class="text-xs text-zinc-400">Buttons with leading/trailing SVG icons or square aspect ratios</p>
            </div>
            <div class="p-6 rounded-xl bg-zinc-900/40 border border-zinc-800/80 flex flex-wrap items-center gap-4">
                <!-- Leading Icon -->
                <x-aura::button variant="primary">
                    <x-slot:icon>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                    </x-slot:icon>
                    Create New
                </x-aura::button>

                <!-- Trailing Icon -->
                <x-aura::button variant="secondary">
                    Next Page
                    <x-slot:iconTrailing>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </x-slot:iconTrailing>
                </x-aura::button>

                <!-- Square Icon Buttons -->
                <x-aura::button variant="outline" size="sm" square>
                    <x-slot:icon>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg>
                    </x-slot:icon>
                </x-aura::button>
                <x-aura::button variant="danger" size="sm" square>
                    <x-slot:icon>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                    </x-slot:icon>
                </x-aura::button>
            </div>
        </section>

        <!-- Section 4: States (Disabled & Loading) -->
        <section class="space-y-4">
            <div class="border-b border-zinc-800 pb-3">
                <h3 class="text-lg font-semibold text-white">Interactive States</h3>
                <p class="text-xs text-zinc-400">Disabled state and loading spinner indicator</p>
            </div>
            <div class="p-6 rounded-xl bg-zinc-900/40 border border-zinc-800/80 flex flex-wrap items-center gap-4">
                <x-aura::button variant="primary" disabled>Disabled Primary</x-aura::button>
                <x-aura::button variant="secondary" disabled>Disabled Secondary</x-aura::button>
                <x-aura::button variant="primary" :loading="true">Processing...</x-aura::button>
                <x-aura::button variant="danger" :loading="true">Deleting...</x-aura::button>
            </div>
        </section>

        <!-- Section 5: Button Groups -->
        <section class="space-y-4">
            <div class="border-b border-zinc-800 pb-3">
                <h3 class="text-lg font-semibold text-white">Button Groups</h3>
                <p class="text-xs text-zinc-400">Grouping connected buttons horizontally or vertically</p>
            </div>
            <div class="p-6 rounded-xl bg-zinc-900/40 border border-zinc-800/80 flex flex-wrap items-center gap-8">
                <!-- Horizontal Group -->
                <div class="space-y-2">
                    <span class="text-xs font-medium text-zinc-500 uppercase tracking-wider block">Horizontal Group</span>
                    <x-aura::button.group>
                        <x-aura::button variant="secondary" size="md">Years</x-aura::button>
                        <x-aura::button variant="secondary" size="md">Months</x-aura::button>
                        <x-aura::button variant="secondary" size="md">Days</x-aura::button>
                    </x-aura::button.group>
                </div>

                <!-- Vertical Group -->
                <div class="space-y-2">
                    <span class="text-xs font-medium text-zinc-500 uppercase tracking-wider block">Vertical Group</span>
                    <x-aura::button.group vertical>
                        <x-aura::button variant="outline" size="sm">Top Action</x-aura::button>
                        <x-aura::button variant="outline" size="sm">Middle Action</x-aura::button>
                        <x-aura::button variant="outline" size="sm">Bottom Action</x-aura::button>
                    </x-aura::button.group>
                </div>
            </div>
        </section>

    </main>

    <!-- Footer -->
    <footer class="border-t border-zinc-800/80 py-6 text-center text-xs text-zinc-500">
        Powered by <span class="text-zinc-300 font-medium">Laravel {{ app()->version() }}</span> & <span class="text-indigo-400 font-medium">Aura Wire</span>
    </footer>

</body>
</html>

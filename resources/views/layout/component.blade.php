<x-layout::app :title="$title ?? 'Component Library — Aura Wire'">
    <div class="min-h-[93vh] flex flex-col justify-between">
        @include('layout.component.header')


        <!-- Main Body Area with Full-Height Sidebar + Centered Content Slot -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 w-full flex-1 flex gap-0 lg:gap-8 items-stretch">
            <!-- Component Navigation Sidebar -->
            @include('layout.component.sidebar')

            <!-- Main Component Page Content Slot Centered on X and Y Axis -->
            <main class="flex-1 min-w-0 w-full flex flex-col items-center justify-center my-auto">
                {{ $slot }}

                @include('layout.component.doc-pagination')
            </main>
        </div>
    </div>

    @include('layout.shared.footer')
</x-layout::app>

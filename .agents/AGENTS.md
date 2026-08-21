# Workspace Rules

- **Prioritize Aura Wire Components**: Always use Aura Wire package components (`<x-aura::*>`) for layouts, typography, actions, forms, displays, feedback, and navigation whenever possible instead of writing raw HTML elements with utility classes (e.g. prefer `<x-aura::flex>`, `<x-aura::text>`, `<x-aura::heading>`, `<x-aura::button>`, `<x-aura::link>`, `<x-aura::card>`, etc.).
- **Button Labeling**: Always try to keep button labels to a single word (e.g. `Create`, `Save`, `Back`, `Cancel`, `Blocks`, `Templates`, `Delete`, `Export`). If not possible, keep it short in two words. Always prefer a single word.
- **Create Button Labeling**: Create buttons must always be named with the single word `Create` (e.g. `Create`). Never append the model or entity name at the end.
- **No Redundant `<span>` Inside Buttons**: Never wrap button text labels or link labels in redundant `<span>` tags (e.g. write `<x-aura::button>Create</x-aura::button>`, NOT `<x-aura::button><span>Create</span></x-aura::button>`), as Aura Wire components already manage slot wrapping and layout internally.
- **Blade Component Slot Formatting**: ALWAYS format ALL Blade component tags with their slot text/content across 3 separate lines — opening tag on line 1, indented slot text on line 2, closing tag on line 3 (e.g. `<x-aura::kicker>\n    Typography\n</x-aura::kicker>`). NEVER place slot text inline on the same line as opening/closing component tags, even for short text labels or inline components.
- **Blade Component, Slot & Div Spacing**: Always separate sibling component and HTML tags with a single blank line. Also include a blank line immediately after opening parent slots, wrappers, and containers (e.g. `<x-slot:...>`, `<div>`, `<section>`) and immediately before closing tags (e.g. `</x-slot:...>`, `</div>`, `</section>`), giving nested children clean visual breathing room.
- **Blade Logic & Directive Spacing**: Always include a blank line after opening Blade control flow directives (e.g. `@if (...)`, `@foreach (...)`, `@auth`) and before closing directives (e.g. `@endif`, `@endforeach`, `@endauth`) to keep logical blocks cleanly separated and readable.
- **Volt Component Attribute Formatting**: Always declare Volt component class attributes (`#[Layout(...)]`, `#[Title(...)]`) on separate lines before `class extends Component {`:
  ```php
  new 
  #[Layout('layouts.admin')] 
  #[Title('Title — Admin Panel | Aura Wire')] 
  class extends Component {
  ```
- **Blank Volt Component Formatting**: When a Volt component has no PHP state or logic body, format the declaration cleanly as `class extends Component {};` without comments inside:
  ```php
  new 
  #[Layout('layouts.components')] 
  #[Title('Title - Aura Wire')] 
  class extends Component {};
  ```
- **No Tailwind CSS Classes on Component Tags**: When using component tags while designing anything, do not apply any Tailwind CSS `class="..."` attributes directly on the component tag itself. Keep component tags clean using only their native props.
- **No Hyphens in Text & Headings**: Avoid using hyphens between words in UI copy, titles, headings, and descriptions (e.g. prefer `End to End Security` over `End-to-End Security`, `Real time` over `Real-time`).
- **Text Sizing**: Prefer text size `sm` (`size="sm"`, `text-sm`) over `xs` (`size="xs"`, `text-xs`) for secondary text, emails, subtitles, metadata, list specifications, and descriptions.
- **Monochrome UI Color Palette**: The UI design focuses strictly on black and white / neutral tones (zinc, white, black, dark). Avoid using bright colors (indigo, blue, red, green, etc.) unless explicitly demonstrating a specific component variant or status intent.
- **Never Use `@include` — Use Livewire Components**: Never use Blade `@include(...)` directives to compose sub-views or template sections. Always create and embed standalone Livewire Volt components (e.g. `<livewire:guest.template.ecommerce.hero />`) instead of Blade partial includes.
- **No Browser Tool Usage Unless Explicitly Requested**: Do not invoke the browser subagent or open browser pages unless the user explicitly asks for browser interaction/testing.

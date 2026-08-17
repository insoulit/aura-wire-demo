# Workspace Rules

- **Prioritize Aura Wire Components**: Always use Aura Wire package components (`<x-aura::*>`) for layouts, typography, actions, forms, displays, feedback, and navigation whenever possible instead of writing raw HTML elements with utility classes (e.g. prefer `<x-aura::flex>`, `<x-aura::stack>`, `<x-aura::text>`, `<x-aura::heading>`, `<x-aura::button>`, `<x-aura::link>`, `<x-aura::card>`, etc.).
- **Button Labeling**: Always try to keep button labels to a single word (e.g. `Create`, `Save`, `Back`, `Cancel`, `Blocks`, `Templates`, `Delete`, `Export`). If not possible, keep it short in two words. Always prefer a single word.
- **Create Button Labeling**: Create buttons must always be named with the single word `Create` (e.g. `Create`). Never append the model or entity name at the end.
- **No Redundant `<span>` Inside Buttons**: Never wrap button text labels or link labels in redundant `<span>` tags (e.g. write `<x-aura::button>Create</x-aura::button>`, NOT `<x-aura::button><span>Create</span></x-aura::button>`), as Aura Wire components already manage slot wrapping and layout internally.
- **Blade Component Slot Formatting**: Format component tags with their slot text/content on clean indented separate lines (e.g. `<x-aura::header.item ...>\n    Components\n</x-aura::header.item>`).
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




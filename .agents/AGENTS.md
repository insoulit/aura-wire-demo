# Workspace Rules

- **Button Labeling**: Always try to keep button labels to a single word (e.g. `Create`, `Save`, `Back`, `Cancel`, `Blocks`, `Templates`, `Delete`, `Export`). If not possible, keep it short in two words. Always prefer a single word.
- **Create Button Labeling**: Create buttons must always be named with the single word `Create` (e.g. `<span>Create</span>`). Never append the model or entity name at the end.
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

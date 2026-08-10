# Workspace Rules

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



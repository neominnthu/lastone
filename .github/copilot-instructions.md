# CCTV Master Unified Portal — Copilot Instructions

## Project Architecture & Conventions
- **Laravel 11** is the core framework. All code must follow Laravel conventions unless overridden below.
- **Single unified login** at `/login` for all users. No separate entry points.
- **Role-based dashboards**: Super Admin, Admin, Manager, Sales, Technician, Customer. Use Spatie Permissions for all access control.
- **Blade Components** for layouts: `<x-layouts.app>`, `<x-layouts.admin>`, `<x-layouts.customer>`. All UI should use these components.
- **Livewire** is used only for interactive features: POS checkout, eSignature, wallet updates, notifications, real-time search/filter.
- **Spatie Permissions**: Use for all roles/permissions. Example: `sales.create_order`, `technician.complete_task`.
- **Code structure**:
  - Controllers: thin, only orchestration
  - Services/Actions: business logic
  - Form Requests: validation
  - Policies: authorization
  - Blade/Livewire: reusable UI
  - Events/Jobs: async workflows
- **UUIDs** for all customer-facing entities (orders, invoices, deliveries).
- **Audit logging** for sensitive actions.
- **Localization & Accessibility**: All UI must support localization and WCAG accessibility.
- **PWA support**: Use Vite PWA plugin for offline mode.

## Developer Workflow
- Use demo seeders for all roles (super-admin, admin, manager, sales, technician, customer).
- Migrations, models, controllers, Blade/Livewire components, seeders, and tests must be provided for every feature.
- Each phase must be testable with demo data before moving on.
- Use Blade Components for layouts and Livewire only where interactivity is required.
- Setup/config instructions must be included for each phase.

## Key Files & Directories
- `app/Models/` — Eloquent models
- `app/Http/Controllers/` — Controllers (thin)
- `app/Services/` — Business logic
- `app/Policies/` — Authorization policies
- `resources/views/layouts/` — Blade layout components
- `resources/views/components/` — Reusable Blade components
- `resources/views/livewire/` — Livewire components
- `database/seeders/` — Demo data seeders
- `routes/web.php` — Route definitions

## Example Patterns
- Use `<x-layouts.admin>` for admin dashboard pages.
- Protect routes with `->middleware(['role:admin'])` and Spatie permission checks.
- Use Livewire for POS checkout: `php artisan make:livewire PosCheckout`
- Assign UUIDs in models: `protected $keyType = 'string'; public $incrementing = false;`



⚠️ Very Important: - Work step by step automatically, without waiting for me to prompt again. - Always continue until the application is complete and production-ready. - If the output is too long, continue automatically in the next response. - Do NOT summarize, only generate working code, configs, or setup instructions until everything is done.


---
*Update this file as the codebase evolves. Remove generic advice and add concrete examples from your implementation.*

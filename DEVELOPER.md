# CCTV Master Unified Portal — Developer Reference

## Architecture Recap
- Laravel 11, Blade Components, Livewire
- Spatie Permissions for roles
- UUIDs for all customer-facing entities
- Audit logging for sensitive actions
- Localization & Accessibility (WCAG)
- PWA support (Vite)

## Key Conventions
- Thin controllers, business logic in Services/Actions
- Form Requests for validation
- Policies for authorization
- Blade/Livewire for UI
- Events/Jobs for async workflows

## Directory Map
- `app/Models/` — Eloquent models
- `app/Http/Controllers/` — Controllers
- `app/Services/` — Business logic
- `app/Policies/` — Authorization
- `resources/views/layouts/` — Blade layouts
- `resources/views/components/` — Blade components
- `resources/views/livewire/` — Livewire components
- `database/seeders/` — Demo seeders
- `routes/web.php` — Route definitions
- `tests/Feature/` — Feature tests

## Demo Data
- Seeders for all roles, products, orders, inventories, warranties, wallets, POS transactions
- Run: `php artisan migrate --seed`

## Testing
- Feature tests for WalletCenter, NotificationCenter, EsignatureCenter, PosCheckout
- Run: `php artisan test`

## Extending
- Add new modules as Livewire components and Blade views
- Use Spatie Permissions for new roles/permissions
- Add new feature tests in `tests/Feature/`

## PWA
- Manifest, icons, and offline support via Vite PWA plugin

## Accessibility & Localization
- Use `aria-*` attributes and `__()` for all UI

## Audit Logging
- Use `AuditLogger` service for sensitive actions

---
For setup and usage, see `SETUP.md` and `USAGE.md`. For code examples, see Blade/Livewire components and feature tests.

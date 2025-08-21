# CCTV Master Unified Portal — Release Notes

## v1.0.0 — August 22, 2025

### Features
- Unified login and role-based dashboards (Super Admin, Admin, Manager, Sales, Technician, Customer)
- POS checkout, Wallet management, Notification center, eSignature, Inventory, Orders, Warranties, Reports
- Accessible, localized, and PWA-enabled UI
- Audit logging for sensitive actions
- UUIDs for all customer-facing entities
- Demo seeders for all roles and modules
- Full feature test coverage

### Technical Highlights
- Laravel 11, Blade Components, Livewire
- Spatie Permissions for RBAC
- Vite PWA plugin for offline support
- WCAG accessibility and localization
- Thin controllers, business logic in Services/Actions
- Form Requests, Policies, Events/Jobs

### Setup & Usage
- See `SETUP.md` for installation and deployment
- See `USAGE.md` for example flows and demo accounts
- See `DEVELOPER.md` for architecture and extension guidelines

### Testing
- Run all tests: `php artisan test`
- All major modules covered by feature tests

### Known Issues
- None (all tests passing)

---
For feedback or bug reports, contact the project maintainer.

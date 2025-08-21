# CCTV Master Unified Portal — Setup & Deployment Instructions

## Requirements
- PHP >= 8.2
- Composer
- Node.js & npm
- MySQL or MariaDB
- Laravel 11
- XAMPP (for local dev)

## Installation
1. Clone the repository and navigate to the project folder.
2. Install PHP dependencies:
   ```sh
   composer install
   ```
3. Install Node dependencies:
   ```sh
   npm install
   ```
4. Copy `.env.example` to `.env` and configure database, mail, and PWA settings.
5. Generate app key:
   ```sh
   php artisan key:generate
   ```
6. Run migrations and seed demo data:
   ```sh
   php artisan migrate --seed
   ```
7. Build frontend assets:
   ```sh
   npm run build
   ```
8. Start local dev server:
   ```sh
   php artisan serve
   ```

## Features
- Unified login: `/login`
- Role-based dashboards: `/dashboard/{role}`
- POS, Wallet, Notification, eSignature, Inventory, Orders, Warranties, Reports
- Accessible, localized, PWA-enabled UI
- Demo/test coverage: `php artisan test`

## PWA
- Offline support via Vite PWA plugin
- Manifest and icons in `public/`

## Accessibility & Localization
- All UI supports WCAG and localization via `__()`

## Audit Logging
- Sensitive actions are logged via `AuditLogger` service

## Testing
- Run all tests:
   ```sh
   php artisan test
   ```

## Production
- Set up proper `.env` for production
- Use HTTPS and secure database credentials
- Configure mail and PWA settings

---
For further customization, see code comments and Blade/Livewire components.

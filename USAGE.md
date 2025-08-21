# CCTV Master Unified Portal — Example Usage

## Demo Accounts
- Super Admin: superadmin@example.com / password
- Admin: admin@example.com / password
- Manager: manager@example.com / password
- Sales: sales@example.com / password
- Technician: technician@example.com / password
- Customer: customer@example.com / password

## Key URLs
- Login: `/login`
- Dashboard: `/dashboard`
- POS Checkout: `/pos-checkout`
- Wallet: `/wallet-center`
- Notifications: `/notification-center`
- eSignature: `/esignature-center`
- Inventories: `/inventories`
- Orders: `/orders`
- Warranties: `/warranties`
- Reports: `/reports`

## Example Flows
### 1. POS Checkout
- Login as Sales
- Go to `/pos-checkout`
- Add product and quantity
- Click Checkout
- Order is created and wallet is updated

### 2. Submit eSignature
- Login as any user
- Go to `/esignature-center`
- Enter signature and submit
- Signature is saved and confirmation shown

### 3. View Notifications
- Login as any user
- Go to `/notification-center`
- See demo notifications (info, success, error, warning)

### 4. Wallet Balance
- Login as any user
- Go to `/wallet-center`
- View wallet balance

### 5. Inventory/Order/Warranty CRUD
- Login as Admin/Manager/Sales/Technician
- Go to `/inventories`, `/orders`, `/warranties`
- Create, edit, or delete records

### 6. Reports
- Login as Admin
- Go to `/reports`
- View dashboard statistics

## Accessibility & Localization
- All forms and notifications are accessible and localized

## Testing
- Run all feature tests:
  ```sh
  php artisan test
  ```

---
For more details, see `SETUP.md` and code comments.

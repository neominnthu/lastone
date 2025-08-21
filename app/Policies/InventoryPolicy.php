<?php
namespace App\Policies;

use App\Models\User;
use App\Models\Inventory;

class InventoryPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->hasAnyRole(['admin','manager','sales','technician']);
    }
    public function view(User $user, Inventory $inventory): bool
    {
        return $user->hasAnyRole(['admin','manager','sales','technician']);
    }
    public function create(User $user): bool
    {
        return $user->hasAnyRole(['admin','manager','sales']);
    }
    public function update(User $user, Inventory $inventory): bool
    {
        return $user->hasAnyRole(['admin','manager','sales']);
    }
    public function delete(User $user, Inventory $inventory): bool
    {
        return $user->hasRole('admin');
    }
}

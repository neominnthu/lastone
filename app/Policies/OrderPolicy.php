<?php
namespace App\Policies;

use App\Models\User;
use App\Models\Order;

class OrderPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->hasAnyRole(['admin','manager','sales','technician']);
    }
    public function view(User $user, Order $order): bool
    {
        return $user->hasAnyRole(['admin','manager','sales','technician']);
    }
    public function create(User $user): bool
    {
        return $user->hasAnyRole(['admin','manager','sales']);
    }
    public function update(User $user, Order $order): bool
    {
        return $user->hasAnyRole(['admin','manager','sales']);
    }
    public function delete(User $user, Order $order): bool
    {
        return $user->hasRole('admin');
    }
}

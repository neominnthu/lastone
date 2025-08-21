<?php
namespace App\Policies;

use App\Models\User;
use App\Models\Warranty;

class WarrantyPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->hasAnyRole(['admin','manager','sales','technician']);
    }
    public function view(User $user, Warranty $warranty): bool
    {
        return $user->hasAnyRole(['admin','manager','sales','technician']);
    }
    public function create(User $user): bool
    {
        return $user->hasAnyRole(['admin','manager','sales']);
    }
    public function update(User $user, Warranty $warranty): bool
    {
        return $user->hasAnyRole(['admin','manager','sales']);
    }
    public function delete(User $user, Warranty $warranty): bool
    {
        return $user->hasRole('admin');
    }
}

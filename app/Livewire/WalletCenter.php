<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Wallet;
use Illuminate\Support\Facades\Auth;

class WalletCenter extends Component
{
    public $balance = 0;

    public function mount()
    {
        $user = Auth::user();
        if ($user) {
                $this->balance = $user->wallet ? $user->wallet->balance : 0;
        }
    }

    public function render()
    {
        return view('livewire.wallet-center', ['balance' => $this->balance]);
    }
}

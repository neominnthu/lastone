<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class EsignatureCenter extends Component
{
    public $signature = '';

    public function submitSignature()
    {
    $user = Auth::user();
        if ($user && $this->signature) {
            \App\Models\Esignature::create([
                'user_id' => $user->id,
                'signature' => $this->signature,
                'signed_at' => now(),
            ]);
            // TODO: Audit log, permission check
            Session::flash('message', __('Signature submitted successfully!'));
            $this->signature = '';
        }
    }

    public function render()
    {
        return view('livewire.esignature-center');
    }
}

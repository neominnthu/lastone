<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Esignature;

class EsignatureController extends Controller
{
    public function submit(Request $request)
    {
        $user = Auth::user();
        if ($user && $request->filled('signature')) {
            Esignature::create([
                'user_id' => $user->id,
                'signature' => $request->input('signature'),
                'signed_at' => now(),
            ]);
            Session::flash('message', __('Signature submitted successfully!'));
        }
        return redirect()->back();
    }
}

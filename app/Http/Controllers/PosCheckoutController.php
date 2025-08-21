<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Str;

class PosCheckoutController extends Controller
{
    public function checkout(Request $request)
    {
        $user = Auth::user();
        $product = Product::find($request->input('product_id'));
        $quantity = $request->input('quantity', 1);
        if ($user && $product) {
            $order = Order::create([
                'id' => (string) Str::uuid(),
                'customer_id' => $user->id,
                'product_id' => $product->id,
                'quantity' => $quantity,
                'total' => $product->price * $quantity,
                'status' => 'completed',
            ]);
            \App\Services\AuditLogger::log('order_created', [
                'order_id' => $order->id,
                'user_id' => $user->id,
                'product_id' => $product->id,
                'quantity' => $quantity,
                'total' => $order->total,
            ]);
            Session::flash('message', __('Checkout complete!'));
        }
        return redirect()->back();
    }
}

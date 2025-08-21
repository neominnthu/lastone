<?php

namespace App\Livewire;

use Livewire\Component;

class PosCheckout extends Component
{
    public $product;
    public $quantity = 1;
    public $cart = [];

    public function addToCart()
    {
        if ($this->product) {
            $this->cart[] = [
                'product' => $this->product,
                'quantity' => $this->quantity,
            ];
            $this->product = '';
            $this->quantity = 1;
        }
    }

    public function checkout()
    {
        $user = \Illuminate\Support\Facades\Auth::user();
        if ($user && count($this->cart) > 0) {
            foreach ($this->cart as $item) {
                $product = \App\Models\Product::find($item['product']);
                if ($product) {
                    \App\Models\Order::create([
                        'id' => (string) \Illuminate\Support\Str::uuid(),
                        'customer_id' => $user->id,
                        'product_id' => $product->id,
                        'quantity' => $item['quantity'],
                        'total' => $product->price * $item['quantity'],
                        'status' => 'completed',
                    ]);
                }
            }
            \Illuminate\Support\Facades\Session::flash('message', __('Checkout complete!'));
            $this->cart = [];
        }
    }

    public function render()
    {
        return view('livewire.pos-checkout');
    }
}

<?php
namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        return view('orders.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'customer_id' => 'required|uuid|exists:users,id',
            'product_id' => 'required|uuid|exists:products,id',
            'quantity' => 'required|integer',
            'total' => 'required|numeric',
            'status' => 'required|string',
        ]);
    $order = Order::create($data);
    \App\Services\AuditLogger::log('order.create', $order->toArray());
    return redirect()->route('orders.index')->with('success', __('messages.order.created'));
    }

    public function show(Order $order)
    {
        return view('orders.show', compact('order'));
    }

    public function edit(Order $order)
    {
        return view('orders.edit', compact('order'));
    }

    public function update(Request $request, Order $order)
    {
        $data = $request->validate([
            'customer_id' => 'required|uuid|exists:users,id',
            'product_id' => 'required|uuid|exists:products,id',
            'quantity' => 'required|integer',
            'total' => 'required|numeric',
            'status' => 'required|string',
        ]);
    $order->update($data);
    \App\Services\AuditLogger::log('order.update', $order->toArray());
    return redirect()->route('orders.index')->with('success', __('messages.order.updated'));
    }

    public function destroy(Order $order)
    {
    $order->delete();
    \App\Services\AuditLogger::log('order.delete', ['id' => $order->id]);
    return redirect()->route('orders.index')->with('success', __('messages.order.deleted'));
    }
}

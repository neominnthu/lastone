<?php
namespace App\Http\Controllers;

use App\Models\Warranty;
use Illuminate\Http\Request;

class WarrantyController extends Controller
{
    public function index()
    {
        $warranties = Warranty::all();
        return view('warranties.index', compact('warranties'));
    }

    public function create()
    {
        return view('warranties.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'product_id' => 'required|uuid|exists:products,id',
            'order_id' => 'nullable|uuid|exists:orders,id',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'status' => 'required|string',
        ]);
    $warranty = Warranty::create($data);
    \App\Services\AuditLogger::log('warranty.create', $warranty->toArray());
    return redirect()->route('warranties.index')->with('success', __('messages.warranty.created'));
    }

    public function show(Warranty $warranty)
    {
        return view('warranties.show', compact('warranty'));
    }

    public function edit(Warranty $warranty)
    {
        return view('warranties.edit', compact('warranty'));
    }

    public function update(Request $request, Warranty $warranty)
    {
        $data = $request->validate([
            'product_id' => 'required|uuid|exists:products,id',
            'order_id' => 'nullable|uuid|exists:orders,id',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'status' => 'required|string',
        ]);
    $warranty->update($data);
    \App\Services\AuditLogger::log('warranty.update', $warranty->toArray());
    return redirect()->route('warranties.index')->with('success', __('messages.warranty.updated'));
    }

    public function destroy(Warranty $warranty)
    {
    $warranty->delete();
    \App\Services\AuditLogger::log('warranty.delete', ['id' => $warranty->id]);
    return redirect()->route('warranties.index')->with('success', __('messages.warranty.deleted'));
    }
}

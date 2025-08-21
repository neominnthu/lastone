<?php
namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index()
    {
        $inventories = Inventory::all();
        return view('inventories.index', compact('inventories'));
    }

    public function create()
    {
        return view('inventories.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'product_id' => 'required|uuid|exists:products,id',
            'quantity' => 'required|integer',
            'location' => 'nullable|string',
        ]);
    $inventory = Inventory::create($data);
    \App\Services\AuditLogger::log('inventory.create', $inventory->toArray());
    return redirect()->route('inventories.index')->with('success', __('messages.inventory.created'));
    }

    public function show(Inventory $inventory)
    {
        return view('inventories.show', compact('inventory'));
    }

    public function edit(Inventory $inventory)
    {
        return view('inventories.edit', compact('inventory'));
    }

    public function update(Request $request, Inventory $inventory)
    {
        $data = $request->validate([
            'product_id' => 'required|uuid|exists:products,id',
            'quantity' => 'required|integer',
            'location' => 'nullable|string',
        ]);
    $inventory->update($data);
    \App\Services\AuditLogger::log('inventory.update', $inventory->toArray());
    return redirect()->route('inventories.index')->with('success', __('messages.inventory.updated'));
    }

    public function destroy(Inventory $inventory)
    {
    $inventory->delete();
    \App\Services\AuditLogger::log('inventory.delete', ['id' => $inventory->id]);
    return redirect()->route('inventories.index')->with('success', __('messages.inventory.deleted'));
    }
}

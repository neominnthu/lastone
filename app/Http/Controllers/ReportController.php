<?php
namespace App\Http\Controllers;

use App\Services\ReportingService;

class ReportController extends Controller
{
    public function index()
    {
        $orderStats = ReportingService::getOrderStats();
        $inventoryStats = ReportingService::getInventoryStats();
        $warrantyStats = ReportingService::getWarrantyStats();
        return view('reports.index', compact('orderStats', 'inventoryStats', 'warrantyStats'));
    }
}

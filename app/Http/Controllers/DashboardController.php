<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Invoice;
use App\Models\Product;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function __invoke(): View
    {
        $companyId = 1;

        $stats = [
            'revenue' => (float) Invoice::query()->where('company_id', $companyId)->sum('total'),
            'products' => Product::query()->where('company_id', $companyId)->count(),
            'customers' => Customer::query()->where('company_id', $companyId)->count(),
            'invoices' => Invoice::query()->where('company_id', $companyId)->count(),
            'low_stock' => Product::query()->where('company_id', $companyId)->whereColumn('quantity', '<=', 'min_stock_alert')->count(),
        ];

        $recentInvoices = Invoice::query()->where('company_id', $companyId)->latest()->limit(8)->get();
        $lowStockProducts = Product::query()->where('company_id', $companyId)->whereColumn('quantity', '<=', 'min_stock_alert')->limit(8)->get();

        return view('dashboard', compact('stats', 'recentInvoices', 'lowStockProducts'));
    }
}

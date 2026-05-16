<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(): View
    {
        $products = Product::query()->where('company_id', 1)->latest()->paginate(10);
        return view('products.index', compact('products'));
    }

    public function create(): View
    {
        return view('products.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'name' => 'required|string|max:255', 'reference' => 'required|string|max:255', 'brand' => 'nullable|string|max:255',
            'purchase_price' => 'required|numeric|min:0', 'selling_price' => 'required|numeric|min:0', 'quantity' => 'required|integer|min:0',
            'min_stock_alert' => 'required|integer|min:0', 'status' => 'required|in:active,inactive',
        ]);
        Product::query()->create($data + ['company_id' => 1, 'uuid' => (string) \Illuminate\Support\Str::uuid()]);
        return redirect()->route('products.index');
    }

    public function edit(Product $product): View
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product): RedirectResponse
    {
        $data = $request->validate([
            'name' => 'required|string|max:255', 'reference' => 'required|string|max:255', 'brand' => 'nullable|string|max:255',
            'purchase_price' => 'required|numeric|min:0', 'selling_price' => 'required|numeric|min:0', 'quantity' => 'required|integer|min:0',
            'min_stock_alert' => 'required|integer|min:0', 'status' => 'required|in:active,inactive',
        ]);
        $product->update($data);
        return redirect()->route('products.index');
    }
}

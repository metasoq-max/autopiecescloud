<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CustomerController extends Controller
{
    public function index(): View { $customers = Customer::query()->where('company_id',1)->latest()->paginate(10); return view('customers.index', compact('customers')); }
    public function create(): View { return view('customers.create'); }
    public function store(Request $request): RedirectResponse { $data=$request->validate(['first_name'=>'required|string|max:255','last_name'=>'required|string|max:255','phone'=>'required|string|max:40','email'=>'nullable|email','vehicle_brand'=>'nullable|string|max:120','vehicle_model'=>'nullable|string|max:120','license_plate'=>'nullable|string|max:40']); Customer::query()->create($data+['company_id'=>1,'uuid'=>(string)\Illuminate\Support\Str::uuid()]); return redirect()->route('customers.index'); }
    public function edit(Customer $customer): View { return view('customers.edit', compact('customer')); }
    public function update(Request $request, Customer $customer): RedirectResponse { $data=$request->validate(['first_name'=>'required|string|max:255','last_name'=>'required|string|max:255','phone'=>'required|string|max:40','email'=>'nullable|email','vehicle_brand'=>'nullable|string|max:120','vehicle_model'=>'nullable|string|max:120','license_plate'=>'nullable|string|max:40']); $customer->update($data); return redirect()->route('customers.index'); }
}

<?php namespace App\Http\Controllers;
use App\Models${c}; use Illuminate\Http\Request;
class CustomerController extends Controller {
public function __invoke(){return view('dashboard');}
public function index(){$items=Customer::query()->latest()->paginate(); return view(strtolower('Customer').'s.index',compact('items'));}
public function create(){return view(strtolower('Customer').'s.create');}
public function store(Request $r){Customer::create($r->all()+['company_id'=>auth()->user()->company_id]);return redirect()->route(strtolower('Customer').'s.index');}
public function show(Customer $customer){return view(strtolower('Customer').'s.show',['item'=>$customer]);}
public function edit(Customer $customer){return view(strtolower('Customer').'s.edit',['item'=>$customer]);}
public function update(Request $r, Customer $customer){$customer->update($r->all());return back();}
public function destroy(Customer $customer){$customer->delete();return back();}
}

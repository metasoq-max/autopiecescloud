<?php namespace App\Http\Controllers;
use App\Models${c}; use Illuminate\Http\Request;
class InvoiceController extends Controller {
public function __invoke(){return view('dashboard');}
public function index(){$items=Invoice::query()->latest()->paginate(); return view(strtolower('Invoice').'s.index',compact('items'));}
public function create(){return view(strtolower('Invoice').'s.create');}
public function store(Request $r){Invoice::create($r->all()+['company_id'=>auth()->user()->company_id]);return redirect()->route(strtolower('Invoice').'s.index');}
public function show(Invoice $invoice){return view(strtolower('Invoice').'s.show',['item'=>$invoice]);}
public function edit(Invoice $invoice){return view(strtolower('Invoice').'s.edit',['item'=>$invoice]);}
public function update(Request $r, Invoice $invoice){$invoice->update($r->all());return back();}
public function destroy(Invoice $invoice){$invoice->delete();return back();}
}

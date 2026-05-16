<?php namespace App\Http\Controllers;
use App\Models${c}; use Illuminate\Http\Request;
class ProductController extends Controller {
public function __invoke(){return view('dashboard');}
public function index(){$items=Product::query()->latest()->paginate(); return view(strtolower('Product').'s.index',compact('items'));}
public function create(){return view(strtolower('Product').'s.create');}
public function store(Request $r){Product::create($r->all()+['company_id'=>auth()->user()->company_id]);return redirect()->route(strtolower('Product').'s.index');}
public function show(Product $product){return view(strtolower('Product').'s.show',['item'=>$product]);}
public function edit(Product $product){return view(strtolower('Product').'s.edit',['item'=>$product]);}
public function update(Request $r, Product $product){$product->update($r->all());return back();}
public function destroy(Product $product){$product->delete();return back();}
}

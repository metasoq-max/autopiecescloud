<?php namespace App\Http\Controllers;
use App\Models${c}; use Illuminate\Http\Request;
class QuoteController extends Controller {
public function __invoke(){return view('dashboard');}
public function index(){$items=Quote::query()->latest()->paginate(); return view(strtolower('Quote').'s.index',compact('items'));}
public function create(){return view(strtolower('Quote').'s.create');}
public function store(Request $r){Quote::create($r->all()+['company_id'=>auth()->user()->company_id]);return redirect()->route(strtolower('Quote').'s.index');}
public function show(Quote $quote){return view(strtolower('Quote').'s.show',['item'=>$quote]);}
public function edit(Quote $quote){return view(strtolower('Quote').'s.edit',['item'=>$quote]);}
public function update(Request $r, Quote $quote){$quote->update($r->all());return back();}
public function destroy(Quote $quote){$quote->delete();return back();}
}

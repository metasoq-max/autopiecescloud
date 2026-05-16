<?php namespace App\Http\Controllers;
use App\Models${c}; use Illuminate\Http\Request;
class DashboardController extends Controller {
public function __invoke(){return view('dashboard');}
public function index(){$items=Dashboard::query()->latest()->paginate(); return view(strtolower('Dashboard').'s.index',compact('items'));}
public function create(){return view(strtolower('Dashboard').'s.create');}
public function store(Request $r){Dashboard::create($r->all()+['company_id'=>auth()->user()->company_id]);return redirect()->route(strtolower('Dashboard').'s.index');}
public function show(Dashboard $dashboard){return view(strtolower('Dashboard').'s.show',['item'=>$dashboard]);}
public function edit(Dashboard $dashboard){return view(strtolower('Dashboard').'s.edit',['item'=>$dashboard]);}
public function update(Request $r, Dashboard $dashboard){$dashboard->update($r->all());return back();}
public function destroy(Dashboard $dashboard){$dashboard->delete();return back();}
}

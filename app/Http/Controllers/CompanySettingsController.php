<?php namespace App\Http\Controllers; use Illuminate\Http\Request;
class CompanySettingsController extends Controller{public function edit(){return view('settings.company',['company'=>auth()->user()->company]);} public function update(Request $r){$company=auth()->user()->company; $company->update($r->only(['name','email','phone','address','city','postal_code'])); return back();}}

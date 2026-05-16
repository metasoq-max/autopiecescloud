@extends('layouts.app')
@section('app')
<h1 class="text-2xl font-bold mb-4">Modifier produit</h1>
<form method="POST" action="{{ route('products.update',$product) }}" class="grid md:grid-cols-2 gap-4 bg-zinc-900 p-4 rounded-xl">@csrf @method('PUT')
<input name="name" value="{{ $product->name }}" class="bg-zinc-800 rounded-lg p-3"><input name="reference" value="{{ $product->reference }}" class="bg-zinc-800 rounded-lg p-3"><input name="brand" value="{{ $product->brand }}" class="bg-zinc-800 rounded-lg p-3"><input name="purchase_price" value="{{ $product->purchase_price }}" class="bg-zinc-800 rounded-lg p-3"><input name="selling_price" value="{{ $product->selling_price }}" class="bg-zinc-800 rounded-lg p-3"><input name="quantity" value="{{ $product->quantity }}" class="bg-zinc-800 rounded-lg p-3"><input name="min_stock_alert" value="{{ $product->min_stock_alert }}" class="bg-zinc-800 rounded-lg p-3"><select name="status" class="bg-zinc-800 rounded-lg p-3"><option value="active" @selected($product->status==='active')>Actif</option><option value="inactive" @selected($product->status==='inactive')>Inactif</option></select>
<button class="md:col-span-2 bg-red-600 rounded-lg p-3">Mettre à jour</button></form>
@endsection

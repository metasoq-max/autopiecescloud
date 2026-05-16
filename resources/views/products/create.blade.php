@extends('layouts.app')
@section('app')
<h1 class="text-2xl font-bold mb-4">Créer un produit</h1>
<form method="POST" action="{{ route('products.store') }}" class="grid md:grid-cols-2 gap-4 bg-zinc-900 p-4 rounded-xl">@csrf
@foreach(['name'=>'Nom','reference'=>'Référence','brand'=>'Marque','purchase_price'=>'Prix achat','selling_price'=>'Prix vente','quantity'=>'Quantité','min_stock_alert'=>'Alerte stock'] as $n=>$l)<input name="{{ $n }}" placeholder="{{ $l }}" class="bg-zinc-800 rounded-lg p-3">@endforeach
<select name="status" class="bg-zinc-800 rounded-lg p-3"><option value="active">Actif</option><option value="inactive">Inactif</option></select>
<button class="md:col-span-2 bg-red-600 rounded-lg p-3">Enregistrer</button></form>
@endsection

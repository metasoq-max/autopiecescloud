@extends('layouts.app')
@section('app')
<div class="flex justify-between mb-4"><h1 class="text-2xl font-bold">Produits</h1><a href="{{ route('products.create') }}" class="bg-red-600 px-4 py-2 rounded-lg">Nouveau produit</a></div>
<div class="bg-zinc-900 rounded-xl p-4">@if($products->isEmpty())<p class="text-zinc-400">Aucun produit pour le moment.</p>@else<table class="w-full text-sm"><tr class="text-zinc-400"><th>Nom</th><th>Référence</th><th>Marque</th><th>Stock</th><th></th></tr>@foreach($products as $product)<tr><td>{{ $product->name }}</td><td>{{ $product->reference }}</td><td>{{ $product->brand }}</td><td>{{ $product->quantity }}</td><td><a href="{{ route('products.edit',$product) }}" class="text-red-400">Modifier</a></td></tr>@endforeach</table>{{ $products->links() }}@endif</div>
@endsection

@extends('layouts.app')
@section('app')
<h1 class="text-2xl font-bold mb-6">Tableau de bord</h1>
<div class="grid sm:grid-cols-2 xl:grid-cols-5 gap-4 mb-8">
@foreach (["Chiffre d'affaires"=>number_format($stats['revenue'] ?? 0,2,',',' ').' €','Produits'=>$stats['products'] ?? 0,'Clients'=>$stats['customers'] ?? 0,'Factures'=>$stats['invoices'] ?? 0,'Stock faible'=>$stats['low_stock'] ?? 0] as $k=>$v)
<div class="bg-zinc-900 rounded-xl p-4"><p class="text-zinc-400 text-sm">{{ $k }}</p><p class="text-2xl font-semibold mt-2">{{ $v }}</p></div>
@endforeach
</div>
<div class="grid lg:grid-cols-2 gap-6">
<div class="bg-zinc-900 rounded-xl p-4"><h2 class="font-semibold mb-3">Factures récentes</h2>@if($recentInvoices->isEmpty())<p class="text-zinc-400">Aucune facture disponible.</p>@else<table class="w-full text-sm"><tr class="text-zinc-400"><th>N°</th><th>Total</th></tr>@foreach($recentInvoices as $invoice)<tr><td>{{ $invoice->invoice_number }}</td><td>{{ number_format((float)$invoice->total,2,',',' ') }} €</td></tr>@endforeach</table>@endif</div>
<div class="bg-zinc-900 rounded-xl p-4"><h2 class="font-semibold mb-3">Produits en stock faible</h2>@if($lowStockProducts->isEmpty())<p class="text-zinc-400">Aucun produit en alerte.</p>@else<table class="w-full text-sm"><tr class="text-zinc-400"><th>Produit</th><th>Qté</th></tr>@foreach($lowStockProducts as $product)<tr><td>{{ $product->name }}</td><td>{{ $product->quantity }}</td></tr>@endforeach</table>@endif</div>
</div>
@endsection

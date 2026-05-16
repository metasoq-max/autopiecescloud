@extends('layouts.guest')
@section('content')
<div class="max-w-6xl mx-auto px-4 py-12">
  <section class="text-center py-16"><h1 class="text-4xl md:text-6xl font-bold">Le logiciel simple pour garages et magasins de pièces auto</h1><p class="mt-4 text-zinc-300">Gérez votre stock, vos clients, vos devis et vos factures sur une seule plateforme.</p><div class="mt-8 flex gap-4 justify-center"><a href="{{ route('register') }}" class="bg-red-600 px-6 py-3 rounded-xl">Commencer gratuitement</a><a href="{{ route('features') }}" class="border border-zinc-700 px-6 py-3 rounded-xl">Voir les fonctionnalités</a></div></section>
  <section class="grid md:grid-cols-3 gap-4">@foreach(['Gestion stock en temps réel','Facturation rapide','Historique clients véhicule'] as $f)<div class="bg-zinc-900 p-5 rounded-xl">{{ $f }}</div>@endforeach</section>
  <section class="mt-12 bg-zinc-900 p-6 rounded-xl"><h2 class="text-2xl font-semibold">Tarifs</h2><p class="text-zinc-300">Essai gratuit 14 jours, puis abonnement mensuel adapté aux garages.</p></section>
  <section class="mt-12"><h2 class="text-2xl font-semibold">FAQ</h2><div class="mt-4 space-y-3"><div class="bg-zinc-900 p-4 rounded-xl">Puis-je importer mes produits ? Oui, via CSV.</div><div class="bg-zinc-900 p-4 rounded-xl">Y a-t-il une période d’essai ? Oui, 14 jours.</div></div></section>
  <footer class="mt-16 text-zinc-400 text-sm">© {{ date('Y') }} AutoPieces Cloud — Conçu pour les professionnels automobiles en France.</footer>
</div>
@endsection

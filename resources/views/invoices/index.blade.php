@extends('layouts.app')
@section('content')
<h1 class="text-2xl font-semibold mb-4">Tableau de bord</h1>
<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-5 gap-4">
<div class="rounded-2xl p-4 bg-white/5">Chiffre d'affaires</div><div class="rounded-2xl p-4 bg-white/5">Factures récentes</div><div class="rounded-2xl p-4 bg-white/5">Stock faible</div><div class="rounded-2xl p-4 bg-white/5">Ventes du jour</div><div class="rounded-2xl p-4 bg-white/5">Activité récente</div>
</div>
@endsection

@extends('layouts.app')
@section('app')
<h1 class="text-2xl font-bold mb-4">Créer un client</h1>
<form method="POST" action="{{ route('customers.store') }}" class="grid md:grid-cols-2 gap-4 bg-zinc-900 p-4 rounded-xl">@csrf
@foreach(['first_name'=>'Prénom','last_name'=>'Nom','phone'=>'Téléphone','email'=>'Email','vehicle_brand'=>'Marque véhicule','vehicle_model'=>'Modèle véhicule','license_plate'=>'Immatriculation'] as $n=>$l)
<input name="{{ $n }}" placeholder="{{ $l }}" class="bg-zinc-800 rounded-lg p-3">@endforeach
<button class="md:col-span-2 bg-red-600 rounded-lg p-3">Enregistrer</button></form>
@endsection

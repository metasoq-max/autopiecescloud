@extends('layouts.app')
@section('app')
<div class="flex justify-between mb-4"><h1 class="text-2xl font-bold">Clients</h1><a href="{{ route('customers.create') }}" class="bg-red-600 px-4 py-2 rounded-lg">Nouveau client</a></div>
<div class="bg-zinc-900 rounded-xl p-4">@if($customers->isEmpty())<p class="text-zinc-400">Aucun client pour le moment.</p>@else<table class="w-full text-sm"><tr class="text-zinc-400"><th>Nom</th><th>Téléphone</th><th>Véhicule</th><th></th></tr>@foreach($customers as $customer)<tr><td>{{ $customer->first_name }} {{ $customer->last_name }}</td><td>{{ $customer->phone }}</td><td>{{ $customer->vehicle_brand }} {{ $customer->vehicle_model }}</td><td><a href="{{ route('customers.edit',$customer) }}" class="text-red-400">Modifier</a></td></tr>@endforeach</table>{{ $customers->links() }}@endif</div>
@endsection

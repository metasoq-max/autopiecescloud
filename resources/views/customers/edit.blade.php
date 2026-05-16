@extends('layouts.app')
@section('app')
<h1 class="text-2xl font-bold mb-4">Modifier client</h1>
<form method="POST" action="{{ route('customers.update',$customer) }}" class="grid md:grid-cols-2 gap-4 bg-zinc-900 p-4 rounded-xl">@csrf @method('PUT')
<input name="first_name" value="{{ $customer->first_name }}" class="bg-zinc-800 rounded-lg p-3"><input name="last_name" value="{{ $customer->last_name }}" class="bg-zinc-800 rounded-lg p-3"><input name="phone" value="{{ $customer->phone }}" class="bg-zinc-800 rounded-lg p-3"><input name="email" value="{{ $customer->email }}" class="bg-zinc-800 rounded-lg p-3"><input name="vehicle_brand" value="{{ $customer->vehicle_brand }}" class="bg-zinc-800 rounded-lg p-3"><input name="vehicle_model" value="{{ $customer->vehicle_model }}" class="bg-zinc-800 rounded-lg p-3"><input name="license_plate" value="{{ $customer->license_plate }}" class="bg-zinc-800 rounded-lg p-3">
<button class="md:col-span-2 bg-red-600 rounded-lg p-3">Mettre à jour</button></form>
@endsection

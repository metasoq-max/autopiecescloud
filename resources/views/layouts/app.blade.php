@extends('layouts.guest')
@section('content')
<div class="min-h-screen md:flex bg-zinc-950">
    <aside class="hidden md:flex md:w-72 bg-zinc-900 border-r border-zinc-800 p-6 flex-col">
        <h1 class="text-xl font-bold text-red-500">AutoPieces Cloud</h1>
        <nav class="mt-8 space-y-2 text-sm">
            @foreach ([['dashboard','Tableau de bord'],['products.index','Produits'],['customers.index','Clients'],['quotes.index','Devis'],['invoices.index','Factures'],['products.index','Stock'],['settings.company','Paramètres']] as [$route, $label])
                <a href="{{ route($route) }}" class="block rounded-lg px-3 py-2 bg-zinc-800/60 hover:bg-red-500/20">{{ $label }}</a>
            @endforeach
        </nav>
    </aside>
    <main class="flex-1 pb-20 md:pb-6">
        <header class="h-16 border-b border-zinc-800 bg-zinc-900/80 px-4 md:px-8 flex items-center justify-between">
            <span class="font-semibold">Interface SaaS</span>
            <details class="relative"><summary class="cursor-pointer">Admin ▾</summary><div class="absolute right-0 mt-2 w-40 bg-zinc-800 rounded-lg p-2"><form method="POST" action="{{ route('logout') }}">@csrf<button class="w-full text-left px-2 py-1 hover:bg-zinc-700 rounded">Déconnexion</button></form></div></details>
        </header>
        <section class="p-4 md:p-8">@yield('app')</section>
    </main>
</div>
<nav class="md:hidden fixed bottom-0 inset-x-0 bg-zinc-900 border-t border-zinc-800 grid grid-cols-4 text-xs text-center">
    <a href="{{ route('dashboard') }}" class="py-3">Dashboard</a><a href="{{ route('products.index') }}" class="py-3">Produits</a><a href="{{ route('customers.index') }}" class="py-3">Clients</a><a href="{{ route('settings.company') }}" class="py-3">Paramètres</a>
</nav>
@endsection

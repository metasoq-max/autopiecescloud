@extends('layouts.guest')
@section('content')
<div class='min-h-screen flex'><aside class='hidden md:block w-64 bg-zinc-900 p-4'>AutoPieces Cloud</aside><main class='flex-1 p-4'>@yield('app')</main></div>
<nav class='md:hidden fixed bottom-0 inset-x-0 bg-zinc-900 p-3 text-center'>Navigation</nav>
@endsection

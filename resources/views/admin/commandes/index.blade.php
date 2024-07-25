@extends('admin.layout')

@section('title', 'Catégories')

@section('content')
    <h2>LES COMMANDES CLIENTS</h2>
    <section class="d-flex align-items-center justify-content-center">
        <img width:"250" height="250" src="https://www.kindpng.com/picc/m/289-2892204_your-cart-is-empty-empty-cart-icon-png.png" alt="">
    </section>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
@endsection

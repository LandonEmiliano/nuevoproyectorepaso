@extends('layout.app')
@section('title', 'lista de productos')

@section('content')
 <h1> lista de productos</h1>
 <ul>
    @foreach ($products as $produc)
        <il>
            {{$product->name}}-{{$product->descripcion}}-{{$product->price}}
    @endforeach</ul>   
@endsection
@extends('layout.app')
@section('title', 'lista de productos')

@section('content')
 <h1> lista de productos</h1>
 <table class="table table-dark table-striped">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Precio</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{$product->name}}</td>
                <td>{{$product->descripcion}}</td>
                <td>{{$product->precio}}</td>
            </tr>
        @endforeach
    </tbody>
 
@endsection
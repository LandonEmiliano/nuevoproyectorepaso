@extends('layout.app')
@section('title', 'Mostrar productos')

@section('content')
<div class="container ">
    <h1>mostrar Producto</h1> 
        <div class="mb-3">
            <b>Id:</b> {{$product->id}}
        </div>
        <div class="mb-3">
            <b>Nombre:</b> {{$product->nombre}}
        </div>
        <div class="mb-3">
            <b>Descripcion:</b> {{$product->descripcion}}
        </div>
        <div class="mb-3">
        <b>Precio:</b> ${{number_format($product->precio, 2)}}
        </div>
        <a href="{{ route('products.index', [], false) }}" class="btn btn-secondary"><i class="bi bi-arrow-left"></i> Volver a la lista</a>
        
    
</div>       
 
 
@endsection
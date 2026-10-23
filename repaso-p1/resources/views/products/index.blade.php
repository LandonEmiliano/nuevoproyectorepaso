@extends('layout.app')
@section('title', 'lista de productos')

@section('content')

 <h1> lista de productos</h1>
 <div class="text-end">
    <a href="{{ route('products.create', [], false) }}" class="btn btn-primary mb-3"><i class="bi bi-plus-circle"></i> Crear Producto</a>
 </div>

 <table class="table table-dark table-striped" style="margin-top: 20px;">
    <thead>
        <tr>
             <th>Id</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->descripcion}}</td>
                <td>${{number_format($product->precio, 2)}}</td>
                <td >
                    <a href="{{ route('products.show', ['id' => $product->id], false) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('products.edit', ['id' => $product->id], false) }}" class="btn btn-primary">Editar</a>
                    <form action="{{ route('products.destroy', ['id' => $product->id], false) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este producto?')">Eliminar</button>
                    </form>
                </td>
             </tr>
        @endforeach
    </tbody>
 
@endsection
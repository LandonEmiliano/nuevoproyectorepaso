@extends('layout.app')
@section('title', 'lista de productos')

@section('content')
<div class="container">
 <h1> lista de productos</h1>
 @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
 <div class="text-end">
    <a href="{{ route('products.create', [], false) }}" class="btn btn-primary mb-3"><i class="bi bi-plus-circle"></i> Crear Producto</a>
 </div>

 <table class="table table-dark table-striped" style="margin-top: 20px;">
    <thead>
        <tr>
             <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Precio</th>
            <th scope="col" class="text-end">acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->descripcion}}</td>
                <td>${{number_format($product->precio, 2)}}</td>
                <td class = "text-end">
                    <a href="{{ route('products.show', ['id' => $product->id], false) }}" class="btn btn-info"><i class="bi bi-eye"></i> Ver</a>
                    <a href="{{ route('products.edit', ['id' => $product->id], false) }}" class="btn btn-primary"><i class="bi bi-pencil"></i>Editar</a>
                    <form action="{{ route('products.destroy', ['id' => $product->id], false) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este producto?')"><i class="bi bi-trash"></i> Eliminar</button>
                    </form>
                </td>
             </tr>
        @endforeach
    </tbody>
 </table>
</div>
@endsection
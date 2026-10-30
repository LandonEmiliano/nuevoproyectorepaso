@extends('layout.app')
@section('title', 'Editar  Producto')

@section('content')
<div class="container ">
    <h1>Editar Producto</h1>
     @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="{{ route('products.update', $product->id, false) }}" style="margin-top: 20px;">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" placeholder="Ingrese el nombre del producto">
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripcion</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{ $product->descripcion }}" placeholder="Ingrese la descripcion del producto" >
        </div>
        <div class="mb-3">
            <label for="precio" class="form-label">Precio</label>
            <input type="number" step="0.01" class="form-control" id="precio" name="precio" value="{{ $product->precio }}" placeholder="Ingrese el precio del producto" >
        </div>
        <button type="submit" class="btn btn-primary" false>Actualizar Producto</button>
        <a href="{{ route('products.index', [], false) }}" class="btn btn-secondary">Volver a la lista</a>
        
    </form>
</div>       
 
 
@endsection
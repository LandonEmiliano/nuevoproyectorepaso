@extends('layout.app')
@section('title', 'Crear Producto')

@section('content')
<div class="container ">
    <h1>Crear Producto</h1>
   
    <form method="POST" action="{{ route('products.store', [], false) }}" style="margin-top: 20px;">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Ingrese el nombre del producto">
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripcion</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{ old('descripcion') }}" placeholder="Ingrese la descripcion del producto" >
        </div>
        <div class="mb-3">
            <label for="precio" class="form-label">Precio</label>
            <input type="number" step="0.01" class="form-control" id="precio" name="precio" value="{{ old('precio') }}" placeholder="Ingrese el precio del producto" >
        </div>
        <button type="submit" class="btn btn-primary">Crear Producto</button>
        <a href="{{ route('products.index', [], false) }}" class="btn btn-secondary">Volver a la lista</a>
        
    </form>
</div>       
 
 
@endsection
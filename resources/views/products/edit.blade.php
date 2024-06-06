@extends('layouts.app')

@section('content')

<h1>{{ isset($product) ? 'Edit' : 'Add' }} Produto</h1>

<form action="{{ isset($product) ? route('products.update', $product) : route('products.store') }}" method="POST">

    @csrf

    @if(isset($product))
        @method('PUT')
    @endif

    <div>
        <label for="name">Nome</label>
        <input type="text" name="name" value="{{ $product->name ?? '' }}" required>
    </div>

    <div>
        <label for="description">Descrição</label>
        <textarea name="description" required>{{ $product->description ?? '' }}</textarea>
    </div>

    <div>
        <label for="price">Preço</label>
        <input type="number" name="price" step="0.01" value="{{ $product->price ?? '' }}" required>
    </div>

    <div>
        <label for="stock">Estoque</label>
        <input type="number" name="stock" value="{{ $product->stock ?? '' }}" required>
    </div>

    <div>
        <label for="image">Imagem</label>
        <input type="string" name="image" value="{{ $product->image ?? '' }}"required>
    </div>

    <button type="submit">{{ isset($product) ? 'Update' : 'Add' }} Produto</button>
</form>

@endsection

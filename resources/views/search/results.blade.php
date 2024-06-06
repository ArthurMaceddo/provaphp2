@extends('layouts.app')

@section('content')
    <h1>Resultados da Pesquisa</h1>

    @if ($results->isEmpty())
        <p>Nenhum resultado encontrado.</p>
    @else

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Estoque</th>
                <th>Imagem</th>
            </tr>
        </thead>
        <tbody>
        <tr>
            @foreach ($results as $result)
                <td>{{ $result->name }}</td>
                <td>{{ $result->description }}</td>
                <td>{{ $result->price }}</td>
                <td>{{ $result->stock }}</td>
                <td><img src="{{ $result->image }}" alt="{{ $result->name }}"></td>
            @endforeach
        </tr>
    </tbody>
    @endif
@endsection

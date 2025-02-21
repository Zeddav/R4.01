@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('clients.create') }}" class="btn btn-primary mb-4 btn-lg">Ajouter un client</a>

    <div class="table-responsive">
        <table class="table table-striped table-bordered shadow-lg">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Carte Bancaire</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clients as $client)
                    <tr>
                        <td>{{ $client->NumeroClient }}</td>
                        <td>{{ $client->nom }}</td>
                        <td>{{ $client->email }}</td>
                        <td>{{ $client->carteBancaire }}</td>
                        <td class="d-flex justify-content-start">
                            <a href="{{ route('clients.edit', $client->NumeroClient) }}" class="btn btn-warning btn-sm mx-1">Éditer</a>
                            
                            <a href="{{ route('clients.show', $client->NumeroClient) }}" class="btn btn-info btn-sm mx-1">Voir</a>

                            <form action="{{ route('clients.destroy', $client->NumeroClient) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm mx-1" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce client ?')">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div> </br>

    <div class="d-flex justify-content-center">
        {!! $clients->links('pagination::bootstrap-4') !!}
    </div>
</div>
@endsection

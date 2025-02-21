@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Modifier le client</h2>
    <form action="{{ route('clients.update', $client->NumeroClient) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nom">Nom :</label>
            <input type="text" name="nom" id="nom" class="form-control" value="{{ old('nom', $client->nom) }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email :</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $client->email) }}" required>
        </div>
        <div class="form-group">
            <label for="carteBancaire">Carte Bancaire :</label>
            <input type="text" name="carteBancaire" id="carteBancaire" class="form-control" value="{{ old('carteBancaire', $client->carteBancaire) }}" required>
        </div>
        <button type="submit" class="btn btn-success mt-3">Mettre à jour</button>
        <a href="{{ route('clients.index') }}" class="btn btn-secondary mt-3">Retour à la liste</a>
    </form>
</div>
@endsection

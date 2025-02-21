@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Informations</h2>
    <ul>
        <li><strong>Nom :</strong> {{ $client->nom }}</li>
        <li><strong>Mail :</strong> {{ $client->email }}</li>
        <li><strong>Carte Bancaire :</strong> {{ $client->carteBancaire }}</li>
    </ul>
    <a href="{{ route('clients.index') }}" class="btn btn-primary">Retour à la liste</a>
</div>
@endsection

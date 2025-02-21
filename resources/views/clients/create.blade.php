@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center mb-4 text-primary">Ajouter un nouveau client</h2>
    <div class="card p-4 shadow-lg">
        <form action="{{ route('clients.store') }}" method="POST">
            @csrf
            <div class="form-group mb-4">
                <label for="nom" class="form-label text-secondary">Nom :</label>
                <input type="text" name="nom" id="nom" class="form-control border-primary" required>
            </div>

            <div class="form-group mb-4">
                <label for="email" class="form-label text-secondary">Email :</label>
                <input type="email" name="email" id="email" class="form-control border-primary" required>
            </div>

            <div class="form-group mb-4">
                <label for="carteBancaire" class="form-label text-secondary">Carte Bancaire :</label>
                <input type="text" name="carteBancaire" id="carteBancaire" class="form-control border-primary" required>
            </div>

            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-success btn-lg w-45">Ajouter</button>
                <a href="{{ route('clients.index') }}" class="btn btn-outline-danger btn-lg w-45">Retour à la liste</a>
            </div>
        </form>
    </div>
</div>
@endsection

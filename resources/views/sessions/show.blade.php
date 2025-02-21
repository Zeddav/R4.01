@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Session Information') }}</div>

                <div class="card-body">
                    <p><strong>Name:</strong> {{ $user->nom }} {{ $user->prenom }}</p>
                    <p><strong>Email:</strong> {{ $user->email }}</p>
                    <p><strong>Age:</strong> {{ $user->age }}</p>
                    <p><strong>Address:</strong> {{ $user->adresse }}</p>

                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

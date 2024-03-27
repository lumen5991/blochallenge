@extends('layouts.dashboard')

@section('title', 'Inscription')

@section('content')
    <div class="content" style="margin: 100px 50px;">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Inscription</h2>
                    </div>
                    <div class="card-body">
                        <!-- Afficher un message d'erreur général -->
                        @if ($errors->any())
                            <div class="alert alert-danger" role="alert">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <!-- Utilisation de la directive @csrf pour inclure le jeton CSRF -->
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <!-- Champ prénom -->
                                <input type="text" name="firstname" class="form-control" value="{{ old('firstname') }}" placeholder="Prénoms">
                            </div>
                            <div class="form-group">
                                <!-- Champ nom -->
                                <input type="text" name="lastname" class="form-control" value="{{ old('lastname') }}" placeholder="Nom">
                            </div>
                            <div class="form-group">
                                <!-- Champ email -->
                                <input type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="Email">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">Ajouter</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

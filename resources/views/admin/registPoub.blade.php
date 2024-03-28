@extends('layouts.dashboard')

@section('title', 'Inscription')

@section('content')
<div class="content" style="margin: 100px 50px; height : 100vh
">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form method="GET" action="{{route('listePoubelle')}}">
                     
                        <div class="form-group">
                            <label for="lastname">Référence</label>
                            <input type="text" name="reference" class="form-control" value=""
                                placeholder="" style="height:60px">
                        </div>
                        <div class="form-group">
                            <label for="firsname">Prénoms</label>
                            <input type="date" name="date" class="form-control" value="" style="height:60px">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block" style="height:60px; font-size:20px">Enregistrer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

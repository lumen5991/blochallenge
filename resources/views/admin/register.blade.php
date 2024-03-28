@extends('layouts.dashboard')

@section('title', 'Inscription')

@section('content')
<div class="content" style="margin: 100px 50px; height : 100vh
">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form method="GET" action="{{route('listUser')}}">
                     
                        <div class="form-group">
                            <label for="lastname">Nom</label>
                            <input type="text" name="lastname" class="form-control" value=""
                                placeholder="" style="height:60px">
                        </div>
                        <div class="form-group">
                            <label for="firsname">Prénoms</label>
                            <input type="text" name="firstname" class="form-control" value="" placeholder="" style="height:60px">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" value=""
                                placeholder="" style="height:60px">
                        </div>
                        <div class="form-group">
                            <label for="zone">Affecter une zone</label>
                            <select name="zone" class="form-control" style="height:60px">
                                <option value="">ZONE I</option>
                                <option value="">ZONE II</option>
                                <option value="">ZONE III</option>
                                <option value="">ZONE IV</option>
                                <option value="">ZONE V</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="reference">Affecter une poubelle</label>
                            <select name="reference" class="form-control" style="height:60px">
                                <option value="">REF 0001</option>
                                <option value="">REF 0002</option>
                                <option value="">REF 0003</option>
                                <option value="">REF 0004</option>
                                <option value="">REF 0005</option>
                            </select>
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

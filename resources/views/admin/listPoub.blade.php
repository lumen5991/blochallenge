@extends('layouts.dashboard')

@section('title', 'Liste ramasseurs')

@section('content')
<div class="container-fluid" style="margin-top: 100px;height:100vh;">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">
                        <a href="{{ route('addPoub') }}" style="text-decoration: none; color:#000;">Enregistrer une nouvelle poubelle</a>
                    </h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="text-primary">
                                <tr>
                                    <th>Identifiant</th>
                                    <th>Date d'entrée</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td >REF 0001</td>
                                    <td > 12/08/2024 </td>
                                </tr>
                                <tr>
                                    <td >REF 0002</td>
                                    <td > 15/10/2024</td>
                                </tr>
                                <tr>
                                    <td >REF 0003</td>
                                    <td > 20/11/2024 </td>
                                </tr>
                                <tr>
                                    <td >REF 0004</td>
                                    <td > 25/12/2024 </td>
                                </tr>
                                <tr>
                                    <td >REF 0005</td>
                                    <td > 30/12/2024  </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

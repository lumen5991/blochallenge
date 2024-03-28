@extends('layouts.dashboard')

@section('title', 'Liste ramasseurs')

@section('content')
<div class="container-fluid" style="margin-top: 100px;height:100vh;">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">
                        <a href="{{ route('register') }}" style="text-decoration: none; color:#000;">Ajouter un agent de collecte</a>
                    </h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="text-primary">
                                <tr>
                                    <th>Nom et Prénoms</th>
                                    <th>Email</th>
                                    <th>Téléphone</th>
                                    <th>Zone attribuée</th>
                                    <th>Poubelle affecté</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>AHLE Rolande</td>
                                    <td>lumenahle@gmail.com</td>
                                    <td>99380299</td>
                                    <td>Zone I</td>
                                    <td >REF 0001</td>
                                </tr>
                                <tr>
                                    <td>DANTONDJI Kéren</td>
                                    <td>Kérendatni@gmail.com</td>
                                    <td>91290502</td>
                                    <td>Zone II</td>
                                    <td >REF 0002</td>
                                </tr>
                                <tr>
                                    <td>SEKOU Bilal</td>
                                    <td>bilalsekou175@gmail.com</td>
                                    <td>61183837</td>
                                    <td>Zone III</td>
                                    <td>REF 0003</td>
                                </tr>
                                <tr>
                                    <td>SOGNIGBE Georges</td>
                                    <td>martialgeorges76@gmail.com</td>
                                    <td>69782332</td>
                                    <td>Zone IV</td>
                                    <td>REF 0005</td>
                                </tr>
                                <tr>
                                    <td>TAWAGA Alfred</td>
                                    <td>alfredtawangan@gmail.com</td>
                                    <td>91757418</td>
                                    <td>Zone V</td>
                                    <td>REF 0005</td>
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

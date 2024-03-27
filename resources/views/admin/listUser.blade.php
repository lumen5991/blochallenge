@extends('layouts.dashboard')

@section('title', 'Liste ramasseurs')

@section('content')
    <div>
        <div class="content" style="margin: 100px 50px">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">

                            <h5 class="card-title">
                                <a href="" style="text-decoration: none; color:#000" class="card-title">Ajouter un
                                    ramasseur</a>
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary" style="color: #0f0">
                                        <th>
                                            Nom et Prénoms
                                        </th>
                                        <th>
                                            Email
                                        </th>
                                        <th>
                                            Téléphone
                                        </th>
                                        <th class="text-right">
                                            Caniveau affecté
                                        </th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                AHLE Rolande
                                            </td>
                                            <td>
                                                lumenahle@gmail.com
                                            </td>
                                            <td>
                                                99380299
                                            </td>
                                            <td class="text-right">
                                                REF 0001
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                DANTONDJI Kéren
                                            </td>
                                            <td>
                                                Kérendatni@gmail.com
                                            </td>
                                            <td>
                                                91290502
                                            </td>
                                            <td class="text-right">
                                                REF 0002
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                SEKOU Bilal
                                            </td>
                                            <td>
                                                bilalsekou175@gmail.com
                                            </td>
                                            <td>
                                                61183837
                                            </td>
                                            <td class="text-right">
                                                REF 0003
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                SOGNIGBE Georges
                                            </td>
                                            <td>
                                                martialgeorges76@gmail.com
                                            </td>
                                            <td>
                                                69782332
                                            </td>
                                            <td class="text-right">
                                                REF 0005
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                TAWAGAN Alfred
                                            </td>
                                            <td>
                                                alfredtawangan@gmail.com
                                            </td>
                                            <td>
                                                91757418
                                            </td>
                                            <td class="text-right">
                                                REF 0005
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                  
                </div>
            </div>
        </div>
    </div>
@endsection

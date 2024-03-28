@extends('layouts.dashboard')

@section('title', 'Notifications')

@section('content')
    <div class="container-fluid" style="margin-top: 100px; height:100vh;">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card">
                    <div class="card-header">

                    </div>
                    <div class="card-body">
                        <div class="list-group">
                            <!-- Liste des notifications -->
                            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start"
                                style="border:1px solid gray">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1 blink" style="color: red">Poubelle REF 0005 prête à être collectée</h5>
                                    <small>Il y a 5 minutes</small>
                                </div>
                                <p class="mb-1">Le niveau de remplissage de la poubelle REF 005 a dépassé le seuil
                                    prédéfini. Veuillez la collecter dès que possible.</p>
                                <small>Zone: Zone I - Emplacement: Caniveau 2</small>
                            </a>

                            <a href="#"
                                class="list-group-item list-group-item-action flex-column align-items-start mt-3 "
                                style="border:1px solid gray">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1 blink" style="color: red">Poubelle REF 0003 prête à être collectée</h5>
                                    <small>Il y a 5 minutes</small>
                                </div>
                                <p class="mb-1">Le niveau de remplissage de la poubelle REF 003 a dépassé le seuil
                                    prédéfini. Veuillez la collecter dès que possible.</p>
                                <small>Zone: Zone I - Emplacement: Caniveau 1</small>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

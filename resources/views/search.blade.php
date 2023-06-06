@extends('layouts.app')
@section('search')
<br><br>

<style>
    body{background-image: ;
        background-image: url('/assets/photos/wallpaper8.jpg');
        background-attachment: fixed; 
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card w-100 mb-5">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="image-container">
                            <img src="{{asset('assets/images/cat.jpg')}}" alt="" class=" rounded-circle profile-pic mr-3">
                        </div>
                        <div class="d-grid gap-2 col-10 mx-auto">
                            <button class="btn btn-outline-secondary" type="button" data-bs-toggle="modal" data-bs-target="#searchModal">
                                <i class="fa-solid fa-magnifying-glass"></i>
                                &nbsp;&nbsp;Rechercher une Offre
                            </button>
                        </div>
                    </div>
                </div>
            </div>
<!-- Modal -->
    <div class="modal fade" id="searchModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
        <div class="modal-content bg-body-secondary">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Rechercher une Offre</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('search.offers') }}" method="GET">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                <option selected>Catégorie</option>
                                <option value="1">Etude</option>
                                <option value="2">Formation</option>
                                <option value="3">Stage</option>
                                <option value="3">Emploi</option>
                            </select>
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                <option selected>Niveau</option>
                                <option value="1">Bac</option>
                                <option value="2">Licence</option>
                                <option value="3">Master</option>
                                <option value="3">Doctorat</option>
                            </select>
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                <option selected>Domaine</option>
                                <option value="1">Data</option>
                                <option value="2">Design</option>
                                <option value="3">Web</option>
                                <option value="3">Marketing</option>
                            </select>
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                <option selected>Domaine</option>
                                <option value="1">Technologie de l'information (TI)</option>
                                <option value="2">Finance et comptabilité</option>
                                <option value="3">Ingénierie</option>
                                <option value="3">Tourisme et hôtellerie </option>
                            </select>
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                <option selected>Domaine</option>
                                <option value="1">Technologie de l'information (TI)</option>
                                <option value="2">Finance et comptabilité</option>
                                <option value="3">Ingénierie</option>
                                <option value="3">Tourisme et hôtellerie </option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            &nbsp;&nbsp;<label class="labels">Date de début</label>
                            <input type="date" class="form-control mt-2 mb-2" name="debut" id="debut" style="height: 50px;" value="">
                            &nbsp;&nbsp;<label class="labels">Date de fin</label>
                            <input type="date" class="form-control mt-2 mb-2" name="fin" id="fin" style="height: 50px;" value="">
                            <select type="text" name="ville" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                <option selected>Emplacement</option>
                                <option value="Casablanca">Casablanca</option>
                                <option value="Eljadida">Eljadida</option>
                                <option value="Rabat">Rabat</option>
                                <option value="Tanger">Tanger</option>
                                <option value="Safi">Safi</option>
                                <option value="Tetouan">Tetouan</option>
                                <option value="Ifrane">Ifrane</option>
                            </select>
                            &nbsp;&nbsp;<label class="labels">Mot Clés</label>
                            <input type="text" class="form-control mt-2 mb-2" name="text" id="text" style="height: 50px;" value="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Retour</button>
                    <button type="submit" class="btn btn-primary">Rechercher</button>
                </div>
            </form> 
        </div>
        </div>
    </div>
<!--/Modal--> 
<!-- Affihe Result Of Search -->
@if($offres->isEmpty())
        <p>No offers found for the specified location.</p>
@else
@foreach($offres as $offre)
            <div class="card w-100 mb-3">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="image-container">
                            <img src="{{asset('assets/images/'.$offre->path)}}" alt="" class=" rounded-circle profile-pic mr-3">
                        </div>
                        <div class="d-grid gap-2 col-10 mx-auto">
                            <div><h5></h5></div>
                            <div>
                                <span class="text-muted"> {{$offre->categorie}}. </span>
                                <span class="text-muted"> {{$offre->domain}}. </span>
                                <span class="text-muted">{{$offre->ville}} </span>
                                <div class=" d-flex justify-content-end gap-2">
                                    <span><a href="#"><button class="btn btn-outline-secondary btn-sm">Voir Offre</button></a></span>
                                    <span><button class="btn btn-outline-secondary btn-sm">Postuler</button></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endforeach
@endif
            <!-- <div class="card w-100 mb-3">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="image-container">
                            <img src="{{asset('assets/images/woman2.jpg')}}" alt="" class=" rounded-circle profile-pic mr-3">
                        </div>
                        <div class="d-grid gap-2 col-10 mx-auto">
                            <div><h5>Google</h5></div>
                            <div>
                                <span class="text-muted">categorie . </span>
                                <span class="text-muted">Domain . </span>
                                <span class="text-muted">Emplacement </span>
                                <div class=" d-flex justify-content-end gap-2">
                                    <span><a href="#"><button class="btn btn-outline-secondary btn-sm">Voir Offre</button></a></span>
                                    <span><button class="btn btn-outline-secondary btn-sm">Postuler</button></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>




@endsection
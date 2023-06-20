@extends('layouts.app')
@section('search')
<br><br>

<style>
    body{background-image: ;
        /* background-image: url('/assets/photos/wallpaper8.jpg'); */
        background-color: #37517e;
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
                                <img src="{{ asset('assets/images/'.$pic)}}" alt="" class=" rounded-circle profile-pic mr-3">
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
                                            <option value="Etude">Etude</option>
                                            <option value="Formation">Formation</option>
                                            <option value="Stage">Stage</option>
                                            <option value="Emploi">Emploi</option>
                                        </select>
                                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                            <option selected>Niveau</option>
                                            <option value="Bac">Bac</option>
                                            <option value="Licence">Licence</option>
                                            <option value="Master">Master</option>
                                            <option value="Doctorat">Doctorat</option>
                                        </select>
                                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                            <option selected>Domaine</option>
                                            <option value="Data">Data</option>
                                            <option value="Design">Design</option>
                                            <option value="Web">Web</option>
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
                                        <input type="text" class="form-control mt-2 mb-2" name="MotCles" id="text" style="height: 50px;" value="">
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
<!-- Affihe Result Of Search -->
    @if($offres->isEmpty())
            <h2 class="text text-center">No offers found for the specified location.</h2>
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
                                    <span class="text-muted"> {{$offre->domaine}}. </span>
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
            </div>
        </div>
    </div>




@endsection
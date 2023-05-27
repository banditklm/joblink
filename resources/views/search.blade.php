@extends('layouts.app')
@section('search')
<br><br>


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
        <div class="modal-dialog">
        <div class="modal-content bg-body-secondary">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Rechercher une Offre</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form>
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
                            &nbsp;&nbsp;<label class="labels">Mot Clés</label>
                            <input type="text" class="form-control mt-2 mb-2" name="text" id="text" style="height: 50px;" value="">
                        </div>
                        <div class="col-md-6">
                            &nbsp;&nbsp;<label class="labels">Date de début</label>
                            <input type="date" class="form-control mt-2 mb-2" name="debut" id="debut" style="height: 50px;" value="">
                            &nbsp;&nbsp;<label class="labels">Date de fin</label>
                            <input type="date" class="form-control mt-2 mb-2" name="fin" id="fin" style="height: 50px;" value="">
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                <option selected>Emplacement</option>
                                <option value="1">Casablanca</option>
                                <option value="2">Eljadida</option>
                                <option value="3">Rabat</option>
                                <option value="3">Tanger</option>
                                <option value="3">Safi</option>
                                <option value="3">Tétouan</option>
                                <option value="3">Ifrane</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Retour</button>
                    <button type="button" class="btn btn-primary">Rechercher</button>
                </div>
            </form> 
        </div>
        </div>
    </div>
<!--/Modal--> 
<!-- Affihe Result Of Search -->
            <div class="card w-100 mb-5">
                <div class="card-body">
                    <!-- <div class="table-responsive">
                        <table class="table">
                            <tbody class="">
                                <tr>
                                    <th>
                                        <span>Categorie</span>&nbsp;&nbsp;
                                    </th>
                                    <th>
                                        <span>Niveau</span>
                                    </th>
                                    <td>
                                        <span>Domaine</span>
                                    </td>
                                    <td>
                                        <span>Domaine</span>
                                    </td>
                                    <td>
                                        <span>Domaine</span>
                                    </td>
                                    <th>
                                        <span>Deplacement</span>
                                    </th>
                                    <th>
                                        <button class="btn btn-outline-secondary btn-sm">Postuler</button>
                                    </th>
                                    <th>
                                        <a href="#"><button class="btn btn-outline-secondary btn-sm">Voir Offre</button></a>
                                    </th>
                                </tr>

                                

                                <tr>
                                    <th>
                                        <span>Categorie</span>&nbsp;&nbsp;
                                    </th>
                                    <th>
                                        <span>Niveau</span>
                                    </th>
                                     <th>
                                        <span>Domaine</span>
                                    </th>
                                   <td>
                                        <span>Domaine</span>
                                    </td>
                                    <td>
                                        <span>Domaine</span>
                                    </td>
                                    <th class="custom-column">
                                        Deplacement 
                                    </th>
                                    <th>
                                        <button class="btn btn-outline-secondary btn-sm text-nowrap">Postuler</button>
                                    </th>
                                    <th>
                                        <a href="#"><button class="btn btn-outline-secondary btn-sm">Voir Offre</button></a>
                                    </th>
                                </tr>

                            </tbody>
                        </table>
                    </div> -->
                    <div class="d-flex">
                        <div class="image-container">
                            <img src="{{asset('assets/images/oracle.png')}}" alt="" class=" rounded-circle profile-pic mr-3">
                        </div>
                        <div class="d-grid gap-2 col-10 mx-auto">
                            <div><h5>Oracle Corporation</h5></div>
                            <div>
                            <span class="text-muted">categorie . </span>
                            <span class="text-muted">Domain . </span>
                            <span class="text-muted">Emplacement </span>
                            <div class=" d-flex justify-content-end gap-2">
                                <span><button class="btn btn-outline-secondary btn-sm">Postuler</button></span>
                                <span><a href="#"><button class="btn btn-outline-secondary btn-sm">Voir Offre</button></a></span>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card w-100 mb-5">
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
                            <span class="text-muted">Emplacementt </span>
                            <div class=" d-flex justify-content-end gap-2">
                                <span><button class="btn btn-outline-secondary btn-sm">Postuler</button></span>
                                <span><a href="#"><button class="btn btn-outline-secondary btn-sm">Voir Offre</button></a></span>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>













@endsection
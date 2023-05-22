@extends('layouts.app')
@section('search')




<!--TestModal-->

<br><br>
<button class=" btn btn-outline-secondary navbar-brand" type="button" data-bs-toggle="modal" data-bs-target="#searchModal" >
        <i class="fa-solid fa-magnifying-glass"></i>&nbsp;&nbsp;Search 
    </button>



<!-- Modal -->
    <div class="modal fade" id="searchModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content bg-body-secondary">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Rechercher une Offre</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
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
                        &nbsp;&nbsp;<label class="labels">Date de dèbut</label>
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
        </div>
        </div>
    </div>
<!--/Modal--> 






<!--/TestModal-->






@endsection
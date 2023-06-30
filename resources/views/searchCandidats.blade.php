@extends('layouts.app')
@section('searchCandidats')
<br><br>

<style>
    body{
        background-color: #37517e;
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
                                    &nbsp;&nbsp;Rechercher Candidats
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="searchModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                    <div class="modal-content bg-body-secondary">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Rechercher candidats</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{ route('search.candidats') }}" method="GET">
                            @csrf
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6 mt-4">
                                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                            <option selected>Expérience</option>
                                            <option value="Etude">Etude</option>
                                            <option value="Formation">Formation</option>
                                            <option value="Stage">Stage</option>
                                            <option value="Emploi">Emploi</option>
                                        </select>
                                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                            <option selected>Diplôme</option>
                                            <option value="Bac">Bac</option>
                                            <option value="Licence">Licence</option>
                                            <option value="Master">Master</option>
                                            <option value="Doctorat">Doctorat</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="labels">description</label>
                                        <textarea name="MotCles"  class="form-control mt-2 mb-2" type="text" id="text" cols="5" rows="3"></textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="experienceRange" class="form-label">les années d'expérience:</label>
                                        <input type="range" class="form-range" min="1" max="15" step="1" id="experienceRange" value="1">
                                        <span id="experienceValue">1</span> années
                                    </div>
                                    <div class="col-md-6">
                                        <select type="text" name="ville" class="form-select form-select-lg mb-3 mt-3" aria-label=".form-select-lg example">
                                            <option selected value="Casablanca">Casablanca</option>
                                            <option value="Eljadida">Eljadida</option>
                                            <option value="Rabat">Rabat</option>
                                            <option value="Tanger">Tanger</option>
                                            <option value="Safi">Safi</option>
                                            <option value="Tetouan">Tetouan</option>
                                            <option value="Ifrane">Ifrane</option>
                                        </select>
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
            <h2 class="text text-center">Aucune candidats ...</h2>
    @else
    @foreach($offres as $offre)

    @endforeach
    @endif
            </div>
        </div>
    </div>

    <script>
    const experienceRange = document.getElementById('experienceRange');
    const experienceValue = document.getElementById('experienceValue');
    experienceRange.addEventListener('input', () => {
      experienceValue.textContent = experienceRange.value;
    });
  </script>


@endsection
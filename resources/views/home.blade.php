@extends('layouts.app')

@section('content')
<style>
    body{background-image: ;
        background-image: url('/assets/photos/wallpaper1.webp');
        background-attachment: fixed;    }
</style>

<br><br>
@if(session('success'))
<div id="success-message" class="row justify-content-center mt-4">
    <div class="col-md-4">
        <div style="background:#000;" class="alert alert-dark mt-6 justify-content-center">
        <a style="color:#fff" class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover w-100 justify-content-center" href="/profile">
            {{ session('success') }}</a>
        </div>
    </div>
</div>
<script>
        $(document).ready(function() {
            setTimeout(function() {
                $('#success-message').fadeOut();
            }, 3000); // Adjust the duration (in milliseconds) as needed
        });
    </script>
@endif
@if (Auth::user()->role != 2)
<!-- Recruteur home -->
<!-- Offre without modal -->
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-12">
            <form method="POST" action="{{ route('offres.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <select id="categorie" name="categorie" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                    <option selected>Catégorie</option>
                                    <option value="etude">Etude</option>
                                    <option value="formation">Formation</option>
                                    <option value="stage">Stage</option>
                                    <option value="emploi">Emploi</option>
                                </select>
                                <select id="etude" onChange="change(this.value)" onChange="change(this.value)" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                <option selected disabled>Niveau</option>
                                    @foreach ($niveaux as $niveau)
                                    <option value="{{ $niveau->niveau }}">{{ $niveau->niveau }}</option>
                                    @endforeach
                                </select>
                                <select id="formation" onChange="change(this.value)" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                    <option selected disabled>Domaine</option>
                                    @foreach ($dformations as $dformation)
                                    <option value="{{ $dformation->nom }}">{{ $dformation->nom }}</option>
                                    @endforeach
                                </select>
                                <select id="stage" onChange="change(this.value)" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                    <option selected>Stage</option>
                                    <option value="Technologie">Technologie</option>
                                    <option value="Finance">Finance</option>
                                    <option value="Ingenierie">Ingénierie</option>
                                    <option value="Tourisme">Tourisme</option>
                                </select>
                                <select id="emploi" onChange="change(this.value)" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                    <option selected>Emploi</option>
                                    <option value="Technologie">Technologie</option>
                                    <option value="Finance">Finance</option>
                                    <option value="Ingenierie">Ingénierie</option>
                                    <option value="Tourisme">Tourisme</option>
                                </select>
                                <input type="hidden" name="domaine" value="">
                            <script>
                                function change(value){
                                    $('input[name=domaine]').val(value);
                                }
                                $('#categorie').on('change', function() {
                                    var selectedCategorie = $(this).val();
                                    $('#etude, #formation, #stage, #emploi').hide();
                                    $('#' + selectedCategorie).show();
                                    $('input[name=domaine]').val($('#categorie').val());
                                });
                            </script>
                            </div>
                            <div class="col-md-4">
                                <textarea name="descriptionOffre" id="description" cols="39" rows="3" placeholder="Ajouter quelque chose!"></textarea>
                                <input type="file" name="image" onChange="displayImage(this)" id="postImage" class="form-control" accept="image/*" style="display: none;">
                                <img src="{{asset('assets/photos/hire.jpg')}}" alt="" class="rounded mx-auto d-block w-100" onClick="triggerClick()" id="postDisplay">
                            </div>
                            <div class="col-md-4">
                                &nbsp;&nbsp;<label class="labels">Date de début</label>
                                <input type="date" class="form-control mt-2 mb-2" name="debut" id="debut" style="height: 50px;" value="">
                                &nbsp;&nbsp;<label class="labels">Date de fin</label>
                                <input type="date" class="form-control mt-2 mb-2" name="fin" id="fin" style="height: 50px;" value="">
                                <select name="ville" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                    <option selected>Emplacement</option>
                                    <option value="Casablanca">Casablanca</option>
                                    <option value="Eljadida">Eljadida</option>
                                    <option value="Rabat">Rabat</option>
                                    <option value="Tanger">Tanger</option>
                                    <option value="Safi">Safi</option>
                                    <option value="Tetouan">Tétouan</option>
                                    <option value="Ifrane">Ifrane</option>
                                </select>
                            </div>
                            <div class="col-md-4" type="hidden">
                                <input type="hidden" name="region" value="Région">
                                <input type="hidden" name="pays" value="Pays">
                                <input type="hidden" name="add1" value="Adresse 1">
                                <input type="hidden" name="add2" value="Adresse 2">
                                <input type="hidden" name="codepostale" value="Code Postal">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="reset" class="btn" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn">Post</button>
                    </div>
                </div>    
            </form>
<!-- /Offre without modal -->
<!-- Modal Candidature -->
            <div class="modal fade" id="modalCandidature" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Les Candidatures</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="">
                            <div class="modal-body">
                                <div class="card w-100">
                                    <div class="card-body">
                                        <div class="candidature d-flex">
                                            <div class="d-flex">
                                                <div>
                                                    <img src="{{ asset('assets/images/cat.jpg')}}" class="rounded-circle profile-pic mr-3" alt="profil_img">
                                                </div>
                                                <div>
                                                    <h5 class="mb-0 mt-3 ms-2 font-weight-normal">Kaltoum Elmounjid</h5>
                                                </div> 
                                            </div>
                                            <div class="d-flex gap-2 justify-content-end">
                                                <div><a href=""><button class="btn btn-outline-secondary btn-sm mt-2"><i class="fa-solid fa-eye"></i> Voir Profile</button></a></div>
                                                <div><button class="btn btn-outline-secondary btn-sm mt-2"><i class="fa-solid fa-handshake"></i> Demandé à le voir</button></div>
                                                <div><button class="btn btn-outline-success btn-sm mt-2"><i class="fa-solid fa-circle-check"></i> Accepter</button></div>
                                                <div><button class="btn btn-outline-danger btn-sm mt-2"><i class="fa-solid fa-xmark"></i> Rejeter</button></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
<!-- /modal candidature -->
        </div>
    </div>
@else
<!-- Candidat Home -->

<!-- Candidat voir offres -->
    @foreach($offres as $offer)
        <div class="modal fade" id="exampleModal-{{ $offer->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                    <div class="card w-100 mb-4">
                        <div class="card-body">
                            <div class="head_post d-flex">
                                <div>
                                    <img src="{{ asset('assets/images/'.$offer->path)}}" class="rounded-circle profile-pic mr-3" alt="profil_img">
                                </div>
                                <div>
                                    <h5 class="mb-0 mt-3 ms-2 font-weight-normal">{{ $offer->nom }}</h5>
                                </div> 
                                <div class="dropdown">
                                    <button class="btn point" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Signaler l'offre</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center gap-3">
                                <span class="text text-muted">#{{ $offer->categorie }}</span>
                                <span class="text text-muted">#{{ $offer->domaine }}</span>
                                <span class="text text-muted">#{{ $offer->ville }}</span>
                            </div>
                            <div>
                                <span class="text text-muted">From: {{ $offer->debut}}</span><br>
                                <span class="text text-muted">To: {{ $offer->fin }}</span>
                            </div>
                            <div>
                                <p>{{ $offer->descriptionOffre }}</p>
                            </div>
                            <div class="w-100" style="display:flex;">
                                <img src="{{ asset('assets/images/'.$offer->pathOffre)}}" alt="" class="w-50" style="max-height: 250px;display: block; margin: 0 auto;">
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-primary">Postuler</button>
            </div>
            </div>
        </div>
        </div>
    @endforeach
<!-- Candidat offres table -->
    <div class="container mt-3 mb-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <table style="background:#cff4fc;" class="table table-info table-hover table-bordered border-primary">
                    <thead>
                        <tr>
                            <th scope="col">Recruteur</th>
                            <th scope="col">Domaine</th>
                            <th scope="col">Catégorie</th>
                            <th scope="col">Emplacement</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($offres as $offer)
                        <tr>
                            <th scope="row" class="img"><img src="{{ asset('assets/images/'.$offer->path)}}" alt="" class="rounded-circle"></th>
                            <td>{{ $offer->domaine }}</td>
                            <td>{{ $offer->categorie }}</td>
                            <td>{{ $offer->city }}</td>
                            <td style="display:flex;gap:10px;">
                                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal-{{ $offer->id }}">Voir Offre</button>
                                <form action="{{ route('candidatures.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="offre_id" value="{{ $offer->id }}">
                                    <button type="submit"  id="post-{{ $offer->id }}" class="btn btn-primary btn-sm" onclick="toggleButtons({{ $offer->id }})">Postuler</button>
                                </form>
                                <form action="{{ route('sauvgardes.create') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="offre_id" value="{{ $offer->id }}">
                                    <button type="submit" class="btn btn-primary btn-sm">Sauvgarder</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>



<script>
    function toggleButtons(id) {
        var post = document.getElementById("post-"+id);
        var annuler = document.getElementById("annuler-"+id);

        post.classList.toggle("d-none");
        annuler.classList.toggle("d-none");
        }
</script>
@endif

@endsection
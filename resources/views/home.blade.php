@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> -->


<br><br>
@if (Auth::user()->role != 2)
<!-- Recruteur home -->
    <div class="container ">
        <div class="row justify-content-center">
<!-- Cree Offre -->
            <div class="col-md-6">
                <div class="card w-100 mb-5">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="image-container">
                                <img src="{{asset('assets/images/woman.jpg')}}" alt="" class=" rounded-circle profile-pic mr-3">
                            </div>
                            <div class="d-grid gap-2 col-10 mx-auto">
                                <button class="btn btn-outline-secondary" type="button" data-bs-toggle="modal" data-bs-target="#creatOffre">
                                    Creat Offre!
                                </button>
                                <div class="modal fade" id="creatOffre" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-xl">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
<!-- form post offre -->
                                        <form method="POST" action="{{ route('offres.store') }}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <select name="categorie" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                                            <option selected>Catégorie</option>
                                                            <option value="Etude">Etude</option>
                                                            <option value="Formation">Formation</option>
                                                            <option value="Stage">Stage</option>
                                                            <option value="4">Emploi</option>
                                                        </select>
                                                        <select name="domaine" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                                            <option selected disabled>Niveau</option>
                                                            @foreach ($niveaux as $niveau)
                                                            <option value="{{ $niveau->niveau }}">{{ $niveau->niveau }}</option>
                                                            @endforeach
                                                        </select>
                                                        <select name="domaine" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                                            <option selected>Domaine</option>
                                                            @foreach ($dformations as $dformation)
                                                            <option value="{{ $dformation->nom }}">{{ $dformation->nom }}</option>
                                                            @endforeach
                                                        </select>
                                                        <select name="domaine" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                                            <option selected>Domaine</option>
                                                            <option value="1">Technologie</option>
                                                            <option value="2">Finance</option>
                                                            <option value="3">Ingénierie</option>
                                                            <option value="4">Tourisme</option>
                                                        </select>
                                                        <select name="domaine" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                                            <option selected>Domaine</option>
                                                            <option value="1">Technologie</option>
                                                            <option value="2">comptabilité</option>
                                                            <option value="3">Ingénierie</option>
                                                            <option value="4">hôtellerie </option>
                                                        </select>

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
                                                            <option value="3">Ifrane</option>
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
                                            <div class="modal-footer">
                                                <button type="reset" class="btn" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn">Post</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
<!-- Afficher Offres by table -->

<!-- Afficher Offres -->
@foreach($offers as $offer)          
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
                                <li><a class="dropdown-item" href="#">supprimer l'offre</a></li>
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
                    <div>
                        <img src="{{ asset('assets/images/'.$offer->pathOffre)}}" alt="" class="w-100 h-auto">
                    </div>
                    <div class="fiter d-flex mt-3">
                        <button class="btn btn-outline-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#modalCandidature" >Voir Candidature</button>
                    </div>
                </div>
            </div>
@endforeach
            <!-- <div class="card w-100 mb-4">
                <div class="card-body">
                    <div class="head_post d-flex">
                        <div>
                            <img src="{{ asset('assets/images/woman.jpg')}}" class="rounded-circle profile-pic mr-3" alt="profil_img">
                        </div>
                        <div>
                            <h5 class="mb-0 mt-3 ms-2 font-weight-normal">Oracle Corporation</h5>
                        </div> 
                        <div class="dropdown">
                            <button class="btn point" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-ellipsis"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">supprimer l'offre</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center gap-3">
                        <span class="text text-muted">#Formation</span>
                        <span class="text text-muted">#Web</span>
                        <span class="text text-muted">#Casablanca</span>
                    </div>
                    <div>
                        <span class="text text-muted">From: 12-05-2023</span><br>
                        <span class="text text-muted">To: 12-06-2023</span>
                    </div>
                    <div>
                        <p>𝙂𝙤𝙤𝙜𝙡𝙚 𝘽𝙖𝙧𝙙 𝘼𝙄 is an incredibly powerful tool that can help digital marketers to create high-quality content, engage with customers more effectively, gain valuable insights into customer behavior, and save time.
                                As AI technology continues to evolve, 𝘽𝙖𝙧𝙙 will undoubtedly become an even more essential tool for businesses looking to stay ahead of the curve and thrive in an increasingly competitive digital landscape.
                            Try for free: https://www.bardaiinsights.co
                        </p>
                    </div>
                    <div>
                        <img src="{{ asset('assets/photos/google.jpg')}}" alt="" class="w-100 h-auto">
                    </div>
                    <div class="fiter d-flex mt-3">
                        <a href="#" class="btn btn-outline-secondary btn-pill" >Voir Candidature</a>
                    </div>
                </div>
            </div> -->
   
<!-- /afficher Offres -->
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
        </div>
    </div>
@else
<!-- Candidat Home -->
<!-- Candidat offres table -->
<!-- <div class="container mt-3 mb-4">
        <div class="row justify-content-center"> -->
            <!-- <div class="col-md-8">
                <table class="table table-info table-hover table-bordered border-primary">
                    <thead>
                        <tr>
                            <th scope="col">Recruteur</th>
                            <th scope="col">Domaine</th>
                            <th scope="col">Emplacement</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" class="img"><img src="{{asset('assets/images/oracle.png')}}" alt="" class="rounded-circle"></th>
                            <td>Informatique</td>
                            <td>United states</td>
                            <td>
                                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">Voir Offre</button>
                                <a href="#"><button id="post" class="btn btn-primary btn-sm" onclick="toggleButtons()">Postuler</button></a>
                                <a href="#"><button id="annuler" class="btn btn-danger btn-sm d-none" onclick="toggleButtons()">Annuler</button></a>
                            </td>
                            <script>
                                function toggleButtons() {
                                    var post = document.getElementById("post");
                                    var annuler = document.getElementById("annuler");

                                    post.classList.toggle("d-none");
                                    annuler.classList.toggle("d-none");
                                }

                            </script>
                        </tr>
                        <tr>
                            <th scope="row" class="img"><img src="{{asset('assets/images/woman2.jpg')}}" alt="" class="rounded-circle"></th>
                            <td>Design</td>
                            <td>Casablanca</td>
                            <td>
                                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">Voir Offre</button>
                                <a href="#"><button id="post2" class="btn btn-primary btn-sm" onclick="toggleButtons2()">Postuler</button></a>
                                <a href="#"><button id="annuler2" class="btn btn-danger btn-sm d-none" onclick="toggleButtons2()">Annuler</button></a>
                            </td>
                            <script>
                                function toggleButtons2() {
                                    var post2 = document.getElementById("post2");
                                    var annuler2 = document.getElementById("annuler2");

                                    post2.classList.toggle("d-none");
                                    annuler2.classList.toggle("d-none");
                                }

                            </script>
                        </tr>
                        <tr>
                            <th scope="row" class="img"><img src="{{asset('assets/images/cat.jpg')}}" alt="" class="rounded-circle"></th>
                            <td>Informatique</td>
                            <td>United states</td>
                            <td>
                                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">Voir Offre</button>
                                <a href="#"><button id="post" class="btn btn-primary btn-sm" >Postuler</button></a>
                                <a href="#"><button id="annuler" class="btn btn-danger btn-sm d-none" >Annuler</button></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div> -->
<div class="container mt-3 mb-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <table class="table table-info table-hover table-bordered border-primary">
            <thead>
                <tr>
                    <th scope="col">Entreprise</th>
                    <th scope="col">DOMAINE</th>
                    <th scope="col">Emplacement</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
            @foreach($offers as $offer)
                <tr>
                    <th scope="row" class="img"><img src="{{ asset('assets/images/'.$offer->path)}}" alt="" class="rounded-circle"></th>
                    <td>{{ $offer->domaine }}-{{ $offer->id }}</td>
                    <td>{{ $offer->ville }}</td>
                    <td>
                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal-{{ $offer->id }}">Voir Offre</button>
                        <a href="#"><button id="post-{{ $offer->id }}" class="btn btn-primary btn-sm" onclick="toggleButtons({{ $offer->id }})">Postuler</button></a>
                        <a href="#"><button id="annuler-{{ $offer->id }}" class="btn btn-danger btn-sm d-none" onclick="toggleButtons({{ $offer->id }})">Annuler</button></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        </div>
    </div>
<!-- Candidat Home no table -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card w-100 mb-5">
                    <div class="card-body">
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
                        <div class="head_post d-flex">
                            <div>
                                <img src="{{ asset('assets/images/oracle.png')}}" class="rounded-circle profile-pic mr-3" alt="profil_img">
                            </div>
                            <div>
                                <h5 class="mb-0 mt-3 ms-2 font-weight-normal">Oracle Corporation</h5>
                            </div> 
                            <div class="dropdown">
                                <button class="btn point" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-ellipsis"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><button class=" btn dropdown-item" type="button"><i class="fa-solid fa-bookmark"></i>&nbsp;&nbsp;Save post</button></li>
                                    <li><button class=" btn dropdown-item" type="button"><i class="fa-solid fa-flag"></i>&nbsp;&nbsp;Report post</button></li>
                                </ul>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center gap-3">
                            <span class="text text-muted">#Formation</span>
                            <span class="text text-muted">#Web</span>
                            <span class="text text-muted">#Casablanca</span>
                        </div>
                        <div>
                            <span class="text text-muted">From: 12-05-2023</span><br>
                            <span class="text text-muted">To: 12-06-2023</span>
                        </div>
                        <div>
                            <p>𝙂𝙤𝙤𝙜𝙡𝙚 𝘽𝙖𝙧𝙙 𝘼𝙄 is an incredibly powerful tool that can help digital marketers to create high-quality content, engage with customers more effectively, gain valuable insights into customer behavior, and save time.
                                 As AI technology continues to evolve, 𝘽𝙖𝙧𝙙 will undoubtedly become an even more essential tool for businesses looking to stay ahead of the curve and thrive in an increasingly competitive digital landscape.
                                Try for free: https://www.bardaiinsights.co
                            </p>
                        </div>
                        <div>
                            <img src="{{ asset('assets/photos/google.jpg')}}" alt="" class="w-100 h-auto">
                        </div>
                        <div class="fiter d-flex mt-3">
                            <button class="btn btn-outline-secondary mt-3">
                                Postuler
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Candidat offres Modle -->
@foreach($offers as $offer)
    <div class="modal fade" id="exampleModal-{{ $offer->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="card w-100 mb-5">
                        <div class="card-body">
                            <div class="head_post d-flex gap-5">
                                <div class="d-flex">
                                    <div>
                                        <img src="{{ asset('assets/images/'.$offer->path)}}" class="rounded-circle profile-pic mr-3" alt="profil_img">
                                    </div>
                                    <div>
                                        <h5 class="mb-0 mt-3 ms-2 font-weight-normal">{{ $offer->nom }}</h5>
                                    </div> 
                                </div>
                                <div class="dropdown">
                                    <button class="btn point" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><button class=" btn dropdown-item" type="button"><i class="fa-solid fa-bookmark"></i>&nbsp;&nbsp;Save post</button></li>
                                        <li><button class=" btn dropdown-item" type="button"><i class="fa-solid fa-flag"></i>&nbsp;&nbsp;Report post</button></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center gap-3">
                                <span class="text text-muted">#{{ $offer->categorie }}</span>
                                <span class="text text-muted">#{{ $offer->domaine }}</span>
                                <span class="text text-muted">#{{ $offer->ville}}</span>
                            </div>
                            <div>
                                <span class="text text-muted">From: {{ $offer->debut }}</span><br>
                                <span class="text text-muted">To: {{ $offer->fin }}</span>
                            </div>
                            <div>
                                <p>
                                    {{ $offer->descriptionOffre }}
                                </p>
                            </div>
                            <div>
                                <img src="{{ asset('assets/images/'.$offer->pathOffre)}}" alt="" class="w-100 h-auto">
                            </div>
                            <div class="fiter d-flex mt-3">
                                <button class="btn btn-outline-secondary mt-3">
                                    Postuler
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
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


@extends('layouts.app')
@section('profile')

<style>
    body{
        background-color: #37517e;
    }
</style>

@if(session('success'))
<div id="success-message" class="row justify-content-center mt-4">
    <div class="col-md-4">
        <div style="background:#000;" class="alert alert-success mt-6 justify-content-center">
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
@if (Auth::user()->role == 2)
<!-- Candidat -->
    <div class="container mt-4" >
        <div class="main-body">
    
<!-- Nav -->
        <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ul class="nav nav-tabs">
                <li class="nav-item btn">
                    <a class="nav-link active text text-dark" aria-current="page" href="#Mescandidatures">Mes Candidatures</a>
                </li>
                <li class="nav-item btn">
                    <a class="nav-link text text-dark" href="{{route('monCv')}}">Mon CV</a>
                </li>
                <li class="nav-item btn">
                    <a class="nav-link text text-dark" href="#messauvgardes">Mes sauvgardes</a>
                </li>
                <li class="nav-item dropdown btn">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#interet">
                        Intérets
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="interet" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Intérets</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <!-- modal body -->
                                <div class="modal-body">
                                    <div class="" role="group" aria-label="Basic checkbox toggle button group">
                                        <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                                        <label class="btn btn-outline-primary mt-2" for="btncheck1">Disign graphique</label>

                                        <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
                                        <label class="btn btn-outline-primary mt-2" for="btncheck2">Comptabilité</label>

                                    <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
                                    <label class="btn btn-outline-primary mt-2" for="btncheck3">Photoshop</label>

                                    <input type="checkbox" class="btn-check" id="btncheck4" autocomplete="off">
                                    <label class="btn btn-outline-primary mt-2" for="btncheck4">Illustration</label>

                                    <input type="checkbox" class="btn-check" id="btncheck5" autocomplete="off">
                                    <label class="btn btn-outline-primary mt-2" for="btncheck5">Juridique</label>

                                    <input type="checkbox" class="btn-check" id="btncheck6" autocomplete="off">
                                    <label class="btn btn-outline-primary mt-2" for="btncheck6">Finance</label>

                                    <input type="checkbox" class="btn-check" id="btncheck7" autocomplete="off">
                                    <label class="btn btn-outline-primary mt-2" for="btncheck7">Web scraping</label>

                                    <input type="checkbox" class="btn-check" id="btncheck8" autocomplete="off">
                                    <label class="btn btn-outline-primary mt-2" for="btncheck8">Marketing</label>

                                    <input type="checkbox" class="btn-check" id="btncheck9" autocomplete="off">
                                    <label class="btn btn-outline-primary mt-2" for="btncheck9">eCommerce</label>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save</button>
                                </div>
                            </div>    
                        </div>
                    </div>   
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text text-dark" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                    <i class="fa-sharp fa-solid fa-bell"></i>
                    @if($count)
                        <span style="display: inline-block;justify-content: center; color: #fff; background-color: red; height: 20px; width: 20px;border-radius:10px;">&nbsp;{{$count}}</span>
                    @endif
                    </a>
                    <ul class="dropdown-menu" style="background-color: #abdbe3;">
                        @foreach($notifications as $notification)
                        <li onclick="flashNotification('offre-{{ $notification->offre }}');">
                            <a class="dropdown-item" href="#offre-{{ $notification->offre }}"  style="display: flex; color: #111;">
                                <img src="{{ asset('assets/images/'.$notification->pathOffre)}}" alt="notif" class="rounded-circle" width="50">
                                &nbsp;{{$notification->text}}
                            </a>
                        </li>
                        @endforeach
                        <li><a class="dropdown-item" href="#"></a></li>
                    </ul>
                </li>
                <li class="nav-item btn">
                    <a class="text text-dark" href="#" role="button" aria-expanded="false">
                        <i class="fa-solid fa-message"></i>
                        
                            <span style="display: inline-block;justify-content: center; color: #fff; background-color: red; height: 20px; width: 20px;border-radius:10px;">&nbsp;</span>
                    </a>
                </li>

            </ul>
        </nav>
<!-- /Nav -->
<!-- Candidat body -->
        <div class="row gutters-sm">
            <div class="col-md-2">
                <div class="card pb-5">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            @if($user->path)
                                <img src="{{ asset('assets/images/'.$user->path)}}" alt="Admin" class="rounded-circle" width="150">
                            @else
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                            @endif
                                <div class="mt-3">
                                    <h3>{{$user->nom}}<br>{{$user->prenom}}</h3>
                                    <p class="text-secondary mb-1">{{$user->domaine}}</p>
                                    <p class="text-muted font-size-sm">{{$user->adresse}}</p>
                                    <!-- <button class="btn btn-primary">Follow</button>
                                    <button class="btn btn-outline-primary">Message</button> -->
                                </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- second Card -->
                <div class="col-md-10">
                    <div class="row gutters-sm">
                        <div class="col-sm-6 mb-3">
                            <div class="card mb">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Nom</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                        {{$user->nom}}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Prenom</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                        {{$user->prenom}}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                        <h6 class="mb-0">Email</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                        {{$user->email}}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                        <h6 class="mb-0">Mot de passe</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            ************
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                        <h6 class="mb-3">Numèro de téléphone</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary" >
                                        {{$user->tel}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
<!-- third Card -->    
            <div class="col-sm-6 mb-3">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Date de naissance</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{$info->age}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Adresse</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                            {{$user->adresse}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                            <h6 class="mb-0">Ville</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                            {{$user->ville}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Région</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                            {{$user->region}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-12">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal">
                                    Modifier Profile
                                </button>
<!-- Modal Edit Profile candidat -->
                                <div class="modal fade edit" id="modal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Profile Settings</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>                         
                                            <form method="POST" action="{{ route('users.update', $user->id) }}" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-body">
                                                    <div class="container rounded mt-5 mb-5">
                                                        <div class="row">
                                                            <div class="col-md-2 border-right">
                                                                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                                                                    <img class="rounded-circle mt-5" width="150px" src="{{asset('assets\photos\pic1.jpg')}}" onClick="triggerClick()" id="postDisplay">
                                                                    <input type="file" name="image" onChange="displayImage(this)" id="postImage" class="form-control" accept="image/*" style="display: none;">
                                                                    <h3 class="font-weight-bold">{{$user->nom}}<br>{{$user->prenom}}</h3><span class="text-black-50">{{$user->email}}</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-5 border-right">
                                                                <div class="p-3 py-5">
                                                                    <!-- <div class="d-flex justify-content-between align-items-center mb-3">
                                                                        <h4 class="text-right">Profile Settings</h4>
                                                                    </div> -->
                                                                    <div class="row mt-2 form">
                                                                        <input type="hidden" class="form-control" name="user_id" id="nom" value="{{$user->id}}">
                                                                        <div class="col-md-6">&nbsp;&nbsp;<label class="labels">Nom</label><input type="text" class="form-control mt-2 mb-2" name="nom" id="nom" value="{{$user->nom}}"></div>
                                                                        <div class="col-md-6">&nbsp;&nbsp;<label class="labels">Prenom</label><input type="text" class="form-control mt-2 mb-2" name="prenom" id="prenom" value="{{$user->prenom}}" ></div>
                                                                    </div>
                                                                    <div class="row mt-3">
                                                                        <div class="col-md-12">&nbsp;&nbsp;<label class="labels">Numèro de tétéphone</label><input type="tel" class="form-control mt-2 mb-2" name="tel" id="tel" value="{{$user->tel}}"></div>
                                                                        <div class="col-md-12">&nbsp;&nbsp;<label class="labels">Email</label><input type="email" class="form-control mt-2 mb-2" name="email" id="email" value="{{$user->email}}"></div>
                                                                        <div class="col-md-12">&nbsp;&nbsp;<label class="labels">Mot de passe</label><input type="password" class="form-control mt-2 mb-2" name="mot" id="mot" value=""></div>             
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <div class="p-3 py-5">
                                                                    <!-- <br><br><br> -->
                                                                    <div class="col-md-12">&nbsp;&nbsp;<label class="labels">Addresse</label>
                                                                    <input type="text" class="form-control mt-2 mb-2" name="adresse" id="adresse" value="{{$user->adresse}}"></div>
                                                                    <div class="col-md-12">&nbsp;&nbsp;<label class="labels">Ville</label>
                                                                    <input type="text" class="form-control mt-2 mb-2" name="ville" id="ville" value="{{$user->ville}}"></div>
                                                                    <div class="col-md-12">&nbsp;&nbsp;<label class="labels">Région</label>
                                                                    <input type="text" class="form-control mt-2 mb-2" name="region" id="region" value="{{$user->region}}"></div>
                                                                    <div class="col-md-12">&nbsp;&nbsp;<label class="labels">Date de naissance</label>
                                                                    <input type="date" class="form-control mt-2 mb-2" name="age" id="age" value="{{$info->age}}"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>              
                    </div>
                </div>
            </div>

            </div>
        </div>
<!-- Candidat Mes candidatures table -->
    <h1 id="Mescandidatures" class="text text-center text-light">Mes Candidatures</h1>
        @if($mesCandidatures->isEmpty())
                <h3 class="text-center">Aucune candidature trouvée ...</h3>
        @else
            <div class="container mt-3 mb-4">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <table style="background:#cff4fc;" class="table table-info table-hover table-bordered border-primary">
                            <thead>
                                <tr>
                                    <th scope="col">Offres</th>
                                    <th scope="col">Categorie</th>
                                    <th scope="col">Domaine</th>
                                    <th scope="col">Emplacement</th>
                                    <th scope="col">Etat</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($mesCandidatures as $offre)
                                <tr id="offre-{{ $offre->id }}">
                                    <th scope="row" class="img"><img src="{{ asset('assets/images/'.$offre->pathOffre)}}" alt="no image"></th>
                                    <td class="offre-{{ $offre->id }}">{{ $offre->categorie }}</td>
                                    <td class="offre-{{ $offre->id }}">{{ $offre->domaine }}</td>
                                    <td class="offre-{{ $offre->id }}">{{ $offre->city }}</td>
                                    <td class="offre-{{ $offre->id }}">{{ $offre->etat }}</td>
                                    <td style="display:flex;gap:20px;">
                                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#Candidature-{{ $offre->id }}">Voir Offre</button>
                                        <form action="{{ route('candidatures.delete', $offre->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="offre_id" value="{{ $offre->id }}">
                                            <button tupe="submit" class="btn btn-danger btn-sm">Annuler</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @endif

<!-- voirs Mes candidatures details -->

    @foreach($mesCandidatures as $offre)
    <div class="modal fade" id="Candidature-{{ $offre->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <img src="{{ asset('assets/images/'.$offre->path)}}" class="rounded-circle profile-pic mr-3" alt="profil_img">
                            </div>
                            <div>
                                <h5 class="mb-0 mt-3 ms-2 font-weight-normal">{{ $offre->nom }}</h5>
                            </div> 
                            <div class="dropdown">
                                <button class="btn point" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-ellipsis"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <div class="d-flex">
                                        <i class="fa-solid fa-flag p-2"></i>
                                        <li><a class="dropdown-item" href="#">Signaler l'offre</a></li>
                                    </div>
                                </ul>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center gap-3">
                            <span class="text text-muted">#{{ $offre->categorie }}</span>
                            <span class="text text-muted">#{{ $offre->domaine }}</span>
                            <span class="text text-muted">#{{ $offre->city }}</span>
                        </div>
                        <div>
                            <span class="text text-muted">From: {{ $offre->debut}}</span><br>
                            <span class="text text-muted">To: {{ $offre->fin }}</span>
                        </div>
                        <div>
                            <p>{{ $offre->descriptionOffre }}</p>
                        </div>
                        <div class="w-100" style="display:flex;">
                            <img src="{{ asset('assets/images/'.$offre->pathOffre)}}" alt="" class="w-50" style="max-height: 250px;display: block; margin: 0 auto;">
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
    </div>
    @endforeach
<!-- /VOIR OFFRE -->


<!-- Table Sauvgards -->
    <h1 id="messauvgardes" class="text text-center text-light">Mes Sauvegardes</h1>
    @if($offres->isEmpty())
            <h3 class="text-center">Aucune Sauvgardes trouvée ...</h3>
    @else
    <div class="container mt-3 mb-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <table style="background:#cff4fc;" class="table table-info table-hover table-bordered border-primary">
                    <thead>
                        <tr>
                            <th scope="col">Recruteur</th>
                            <th scope="col">Catégorie</th>
                            <th scope="col">Domaine</th>
                            <th scope="col">Emplacement</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($offres as $offre)
                        <tr>
                            <th scope="row" class="img"><img src="{{ asset('assets/images/'.$offre->path)}}" alt="" class="rounded-circle"></th>
                            <td>{{ $offre->categorie }}</td>
                            <td>{{ $offre->domaine }}</td>
                            <td>{{ $offre->city }}</td>
                            <td style="display:flex;gap:10px;">
                                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#sauvgard-{{ $offre->id }}">Voir Offre</button>
                                <form action="{{ route('candidatures.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="offre_id" value="{{ $offre->id }}">
                                    <input type="hidden" name="recruteur_id" value="{{ $offre->recruteur_id }}">
                                    <button type="submit" class="btn btn-primary btn-sm">Postuler</button>
                                </form>
                                <form action="" method="POST">
                                    @csrf
                                    <input type="hidden" name="offre_id" value="{{ $offre->id }}">
                                    <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endif
<!-- voirs Mes sauvgards details -->

    @foreach($offres as $offre)
    <div class="modal fade" id="sauvgard-{{ $offre->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <img src="{{ asset('assets/images/'.$offre->path)}}" class="rounded-circle profile-pic mr-3" alt="profil_img">
                            </div>
                            <div>
                                <h5 class="mb-0 mt-3 ms-2 font-weight-normal">{{ $offre->nom }}</h5>
                            </div> 
                            <div class="dropdown">
                                <button class="btn point" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-ellipsis"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <div class="d-flex">
                                        <i class="fa-solid fa-flag p-2"></i>
                                        <li><a class="dropdown-item" href="#">Signaler l'offre</a></li>
                                    </div>
                                </ul>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center gap-3">
                            <span class="text text-muted">#{{ $offre->categorie }}</span>
                            <span class="text text-muted">#{{ $offre->domaine }}</span>
                            <span class="text text-muted">#{{ $offre->city }}</span>
                        </div>
                        <div>
                            <span class="text text-muted">From: {{ $offre->debut}}</span><br>
                            <span class="text text-muted">To: {{ $offre->fin }}</span>
                        </div>
                        <div>
                            <p>{{ $offre->descriptionOffre }}</p>
                        </div>
                        <div class="w-100" style="display:flex;">
                            <img src="{{ asset('assets/images/'.$offre->pathOffre)}}" alt="" class="w-50" style="max-height: 250px;display: block; margin: 0 auto;">
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
    </div>
    @endforeach
<!-- /voirs Mes sauvgards details -->
<!-- /Candidat -->
<style>
    .button-active {
  background-color: grey!important;
  
  transition: background-color 2s;
}
</style>
<script>
function flashNotification(className) {
  var buttons = document.getElementsByClassName(className);

  for (var i = 0; i < buttons.length; i++) {
    buttons[i].classList.add('button-active'); // Activate each button with the specified class
    setTimeout(function(button) {
      button.classList.remove('button-active'); // Remove 'button-active' class after 5 seconds
    }, 5000, buttons[i]);
  }
}

</script>
@else
<!-- Recruteur -->
    <div class="container mt-4">
        <div class="main-body">
                    <nav aria-label="breadcrumb" class="main-breadcrumb">
                        <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#mespost">Mes Offres</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('apropos')}}">A propos</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text text-dark" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                                    <i class="fa-regular fa-bell fa-lg"></i>
                                    @if($count)
                                        <span style="display: inline-block;justify-content: center; color: #fff; background-color: red; height: 20px; width: 20px;border-radius:10px;">&nbsp;{{$count}}</span>
                                    @endif
                                    </a>
                                    <ul class="dropdown-menu" style="background-color: #abdbe3;">
                                        @foreach($notifications as $notification)
                                        <li>
                                            <a class="dropdown-item" href="#" style="display: flex; color: #111;" data-bs-toggle="modal" data-bs-target="#modalCandidature-{{ $notification->offre }}">
                                                <img src="{{ asset('assets/images/'.$notification->path)}}" alt="notif" class="rounded-circle" width="50">
                                                &nbsp;{{$notification->text}}
                                            </a>
                                        </li>
                                        @endforeach
                                        <li><a class="dropdown-item" href="#"></a></li>
                                    </ul>
                                </li>
                        </ul>
                    </nav>
<!-- /Nav -->
<!-- recruteur body -->
                    <div class="row gutters-sm">
                        <div class="col-md-2">
                            <div class="card pb-5">
                                <div class="card-body">
                                    <div class="d-flex flex-column align-items-center text-center">
                                        @if($user->path)
                                        <img src="{{ asset('assets/images/'.$user->path)}}" alt="Admin" class="rounded-circle" width="150">
                                        @else
                                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                                        @endif
                                        <div class="mt-3">
                                            <h4>{{$user->nom}} {{$user->prenom}}</h4>
                                            <p class="text-secondary mb-1">{{$user->domaine}}</p>
                                            <p class="text-muted font-size-sm">{{$user->adresse}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="row gutters-sm">
                                <div class="col-sm-6 mb-3">
                                    <div class="card mb">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Entreprise</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                {{$user->nom}}
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                <h6 class="mb-0">Email</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                {{$user->email}}
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                <h6 class="mb-0">Mot de passe</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    ************
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                <h6 class="mb-3">Numèro de téléphone</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary" >
                                                {{$user->tel}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <div class="card mb-3">
                                        <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-3">
                                            <h6 class="mb-0">Date de création</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                            {{$info->date_creation}}
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Adresse</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                            {{$user->adresse}}
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                            <h6 class="mb-0">Ville</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                            {{$user->ville}}
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Région</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                            {{$user->region}}
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal2">
                                                    Modifier profile
                                                </button>

<!-- Modal Edit Profile recruteur -->
                                                <form method="POST" action="{{ route('users.update', $user->id) }}" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal fade edit" id="modal2" data-bs-backdrop="static" tabindex="-1" aria-labelledby="Label" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-dialog modal-xl">
                                                            <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="Label">Profile Settings</h1>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="container rounded mt-5 mb-5">
                                                                    <div class="row">
                                                                        <div class="col-md-2 border-right">
                                                                            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                                                                                <img class="rounded-circle mt-5" width="150px" src="{{asset('assets\photos\pic1.jpg')}}" onClick="triggerClick()" id="postDisplay">
                                                                                <input type="file" name="image" onChange="displayImage(this)" id="postImage" class="form-control" accept="image/*" style="display: none;">
                                                                                <span class="font-weight-bold">{{$user->nom}}</span>
                                                                                <span class="text-black-50">{{$user->adresse}}</span>
                                                                                
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-5 border-right">
                                                                            <div class="p-3 py-5">
                                                                                <div class="row mt-2">
                                                                                    <input type="hidden" class="form-control" name="user_id" id="nom" value="{{$user->id}}">
                                                                                    <div class="col-md-6">&nbsp;&nbsp;<label class="labels">Nom</label><input type="text" class="form-control mt-2 mb-2" name="nom" id="nom" value="{{$user->nom}}"></div>
                                                                                    <!-- <div class="col-md-6">&nbsp;&nbsp;<label class="labels">Prenom</label><input type="text" class="form-control mt-2 mb-2" name="prenom" id="prenom" value="{{$user->prenom}}" ></div> -->
                                                                                </div>
                                                                                <div class="row mt-3">
                                                                                    <div class="col-md-12">&nbsp;&nbsp;<label class="labels">Numèro de tétéphone</label><input type="tel" class="form-control mt-2 mb-2" name="tel" id="tel" value="{{$user->tel}}"></div>
                                                                                    <div class="col-md-12">&nbsp;&nbsp;<label class="labels">Email</label><input type="email" class="form-control mt-2 mb-2" name="email" id="email" value="{{$user->email}}"></div>
                                                                                    <div class="col-md-12">&nbsp;&nbsp;<label class="labels">Mot de passe</label><input type="password" class="form-control mt-2 mb-2" name="mot" id="mot" value=""></div>
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-5">
                                                                            <div class="p-3 py-5">
                                                                                <!-- <br><br><br> -->
                                                                                <div class="col-md-12">&nbsp;&nbsp;<label class="labels">Addresse</label><input type="text" class="form-control mt-2 mb-2" name="adresse" id="adresse" value="{{$user->adresse}}"></div>
                                                                                <div class="col-md-12">&nbsp;&nbsp;<label class="labels">Ville</label><input type="text" class="form-control mt-2 mb-2" name="ville" id="ville" value="{{$user->ville}}"></div>
                                                                                <div class="col-md-12">&nbsp;&nbsp;<label class="labels">Région</label><input type="text" class="form-control mt-2 mb-2" name="region" id="region" value="{{$user->region}}"></div>
                                                                                <div class="col-md-12">&nbsp;&nbsp;<label class="labels">Date de création</label><input type="date" class="form-control mt-2 mb-2" name="date_creation" id="creation" value="{{$info->date_creation}}"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                                                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>    
                        </div>  
                    </div>
                </div>
<!-- /Modal Edit Profile recruteur -->
            </div>
        </div>
<!-- /recruteur body -->
<!-- /Recruteur -->
@if (!$offres->isEmpty())
    <h1 id="mespost" class="text text-center text-light">Mes Offres</h1>
@endif

<!-- Afficher Offres -->
<div class="container ">
    <div class="row justify-content-center">
@foreach($offres as $offre)
        <div class="col-md-8">        
            <div class="card w-100 mb-4">
                <div class="card-body">
                    <div class="head_post d-flex">
                        <div>
                            <img src="{{ asset('assets/images/'.$user->path)}}" class="rounded-circle profile-pic mr-3" alt="profil_img">
                        </div>
                        <div>
                            <h5 class="mb-0 mt-3 ms-2 font-weight-normal">{{ $user->nom }}</h5>
                        </div> 
                        <div class="dropdown">
                            <button class="btn point" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-ellipsis"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <div class="d-flex">
                                    <i class="fa-solid fa-trash-can p-2"></i>
                                    <li><a class="dropdown-item" href="#">supprimer l'offre</a></li>
                                </div>
                            </ul>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center gap-3">
                        <span class="text text-muted">#{{ $offre->categorie }}</span>
                        <span class="text text-muted">#{{ $offre->domaine }}</span>
                        <span class="text text-muted">#{{ $offre->city }}</span>
                    </div>
                    <div>
                        <span class="text text-muted">From: {{ $offre->debut}}</span><br>
                        <span class="text text-muted">To: {{ $offre->fin }}</span>
                    </div>
                    <div>
                        <p>{{ $offre->descriptionOffre }}</p>
                    </div>
                    <div style="display:flex;">
                        <img src="{{ asset('assets/images/'.$offre->pathOffre)}}" alt="" class="w-50 h-auto" class="w-100" style="max-height: 500px;display: block; margin: 0 auto;">
                    </div>
                    <div class="fiter d-flex mt-3">
                        <button class="btn btn-outline-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#modalCandidature-{{ $offre->id }}">Voir Candidature</button>
                    </div>
                </div>
            </div>
        </div> 
@endforeach
    </div>
</div>

<!-- Modal Candidature -->
    @foreach ($offres as $offre)
            <div class="modal fade" id="modalCandidature-{{ $offre->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Les Candidatures</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                            <div class="modal-body">
                            @if ($offre->candidatures->isEmpty())
                                <p>Aucune candidature postulée pour cette offre.</p>
                            @else
                                @foreach ($offre->candidatures as $candidature)
                                    <div class="card w-100">
                                        <div class="card-body">
                                            <style>
                                                .candidats{
                                                    width: 100%;
                                                    position: relative;
                                                    display: flex;
                                                    justify-content: space-between;
                                                }
                                            </style>
                                            <div class="d-flex candidats">
                                                <div class="d-flex">
                                                    <div>
                                                        <img src="{{ asset('assets/images/'.$candidature->candidat->user->path)}}" class="rounded-circle profile-pic mr-3" alt="profil_img">
                                                    </div>
                                                    <div>
                                                        <h5 class="mb-0 mt-3 ms-2 font-weight-normal">
                                                        {{ $candidature->candidat->user->nom }}&nbsp;
                                                        {{ $candidature->candidat->user->prenom }}
                                                        </h5>
                                                    </div> 
                                                </div>
                                                <div class="d-flex gap-2 justify-content-end">
                                                    <p class="voir-btn btn btn-outline-secondary"> 
                                                        <a  href="{{ route('cvdetail', ['user_id' => $candidature->candidat->user->id, 'candidat_id' => $candidature->candidat->id])  }}">
                                                                <i class="fa-solid fa-eye"></i>
                                                                Voirs Cv
                                                        </a>
                                                    </p>
                                                    <p id="btn1" class="voir-btn btn btn-outline-secondary" data-offre="{{ $candidature->offre_id }}" data-user="{{ $candidature->candidat->user->id }}" data-action="Demandé à le voir" data-candidature="{{$candidature->id}}">
                                                        <i class="fa-solid fa-handshake"></i>
                                                         Demandé à le voir
                                                    </p>
                                                    <p id="btn2" class="accepter-btn btn btn-outline-success" data-offre="{{ $candidature->offre_id }}" data-user="{{ $candidature->candidat->user->id }}" data-action="accepter" data-candidature="{{$candidature->id}}">
                                                        <i class="fa-solid fa-circle-check"></i>
                                                         Accepter
                                                    </p>
                                                    <p id="btn3" class="rejeter-btn btn btn-outline-danger" data-offre="{{ $candidature->offre_id }}" data-user="{{ $candidature->candidat->user->id }}" data-action="rejeter" data-candidature="{{$candidature->id}}">
                                                        <i class="fa-solid fa-xmark"></i>
                                                         Rejeter
                                                    </p>
                                                    <p id="btn3" class=" btn btn-outline-secondary" data-offre="{{ $candidature->offre_id }}" data-user="{{ $candidature->candidat->user->id }}" data-action="rejeter" data-candidature="{{$candidature->id}}">
                                                        <i class="fa-solid fa-floppy-disk"></i>
                                                         Sauvegarder
                                                    </p>
                                                    

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                            </div>
                    </div>
                </div>
            </div>
    @endforeach
<!-- /modal candidature -->
<form  id="update" action="{{ route('change.etat') }}" method="POST">
    @csrf
    @method('PUT')

    <input type="hidden" name="offre_ID" value="">
    <input type="hidden" name="user" value="">
    <input type="hidden" name="candidature_id" value="">
    <input type="hidden" name="etat" value="">
</form>
<script>
    $(document).ready(function() {
        $("#btn1, #btn2, #btn3").click(function() {
            // alert("hey");
            // alert($(this).data('action'));
            // alert($(this).data('candidature'))
            var user = $(this).data('user');
            var offre = $(this).data('offre');
            var action = $(this).data('action');
            var candidature=$(this).data('candidature');
            // alert(offre);
            // alert(user);
            // Set the values in hidden inputs
            $('input[name="offre_ID"]').val(offre);
            $('input[name="user"]').val(user);
            $('input[name="etat"]').val(action);
            $('input[name="candidature_id"]').val(candidature);

            // Submit the form
            $('#update').submit();
        });

    });
</script>

@endif


@endsection

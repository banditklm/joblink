
@extends('layouts.app')
@section('profile')
@if (Auth::user()->role == 2)
<!-- Candidat -->
    <div class="container mt-4" >
        <div class="main-body">
    
<!-- Nav -->
        <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Mes Post</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Notification</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Une offre d'étude est disponible</a></li>
                        <li><a class="dropdown-item" href="#">Une offre de formation est disponible</a></li>
                        <li><a class="dropdown-item" href="#">Une offre de stage est disponible</a></li>
                        <li><a class="dropdown-item" href="#">Une offre d'emploi est disponible</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Google vous envoyer une message</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('monCv')}}">Mon CV</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Mes sauvgardes</a>
                </li>
                <li class="nav-item dropdown">
                <!-- Button trigger modal -->
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Intérets
                </button>
                <!-- Button trigger modal -->

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                    <label class="btn btn-outline-primary" for="btncheck1">Disign graphique</label>

                    <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btncheck2">Comptabilité</label>

                    <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btncheck3">Photoshop</label>

                    <input type="checkbox" class="btn-check" id="btncheck4" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btncheck4">Illustration</label>

                    <input type="checkbox" class="btn-check" id="btncheck5" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btncheck5">Juridique</label>

                    <input type="checkbox" class="btn-check" id="btncheck6" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btncheck6">Finance</label>

                    <input type="checkbox" class="btn-check" id="btncheck7" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btncheck7">Web scraping</label>

                    <input type="checkbox" class="btn-check" id="btncheck8" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btncheck8">Marketing</label>

                    <input type="checkbox" class="btn-check" id="btncheck9" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btncheck9">eCommerce</label>

                </div>
                </div>    

                <!-- modal body -->
                <!-- modal footer -->
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
                </div>
                <!-- modal footer -->
                </div>
                </div>
                </div>
                <!-- Modal -->    
                </li>
            </ul>
        </nav>
    <!-- /Nav -->
    <!-- Candidat body -->
            <div class="row gutters-sm">
    <!-- first Card -->
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
                                            Edit Profile
                                        </button>
<!-- Modal Edit Profile candidat -->
                                        <div class="modal fade edit" id="modal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog modal-xl">
                                                <div class="modal-content">
        <!-- Modal header -->
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Profile Settings</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                            
        <!-- Modal body -->
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
        <!-- Modal footer -->
                                                                <div class="modal-footer">
                                                                    <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
        <!-- /modal -->
                                    </div>
                                </div>              
                            </div>
                        </div>
                    </div>
    <!-- /third Card --> 
            </div>
        </div>    
    </div>
<!-- /Candidat -->
@else
<!-- Recruteur -->
    <div class="container mt-4">
        <div class="main-body">
        
                <!-- Nav -->
                    <nav aria-label="breadcrumb" class="main-breadcrumb">
                        <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Mes Post</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('apropos')}}">A propos</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <!-- Button trigger modal -->
                                        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        Intérets
                                        </button>
                                    <!-- /Button trigger modal -->

                                    <!-- Modal -->
                                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <!-- Modal header -->
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Intérets</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                    <!-- Modal header -->
                                                    <!-- modal body -->
                                                        <div class="modal-body">
                                                            <div class="" role="group" aria-label="Basic checkbox toggle button group">
                                                                <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                                                                <label class="btn btn-outline-primary" for="btncheck1">Disign graphique</label>

                                                                <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
                                                                <label class="btn btn-outline-primary" for="btncheck2">Comptabilité</label>

                                                                <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
                                                                <label class="btn btn-outline-primary" for="btncheck3">Photoshop</label>

                                                                <input type="checkbox" class="btn-check" id="btncheck4" autocomplete="off">
                                                                <label class="btn btn-outline-primary" for="btncheck4">Illustration</label>

                                                                <input type="checkbox" class="btn-check" id="btncheck5" autocomplete="off">
                                                                <label class="btn btn-outline-primary" for="btncheck5">Juridique</label>

                                                                <input type="checkbox" class="btn-check" id="btncheck6" autocomplete="off">
                                                                <label class="btn btn-outline-primary" for="btncheck6">Finance</label>

                                                                <input type="checkbox" class="btn-check" id="btncheck7" autocomplete="off">
                                                                <label class="btn btn-outline-primary" for="btncheck7">Web scraping</label>

                                                                <input type="checkbox" class="btn-check" id="btncheck8" autocomplete="off">
                                                                <label class="btn btn-outline-primary" for="btncheck8">Marketing</label>

                                                                <input type="checkbox" class="btn-check" id="btncheck9" autocomplete="off">
                                                                <label class="btn btn-outline-primary" for="btncheck9">eCommerce</label>

                                                            </div>
                                                        </div>    
                                                            
                                                    <!-- modal body -->
                                                    <!-- modal footer -->
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save</button>
                                                        </div>
                                                    <!-- modal footer -->
                                                </div>
                                            </div>
                                        </div>
                                    <!-- /Modal -->    
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
                                            <!-- <button class="btn btn-primary">Follow</button>
                                            <button class="btn btn-outline-primary">Message</button> -->
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
                                                    Edit Profile
                                                </button>

 <!-- Modal -->
                                                <form method="POST" action="{{ route('users.update', $user->id) }}" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal fade edit" id="modal2" data-bs-backdrop="static" tabindex="-1" aria-labelledby="Label" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-dialog modal-xl">
                                                            <div class="modal-content">
<!-- Modal Edit Profile recruteur -->
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
                                                                                <div class="col-md-12">&nbsp;&nbsp;<label class="labels">Region</label><input type="text" class="form-control mt-2 mb-2" name="region" id="region" value="{{$user->region}}"></div>
                                                                                <div class="col-md-12">&nbsp;&nbsp;<label class="labels">Date de création</label><input type="date" class="form-control mt-2 mb-2" name="date_creation" id="creation" value="{{$info->date_creation}}"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                            <button type="submit" class="btn btn-primary">Save changes</button>
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
                <!-- /recruteur body -->
            </div>
        </div>
    <!-- /Recruteur --> 
@endif


@endsection

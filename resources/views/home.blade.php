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
                                        <form action="">
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-4">
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
                                                    <div class="col-md-4">
                                                        <textarea name="description" id="description" cols="39" rows="3" placeholder="Ajouter quelque chose!"></textarea>
                                                        <img src="{{asset('assets/photos/hire.jpg')}}" alt="" class="rounded mx-auto d-block w-100">
                                                    </div>
                                                    <div class="col-md-4">
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
                                                <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
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
<!-- Afficher Offres -->
            <div class="card w-100 mb-4">
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
                        <button class="btn btn-outline-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#modalCandidature" >Voir Candidature</button>
                    </div>
                </div>
            </div>
            <div class="card w-100 mb-4">
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
                                <!-- <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li> -->
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
            </div>
            
<!-- /afficher Offres -->

        </div>
    </div>
@else
<!-- Candidat Home -->
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
@endif

@endsection

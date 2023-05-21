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
                                                    <div id="parent" class="col-md-4">
                                                        <select id="mySelect" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                                            <option selected disabled>Catégorie</option>
                                                            <option value="1">Etude</option>
                                                            <option value="2">Formation</option>
                                                            <option value="3">Stage</option>
                                                            <option value="4">Emploi</option>
                                                        </select>
                                                        <select id="etude" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                                            <option selected disabled>Niveau</option>
                                                            <option value="1">Bac</option>
                                                            <option value="2">Licence</option>
                                                            <option value="3">Master</option>
                                                            <option value="4">Doctorat</option>
                                                        </select>
                                                        <select id="formation" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                                            <option selected disabled>formation ?</option>
                                                            <option value="1">Data</option>
                                                            <option value="2">Design</option>
                                                            <option value="3">Web</option>
                                                            <option value="4">Marketing</option>
                                                        </select>
                                                        <select id="stage" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                                            <option selected disabled>stage ?</option>
                                                            <option value="1">Technologie de l'information (TI)</option>
                                                            <option value="2">Finance et comptabilité</option>
                                                            <option value="3">Ingénierie</option>
                                                            <option value="4">Tourisme et hôtellerie </option>
                                                        </select>
                                                        <select id="emploi" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                                            <option selected disabled>emploi ?</option>
                                                            <option value="1">emploi 1</option>
                                                            <option value="2">emploi 2</option>
                                                            <option value="3">emploi 3</option>
                                                            <option value="4">emploi 4</option>
                                                        </select>

                                                    </div>
                                                    <script>
                                                        var selectElement = document.getElementById('mySelect');
                                                        var  etude     = document.getElementById('etude');
                                                        var  formation = document.getElementById('formation');
                                                        var  stage     = document.getElementById('stage');
                                                        var  emploi    = document.getElementById('emploi');
                                                        selectElement.addEventListener('change', function() {
                                                            var s = selectElement.value;
                                                            etude.classList.add('d-none');
                                                            formation.classList.add('d-none');
                                                            stage.classList.add('d-none');
                                                            emploi.classList.add('d-none');

                                                           
                                                            
                                                            if(s==1)
                                                                etude.classList.remove('d-none');
                                                                if(s==2)
                                                                            formation.classList.remove('d-none');
                                                                            if(s==3)
                                                                            stage.classList.remove('d-none');
                                                                            if(s==4)
                                                                            emploi.classList.remove('d-none');
                                                                   


                                                                // if (selectedOption === '1'){
                                                                //     etude.classList.remove('d-none');
                                                                //     etude.classList.add('d-none');
                                                                // }else if (selectedOption === '2'){
                                                                //     prenom.classList.add('d-none');
                                                                // }

                                                            });
                                                    </script>
                                                    <div class="col-md-4">
                                                        <textarea name="description" id="description" cols="39" rows="3" placeholder="Ajouter quelque chose!"></textarea>
                                                        <img src="{{asset('assets/photos/hire.jpg')}}" alt="" class="rounded mx-auto d-block w-100">
                                                    </div>
                                                    <div class="col-md-4">
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
<!-- Afficher Offre -->
            <!-- <div class="col-md-6"> -->
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
                                <button class="btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                    </div>
                </div>
            <!-- </div> -->
<!-- /afficher Offre -->
        </div>
    </div>

<!-- Candidat home -->
    <div class="container">

    </div>




@endsection

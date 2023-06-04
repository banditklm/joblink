i need to Post offre with laravel 8
i have 3 table already exist
Recruteurs Offres Adresses
attribut for offre is 
(recruteur_id,adresse_id,description,debut,fin,photo,categorie,domaine)
recruteur_id and adresse_id is foreignkey
for adresse
-attribut is (ville,region,pays,add1,add2,codepostale)
i need for you to help me create :
-form html
-Route
name of controller is UserController already exist
Model name is Offre already exist
Model name is Adresse already exist

                        <form action="{{ route('candidatures.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="offre_id" value="{{ $offer->id }}">
                            <button tupe="submit"  id="post-{{ $offer->id }}" class="btn btn-primary btn-sm" onclick="toggleButtons({{ $offer->id }})">Postuler</button>
                        </form>
                        <form action="">
                            <button type="submit" id="annuler-{{ $offer->id }}" class="btn btn-danger btn-sm d-none" onclick="toggleButtons({{ $offer->id }})">Annuler</button>
                        </form>


            









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

















<!-- modal Voir Offre -->
    <!-- Modal -->
        <div class="modal fade" id="VoirOffre" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="card w-100 mb-5">
                            <div class="card-body">
                                <div class="head_post d-flex">
                                    <div>
                                        <img src="{{ asset('assets/images/oracle.png')}}" class="rounded-circle profile-pic mr-3" alt="profil_img">
                                    </div>
                                    <div>
                                        <h5 class="mb-0 mt-3 ms-2 font-weight-normal">{{ $offer->nom }}</h5>
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




<!-- /modal Voir Offre -->







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







                <form action="{{ route('candidatures.store') }}" method="POST">
                            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#VoirOffre-{{ $offer->id }}">Voir Offre</button>
=======
                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal-{{ $offer->id }}">Voir Offre</button>
                        <form action="{{ route('candidatures.store') }}" method="POST">
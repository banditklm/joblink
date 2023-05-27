$table->id();
            $table->unsignedBigInteger('rec_id');
            $table->unsignedBigInteger('adr_id');
            $table->string('description')->nullable();
            $table->date('debut')->nullable();
            $table->date('fin')->nullable();
            $table->string('path')->nullable();
            $table->string('categorie')->nullable();
            $table->string('domaine')->nullable();
            $table->foreign('rec_id')->references('id')->on('recruteurs');
            $table->foreign('adr_id')->references('id')->on('adresses');
            $table->timestamps();
















<!-- Candidat home -->
            <div class="container">
                <div class="row justify-content-center">
<!-- Afficher Offres in Table -->
                    <div class="card w-50 mb-5">
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
                                    <span class="text-muted">Deplacement </span>
                                    <div class=" d-flex justify-content-end gap-2">
                                        <span><button class="btn btn-outline-secondary">Postuler</button></span>
                                        <span><a href="#"><button class="btn btn-outline-secondary">Voir candidature</button></a></span>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card w-50 mb-5">
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
                                    <span class="text-muted">Deplacement </span>
                                    <div class=" d-flex justify-content-end gap-2">
                                        <span><button class="btn btn-outline-secondary">Postuler</button></span>
                                        <span><a href="#"><button class="btn btn-outline-secondary">Voir candidature</button></a></span>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                      
<!-- Afficher Offres -->
                    <div class="card w-50 mb-5">
                        <div class="card-body">
                            <div class="head_post d-flex justify-content-center">
                                <div>
                                    <img src="{{ asset('assets/images/woman2.jpg')}}" class="rounded-circle profile-pic mr-3" alt="profil_img">
                                </div>
                                <div>
                                    <h5 class="mb-0 mt-3 ms-2 font-weight-normal">Google</h5>
                                </div> 
                                <div class="dropdown">
                                    <button class="btn point " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><button class=" btn dropdown-item" type="button"><i class="fa-solid fa-bookmark"></i>&nbsp;&nbsp;Save post</button></li>
                                        <li><button class=" btn dropdown-item" type="button"><i class="fa-solid fa-flag"></i>&nbsp;&nbsp;Report post</button></li>
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
                            <div class="fiter d-flex">
                                <button class="btn btn-outline-secondary mt-3">
                                    Postuler
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
  


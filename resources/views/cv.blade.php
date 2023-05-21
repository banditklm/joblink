<!-- <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="./project.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;900;1000&display=swap" rel="stylesheet">
        
    </head> 
    <body> -->

    
    @extends('layouts.app')
    @section('cv')








<!-- CV Display -->
    <div class="container-fluid row">
        <div class="face-1 col-md-3">
            <section class="cont-1">
                <div class="photos mt-4">
                    <div class="photo-1">
                        <img src="{{ asset('assets/images/'.$user->path)}} "alt="photo de profile" class="photo rounded-circle"/>
                    </div>
                </div>
                <div class="name">
                        <h1>
                            <strong >{{$user->nom}}<br>{{$user->prenom}}</strong>
                        </h1>
                </div>
                <div class="domain">
                    <h4><span>{{$user->domaine}}</span></h4>
                </div>

                <!-- <div class="edit">
                  <button type="button" class="mode" data-bs-toggle="modal" data-bs-target="#poste">
                    Edit mon Cv
                   </button> 
                </div> -->

                
            </section>
            <section class="cont-2">
                <div class="contacte ">
                    <span><h3><i class=" icon1 fa-solid fa-user"></i></h3></span>
                    <span><h3 class="text text-center">Contact</h3></span>
                </div>
                <div class="detailles">
                    <div class="detaill container-fluid">
                        <span><i class="fa-solid fa-phone"></i></span>phone :<span> {{$user->tel}} </span>
                    </div>
                    <div class="detaill container-fluid">
                        <span><i class="fa-solid fa-envelope"></i></span>email :<span> {{$user->email}} </span>
                    </div>
                    <div class="detaill container-fluid ">
                        <span><i class="fa-solid fa-house"></i></span><span>adresse: {{$user->adresse}}</span>
                    </div>
                </div>
            </section>
        </div>
        <div class="face-2 col-md-9"> 
<!-- Info Profile -->
            <section > 
                <div class="info" >
                    <div class="left d-flex gap-3">
                        <span><h3><i class=" icone2 fa-solid fa-user"></i></h3></span>
                        <span class="p1"><h3>Info Profil</h3></span>
                    </div>
                    <div class="right">
                        <button class="btn" data-bs-toggle="modal" data-bs-target="#editinfo"><i class="fa-solid fa-pencil"></i></button>
                    </div>

                    <div class="modal fade" id="editinfo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Ajouter info profile</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
							<form method="POST" action="{{ route('users.updateDescription', $user->id) }}">
                                @csrf
                                @method('PUT')
                                <div class="modal-body">
									<textarea name="description" id="info_profile"  placeholder="decrivez vous profile" cols="50" rows="5"></textarea>
								</div>
								<div class="modal-footer">
								<button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-primary">Save</button>
								</div>
							</form> 
                        </div>
                        </div>
                    </div>
                </div> 
                <div class="paragraphe"><p> 
                {{$user->description}} </p>
                </div>
            </section>
<!-- Experience -->
            <section class="experience" >
                <div  class="info">
                    <div class="left d-flex gap-3">
                        <span><h3><i class=" icone3 fa-sharp fa-solid fa-briefcase"></i></h3></span>
                        <span class="p1"><h3> EXPERIRNCES</h3></span>
                    </div>
                    <div class="right">
                        <button class="btn" data-bs-toggle="modal" data-bs-target="#editexperience" id="ajouter">Ajouter</button>
                    </div>

                    <div class="modal fade" id="editexperience" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Ajouter experience</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body" id="experiences">

                                    <form method="POST" action="{{ route('experiences.store') }}">
                                        @csrf

                                        <div class="form-group">
                                            <label for="Title">Title:</label>
                                            <select name="title" id="Title" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" required>
                                                <option selected disabled>Title</option>
                                                <option value="etude">Etude</option>
                                                <option value="2">Formation</option>
                                                <option value="3">Stage</option>
                                                <option value="4">Emploi</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="start_date">Start Date:</label>
                                            <input type="date" id="start_date" name="debut" class="form-control" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="end_date">End Date:</label>
                                            <input type="date" id="end_date" name="fin" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="description">Description:</label>
                                            <textarea id="description" name="description" class="form-control" rows="5" required></textarea>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Ajouter Experience</button>
                                        <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @foreach ($experiences as $experience)
                <div class="exp">

                    <div class="fl">
                        <span class="title"><strong>De  {{ $experience->debut }} A {{ $experience->fin }}  </strong></span>
                        <button >edit</button>
                        <form method="POST" action="{{ route('experiences.destroy', $experience->id) }}" onsubmit="return confirm('Are you sure you want to delete this experience?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>   
                    </div>
                    
                    <div class="paragraphe">
                        <strong>{{ $experience->title }}</strong>
                    </div>
                    <div class="description">
                        <span>{{ $experience->description }}</span>
                    </div>
                </div>
                @endforeach
            </section>
<!-- Diplome -->
            <section class="experience"  > 
                <div  class="info"> 
                    <div class="left d-flex gap-3">
                        <span><h3><i class="icone4 fa-solid fa-book-open"></i></h3></span>
                        <span class="p1"><h3>DIPLOMES</h3></span>
                    </div>
                    <div class="right">
                        <button class="btn" data-bs-toggle="modal" data-bs-target="#editdiplome"  id="ajouterdiplome"></button>
                        
                    </div>

                    <div class="modal fade" id="editdiplome" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Ajouter diplome</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body" id="diplomes">
                                
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Understood</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fl">
                    <span><h6><i class="fa-solid fa-circle-arrow-right"></i><h6></span>
                    <span><strong> 2012 - 2015 </strong></span>
                </div >
                <div class="paragraphe">
                    <strong>Junior Graphic DesignerBorcelle Studios</strong>
                </div>
                <div class="paragraphe">
                    <span>Working as graphic designer for 1 year Post Graduated in Website & Graphics Designing. Academic Excellence in Web Design.</span>
                </div>
                <div class="fl">
                    <span><h6><i class="fa-solid fa-circle-arrow-right"></i><h6></span>
                    <span><strong>2012 - 2015</strong><span>    
                </div>
                <div class="paragraphe">
                    <strong>Junior Graphic DesignerBorcelle Studios</strong>
                </div>
                <div class="paragraphe">
                    <span>Working as graphic designer for 1 year Post Graduated in Website & Graphics Designing. Academic Excellence in Web Design.</span>
                </div>
                <div class="fl">
                    <span><h6><i class="fa-solid fa-circle-arrow-right"></i><h6></span>
                    <span><strong>2012 - 2015</strong><span>
                </div>
                <div class="paragraphe"> 
                    <strong>Junior Graphic DesignerBorcelle Studios</strong>
                </div>
                <div class="paragraphe">
                    <span>Working as graphic designer for 1 year Post Graduated in Website & Graphics Designing. Academic Excellence in Web Design.</span>
                </div>      
            </section>
<!-- Competence -->
            <section class="experience"> 
                <div  class="info">
                    <div class="left d-flex gap-3">
                        <span><h3><i class="icone5 fa-solid fa-gear"></i></h3></span>
                        <span class="p1"><h3>COMPETENCE</h3></span>
                    </div>
                    <div class="right"> 
                        <button   class="btn" data-bs-toggle="modal" data-bs-target="#editcompetence"  id="ajoutercompetence"></button>
                    </div>
                    <div class="modal fade" id="editcompetence" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Ajouter compétence</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body" id="competences">
                            
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Understood</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="par paragraphe" >
                    <h6><i class="fa-solid fa-circle"></i>{{$user->competences}}</h6>
                    <h6><i class="fa-solid fa-circle"></i>Graphic & Web Design</h6>
                    <h6><i class="fa-solid fa-circle"></i>Graphic & Web Design</h6>
                    
                </div>
            </section>
<!-- Reference -->
            <section class="experience" >
                <div  class="info">
                    <div class="left d-flex gap-3">
                        <span><h3><i class="icone5 fa-solid fa-book"></i></h3></span>
                        <span class="p1"><h3>REFERENCE</h3></span>
                    </div>
                    <div class="right">
                        <button class="btn" data-bs-toggle="modal" data-bs-target="#editreference" id="ajouterreference"></button>
                    </div>
                    <div class="modal fade" id="editreference" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Ajouter reference</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body " id="references" >

                            
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Understood</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="paragraphe"> 
                    <strong>Junior Graphic </strong>
                </div>
                <div class="paragraphe">
                    <span>Wardiere Inc. / CEO</span>
                </div>
                <div class="paragraphe"> 
                    <strong>Junior Graphic </strong>
                </div>
                <div class="paragraphe">
                    <span>Wardiere Inc. / CEO</span>
                </div>
                <div class="paragraphe"> 
                    <strong>Junior Graphic</strong>
                </div>
                <div class="paragraphe">
                    <span>Wardiere Inc. / CEO</span>
                </div>
            </section>
        </div>
@endsection
<!-- </body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</html> -->
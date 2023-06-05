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
									<textarea name="description" id="info_profile"  placeholder="decrivez vous profile" cols="50" rows="5">{{$user->description}}</textarea>
								</div>
								<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
								<button type="submit" class="btn btn-primary">Enregister</button>
								</div>
							</form> 
                        </div>
                        </div>
                    </div>
                </div> 
                <div class="paragraphe">
                    <p>{{$user->description}} </p>
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
                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editexperience" id="ajouter">Ajouter</button>
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
                                            <label for="Title">Type Experience</label>
                                            <select name="title" id="Title" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" required>
                                            @foreach ($texperiences as $texperience)
                                                <option value="{{ $texperience->title }}">{{ $texperience->title }}</option>
                                            @endforeach
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
                        <span class="title"><strong><span class="text-muted"> De </span>{{ $experience->debut }}<span class="text-muted"> A </span>{{ $experience->fin }}</strong></span>
                        
<!-- experiences.update -->
                        <div class="modal fade" id="staticBackdrop-{{ $experience->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{ route('experiences.update', $experience->id) }}">
                                        @csrf
                                        @method('PUT')

                                        <div class="form-group">
                                            <label for="Title">Title:</label>
                                            <select name="title" id="Title" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" required>
                                                <option selected disabled>{{ $experience->title }}</option>
                                                <option value="Etude">Etude</option>
                                                <option value="Formation">Formation</option>
                                                <option value="Stage">Stage</option>
                                                <option value="Emploi">Emploi</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="start_date">Start Date:</label>
                                            <input type="date" id="start_date" name="debut" class="form-control" value="{{ $experience->debut }}" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="end_date">End Date:</label>
                                            <input type="date" id="end_date" name="fin" class="form-control" value="{{ $experience->fin }}" >
                                        </div>

                                        <div class="form-group">
                                            <label for="description">Description:</label>
                                            <textarea id="description" name="description" class="form-control" rows="5" required>{{ $experience->description }}</textarea>
                                        </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">modifier Experience</button>
                                            <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div> 
                    </div>
                    
                    <div class="paragraphe">
                        <strong>{{ $experience->title }}</strong>
                    </div>
                    <div class="description">
                        <span>{{ $experience->description }}</span>
                    </div>
                    <div class="handel">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop-{{ $experience->id }}">
                        Modifier
                        </button>
                        <form method="POST" action="{{ route('experiences.destroy', $experience->id) }}" onsubmit="return confirm('Are you sure you want to delete this experience?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>  
                    </div>
                </div>
                @endforeach
            </section>

<!-- Diplome --> 
<section class="experience"  > 
                <div  class="info"> 
                    <div class="left d-flex">
                        <span><h3><i class="icone4 fa-solid fa-book-open"></i></h3></span>
                        <span class="p1"><h3>DIPLOMES</h3></span>
                    </div>
                    <div class="right">
                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editdiplome" id="ajouter">Ajouter</button>
                    </div>
                    <div class="modal fade" id="editdiplome" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Ajouter diplome</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body" id="diplome">
                                    <form action="{{ route('diplomes.store') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="Title">Title:</label>
                                            <select name="title" id="Title" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" required>
                                                <option value="BAC">Bac</option>
                                                <option value="DEUG">Deug</option>
                                                
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
                                            <button type="submit" class="btn btn-primary">Ajouter Diplome</button>
                                            <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                        </div>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- @foreach ($experiences as $experience) -->
                <div class="exp">

                    <div class="fl">
                        <span class="title"><strong><span class="text-muted"> De </span>{{ $experience->debut }}<span class="text-muted"> A </span>{{ $experience->fin }}</strong></span>
                        
<!-- diplome.update -->
                        <div class="modal fade" id="modifierdiplome" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="modifier">Modifier diplome</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="">
                                        <!-- @csrf
                                        @method('PUT') -->

                                        <div class="form-group">
                                            <label for="Title">Title:</label>
                                            <select name="title" id="Title" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" required>
                                                <option selected disabled>{{ $experience->title }}</option>
                                                <option value="BAC">Bac</option>
                                                <option value="DEUG">Deug</option>
                                                <option value="DEUST">Deust</option>
                                                <option value="DUT">Dut</option>
                                                <option value="BTS">BTS</option>
                                                <option value="licence">licence</option>
                                                <option value="Licence  Professionnelle">Licence  Professionnelle</option>
                                                <option value="Master">Master</option>
                                                <option value="Master  Professionnelle">Master  Professionnelle</option>
                                                <option value="Doctorat">Doctorat</option>

                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="start_date">Start Date:</label>
                                            <input type="date" id="start_date" name="debut" class="form-control" value="{{ $experience->debut }}" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="end_date">End Date:</label>
                                            <input type="date" id="end_date" name="fin" class="form-control" value="{{ $experience->fin }}" >
                                        </div>

                                        <div class="form-group">
                                            <label for="description">Description:</label>
                                            <textarea id="description" name="description" class="form-control" rows="5" required>{{ $experience->description }}</textarea>
                                        </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">modifier Diplome</button>
                                            <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div> 
                    </div>
                    
                    <div class="paragraphe">
                        <strong>{{ $experience->title }}</strong>
                    </div>
                    <div class="description">
                        <span>{{ $experience->description }}</span>
                    </div>
                    <div class="handel">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modifierdiplome">
                        Modifier
                        </button>
                        <form method="POST" action="" onsubmit="return confirm('Are you sure you want to delete this diplome?')">
                            <!-- @csrf
                            @method('DELETE') -->
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>  
                    </div>
                </div>
                <!-- @endforeach -->
            </section>
<!-- Compétence -->            
            <section class="experience" > 
                <div  class="info"> 
                    <div class="left d-flex">
                        <span><h3><i class="icone5 fa-solid fa-gear"></i></h3></span>
                        <span class="p1"><h3>COMPETENCE</h3></span>
                    </div>


                    <div class="right">
                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editecompétence" id="ajouter">Ajouter</button>
                    </div>
<!-- compétence.ajouter -->
                    <div class="modal fade" id="editecompétence" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Ajouter compétence</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body" id="experience">

                                    <form method="POST" action="">
                                        <!-- @csrf -->
                                        <div class="form-group">
                                            <label for="Titre compétence">Titre compétence:</label>
                                            <input type="text" id="compétence" name="compétence" class="form-control" value="" required> 
                                        </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Ajouter Compétence</button>
                                            <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                        </div>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- @foreach ($experiences as $experience) -->
                <div class="exp">
                    <div class="fl">
<!-- compétence.update -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Modifier compétence</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="">
                                        <!-- @csrf
                                        @method('PUT') -->

                                        <div class="form-group">
                                            <label for="Titre compétence">Titre de compétence:</label>
                                           <input type="text" id="compétence" name="compétence" class="form-control" value="" required> 
                                        </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">modifier compétence</button>
                                            <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div> 
                    </div>
                    
                    <!-- <div class="paragraphe">
                        <strong>{{ $experience->title }}</strong>
                    </div> -->
                    <div class="description">
                        <span>{{ $experience->description }}</span>
                    </div>
                    <div class="handel">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Modifier
                        </button>
                        <form method="POST" action="" onsubmit="return confirm('Are you sure you want to delete this compétence?')">
                            <!-- @csrf
                            @method('DELETE') -->
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>  
                    </div>
                </div>
                <!-- @endforeach -->
            </section>
<!-- Réferencee -->
            <section class="experience" >
                 <div  class="info">
                    <div class="left d-flex">
                        <span><h3><i class="icone5 fa-solid fa-book"></i></h3></span>
                         <span class="p1"><h3>REFERENCE</h3></span>
                    </div>
                    <div class="right">
                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editereference" id="ajouter">Ajouter</button>
                    </div>
        <!-- réference.ajouter -->
                            <div class="modal fade" id="editereference" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Ajouter Réference</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body" id="experience">
        
                                            <form method="POST" action="">
                                                <!-- @csrf -->
                                                <div class="form-group">
                                                    <label for="Nom de résponsable">Nom de résponsable</label>:</label>
                                                    <input type="text" id="Nom de résponsable" name="Nom de résponsable" class="form-control" value="" required> 
                                                </div>
                                                <div class="form-group">
                                                    <label for="description">Description:</label>
                                                    <textarea id="description" name="description" class="form-control" rows="5" required></textarea>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">Ajouter Réference</button>
                                                    <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                                </div>
                                            </form>
                                    </div>
                                </div>
                            </div>
                        

                        <div class="exp">
                            <div class="fl">
<!-- réference.update -->
                                <div class="modal fade" id="modifierreference" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modifier Réference</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                        <div class="modal-body">
                                            <form method="POST" action="">
                                                 @csrf
                                                @method('PUT') 
        
                                                <div class="form-group">
                                                    <label for="Nom de résponsable">Nom de résponsable:</label>
                                                   <input type="text" id="réference" name="réference" class="form-control" value="" required> 
                                                </div>
                                                <div class="form-group">
                                                    <label for="description">Description:</label>
                                                    <textarea id="description" name="description" class="form-control" rows="5" required></textarea>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">modifier Réference</button>
                                                    <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            
                            <div class="paragraphe">
                                <strong>Nom responsable</strong>
                            </div>
                            <div class="description">
                                <span>description</span>
                            </div>
                            <div class="handel">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modifierreference">
                                Modifier
                                </button>
                                <form method="POST" action="" onsubmit="return confirm('Are you sure you want to delete this réference?')">
                                     @csrf
                                    @method('DELETE') 
                                    <button type="submit" class="btn btn-danger">Supprimer</button>
                                </form>  
                            </div>
                        </div>

                    </section>
</div></div>
@endsection
<!-- </body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</html> -->
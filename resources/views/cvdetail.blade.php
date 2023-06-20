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
    @section('cvdetail')








<!-- CV Display -->
    <div class="container-fluid row mt-4">
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
                    <div class="left d-flex gap-3">
                        <span><h3><i class=" icone2 fa-solid fa-user"></i></h3></span>
                        <span class="p1"><h3>Info Profil</h3></span>
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



                </div>
                @foreach ($experiences as $experience)
                <div class="exp">

                    <div class="fl">
                        <span class="title"><strong><span class="text-muted"> De </span>{{ $experience->debut }}<span class="text-muted"> A </span>{{ $experience->fin }}</strong></span>
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
                    <div class="left d-flex">
                        <span><h3><i class="icone4 fa-solid fa-book-open"></i></h3></span>
                        <span class="p1"><h3>DIPLOMES</h3></span>
                    </div>
                </div>

                <div class="exp">
                    @foreach ($experiences as $experience)
                    <div class="fl">
                        <span class="title"><strong><span class="text-muted"> De </span>{{ $experience->debut }}<span class="text-muted"> A </span>{{ $experience->fin }}</strong></span>
                    </div>
                    
                    <div class="paragraphe">
                        <strong>{{ $experience->title }}</strong>
                    </div>
                    <div class="description">
                        <span>{{ $experience->description }}</span>
                    </div>
                    @endforeach
                </div>
</section>
<!-- Compétence -->            
            <section class="experience" > 
                <div  class="info"> 
                    <div class="left d-flex">
                        <span><h3><i class="icone5 fa-solid fa-gear"></i></h3></span>
                        <span class="p1"><h3>COMPETENCE</h3></span>
                    </div>
                </div>

                <div class="exp">
                @foreach ($experiences as $experience)
                    <div class="fl">

                    </div>
                    
                    <div class="paragraphe">
                        <strong>{{ $experience->title }}</strong>
                    </div>
                    <div class="description">
                        <span>{{ $experience->description }}</span>
                    </div>
                    @endforeach
                </div>
            </section>
<!-- Réferencee -->
            <section class="experience" >
                 <div  class="info">
                    <div class="left d-flex">
                        <span><h3><i class="icone5 fa-solid fa-book"></i></h3></span>
                         <span class="p1"><h3>REFERENCE</h3></span>
                    </div>

                        

                        <div class="exp">
                            <div class="fl">
                            </div>
                            
                            <div class="paragraphe">
                                <strong>Nom responsable</strong>
                            </div>
                            <div class="description">
                                <span>description</span>
                            </div>
                        </div>

 </section>
</div></div>
@endsection
<!-- </body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</html> -->
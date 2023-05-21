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
							<form action="">
								<div class="modal-body">
									<textarea name="info_profile" id="info_profile"  placeholder="decrivez vous profile" cols="50" rows="5"></textarea>
								</div>
								<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
								<button type="button" class="btn btn-primary">Save changes</button>
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
                        <button class="btn" data-bs-toggle="modal" data-bs-target="#editexperience" id="ajouter"></button>
                    </div>

                    <div class="modal fade" id="editexperience" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Ajouter experience</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body" id="experiences">
                            
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
<!-- Scripts -->
    <script>
        function ajouterExperience() {
        var experiencesDiv = document.getElementById("experiences");

        var experienceDiv = document.createElement("div");
        experienceDiv.className = "experience";

        var dateDebutLabel = document.createElement("label");
        dateDebutLabel.innerHTML = "Date de début: ";
        var dateDebutInput = document.createElement("input");
        dateDebutInput.type = "date";
        dateDebutInput.className = "form-control";

        var dateFinLabel = document.createElement("label");
        dateFinLabel.innerHTML = "Date de fin: ";
        var dateFinInput = document.createElement("input");
        dateFinInput.type = "date";
        dateFinInput.className = "form-control";

            var titreLabel = document.createElement("label");
            titreLabel.innerHTML = "Titre: ";
            var titreSelect = document.createElement("select");
            titreSelect.className = "form-control";
            titreSelect.style.width = "200px"; 
            var option1 = document.createElement("option");
            option1.text = "Stage";
            titreSelect.add(option1);

            var option2 = document.createElement("option");
            option2.text = "Fomation";
            titreSelect.add(option2);
            var option2 = document.createElement("option");
            option2.text = "Emploi";
            titreSelect.add(option2);



        var descriptionLabel = document.createElement("label");
        descriptionLabel.innerHTML = "Description: ";
        var descriptionInput = document.createElement("textarea");
        descriptionInput.className = "form-control";


        var supprimerButton = document.createElement("input");
            supprimerButton.type = "button";
            supprimerButton.value = "Supprimer";
            supprimerButton.className = "btn btn-danger";
            supprimerButton.onclick = function() {
                experiencesDiv.removeChild(experienceDiv);
            };
        
            experienceDiv.appendChild(dateDebutLabel);
            experienceDiv.appendChild(dateDebutInput);
            experienceDiv.appendChild(dateFinLabel);
            experienceDiv.appendChild(dateFinInput);
            experienceDiv.appendChild(titreLabel);
            experienceDiv.appendChild(titreSelect);

            experienceDiv.appendChild(descriptionLabel);
            experienceDiv.appendChild(descriptionInput);
            experienceDiv.appendChild(supprimerButton);
        
            experiencesDiv.appendChild(experienceDiv);
            }
        
            var ajouterButton = document.createElement("input");
            ajouterButton.type = "button";
            ajouterButton.value = "Ajouter";
            ajouterButton.className = "btn btn-primary";
            ajouterButton.onclick = ajouterExperience;
            document.getElementById("ajouter").appendChild(ajouterButton);
        </script>

    <script>
        function ajouterDiplome() {
        var diplomesDiv = document.getElementById("diplomes");
    
        var diplomeDiv = document.createElement("div");
        diplomeDiv.className = "diplome";
    
        var dateDebutLabel = document.createElement("label");
        dateDebutLabel.innerHTML = "Date de début: ";
        var dateDebutInput = document.createElement("input");
        dateDebutInput.type = "date";
        dateDebutInput.className = "form-control";
        var dateFinLabel = document.createElement("label");
        dateFinLabel.innerHTML = "Date de fin: ";
        var dateFinInput = document.createElement("input");
        dateFinInput.type = "date";
        dateFinInput.className = "form-control";
        var experienceLabel = document.createElement("label");
        experienceLabel.innerHTML = "Expérience: ";
        var experienceInput = document.createElement("input");
        experienceInput.type = "text";
        experienceInput.className = "form-control";
        var titreLabel = document.createElement("label");
            titreLabel.innerHTML = "Titre: ";
            var titreSelect = document.createElement("select");
            titreSelect.className = "form-control";
            titreSelect.style.width = "200px";
            var option1 = document.createElement("option");
            option1.text = "BAC";
            titreSelect.add(option1);

            var option2 = document.createElement("option");
            option2.text = "DEUG";
            titreSelect.add(option2);
            var option2 = document.createElement("option");
            option2.text = "DEUST";
            titreSelect.add(option2);
            var option2 = document.createElement("option");
            option2.text = "LICENCE";
            titreSelect.add(option2);
            var option2 = document.createElement("option");
            option2.text = "MASTER";
            titreSelect.add(option2);

        var titreInput = document.createElement("input");
        titreInput.type = "text";
    
        var descriptionLabel = document.createElement("label");
        descriptionLabel.innerHTML = "Description: ";
        var descriptionInput = document.createElement("textarea");
        descriptionInput.className = "form-control";
        var supprimerButton = document.createElement("input");
        supprimerButton.type = "button";
        supprimerButton.value = "Supprimer";
        supprimerButton.className = "btn btn-danger";

        supprimerButton.onclick = function() {
        diplomesDiv.removeChild(diplomeDiv);
        };
    
        diplomeDiv.appendChild(dateDebutLabel);
        diplomeDiv.appendChild(dateDebutInput);
        diplomeDiv.appendChild(dateFinLabel);
        diplomeDiv.appendChild(dateFinInput);
        
        
        diplomeDiv.appendChild(titreLabel);
        diplomeDiv.appendChild(titreSelect);
        diplomeDiv.appendChild(descriptionLabel);
        diplomeDiv.appendChild(descriptionInput);
        diplomeDiv.appendChild(supprimerButton);
    
        diplomesDiv.appendChild(diplomeDiv);
    }
    
    var ajouterButton = document.createElement("input");
    ajouterButton.type = "button";
    ajouterButton.value = "Ajouter ";
    ajouterButton.className = "btn btn-primary";
    ajouterButton.onclick = ajouterDiplome;
    document.getElementById("ajouterdiplome").appendChild(ajouterButton);
    
        </script>



    <script> 
        function ajouterCompetence() {
        var competencesDiv = document.getElementById("competences");
    
        var competenceDiv = document.createElement("div");
        competenceDiv.className = "competence";
    
        var typeLabel = document.createElement("label");
        typeLabel.innerHTML = "Type de compétence: ";
        var typeInput = document.createElement("input");
        typeInput.type = "text";
        typeInput.className = "form-control";
        var supprimerButton = document.createElement("input");
        supprimerButton.type = "button";
        supprimerButton.value = "Supprimer";
        supprimerButton.className = "btn btn-danger";
        supprimerButton.onclick = function() {
        competencesDiv.removeChild(competenceDiv);
        };
    
        competenceDiv.appendChild(typeLabel);
        competenceDiv.appendChild(typeInput);
        competenceDiv.appendChild(supprimerButton);
    
        competencesDiv.appendChild(competenceDiv);
    }
    
    var ajouterButton = document.createElement("input");
    ajouterButton.type = "button";
    ajouterButton.value = "Ajouter ";
    ajouterButton.className = "btn btn-primary";
    ajouterButton.onclick = ajouterCompetence;
    document.getElementById("ajoutercompetence").appendChild(ajouterButton);
    </script>



    <script>
    function ajouterReference() {
    var referencesDiv = document.getElementById("references");
  
    var referenceDiv = document.createElement("div");
    referenceDiv.className = "reference";
  
    var responsableLabel = document.createElement("label");
    responsableLabel.innerHTML = "Nom du responsable: ";
    var responsableInput = document.createElement("input");
    responsableInput.type = "text";
    responsableInput.className = "form-control";
    var descriptionLabel = document.createElement("label");
    descriptionLabel.innerHTML = "Description: ";
    var descriptionInput = document.createElement("textarea");
    descriptionInput.className = "form-control";
    var supprimerButton = document.createElement("input");
    supprimerButton.type = "button";
    supprimerButton.value = "Supprimer";
    supprimerButton.className = "btn btn-danger";
    supprimerButton.onclick = function() {
      referencesDiv.removeChild(referenceDiv);
    };
  
    referenceDiv.appendChild(responsableLabel);
    referenceDiv.appendChild(responsableInput);
    referenceDiv.appendChild(descriptionLabel);
    referenceDiv.appendChild(descriptionInput);
    referenceDiv.appendChild(supprimerButton);
  
    referencesDiv.appendChild(referenceDiv);
  }
  
  var ajouterButton = document.createElement("input");
  ajouterButton.type = "button";
  ajouterButton.value = "Ajouter";
  ajouterButton.className = "btn btn-primary";
  ajouterButton.onclick = ajouterReference;
  document.getElementById("ajouterreference").appendChild(ajouterButton);
  </script>
  

@endsection
<!-- </body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</html> -->
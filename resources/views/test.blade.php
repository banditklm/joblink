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


            

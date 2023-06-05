<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Candidat;
use App\Models\Candidature;
use App\Models\Recruteur;
use App\Models\Experience;
use App\Models\Texperience;
use App\Models\Offre;
use App\Models\Adresse;
use App\Models\Niveau;
use App\Models\Dformation;
use App\Models\Diplome;
use App\Models\Tdiplome;
use App\Models\Competence;
use App\Models\Referenece;
use App\Models\Sauvgarde;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
class UserController extends Controller
{
    public function __construct()
    {
    //    $this->middleware('auth');
    }
    public function getRoleId(){
        $id = Auth::id();
        $role = User::find($id)->role;
        if($role == 2)
        return Candidat::where('user_id',$id)->first()->id;
        else if($role == 3)
        return Recruteur::where('user_id',$id)->first()->id;
        else return NULL;
    }
    public function index()
    {
        $user= Auth::user();
        $offers = Offre::join('recruteurs', 'offres.recruteur_id', '=', 'recruteurs.id')
                ->join('users', 'recruteurs.user_id', '=', 'users.id')
                ->join('adresses', 'offres.adresse_id', '=', 'adresses.id')


                ->select('offres.*', 'users.nom','users.path','adresses.ville')
                ->orderBy('offres.created_at', 'desc')

                ->get();
                $niveaux = Niveau::all();
                $dformations = Dformation::all();

        // return dd($offers);

        return view('home', 
        [
            'user'=> $user,
            'offers'=> $offers,
            'niveaux'=>$niveaux,
            'dformations'=>$dformations

        ]);
    }
    public function display()
    {


        
                    $res = [
            'BAC',
            'DEUG',
            'DUST',
            'DUT',
            'LICENCE',
            'MASTER',
            'DOCTORAT',
            ];
        for($i=0; $i < count($res);$i++){
            $niveaux = new Tdiplome();
            $niveaux->title = $res[$i];
            $niveaux->save();
        }

        return " Tdiplome has been selected";
        return $this->getRoleId();
        $user = User::with('adresse')->find(4);
        $id = Auth::id();
        return $id;
        $info = Candidat::where('user_id',$id)->first()->id;

        // return $info;

        $mesCandidatures = Candidature::with('offre')->find($this->getRoleId());
        $mesCandidatures = Candidature::with('offre')->get();
        // $recruteurs = Recruteur::find(1);

        return $mesCandidatures;
        return dd($mesCandidatures);
    }
    public function monCv()
    {   
        if(Auth::user()->role !=2)
        abort(403, 'Unauthorized');

        $id = Auth::id();
        $user= User::find($id);
        $candidate = Candidat::find($this->getRoleId());
        $experiences = $candidate->experiences;
        $texperiences = Texperience::all();
        // return $experiences;
        // return $experiences;
        // $experiences = Experience::all();
        return view('cv',
         ['user'=> $user,
         'experiences'=> $experiences,
         'texperiences'=> $texperiences
        ]);
    }
    public function apropos()
    {   
        if(Auth::user()->role !=3)
        abort(403, 'Unauthorized');


        $id = Auth::id();
        $user= User::find($id);
        return view('apropos', ['user'=> $user]);
    }
    public function profile()
    {   
        $id = Auth::id();
        $role = Auth::user()->role;
        if($role == 2){
            $user= User::find($id);
            $info= Candidat::find($this->getRoleId());
            $mesCandidatures = Candidature::join('offres', 'Candidatures.offre_id','=','offres.id')
            ->where("candidat_id",$this->getRoleId())
            ->select('offres.*','Candidatures.etat')
            ->get();
            $offers = Sauvgarde::where('candidat_id', $this->getRoleId())
            ->join('offres', 'Sauvgardes.offre_id', '=', 'offres.id')
            ->join('recruteurs', 'offres.recruteur_id', '=', 'recruteurs.id')
            ->join('users', 'recruteurs.user_id', '=', 'users.id')
            ->select('offres.*', 'users.nom','users.path')
                ->orderBy('offres.created_at', 'desc')
            ->get();
            // return $mesCandidatures;
            return view('profile', 
            [
                'user'=> $user,
                'info'=> $info,
                'mesCandidatures'=>$mesCandidatures,
                'offers'=>$offers,
            ]);
        }else if($role == 3) {
            $info= Recruteur::find($this->getRoleId());
            $offers = Offre::join('recruteurs', 'offres.recruteur_id', '=', 'recruteurs.id')
                ->join('users', 'recruteurs.user_id', '=', 'users.id')
                ->join('adresses', 'offres.adresse_id', '=', 'adresses.id')
                ->select('offres.*', 'users.nom','users.path','adresses.ville')
                ->where('recruteurs.id',$this->getRoleId())
                ->orderBy('offres.created_at', 'desc')->get();
                // return dd($info);
                $user= User::find($id);
                return view('profile', 
                [
                    'user'=> $user,
                    'info'=> $info,
                    'offers'=> $offers
                ]);
        }else {
            $user= User::find($id);
            return view('admine', ['user'=> $user]);
        }
        
    }
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $candidat = Candidat::where('user_id',$id)->first();
        $recruteur = Recruteur::where('user_id',$id)->first();

        if($request->hasFile('image')){
            $imageFile = $request->file('image');
            $imageName = time() . '_' . Str::random(10) . '.' . $imageFile->getClientOriginalExtension();
            $image = $request->image->move(public_path('assets\images'),$imageName);
            $user->path= $imageName ;
        }
        if(Auth::user()->role ==3){
            // return $imageName ;
            $recruteur->date_creation= $request->input('date_creation');
            $user->nom= $request->input('nom');
            $user->email= $request->input('email');
            $user->tel= $request->input('tel');
            $user->adresse= $request->input('adresse');
            $user->ville= $request->input('ville');
            $user->region= $request->input('region');
            $user->save();
            $recruteur->save();
            return redirect()->back()->with('success', 'User information updated successfully.');
        }
        $candidat->age= $request->input('age');
        $user->nom= $request->input('nom');
        $user->prenom= $request->input('prenom');
        $user->email= $request->input('email');
        $user->tel= $request->input('tel');
        $user->adresse= $request->input('adresse');
        $user->ville= $request->input('ville');
        $user->region= $request->input('region');
        $user->save();
        $candidat->save();
        return redirect()->back()->with('success', 'User information updated successfully.');
    }
    public function updateDescription(Request $request, User $user)
    {
        $user->description = $request->input('description');
        $user->save();

        return redirect()->back()->with('success', 'Description updated successfully.');
    }
    public function storeExperiences(Request $request)
    {
        $experience = new Experience();

        $experience->candidat_id = Candidat::where('user_id',Auth::id())->first()->id;
        $experience->title = $request->input('title');
        $experience->debut = $request->input('debut');
        $experience->fin = $request->input('fin');
        $experience->description = $request->input('description');
        $experience->save();

        return redirect()->back()->with('success', 'Experience added successfully.');
    }
    public function destroy(Experience $experience)
    {
        $experience->delete();

        return redirect()->back()->with('success', 'Experience deleted successfully.');
    }
    public function experiencesUpdate(Request $request, Experience $experience)
    {

        $experience->title = $request->input('title');
        $experience->debut = $request->input('debut');
        $experience->fin = $request->input('fin');
        $experience->description = $request->input('description');
        $experience->save();

        return redirect()->back()->with('success', 'Experience added successfully.');
    }
    public function testmodel(){
        return $experiences = Texperience::all();
    }
    // OFFRES
    public function offresStore(Request $request)
    {
        // $request->validate([
        //     'recruteur_id' => 'required',
        //     'ville' => 'required',
        //     'region' => 'required',
        //     'pays' => 'required',
        //     'add1' => 'required',
        //     'add2' => 'nullable',
        //     'codepostale' => 'required',
        //     'description' => 'required',
        //     'debut' => 'required|date',
        //     'fin' => 'required|date',
        //     'photo' => 'image',
        //     'categorie' => 'required',
        //     'domaine' => 'required',
        // ]);
        $imageName = null;
        if($request->hasFile('image')){
            $imageFile = $request->file('image');
            $imageName = time() . '_' . Str::random(10) . '.' . $imageFile->getClientOriginalExtension();
            $image = $request->image->move(public_path('assets\images'),$imageName);
            // $user->path= $imageName ;
        }
        
        // $adresse = Adresse::create([
        //     'ville' => $request->input('ville'),
        //     'region' => $request->input('region'),
        //     'pays' => $request->input('pays'),
        //     'add1' => $request->input('add1'),
        //     'add2' => $request->input('add2'),
        //     'codepostale' => $request->input('codepostale'),
        // ]);
        $adresse= new Adresse();
        $adresse->ville = $request->input('ville');
        $adresse->region = $request->input('region');
        $adresse->pays = $request->input('pays');
        $adresse->add1 = $request->input('add1');
        $adresse->add2 = $request->input('add2');
        $adresse->codepostale = $request->input('codepostale');
        $adresse->save();


        $id = Recruteur::where('user_id',Auth::id())->first()->id;
        // $offre = Offre::create([
        //     'recruteur_id' => $id,
        //     'adresse_id' => $adresse->id,
        //     'description' => $request->input('description'),
        //     'debut' => $request->input('debut'),
        //     'fin' => $request->input('fin'),
        //     'photo' => $imageName,
        //     'categorie' => $request->input('categorie'),
        //     'domaine' => $request->input('domaine'),
        // ]);
        $offre = new Offre();
        $offre->recruteur_id = $id;
        $offre->city = $request->input('ville');
        $offre->adresse_id = $adresse->id;
        $offre->descriptionOffre = $request->input('descriptionOffre');
        $offre->debut = $request->input('debut');
        $offre->fin = $request->input('fin');
        $offre->pathOffre = $imageName;
        $offre->categorie = $request->input('categorie');
        $offre->domaine = $request->input('domaine');
        $offre->adresse()->associate($adresse);
        $offre->save();

        // Optionally, you can redirect the user to a success page or perform additional actions

        return redirect()->back()->with('success', 'Your Offre added successfully.');

    }
    public function searchOffre(Request $request)
    {
        $ville = $request->input('ville');
        
        $offres = Offre::join('adresses', 'offres.adresse_id', '=', 'adresses.id')
            ->join('recruteurs', 'offres.recruteur_id', '=', 'recruteurs.id')
            ->join('users', 'recruteurs.user_id', '=', 'users.id')
            ->where('adresses.ville', $ville)
            ->select('offres.*', 'users.nom','users.path','adresses.ville')
            ->get();
        // return $results;
        
        return view('search', compact('offres'));
    }
    //Candidatures
    public function storeCandidature(Request $request)
    {
        $offreId = $request->input('offre_id');
        $candidatId = $this->getRoleId();
        $state = 'En attente';

        // Save the candidature
        $candidature = new Candidature();
        $candidature->offre_id = $offreId;
        $candidature->candidat_id = $candidatId;
        $candidature->etat = $state;
        $candidature->save();

        // Send a notification to the recruiter
        // $this->sendNotification('recruteur', 'You have a new candidate.');

        // Redirect or display a success message
        return redirect()->back()->with('success', 'Candidature added successfully.');
    }
    //delete Candidatures
    public function deleteCandidature(Request $request)
    {
        // Delete the candidature
        // return $request->offre_id;
        $candidature = Candidature::where('offre_id',$request->offre_id)->first();
        if ($candidature) {
            // Delete the candidature
            $candidature->delete();
        // Redirect or display a success message
        return redirect()->back()->with('success', 'Candidature deleted successfully.');
        }
    }



}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Candidat;
use App\Models\Candidature;
use App\Models\Recruteur;
use App\Models\Experience;
use App\Models\Texperience;
use App\Models\Offre;
use App\Models\Adresse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
class UserController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }
    public function index()
    {
        $user= Auth::user();
        $offers = Offre::join('recruteurs', 'offres.recruteur_id', '=', 'recruteurs.id')
                ->join('users', 'recruteurs.user_id', '=', 'users.id')
                ->join('adresses', 'offres.adresse_id', '=', 'adresses.id')
                ->select('offres.*', 'users.*')
                ->orderBy('offres.created_at', 'asc')
                ->get();

        // return dd($offers);

        return view('home', 
        [
            'user'=> $user,
            'offers'=> $offers,

        ]);
    }
    public function display()
    {
        // $user = Recruteur::with('user')->find(1);
        $user = User::with('adresse')->find(4);
        $id = Auth::id();
        return $id;
        $info = Candidat::where('user_id',$id)->first()->id;

        // return $info;

        $mesCandidatures = Candidature::with('offre')->find(1);
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
        $candidate = Candidat::where('user_id',$id)->first();
        $experiences = $candidate->experiences;
        $texperiences = Texperience::all();
        // return $experiences;
        // return $experiences;
        // $experiences = Experience::all();
        return view('cv', ['user'=> $user,'experiences'=> $experiences,'texperiences'=> $texperiences]);
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
            $info= Candidat::where('user_id',$id)->first();
            // return $info/;
            return view('profile', 
            [
                'user'=> $user,
                'info'=> $info
            ]);
        }else if($role == 3) {
            $info= Recruteur::where('user_id',$id)->first();
            // return dd($info);
            $user= User::find($id);
            return view('profile', 
            [
                'user'=> $user,
                'info'=> $info
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
    // OOFRES
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

        return redirect()->back()->with('success', 'Experience added successfully.');

    }

}

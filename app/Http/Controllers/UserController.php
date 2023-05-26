<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Candidat;
use App\Models\Candidature;
use App\Models\Recruteur;
use App\Models\Experience;
use App\Models\Texperience;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
class UserController extends Controller
{
    public function display()
    {
        $id = Auth::id();
        $info = Candidat::where('user_id',$id)->first()->id;

        // return $info;

        $mesCandidatures = Candidature::with('offre')->find(1);
        // $recruteurs = Recruteur::find(1);

        return $mesCandidatures;
    }
    public function __construct()
    {
       $this->middleware('auth');
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

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }
    public function profile()
    {   
        $id = Auth::id();
        $user= User::find($id);
        return view('profile', ['user'=> $user]);
    }
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->name= $request->input('name');
        $user->domaine= $request->input('domaine');
        $user->tel= $request->input('tel');
        $user->adresse= $request->input('adresse');
        $user->info= $request->input('info');
        $user->competences= $request->input('competences');
        $user->save();
        return redirect()->back()->with('success', 'User information updated successfully.');
    }
}

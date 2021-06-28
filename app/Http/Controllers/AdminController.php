<?php

namespace App\Http\Controllers;

use App\Models\Candidat;
use App\Models\Concour;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home() {
        return view('admin.pages.home.index');
    }

    public function concours() {
        $concours = Concour::all();
        return view('admin.pages.concours.index',compact('concours'));
    }

    public function candidat() {
        $concours = Concour::all();
        $candidats = Candidat::all();
        return view('admin.pages.candidats.index',compact('concours','candidats'));
    }

    public function vote() {
        return view('admin.pages.votes.index');
    }

    public function storeConcours(Request $request) {
        request()->validate([
            'title' => 'required|min:5',
            'sub_title' => 'required',
            'description' => 'required',
            'image' => 'required'
        ]);
        $concour= Concour::create([
            'title'=> $request->get('title'),
            'sub_title'=> $request->get('sub_title'),
            'description'=>$request->get('description'),
            $image='image' => $request->image->store('images','public'),
            ]);
            $concour->save();
            return Redirect()->route('admin.concours');
    }

    public function deleteConcours($id) {
        Concour::destroy($id);
        return Redirect()->route('admin.concours');
    }

    public function storeCandidat(Request $request) {
        request()->validate([
            'concours_id' => 'required',
            'image' => 'required',
            'title' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'mail' => 'required',
            'telephone' => 'required',
            'description' => 'required',
        ]);
        $candidat= Candidat::create([
            'concours_id'=> $request->get('concours_id'),
            'image'=> $request->image->store('images','public'),
            'title'=> $request->get('title'),
            'nom'=> $request->get('nom'),
            'prenom'=> $request->get('prenom'),
            'mail'=> $request->get('mail'),
            'telephone'=> $request->get('telephone'),
            'description'=>$request->get('description'),
            ]);
        $candidat->save();
        return Redirect()->route('admin.candidat');
    }


}

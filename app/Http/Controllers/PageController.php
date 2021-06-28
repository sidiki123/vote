<?php

namespace App\Http\Controllers;

use App\Models\Candidat;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Jcc\LaravelVote\Traits\Voter;
use RealRashid\SweetAlert\Facades\Alert;

class PageController extends Controller
{
    public function home(Candidat $candidat) {
        // $dd = $candidat->upVoters()->get();
        // $candidat = Candidat::find(3);
$user = Auth::user();
// dd($user->id);
        // $dd =$user->hasVoted($candidat);
        // $dd = $candidat->voters()->count();
        $candidats = Candidat::all();
        // dd($dd);
        return view('visiteur.pages.home.index',compact('candidats'));
    }

    public function vote() {
        return view('visiteur.pages.projet.index');
    }

    public function about() {
        return view('visiteur.pages.about.index');
    }

    public function contact() {
        return view('visiteur.pages.contact.index');
    }

    public function voter($id) {
        $candidat = Candidat::find($id);
        if (Auth::user()->hasVoted($candidat)) {
            return redirect()->back()
            ->with('error', "Désolé mais vous ne pouvez voter qu'une seule fois!");
        } else {
            Auth::user()->upVote($candidat);
            return redirect()->back()
            ->with('success', 'Felicitations ,votre vote a été enregistré!');
        }


    }

}

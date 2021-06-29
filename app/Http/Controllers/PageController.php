<?php

namespace App\Http\Controllers;

use App\Models\Candidat;
use App\Models\Counter;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Jcc\LaravelVote\Traits\Voter;
use Jcc\LaravelVote\Vote;
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
        $candidats = Candidat::all();
        return view('visiteur.pages.projet.index',compact('candidats'));
    }

    public function about() {
        return view('visiteur.pages.about.index');
    }

    public function contact() {
        return view('visiteur.pages.contact.index');
    }

    public function voter($id) {

        // $candidat = Candidat::find($id);
        // if (Auth::user()->hasVoted($candidat)) {
        //     return redirect()->back()
        //     ->with('error', "Désolé mais vous ne pouvez voter qu'une seule fois!");
        // } else {
        //     Auth::user()->upVote($candidat);
        //     return redirect()->back()
        //     ->with('success', 'Felicitations ,votre vote a été enregistré!');
        // }
        $candidat = Candidat::find($id);
        if (Auth::user()->hasVoted($candidat)) {
            return redirect()->back()
            ->with('error', "Désolé! mais vous ne pouvez pas voter deux fois pour ce candidat!");
        }
        elseif ( DB::table('votes')
        ->where('user_id', Auth::user()->id)->exists() ){
            return redirect()->back()
            ->with('error', "Désolé! Mais vous avez déja voté un candidat auparavant! On ne vote qu'une fois");
        }
        else {

            if ( DB::table('counters')
        ->where('candidat_id',$candidat->id)->exists() ){
            Auth::user()->upVote($candidat);
            $counter = Counter::find($candidat->id);
            $counter->candidat_id = $candidat->id;
            $counter->vote =  $candidat->voters()->count();

            // $counter = Counter::updateOrCreate(
            //     ['candidat_id' => $candidat->id, 'vote' =>  $candidat->voters()->count() + 1]
            // );

                $counter->update();
            return redirect()->back()
            ->with('success', 'Felicitations ,votre vote a été enregistré!');
        }
            Auth::user()->upVote($candidat);
            $counter= Counter::create([
                'candidat_id'=> $candidat->id,
                'vote'=>   $candidat->voters()->count(),
                ]);
                $counter->save();
            return redirect()->back()
            ->with('success', 'Felicitations ,votre vote a été enregistré!');
        }
    }

}

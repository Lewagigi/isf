<?php

namespace App\Http\Controllers;
use App\Models\Personne;
use Illuminate\Http\Request;

class Personnenregistree extends Controller
{
    public function compte_form(){
        $personne = Personne::all() ;
        return view('auth.register',['personne'=>$personne]) ;
    }

        public function affichagelistepersonne(){
        $per = Personne::all() ;
        return view('radioweb.lespersonnesenregistres',['personne'=>$per]) ;
        }


        public function modartisteform($id){
        $art = Personne::findOrFail($id) ;
        return view('radioweb.modform',['artistes'=>$art]);
        }

        public function ajoutnouvellepersonne(){
        return view('radioweb.Nouscontacter');
        }

        public function supartisteform($id){
        $art = Personne::findOrFail($id) ;
        return view('radioweb.supartisteform',['artistes'=>$art]);
         }


        public function supartist(Request $request,$id){
        $p = Personne::findOrFail($id);
        $p->delete() ;
        return redirect()->route('artisre');
        }

        public function ajoutpersonne(Request $request){

        $validate = $request->validate([
            'Nom'=> 'required|string|max:255',
            'Prenom'=> 'required|string|max:255',
            'Email'=> 'required|string|max:255',
            'Message'=> 'required|string|max:255',
            'value' => 'required|string|max:255'

        ]);
        $nouvellepersonne = new Personne();

        $nouvellepersonne->Nom = $validate['Nom'];
        $nouvellepersonne->Prenom = $validate['Prenom'];
        $nouvellepersonne->Email = $validate['Email'];
        $nouvellepersonne->Message = $validate['Message'];
        $nouvellepersonne->value = $validate['value'];


        $nouvellepersonne->save() ;

        return redirect()->route('lespersonnesenregistrees') ;
        }

        public function mod(Request $request,$id){
        $art = Personne::findOrFail($id);
        $validate = $request->validate([
            'Nom'=> 'required|string|max:255',
            'Titre'=> 'required|string|max:255',
        ]) ;
        $art->Nom = $validate['Nom'];
        $art->Titre = $validate['Titre'];
        $art->save() ;
        return redirect()->route('artisre') ;
       }

       public function mettreaudio(Request $request){
       $v = $request->validate([
           'file'=>'required|mp4',
       ]) ;
           $path = $request->file('avatar')->store('avatars');
           return $path ;
      }
}

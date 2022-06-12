<?php

namespace App\Http\Controllers;
use App\Models\Artiste;
use Illuminate\Http\Request;

class ArtisteController extends Controller
{
    public function compte_form(){
        $art = Artiste::all() ;
        return view('auth.register',['artistes'=>$art]) ;
    }

        public function affichageartiste(){
        $art = Artiste::all() ;
        return view('radioweb.AffichageArtiste',['artistes'=>$art]) ;
        }


        public function modartisteform($id){
        $art = Artiste::findOrFail($id) ;
        return view('radioweb.modform',['artistes'=>$art]);
        }

        public function ajoutartiste(){
        return view('radioweb.ajoutform');
        }

        public function supartisteform($id){
        $art = Artiste::findOrFail($id) ;
        return view('radioweb.supartisteform',['artistes'=>$art]);
         }


        public function supartist(Request $request,$id){
        $p = Artiste::findOrFail($id);
        $p->delete() ;
        return redirect()->route('artisre');
        }

        public function ajoutartist(Request $request){
        $validate = $request->validate([
            'Nom'=> 'required|string|max:255',
            'Titre'=> 'required|string|max:255',
        ]);
        $artistes = new Artiste();
        $artistes->Nom = $validate['Nom'];
        $artistes->Titre = $validate['Titre'];
        $artistes->save() ;
        return redirect()->route('artisre') ;
        }

        public function mod(Request $request,$id){
        $art = Artiste::findOrFail($id);
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

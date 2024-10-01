<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function house(){
        return view("quote.show", [
            "title" => "House",
            "quote" => "Nemcsak az emberek megalázásával lehet a gőzt kiereszteni; mondják, hogy a bowling jobb még ennél is.",
            "name" => "Dr. House"
        ]);
    }

    public function modernFamily(){
        return view("quote.show", [
            "title" => "Modern Család",
            "quote" => "A siker mindig 1 százalék ihlet, plusz 98 százalék verejték, végül pedig 2 százalék odafigyelés.",
            "name" => "Phil Dunphy"
        ]);
    }

    public function uvegtigrisCsoki(){
        return view("quote.show", [
            "title" => "Üvegtigris",
            "quote" => "Mennyire vagy túsz? Sörhöz odaférsz?",
            "name" => "Csoki"
        ]);
    }

    public function uvegtigrisLali(){
        return view("quote.show", [
            "title" => "Üvegtigris",
            "quote" => "Az egybubis az egy kicsit drágább, mert hát abból ki kellett vennem a többi bubit.",
            "name" => "Lali"
        ]);
    }

    public function harryPotter($slug){
        if($slug != "fred-es-george" && $slug != "hermione"){
            abort(404);
        }
        if($slug == "fred-es-george"){
            return view("quote.show", [
                "title" => "Harry Potter",
                "quote" => "- Mindig is tudtuk hol a határ - bólintott Fred - És csak óvatosan léptük át - tette hozzá George.",
                "name" => "Fred és George"
            ]);  
        }else if($slug == "hermione"){
            return view("quote.show", [
                "title" => "Harry Potter",
                "quote" => "Még egy ilyen remek ötlet, és mindhárman meghalunk, vagy akár ki is csaphatnak!",
                "name" => "Hermione"
            ]); 
        }

    }
}

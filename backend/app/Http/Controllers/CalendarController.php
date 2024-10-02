<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \DateTime;
use \DateInterval;

class CalendarController extends Controller
{
    public function today(){
        $today = new DateTime();
        return view("calendar.date", [
            "title" => "Ma",
            "date" => $today->format("Y-M-D") 
        ]);
    }

    public function yesterday(){
        $yesterday = new DateTime();
        $yesterday->sub(new DateInterval('P1D'));
        return view("calendar.date", [
            "title" => "Tegnap",
            "date" => $yesterday->format("Y-M-D") 
        ]);
    }

    public function tomorrow(){
        $tomorrow = new DateTime();
        $tomorrow->add(new DateInterval('P1D'));
        return view("calendar.date", [
            "title" => "Holnap",
            "date" => $tomorrow->format("Y-M-D") 
        ]);
    }

    protected $weekdays = ["hétfő", "kedd", "szerda", "csütörtök", "péntek", "szombat", "vasárnap"];

    public function weekdayName($number){
        if($number<1 || $number>7){
            return "A hét napjához adja meg a sorszámát (1 és 7 közötti szám)";
        }

        return view("calendar.weekday", ["title"=>$this->weekdays[$number-1]]);
    }

    public function weekdayNumber($name){
        if(!in_array($name, $this->weekdays)){
            return "Ismeretlen nap!";
        }

        return view("calendar.weekday", ["title"=>(array_search($name, $this->weekdays)+1)]);
    }
}

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
}

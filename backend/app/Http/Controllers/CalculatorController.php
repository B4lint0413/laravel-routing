<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function result($a, $operator, $b){
        if($operator == "/" && $b == 0){
            abort(400);
        }

        $data = ["title" => "", "a" => $a, "operator" => $operator, "b" => $b, "result" => 0];
        switch($operator){
            case "+":
                $data["title"] = "Összeadás";
                $data["result"] = $a+$b;
                break;
            case "-":
                $data["title"] = "Kivonás";
                $data["result"] = $a-$b;
                break;
            case "*":
                $data["title"] = "Szorzás";
                $data["result"] = $a*$b;
                break;
            case "/":
                $data["title"] = "Osztás";
                $data["result"] = $a/$b;
                break;
        }
        return view("calculator.result", $data);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    function me(){
        return response("Hello, this is me!!!!");
    }

    function generalGreet(Request $request){
        return response("Hello Guest");
    }

    //greet/hasin
    function greet(Request $request, $name="Guest", $title="Mr."){
        return response("Greetings, {$title} {$name}");
    }

    function printProduct(Request $request){
        $format = $request->query("format","pdf");
        $page = $request->query("page","1");
        $perPage = $request->query("perPage","10");
        return response("printing in {$format} format");
    }

    function person(Request $request){
        $person = [
            "name"=>"John Doe",
            "email"=>"john@doe.com",
            "age"=>35
        ];

        return response($person);
    }
}

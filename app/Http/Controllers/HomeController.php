<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller {
    function homepage(Request $request){
        return view("demo.index");
    }

    function homepagePost(Request $request){
        $name  = $request->input("name");
        $email = $request->input("email");
        $data = [
            "name"=>$name,
            "email"=>$email
        ];
        return response($data);
    }

    // function homepage(Request $request) {
    //     // return $request->method();
    //     // if($request->method()=="GET"){

    //     // }
    //     if ($request->isMethod("get")) {
    //         return view("demo.index");
    //     } else if ($request->isMethod('post')) {
    //         $name = $request->input("name");
    //         $email = $request->input("email");
    //         $data = [
    //             "name" => $name,
    //             "email" => $email
    //         ];
    //         return response($data);
    //     }

    // }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HomeController extends Controller
{
    public function Read(Request $request) {
        // $id = $request->input('id');  //параметр get-запросa
        // $data = [
        //     "1" => "Some task (1)",
        //     "2" => "Some task (2)",
        //     "3" => "Some task (3)",
        //     "4" => "Some task (4)",
        //     "5" => "Some task (5)",
        // ];
        // $header = [
        //     "Content-Type" => 'text/html;'
        // ];
        // $status = 200;
        // $content = $data[$id];
        // return new Response($content, $status, $header);

        return view('Home.Read');
    }
}

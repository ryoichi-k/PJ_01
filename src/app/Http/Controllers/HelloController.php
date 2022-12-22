<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class HelloController extends Controller
{
    public function index(Request $request, Response $response){
        $array1 = array();
        $array1['test'] = "テストです";
        $array1['req_url'] = $request->url();
        $array1['req_path'] = $request->path();
        $array1['res'] = $response;
        $array1['items'] = DB::select('select * from users');

        return view('contact.contact', $array1);
    }
}

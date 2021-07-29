<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\crud;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;


class httpController extends Controller
{
    //
    public function index(){
        $response = Http::get('https://reqres.in/api/users?page=2');
        dd($response->json());
    }
}

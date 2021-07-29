<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\crud;
use Illuminate\Support\Facades\DB;


class crudController extends Controller
{
    //
    public function index(){
        return view('crud');
    }

    public function insert(Request $req){
        // return "Hello From crud controller into insert method";
        // 1st way to get form data but in this way we will get all form data
        // return $req->input();
        
        // 2nd way to get specific field data using this field name attribute
        // return $req->email; 
        $crud = new crud;
        $valid = $req->validate([
            'email' => 'required | unique:registrations,email',
            'pass' => 'required | min:4',
        ]);

        if($valid){
            
            $crud->email = $req->email;
            $crud->pass = $req->pass;
            $crud->save();
            return redirect('/');
        }

    }
}

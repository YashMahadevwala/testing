<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    //
    public function index(){
        $datas = ['Name'=>'king','Age'=>20,'City'=>'surat'];
        $info = ['Name'=>'yash','Age'=>18,'City'=>'amroli'];
        // return view('test',['datas'=>$datas]);
        return view('test',compact('datas','info'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Authentic;
use Illuminate\Support\Facades\Hash;

class authController extends Controller
{
    //
    public function index()
    {
        return view('registration');
    }
    public function store(Request $req)
    {
        // return $req;
        $valid = $req->validate([
            'name' => 'required',
            'email' => 'required | email | unique:authentic,email',
            'pass' => 'required',
            // 'cpass' => 'required | required_with:pass',
        ]);

        if($valid){
            $auth = new Authentic;

            $auth->name = $req->name;
            $auth->email = $req->email;
            $auth->pass = Hash::make($req->pass);
            $auth->save();

            return redirect('dashboard');

        }
        
    }
    public function login()
    {
        return view('login');
    }
    public function logcheck(Request $req)
    {
        $valid = $req->validate([
            'email' => 'required | email',
            'pass' => 'required',
            // 'cpass' => 'required | required_with:pass',
        ]);

        $data = Authentic::where('email','=',$req->email)->first();
        // return $req->email;
        if (!$data) {
            return back()->with('mailFail','Email Not Exist');
        }else{
            if (!Hash::check($req->pass, $data->pass)) {
                return back()->with('passFail','Password Not Match');
            }else{
                $req->session()->put('email', $data->email);
                return redirect('dashboard');
            }
        }


        // return $req;
    }
    public function logout()
    {
        session()->forget('email');
        return redirect('login');
    }
    public function dashboard()
    {
        return view('dashboard');
    }
}
// git push done
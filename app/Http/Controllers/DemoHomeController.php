<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Session;
use Crypt;

class DemoHomeController extends Controller
{
    function home(){
        return view('home');
    }
    function registerUser(Request $req){
        $validateData = $req->validate([
            'name' => 'required|regex:/^[a-z A-Z]+$/u',
            'username' => 'required',
            'password' => 'required|min:6|max:12',
            'mobile' => 'numeric|required|digits:10'
        ]);
        $result = DB::table('users')
        ->where('username',$req->input('username'))
        ->get();

        $res = json_decode($result,true);
        print_r($res);

        if(sizeof($res)==0){
            $data = $req->input();
            $user = new User;
            $user->name = $data['name'];
            $user->username = $data['username'];
            $encrypted_password = crypt::encrypt($data['password']);
            $user->password = $encrypted_password;
            $user->mobile = $data['mobile'];
            $user->save();
            $req->session()->flash('register_status','User has been registered successfully');
            return redirect('/register');
            }
            else{
            $req->session()->flash('register_status','This Username already exists.');
            return redirect('/register');
            }
    }

    function loginUser(Request $req){
        $validatedData = $req->validate([
        'username' => 'required',
        'password' => 'required'
        ]);
        
        $result = DB::table('users')
        ->where('username',$req->input('username'))
        ->get();
        
        $res = json_decode($result,true);
        print_r($res);
        
        if(sizeof($res)==0){
        $req->session()->flash('error','Username does not exist. Please register yourself first');
        echo "Username Does not Exist.";
        return redirect('login');
        }
        else{
        echo "Hello";
        $encrypted_password = $result[0]->password;
        $decrypted_password = crypt::decrypt($encrypted_password);
        if($decrypted_password==$req->input('password')){
        echo "You are logged in Successfully";
        $req->session()->put('user',$result[0]->name);
        return redirect('/');
        }
        else{
        $req->session()->flash('error','Password Incorrect!!!');
        echo "Email Id Does not Exist.";
        return redirect('/login');
        }
      }
    }
}

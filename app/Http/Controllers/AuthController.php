<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;

class AuthController extends Controller
{
    public function login(){
        return view('login');
    }
    public function registration(){
        return view('login');
    }
    public function registerUser(Request $request){
        $request->validate([
            'email'=>'required|email|unique:users',
            'nom'=>'required',
            'tel'=>'required',
            'password'=>'required'
            
        ]);
        $user = new User();
        $user->email = $request->email;
        $user->nom = $request->nom;
        $user->tel = $request->tel;
        $user->password = Hash::make($request->password);
        $result = $user->save();
        if($result){
            return back()->with('success','You have registred successfuly');
        }else{
            return back()->with('fail','Something wrong');
        }
    }

    public function loginUser(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        $user = User::where('email','=',$request->email)->first();
        if($user){
            if(Hash::check($request->password,$user->password)){
                $request->session()->put('loginID',$user->id);
                return redirect('profile');
            }else{
                return back()->with('fail','Error Password !!');
            }
        }else{
            return back()->with('fail','This email is not registered !!');
        }
    }
    public function profile(){
        $data =array();
        if(Session::has('loginID')){
            $data = User::where('id','=',Session::get('loginID'))->first();
        }
        return view('profile',['data' => $data]);
    }

    public function update_profile(Request $request){
        $request->validate([

        ]);
        $data =array();
        if(Session::has('loginID')){
            $data = User::where('id','=',Session::get('loginID'))->first();
        }
        
        $data = User::findOrFail($data->id);

        $data->email = $request->email;
        $data->nom = $request->nom;
        $data->tel = $request->tel;
        

        
            if($request->hasfile('photo')){
                $photo = $request->file('photo');
                $extension = $photo->getClientOriginalExtension();
                $nomPhoto = $data->nom.'_'.time().'.'.$extension;
                $photo->move('images/users/',$nomPhoto);
                $data->photo = $nomPhoto;
            }
            $result=$data->save();
            if($result){
                return view('profile', ['data' => $data])->with('status','Modification réussi !');
            }else{
                return back()->with('fail','Something wrong');
            }
            
            //return back()->with('status','Modification réussi !');
            //return redirect()->route('profile')->with('status','Modification réussi !');
        
    }




    public function logout(){
        if(Session::has('loginID')){
            Session::pull('loginID');
            return redirect('/');
        }
    }






}

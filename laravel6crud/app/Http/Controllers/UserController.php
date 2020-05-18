<?php

namespace App\Http\Controllers;
use App\PhpUser;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){
        $users = PhpUser::all(); 
        return view('welcome', [
            'users' => $users
        ]);
    }

    public function create(){
        return view('add-user');
    }

    public function store(Request  $request){
        PhpUser::create($request->all());
        return redirect('/');
    }

    public function edit($id){

        $user = PhpUser::find($id);
        return view('edit-user', [
            'user' => $user
        ]);

    }

    public function update(Request $request, $id){
        $user = PhpUser::find($id);  
        $user->update($request->all());
        return redirect('/');
    }

    public function delete($id){
           $user = PhpUser::find($id);
           $user->delete();

           return back(); 
    }
}

<?php

namespace App\Http\Controllers;
use App\models\users;
use redirect;
use Illuminate\Http\Request;

class usersController extends Controller
{
    public function index(){
        $users = users::get();
        return view('users.list', ['users' => $users]);
    }

    public function new(){
        return view('users.form');
    }

    public function add( Resquest $request){
        $user = new users;
        $user = $user->create( $request->all());
        return redirect::to('/users');
    }

    public function edit( $id ){
        $user = $user::findOrFail( $id );
        return view('users.form', ['user' => $user]);
    }

    public function update(int $id, Resquest $request){
        $user = $user::findOrFail( $id );
        $user->update( $request->all());
        // mensagem de alert para retonro do update = session:flash('msg_update', 'Successfully Updated');
        return redirect::to('/users');
    }

    public function destroy(){

    }
}

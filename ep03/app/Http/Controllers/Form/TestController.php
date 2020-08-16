<?php

namespace App\Http\Controllers\Form;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TestController extends Controller
{
    public function listAllUsers()
    {
    	/*
    	$user = new User();
    	$user->name = "Usuário Teste";
    	$user->email = "teste@upinside.com.br";
    	$user->password = Hash::make('123');
    	$user->save();
		*/

    	$users = User::all();

    	return view('listAllUsers', [
    		'users' => $users
    	]);
    }

    public function listUser(User $user)
    {
    	return view('listUser', [
    		'user' => $user
    	]);
    }

    public function formAddUser()
    {
    	return view('addUser');
    }

    public function storeUser(Request $request)
    {
    	$user = new User;
    	$user->name = $request->name;
    	$user->email = $request->email;
    	$user->password = Hash::make($request->password);
    	$user->save();

    	return redirect()->route('users.listAll');
    }

    public function formEditUser(User $user)
    {
    	return view('editUser', [
    		'user' => $user
    	]);
    }

    public function edit(User $user, Request $request)
    {
    	$user->name = $request->name;

    	if (filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
	    	$user->email = $request->email;
    	}

    	if (!empty($request->password)) {
    		$user->password = Hash::make($request->password);
    	}

    	$user->save();
    	return redirect()->route('users.listAll');
    }

    public function destroy(User $user)
    {
    	$user->delete();
    	return redirect()->route('users.listAll');    	
    }
}

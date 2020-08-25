<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function show(Request $request)
    {

    	$user = User::where('id', $request->id)->first();

    	if ($user) {
    		echo "<h1>Dados do usuário</h1>";
    		echo "<p>Nome: {$user->name} E-mail: {$user->email}</p>";
    	}

    	$address = $user->address()->first();

    	if ($address) {
    		echo "<h1>Endereço:</h1>";
    		echo "<p>Endereço completo: {$address->street}, {$address->number} {$address->city}-{$address->state}</p>";
    	}

        $posts = $user->posts()->get();

        if ($posts) {
            echo "<h1>Artigos:</h1>";
            foreach ($posts as $post) {
                echo "<p>#{$post->id} {$post->title}, {$post->content}</p>";
            }
        }
    }
}

<?php

use App\Models\Phone;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('prueba', function () {
    /*  User::create([
        'name' => 'Jhordan Flores',
        'email' => 'jhordan@newsoftec.com',
        'password' => bcrypt('12345678')
    ]); */

    /*  Phone::create([
        'number' => '978654321',
        'user_id' => 4
    ]);

    return "Creado"; */

    /* $user = User::find(4);
    return $user->phone; */

    /* Post::create([
        'title' => 'Tercer post',
        'content' => 'Contenido del tercer post'
    ]); */

    $post = Post::find(3);

    $post->comments()->create([
        'content' => 'Contenido del primer comentario'
    ]);


});

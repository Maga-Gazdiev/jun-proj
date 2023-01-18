<?php

namespace App;

use App\Models\random;

function get($id){
    $post = random::findOrFail($id);
    return $post;
}

function set($id, $arg){
    $post = random::findOrFail($id);
    $post->rand = $arg;
    $post->save();
}
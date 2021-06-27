<?php

namespace App\Http\Controllers\Generic;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Laraish\WpSupport\Model\Taxonomy;

class Archive extends Controller
{
    public function index()
    {
        $post = new Post();
        dd($post->query([
            // 'cat' => 1,
            'post_author' => 2
        ]));
    }
}

<?php

namespace App\Controllers;

class PostController extends BaseController
{
    public function index()
    {
        $posts = db()->query("select p.*, pd.* from posts p join post_description
                              pd on p.id = pd.post_id 
                              where pd.lang_id = ?", [app()->get('lang')['id']])->get();

        return view('post/index', [
            'posts' => $posts,
        ]);
    }
}

<?php

namespace App\Controllers;

use App\Models\User;

class PostController
{
    public function single()
    {
        global $request;
        $author_id = 7;
        // $userModel = new User();
        // $author = $userModel->find($author_id);
        $author = (new User())->find($author_id);
        var_dump($author);

        $slug = $request->get_route_param('slug');
        echo "slug: $slug";
    }

    public function comment()
    {
        global $request;
        $slug = $request->get_route_param('slug');
        $cid = $request->get_route_param('cid');
        echo "slug: $slug <br> comment_id: $cid";
    }
}

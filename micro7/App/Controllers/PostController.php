<?php

namespace App\Controllers;

use App\Models\User;

class PostController
{
    public function single()
    {
        global $request;
        // $author_id = 9;
        // $userModel = new User();
        // $author = $userModel->find($author_id);

        // $author = (new User())->find($author_id);

        // $author = new User($author_id);

        // $user = (new User())->find($author_id);

        // var_dump($user->getattributes());

        // $user = new User(9);
        // var_dump($user->email);

        // $name = (new User(3))->name;
        // var_dump($name);

        $name = (new User(3))->remove(); # next session... :)
        $name = (new User(3))->save(); # next session... :)
        var_dump($name);

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

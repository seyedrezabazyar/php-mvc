<?php

namespace App\Controllers;

use App\Models\User;

class PostController
{
    public function single()
    {
        global $request;

        // $name = (new User(3))->name;
        // var_dump($name);

        $user = new User(3);
        // $result = $user->remove();

        $user->name = 'Sara';
        $user->email = 'sara@gmail.com';
        $user->password = 'sarasara';
        // $user->save();

        var_dump($user->save()->name);

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

<?php

namespace App\Middleware;

use App\Middleware\Contract\MiddlewareInterface;

class BlockIE implements MiddlewareInterface
{
    public function handle()
    {
        global $request;
        // var_dump($request);
        die('BlockIE');
    }
}

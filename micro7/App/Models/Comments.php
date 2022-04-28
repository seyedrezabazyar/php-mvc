<?php

namespace App\Models;

use App\Models\Contracts\MysqlBaseModel;

class Comment extends MysqlBaseModel
{
    protected $table = 'comments';
}

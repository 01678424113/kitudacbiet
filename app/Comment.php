<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public static $INACTIVE = 0;
    public static $ACTIVE = 1;
}

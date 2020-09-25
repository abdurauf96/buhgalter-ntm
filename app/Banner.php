<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Banner extends Model
{
    use Translatable;
    protected $translatable=['title', 'desc', 'button'];
}

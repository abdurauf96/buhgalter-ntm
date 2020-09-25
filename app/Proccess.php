<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
class Proccess extends Model
{
    use Translatable;
    protected $translatable=['title', 'desc'];
}

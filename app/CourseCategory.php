<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
class CourseCategory extends Model
{
    use Translatable;
    protected $translatable=['title'];

    public function courses()
    {
        return $this->hasMany(Course::class, 'category_id');
    }
}

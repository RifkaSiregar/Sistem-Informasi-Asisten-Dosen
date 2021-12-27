<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NestedSet;


class CourseOwner extends Model
{
    protected $table = 'course_owner';
    protected $fillable = ['name','curriculum','level','description','status'];
    public function child(){

        return $this->hasMany('App\Models\CourseOwner', 'parent_id');

    }
}

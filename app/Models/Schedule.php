<?php

namespace App\Models;
use App\Models\Grade;
use App\Models\Teacher;
use App\Models\Period;
use App\Models\Subject;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Schedule extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = [];

    public function grade(){

        return $this.hasMany('App\Models\Grade');

    }

    public function teacher(){

        return $this.hasMany('App\Models\Teacher');

    }

    public function period(){

        return $this.hasMany('App\Models\Period');

    }

    public function subject(){

        return $this.hasMany('App\Models\Subject');

    }
}

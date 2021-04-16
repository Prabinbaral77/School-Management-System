<?php

namespace App\Models;
use App\Models\Attendence;
use App\Models\Schedule;
use App\Models\Subject;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = [];

    public function attendence()
    {
        return $this->belongsTo('App\Models\Attendence');
    }

    public function schedule(){
        return $this->belongsTo('App\Models\Schedule');
    }

    public function subject(){
        return $this->hasMany('App\Models\Subject');
    }
}

<?php

namespace App\Models;
use App\Models\Schedule;
use App\Models\Subject;
use App\Models\Student;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Grade extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = [];
    
    public function schedule(){
        return $this->belongsTo('App\Models\Schedule');
    }

    public function subject(){
        return $this->belongsTo('App\Models\Subject');
    }
    public function student(){
        return $this->hasMany('App\Models\Student');
    }

}

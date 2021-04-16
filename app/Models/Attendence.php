<?php

namespace App\Models;
use App\Models\Student;
use App\Models\Date;
use App\Models\Teacher;
use App\Models\Staff;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Attendence extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = [];

    public function date()
    {
        return $this.hasOne('App\Models\Date');
    }

    public function student() {
        return $this->belongsTo('App\Models\Student');
    }

    public function teacher() {
        return $this->belongsTo(Teacher::class);
    }

    public function class() {
        return $this->belongsTo(Grade::class);
    }

}

<?php

namespace App\Models;
use App\Models\Attendence;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Grade;

class Student extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = [];

    public function attendence()
    {
        return $this->belongsTo('App\Models\Attendence');
    }
    public function grade(){
        
        return $this->belongsTo('App\Models\Grade');
    }
}

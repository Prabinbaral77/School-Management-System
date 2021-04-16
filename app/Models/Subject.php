<?php

namespace App\Models;
use App\Models\Teacher;
use App\Models\Grade;
use App\Models\Schedule;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subject extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = [];

    public function teacher()
    {
        return $this->belongsTo('App\Models\Teacher');
    }

    public function grade()
    {
        return $this->belongsTo('App\Models\Grade');
    }

    public function schedule()
    {
        return $this->belongsTo('App\Models\Schedule');
    }
}

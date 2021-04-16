<?php

namespace App\Models;
use App\Models\Schedule;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function schedule()
    {
        return $this->belongsTo('App\Models\Schedule');
    }
}

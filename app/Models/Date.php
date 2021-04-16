<?php

namespace App\Models;
use App\Models\Attendence;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Date extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function attendence(){

        return $this.belongsTo('App\Models\Attendence');

    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\briefs;

class task extends Model
{
    use HasFactory;
    public function brief(){
        return $this->belongsTo(briefs::class,'briefs_id','id');
    }
}

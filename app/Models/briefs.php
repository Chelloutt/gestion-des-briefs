<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\task;
class Briefs extends Model
{
    use HasFactory;
    public function task(){
        return $this->hasMany(task::class);
    }
}
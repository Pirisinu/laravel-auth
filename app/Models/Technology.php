<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Project;


class Technology extends Model
{
    protected $guarded = ['id'];
    public function technology(){
        return $this->belongsTo(Project::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /* protected $fillable = [
        'title',
        'start_date',
        'description',
    ]; */
    protected $guarded = ['id'];
}

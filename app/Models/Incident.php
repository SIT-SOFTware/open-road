<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incident extends Model
{
    use HasFactory;

    // would like to recommend a change to incident table
    // should directly connect instructors to incident
    // by adding a instructor_id foreign keyfield to Incident
    // will make desiging proper permissions easier
}

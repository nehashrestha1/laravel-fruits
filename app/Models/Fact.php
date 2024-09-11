<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fact extends Model
{
    use HasFactory;

    // Allow mass assignment on these fields
    protected $fillable = ['icon', 'title', 'number', 'status'];
}

?>

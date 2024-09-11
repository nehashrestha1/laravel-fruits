<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;
    protected $fillable=[
    Schema::create('testimonials', function (Blueprint $table) {
        $table->id();
        $table->string('message');
        $table->string('name');
        $table->string('position');
        $table->string('image')->nullable();
        $table->timestamps();
    })];
}



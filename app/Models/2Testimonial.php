<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class testimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'category',
        'name',
        'description',
        'price',
    ];

    protected $guarded = [];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}

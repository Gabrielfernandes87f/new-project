<?php

namespace App\Models;

use App\Models\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;
    use UuidTrait;

    public $incrementing = false;
    protected $keyType = 'uuid';


    protected $fillable = [
        'name',
        'image_capa',
        'image_album',
        'category',
        'description',

    ];

    protected $guarded = [];


}

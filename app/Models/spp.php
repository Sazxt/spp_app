<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class spp extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'spp';
    protected $keyType = 'string';
    protected $guarded = [];
    public $timestamps = false;
    public $incrementing = true;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class Agama extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $primaryKey = 'id_agama';
    protected $table = 'agama';
    protected $keyType = 'string';
    protected $guarded = [];
    public $timestamps = false;
    public $incrementing = true;
}

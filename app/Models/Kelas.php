<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class Kelas extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $primaryKey = 'id_kelas';
    protected $table = 'kelas';
    protected $keyType = 'string';
    protected $guarded = [];
    public $timestamps = false;
    public $incrementing = true;
}

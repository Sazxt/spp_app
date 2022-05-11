<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Siswa extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'siswa';
    protected $keyType = 'string';
    protected $guarded = [];
    public $timestamps = true;
    public $incrementing = true;
}

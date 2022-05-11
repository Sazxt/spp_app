<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Auth;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use PhpParser\Node\Expr\StaticCall;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // protected $fillable = [
    //     'name',
    //     'username',
    //     'password',
    //     'email',
    //     'level'
    // ];
    protected $keyType = 'string';
    protected $guarded = ["id"];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
    public $timestamps = true;
    public $incrementing = true;
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function levelfiter()
    {
        $level = Auth::user()->level;
        switch ($level) {
            case 1:
                $level = "Admin";
                break;

            case 2:
                $level = "staff_tu";
                break;

            case 3:
                $level = "Siswa";
                break;
            
            default:
                $level = "Unknow";
                break;
        }
        return $level;
    }
}

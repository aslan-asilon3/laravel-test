<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use DataTables;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'users';
    protected $guarded = [];

    protected $fillable = [
        'image',
        'name',
        'email',
        'password',
        'level',
        'phone',
        'address',
    ];


    public static function datatables($data_user)
    {
        $datatables = Datatables::of($data_user)
            ->editColumn('created_at', function(User $user) {
                if (!empty($user->created_at)) {
                    $result = date("d M Y", strtotime($user->created_at));
                } else {
                    $result = NULL;
                }

                return $result;
            })
            // ->orderColumns(['id_member', 'no_hp'], '-:column $1')
            ->make(true);

        return $datatables;
    }



    // protected $hidden = [
    //     'password',
    //     'remember_token',
    // ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];
}

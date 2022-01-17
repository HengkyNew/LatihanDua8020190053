<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Buku;

class buku extends Model
{
    protected $fillable = [
        'judul', 'pengarang',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $dates = [
        'created_at', 'updated_at',
    ];

    protected $guarded = [
        'created_at', 'updated_at',
    ];

}

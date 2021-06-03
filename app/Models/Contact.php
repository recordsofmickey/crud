<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'first_name',
        'last_name',
        'street',
        'house_nr',
        'zip_code',
        'city',
        'email',
        'phone_nr',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

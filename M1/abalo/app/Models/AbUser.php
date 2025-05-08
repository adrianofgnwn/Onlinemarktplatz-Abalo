<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbUser extends Model
{
    use HasFactory;

    protected $table = 'ab_user';

    // Erlaubte Felder, die massenweise zugewiesen werden können
    protected $fillable = [
        'ab_name',
        'ab_password',
        'ab_mail',
    ];

    public $timestamps = false;
}


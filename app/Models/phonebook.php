<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class phonebook extends Model
{
   // use HasFactory;

    public static function forUser(int $userId) : Collection{
        return Phonebook::where('user_id', $userId)->get();
    }
}

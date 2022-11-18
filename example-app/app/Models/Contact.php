<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Dyrynda\Database\Support\GeneratesUuid;

class Contact extends Model
{
    use HasFactory, SoftDeletes, GeneratesUuid;

    protected $fillable =  [
        'naam', 'straat', 'postcode', 'plaats'
    ];
}

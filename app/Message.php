<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
     protected $fillable = [
    	'id',
    	'message',
    	'name',
    	'address',
    	'email',
    	'subject',
    	'phone',
    	'status'
    ];

    protected $casts = [
    'created_at' => 'toDayDateTimeString',
    ];
}

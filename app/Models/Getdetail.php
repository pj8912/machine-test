<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Getdetail extends Model
{
    protected $fillable = [
        'first_name', 'last_name', 'phone_number', 'email', 'date_of_birth', 'address','ip_address', 'device_type', 'browser', 'user_agent'
    ];
    
    public function insertData($data)
    {
        return self::create($data);
    }
}

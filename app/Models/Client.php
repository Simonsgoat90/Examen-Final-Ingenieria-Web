<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'dni',
        'name',
        'adress',
        'phone_number',
        'email',
        'password',
    ];

    public function sales() {
        return $this->hasMany(Sale::class, 'client_id');
    }
}

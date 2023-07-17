<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_sale',
        'client_id',
        'id_product',
        'amount',
        'id_user',
    ];

    public function user() {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function client() {
        return $this->belongsTo(Client::class, 'client_id');
    }

    public function product() {
        return $this->belongsTo(Product::class, 'id_product');
    }
}

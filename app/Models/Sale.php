<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_sale',
        'id_product',
        'amount',
        'id_user',
    ];

    public function getTotalAttribute()
    {
        return $this->amount * $this->product->product_price;
    }

    public static function getTotalSales($userId)
    {
        return Sale::where('id_user', $userId)->get()->sum('total');
    }



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

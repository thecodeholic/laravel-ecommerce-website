<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'price', 'discount_pct', 'discounted_price'];

    public function getCreatedAt()
    {
        return datetime_format($this->created_at);
    }

    public function getUpdatedAt()
    {
        return datetime_format($this->updated_at);
    }

    public function getPrice()
    {
        return currency_format($this->price);
    }
}

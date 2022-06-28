<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function getCreatedAt()
    {
        return Carbon::parse($this->created_at)->format(config('app.datetime_format'));
    }

    public function getUpdatedAt()
    {
        return Carbon::parse($this->updated_at)->format(config('app.datetime_format'));
    }

    public function getPrice()
    {
        return config('app.currency_symbol').number_format($this->price, 2);
    }
}

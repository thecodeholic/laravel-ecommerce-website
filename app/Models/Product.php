<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Product extends Model
{
    use HasFactory;
    use HasSlug;

    protected $fillable = ['title', 'description', 'price', 'discount_pct', 'discounted_price'];

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

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
        return $this->price ? currency_format($this->price) : null;
    }

    public function getDiscountedPrice()
    {
        return $this->discounted_price ? currency_format($this->discounted_price) : null;
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pricing extends Model
{
    use HasFactory;
    protected $table = 'pricing';
    protected $fillable = ['category', 'price', 'status'];

    public function features():HasMany
    {
        return $this->hasMany(PricingFeature::class, 'pricing_id');
    }
}

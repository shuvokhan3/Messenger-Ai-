<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PricingFeature extends Model
{
    use HasFactory;

    protected $table = 'pricing_features';

    protected $fillable = ['pricing_id', 'feature_name'];

    public function pricing(): BelongsTo
    {
        return $this->belongsTo(Pricing::class,'pricing_id');
    }
}



<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

	public function scopeActive($query, $status=1): void
    {
        $query->where('isActivated', $status );
    }
}

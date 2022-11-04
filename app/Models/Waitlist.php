<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Waitlist extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'product_id',
        'name',
        'email',
    ];

     /**
     * Relationships
     *
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}

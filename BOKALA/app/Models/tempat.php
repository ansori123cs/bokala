<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tempat extends Model
{
    use HasFactory;
    protected $guarded = ['is'];
    public function category()
    {
        return $this->belongsTo(category::class);
    }
}

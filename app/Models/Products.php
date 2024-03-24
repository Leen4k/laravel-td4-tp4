<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Products extends Model
{
    use HasFactory;
    // protected $fillable = ['name', 'category_id','pricing','description','images'];
    protected $fillable = ['name', 'category_id','pricing','description', 'images'];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

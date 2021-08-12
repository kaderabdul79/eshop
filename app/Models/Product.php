<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name','description','size','color','category_id','image'];

    public function category(){
        $this->belongsTo(Category::class);
    }
}

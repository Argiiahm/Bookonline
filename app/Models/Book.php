<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    public function Category() {
        return $this->belongsTo(Category::class, 'Category_id');
    }

    public function author() {
        return $this->belongsTo(User::class,'User_id');
    }
}

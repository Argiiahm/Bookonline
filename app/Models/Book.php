<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Book extends Model
{
    use HasFactory, Sluggable;
    protected $with = ['Category','author'];
    // protected $fillable = ['nama_buku', 'slug', 'category_id', 'isi', 'user_id'];
    protected $guarded = [];

    

    
    public function scopeSearch($query, array $filter) {

        // if(isset($filter['search']) ? $filter['search'] : $filter['search']) {
        //     return $query->where('nama_buku','like', '%'. $filter['search'] . '%' );
        //             //  ->orWhere('isi','like','%' . request('search') . '%');
        //     }

            $query->when($filter['search'] ?? false, function($query, $search){
                return $query->where(function($query) use ($search) {
                      $query->where('nama_buku','like', '%'. $search . '%' );
                });
            });

            $query->when($filter['category'] ?? false, function($query, $category){
                 return $query->whereHas('category', function($query) use ($category) {
                    $query->where('slug', $category);
                 });
            });

            $query->when($filter['author'] ?? false, function($query, $author) {
                 return $query->whereHas('author', function($query) use ($author) {
                    $query->where('username', $author);
                 });
            });


        }
    
    public function Category() {
        return $this->belongsTo(Category::class, 'Category_id');
    }

    public function author() {
        return $this->belongsTo(User::class,'User_id');
    }

    public function getRouteKeyName() {  //Supaya Tidak Pake ID
          return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama_buku'
            ]
        ];
    }

}

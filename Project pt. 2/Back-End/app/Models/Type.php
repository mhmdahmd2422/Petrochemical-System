<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Type extends Model
{
    use HasFactory;


    protected $guarded = [];

//    public function vendor(){
//        return $this->hasOne(Vendor::class);
//    }
//    public function scopeFilter($query, array $filters)
//    {
//        $query->when($filters['search'] ?? false, fn($query, $search) =>
//        $query->where(fn($query) =>
//        $query->where('title', 'like', '%' . $search . '%')
//            ->orWhere('body', 'like', '%' . $search . '%')
//        )
//        );
//
//        $query->when($filters['category'] ?? false, fn($query, $category) =>
//        $query->whereHas('category', fn ($query) => $query->where('slug', $category))
//        );
//
//        $query->when($filters['author'] ?? false, fn($query, $author) =>
//        $query->whereHas('author', fn ($query) => $query->where('username', $author))
//        );
////            if($filters['search'] ?? false){
////            $query->where('title', 'like', '%' . request('search') . '%')
////                  ->orWhere('body', 'like', '%' . request('search') . '%');
////             }
//    }
//
//    public function category(){
//        return $this->belongsTo(Category::class);
//    }
//
//    public function author(){
//        return $this->belongsTo(User::class, 'user_id');
//    }
//}

}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    use HasFactory;

    protected $fillable = [
        'category_id',
        'slug',
        'title_uz',
        'title_ru',
        'title_en',
        'special_new',
        'description_uz',
        'description_ru',
        'description_en',
        'content_uz',
        'content_ru',
        'content_en',
        'image',
        'view',
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);    
    }

    public static function boot(){
        parent::boot();

        static::saving(function($post){
            $post->slug = \Str::slug($post->title_uz);
        });
    } 
    
}

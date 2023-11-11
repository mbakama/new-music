<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Str;

class Post extends Model
{
    use HasFactory;

   
        public function user()
        {
            return $this->belongsTo(User::class,'user_id');
        }
        public function comments()
        {
            return $this->hasMany(Comment::class);
        }
        public function categorie()
        {
            return $this->belongsTo(Categorie::class);
        }
        public function tags()
        {
            return $this->belongsToMany(Tag::class);
        }

        public function setSlugAttribute($value)
        {
            $slug = Str::slug($value);
            $orSlug = $slug;

            $count = 2;

            while (static::where('slug',$slug)->exists()) {
                $slug = $orSlug .'-'.$count;

                $count++;
            }
            $this->attributes['slug'] = $slug;
        }

        public function getFormattedDateAttribute()
        {
            return Carbon::parse($this->created_at)->format('M j, Y');
        }
    
}

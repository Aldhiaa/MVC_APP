<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Post extends Model
{
    use HasFactory;
    protected $fillable = [
      'title' , 
      'body' ,        
      'slug'   ,      
      'user_id'   ,  
      'published_at'  ,
  ];

      public function user()
  {
      return $this->belongsTo(User::class);
  }
  
}

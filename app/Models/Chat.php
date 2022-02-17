<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;
   protected $table = "chat_line";
   protected $fillable = ['id','from','to','text','created_at', 'updated_at'];
   protected $hidden =['created_at', 'updated_at'];
   public $timestamps = true;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function reactions()
    {
        return $this->hasMany(Reaction::class);
    }
    public function files()
    {
        return $this->hasMany(File::class);
    }
    public function images()
    {
        return $this->hasMany(Image::class);
    }
    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}

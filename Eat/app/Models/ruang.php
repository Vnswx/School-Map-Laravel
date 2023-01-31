<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ruang extends Model
{
    
        protected $table = "ruang";   
        protected $primarykey = "id";   
        protected $fillable = [
        'id', 'ruang'];
        
        public function ruang(){
            return $this->hasMany(gedunglab::class);
        }
}

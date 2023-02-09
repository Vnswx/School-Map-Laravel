<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lantai extends Model
{
    protected $table = "lantai";   
    protected $primarykey = "id";   
    protected $fillable = [
    'id', 'lantai'];

    public function lantai(){
        return $this->hasMany(gedunglab::class);
    }
}

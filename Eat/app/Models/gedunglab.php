<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gedunglab extends Model
{
    protected $table = "denah";   
    protected $primarykey = "id";   
    protected $fillable = [
    'id', 'ruang', 'walas', 'kelas', 'jammulai', 'jamakhir']; 
}

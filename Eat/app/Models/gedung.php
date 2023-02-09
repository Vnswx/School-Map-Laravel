<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gedung extends Model
{
    protected $table = "gedung";   
    protected $primarykey = "id";   
    protected $fillable = [
    'id', 'gedung'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MultipleImageUpload extends Model
{
    use HasFactory;
        
    protected $fillable = [
        'name', 'path' ,'heading'
      ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fileupload extends Model
{
    use HasFactory;

    protected $fillable = ['filename', 'extension', 'mime_type', 'size'];
}


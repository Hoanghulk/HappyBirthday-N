<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class demo_banner extends Model
{
    use HasFactory;

    protected $table = 'demo_banners';
    protected $guarded = ['id'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Morningnews extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'news_text'];
    protected $table = 'morning_news';
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fastfood extends Model
{
    use HasFactory;
    protected $table = 'fastfood_meter';
    protected $fillable = ['id_fastfood', 'id_user', 'burger', 'nugget', 'pizza', 'fried_chicken', 'friend_french', 'spaghetti', 'sosis', 'sandwich', 'ice_cream', 'cokelat', 'permen', 'donat', 'soda'];
    protected $primarykey = 'id_company';
    public $timestamps = false;
}

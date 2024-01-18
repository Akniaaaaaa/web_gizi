<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    use HasFactory;
    protected $table = 'tb_daily_journal';
    protected $fillable = ['id_user', 'fastfood', 'date_day', 'sum'];
    protected $primarykey = 'id_journal';
    public $timestamps = false;
}

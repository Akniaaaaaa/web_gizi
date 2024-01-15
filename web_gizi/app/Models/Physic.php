<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Physic extends Model
{
    use HasFactory;
    protected $table = 'activity_physic';
    protected $fillable = ['id_activity', 'id_user', 'sleep', 'sleeping', 'take_bath', 'eating', 'pray', 'walking', 'climbing', 'bike', 'motorcycle', 'drive', 'sit_down', 'shopping', 'dishes', 'parenting', 'sweeping_floor', 'swap_floor', 'wash_cloth', 'iron_cloth', 'reading', 'typing', 'writing'];
    protected $primarykey = 'id_company';
    public $timestamps = false;
}

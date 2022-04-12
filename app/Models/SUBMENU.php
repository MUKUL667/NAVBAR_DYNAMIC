<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SUBMENU extends Model
{
    use HasFactory;
    protected $table = 's_u_b_m_e_n_u_s';
    protected $fillable =[
        'name','menu_id','status','link'
    ];
}

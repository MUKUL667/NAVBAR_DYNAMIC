<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MENU extends Model
{
    use HasFactory;
    protected $table = '_m_e_n_u';
    protected $fillable =[
        'name','status','link','category','sub_category'
    ];
}
